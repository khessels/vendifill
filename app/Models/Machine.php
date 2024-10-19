<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Machine
 *
 * @property string $id
 * @property string $stationary
 * @property int $location_id
 * @property int $machine_type_id
 * @property point|null $coordinates
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Location $location
 * @property MachineType $machine_type
 * @property Collection|Contract[] $contracts
 * @property Collection|MachineJournal[] $machine_journals
 * @property Collection|MachineKv[] $machine_kvs
 * @property Collection|Product[] $products
 * @property Collection|Slot[] $slots
 * @property Collection|Ticket[] $tickets
 *
 * @package App\Models
 */
class Machine extends Model
{
    use HasFactory;

	protected $table = 'machines';
	public $incrementing = false;

	protected $casts = [
		'location_id' => 'int',
		'machine_type_id' => 'int',
		'coordinates' => 'point'
	];

	protected $fillable = [
		'stationary',
		'location_id',
		'machine_type_id',
		'coordinates'
	];

	public function location()
	{
		return $this->belongsTo(Location::class);
	}

	public function machine_type()
	{
		return $this->belongsTo(MachineType::class);
	}

	public function contracts()
	{
		return $this->hasMany(Contract::class);
	}

	public function machine_journals()
	{
		return $this->hasMany(MachineJournal::class);
	}

	public function machine_kvs()
	{
		return $this->hasMany(MachineKv::class);
	}

	public function products()
	{
		return $this->belongsToMany(Product::class, 'machine_products')
					->withPivot('id', 'slot_id', 'count', 'price')
					->withTimestamps();
	}

	public function slots()
	{
		return $this->belongsToMany(Slot::class, 'machine_slots')
					->withPivot('id', 'row', 'col')
					->withTimestamps();
	}

	public function tickets()
	{
		return $this->hasMany(Ticket::class);
	}
}
