<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MediasController;
use App\Http\Controllers\Type_mediasController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\FollowsController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\Post_tagsController;
use App\Http\Controllers\ReactionsController;
use App\Http\Controllers\Post_reactionsController;
use App\Http\Controllers\Comment_reactionsController;
use App\Http\Controllers\LanguesController;
use App\Http\Controllers\Post_translationsController;
use App\Http\Controllers\Comment_translationsController;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth'])->group(function () {

Route::resource('users', UsersController::class);
Route::resource('medias', MediasController::class);
Route::resource('type_medias', Type_mediasController::class);
Route::resource('posts', PostsController::class);
Route::resource('comments', CommentsController::class);
Route::resource('follows', FollowsController::class);
Route::resource('notifications', NotificationsController::class);
Route::resource('messages', MessagesController::class);
Route::resource('tags', TagsController::class);
Route::resource('post_tags', Post_tagsController::class);  
Route::resource('reactions', ReactionsController::class);
Route::resource('post_reactions', Post_reactionsController::class);
Route::resource('comment_reactions', Comment_reactionsController::class);
Route::resource('langues', LanguesController::class);
Route::resource('post_translations', Post_translationsController::class);
Route::resource('comment_translations', Comment_translationsController::class);
//Route::get('/feed', [PostsController::class, 'feed'])->name('feed');

});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

require __DIR__.'/auth.php';