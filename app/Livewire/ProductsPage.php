<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ProductsPage extends Component
{
    public function render()
    {
        $categories = Category::where('is_active', 1)->get(['id','name','slug']);
        $brands = Brand::where('is_active', 1)->get(['id','name','slug']);
        $products = Product::query()->where('is_active', 1);

        return view('livewire.products-page', [
            'products' => $products->paginate(8),
            'categories' => $categories,
            'brands' => $brands
        ]);
    }
}
