<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Typemedia;

class Type_mediasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type_medias = Typemedia::all();
        return view('Type_medias.index', compact('type_medias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('type_medias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255'
        ]);

        $type_media = Typemedia::create($validated);
        return redirect()->route('type_medias.index', $type_media->id)->with('success', 'Type de média créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $type_media = Typemedia::findOrFail($id); 
        return view('Type_medias.show', compact('type_media'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $type_media = Typemedia::findOrFail($id);
      return view('type_medias.edit', compact('type_media'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255'
        ]);

        $type_media = Typemedia::findOrFail($id);
        $type_media->update($validated);
        return redirect()->route('type_medias.index', $type_media->id)->with('success', 'Type de média mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $type_media = Typemedia::findOrFail($id);
        $type_media->delete();
        return redirect()->route('type_medias.index')->with('success', 'Type de média supprimé avec succès.');
    }
}
