<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MatanYadaev\EloquentSpatial\Objects\Point;
use MatanYadaev\EloquentSpatial\Traits\HasSpatial;

class Machine extends Model
{
    use HasFactory, HasSpatial;
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
    protected $casts = [
        'coordinates' => Point::class,
    ];
    public function location(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne('App\Models\old\Location', 'id', 'location_id');
    }
    public function machine_type(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne('App\Models\old\MachineType', 'id', 'machine_type_id');
    }
    public function slots(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\old\MachineSlot', 'machine_id', 'id');
    }
    public function products(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\old\MachineProduct', 'machine_id', 'id');
    }
    public function kv(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\old\MachineKV', 'machine_id', 'id');
    }
    public function stock(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\old\MachineStock', 'machine_id', 'id');
    }
}
