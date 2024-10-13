<?php

namespace App\Models\old;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MachineType extends Model
{
    use HasFactory;
    protected $table = 'machine_types';
    protected $fillable = [
        'machine_type',
    ];
}
