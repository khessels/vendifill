<?php

namespace App\Models\old;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MachineStock extends Model
{
    use HasFactory;
    protected $table = 'machine_stock';
    public function product(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne('App\Models\old\Product', 'id', 'product_id');
    }

}
