<?php

namespace App\Models;
use App\User;
use Illuminate\Database\Eloquent\Model;

class RoomBooking extends Model
{
   protected $fillable = [
         'room_id',
         'user_id',
         'arrival_date',
         'departure_date',
         'room_cost',
         'payment',
         'status',
    ];
    public function user(){
        return $this->hasOne(User::class,'id', 'user_id');
    }
    public function room(){
        return $this->hasMany(Room::class,'id', 'room_id');
    }
}
