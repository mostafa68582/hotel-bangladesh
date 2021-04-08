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
            'first_name' => 'Md. Rafsan Jani',
            'last_name' => 'Rafin',
            'username' => 'itsrafsanjani',
            'email' => 'mdrafsanjanirafin@gmail.com',
            'phone_number' => '+8801612345678',
            'user_type' => 'super_admin',
            'avatar' => 'https://www.gravatar.com/avatar/' . md5('mdrafsanjanirafin@gmail.com'),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'status' => 'active',
            'remember_token' => Str::random(10),
        ]);

        factory(App\User::class, 50)->create();
    }
}
