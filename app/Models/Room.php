<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
         'room_type_id',
         'name',
         'room_number',
         'bed_type',
         'description',
         'available',
         'status',
    ];
    public function roomTypes()
    {
        return $this->hasOne(RoomType::class, 'id','room_type_id');
    }
    public function roomBooking(){
        return $this->hasMany(RoomBooking::class);
    }
}
