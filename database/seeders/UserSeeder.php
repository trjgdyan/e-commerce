<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '1234567890',
            'otp' => rand(111111, 999999),
            'acces' => 'yes',
            'password' => bcrypt('password'),
        ]);
    }
}
