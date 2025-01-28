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
        'wa_template',
        'status',
        'lepas_kunci_price',
        'carter_dalam_price',
        'carter_luar_price',
        'regular_price'
    ];
}
