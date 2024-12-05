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
 * Class Contract
 *
 * @property int $id
 * @property int $user_id
 * @property string $machine_id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $whatsapp
 * @property Carbon|null $expires
 * @property int|null $percentage
 * @property string $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Machine $machine
 * @property User $user
 * @property Collection|ContractHistory[] $contract_histories
 *
 * @package App\Models
 */
class Contract extends Model
{
    use HasFactory;
	protected $table = 'contracts';

	protected $casts = [
		'user_id' => 'int',
		'expires' => 'datetime',
		'percentage' => 'int'
	];

	protected $fillable = [
		'user_id',
		'machine_id',
		'name',
		'email',
		'phone',
		'whatsapp',
		'expires',
		'percentage',
		'status'
	];

	public function machine()
	{
		return $this->belongsTo(Machine::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function contract_histories()
	{
		return $this->hasMany(ContractHistory::class);
	}
}
