<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CommentTranslation
 * 
 * @property int $id
 * @property string $contenu
 * @property int $comment_id
 * @property int $langue_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Comment $comment
 * @property Langue $langue
 *
 * @package App\Models
 */
class CommentTranslation extends Model
{
	protected $table = 'comment_translations';

	protected $casts = [
		'comment_id' => 'int',
		'langue_id' => 'int'
	];

	protected $fillable = [
		'contenu',
		'comment_id',
		'langue_id'
	];

	public function comment()
	{
		return $this->belongsTo(Comment::class);
	}

	public function langue()
	{
		return $this->belongsTo(Langue::class);
	}
}
