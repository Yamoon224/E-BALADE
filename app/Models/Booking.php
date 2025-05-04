<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Booking
 * 
 * @property int $id
 * @property string $customer
 * @property string $phone
 * @property string|null $email
 * @property string $card
 * @property string $numcard
 * @property int $duration
 * @property float|null $paid
 * @property float|null $discount
 * @property string|null $method
 * @property int|null $guests
 * @property int $room_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted
 * 
 * @property Room $room
 *
 * @package App\Models
 */
class Booking extends Model
{
	use SoftDeletes;
	
	protected $casts = [
		'duration' => 'int',
		'paid' => 'float',
		'discount' => 'float',
		'guests' => 'int',
		'room_id' => 'int',
	];

	protected $guarded = [];

	public function room()
	{
		return $this->belongsTo(Room::class);
	}
}
