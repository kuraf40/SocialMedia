<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostTranslation;

class Post_translationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post_translations = PostTranslation::all();
        return view('post_translations.index', compact('post_translations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post_translations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
            'post_id' => 'required|integer|exists:posts,id',
            'langue_id' => 'required|integer|exists:langues,id',
            'contenu' => 'required|string',

        ]);

        $post_translation = PostTranslation::create($validated);
        return redirect()->route('post_translations.index')->with('success', 'Post translation created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post_translation = PostTranslation::findOrFail($id);
        return view('post_translations.show', compact('post_translation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post_translation = PostTranslation::findOrFail($id);
        return view('post_translations.edit', compact('post_translation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated=$request->validate([
            'post_id' => 'required|integer|exists:posts,id',
            'langue_id' => 'required|integer|exists:langues,id',
            'contenu' => 'required|string',

        ]);

        $post_translation = PostTranslation::findOrFail($id);
        $post_translation->update($validated);
        return redirect()->route('post_translations.index')->with('success', 'Post translation updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post_translation = PostTranslation::findOrFail($id);
        $post_translation->delete();
        return redirect()->route('post_translations.index')->with('success', 'Post translation deleted successfully');
    }
}
