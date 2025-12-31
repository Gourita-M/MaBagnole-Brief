<?php 
  session_start();
  include "./controlls/login_register.php"; 

  echo $_SESSION['username'];

  // session_unset();
  // session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>MaBagnole | Car Rental</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-100">

<!-- NAVBAR -->
<header class="bg-gray-800 shadow-lg">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    <h1 class="text-2xl font-bold text-yellow-400">MaBagnole</h1>

    <nav class="space-x-6 hidden md:block">
      <a href="./index.php" class="hover:text-yellow-400 transition">Home</a>
      <a href="#" class="hover:text-yellow-400 transition">Vehicles</a>
      <a href="./View/admin.php" class="hover:text-yellow-400 transition">Dashboard</a>
      <a href="#" class="hover:text-yellow-400 transition">Contact</a>
    </nav>

    <button id="open-login-modal"
      class="bg-yellow-500 text-black px-4 py-2 rounded-lg font-semibold hover:bg-yellow-400 transition">
      Login
    </button>
  </div>
</header>

<!-- AUTH MODAL -->
<div id="auth-modal" class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center hidden z-50">
  <div class="bg-gray-800 rounded-xl shadow-2xl w-full max-w-md p-6 relative text-gray-100">

    <button id="close-auth-modal"
      class="absolute top-3 right-3 text-gray-400 hover:text-white text-2xl">&times;</button>

    <!-- LOGIN -->
    <div id="login-form">
      <h2 class="text-2xl font-bold mb-6 text-center text-yellow-400">Login</h2>
      <form method="POST">
        <input name="email" type="email" placeholder="Email"
          class="w-full mb-4 px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-yellow-500 outline-none" />

        <input name="password" type="password" placeholder="Password"
          class="w-full mb-6 px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-yellow-500 outline-none" />

        <button name="login" type="submit"
          class="w-full bg-yellow-500 text-black py-3 rounded-lg font-semibold hover:bg-yellow-400 transition">
          Login
        </button>
      </form>

      <p class="mt-4 text-center text-sm text-gray-400">
        Don’t have an account?
        <button id="show-register" class="text-yellow-400 hover:underline">Register</button>
      </p>
    </div>

    <!-- REGISTER -->
    <div id="register-form" class="hidden">
      <h2 class="text-2xl font-bold mb-6 text-center text-yellow-400">Register</h2>
      <form method="POST">
        <input name="name" type="text" placeholder="Username"
          class="w-full mb-4 px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg" />

        <input name="email" type="email" placeholder="Email"
          class="w-full mb-4 px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg" />

        <input name="password" type="password" placeholder="Password"
          class="w-full mb-6 px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg" />

        <button name="register" type="submit"
          class="w-full bg-yellow-500 text-black py-3 rounded-lg font-semibold hover:bg-yellow-400 transition">
          Register
        </button>
      </form>

      <p class="mt-4 text-center text-sm text-gray-400">
        Already have an account?
        <button id="show-login" class="text-yellow-400 hover:underline">Login</button>
      </p>
    </div>
  </div>
</div>

<!-- HERO -->
<section class="bg-[url('https://images.unsplash.com/photo-1503376780353-7e6692767b70')] bg-cover bg-center">
  <div class="bg-black/80">
    <div class="max-w-7xl mx-auto px-6 py-28 text-center">
      <h2 class="text-5xl font-extrabold mb-4 text-white">
        Rent the Perfect Car in Morocco
      </h2>
      <p class="mb-8 text-lg text-gray-300">
        Flexible rentals • Best prices • New vehicles
      </p>
    </div>
  </div>
</section>

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

<!-- FOOTER -->
<footer class="bg-black text-gray-400">
  <div class="max-w-7xl mx-auto px-6 py-8 text-center">
    © 2025 MaBagnole. All rights reserved.
  </div>
</footer>

<script src="./index.js"></script>

</body>
</html>
