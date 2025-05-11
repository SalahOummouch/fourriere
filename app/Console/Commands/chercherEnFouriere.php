<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Plaque;
use App\Models\PlaqueRecherche;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\VehiculeEnFourriereNotification;
use App\Models\Alerte;

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
            // Vérifier le planning de recherche
            $now = now();
            $companyId = $plaque->company_id; // Récupère l'ID de l'entreprise
            $day = strtolower($now->locale('fr')->dayName); // ex: lundi
            $time = $now->format('H:i:s');

            $planningDisponible = PlaqueRecherche::where('company_id', $companyId)
                ->where('jour', $day)
                ->where('heure_debut', '<=', $time)
                ->where('heure_fin', '>=', $time)
                ->exists();

            if (!$planningDisponible && $plaque->date_recherche == NULL) {
                continue; // Ignore cette plaque si elle est hors planning
            }

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
                    // Requête à l'API 'scrape'
                    $response = Http::timeout(360)
                        ->post('http://77.68.95.236:5000/scrape', [
                            'license_plate' => $plaque->numero_plaque
                        ]);

                    if ($response->successful()) {
                        $data = $response->json();
                        $isInFourriere = $data['en_fouriere'];
                        $plaque->update([
                            'status' => $isInFourriere ? "en_fourrière" : "libre",
                            'adresse' => $isInFourriere ? $data['adresse'] : "",
                            'phone_number' => $isInFourriere ? $data['telephone'] : "",
                            'archived' => $isInFourriere ? true : false,
                            'date_recherche' => now()
                        ]);

                        // Requête à l'API 'scrape1'
                        $scrape1Response = Http::timeout(360)
                            ->post('http://77.68.95.236:5000/scrape1', [
                                'license_plate' => $plaque->numero_plaque
                            ]);

                        if ($scrape1Response->successful()) {
                            $scrape1Data = $scrape1Response->json();
                            $isInFourriereFromScrape1 = $scrape1Data['en_fouriere'];

                            if ($isInFourriereFromScrape1) {
                                $plaque->update([
                                    'status' => "en_fourrière",
                                    'adresse' => $scrape1Data['adresse'] ?? $plaque->adresse,
                                    'phone_number' => $scrape1Data['telephone'] ?? $plaque->phone_number,
                                    'date_recherche' => now()
                                ]);
                            } else {
                                $plaque->update([
                                    'status' => "libre",
                                    'date_recherche' => now()
                                ]);
                            }
                        }

                        // Notification si le véhicule entre en fourrière
                        if ($isInFourriere && $plaque->status != 'en_fourrière') {
                            Alerte::create([
                                'plaque_id' => $plaque->id,
                                'user_id' => $plaque->user_id,
                                'message' => 'Votre véhicule avec la plaque ' . $plaque->numero_plaque . ' est maintenant en fourrière. Adresse : ' . $plaque->adresse . ' Téléphone : ' . $plaque->phone_number . '.'
                            ]);

                            // Récupérer tous les utilisateurs de la même entreprise
                            $users = $plaque->company->users; // Récupère tous les utilisateurs associés à cette entreprise

                            // Envoi de l'email à tous les utilisateurs de l'entreprise
                            foreach ($users as $user) {
                                // Vérification si l'email est valide
                                if ($user->email && filter_var($user->email, FILTER_VALIDATE_EMAIL)) {
                                    try {
                                        Mail::to($user->email)->send(new VehiculeEnFourriereNotification($plaque));
                                    } catch (\Exception $e) {
                                        Log::error('Erreur lors de l\'envoi de l\'email', [
                                            'plaque' => $plaque->numero_plaque,
                                            'user' => $user->email,
                                            'error' => $e->getMessage()
                                        ]);
                                    }
                                }
                            }
                        }
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
