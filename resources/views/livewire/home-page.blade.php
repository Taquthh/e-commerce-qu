<div class="font-sans antialiased bg-gray-50">
    <!-- Hero Section with Improved Gradient -->
    <div class="relative min-h-[600px] overflow-hidden bg-gradient-to-br from-orange-600 via-red-600 to-pink-600" x-data="heroSection">
        <!-- Animated Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" 
                 style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'%23fff\' fill-opacity=\'0.15\' fill-rule=\'evenodd\'%3E%3Ccircle cx=\'30\' cy=\'30\' r=\'4\'/%3E%3C/g%3E%3C/svg%3E');"
                 x-ref="pattern">
            </div>
        </div>

        <!-- Main Content Container -->
        <div class="container mx-auto px-4 relative z-10">
            <!-- Enhanced Flash Sale Banner -->
            <div class="transform -translate-y-1 transition-all duration-300 hover:translate-y-0">
                <div x-data="countdown" 
                     class="text-center py-3 bg-gradient-to-r from-yellow-400 via-orange-500 to-red-500 rounded-b-xl shadow-lg mb-8 cursor-pointer"
                     @mouseover="isHovered = true"
                     @mouseleave="isHovered = false">
                    <p class="text-white text-sm md:text-base font-medium flex items-center justify-center space-x-2">
                        <span class="animate-pulse">🔥</span>
                        <span>Flash Sale Berakhir Dalam</span>
                        <span class="font-mono font-bold" x-text="formatTime"></span>
                        <span class="animate-pulse">🔥</span>
                    </p>
                </div>
            </div>

            <!-- Enhanced Hero Grid -->
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-16 items-center py-12">
                <!-- Left Content with Improved Animation -->
                <div class="space-y-8 transform" x-ref="heroContent">
                    <!-- Enhanced Search Bar -->
                    <div class="relative max-w-xl mx-auto lg:mx-0" x-data="{ focused: false }">
                        <input type="text" 
                               placeholder="Cari produk atau brand favorit kamu..." 
                               class="w-full px-6 py-4 rounded-xl border-2 transition-all duration-300"
                               :class="focused ? 'border-orange-500 shadow-lg shadow-orange-100' : 'border-orange-300'"
                               @focus="focused = true"
                               @blur="focused = false">
                        <button class="absolute right-2 top-1/2 -translate-y-1/2 bg-gradient-to-r from-orange-500 to-red-500 hover:from-orange-600 hover:to-red-600 text-white px-6 py-2 rounded-lg transition-all duration-300 transform hover:scale-105">
                            <span class="hidden sm:inline">Cari</span>
                            <svg class="w-5 h-5 sm:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </button>
                    </div>

                    <!-- Enhanced Main Text -->
                    <div>
                        <h1 class="text-4xl lg:text-6xl font-bold text-white leading-tight text-center lg:text-left">
                            New Year Sale
                            <span class="block text-yellow-300 mt-2">Diskon Hingga 90%</span>
                        </h1>
                    </div>

                    <!-- Enhanced Features Grid -->
                    <div class="grid grid-cols-2 gap-4 mt-8">
                        <template x-for="feature in features" :key="feature.id">
                            <div class="group bg-white/10 backdrop-blur-sm rounded-xl p-4 transition-all duration-300 hover:bg-white/20 cursor-pointer transform hover:-translate-y-1">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                        <i :class="feature.icon" class="text-white text-xl"></i>
                                    </div>
                                    <span class="text-white text-sm md:text-base" x-text="feature.text"></span>
                                </div>
                            </div>
                        </template>
                    </div>

                    <!-- Enhanced CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-6">
                        <a href="/flash-sale" class="flex-1 transform hover:-translate-y-1 transition-all duration-300">
                            <button class="w-full px-8 py-4 bg-gradient-to-r from-yellow-400 to-orange-500 hover:from-yellow-300 hover:to-orange-400 text-white font-bold rounded-xl shadow-lg transition-all duration-300 flex items-center justify-center space-x-2">
                                <span>Flash Sale</span>
                                <svg class="w-5 h-5 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </button>
                        </a>
                        <a href="/promo" class="flex-1 transform hover:-translate-y-1 transition-all duration-300">
                            <button class="w-full px-8 py-4 bg-white hover:bg-gray-50 text-orange-600 font-bold rounded-xl shadow-lg transition-all duration-300">
                                Lihat Semua Promo
                            </button>
                        </a>
                    </div>
                </div>

                <!-- Right Content (Hero Image) -->
                <div class="container mx-auto px-4">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-4">Featured Products</h2>
                <p class="text-xl text-center text-gray-600 mb-12">Check out our latest and most popular tech gadgets.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2   gap-8">
                    @foreach($products as $product)
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 ease-in-out transform hover:scale-105">
                            <img src="{{ url('storage', $product->images[0]) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold text-gray-800">{{ $product->name }}</h3>
                                <div class="mt-4 flex justify-between items-center">
                                    <span class="text-xl font-bold text-blue-600">Rp.{{ number_format($product->price, 0, ',', '.') }}</span>
                                    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors duration-300">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            </div>
        </div>
    </div>

    <!-- Enhanced Brand Section -->
    <section class="py-20 bg-white" x-data="brandSection">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" x-intersect="animate()">
                <h2 class="text-3xl md:text-5xl font-bold text-gray-900">
                    Browse Popular <span class="text-orange-600">Brands</span>
                </h2>
                <p class="mt-4 text-xl text-gray-600">Discover top-tier technology from industry-leading brands, all in one place.</p>
                <div class="mt-4 flex justify-center">
                    <div class="w-24 h-1 rounded-full bg-gradient-to-r from-orange-500 to-red-500"></div>
                </div>
            </div>

            <!-- Brand Grid with Hover Effects -->
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-8">
                @foreach($brands as $brand)
                    <div class="group bg-white rounded-xl shadow-md p-6 flex flex-col items-center justify-center transition-all duration-300 hover:shadow-xl transform hover:-translate-y-2">
                        <div class="relative w-24 h-24 mb-4">
                            <img src="{{ url('storage', $brand->image) }}" 
                                 alt="{{ $brand->name }}" 
                                 class="w-full h-full object-contain transition-transform duration-300 group-hover:scale-110">
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 group-hover:text-orange-600 transition-colors duration-300">
                            {{ $brand->name }}
                        </h3>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Enhanced Category Section -->
    <section class="py-20 bg-gradient-to-br from-orange-50 via-orange-100 to-red-50" x-data="categorySection">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" x-intersect="animate()">
                <h2 class="text-3xl md:text-5xl font-bold text-gray-900">
                    Browse <span class="text-orange-600">Categories</span>
                </h2>
                <p class="mt-4 text-xl text-gray-600">Explore our wide range of product categories to find exactly what you need.</p>
                <div class="mt-4 flex justify-center">
                    <div class="w-24 h-1 rounded-full bg-gradient-to-r from-orange-500 to-red-500"></div>
                </div>
            </div>

            <!-- Enhanced Category Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($categories as $category)
                    <a href="/products?selected_categories[0]={{ $category->id }}" 
                       class="group bg-white border rounded-xl transition-all duration-300 hover:shadow-xl transform hover:-translate-y-2">
                        <div class="p-6">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center space-x-4">
                                    <div class="w-16 h-16 rounded-full overflow-hidden">
                                        <img src="{{ url('storage', $category->image) }}" 
                                             alt="{{ $category->name }}" 
                                             class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-110">
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-800 group-hover:text-orange-600 transition-colors duration-300">
                                            {{ $category->name }}
                                        </h3>
                                    </div>
                                </div>
                                <div class="text-orange-600 transform transition-transform duration-300 group-hover:translate-x-2">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    </div>