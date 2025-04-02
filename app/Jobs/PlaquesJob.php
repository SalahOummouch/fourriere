<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class PlaquesJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $plaques = Plaque::All();
        foreach ($plaques as $plaque) {
            if($plaque->status == "en_cours" || ($plaque-> frequence_verification_status - $plaque -> date_recherche ->minutes)){
                $response = Http::timeout(360) // Timeout de 3 minutes
                    ->post('http://localhost:5000/scrape', [
                        'license_plate' => $plaque -> numero_plaque
                    ]);

                if ($response->successful()) {


                } else {
                    // return response()->json(['error' => 'Erreur lors de la communication avec le service de fourrière'], 500);
            }

            }



        }

    }
}
