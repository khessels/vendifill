<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Gate;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
/**
 * Class User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string $status
 * @property string $reason
 * @property float|null $rating
 * @property string $user_type
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|Comment[] $comments
 * @property Collection|Contract[] $contracts
 * @property Collection|CreditCard[] $credit_cards
 * @property Collection|Driver[] $drivers
 * @property Collection|Outlet[] $outlets
 *
 * @package App\Models
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    /**
     * Register the Telescope gate.
     *
     * This gate determines who can access Telescope in non-local environments.
     */
    protected function gate(): void
    {
        Gate::define('viewTelescope', function (old\User $user) {
            return in_array($user->email, [
                'kees.hessels@gmail.com',
            ]);
        });
    }
	protected $table = 'users';

	protected $casts = [
		'email_verified_at' => 'datetime',
		'rating' => 'float'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'email',
		'email_verified_at',
		'password',
		'status',
		'reason',
		'rating',
		'user_type',
		'remember_token'
	];
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
	public function comments()
	{
		return $this->hasMany(Comment::class);
	}

	public function contracts()
	{
		return $this->hasMany(Contract::class);
	}

	public function credit_cards()
	{
		return $this->hasMany(CreditCard::class);
	}

	public function drivers()
	{
		return $this->hasMany(Driver::class);
	}

	public function outlets()
	{
		return $this->hasMany(Outlet::class);
	}
}
