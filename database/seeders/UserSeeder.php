<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;


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
        'name' => 'Luis Melo',
        'email' => 'luis.terrel.14@hotmail.com',
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'edad' => '20',
        'peso' => '70',
        'talla' => '173',
        'remember_token' => Str::random(10),
    ])->assignRole('Admin');


    User::create([
        'name' => 'Alex Tuesta',
        'email' => 'alex14@hotmail.com',
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'edad' => '12',
        'peso' => '40',
        'talla' => '140',
        'remember_token' => Str::random(10),
    ])->assignRole('User');


    }
}
