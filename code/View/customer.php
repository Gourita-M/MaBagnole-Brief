

<!-- CATEGORIES -->
<section class="max-w-7xl mx-auto px-6 py-16">
  <h3 class="text-3xl font-bold mb-10 text-center text-yellow-400">Vehicle Categories</h3>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
    <div class="bg-gray-800 rounded-xl p-6 text-center hover:bg-gray-700 transition">
      Economy
    </div>
    <div class="bg-gray-800 rounded-xl p-6 text-center hover:bg-gray-700 transition">
      SUV
    </div>
    <div class="bg-gray-800 rounded-xl p-6 text-center hover:bg-gray-700 transition">
      Luxury
    </div>
    <div class="bg-gray-800 rounded-xl p-6 text-center hover:bg-gray-700 transition">
      Motorbike
    </div>
  </div>
</section>

<!-- VEHICLES -->
<section class="bg-gray-950 py-16">
  <h3 class="text-3xl font-bold mb-10 text-center text-yellow-400">Available Vehicles</h3>

  <!-- SEARCH -->
  <div class="max-w-md mx-auto mb-10 relative">
    <input id="search" type="text" placeholder="Search vehicles..."
      class="w-full pl-12 pr-4 py-3 rounded-xl bg-gray-800 border border-gray-700 focus:ring-2 focus:ring-yellow-500 outline-none" />

    <svg class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 w-5 h-5"
      fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round"
        d="M21 21l-4.35-4.35M10 18a8 8 0 100-16 8 8 0 000 16z" />
    </svg>
  </div>

  <div class="max-w-7xl mx-auto px-6">
    <div id="listvehicles" class="grid grid-cols-1 md:grid-cols-3 gap-8"></div>

    <!-- PAGINATION -->
    <div class="flex justify-center mt-10 space-x-2">
      <a class="px-4 py-2 bg-gray-800 rounded hover:bg-yellow-500 hover:text-black transition">1</a>
      <a class="px-4 py-2 bg-gray-800 rounded hover:bg-yellow-500 hover:text-black transition">2</a>
      <a class="px-4 py-2 bg-gray-800 rounded hover:bg-yellow-500 hover:text-black transition">3</a>
    </div>
  </div>
</section>

