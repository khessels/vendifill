<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CardBrand
 * 
 * @property int $id
 * @property string $name
 * @property Carbon|null $archived_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|CreditCard[] $credit_cards
 *
 * @package App\Models
 */
class CardBrand extends Model
{
	protected $table = 'card_brands';

	protected $casts = [
		'archived_at' => 'datetime'
	];

	protected $fillable = [
		'name',
		'archived_at'
	];

	public function credit_cards()
	{
		return $this->hasMany(CreditCard::class);
	}
}
