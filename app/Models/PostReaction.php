<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PostReaction
 * 
 * @property int $id
 * @property int $user_id
 * @property int $post_id
 * @property int $reaction_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Post $post
 * @property Reaction $reaction
 * @property User $user
 *
 * @package App\Models
 */
class PostReaction extends Model
{
	protected $table = 'post_reactions';

	protected $casts = [
		'user_id' => 'int',
		'post_id' => 'int',
		'reaction_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'post_id',
		'reaction_id'
	];

	public function post()
	{
		return $this->belongsTo(Post::class);
	}

	public function reaction()
	{
		return $this->belongsTo(Reaction::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
