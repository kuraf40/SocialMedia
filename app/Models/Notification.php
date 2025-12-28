<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Notification
 * 
 * @property int $id
 * @property string $type
 * @property array|null $data
 * @property Carbon|null $read_at
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class Notification extends Model
{
	protected $table = 'notifications';

	protected $casts = [
		'data' => 'json',
		'read_at' => 'datetime',
		'user_id' => 'int'
	];

	protected $fillable = [
		'type',
		'data',
		'read_at',
		'user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
