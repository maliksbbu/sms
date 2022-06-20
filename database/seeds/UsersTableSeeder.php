<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'malikahmed',
            'email' => 'ahmedpk31@gmail.com',
            'role' => 1,
            'status' => 1,
            'photo' => 'https://source.unsplash.com/random',
            'password' => bcrypt('123456'),
        ]);
    }
}
