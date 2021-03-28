<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         User::create([
            "first_name" => "ahad",
            "last_name"  => "pathan",
            "user_name"  => "pathan852",
            "email"      => "admin@gmail.com",
            "phone"      => "01845392010",
            "user_type"  => "superadmin",
            "image"      => "superadmin.png",
            "password"   => bcrypt('12345'),
            "status"     => "active",
        ]);
    }
}
