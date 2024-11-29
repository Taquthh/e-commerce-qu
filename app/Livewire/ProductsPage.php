<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Livewire\Partials\Navbar;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsPage extends Component
{
    use WithPagination;

    use LivewireAlert;

    #[Url(history: true)]
    public $search;
    #[Url(history: true)]
    public $selected_categories = [];   
    #[Url(history: true)]
    public $selected_brands = [];  
    #[Url(history: true)] 
    public $featured;
    #[Url(history: true)]
    public $in_stock;
    #[Url(history: true)]
    public $sort = 'latest';
    #[Url(history: true)] 


    //add product to card   
    public function addToCart($product_id) {
        $total_count = CartManagement::addItemToCart($product_id);

        $this->dispatch('update-cart-count', total_count: $total_count)->to(Navbar::class);

        $this->alert('success', 'Product added to the cart successfully!', [
            'position' => 'top-center',
            'timer' => 1500, 
            'toast' => true,
            'background' => '#4CAF50',  
            'color' => '#ffffff', 
        ]);
        
    }

    public $price_range = 10;
    public function render()
    {
        $categories = Category::where('is_active', 1)->get(['id','name','slug']);
        $brands = Brand::where('is_active', 1)->get(['id','name','slug']);
        $products = Product::query()->where('is_active', 1);

        if(!empty($this->selected_categories)) {
            $products->whereIn('category_id', $this->selected_categories);
        }

        if(!empty($this->selected_brands)) {
            $products->whereIn('brand_id', $this->selected_brands);
        }

        if($this->featured) {
            $products->where('is_featured', 1);
        }

        if($this->in_stock) {
            $products->where('in_stock', 1);
        }

        if($this->sort == 'lates') {
            $products->orderBy('latest');
        }

        if ($this->sort == 'price-asc') {
            $products->orderBy('price', 'asc'); // Low to High
            
        } elseif ($this->sort == 'price-desc') {
            $products->orderBy('price', 'desc'); // High to Low
        }
        

        if (!empty($this->search)) {
            $products->where(function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                      ->orWhere('price', 'like', '%' . $this->search . '%');
            });
        }
    

        // if($this->price_range) {
        //     $products->whereBetween('price', [0, $this->price_range]);
        // }

        return view('livewire.products-page', [
            'products' => $products->paginate(8),
            'categories' => $categories,
            'brands' => $brands,
        ]);
    }
}
