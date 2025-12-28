<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PostTranslation
 * 
 * @property int $id
 * @property string $contenu
 * @property int $post_id
 * @property int $langue_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Langue $langue
 * @property Post $post
 *
 * @package App\Models
 */
class PostTranslation extends Model
{
	protected $table = 'post_translations';

	protected $casts = [
		'post_id' => 'int',
		'langue_id' => 'int'
	];

	protected $fillable = [
		'contenu',
		'post_id',
		'langue_id'
	];

	public function langue()
	{
		return $this->belongsTo(Langue::class);
	}

	public function post()
	{
		return $this->belongsTo(Post::class);
	}
}
