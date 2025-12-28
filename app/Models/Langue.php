<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Langue
 * 
 * @property int $id
 * @property string $code
 * @property string $nom
 * @property string|null $locale
 * @property string $direction
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|CommentTranslation[] $comment_translations
 * @property Collection|PostTranslation[] $post_translations
 *
 * @package App\Models
 */
class Langue extends Model
{
	protected $table = 'langues';

	protected $fillable = [
		'code',
		'nom',
		'locale',
		'direction'
	];

	public function comment_translations()
	{
		return $this->hasMany(CommentTranslation::class);
	}

	public function post_translations()
	{
		return $this->hasMany(PostTranslation::class);
	}
}
