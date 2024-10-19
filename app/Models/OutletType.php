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
 * Class OutletType
 *
 * @property int $id
 * @property string $outlet_type
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|Outlet[] $outlets
 *
 * @package App\Models
 */
class OutletType extends Model
{
    use HasFactory;

	protected $table = 'outlet_types';

	protected $fillable = [
		'outlet_type'
	];

	public function outlets()
	{
		return $this->hasMany(Outlet::class);
	}
}
