<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommentTranslation;

class Comment_translationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comment_translations = CommentTranslation::all();
        return view('comment_translations.index', compact('comment_translations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comment_translations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
            'comment_id' => 'required|integer|exists:comments,id',
            'langue_id' => 'required|integer|exists:langues,id',
            'contenu' => 'required|string',

        ]);

        $comment_translation = CommentTranslation::create($validated);
        return redirect()->route('comment_translations.index')->with('success', 'Comment translation created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comment_translation = CommentTranslation::findOrFail($id);
        return view('comment_translations.show', compact('comment_translation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comment_translation = CommentTranslation::findOrFail($id);
        return view('comment_translations.edit', compact('comment_translation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated=$request->validate([
            'comment_id' => 'required|integer|exists:comments,id',
            'langue_id' => 'required|integer|exists:langues,id',
            'contenu' => 'required|string',

        ]);

        $comment_translation = CommentTranslation::findOrFail($id);
        $comment_translation->update($validated);
        return redirect()->route('comment_translations.index')->with('success', 'Comment translation updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comment_translation = CommentTranslation::findOrFail($id);
        $comment_translation->delete();
        return redirect()->route('comment_translations.index')->with('success', 'Comment translation deleted successfully');
    }
}
