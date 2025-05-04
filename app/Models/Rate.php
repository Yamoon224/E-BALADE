<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Rate
 * 
 * @property int $id
 * @property int $note
 * @property int $hotel_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted
 * 
 * @property Hotel $hotel
 *
 * @package App\Models
 */
class Rate extends Model
{
	use SoftDeletes;

	protected $guarded = [];

	protected $casts = [
		'note' => 'int',
		'hotel_id' => 'int',
		'deleted' => 'datetime'
	];

	public function hotel()
	{
		return $this->belongsTo(Hotel::class);
	}
}
