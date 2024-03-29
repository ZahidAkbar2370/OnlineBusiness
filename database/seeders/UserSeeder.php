<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            "name" => "Zahid",
            "email" => "admin@gmail.com",
            "password" => Hash::make("123456"),
            "role" => "super_admin",
        ]);

        \App\Models\User::factory(10)->create();
    }
}
