<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Facility;
use Faker\Generator as Faker;

$factory->define(Facility::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'icon' => '/storage/facilities/fake.png',
        'type' => $faker->randomElement(array('hotel', 'room')),
        'status' => $faker->randomElement(array('active', 'inactive'))
    ];
});
