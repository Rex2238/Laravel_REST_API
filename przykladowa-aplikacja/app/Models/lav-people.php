<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lav_people extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'street',
        'name',
        'surname',
        'city' 
    ];
}
