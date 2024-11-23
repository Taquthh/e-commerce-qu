<div class="min-h-screen bg-gradient-to-b from-gray-50 to-white">
  {{-- Breadcrumb --}}
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-4">
    <nav class="flex text-sm font-medium text-gray-500" aria-label="Breadcrumb">
      <ol class="flex items-center space-x-2">
        <li>
          <a href="#" class="hover:text-gray-700">Home</a>
        </li>
        <li>
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 16 16">
            <path d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z"/>
          </svg>
        </li>
        <li>
          <a href="#" class="hover:text-gray-700">Products</a>
        </li>
        <li>
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 16 16">
            <path d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z"/>
          </svg>
        </li>
        <li class="text-gray-900">{{ $product->name }}</li>
      </ol>
    </nav>
  </div>

  {{-- Main Container --}}
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-8 mt-16">
    {{-- Product Alert (if any) --}}
    @if($product->stock < 10 && $product->stock > 0)
    <div class="mb-6 rounded-lg bg-amber-50 p-4">
      <div class="flex">
        <svg class="h-5 w-5 text-amber-400" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495zM10 5a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 0110 5zm0 9a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
        </svg>
        <div class="ml-3">
          <h3 class="text-sm font-medium text-amber-800">Low stock alert</h3>
          <p class="mt-1 text-sm text-amber-700">Only {{ $product->stock }} units left. Order soon!</p>
        </div>
      </div>
    </div>
    @endif

    <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
      {{-- Product Section --}}
      <div class="p-4 sm:p-6 lg:p-8">
        {{-- Product Grid --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-12 gap-y-8">
          {{-- Image Gallery Section --}}
          <div class="space-y-4" x-data="{ 
            activeImage: '{{ url('storage', $product->images[0])}}',
            zoom: false,
            activeImageIndex: 0,
            images: {{ json_encode($product->images) }},
            nextImage() {
              this.activeImageIndex = (this.activeImageIndex + 1) % this.images.length;
              this.activeImage = '{{ url('storage') }}/' + this.images[this.activeImageIndex];
            },
            prevImage() {
              this.activeImageIndex = (this.activeImageIndex - 1 + this.images.length) % this.images.length;
              this.activeImage = '{{ url('storage') }}/' + this.images[this.activeImageIndex];
            }
          }">
            {{-- Main Image with Zoom --}}
            <div 
              class="aspect-square w-full relative rounded-xl overflow-hidden bg-gray-100 cursor-zoom-in"
              x-on:click="zoom = !zoom"
            >
              <img 
                x-bind:src="activeImage"
                alt="{{ $product->name }}"
                class="absolute inset-0 w-full h-full object-cover transition duration-500 ease-in-out"
                x-bind:class="{ 'scale-150': zoom }"
              >
              {{-- Image Navigation Arrows --}}
              <div class="absolute inset-0 flex items-center justify-between p-4 opacity-0 hover:opacity-100 transition-opacity">
                <button 
                  x-on:click.stop="prevImage"
                  class="p-2 rounded-full bg-white/80 hover:bg-white shadow-lg backdrop-blur-sm transition"
                >
                  <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                  </svg>
                </button>
                <button 
                  x-on:click.stop="nextImage"
                  class="p-2 rounded-full bg-white/80 hover:bg-white shadow-lg backdrop-blur-sm transition"
                >
                  <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                  </svg>
                </button>
              </div>
            </div>

            {{-- Thumbnail Grid --}}
            <div class="grid grid-cols-4 gap-4">
              @foreach ($product->images as $index => $image)
              <button 
                type="button"
                x-on:click="activeImage = '{{ url('storage', $image)}}'; activeImageIndex = {{ $index }}"
                class="aspect-square relative rounded-lg overflow-hidden bg-gray-100 ring-2 transition"
                x-bind:class="activeImage === '{{ url('storage', $image)}}' ? 'ring-blue-500' : 'ring-transparent hover:ring-gray-300'"
              >
                <img 
                  src="{{ url('storage', $image)}}"
                  alt="{{ $product->name }}"
                  class="absolute inset-0 w-full h-full object-cover"
                >
              </button>
              @endforeach
            </div>
          </div>

          {{-- Product Info Section --}}
          <div class="flex flex-col space-y-6">
            {{-- Title, Price & Rating --}}
            <div class="space-y-4 pb-6">
              <div class="flex items-center justify-between">
                <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900">
                  {{ $product->name }}
                </h1>
                <button class="p-2 hover:bg-gray-100 rounded-full transition-colors">
                  <svg class="w-6 h-6 text-gray-500 hover:text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                  </svg>
                </button>
              </div>

              {{-- Price & Stock Status --}}
              <div class="flex items-baseline gap-4">
                <p class="text-3xl font-bold text-gray-900">
                  {{ Number::currency($product->price, 'USD')}}
                </p>
                @if($product->stock > 0)
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                  In Stock
                </span>
                @else
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                  Out of Stock
                </span>
                @endif
              </div>

              {{-- Ratings --}}
              <div class="flex items-center gap-2">
                <div class="flex items-center">
                  @for($i = 0; $i < 5; $i++)
                    <svg class="w-5 h-5 {{ $i < 4 ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                  @endfor
                </div>
                <span class="text-sm text-gray-600">4.0 (128 reviews)</span>
              </div>
            </div>

            {{-- Description --}}
            <div class="prose prose-sm sm:prose max-w-none text-gray-600">
              {!! Str::markdown($product->description)!!}
            </div>

            {{-- Variants (if any) --}}
            @if(isset($product->variants))
            <div class="space-y-3">
              <label class="block text-sm font-medium text-gray-700">
                Select Size
              </label>
              <div class="flex flex-wrap gap-2">
                @foreach(['S', 'M', 'L', 'XL'] as $size)
                <button class="px-4 py-2 text-sm font-medium rounded-lg border-2 transition-colors" 
                  x-data="{ selected: false }"
                  x-on:click="selected = !selected"
                  x-bind:class="selected ? 'border-blue-500 text-blue-500' : 'border-gray-300 text-gray-700 hover:border-gray-400'">
                  {{ $size }}
                </button>
                @endforeach
              </div>
            </div>
            @endif

            {{-- Quantity Selector --}}
            <div class="space-y-3">
              <label for="quantity" class="block text-sm font-medium text-gray-700">
                Quantity
              </label>
              <div class="flex items-center space-x-3" x-data="{ quantity: 1 }">
                <button 
                  type="button"
                  x-on:click="quantity = Math.max(1, quantity - 1)"
                  class="inline-flex items-center justify-center w-10 h-10 text-gray-600 bg-gray-100 rounded-lg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                >
                  <span class="sr-only">Decrease quantity</span>
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                  </svg>
                </button>
                
                <input
                  type="number"
                  id="quantity"
                  name="quantity"
                  x-model="quantity"
                  min="1"
                  max="{{ $product->stock }}"
                  class="block w-20 text-center border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                >

                <button 
                  type="button"
                  x-on:click="quantity = Math.min({{ $product->stock }}, quantity + 1)"
                  class="inline-flex items-center justify-center w-10 h-10 text-gray-600 bg-gray-100 rounded-lg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                >
                  <span class="sr-only">Increase quantity</span>
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                  </svg>
                </button>
              </div>
            </div>

            {{-- Add to Cart & Shipping Info --}}
            <div class="space-y-4 pt-6">
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <button 
                  type="button"
                  class="w-full flex items-center justify-center px-6 py-4 text-base font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors"
                >
                  Add to Cart
                </button>
                <button 
                  type="button"
                  class="w-full flex items-center justify-center px-6 py-4 text-base font-medium text-blue-600 bg-blue-50 rounded-lg hover:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors"
                >
                  Buy Now
                </button>
              </div>

              {{-- Shipping & Returns Info --}}
              <div class="border-t border-gray-200 pt-6 space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                  {{-- Free Shipping --}}
                  <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0">
                      <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                      </svg>
                    </div>
                    <div>
                      <h4 class="text-sm font-medium text-gray-900">Free Shipping</h4>
                      <p class="mt-1 text-sm text-gray-500">On orders over $100</p>
                    </div>
                  </div>

                  {{-- Returns --}}
                  <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0">
                      <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 15v-1a4 4 0 00-4-4H8m0 0l3 3m-3-3l3-3m9 14V5a2 2 0 00-2-2H6a2 2 0 00-2 2v16l4-2 4 2 4-2 4 2z"/>
                      </svg>
                    </div>
                    <div>
                      <h4 class="text-sm font-medium text-gray-900">Easy Returns</h4>
                      <p class="mt-1 text-sm text-gray-500">30-day return policy</p>
                    </div>
                  </div>

                  {{-- Secure Payment --}}
                  <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0">
                      <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                      </svg>
                    </div>
                    <div>
                      <h4 class="text-sm font-medium text-gray-900">Secure Payment</h4>
                      <p class="mt-1 text-sm text-gray-500">100% secure checkout</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        {{-- Product Details Tabs --}}
        <div class="mt-16" x-data="{ activeTab: 'description' }">
          {{-- Tab Headers --}}
          <div class="border-b border-gray-200">
            <nav class="flex space-x-8" aria-label="Product Information">
              <button
                x-on:click="activeTab = 'description'"
                class="pb-4 text-sm font-medium transition-colors"
                x-bind:class="activeTab === 'description' ? 'border-b-2 border-blue-500 text-blue-600' : 'text-gray-500 hover:text-gray-700 hover:border-gray-300'"
              >
                Description
              </button>
              <button
                x-on:click="activeTab = 'specifications'"
                class="pb-4 text-sm font-medium transition-colors"
                x-bind:class="activeTab === 'specifications' ? 'border-b-2 border-blue-500 text-blue-600' : 'text-gray-500 hover:text-gray-700 hover:border-gray-300'"
              >
                Specifications
              </button>
              <button
                x-on:click="activeTab = 'reviews'"
                class="pb-4 text-sm font-medium transition-colors"
                x-bind:class="activeTab === 'reviews' ? 'border-b-2 border-blue-500 text-blue-600' : 'text-gray-500 hover:text-gray-700 hover:border-gray-300'"
              >
                Reviews (128)
              </button>
            </nav>
          </div>

          {{-- Tab Contents --}}
          <div class="py-6">
            {{-- Description Tab --}}
            <div x-show="activeTab === 'description'" class="prose prose-sm sm:prose max-w-none">
              {!! Str::markdown($product->long_description ?? $product->description) !!}
            </div>

            {{-- Specifications Tab --}}
            <div x-show="activeTab === 'specifications'" class="space-y-6">
              <dl class="grid grid-cols-1 gap-x-4 gap-y-6 sm:grid-cols-2">
                @foreach($product->specifications ?? [] as $spec)
                <div class="sm:col-span-1">
                  <dt class="text-sm font-medium text-gray-500">{{ $spec->name }}</dt>
                  <dd class="mt-1 text-sm text-gray-900">{{ $spec->value }}</dd>
                </div>
                @endforeach
              </dl>
            </div>

            {{-- Reviews Tab --}}
            <div x-show="activeTab === 'reviews'" class="space-y-8">
              {{-- Review Stats --}}
              <div class="flex items-center space-x-4">
                <div class="flex-1 max-w-xs">
                  <h3 class="text-lg font-medium text-gray-900">Customer Reviews</h3>
                  <div class="flex items-center mt-2">
                    <div class="flex items-center">
                      @for($i = 0; $i < 5; $i++)
                        <svg class="w-5 h-5 {{ $i < 4 ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                      @endfor
                    </div>
                    <p class="ml-2 text-sm text-gray-900">4.0 out of 5</p>
                  </div>
                  <p class="mt-1 text-sm text-gray-500">Based on 128 reviews</p>
                </div>

                {{-- Rating Distribution --}}
                <div class="flex-1">
                  @foreach([5,4,3,2,1] as $rating)
                  <div class="flex items-center mt-1">
                    <span class="text-sm font-medium text-gray-600 w-8">{{ $rating }}★</span>
                    <div class="flex-1 ml-2">
                      <div class="h-2 rounded-full bg-gray-200">
                        <div class="h-2 rounded-full bg-yellow-400" style="width: {{ rand(10, 90) }}%"></div>
                      </div>
                    </div>
                    <span class="ml-2 text-sm font-medium text-gray-600">{{ rand(10, 90) }}%</span>
                  </div>
                  @endforeach
                </div>
              </div>

              {{-- Write Review Button --}}
              <div>
                <button class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                  Write a Review
                </button>
              </div>

              {{-- Review List --}}
              <div class="space-y-8">
                @foreach(range(1, 3) as $review)
                <div class="border-b border-gray-200 pb-8">
                  <div class="flex items-center mb-4">
                    <div class="flex items-center">
                      @for($i = 0; $i < 5; $i++)
                        <svg class="w-4 h-4 {{ $i < 4 ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                      @endfor
                    </div>
                    <h4 class="ml-4 text-sm font-medium text-gray-900">John Doe</h4>
                    <span class="ml-4 text-sm text-gray-500">Verified Buyer</span>
                  </div>
                  <h5 class="text-sm font-medium text-gray-900 mb-2">Great product, highly recommend!</h5>
                  <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <div class="mt-4 flex items-center space-x-4">
                    <button class="text-sm text-gray-500 hover:text-gray-700">
                      Helpful (12)
                    </button>
                    <button class="text-sm text-gray-500 hover:text-gray-700">
                      Report
                    </button>
                  </div>
                </div>
                @endforeach

                {{-- Load More Reviews --}}
                <button class="w-full py-3 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                  Load More Reviews
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Related Products --}}
    <div class="mt-16">
      <h2 class="text-xl font-bold text-gray-900 mb-6">You Might Also Like</h2>
      <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach(range(1, 4) as $related)
        <div class="group relative">
          <div class="aspect-square w-full overflow-hidden rounded-lg bg-gray-100">
            <img src="/api/placeholder/400/400" alt="Related Product" class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <div class="mt-4">
            <h3 class="text-sm font-medium text-gray-900">
              <a href="#">Related Product {{ $related }}</a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">Black</p>
            <p class="mt-1 text-sm font-medium text-gray-900">$35.00</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>