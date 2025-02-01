<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'name',
        'capacity',
        'transmission',
        'description',
        'image',
        'features',
        'order',
        'status',
        'wa_link'
    ];

    protected $casts = [
        'features' => 'array',
        'capacity' => 'integer',
        'order' => 'integer'
    ];

    public function scopeAvailable($query)
    {
        return $query->where('status', 'available');
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }
}
