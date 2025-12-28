<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CommentReaction
 * 
 * @property int $id
 * @property int $user_id
 * @property int $comment_id
 * @property int $reaction_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Comment $comment
 * @property Reaction $reaction
 * @property User $user
 *
 * @package App\Models
 */
class CommentReaction extends Model
{
	protected $table = 'comment_reactions';

	protected $casts = [
		'user_id' => 'int',
		'comment_id' => 'int',
		'reaction_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'comment_id',
		'reaction_id'
	];

	public function comment()
	{
		return $this->belongsTo(Comment::class);
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
