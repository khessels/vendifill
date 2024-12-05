<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
/**
 * Class Driver
 *
 * @property int $id
 * @property int $user_id
 *
 * @property User $user
 *
 * @package App\Models
 */
class Driver extends Model
{
    use HasFactory;

	protected $table = 'drivers';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
