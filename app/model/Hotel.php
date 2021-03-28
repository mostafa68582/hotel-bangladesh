<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'hotel_name',
        'star_rating',
        'hotel_phone',
        'user_phone',
        'location',
        'street_address',
        'country',
        'city',
        'zip_code',
        'district',
        'thana',
        'payment_method',
        'user_id',
        'room_id',
        'facility_id',
        'image_id',
        'description',
        'hotel_type',
        'status',
        'remark',
    ];

    public function hotelImages(){
        return $this->hasMany(HotelImage::class, 'hotel_id');
    }
}
