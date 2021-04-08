<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $guarded = [];

    public static function generateHotelId($name)
    {
        return preg_replace('/[^A-Za-z0-9\-]/', '', strtoupper(mb_substr($name, 0, 5) . rand(1000, 9999)));
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function facilities()
    {
        return $this->hasMany(Facility::class)->where('type', '=', 'hotel');
    }
}
