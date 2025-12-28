<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Follow
 * 
 * @property int $id
 * @property int $follower_id
 * @property int $followed_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class Follow extends Model
{
	protected $table = 'follows';

	protected $casts = [
		'follower_id' => 'int',
		'followed_id' => 'int'
	];

	protected $fillable = [
		'follower_id',
		'followed_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'follower_id');
	}
}
