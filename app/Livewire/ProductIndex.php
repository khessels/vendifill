<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductIndex extends Component
{
    public function render()
    {
        $products = Product::all();

        return view('livewire.product-index')
            ->with('products', $products ?? []);
    }
}
