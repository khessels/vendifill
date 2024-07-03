<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    use HasFactory;
    protected $table = 'machines';
    protected $fillable = [
        'coordinates',
        'brand',
        'brand_model',
        'year',
        'location_id',
        'uuid',
        'machine_type_id'
    ];
    public function location(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne('App\Models\Location', 'id', 'location_id');
    }
    public function machine_type(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne('App\Models\MachineType', 'id', 'machine_type_id');
    }
}
