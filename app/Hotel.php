<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $guarded = [];

    public function generateHotelId()
    {
        // TODO: 5 Digit from name and random 4 digit number [RAFSAN1500]
    }
}
