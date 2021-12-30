<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            CountriesTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
            CrmStatusTableSeeder::class,
            TaskStatusTableSeeder::class,
            ChatterTableSeeder::class,

        ]);
    }
}
