<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Models\Plaque;
use App\Models\Alerte;
use App\Mail\VehiculeEnFourriereNotification;

class ChercherEnFouriere extends Command
{
    protected $signature = 'app:chercher-en-fourriere';
    protected $description = 'Vérifie si les plaques sont en fourrière';

    public function handle()
    {
        $plaques = Plaque::orderByRaw('date_recherche IS NOT NULL, date_recherche ASC')->get();

        foreach ($plaques as $plaque) {
            if ($this->doitEtreVerifie($plaque)) {
                $this->verifierPlaque($plaque);
            }
        }
    }

    private function doitEtreVerifie($plaque): bool
    {
        if (is_null($plaque->date_recherche)) return true;

        return !empty($plaque->frequence_verification_status)
            && now()->diffInMinutes($plaque->date_recherche) >= $plaque->user->frequence_verification_status;
    }

    private function verifierPlaque($plaque)
    {
        try {
            $response = Http::timeout(360)->post('http://77.68.95.236:5000/scrape', [
                'license_plate' => $plaque->numero_plaque
            ]);

            if (!$response->successful()) {
                Log::error('Échec de la requête HTTP', [
                    'plaque' => $plaque->numero_plaque,
                    'response' => $response->body()
                ]);
                return;
            }

            $data = $response->json();
            $isInFourriere = !empty($data['en_fouriere']);
            $ancienStatut = $plaque->status;

            $plaque->update([
                'status' => $isInFourriere ? 'en_fouriere' : 'libre',
                'adresse' => $isInFourriere ? $data['adresse'] : '',
                'phone_number' => $isInFourriere ? $data['telephone'] : '',
                'archived' => !$isInFourriere,
                'date_recherche' => now()
            ]);

            // ➤ Envoi du mail et enregistrement d'alerte uniquement si véhicule vient d'entrer en fourrière
            if ($isInFourriere && $ancienStatut !== 'en_fourriere') {
                $this->notifierUtilisateur($plaque);
            }

        } catch (\Exception $e) {
            Log::error('Erreur lors de la requête HTTP', [
                'plaque' => $plaque->numero_plaque,
                'error' => $e->getMessage()
            ]);
        }
    }

    private function notifierUtilisateur($plaque)
    {
        Alerte::create([
            'plaque_id' => $plaque->id,
            'user_id' => $plaque->user_id,
            'message' => "Votre véhicule avec la plaque {$plaque->numero_plaque} est maintenant en fourrière. Adresse : {$plaque->adresse} Téléphone : {$plaque->phone_number}."
        ]);

        if ($plaque->user && filter_var($plaque->user->email, FILTER_VALIDATE_EMAIL)) {
            try {
                Mail::to($plaque->user->email)->send(new VehiculeEnFourriereNotification($plaque));
                Mail::to("")->send(new VehiculeEnFourriereNotification($plaque));
            } catch (\Exception $e) {
                Log::error("Erreur lors de l'envoi de l'email", [
                    'plaque' => $plaque->numero_plaque,
                    'error' => $e->getMessage()
                ]);
            }
        }
    }
}
