<div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-900 dark:to-gray-800">
    <div class="w-full mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="relative mt-16">
            <!-- Mobile Filter Toggle Button -->
            <div class="lg:hidden mb-4">
                <button 
                    onclick="document.getElementById('filterSidebar').classList.toggle('translate-x-0')"
                    class="w-full bg-white dark:bg-gray-800 rounded-lg px-4 py-3 flex items-center justify-between shadow-sm border border-gray-200 dark:border-gray-700"
                >
                    <span class="text-gray-700 dark:text-gray-200 font-medium">Filters</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <!-- Main Content Wrapper -->
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Sidebar Filter - Mobile Optimized -->
                <div id="filterSidebar" class="fixed inset-y-0 left-0 z-40 w-full lg:w-72 lg:static lg:translate-x-0 -translate-x-full transform transition-transform duration-300 ease-in-out bg-gray-50 dark:bg-gray-900 lg:bg-transparent lg:dark:bg-transparent overflow-y-auto">
                    <!-- Mobile Header -->
                    <div class="lg:hidden flex items-center justify-between p-4 border-b dark:border-gray-700">
                        <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Filters</h2>
                        <button 
                            onclick="document.getElementById('filterSidebar').classList.remove('translate-x-0')"
                            class="p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <!-- Filter Content -->
                    <div class="p-4 lg:p-0 space-y-4">
                        <!-- Categories -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">Categories</h3>
                                <div class="space-y-2">
                                    <ul>
                                        @foreach($categories as $category)
                                        <li class="mb-4" wire:key="{{ $category->id }}">
                                            <label for="{{ $category->slug }}" class="flex items-center gap-2 cursor-pointer group">
                                                <input type="checkbox" wire:model.live="selected_categories" id="{{ $category->slug }}" value="{{ $category->id }}" class="w-4 h-4 rounded border-gray-300 dark:border-gray-600 text-indigo-600 focus:ring-indigo-500">
                                                <span class="text-sm text-gray-700 dark:text-gray-300 group-hover:text-indigo-500">{{ $category->name }}</span>
                                            </label>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Brands -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">Brands</h3>
                                <div class="space-y-2">
                                    <ul>
                                        @foreach($brands as $brand)
                                        <li class="mb-4" wire:key="{{ $brand->id }}">
                                            <label for="{{ $brand->slug }}" class="flex items-center gap-2 cursor-pointer group">
                                                <input type="checkbox" wire:model.live="selected_brands" id="{{ $brand->slug }}" value="{{ $brand->id }}" class="w-4 h-4 rounded border-gray-300 dark:border-gray-600 text-indigo-600 focus:ring-indigo-500">
                                                <span class="text-sm text-gray-700 dark:text-gray-300 group-hover:text-indigo-500">{{ $brand->name }}</span>
                                            </label>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Price Range -->
                        {{-- <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">Price Range</h3>
                                <div class="space-y-4">
                                    <div class="flex justify-between text-sm text-gray-500 dark:text-gray-400">
                                        <span>{{ Number::currency(100, 'USD')}}</span>
                                        <span>{{ Number::currency(1000000, 'USD')}}</span>
                                    </div>
                                    <input 
                                        wire:model.live='price_range'
                                        type="range" 
                                        min="10" 
                                        max="1000000" 
                                        value="100"
                                        step="10"
                                        class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700"
                                    >
                                    <div class="text-center text-sm font-medium text-indigo-600">
                                        {{ Number::currency($price_range, 'USD') }}
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        <!-- Product Status -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">Product Status</h3>
                                <div class="space-y-2">
                                   <label for="featured" class="flex items-center gap-2 cursor-pointer group">
                                        <input type="checkbox" id="featured" wire:model.live="featured" value="1" class="w-4 h-4 rounded border-gray-300 dark:border-gray-600 text-indigo-600 focus:ring-indigo-500">
                                        <span class="text-sm text-gray-700 dark:text-gray-300 group-hover:text-indigo-500">Featured</span>
                                    </label>
                                    <label for="in_stock" class="flex items-center gap-2 cursor-pointer group">
                                        <input type="checkbox" id="in_stock" wire:model.live="in_stock" value="1" class="w-4 h-4 rounded border-gray-300 dark:border-gray-600 text-indigo-600 focus:ring-indigo-500">
                                        <span class="text-sm text-gray-700 dark:text-gray-300 group-hover:text-indigo-500">In Stock</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Apply Filters Button (Mobile Only) -->
                        {{-- <div class="lg:hidden">
                            <button 
                                onclick="document.getElementById('filterSidebar').classList.remove('translate-x-0')"
                                class="w-full bg-indigo-600 text-white rounded-lg py-3 font-medium hover:bg-indigo-700 transition-colors"
                            >
                                Apply Filters
                            </button>
                        </div> --}}
                    </div>
                </div>

                <!-- Product Grid Container -->
                <div class="flex-1">
                    <!-- Sort Controls -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-4 mb-6">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                            <select wire:model.live="sort" class="bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-lg px-4 py-2 text-sm text-gray-700 dark:text-gray-300">
                                <option value="latest">Latest</option>
                                <option value="price-asc">Price: Low to High</option>
                                <option value="price-desc">Price: High to Low</option>
                                <option>Popularity</option>
                            </select>
                            <div class="w-full">
                                <div class="relative">
                                    <input 
                                        type="text" 
                                        wire:model.live="search" 
                                        placeholder="Search products..." 
                                        class="w-full px-4 py-2.5 text-sm text-gray-700 dark:text-gray-200 bg-gray-50 dark:bg-slate-700 border border-gray-200 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400 transition-all duration-200 pl-10"
                                    >
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 dark:text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Products Grid -->
                    <div class="w-full min-h-screen p-4">
                        <div class="flex flex-wrap justify-center gap-4">
                            @foreach($products as $product)
                                <div class="max-w-xs w-full sm:w-64 md:w-72 lg:w-80 group relative transform transition-all duration-300 ease-out">
                                    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-2xl transition-shadow duration-300">
                                        <!-- Status Badges -->
                                        <div class="absolute left-4 top-4 flex flex-col gap-2 z-20">
                                            @if($product->discount > 0)
                                                <div class="animate-float">
                                                    <span class="bg-gradient-to-r from-red-500 via-rose-500 to-pink-500 text-white text-xs px-3 py-1 rounded-full font-semibold shadow-lg">
                                                        Save {{ $product->discount }}%
                                                    </span>
                                                </div>
                                            @endif
                                            @if($product->status === 'new')
                                                <div class="animate-float">
                                                    <span class="bg-gradient-to-r from-blue-500 to-green-500 text-white text-xs px-3 py-1 rounded-full font-semibold shadow-lg">
                                                        New
                                                    </span>
                                                </div>
                                            @endif
                                            @if($product->is_featured)
                                                <div class="animate-float">
                                                    <span class="bg-gradient-to-r from-emerald-500 to-green-500 text-white text-xs px-3 py-1 rounded-full font-semibold shadow-lg">
                                                        Free Shipping
                                                    </span>
                                                </div>
                                            @endif
                                            @if($product->stock < 10 && $product->stock > 0)
                                                <div class="animate-pulse">
                                                    <span class="bg-gradient-to-r from-amber-500 to-orange-500 text-white text-xs px-3 py-1 rounded-full font-semibold shadow-lg">
                                                        Only {{ $product->stock }} left
                                                    </span>
                                                </div>
                                            @endif
                                            @if(!$product->in_stock)
                                                <div>
                                                    <span class="bg-gradient-to-r from-gray-600 to-gray-700 text-white text-xs px-3 py-1 rounded-full font-semibold shadow-lg">
                                                        Out of Stock
                                                    </span>
                                                </div>
                                            @endif
                                        </div>
                    
                                        <!-- Product Image -->
                                        <div class="relative h-[14rem] w-full overflow-hidden">
                                            <img 
                                                wire:navigate
                                                src="{{ url('storage', $product->images[0])}}"
                                                alt="{{ $product->name }}"
                                                class="w-full h-full object-cover bg-gray-100 dark:bg-gray-900 group-hover:scale-105 transition-transform duration-500"
                                            >
                                            
                                            <!-- Quick Actions Overlay -->
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                                                <div class="absolute bottom-0 left-0 right-0 p-6 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 flex items-center justify-between">
                                                    <!-- Quick Action Buttons -->
                                                    <div class="flex gap-3">
                                                        <a 
                                                            href="/products/{{ $product->slug }}"
                                                            class="bg-white/90 p-3 rounded-full hover:bg-indigo-500 hover:text-white transition-colors duration-300 transform hover:scale-110 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                            aria-label="View details of {{ $product->name }}"
                                                        >
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                            </svg>
                                                        </a>
                                                        <button 
                                                            class="bg-white/90 p-3 rounded-full hover:bg-red-500 hover:text-white transition-colors duration-300 transform hover:scale-110 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500"
                                                            aria-label="Add {{ $product->name }} to wishlist"
                                                        >
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                            </svg>
                                                        </button>
                                                        <button 
                                                            class="bg-white/90 p-3 rounded-full hover:bg-blue-500 hover:text-white transition-colors duration-300 transform hover:scale-110 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                                                            aria-label="Share {{ $product->name }}"
                                                        >
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <!-- Product Info -->
                                        <div class="p-4">
                                            <div class="flex items-center gap-2 mb-2">
                                                <span class="text-sm font-medium text-transparent bg-clip-text bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">
                                                    {{ $product->brand->name }}
                                                </span>
                                            </div>
                                            
                                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2 line-clamp-2 group-hover:text-indigo-500 transition-colors duration-300">
                                                {{ $product->name }}
                                            </h3>
                    
                                            <div class="flex items-center gap-2 mb-3">
                                                <div class="flex gap-1">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        <svg class="w-4 h-4 {{ $i <= floor($product->rating) ? 'text-yellow-400' : 'text-gray-300' }} transform transition-transform duration-300 hover:scale-125" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.719c-.783-.57-.381-1.81.588-1.81h3.463a1 1 0 00.951-.69l1.07-3.292z" />
                                                        </svg>
                                                    @endfor
                                                </div>
                                            </div>
                    
                                            <div class="flex justify-between items-center">
                                                <p class="font-semibold text-lg text-gray-900 dark:text-white">
                                                    @if($product->discount > 0)
                                                        <span class="line-through text-sm text-gray-500 dark:text-gray-400">
                                                            ${{ number_format($product->price, 2) }}
                                                        </span>
                                                        <span class="text-red-500">Now ${{ number_format($product->discounted_price, 2) }}</span>
                                                    @else
                                                        {{ Number::currency($product->price, 'USD ') }}
                                                    @endif
                                                </p>
                                                
                                                <button 
                                                    @if(!$product->in_stock) disabled @endif
                                                    class="flex items-center gap-2 py-1.5 px-3 rounded-md text-sm font-medium transition-all duration-200 transform hover:scale-105 hover:shadow focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 
                                                    {{ !$product->in_stock 
                                                        ? 'bg-gray-300 cursor-not-allowed text-gray-700' 
                                                        : 'bg-indigo-600 text-white hover:bg-indigo-700 shadow-sm' 
                                                    }}"
                                                >
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                                  </svg>                                                  
                                                    <span>{{ !$product->in_stock ? 'Out of Stock' : 'Add to Cart' }}</span>
                                                </button>   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                              <!-- pagination start -->
                    <div class="flex justify-end mt-6">
                        {{ $products->links() }}
                        <ul class="flex list-style-none">
                    </div>
          <!-- pagination end -->

                </div>
            </div>
        </div>
    </div>
</div>
