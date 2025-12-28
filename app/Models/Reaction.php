<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Reaction
 * 
 * @property int $id
 * @property string $nom
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Comment[] $comments
 * @property Collection|Post[] $posts
 *
 * @package App\Models
 */
class Reaction extends Model
{
	protected $table = 'reactions';

	protected $fillable = [
		'nom'
	];

	public function comments()
	{
		return $this->belongsToMany(Comment::class, 'comment_reactions')
					->withPivot('id', 'user_id')
					->withTimestamps();
	}

	public function posts()
	{
		return $this->belongsToMany(Post::class, 'post_reactions')
					->withPivot('id', 'user_id')
					->withTimestamps();
	}
}
