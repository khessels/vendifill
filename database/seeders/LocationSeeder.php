<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Location::factory()->count(150)->create();
//        $locations = [];
//
//        $location["name"] = "Kees place";
//        $location["address"] = "Test palace";
//        $location["city"] = "Santa Ana";
//        $location["zip"] = "10901";
//        $location["country_code"] = 506;
//        $location["province"] = "San jose";
//        $location["canton"] = "Santa ana";
//        $location["phone_1"] = "1234567878";
//        $location["phone_2"] = "98765432";
//        $location["fax"] = "23577";
//        $location["email"] = "kees.hessels@gmail.com";
//        $location["description"] = "qw4ev ertg r y r5e6y";
//        $location["access"] = "PUBLIC";
//        $location["active"] = "YES";
//        $location["contact_details"] = "The contact details";
//        $location["managed_by"] = "Kc";
//        $location["location_emergency"] = "43217896 john";
//
//        $locations[] = $location;
//
//        foreach ($locations as $location) {
//            $l = new Location($location);
//            $l->save();
//        }
    }
}
