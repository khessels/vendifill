<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CreditCard
 *
 * @property int $id
 * @property int $user_id
 * @property int $card_brand_id
 * @property string $cc_number
 * @property string $cc_mask
 * @property string $cc_year
 * @property string $cc_month
 * @property string $cc_name
 * @property string $cc_ccv
 * @property string $card
 * @property string $run_mode
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property CardBrand $card_brand
 * @property User $user
 *
 * @package App\Models
 */
class CreditCard extends Model
{
    use HasFactory;

	protected $table = 'credit_cards';

	protected $casts = [
		'user_id' => 'int',
		'card_brand_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'card_brand_id',
		'cc_number',
		'cc_mask',
		'cc_year',
		'cc_month',
		'cc_name',
		'cc_ccv',
		'card',
		'run_mode'
	];

	public function card_brand()
	{
		return $this->belongsTo(CardBrand::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
