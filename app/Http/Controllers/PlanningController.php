<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;


class PlanningController extends Controller
{
    public function update(Request $request, Company $company)
{
    $planningData = $request->input('planning');

    foreach ($planningData as $jour => $horaires) {
        // Ne pas enregistrer si les deux champs sont vides
        if (empty($horaires['heure_debut']) || empty($horaires['heure_fin'])) {
            continue;
        }

        $company->plaqueRecherches()->updateOrCreate(
            ['jour' => $jour],
            [
                'heure_debut' => $horaires['heure_debut'],
                'heure_fin' => $horaires['heure_fin'],
            ]
        );
    }

    return redirect()->back()->with('success', 'Planning mis à jour avec succès.');
}

}
