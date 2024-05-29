<?php

namespace Database\Seeders;

use App\Models\BarcodeProvider;
use App\Models\Brand;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use App\Models\Packaging;

class Products extends Seeder
{
    public function barcodeProviders(): array
    {
        $items                  = [];
        $item['name']           = 'barcodespider';
        $item['config']         = json_encode([ 'connection' => ['url' => 'https://www.barcodespider.com/{barcode?}', 'token' => '123']]);
        $items[]                = $item;
        return $items;
    }
    public function brands(): array
    {
        $items                  = [];
        $item['name']           = 'Coca Cola';
        $item['active']         = 'yes';
        $items[]                = $item;

        $item['name']           = 'Pepsi';
        $item['active']         = 'yes';
        $items[]                = $item;

        $item['name']           = 'Mars';
        $item['active']         = 'yes';
        $items[]                = $item;

        $item['name']           = 'Doritos';
        $item['active']         = 'yes';
        $items[]                = $item;

        return $items;
    }
    public function packages(): array
    {
        $items                  = [];
        $item['name']           = 'bottle';
        $item['active']         = 'yes';
        $items[]                = $item;

        $item['name']           = 'wide bag';
        $item['active']         = 'yes';
        $items[]                = $item;

        $item['name']           = 'small bag';
        $item['active']         = 'yes';
        $items[]                = $item;

        $item['name']           = 'can';
        $item['active']         = 'yes';
        $items[]                = $item;

        return $items;
    }
//    public function products(): array
//    {
//        return ;
//    }
    public function run(): void
    {
        foreach($this->barcodeProviders() as $barcodeProvider){
            $obj = BarcodeProvider::create($barcodeProvider);
        }
        foreach($this->packages() as $package){
            $obj = Packaging::create($package);
        }
        foreach($this->brands() as $brand){
            $obj = Brand::create($brand);
        }
//        foreach($this->products() as $product){
//            $obj = Product::create($product);
//        }

    }
}
