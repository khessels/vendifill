<?php

namespace Database\Seeders;

use App\Models\old\Outlet;
use App\Models\old\OutletType;
use Illuminate\Database\Seeder;

class OutletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $outletTypes = [];

        $outletType['outlet_type'] = "Independent outlet No cold storage";
        $outletTypes[] = $outletType;

        $outletType['outlet_type'] = "Independent outlet with cold storage";
        $outletTypes[] = $outletType;

        $outletType['outlet_type'] = "VendiFill storage location";
        $outletTypes[] = $outletType;

        foreach($outletTypes as $outletType){
            $ot = new OutletType( $outletType);
            $ot->save();
        }

        Outlet::factory()->count(66)->create();

//        $outlets = [];
//
//        $lat = 9.9351229;
//        $long = -84.099183;
//        $outlet['name'] = "Test Super Mercado";
//        $outlet['coordinates'] = DB::raw("(ST_GeomFromText('POINT(" . $lat . " " . $long .  ")', 4326))");
//        $outlet['contact'] = "+506 6107 3424";
//        $outlet['country_code'] = 506;
//        $outlet['outlet_type_id'] = 1;
//        $outlet['active'] = 'YES';
//        $outlets[] = $outlet;
//
//
//        foreach($outlets as $outlet){
//            $o = new Outlet( $outlet);
//            $o->save();
//        }

    }
}
