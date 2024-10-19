<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class MachineSlot
 *
 * @property int $id
 * @property string $machine_id
 * @property string $slot_id
 * @property int $row
 * @property int $col
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Machine $machine
 * @property Slot $slot
 *
 * @package App\Models
 */
class MachineSlot extends Model
{
    use HasFactory;

	protected $table = 'machine_slots';

	protected $casts = [
		'row' => 'int',
		'col' => 'int'
	];

	protected $fillable = [
		'machine_id',
		'slot_id',
		'row',
		'col'
	];

	public function machine()
	{
		return $this->belongsTo(Machine::class);
	}

	public function slot()
	{
		return $this->belongsTo(Slot::class);
	}
}
