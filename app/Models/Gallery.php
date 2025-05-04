<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Gallery
 * 
 * @property int $id
 * @property string $photo
 * @property int $room_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted
 * 
 * @property Room $room
 *
 * @package App\Models
 */
class Gallery extends Model
{
	use SoftDeletes;

	protected $guarded = [];

	protected $casts = [
		'room_id' => 'int',
		'deleted' => 'datetime'
	];

	public function room()
	{
		return $this->belongsTo(Room::class);
	}
}
