<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContractHistory
 * 
 * @property int $id
 * @property int $contract_id
 * @property string $description
 * @property Carbon|null $follow_up
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Contract $contract
 *
 * @package App\Models
 */
class ContractHistory extends Model
{
	protected $table = 'contract_history';

	protected $casts = [
		'contract_id' => 'int',
		'follow_up' => 'datetime'
	];

	protected $fillable = [
		'contract_id',
		'description',
		'follow_up'
	];

	public function contract()
	{
		return $this->belongsTo(Contract::class);
	}
}
