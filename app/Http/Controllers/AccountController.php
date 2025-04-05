<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AccountController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('accounts.index', compact('users'));
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
}
