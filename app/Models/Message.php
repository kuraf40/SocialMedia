<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Message
 * 
 * @property int $id
 * @property string $contenu
 * @property Carbon|null $read_at
 * @property int $sender_id
 * @property int $receiver_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class Message extends Model
{
	protected $table = 'messages';

	protected $casts = [
		'read_at' => 'datetime',
		'sender_id' => 'int',
		'receiver_id' => 'int'
	];

	protected $fillable = [
		'contenu',
		'read_at',
		'sender_id',
		'receiver_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'sender_id');
	}
}
