<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Follow;

class FollowsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $follows = Follow::all();
        return view('Follows.index', compact('follows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('follows.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'follower_id' => 'required|integer|exists:users,id',
            'followed_id' => 'required|integer|exists:users,id'
        ]);
        $follow = Follow::create($validated);
        return redirect()->route('follows.index', $follow->id)->with('success', 'Follow created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $follow = Follow::findOrFail($id);
        return view('follows.show', compact('follow'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $follow = Follow::findOrFail($id);
        return view('follows.edit', compact('follow'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'follower_id' => 'required|integer|exists:users,id',
            'followed_id' => 'required|integer|exists:users,id'
        ]);
        $follow = Follow::findOrFail($id);
        $follow->update($validated);
        return redirect()->route('follows.index', $follow->id)->with('success', 'Follow updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $follow = Follow::findOrFail($id);
        $follow->delete();
        return redirect()->route('follows.index')->with('success', 'Follow deleted successfully.');
    }
}
