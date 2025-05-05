<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AccountController;


use App\Models\Company;


use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::with('plaqueRecherches')->get(); 
        return view('companies.index', compact('companies'));
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {
        // Valider les champs de l'entreprise
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:50',
            'status' => 'nullable|in:pending,active,inactive',
            'users.*.first_name' => 'required_with:users.*.email|string|max:100',
            'users.*.last_name' => 'required_with:users.*.email|string|max:100',
            'users.*.username' => 'required_with:users.*.email|string|max:100',
            'users.*.email' => 'required_with:users.*.first_name|email|max:255',
            'users.*.phone_number' => 'nullable|string|max:50',
            'users.*.password' => 'required_with:users.*.email|string|min:6',
        ]);
    
        // Créer l'entreprise
        $company = Company::create($request->only(['name', 'address', 'phone', 'status']));
    
        // Vérifie s’il y a des utilisateurs à créer
        if ($request->has('users')) {
            $accountController = app(AccountController::class);
    
            foreach ($request->input('users') as $userData) {
                // Ajouter l'ID de l'entreprise au tableau utilisateur
                $userData['company_id'] = $company->id;
                $userData['user_type'] = "user";
    
                // Créer une requête factice à partir des données utilisateur
                $userRequest = new Request($userData);
    
                // Appel à la méthode store du AccountController
                $accountController->store($userRequest);
            }
        }
    
        return redirect()->route('companies.index')->with('success', 'Entreprise et utilisateurs créés avec succès.');
    }
    
    public function edit(Company $company)
    {
        return view('companies.create', compact('company'));
    }

    public function update(Request $request, Company $company)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $company->update($request->all());

        return redirect()->route('companies.index')->with('success', 'Entreprise mise à jour.');
    }

    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('companies.index')->with('success', 'Entreprise supprimée.');
    }
}
