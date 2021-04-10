<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\HotelImage;
use Faker\Generator as Faker;

$factory->define(HotelImage::class, function (Faker $faker) {
    return [
        'hotel_id' => \App\Hotel::all()->random()->id,
        'caption' => $faker->catchPhrase,
        'path' => $faker->imageUrl()
    ];
});
