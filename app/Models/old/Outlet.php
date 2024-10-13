<?php

namespace App\Models\old;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MatanYadaev\EloquentSpatial\Objects\Point;
use MatanYadaev\EloquentSpatial\Traits\HasSpatial;

class Outlet extends Model
{
    use HasFactory, HasSpatial;
    protected $table = 'outlets';
    protected $fillable = [
        'coordinates',
        'name',
        'country_code',
        'contact',
        'outlet_type_id',
        'active',
    ];
    protected $casts = [
        'coordinates' => Point::class,
    ];

    public function outlet_type(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne('App\Models\old\OutletType', 'id', 'outlet_type_id');
    }
}
