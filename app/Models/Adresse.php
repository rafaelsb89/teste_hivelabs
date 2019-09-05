<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{
    protected $fillable = [

        "zipcode", "location", "number", "neighborhood", "city", "state", 
    ];
}
