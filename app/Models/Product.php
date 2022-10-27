<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'category',
        'price',
        'inventory',
    ];
    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
