<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Plaque;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\VehiculeEnFourriereNotification;
use App\Models\Alerte; // Assurez-vous d'ajouter cette importation

class ChercherEnFouriere extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:chercher-en-fouriere';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Vérifie si les plaques sont en fourrière';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $plaques = Plaque::orderByRaw('date_recherche IS NOT NULL, date_recherche ASC')->get();

        foreach ($plaques as $plaque) {
            // Vérifie si date_recherche est NULL ou si l'intervalle est respecté
            $doVerification = false;

            if ($plaque->date_recherche == NULL) {
                $doVerification = true;
            } elseif (!empty($plaque->frequence_verification_status) &&
                      now()->diffInMinutes($plaque->date_recherche) >= $plaque->user->frequence_verification_status) {
                $doVerification = true;
            }

            if ($doVerification) {
                try {
                    $response = Http::timeout(360) // Timeout de 6 minutes
                        ->post('http://77.68.95.236:5000/scrape', [
                            'license_plate' => $plaque->numero_plaque
                        ]);

                    if ($response->successful()) {
                        $data = $response->json();
                        $isInFourriere = !empty($data['en_fouriere']);
                        
                        // Si le véhicule était hors fourrière et devient en fourrière
                        if ($isInFourriere && $plaque->status != 'en_fouriere') {
                            // Enregistrer l'alerte même si l'e-mail échoue
                            Alerte::create([
                                'plaque_id' => $plaque->id,
                                'user_id' => $plaque->user_id,
                                'message' => 'Votre véhicule avec la plaque ' . $plaque->numero_plaque . ' est maintenant en fourrière. Adresse : ' . $plaque->adresse . ' Téléphone : ' . $plaque->phone_number . '.'
                            ]);

                            // Envoi du mail à l'utilisateur pour notifier que le véhicule est en fourrière
                            if ($plaque->user && filter_var($plaque->user->email, FILTER_VALIDATE_EMAIL)) {
                                try {
                                    Mail::to($plaque->user->email)->send(new VehiculeEnFourriereNotification($plaque));
                                } catch (\Exception $e) {
                                    Log::error('Erreur lors de l\'envoi de l\'email', [
                                        'plaque' => $plaque->numero_plaque,
                                        'error' => $e->getMessage()
                                    ]);
                                }
                            }
                        }

                        $plaque->update([
                            'status' => $isInFourriere ? "en_fouriere" : "libre",
                            'adresse' => $isInFourriere ? $data['adresse'] : "",
                            'phone_number' => $isInFourriere ? $data['telephone'] : "",
                            'date_recherche' => now() 
                        ]);
                    } else {
                        Log::error('Échec de la requête HTTP', [
                            'plaque' => $plaque->numero_plaque,
                            'response' => $response->body()
                        ]);
                    }
                } catch (\Exception $e) {
                    Log::error('Erreur lors de la requête HTTP', [
                        'plaque' => $plaque->numero_plaque,
                        'error' => $e->getMessage()
                    ]);
                }
            }
        }
    }
}
