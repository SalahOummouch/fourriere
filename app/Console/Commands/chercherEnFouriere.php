<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Plaque;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

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
                      now()->diffInMinutes($plaque->date_recherche) >= $plaque->frequence_verification_status) {
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
                        $plaque->update([
                            'status' => !empty($data['en_fouriere']) ? "en_fouriere" : "libre",
                            'adresse' => !empty($data['en_fouriere']) ? $data->adresse : "",
                            'adresse' => !empty($data['en_fouriere']) ? $data->telephone : "",
                            'date_recherche' => now() // Met à jour la date de la dernière recherche
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
