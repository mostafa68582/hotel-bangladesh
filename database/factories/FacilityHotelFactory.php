<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\FacilityHotel;
use Faker\Generator as Faker;

$factory->define(FacilityHotel::class, function (Faker $faker) {
    return [
        'hotel_id' => \App\Hotel::all()->random()->id,
        'facility_id' => \App\Facility::where('type', 'hotel')->get()->random()->id,
        'status' => 'active'
    ];
});
