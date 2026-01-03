<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notifications = Notification::all();
        return view('notifications.index', compact('notifications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notifications.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|string|max:255',
            'data' => 'required|json',
            'read_at' => 'nullable|date',
            'user_id' => 'required|integer|exists:users,id'
        ]);
        $notification = Notification::create($validated);
        return redirect()->route('notifications.index', $notification->id)->with('success', 'Notification créée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $notification = Notification::findOrFail($id);
        return view('notifications.show', compact('notification'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $notification = Notification::findOrFail($id);
        return view('notifications.edit', compact('notification'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'type' => 'required|string|max:255',
            'titre' => 'required|string|max:255',
            'contenu' => 'required|string',
            'lien' => 'nullable|string|max:255',
            'read_at' => 'nullable|date',
            'user_id' => 'required|integer|exists:users,id'
        ]);
        $data = json_encode([ 'title' => $validated['titre'], 'message' => $validated['contenu'], 'url' => $validated['lien'] ?? null, ]);
        $notification = Notification::findOrFail($id);
        $notification->update($validated);
        return redirect()->route('notifications.index', $notification->id)->with('success', 'Notification mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $notification = Notification::findOrFail($id);
        $notification->delete();
        return redirect()->route('notifications.index')->with('success', 'Notification supprimée avec succès.');
    }
}
