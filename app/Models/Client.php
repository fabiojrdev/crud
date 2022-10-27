<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'job',
        'email',
        'phone'
    ];
    protected $dates = [ 
        'created_at',
        'updated_at'
    ];
}
