<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ticket
 * 
 * @property int $id
 * @property string $machine_id
 * @property int $product_id
 * @property int $quantity
 * 
 * @property Machine $machine
 * @property Product $product
 * @property Collection|TicketItem[] $ticket_items
 *
 * @package App\Models
 */
class Ticket extends Model
{
	protected $table = 'tickets';
	public $timestamps = false;

	protected $casts = [
		'product_id' => 'int',
		'quantity' => 'int'
	];

	protected $fillable = [
		'machine_id',
		'product_id',
		'quantity'
	];

	public function machine()
	{
		return $this->belongsTo(Machine::class);
	}

	public function product()
	{
		return $this->belongsTo(Product::class);
	}

	public function ticket_items()
	{
		return $this->hasMany(TicketItem::class);
	}
}
