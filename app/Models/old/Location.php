<?php

namespace App\Models\old;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MatanYadaev\EloquentSpatial\Objects\Point;
use MatanYadaev\EloquentSpatial\Traits\HasSpatial;

class Location extends Model
{
    use HasFactory, HasSpatial;


    protected $table = 'locations';
    protected $fillable = [
        'coordinates',
        'name',
        'address',
        'city',
        'zip',
        'country',
        'province',
        'canton',
        'email',
        'description',
        'access',
        'responsible_by',
        'managed_by',
        'location_emergency',
        'contact_details'
    ];
    protected $casts = [
        'coordinates' => Point::class,
    ];
    public function machines(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\old\Machine', 'location_id', 'id');
    }
}
