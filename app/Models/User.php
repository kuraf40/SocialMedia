<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * 
 * @property int $id
 * @property string $nom
 * @property string $prenom
 * @property string $email
 * @property string $password
 * @property string $username
 * @property Carbon|null $email_verified_at
 * @property Carbon $date_naissance
 * @property Carbon $date_inscription
 * @property string $role
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|CommentReaction[] $comment_reactions
 * @property Collection|Comment[] $comments
 * @property Collection|Follow[] $follows
 * @property Collection|Message[] $messages
 * @property Collection|Notification[] $notifications
 * @property Collection|PostReaction[] $post_reactions
 * @property Collection|Post[] $posts
 *
 * @package App\Models
 */
class User extends Authenticatable 
{
	protected $table = 'users';

	protected $casts = [
		'email_verified_at' => 'datetime',
		'date_naissance' => 'datetime',
		'date_inscription' => 'datetime'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'nom',
		'prenom',
		'email',
		'password',
		'username',
		'email_verified_at',
		'date_naissance',
		'date_inscription',
		'role',
		'remember_token'
	];

	public function comment_reactions()
	{
		return $this->hasMany(CommentReaction::class);
	}

	public function comments()
	{
		return $this->hasMany(Comment::class, 'auteur_id');
	}

	public function follows()
	{
		return $this->hasMany(Follow::class, 'follower_id');
	}

	public function messages()
	{
		return $this->hasMany(Message::class, 'sender_id');
	}

	public function notifications()
	{
		return $this->hasMany(Notification::class);
	}

	public function post_reactions()
	{
		return $this->hasMany(PostReaction::class);
	}

	public function posts()
	{
		return $this->hasMany(Post::class, 'auteur_id');
	}
}
