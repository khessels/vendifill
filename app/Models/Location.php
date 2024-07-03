<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

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
        'phone_1',
        'phone_2',
        'fax',
        'email',
        'description',
        'access',
        'responsible_by',
        'managed_by',
        'location_emergency',
        'contact_details'
    ];
}
