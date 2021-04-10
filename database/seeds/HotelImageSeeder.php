<?php

use Illuminate\Database\Seeder;

class HotelImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\HotelImage::class, 50)->create();
    }
}
