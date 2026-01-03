<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::all();
        return view('comments.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'texte' => 'required|string',
            'auteur_id' => 'required|integer|exists:users,id',
            'post_id' => 'required|integer|exists:posts,id'
        ]);
        $comment = Comment::create($validated);
        return redirect()->route('comments.index', $comment->id)->with('success', 'Commentaire créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comment = Comment::findOrFail($id);
        return view('comments.show', compact('comment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comment = Comment::findOrFail($id);
      return view('comments.edit', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'texte' => 'required|string',
            'auteur_id' => 'required|integer|exists:users,id',
            'post_id' => 'required|integer|exists:posts,id'
        ]);

        $comment = Comment::findOrFail($id);
        $comment->update($validated);
        return redirect()->route('comments.index', $comment->id)->with('success', 'Commentaire mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();
        return redirect()->route('comments.index')->with('success', 'Commentaire supprimé avec succès.');
    }
}
