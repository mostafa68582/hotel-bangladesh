<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacilityHotel extends Model
{
    protected $guarded = [];

    protected $with = ['facility'];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function facility()
    {
        return $this->belongsTo(Facility::class);
    }
}
