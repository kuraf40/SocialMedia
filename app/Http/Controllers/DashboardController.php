<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $activity = Notification::where('user_id', Auth::id())
            ->latest()
            ->take(10)
            ->get();
        return view('dashboard', compact('activity'));

    }
}
