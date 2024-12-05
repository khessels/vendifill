<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SlotKv
 *
 * @property int $id
 * @property string $slot_id
 * @property string $key
 * @property string|null $value
 * @property array|null $json
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Slot $slot
 *
 * @package App\Models
 */
class SlotKv extends Model
{
    use HasFactory;

	protected $table = 'slot_kv';

	protected $casts = [
		'json' => 'json'
	];

	protected $fillable = [
		'slot_id',
		'key',
		'value',
		'json'
	];

	public function slot()
	{
		return $this->belongsTo(Slot::class);
	}
}
