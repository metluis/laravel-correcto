<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'User']);
     
        Permission::create(['name' => 'users'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'users.create'])->assignRole($role1);
        Permission::create(['name' => 'users.edit'])->assignRole($role1);
        Permission::create(['name' => 'users.destroy'])->assignRole($role1);

        Permission::create(['name' => 'alimentos'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'alimentos.create'])->assignRole($role1);
        Permission::create(['name' => 'alimentos.edit'])->assignRole($role1);
        Permission::create(['name' => 'alimentos.destroy'])->assignRole($role1);

    }
}
