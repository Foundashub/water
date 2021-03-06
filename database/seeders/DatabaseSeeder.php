<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //$this->call(ZonesSeeder::class);
        
        //$this->call(ModuleSeeder::class);
        $this->call(PermisionSeeder::class);
        //$this->call(RolePermisionSeeder::class);
        //$this->call(UserRoleSeeder::class);

      //  $this->call(RegionSeeder::class);
       //$this->call(DistrictSeeder::class);
    }
}
