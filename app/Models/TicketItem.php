<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TicketItem
 * 
 * @property int $id
 * @property int $ticket_id
 * @property int $product_id
 * @property int $quantity
 * 
 * @property Product $product
 * @property Ticket $ticket
 *
 * @package App\Models
 */
class TicketItem extends Model
{
	protected $table = 'ticket_items';
	public $timestamps = false;

	protected $casts = [
		'ticket_id' => 'int',
		'product_id' => 'int',
		'quantity' => 'int'
	];

	protected $fillable = [
		'ticket_id',
		'product_id',
		'quantity'
	];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}

	public function ticket()
	{
		return $this->belongsTo(Ticket::class);
	}
}
