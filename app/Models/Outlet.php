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
        'active',
    ];

    public function outlet_type(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne('App\Models\OutletType', 'id', 'outlet_type_id');
    }
}
