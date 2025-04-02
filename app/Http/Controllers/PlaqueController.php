<?php

namespace App\Http\Controllers;

use App\Models\Plaque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlaqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupérer l'utilisateur connecté
        $user = Auth::user();

        // Si l'utilisateur n'est pas un admin, afficher ses propres plaques
        if ($user->user_type !== 'admin') {
            $plaques = Plaque::where('user_id', $user->id)->with('user')->get();
        } else {
            // Si l'utilisateur est un admin, afficher toutes les plaques
            $plaques = Plaque::with('user')->get();
        }

        return view('plaques.index', compact('plaques'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('plaques.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $numero_plaque = $request->plaqueNumber;
        $user_id = Auth::id(); // Récupère l'ID de l'utilisateur connecté
        $adresse = "";

        Plaque::create([
            'numero_plaque' => $numero_plaque,
            'user_id' => $user_id,
            'adresse' => $adresse,
        ]);

        return redirect()->route('plaques.index')->with('success', 'Plaque ajoutée avec succès.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Plaque $plaque)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plaque $plaque)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plaque $plaque)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plaque $plaque)
    {
        $plaque->delete();
        return redirect()->route('plaques.index')->with('error', 'Plaque supprimée avec succès.');
    }
    public function relance(Plaque $plaque)
    {
        $plaque->update([
            'adresse' => "",
            'status' => "en_cours",
            'date_recherche' => null,
        ]);

        return redirect()->route('plaques.index')->with('info', 'Plaque relancée avec succès.');
    }
    public function historique(){

        return view('plaques.historique', compact('plaques'));    }
}
