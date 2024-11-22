<div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-900 dark:to-gray-800">
    <div class="w-full mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="mt-16">

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Enhanced Filters Sidebar -->
            <div class="w-full lg:w-1/4 space-y-6">
                <!-- Categories Card with Hover Effects -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="p-5">
                        <h2 class="text-xl font-semibold text-gray-900 dark:text-white flex items-center gap-2 group">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-500 group-hover:rotate-180 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            Categories
                        </h2>
                        <div class="mt-4 space-y-3">
                            @foreach(['Smartphones', 'Laptops', 'Smartwatches', 'Television'] as $category)
                            <label class="flex items-center gap-3 group cursor-pointer">
                                <div class="relative">
                                    <input type="checkbox" class="peer hidden">
                                    <div class="w-5 h-5 border-2 border-gray-300 dark:border-gray-600 rounded-md peer-checked:bg-indigo-500 peer-checked:border-indigo-500 transition-all duration-300"></div>
                                    <svg class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-3 h-3 text-white hidden peer-checked:block transition-opacity duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300 group-hover:text-indigo-500 transition-colors duration-300">{{ $category }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Enhanced Brand Card -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="p-5">
                        <h2 class="text-xl font-semibold text-gray-900 dark:text-white flex items-center gap-2 group">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-500 group-hover:scale-110 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                            Brands
                        </h2>
                        <div class="mt-4 space-y-3">
                            @foreach(['Apple', 'Samsung', 'Nothing', 'OnePlus'] as $brand)
                            <label class="flex items-center gap-3 group cursor-pointer">
                                <div class="relative">
                                    <input type="checkbox" class="peer hidden">
                                    <div class="w-5 h-5 border-2 border-gray-300 dark:border-gray-600 rounded-md peer-checked:bg-indigo-500 peer-checked:border-indigo-500 transition-all duration-300"></div>
                                    <svg class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-3 h-3 text-white hidden peer-checked:block transition-opacity duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300 group-hover:text-indigo-500 transition-colors duration-300">{{ $brand }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Enhanced Product Status -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="p-5">
                        <h2 class="text-xl font-semibold text-gray-900 dark:text-white flex items-center gap-2 group">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-500 group-hover:rotate-45 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                            Product Status
                        </h2>
                        <div class="mt-4 space-y-3">
                            <label class="flex items-center gap-3 group cursor-pointer">
                                <div class="relative">
                                    <input type="checkbox" class="peer hidden">
                                    <div class="w-5 h-5 border-2 border-gray-300 dark:border-gray-600 rounded-md peer-checked:bg-indigo-500 peer-checked:border-indigo-500 transition-all duration-300"></div>
                                    <svg class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-3 h-3 text-white hidden peer-checked:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300 group-hover:text-indigo-500 transition-colors duration-300">In Stock</span>
                                
                            </label>
                            <label class="flex items-center gap-3 group cursor-pointer">
                                <div class="relative">
                                    <input type="checkbox" class="peer hidden">
                                    <div class="w-5 h-5 border-2 border-gray-300 dark:border-gray-600 rounded-md peer-checked:bg-indigo-500 peer-checked:border-indigo-500 transition-all duration-300"></div>
                                    <svg class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-3 h-3 text-white hidden peer-checked:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300 group-hover:text-indigo-500 transition-colors duration-300">On Sale</span>
                                
                            </label>
                            <label class="flex items-center gap-3 group cursor-pointer">
                                <div class="relative">
                                    <input type="checkbox" class="peer hidden">
                                    <div class="w-5 h-5 border-2 border-gray-300 dark:border-gray-600 rounded-md peer-checked:bg-indigo-500 peer-checked:border-indigo-500 transition-all duration-300"></div>
                                    <svg class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-3 h-3 text-white hidden peer-checked:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300 group-hover:text-indigo-500 transition-colors duration-300">Pre-Order</span>
                                
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Enhanced Price Range -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="p-5">
                        <h2 class="text-xl font-semibold text-gray-900 dark:text-white flex items-center gap-2 group">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-500 group-hover:bounce transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Price Range
                        </h2>
                        <div class="mt-4">
                            <div class="flex justify-between mb-2">
                                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">$100</span>
                                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">$5,000</span>
                            </div>
                            <input type="range" 
                                class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700"
                                min="100" 
                                max="5000" 
                                value="2500"
                                step="50">
                            <div class="mt-2 text-center">
                                <span class="text-sm font-medium text-indigo-500">$2,500</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enhanced Products Grid -->
            <div class="w-full lg:w-3/4">
                <!-- Enhanced Sort and View Options -->
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6 bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm border border-gray-200 dark:border-gray-700 hover:shadow-lg transition-all duration-300">
                    <div class="flex items-center gap-4">
                        <select class="bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 hover:border-indigo-500 transition-colors duration-300">
                            <option>Latest</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Popularity</option>
                        </select>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="text-sm text-gray-500 dark:text-gray-400">Show:</span>
                        <select class="bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 hover:border-indigo-500 transition-colors duration-300">
                            <option>12</option>
                            <option>24</option>
                            <option>36</option>
                        </select>
                    </div>
                </div>

                <div class="w-full">
                    <div class="flex gap-8">
                        @foreach($products as $product)
                            <div class="max-w-xs group relative transform transition-all duration-300 ease-out">
                                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-2xl transition-shadow duration-300">
                                    <!-- Status Badges -->
                                    <div class="absolute left-4 top-4 flex flex-col gap-2 z-20">
                                        @if($product->discount > 0)
                                            <div class="animate-float">
                                                <span class="bg-gradient-to-r from-red-500 via-rose-500 to-pink-500 text-white text-xs px-3 py-1 rounded-full font-semibold shadow-lg backdrop-blur-sm">
                                                    Save {{ $product->discount }}%
                                                </span>
                                            </div>
                                        @endif
                                        @if($product->stock < 10 && $product->stock > 0)
                                            <div class="animate-pulse">
                                                <span class="bg-gradient-to-r from-amber-500 to-orange-500 text-white text-xs px-3 py-1 rounded-full font-semibold shadow-lg backdrop-blur-sm">
                                                    Only {{ $product->stock }} left
                                                </span>
                                            </div>
                                        @endif
                                        @if(!$product->in_stock)
                                            <div>
                                                <span class="bg-gradient-to-r from-gray-600 to-gray-700 text-white text-xs px-3 py-1 rounded-full font-semibold shadow-lg backdrop-blur-sm">
                                                    Out of Stock
                                                </span>
                                            </div>
                                        @endif
                                    </div>

                                    @if($product->is_featured)
                                        <div class="absolute top-4 right-4 z-20 animate-bounce">
                                            <span class="bg-gradient-to-r from-emerald-500 to-green-500 text-white text-xs px-3 py-1 rounded-full font-semibold shadow-lg backdrop-blur-sm">
                                                New Arrival
                                            </span>
                                        </div>
                                    @endif

                                    <!-- Product Image -->
                                    <div class="relative overflow-hidden aspect-w-1 aspect-h-1">
                                        <img 
                                            wire:navigate
                                            src="{{ url('storage', $product->images[0])}}"
                                            alt="{{ $product->name }}"
                                            class="w-full h-34 mx-auto object-cover transition-opacity duration-300 ease-in-out"
                                        >
                                        
                                        <!-- Quick Actions Overlay -->
                                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                                            <div class="absolute bottom-0 left-0 right-0 p-6 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 flex items-center justify-between">
                                                <!-- Quick Action Buttons -->
                                                <div class="flex gap-3">
                                                    <a 
                                                        href="/"
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
                                        <!-- Brand Display -->
                                        <div class="flex items-center gap-2 mb-2">
                                            <span class="text-sm font-medium text-transparent bg-clip-text bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">
                                                {{ $product->brand->name }}
                                            </span>
                                        </div>
                                        
                                        <!-- Product Name -->
                                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2 line-clamp-2 group-hover:text-indigo-500 transition-colors duration-300">
                                            {{ $product->name }}
                                        </h3>

                                        <!-- Rating System -->
                                        <div class="flex items-center gap-2 mb-3">
                                            <div class="flex gap-1">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <svg class="w-4 h-4 {{ $i <= floor($product->rating) ? 'text-yellow-400' : 'text-gray-300' }} transform transition-transform duration-300 hover:scale-125" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                    </svg>
                                                @endfor
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">{{ number_format($product->rating, 1) }}</span>
                                                <span class="text-sm text-gray-500 dark:text-gray-400">({{ $product->review_count }} reviews)</span>
                                            </div>
                                        </div>

                                        <!-- Price Display and Action Button -->
                                        <div class="flex items-center justify-between mt-4">
                                            <div class="space-y-1">
                                                @if($product->discount > 0)
                                                    <p class="text-sm text-gray-400 line-through">
                                                        ${{ number_format($product->original_price, 2) }}
                                                    </p>
                                                @endif
                                                <p class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600">
                                                    ${{ number_format($product->price, 2) }}
                                                </p>
                                            </div>
                                            
                                            <button 
                                            @if(!$product->in_stock) disabled @endif
                                            class="flex items-center gap-1 py-2 px-2 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500
                                            {{ !$product->in_stock 
                                                ? 'bg-gray-400 cursor-not-allowed' 
                                                : 'bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 hover:from-indigo-600 hover:via-purple-600 hover:to-pink-600 text-white' 
                                            }}"
                                        >
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                            </svg>
                                            {{ !$product->in_stock ? 'Out of Stock' : 'Add to Cart' }}
                                        </button>   
                                        </div>

                                        <!-- Shipping Info -->
                                        @if($product->is_featured)
                                            <div class="mt-4 flex items-center gap-2 text-green-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                                <span class="text-sm font-medium">Free Shipping</span>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
            
                <!-- Enhanced Pagination -->
                <div class="mt-12">
                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition-all duration-300">
                        <div class="p-4 flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <p class="text-sm text-gray-500 dark:text-gray-400">
                                    Showing 1-12 of 36 products
                                </p>
                            </div>
                            <nav class="flex items-center gap-2">
                                <button class="p-2 text-gray-500 hover:text-indigo-500 dark:text-gray-400 dark:hover:text-indigo-400 disabled:opacity-50 disabled:cursor-not-allowed transition-colors duration-300" disabled>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                    </svg>
                                </button>
                                @foreach(range(1,3) as $page)
                                    <button class="w-10 h-10 rounded-lg {{ $page === 1 ? 'bg-gradient-to-r from-indigo-500 to-purple-500 text-white' : 'text-gray-500 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700' }} transition-all duration-300 hover:scale-110">
                                        {{ $page }}
                                    </button>
                                @endforeach
                                <button class="p-2 text-gray-500 hover:text-indigo-500 dark:text-gray-400 dark:hover:text-indigo-400 transition-colors duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </button>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>              
      </div>
    </div>
</div>  