<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MachineProduct
 * 
 * @property int $id
 * @property int $product_id
 * @property string $machine_id
 * @property string $slot_id
 * @property int $count
 * @property float $price
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Machine $machine
 * @property Product $product
 * @property Slot $slot
 *
 * @package App\Models
 */
class MachineProduct extends Model
{
	protected $table = 'machine_products';

	protected $casts = [
		'product_id' => 'int',
		'count' => 'int',
		'price' => 'float'
	];

	protected $fillable = [
		'product_id',
		'machine_id',
		'slot_id',
		'count',
		'price'
	];

	public function machine()
	{
		return $this->belongsTo(Machine::class);
	}

	public function product()
	{
		return $this->belongsTo(Product::class);
	}

	public function slot()
	{
		return $this->belongsTo(Slot::class);
	}
}
