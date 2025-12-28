<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 * 
 * @property int $id
 * @property string $texte
 * @property int $auteur_id
 * @property int $post_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 * @property Post $post
 * @property Collection|Reaction[] $reactions
 * @property Collection|CommentTranslation[] $comment_translations
 *
 * @package App\Models
 */
class Comment extends Model
{
	protected $table = 'comments';

	protected $casts = [
		'auteur_id' => 'int',
		'post_id' => 'int'
	];

	protected $fillable = [
		'texte',
		'auteur_id',
		'post_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'auteur_id');
	}

	public function post()
	{
		return $this->belongsTo(Post::class);
	}

	public function reactions()
	{
		return $this->belongsToMany(Reaction::class, 'comment_reactions')
					->withPivot('id', 'user_id')
					->withTimestamps();
	}

	public function comment_translations()
	{
		return $this->hasMany(CommentTranslation::class);
	}
}
