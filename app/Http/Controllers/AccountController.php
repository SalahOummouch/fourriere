<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;



class AccountController extends Controller
{
    public function index(Request $request)
    {
        $query = Company::join('users', 'companies.id', '=', 'users.company_id');
        
        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('username', 'like', '%' . $request->search . '%')
                ->orWhere('email', 'like', '%' . $request->search . '%')
                ->orWhere('first_name', 'like', '%' . $request->search . '%')
                ->orWhere('last_name', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('user_type')) {
            $query->where('user_type', $request->user_type);
        }

        $users = $query->orderBy('users.created_at', 'desc')->get();
        // dd($users);

        return view('accounts.index', compact('users'));
    }

    public function edit(User $user)
    {
        return view('accounts.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'first_name' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|email',
            'user_type' => 'required|in:admin,editor,user',
        ]);

        $user->update($request->all());

        return redirect()->route('accounts.index')->with('success', 'Utilisateur mis à jour avec succès.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('accounts.index')->with('success', 'Utilisateur supprimé.');
    }
    public function updateFrequence(Request $request, User $user)
    {
        // Validation de la fréquence
        $request->validate([
            'frequence_verification_status' => 'required|in:30, 60,120,300,720,1440,10080',
        ]);

        $user->update($request->all());

        // Redirection vers la page des comptes
        return redirect()->route('accounts.index')->with('success', 'Fréquence de vérification mise à jour avec succès.');
    }
    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'nullable|string|max:15',
            'user_type' => 'required|string|in:admin,user,editor',
            'password' => 'required|string|min:8',
  
        ]);

        // Si l'utilisateur est de type "entreprise", on associe l'entreprise

    // Générer un username slug de base
    $baseUsername = Str::slug($request->first_name . '-' . $request->last_name . '-' . $request->company_name . '-' . $request->location_code);

    $username = $baseUsername;
    $counter = 1;

    // Vérifier si le username existe déjà et en générer un unique
    while (DB::table('users')->where('username', $username)->exists()) {
        $username = $baseUsername . '-' . $counter;
        $counter++;
    }

        // Création de l'utilisateur
        $user = User::create([
            'username' => $username,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'user_type' => $request->user_type,
            'password' => bcrypt($request->password),
            'company_id' => $request->company_id , // Assignation de l'entreprise si applicable
        ]);

        return redirect()->route('accounts.index')->with('success', 'Utilisateur ajouté avec succès!');
    }

}
