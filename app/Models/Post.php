<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * 
 * @property int $id
 * @property string $contenu
 * @property int $auteur_id
 * @property int|null $media_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 * @property Media|null $media
 * @property Collection|Comment[] $comments
 * @property Collection|Reaction[] $reactions
 * @property Collection|Tag[] $tags
 * @property Collection|PostTranslation[] $post_translations
 *
 * @package App\Models
 */
class Post extends Model
{
	protected $table = 'posts';

	protected $casts = [
		'auteur_id' => 'int',
		'media_id' => 'int'
	];

	protected $fillable = [
		'contenu',
		'auteur_id',
		'media_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'auteur_id');
		
	}

	public function media()
	{
		return $this->belongsTo(Media::class);
	}

	public function comments()
	{
		return $this->hasMany(Comment::class);
	}

	public function reactions()
	{
		return $this->belongsToMany(Reaction::class, 'post_reactions')
					->withPivot('id', 'user_id')
					->withTimestamps();
	}

	public function tags()
	{
		return $this->belongsToMany(Tag::class, 'post_tags')
					->withPivot('id')
					->withTimestamps();
	}

	public function post_translations()
	{
		return $this->hasMany(PostTranslation::class);
	}
	
}
