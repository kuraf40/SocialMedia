<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;

class MediasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medias = Media::all();
        return view('medias.index', compact('medias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('medias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'chemin' => 'required|string|max:255',
            'type_media_id' => 'required|integer|exists:type_medias,id'
        ]);

        $media = Media::create($validated);
        return redirect()->route('medias.index', $media->id)->with('success', 'Media créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $media = Media::findOrFail($id); 
        return view('medias.show', compact('media'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $media = Media::findOrFail($id);
      return view('medias.edit', compact('media'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'chemin' => 'required|string|max:255',
            'type_media_id' => 'required|integer|exists:type_medias,id'
        ]);

        $media = Media::findOrFail($id);
        $media->update($validated);
        return redirect()->route('medias.index', $media->id)->with('success', 'Media mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $media = Media::findOrFail($id);
        $media->delete();
        return redirect()->route('medias.index')->with('success', 'Media supprimé avec succès.');
    }
}
