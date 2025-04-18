<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;
use Illuminate\Support\Str;


class AccountController extends Controller
{
    public function index(Request $request)
    {
        $query = User::with('plaqueRecherches');
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

        $users = $query->orderBy('created_at', 'desc')->get();

        return view('accounts.index', compact('users'));
        }
        public function create()
        {

            return view('accounts.create');
        }

        public function toggleStatus(User $user)
        {
            $user->status = $user->status === 'active' ? 'inactive' : 'active';
            $user->save();

            return redirect()->route('accounts.index')->with('success', 'Statut mis à jour avec succès.');
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
            'password' => 'required|string|min:8|confirmed',
            'company_name' => 'nullable|string|max:255',
            'company_phone' => 'nullable|string|max:15',
            'company_address' => 'nullable|string|max:255',
        ]);

        // Si l'utilisateur est de type "entreprise", on associe l'entreprise
        $company = null;
        if ($request->user_type == 'editor') {
            $company = Company::create([
                'name' => $request->company_name,
                'phone' => $request->company_phone,
                'address' => $request->company_address,
            ]);
        }
        $username = Str::slug($request->first_name . '-' . $request->last_name . '-' . $request->company_name . '-' . $request->location_code);


        // Création de l'utilisateur
        $user = User::create([
            'username' => $username,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone,
            'user_type' => $request->user_type,
            'password' => bcrypt($request->password),
            'company_id' => $company ? $company->id : null, // Assignation de l'entreprise si applicable
        ]);

        return redirect()->route('accounts.index')->with('success', 'Utilisateur ajouté avec succès!');
    }

}
