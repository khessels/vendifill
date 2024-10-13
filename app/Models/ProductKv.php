<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductKv
 * 
 * @property int $id
 * @property int $product_id
 * @property string $key
 * @property string|null $value
 * @property array|null $json
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Product $product
 *
 * @package App\Models
 */
class ProductKv extends Model
{
	protected $table = 'product_kv';

	protected $casts = [
		'product_id' => 'int',
		'json' => 'json'
	];

	protected $fillable = [
		'product_id',
		'key',
		'value',
		'json'
	];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}
}
