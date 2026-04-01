<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'contenu' => 'required|string',
            'auteur_id' => 'required|integer|exists:users,id',
            'media_id' => 'required|integer|exists:medias,id'
        ]);
        $post = Post::create($validated);
        return redirect()->route('posts.index', $post->id)->with('success', 'Post créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $validated = $request->validate([
        'contenu' => 'required|string',
        'auteur_id' => 'required|integer|exists:users,id',
        'media_id' => 'required|integer|exists:medias,id'
       ]);
       $post = Post::findOrFail($id);
       $post->update($validated);
       return redirect()->route('posts.index', $post->id)->with('success', 'Post mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post supprimé avec succès.');
    }

    public function feed()
    {
       $user = Auth::user();
       $posts = Post::whereIn('auteur_id', function($query) use ($user) {
           $query->select('followed_id')
                 ->from('follows')
                 ->where('follower_id', $user->id);
       })->orWhere('auteur_id', $user->id)
       ->with('user')
       ->latest()
       ->paginate(10);
       return response()->json($posts);
    }
}
