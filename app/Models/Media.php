<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Media
 * 
 * @property int $id
 * @property string $chemin
 * @property int $type_media_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property TypeMedia $type_media
 * @property Collection|Post[] $posts
 *
 * @package App\Models
 */
class Media extends Model
{
	protected $table = 'medias';

	protected $casts = [
		'type_media_id' => 'int'
	];

	protected $fillable = [
		'chemin',
		'type_media_id'
	];

	public function type_media()
	{
		return $this->belongsTo(TypeMedia::class);
	}

	public function posts()
	{
		return $this->hasMany(Post::class);
	}
}
