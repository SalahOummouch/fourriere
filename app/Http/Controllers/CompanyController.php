<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AccountController;
use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CompanyController extends Controller
{
    private function authorizeAdmin()
    {
        $user = Auth::user();
        if (!$user || $user->user_type !== 'admin') {
            throw new NotFoundHttpException();
        }
    }

    public function index()
    {
        $this->authorizeAdmin();

        $companies = Company::with('plaqueRecherches')->get(); 
        return view('companies.index', compact('companies'));
    }

    public function create()
    {
        $this->authorizeAdmin();

        return view('companies.create');
    }

    public function store(Request $request)
    {
        $this->authorizeAdmin();

        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:50',
            'status' => 'nullable|in:pending,active,inactive',
            'users.*.first_name' => 'required_with:users.*.email|string|max:100',
            'users.*.last_name' => 'required_with:users.*.email|string|max:100',
            'users.*.email' => 'required_with:users.*.first_name|email|max:255',
            'users.*.phone_number' => 'nullable|string|max:50',
            'users.*.password' => 'required_with:users.*.email|string|min:6',
        ]);
    
        $company = Company::create($request->only(['name', 'address', 'phone', 'status']));
    
        if ($request->has('users')) {
            $accountController = app(AccountController::class);
    
            foreach ($request->input('users') as $userData) {
                $userData['company_id'] = $company->id;
                $userData['user_type'] = "user";
    
                $userRequest = new Request($userData);
                $accountController->store($userRequest);
            }
        }
    
        return redirect()->route('companies.index')->with('success', 'Entreprise et utilisateurs créés avec succès.');
    }
    
    public function edit(Company $company)
    {
        $this->authorizeAdmin();

        $users = User::where('company_id', $company->id)->get();
        return view('companies.create', compact('company', 'users'));
    }

    public function update(Request $request, Company $company)
    {
        $this->authorizeAdmin();

        $request->validate([
            'name' => 'required',
        ]);
    
        $company->update($request->all());
    
        if ($request->has('users')) {
            $accountController = app(AccountController::class);
    
            foreach ($request->input('users') as $userData) {
                $userData['company_id'] = $company->id;
                $userData['user_type'] = "user";
    
                $existingUser = User::where('email', $userData['email'])->first();
    
                if ($existingUser) {
                    if ($existingUser->company_id == $company->id) {
                        $existingUser->update($userData);
                    } else {
                        return redirect()->route('companies.index')->with('error', 'L\'utilisateur existe mais n\'appartient pas à cette entreprise.');
                    }
                } else {
                    $userRequest = new Request($userData);
                    $accountController->store($userRequest);
                }
            }
        }
    
        return redirect()->route('companies.index')->with('success', 'Entreprise mise à jour.');
    }
    
    public function destroy(Company $company)
    {
        $this->authorizeAdmin();

        $company->delete();
        return redirect()->route('companies.index')->with('success', 'Entreprise supprimée.');
    }
}
