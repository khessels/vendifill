<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property int $id
 * @property string $name
 * @property string $sku
 * @property string $cooling
 * @property string $active
 * @property float $msrp
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|Machine[] $machines
 * @property Collection|ProductKv[] $product_kvs
 * @property Collection|Slot[] $slots
 * @property Collection|TicketItem[] $ticket_items
 * @property Collection|Ticket[] $tickets
 *
 * @package App\Models
 */
class Product extends Model
{
    use HasFactory;
	protected $table = 'products';

	protected $casts = [
		'msrp' => 'float'
	];

	protected $fillable = [
		'name',
		'sku',
		'cooling',
		'active',
		'msrp'
	];

    public function machines()
	{
		return $this->belongsToMany(Machine::class, 'machine_products')
					->withPivot('id', 'slot_id', 'count', 'price')
					->withTimestamps();
	}

	public function product_kvs()
	{
		return $this->hasMany(ProductKv::class);
	}

	public function slots()
	{
		return $this->hasMany(Slot::class);
	}

	public function ticket_items()
	{
		return $this->hasMany(TicketItem::class);
	}

	public function tickets()
	{
		return $this->hasMany(Ticket::class);
	}
}
