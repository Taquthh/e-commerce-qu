<header x-data="{ isOpen: false }" class="fixed w-full z-50 backdrop-blur-md bg-white/80 dark:bg-gray-800/80 shadow-md transition-all duration-300">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center py-4 md:space-x-10">
          <!-- Logo -->
          <div class="flex justify-start lg:w-0 lg:flex-1">
              <a href="/" class="flex items-center">
                  <span class="text-2xl font-black text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 transition-all duration-300">
                      ECommerce-qu
                  </span>
              </a>
          </div>

          <!-- Mobile menu button -->
          <div class="-mr-2 -my-2 md:hidden">
              <button @click="isOpen = !isOpen" type="button" class="bg-white dark:bg-gray-800 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                  <span class="sr-only">Open menu</span>
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
              </button>
          </div>

          <!-- Navigation Links -->
          <nav class="hidden md:flex space-x-10">
              <a href="/" class="text-base {{ request()->is('/') ? 'text-blue-600' : 'text-gray-500'}}  font-medium  hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400 transition-colors duration-300 relative group">
                  Home
                  <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-full"></span>
              </a>
              <a href="/categories" class="text-base {{ request()->is('categories') ? 'text-blue-600' : 'text-gray-500'}} font-medium hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400 transition-colors duration-300 relative group">
                  Categories
                  <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-full"></span>
              </a>
              <a href="/products" class="text-base {{ request()->is('products') ? 'text-blue-600' : 'text-gray-500'}} font-medium  hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400 transition-colors duration-300 relative group">
                  Products
                  <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-full"></span>
              </a>
          </nav>

          <!-- Cart and Login -->
          <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0 space-x-4">
              <a href="/cart" class="relative group">
                  <div class="flex items-center text-gray-500 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400 transition-colors duration-300">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                      </svg>
                      <span>Cart</span>
                      <span class="ml-2 px-2 py-0.5 text-xs font-bold text-white bg-blue-600 rounded-full group-hover:bg-blue-700 transition-colors duration-300">{{ $total_count }}</span>
                  </div>
              </a>

              <a href="/login" class="ml-4 px-4 py-2 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105">
                  Log in
              </a>
          </div>
      </div>

      <!-- Mobile menu, show/hide based on mobile menu state -->
      <div x-show="isOpen" x-transition:enter="duration-200 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
          <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white dark:bg-gray-800 divide-y-2 divide-gray-50 dark:divide-gray-700">
              <div class="pt-5 pb-6 px-5">
                  <div class="flex items-center justify-between">
                      <a href="/" class="text-xl font-black text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
                          ECommerce-qu
                      </a>
                      <div class="-mr-2">
                          <button @click="isOpen = false" type="button" class="bg-white dark:bg-gray-800 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                              <span class="sr-only">Close menu</span>
                              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                              </svg>
                          </button>
                      </div>
                  </div>
                  <div class="mt-6">
                      <nav class="grid gap-y-8">
                          <a href="/" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50 dark:hover:bg-gray-700">
                              <span class="ml-3 text-base font-medium text-gray-900 dark:text-white">Home</span>
                          </a>
                          <a href="/categories" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50 dark:hover:bg-gray-700">
                              <span class="ml-3 text-base font-medium text-gray-900 dark:text-white">Categories</span>
                          </a>
                          <a href="/products" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50 dark:hover:bg-gray-700">
                              <span class="ml-3 text-base font-medium text-gray-900 dark:text-white">Products</span>
                          </a>
                      </nav>
                  </div>
              </div>
              <div class="py-6 px-5 space-y-6">
                  <div>
                      <a href="/login" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-full shadow-sm text-base font-medium text-white bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700">
                          Log in
                      </a>
                  </div>
                  <div>
                      <a href="/cart" class="w-full flex items-center justify-center px-4 py-2 border border-gray-200 rounded-full text-base font-medium text-gray-500 hover:bg-gray-50 dark:border-gray-700 dark:text-gray-300 dark:hover:bg-gray-700">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                          </svg>
                          Cart (4)
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</header>