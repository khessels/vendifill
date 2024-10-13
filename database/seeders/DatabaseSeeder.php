<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);

        $seeds = [];
        switch(\App::Environment()) {

            /**
             * Local/testing seeds
             */
            case 'local':
            case 'staging':
            case 'production':
            case 'testing':
                $seeds = [
                    PermissionsSeeder::class,
                    UsersSeeder::class,
                    Products::class,
                    LocationSeeder::class,
                    OutletSeeder::class,
                    MachinesSeeder::class,
                ];
                break;
        }
        /**
         * Run seeders
         */
        array_map(fn($s) => $this->call($s), $seeds);
    }
}
