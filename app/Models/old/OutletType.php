<?php

namespace App\Models\old;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutletType extends Model
{
    use HasFactory;
    protected $table = 'outlet_types';
    protected $fillable = [
        'outlet_type',
    ];
}
