<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MachineSlot extends Model
{
    use HasFactory;
    protected $table = 'machine_slots';
    protected $fillable = ['uuid', 'product_count', 'max_product_count'];
    public function machine_product()
    {
        return $this->hasOne('App\Models\old\MachineProduct', 'machine_slot_id', 'id' );
    }
}
