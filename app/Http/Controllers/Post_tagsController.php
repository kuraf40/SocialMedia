<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostTag;

class Post_tagsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post_tags = PostTag::all();
        return \view('post_tags.index', compact('post_tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post_tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'post_id' => 'required|integer|exists:posts,id',
            'tag_id' => 'required|integer|exists:tags,id',
        ]);

        $post_tag = PostTag::create($validated);
        return redirect()->route('post_tags.index')->with('success', 'Post-Tag association created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post_tag = PostTag::findOrFail($id);
        return view('post_tags.show', compact('post_tag'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post_tag = PostTag::findOrFail($id);
        return view('post_tags.edit', compact('post_tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'post_id' => 'required|integer|exists:posts,id',
            'tag_id' => 'required|integer|exists:tags,id',
        ]);

        $post_tags = PostTag::findOrFail($id);
        $post_tags->update($validated);

        return redirect()->route('post_tags.index')->with('success', 'Post-Tag association updated successfully.'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post_tag = PostTag::findOrFail($id);
        $post_tag->delete();

        return redirect()->route('post_tags.index')->with('success', 'Post-Tag association deleted successfully.');
    }
}
