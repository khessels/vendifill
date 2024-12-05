<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use MatanYadaev\EloquentSpatial\Objects\Point;
use MatanYadaev\EloquentSpatial\Traits\HasSpatial;

/**
 * Class Location
 *
 * @property int $id
 * @property string $name
 * @property string|null $address
 * @property string|null $city
 * @property string|null $zip
 * @property int $country_code
 * @property string|null $province
 * @property string|null $canton
 * @property string|null $phone_1
 * @property string|null $phone_2
 * @property string|null $fax
 * @property string|null $email
 * @property string|null $description
 * @property string $access
 * @property string $active
 * @property string|null $contact_details
 * @property string|null $managed_by
 * @property string|null $location_emergency
 * @property point $coordinates
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|Machine[] $machines
 *
 * @package App\Models
 */
class Location extends Model
{
    use HasFactory, HasSpatial;

	protected $table = 'locations';

	protected $casts = [
		'country_code' => 'int',
		'coordinates' =>  Point::class
	];

	protected $fillable = [
		'name',
		'address',
		'city',
		'zip',
		'country_code',
		'province',
		'canton',
		'phone_1',
		'phone_2',
		'fax',
		'email',
		'description',
		'access',
		'active',
		'contact_details',
		'managed_by',
		'location_emergency',
		'coordinates'
	];

	public function machines()
	{
		return $this->hasMany(Machine::class);
	}
}
