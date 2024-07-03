<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;
    protected $table = 'outlets';
    protected $fillable = [
        'coordinates',
        'name',
        'country_code',
        'contact',
        'outlet_type_id',
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
