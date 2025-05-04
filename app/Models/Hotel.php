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
 * Class Hotel
 * 
 * @property int $id
 * @property string $name
 * @property string $type
 * @property string $address
 * @property int $pool
 * @property int $gym
 * @property int $parking
 * @property int $restaurant
 * @property int $capacity
 * @property int $category_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted
 * 
 * @property Hotel $hotel
 * @property Collection|Comment[] $comments
 * @property Collection|Faq[] $faqs
 * @property Collection|Hotel[] $hotels
 * @property Collection|Rate[] $rates
 * @property Collection|Room[] $rooms
 *
 * @package App\Models
 */
class Hotel extends Model
{
	use SoftDeletes;

	protected $guarded = [];

	protected $casts = [
		'pool' => 'int',
		'gym' => 'int',
		'parking' => 'int',
		'restaurant' => 'int',
		'capacity' => 'int',
		'category_id' => 'int'
	];

	public function hotel()
	{
		return $this->belongsTo(Hotel::class, 'category_id');
	}

	public function comments()
	{
		return $this->hasMany(Comment::class);
	}

	public function faqs()
	{
		return $this->hasMany(Faq::class);
	}

	public function hotels()
	{
		return $this->hasMany(Hotel::class, 'category_id');
	}

	public function rates()
	{
		return $this->hasMany(Rate::class);
	}

	public function rooms()
	{
		return $this->hasMany(Room::class);
	}
}
