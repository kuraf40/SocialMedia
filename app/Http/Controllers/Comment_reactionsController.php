<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommentReaction;

class Comment_reactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comment_reactions = CommentReaction::all();
        return view('comment_reactions.index', compact('comment_reactions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comment_reactions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'comment_id' => 'required|integer',
            'user_id' => 'required|integer',
            'reaction_id' => 'required|string|max:50',
        ]);

        CommentReaction::create($validated);
        return redirect()->route('comment_reactions.index')->with('success', 'Comment reaction created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comment_reaction = CommentReaction::findOrFail($id);
        return view('comment_reactions.show', compact('comment_reaction'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comment_reaction = CommentReaction::findOrFail($id);
        return view('comment_reactions.edit', compact('comment_reaction'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'comment_id' => 'required|integer',
            'user_id' => 'required|integer',
            'reaction_id' => 'required|string|max:50',
        ]);
        $comment_reaction = CommentReaction::FindOrFail($id);
        $comment_reaction->update($validated);
        return redirect()->route('comment_reactions.index')->with('success', 'Comment reaction updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comment_reaction = CommentReaction::findOrFail($id);
        $comment_reaction->delete();
        return redirect()->route('comment_reactions.index')->with('success', 'Comment reaction deleted successfully.');
    }
}
