<?php

namespace App\Listeners;

use App\Events\PlaqueAjoutee;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Artisan;


class VerifierPlaqueEnFouriere
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PlaqueAjoutee $event): void
    {
        Log::info('Exécution de la commande pour la plaque : ' . $event->plaque->numero_plaque);

        Artisan::call('app:chercher-en-fouriere');

        Log::info('Commande exécutée.');

    }
}
