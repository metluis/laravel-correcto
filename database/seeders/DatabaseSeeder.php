<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      //Roles y permisos
      $this->call(RoleSeeder::class);

      //Usuarios base
      $this->call(UserSeeder::class);

      User::factory(10)->create()->each(function($user){
        $user->assignRole('User');
      });
    }
}
