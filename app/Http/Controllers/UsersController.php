<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'prenom' => 'required|string|max:255',
            'password' => 'required|string|min:8',
            'username' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'date_naissance' => 'required|date',
            'date_inscription' => 'required|date'
        ]);
        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);
        return redirect()->route('users.index', $user->id)->with('success', 'Utilisateur cree avec succes .');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id); 
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id); 
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'prenom' => 'required|string|max:255',
            'password' => 'required|string|min:8',
            'username' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'date_naissance' => 'required|date',
            'date_inscription' => 'required|date|default:' . now()->toDateString()
        ]);

        $user = User::findOrFail($id);
        $user->update($validated);
        return redirect()->route('users.index', $user->id)->with('success', 'Information modifie avec succes .');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Utilisateur supprime avec succes .');
    }
}
