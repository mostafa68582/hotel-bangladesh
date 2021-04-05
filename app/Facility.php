<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $fillable = [
        'facilities_cat_id',
        'room_id',
        'name',
     ];
    public function room(){
        return $this->hasManyThrough(RoomType::class, FacilityRoomType::class, 'facility_id', 'id', 'id', 'room_type_id');
    }
}
