<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MachineKv
 * 
 * @property int $id
 * @property string $machine_id
 * @property string $key
 * @property string|null $value
 * @property array|null $json
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Machine $machine
 *
 * @package App\Models
 */
class MachineKv extends Model
{
	protected $table = 'machine_kv';

	protected $casts = [
		'json' => 'json'
	];

	protected $fillable = [
		'machine_id',
		'key',
		'value',
		'json'
	];

	public function machine()
	{
		return $this->belongsTo(Machine::class);
	}
}
