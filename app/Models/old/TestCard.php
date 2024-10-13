<?php

namespace App\Models\old;

use Illuminate\Database\Eloquent\Model;

class TestCard extends Model
{
    /**
     * @var string
     */
    protected $table = 'test_cards';
    /**
     * @var array
     */
    protected $guarded = [];
    public function card(){
        return $this->hasOne('App\CreditCard','cc_number', 'token');
    }
}
