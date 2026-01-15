<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reaction;

class ReactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reactions = Reaction::all();
        return view('reactions.index', compact('reactions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reactions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validared = $request->validate([
            'nom' => 'required|string',
        ]);
        $reaction = Reaction::create($validared);
        return redirect()->route('reactions.index')->with('success', 'Reaction created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $reaction = Reaction::findOrFail($id);
        return view('reactions.show', compact('reaction'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $reaction = Reaction::findOrFail($id);
        return view('reactions.edit', compact('reaction'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nom' => 'required|string',
        ]);
        $reaction = Reaction::findOrFail($id);
        $reaction->update($validated);
        return redirect()->route('reactions.index')->with('success', 'Reaction updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reaction = Reaction::findOrFail($id);
        $reaction->delete();
        return redirect()->route('reactions.index')->with('success', 'Reaction deleted successfully.');
    }
}
