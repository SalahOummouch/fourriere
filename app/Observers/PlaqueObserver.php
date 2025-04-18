<?php

namespace App\Observers;

use App\Models\Plaque;
use App\Models\Historique;

class PlaqueObserver
{
    /**
     * Handle the Plaque "created" event.
     */
    public function created(Plaque $plaque): void
    {
        Historique::create([
            'user_id' => $plaque->user_id,
            'plaque_id' => $plaque->id,
            'status' => $plaque->status,
            'adresse' => $plaque->adresse,
            'archived' => $plaque->archived,
            'telephone' => $plaque->user->phone_number ?? 'N/A',
            'date_recherche' => $plaque->date_recherche,
        ]);
    }

    /**
     * Handle the Plaque "updated" event.
     */
    public function updated(Plaque $plaque)
    {
        Historique::create([
            'user_id' => $plaque->user_id,
            'plaque_id' => $plaque->id,
            'status' => $plaque->status,
            'adresse' => $plaque->adresse,
            'archived' => $plaque->archived,
            'telephone' => $plaque->user->phone_number ?? 'N/A',
            'date_recherche' => $plaque->date_recherche,
        ]);
    }

    /**
     * Handle the Plaque "deleted" event.
     */
    public function deleted(Plaque $plaque): void
    {
        //
    }

    /**
     * Handle the Plaque "restored" event.
     */
    public function restored(Plaque $plaque): void
    {
        //
    }

    /**
     * Handle the Plaque "force deleted" event.
     */
    public function forceDeleted(Plaque $plaque): void
    {
        //
    }
}
