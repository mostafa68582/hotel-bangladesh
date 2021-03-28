<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class HotelImage extends Model
{
    protected $fillable = [
        'hotel_id',
        'image',
        'caption',
    ];
}
