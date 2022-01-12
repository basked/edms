<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'short_name', 'is_active'];

    public function setShortNameAttribute($value)
    {
        $this->attributes['short_name'] = strtoupper($value);
    }
}
