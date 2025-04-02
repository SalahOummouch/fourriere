<?php

namespace App\Http\Controllers;

use App\Models\Historique;
use Illuminate\Http\Request;
use App\Models\Plaque;
use Illuminate\Support\Facades\Auth;


class HistoriqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Plaque $plaque)
    {
        // Récupérer l'utilisateur connecté
        $user = Auth::user();

        // Vérifier si la plaque existe
        if (!$plaque) {
            return redirect()->route('plaques.index')->with('error', 'Plaque not found');
        }

        // Si l'utilisateur n'est pas un admin, afficher ses propres historiques de plaques
        if ($user->user_type !== 'admin') {
            // Afficher uniquement les historiques associés à l'utilisateur et la plaque
            $historiques = Historique::where('user_id', $user->id)
                                    ->where('plaque_id', $plaque->id)
                                    ->get();
        } else {
            // Si l'utilisateur est un admin, afficher tous les historiques associés à la plaque
            $historiques = Historique::where('plaque_id', $plaque->id)->get();
        }
        $historiques = $historiques->reverse();


        // Retourner la vue avec les historiques récupérés
        // dd($historiques);

        return view('plaques.historique', compact('historiques'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Historique $historique)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Historique $historique)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Historique $historique)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Historique $historique)
    {
        //
    }
}
