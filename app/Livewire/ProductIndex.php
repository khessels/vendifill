<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductIndex extends Component
{
    public function render()
    {
        $products = Product::paginate(50);

        return view('livewire.product-index')
            ->with('products', $products ?? []);
    }
}
