<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable=[
        'title',
        'price',
        'description',
        'imgs',
    ];
}
