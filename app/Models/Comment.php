<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Comment
 * 
 * @property int $id
 * @property string $message
 * @property int $hotel_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted
 * 
 * @property Hotel $hotel
 *
 * @package App\Models
 */
class Comment extends Model
{
	use SoftDeletes;

	protected $guarded = [];

	protected $casts = [
		'hotel_id' => 'int'
	];

	public function hotel()
	{
		return $this->belongsTo(Hotel::class);
	}
}
