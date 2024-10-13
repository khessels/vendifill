<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CountryCode
 * 
 * @property int $id
 * @property int $country_code
 * @property string $name
 * @property string $name_original
 * @property int $country_code_2
 * @property int $country_code_3
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class CountryCode extends Model
{
	protected $table = 'country_codes';

	protected $casts = [
		'country_code' => 'int',
		'country_code_2' => 'int',
		'country_code_3' => 'int'
	];

	protected $fillable = [
		'country_code',
		'name',
		'name_original',
		'country_code_2',
		'country_code_3'
	];
}
