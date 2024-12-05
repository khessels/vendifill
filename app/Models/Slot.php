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
 * Class Slot
 *
 * @property string $id
 * @property int $product_count
 * @property int $max_product_count
 * @property int $slot_type_id
 * @property int $product_id
 * @property float $price
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Product $product
 * @property SlotType $slot_type
 * @property Collection|MachineProduct[] $machine_products
 * @property Collection|Machine[] $machines
 * @property Collection|SlotKv[] $slot_kvs
 *
 * @package App\Models
 */
class Slot extends Model
{
    use HasFactory;

	protected $table = 'slots';
	public $incrementing = false;

	protected $casts = [
		'product_count' => 'int',
		'max_product_count' => 'int',
		'slot_type_id' => 'int',
		'product_id' => 'int',
		'price' => 'float'
	];

	protected $fillable = [
		'product_count',
		'max_product_count',
		'slot_type_id',
		'product_id',
		'price'
	];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}

	public function slot_type()
	{
		return $this->belongsTo(SlotType::class);
	}

	public function machine_products()
	{
		return $this->hasMany(MachineProduct::class);
	}

	public function machines()
	{
		return $this->belongsToMany(Machine::class, 'machine_slots')
					->withPivot('id', 'row', 'col')
					->withTimestamps();
	}

	public function slot_kvs()
	{
		return $this->hasMany(SlotKv::class);
	}
}
