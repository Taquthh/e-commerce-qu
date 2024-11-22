<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductsPage extends Component
{
    public function render()
    {
        $products = Product::where('in_stock', 1)
        ->orWhere('on_sale', 1)
        ->get();

        return view('livewire.products-page', [
            'products' => $products
        ]);
    }
}
