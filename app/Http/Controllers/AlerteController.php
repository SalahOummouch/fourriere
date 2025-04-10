<?php

namespace App\Http\Controllers;

use App\Models\Alerte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AlerteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->user_type !== 'admin') {
            $alertes = Alerte::where('user_id', $user->id)
                ->with(['user', 'plaque'])
                ->get();
        } else {
            $alertes = Alerte::with(['user', 'plaque'])->get();
        }

        return view('alerte.index', compact('alertes'));
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
    public function show(Alerte $alerte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alerte $alerte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alerte $alerte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alerte $alerte)
    {
        //
    }
}
