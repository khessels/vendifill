<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Outlet
 * 
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property point $coordinates
 * @property string $contact
 * @property int $country_code
 * @property string $active
 * @property int $outlet_type_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property OutletType $outlet_type
 * @property User $user
 *
 * @package App\Models
 */
class Outlet extends Model
{
	protected $table = 'outlets';

	protected $casts = [
		'user_id' => 'int',
		'coordinates' => 'point',
		'country_code' => 'int',
		'outlet_type_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'name',
		'coordinates',
		'contact',
		'country_code',
		'active',
		'outlet_type_id'
	];

	public function outlet_type()
	{
		return $this->belongsTo(OutletType::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
