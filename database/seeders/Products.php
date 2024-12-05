<?php

namespace Database\Seeders;

use App\Models\Packaging;
use App\Models\Product;
use Illuminate\Database\Seeder;

class Products extends Seeder
{

//    public function products(): array
//    {
//        return ;
//    }
    public function run(): void
    {
//        foreach($this->barcodeProviders() as $barcodeProvider){
//            $obj = BarcodeProvider::create($barcodeProvider);
//        }
//        foreach($this->packages() as $package){
//            $obj = Packaging::create($package);
//        }
//        foreach($this->brands() as $brand){
//            $obj = Brand::create($brand);
//        }

//        foreach($this->products() as $product){
//            $obj = Product::create($product);
//        }
        Product::factory()->count(150)->create();
    }
}
