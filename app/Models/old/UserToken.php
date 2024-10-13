<?php

namespace App\Models\old;

use Illuminate\Database\Eloquent\Model;

class UserToken extends Model
{
    /**
     * @var string
     */
    protected $table = 'user_token';

    /**
     * @var array
     */
    protected $guarded = [];
}
