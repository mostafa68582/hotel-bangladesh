<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hotel;
use App\User;
use Faker\Generator as Faker;

$factory->define(Hotel::class, function (Faker $faker) {
    $name = $faker->name;

    return [
        'user_id' => User::all()->random()->id,
        'name' => $name,
        'hotel_id' => Hotel::generateHotelId($name),
        'phone' => $faker->phoneNumber,
        'email' => $faker->email,
        'website' => $faker->url,
        'star_rating' => random_int(1, 5),
        'location' => $faker->sentence,
        'street_address' => $faker->streetAddress,
        'country' => $faker->country,
        'city' => $faker->city,
        'zip_code' => $faker->postcode,
        'district' => $faker->randomElement(array('Dhaka', 'Barisal', 'Khulna', 'Chittagong')),
        'thana' => $faker->randomElement(array('Mirpur', 'Shahbag', 'Savar', 'Dhanmondi')),
        'payment_method' => $faker->randomElement(array('cash', 'gateway')),
        'remark' => $faker->sentence,
        'description' => $faker->text,
    ];
});
