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
 * Class SlotType
 *
 * @property int $id
 * @property string $slot_type
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|Slot[] $slots
 *
 * @package App\Models
 */
class SlotType extends Model
{
    use HasFactory;

	protected $table = 'slot_types';

	protected $fillable = [
		'slot_type'
	];

	public function slots()
	{
		return $this->hasMany(Slot::class);
	}
}
