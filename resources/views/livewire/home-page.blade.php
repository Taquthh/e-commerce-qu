<div x-data="{ mobileMenuOpen: false }" class="min-h-screen bg-gradient-to-r from-blue-900 to-cyan-800 overflow-hidden relative">
  <!-- Particle Background -->
  <div class="particle-background absolute inset-0 z-0 opacity-50">
      <div class="absolute w-full h-full" id="particle-canvas"></div>
  </div>

  <!-- Hero Section -->
  <div class="relative z-10 min-h-screen flex items-center">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8">
          <div class="grid md:grid-cols-2 gap-12 items-center">
              <!-- Content Section -->
              <div class="space-y-8 z-20">
                  <div class="bg-blue-100 text-blue-800 rounded-full px-4 py-2 inline-block text-sm font-medium animate-pulse">
                      🛒 Summer Tech Sale - Up to 50% Off!
                  </div>
                  
                  <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white leading-tight">
                      Discover <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-300 to-blue-500">Smart Shopping</span> Revolution
                  </h1>
                  
                  <p class="text-lg text-gray-200 leading-relaxed">
                      Immerse yourself in a cutting-edge shopping experience. Explore revolutionary products that blend technology with lifestyle, transforming the way you interact with your surroundings.
                  </p>
                  
                  <!-- CTA Buttons -->
                  <div class="flex flex-col sm:flex-row gap-4">
                      <a href="/products" class="group overflow-hidden bg-gradient-to-r from-cyan-500 to-blue-600 text-white px-8 py-4 rounded-lg font-semibold shadow-2xl hover:scale-105 transition-all duration-300 flex items-center justify-center glow-on-hover">
                          Shop Now
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                          </svg>
                      </a>
                      <a href="#" class="bg-white/10 backdrop-blur-lg text-white px-8 py-4 rounded-lg font-semibold shadow-xl hover:bg-white/20 transition-all duration-300 flex items-center justify-center">
                          Watch Demo
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                      </a>
                  </div>

                  <!-- Features -->
                  <div class="grid grid-cols-2 gap-4 mt-8">
                      <div class="bg-white/10 backdrop-blur-lg rounded-lg p-4 flex items-center space-x-3">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-cyan-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                          </svg>
                          <span class="text-white">Secure Payments</span>
                      </div>
                      <div class="bg-white/10 backdrop-blur-lg rounded-lg p-4 flex items-center space-x-3">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-cyan-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                          </svg>
                          <span class="text-white">Best Deals</span>
                      </div>
                      <div class="bg-white/10 backdrop-blur-lg rounded-lg p-4 flex items-center space-x-3">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-cyan-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                          <span class="text-white">24/7 Support</span>
                      </div>
                      <div class="bg-white/10 backdrop-blur-lg rounded-lg p-4 flex items-center space-x-3">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-cyan-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                          </svg>
                          <span class="text-white">Premium Quality</span>
                      </div>
                  </div>
              </div>
              
              <!-- Advanced Interactive Product Visualization -->
              <div class="relative w-full h-[600px] perspective-1000 hidden md:block">
                  <div class="absolute inset-0 z-10">
                      <!-- Floating Product Elements -->
                      <div class="absolute product-element-1 transform hover:rotate-12 transition-transform duration-500 cursor-pointer">
                          <div class="w-48 h-48 bg-white/10 backdrop-blur-lg rounded-2xl border border-white/20 shadow-2xl flex items-center justify-center rotate-on-scroll">
                              <div class="w-32 h-32 bg-gradient-to-br from-cyan-400/30 to-blue-600/30 rounded-xl flex items-center justify-center">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-white/70" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                  </svg>
                              </div>
                          </div>
                      </div>

                      <div class="absolute product-element-2 transform hover:-rotate-12 transition-transform duration-500 cursor-pointer">
                          <div class="w-56 h-56 bg-white/10 backdrop-blur-lg rounded-2xl border border-white/20 shadow-2xl flex items-center justify-center rotate-on-scroll">
                              <div class="w-40 h-40 bg-gradient-to-br from-blue-500/30 to-cyan-400/30 rounded-xl flex items-center justify-center">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-white/70" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 18h.01M8 21h8a2 2 0 002-2v-6a2 2 0 00-2-2H8a2 2 0 00-2 2v6a2 2 0 002 2zm0-14v-1a2 2 0 012-2h4a2 2 0 012 2v1M8 7h8" />
                                  </svg>
                              </div>
                          </div>
                      </div>

                      <div class="absolute product-element-3 transform hover:rotate-6 transition-transform duration-500 cursor-pointer">
                          <div class="w-40 h-40 bg-white/10 backdrop-blur-lg rounded-2xl border border-white/20 shadow-2xl flex items-center justify-center rotate-on-scroll">
                              <div class="w-28 h-28 bg-gradient-to-br from-cyan-500/30 to-blue-600/30 rounded-xl flex items-center justify-center">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-white/70" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 11c0 3.517-1.979 6.472-5 7.758v2.986l2.485-1.79a7.947 7.947 0 004.515 1.306c4.418 0 8-3.134 8-7a8 8 0 00-16 0c0 1.462.542 2.8 1.434 3.896z" />
                                  </svg>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Scroll Indicator -->
  <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex flex-col items-center animate-bounce">
      <span class="text-white text-sm mb-2">Scroll to Explore</span>
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
      </svg>
  </div>


<!-- Brand Section -->
<section class="py-20 bg-gray-100">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Browse Popular <span class="text-blue-600">Brands</span></h2>
          <p class="mt-4 text-xl text-gray-600">Discover top-tier technology from industry-leading brands, all in one place.</p>
          <div class="mt-4 flex justify-center">
              <div class="w-16 h-1 rounded-full bg-blue-600 inline-flex"></div>
          </div>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
          @foreach($brands as $brand)
              <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center justify-center transition duration-300 ease-in-out transform hover:scale-105">
                  <img src="{{ url('storage', $brand->image)}}" alt="{{ $brand->name}} " class="w-24 h-24 object-contain *: mb-4">
                  <h3 class="text-xl font-semibold text-gray-800">{{ $brand->name }}</h3>
              </div>
          @endforeach
      </div>
  </div>
</section>

<!-- Category Section -->
<div class="bg-orange-200 py-20">
  <div class="max-w-xl mx-auto">
    <div class="text-center ">
      <div class="relative flex flex-col items-center">
        <h1 class="text-5xl font-bold dark:text-gray-200"> Browse <span class="text-blue-500"> Categories
          </span> </h1>
        <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
          <div class="flex-1 h-2 bg-blue-200">
          </div>
          <div class="flex-1 h-2 bg-blue-400">
          </div>
          <div class="flex-1 h-2 bg-blue-600">
          </div>
        </div>
      </div>
      <p class="mb-12 text-base text-center text-gray-500">
        Explore our wide range of product categories to find exactly what you need.
      </p>
    </div>
  </div>

  <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
    <div class="grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-6">
  
        @foreach($categories as $category)
            <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                <div class="p-4 md:p-5">
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                    <img src="{{ url('storage', $category->image)}}" alt="{{ $category->name}} " class="h-[2.375rem] w-[2.375rem] rounded-full" src="https://i01.appmifile.com/v1/MI_18455B3E4DA706226CF7535A58E875F0267/pms_1632893007.55719480!400x400!85.png" alt="Image Description">
                    <div class="ms-3">
                        <h3 class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
                            {{ $category->name }}
                        </h3>
                    </div>
                    </div>
                    <div class="ps-3">
                    <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                    </div>
                </div>
                </div>
            </a>
        @endforeach
    </div>
  </div>

</div>

  <!-- Featured Products -->
  <section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-4">Featured Products</h2>
        <p class="text-xl text-center text-gray-600 mb-12">Check out our latest and most popular tech gadgets.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($products as $product)
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 ease-in-out transform hover:scale-105">
                    <img src="{{ url('storage', $product->images[0])}}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-gray-800">{{ $product->name }}</h3>
                        <p class="text-gray-600 mt-2">
                            @php
                                $shortDesc = Str::limit($product->description, 100, '...');
                            @endphp
                            <span class="short-description">{{ $shortDesc }}</span>
                            <span class="full-description hidden">{{ $product->description }}</span>
                        </p>
                        <button 
                            class="text-blue-600 hover:underline selengkapnya-btn" 
                            onclick="toggleDescription(this)">
                            More
                        </button>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-xl font-bold text-blue-600">Rp.{{ $product->price }}</span>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors duration-300">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<style>
    @keyframes float1 {
        0% { transform: translateY(0) rotate(-3deg); }
        100% { transform: translateY(-30px) rotate(3deg); }
    }
    @keyframes float2 {
        0% { transform: translateY(0) rotate(3deg); }
        100% { transform: translateY(30px) rotate(-3deg); }
    }
    @keyframes float3 {
        0% { transform: translateY(0) rotate(-2deg); }
        100% { transform: translateY(-20px) rotate(2deg); }
    }
    .product-element-1 {
        top: 10%;
        left: 20%;
        animation: float1 6s ease-in-out infinite alternate;
    }
    .product-element-2 {
        top: 40%;
        right: 15%;
        animation: float2 5s ease-in-out infinite alternate;
    }lass=
    .product-element-3 {
        bottom: 20%;
        left: 30%;
        animation: float3 4s ease-in-out infinite alternate;
    }
    .perspective-1000 {
        perspective: 1000px;
    }
    .glow-on-hover:hover {
        box-shadow: 0 0 15px rgba(0, 255, 255, 0.7);
    }
    .rotate-on-scroll {
        transition: transform 0.5s ease-out;
    }
</style>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        particlesJS('particle-canvas', {
            particles: {
                number: { value: 100, density: { enable: true, value_area: 800 } },
                color: { value: '#ffffff' },
                shape: { 
                    type: 'circle',
                    stroke: { width: 0, color: '#000000' },
                    polygon: { nb_sides: 5 }
                },
                opacity: { 
                    value: 0.5, 
                    random: false,
                    anim: { enable: false, speed: 1, opacity_min: 0.1, sync: false }
                },
                size: { 
                    value: 3, 
                    random: true,
                    anim: { enable: false, speed: 40, size_min: 0.1, sync: false }
                },
                line_linked: { 
                    enable: true, 
                    distance: 150, 
                    color: '#ffffff', 
                    opacity: 0.4, 
                    width: 1 
                },
                move: {
                    enable: true,
                    speed: 2,
                    direction: 'none',
                    random: false,
                    straight: false,
                    out_mode: 'out',
                    bounce: false,
                    attract: { enable: false, rotateX: 600, rotateY: 1200 }
                }
            },
            interactivity: { 
                detect_on: 'canvas', 
                events: { 
                    onhover: { enable: true, mode: 'repulse' }, 
                    onclick: { enable: true, mode: 'push' }, 
                    resize: true 
                },
                modes: {
                    repulse: { distance: 100, duration: 0.4 },
                    push: { particles_nb: 4 }
                }
            },
            retina_detect: true
        });

        // Rotate elements on scroll
        const rotateElements = document.querySelectorAll('.rotate-on-scroll');
        window.addEventListener('scroll', () => {
            const scrollPercentage = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
            rotateElements.forEach(element => {
                element.style.transform = `rotateY(${scrollPercentage * 3.6}deg)`;
            });
        });

        // Add hover effect to product elements
        const productElements = document.querySelectorAll('.product-element-1, .product-element-2, .product-element-3');
        productElements.forEach(element => {
            element.addEventListener('mouseenter', () => {
                element.style.transform = 'scale(1.1) rotate(0deg)';
            });
            element.addEventListener('mouseleave', () => {
                element.style.transform = 'scale(1) rotate(0deg)';
            });
        });
    });
</script>
@endpush
</div>
