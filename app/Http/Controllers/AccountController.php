<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AccountController extends Controller
{
    private function authorizeAdmin()
    {
        $user = Auth::user();
        if ($user->user_type !== 'admin') {
            throw new NotFoundHttpException();
        }
    }

    public function index(Request $request)
    {
        $this->authorizeAdmin();

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

        return view('accounts.index', compact('users'));
    }
public function admin(Request $request)
{
    $this->authorizeAdmin();

    $query = Company::join('users', 'companies.id', '=', 'users.company_id')
                    ->where('user_type', 'admin')
                    ->select('users.*', 'companies.name as company_name'); // facultatif, si tu veux afficher le nom de la société

    $users = $query->orderBy('users.created_at', 'desc')->get();

    return view('accounts.admin', compact('users'));
}


    public function edit(User $user)
    {
        $this->authorizeAdmin();
        $user = Auth::user();
        $company = Company::where('id', $user->company_id)->first();
        // dd($user ,$company);
        $isCompanyAdmin = false;
        return view('accounts.edit', compact('user', 'company', 'isCompanyAdmin'));
    }

    public function update(Request $request, User $user)
    {
        $this->authorizeAdmin();

        $request->validate([
            
            'email' => 'required|email',
    
        ]);

        $user->update($request->all());

        return redirect()->route('accounts.index')->with('success', 'Utilisateur mis à jour avec succès.');
    }

    public function destroy(User $user)
    {
        $this->authorizeAdmin();

        $user->delete();
        return redirect()->route('accounts.index')->with('success', 'Utilisateur supprimé.');
    }

    public function updateFrequence(Request $request, User $user)
    {
        $this->authorizeAdmin();

        $request->validate([
            'frequence_verification_status' => 'required|in:30,60,120,300,720,1440,10080',
        ]);

        $user->update($request->all());

        return redirect()->route('accounts.index')->with('success', 'Fréquence de vérification mise à jour avec succès.');
    }

    public function store(Request $request)
    {
        $this->authorizeAdmin();

        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'nullable|string|max:15',
            'user_type' => 'required|string|in:admin,user,editor',
            'password' => 'required|string|min:8',
        ]);

        $baseUsername = Str::slug($request->first_name . '-' . $request->last_name . '-' . $request->company_name . '-' . $request->location_code);
        $username = $baseUsername;
        $counter = 1;

        while (DB::table('users')->where('username', $username)->exists()) {
            $username = $baseUsername . '-' . $counter;
            $counter++;
        }

        $user = User::create([
            'username' => $username,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'user_type' => $request->user_type,
            'password' => bcrypt($request->password),
            'company_id' => $request->company_id,
        ]);

        return redirect()->route('accounts.index')->with('success', 'Utilisateur ajouté avec succès!');
    }
    public function toggleStatus(User $user)
    {
        $this->authorizeAdmin();

        $user->status = $user->status === 'active' ? 'inactive' : 'active';
        $user->save();

        return redirect()->route('accounts.index')->with('success', 'Le statut de l\'utilisateur a été mis à jour.');
    }

}
