<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable =[
        'title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type'
    ];

}
