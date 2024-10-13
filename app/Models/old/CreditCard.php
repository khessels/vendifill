<?php

namespace App\Models\old;

use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    /**
     * @var string
     */
    protected $table = 'credit_cards';
//    protected $casts = [
//        'cc_mask' => 'encrypted',
//        'cc_year' => 'encrypted',
//        'cc_month' => 'encrypted',
//        'cc_name' => 'encrypted',
//        'cc_ccv' => 'encrypted',
//        'card' => 'encrypted'
//    ];
    /**
     * @var array
     */
    protected $guarded = [];
}
