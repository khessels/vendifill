<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MachineJournal
 * 
 * @property int $id
 * @property string $machine_id
 * @property string $event
 * @property array|null $data
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Machine $machine
 *
 * @package App\Models
 */
class MachineJournal extends Model
{
	protected $table = 'machine_journal';

	protected $casts = [
		'data' => 'json'
	];

	protected $fillable = [
		'machine_id',
		'event',
		'data'
	];

	public function machine()
	{
		return $this->belongsTo(Machine::class);
	}
}
