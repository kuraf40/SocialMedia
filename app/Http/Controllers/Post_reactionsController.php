<?php

namespace App\Http\Controllers;

use App\Models\PostReaction;
use Illuminate\Http\Request;

class Post_reactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post_reactions = PostReaction::all();
        return view('post_reactions.index', compact('post_reactions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post_reactions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer|exists:users,id',
            'post_id' => 'required|integer|exists:posts,id',
            'reaction_id' => 'required|integer|exists:reactions,id',
        ]);
        $post_reaction = PostReaction::create($validated);
        return redirect()->route('post_reactions.index')->with('success', 'Post-Reaction association created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post_reaction = PostReaction::findOrFail($id);
        return view('post_reactions.show', compact('post_reaction'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post_reaction = PostReaction::findOrFail($id);
        return view('post_reactions.edit', compact('post_reaction'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer|exists:users,id',
            'post_id' => 'required|integer|exists:posts,id',
            'reaction_id' => 'required|integer|exists:reactions,id',
        ]);
        $post_reaction = PostReaction::findOrFail($id);
        $post_reaction->update($validated);
        return redirect()->route('post_reactions.index')->with('success', 'Post-Reaction association updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post_reaction = PostReaction::findOrFail($id);
        $post_reaction->delete();
        return redirect()->route('post_reactions.index')->with('success', 'Post-Reaction association deleted successfully.');
    }
}
