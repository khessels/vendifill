<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
/**
 * Class MachineType
 *
 * @property int $id
 * @property string $machine_type
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|Machine[] $machines
 *
 * @package App\Models
 */
class MachineType extends Model
{
    use HasFactory;

	protected $table = 'machine_types';

	protected $fillable = [
		'machine_type'
	];

	public function machines()
	{
		return $this->hasMany(Machine::class);
	}
}
