<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
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
                ];
                break;
        }
        /**
         * Run seeders
         */
        array_map(fn($s) => $this->call($s), $seeds);
    }
}
