<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MachineProduct extends Model
{
    use HasFactory;
    protected $table = 'machine_products';
    public function product(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne('App\Models\old\Product', 'id', 'product_id');
    }
}
