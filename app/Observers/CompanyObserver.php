<?php

namespace App\Observers;

use App\Models\Company;

use App\Models\PlaqueRecherche;

    
class CompanyObserver
{
    /**
     * Handle the Company "created" event.
     *
     * @param  \App\Models\Company  $company
     * @return void
     */
    public function created(Company $company)
    {
// dd($company->id);
        // Jours de la semaine et heures
        $jours = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi'];
        $heure_debut = '08:00:00';
        $heure_fin = '16:00:00';

        // Insérer les horaires pour chaque jour du lundi au vendredi
        foreach ($jours as $jour) {
            PlaqueRecherche::create([
                'company_id' => $company->id,
                'jour' => $jour,
                'heure_debut' => $heure_debut,
                'heure_fin' => $heure_fin
            ]);
        }
    }

    /**
     * Handle the Company "updated" event.
     */
    public function updated(Company $company): void
    {
        //
    }

    /**
     * Handle the Company "deleted" event.
     */
    public function deleted(Company $company): void
    {
        //
    }

    /**
     * Handle the Company "restored" event.
     */
    public function restored(Company $company): void
    {
        //
    }

    /**
     * Handle the Company "force deleted" event.
     */
    public function forceDeleted(Company $company): void
    {
        //
    }
}
