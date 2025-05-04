<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Room
 * 
 * @property int $id
 * @property float $price
 * @property int $num
 * @property int $bed
 * @property string $dimensions
 * @property int $type_id
 * @property int $hotel_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted
 * 
 * @property Hotel $hotel
 * @property Type $type
 * @property Collection|Booking[] $bookings
 * @property Collection|Gallery[] $galleries
 * @property Collection|Service[] $services
 *
 * @package App\Models
 */
class Room extends Model
{
	use SoftDeletes;

	protected $guarded = [];

	protected $casts = [
		'price' => 'float',
		'num' => 'int',
		'bed' => 'int',
		'type_id' => 'int',
		'hotel_id' => 'int'
	];

	public function hotel()
	{
		return $this->belongsTo(Hotel::class);
	}

	public function type()
	{
		return $this->belongsTo(Type::class);
	}

	public function bookings()
	{
		return $this->hasMany(Booking::class);
	}

	public function galleries()
	{
		return $this->hasMany(Gallery::class);
	}

	public function services()
	{
		return $this->hasMany(Service::class);
	}
}
