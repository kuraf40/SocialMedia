<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Langue;

class LanguesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $langues = Langue::all();
        return view('langues.index', compact('langues'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('langues.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|string|max:10',
            'nom' => 'required|string|max:255',
            'locale' => 'required|string|max:10',
            'direction' => 'required|in:ltr,rtl'
        ]);
        $langue = Langue::create($validated);
        return redirect()->route('langues.index', $langue->id)->with('success', 'Langue créée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $langue = Langue::findOrFail($id);
        return view('langues.show', compact('langue'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $langue = Langue::findOrFail($id);
        return view('langues.edit', compact('langue'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'code' => 'required|string|max:10',
            'nom' => 'required|string|max:255',
            'locale' => 'required|string|max:10',
            'direction' => 'required|in:ltr,rtl'
        ]);
        $langue = Langue::findOrFail($id);
        $langue->update($validated);
        return redirect()->route('langues.index', $langue->id)->with('success', 'Langue mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $langue = Langue::findOrFail($id);
        $langue->delete();
        return redirect()->route('langues.index')->with('success', 'Langue supprimée avec succès.');
    }
}
