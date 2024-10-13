<?php

namespace App\Models\old;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MachineKV extends Model
{
    use HasFactory;
    protected $table = 'machine_kv';
    protected $fillable = ['machine_id', 'key', 'value', 'json'];

    public function machine(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\old\Machine', 'id', 'machine_id');
    }
}
