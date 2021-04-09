<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacilityHotel extends Model
{
    protected $guarded = [];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
