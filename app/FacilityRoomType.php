<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacilityRoomType extends Model
{
    protected $fillable = [
        'room_type_id',
        'facility_id'
    ];
}