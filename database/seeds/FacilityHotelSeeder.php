<?php

use Illuminate\Database\Seeder;

class FacilityHotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\FacilityHotel::class, 20)->create();
    }
}
