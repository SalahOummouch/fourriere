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
        $user = Auth::user();
    
        if ($user->user_type !== 'admin') {
            // Plaques non archivées de l'utilisateur connecté
            $plaques = Plaque::where('company_id', $user->company_id)
                             ->where('archived', false)
                             ->with('user')
                             ->get();
        } else {
            // Toutes les plaques non archivées
            $plaques = Plaque::where('archived', false)
                             ->with('user')
                             ->get();
        }
    
        return view('plaques.index', compact('plaques'));
    }
    public function archives()
    {
        $user = Auth::user();

        if ($user->user_type !== 'admin') {
            // Plaques archivées de l'utilisateur connecté
            $plaques = Plaque::where('user_id', $user->id)
                            ->where('archived', true)
                            ->with('user')
                            ->get();
        } else {
            // Toutes les plaques archivées
            $plaques = Plaque::where('archived', true)
                            ->with('user')
                            ->get();
        }

        return view('plaques.archive', compact('plaques'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('plaques.create');
    }
    // Fonction pour nettoyer et normaliser la plaque
    private function normalizePlateNumber($plateNumber)
        {
            // Retirer tout ce qui n'est pas une lettre ou un chiffre
            $plateNumber = preg_replace('/[^A-Za-z0-9]/', '', $plateNumber);
            
            // Retourner la plaque formatée
            return strtoupper($plateNumber);
        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'plaqueNumbers' => 'required|array',
            'plaqueNumbers.*' => [
                'required',
                'string',
                'max:255',
                'regex:/^[A-Za-z0-9\-_]+$/',
                function ($attribute, $value, $fail) {
                    $cleaned = preg_replace('/[^A-Za-z0-9]/', '', $value);
                    if (strlen($cleaned) < 4) {
                        $fail('Le numéro de plaque doit contenir au moins 4 caractères alphanumériques.');
                    }
                },
            ],
        ]);
    
        $user = Auth::user();
        $user_id = $user->id;
        $company_id = $user->company_id;
        $adresse = "";
        $phone_number = "";
    
        $plaquesExistantes = [];
        $plaquesAjoutees = [];
    
        foreach ($request->plaqueNumbers as $numero_plaque) {
            $numero_normalise = $this->normalizePlateNumber($numero_plaque);
    
            // Vérifier si la plaque existe déjà dans la même entreprise
            $exists = Plaque::where('numero_plaque', $numero_normalise)
                            ->where('company_id', $company_id)
                            ->exists();
    
            if ($exists) {
                $plaquesExistantes[] = $numero_normalise;
            } else {
                Plaque::create([
                    'numero_plaque' => $numero_normalise,
                    'user_id' => $user_id,
                    'company_id' => $company_id,
                    'adresse' => $adresse,
                    'phone_number' => $phone_number,
                ]);
                $plaquesAjoutees[] = $numero_normalise;
            }
        }
    
        // Construire le message de retour
        $message = '';
        if (count($plaquesAjoutees)) {
            $message .= 'Plaques ajoutées avec succès : ' . implode(', ', $plaquesAjoutees) . '. ';
        }
        if (count($plaquesExistantes)) {
            $message .= 'Les plaques suivantes existent déjà : ' . implode(', ', $plaquesExistantes) . '.';
        }
    
        return redirect()->route('plaques.index')->with('success', $message);
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
            'archived' => false,
            'adresse' => "",
            'status' => "en_cours",
            'date_recherche' => null,
        ]);

        return redirect()->route('plaques.index')->with('info', 'Plaque relancée avec succès.');
    }
    public function archive(Plaque $plaque)
    {
        // dd($plaque);

        $plaque->update([
            'archived' => true,

        ]);

        return redirect()->route('plaques.index')->with('info', 'Plaque archivé avec succès.');
    }
    public function historique(){

        return view('plaques.historique', compact('plaques'));    }
}
