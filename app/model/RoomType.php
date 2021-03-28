<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    protected $fillable = [
        'name',
        'cost_per_day',
        'discount_percentage',
        'size',
        'max_adult',
        'max_guest',
        'description',
        'status',
    ];
    public function roomFacilities(){
        return $this->hasManyThrough(facilities::class, FacilityRoomType::class, 'room_type_id', 'id', 'id', 'facility_id');
    }

}
