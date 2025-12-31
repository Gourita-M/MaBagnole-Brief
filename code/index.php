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
<body class="bg-gray-50 text-gray-800">

<!-- NAVBAR -->
<header class="bg-white shadow">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    <h1 class="text-2xl font-bold text-yellow-500">MaBagnole</h1>
    <nav class="space-x-6 hidden md:block">
      <a href="./index.php" class="hover:text-yellow-500">Home</a>
      <a href="#" class="hover:text-yellow-500">Vehicles</a>
      <a href="./View/admin.php" class="hover:text-yellow-500">Dashboard</a>
      <a href="#" class="hover:text-yellow-500">Contact</a>
    </nav>
    <button id="open-login-modal" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Login</button>
  </div>
</header>

<div id="auth-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
  <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6 relative">


    <button id="close-auth-modal" class="absolute top-3 right-3 text-gray-500 hover:text-gray-700 text-xl font-bold">&times;</button>

    <div id="login-form">
      <h2 class="text-2xl font-bold mb-6 text-center">Login to MaBagnole</h2>
      <form method="POST">
        <input name="email" type="email" placeholder="Email" required
          class="w-full mb-4 px-4 py-3 border rounded focus:outline-yellow-500" />
        <input name="password" type="password" placeholder="Password" required
          class="w-full mb-6 px-4 py-3 border rounded focus:outline-yellow-500" />
        <button name="login" type="submit"
          class="w-full bg-yellow-500 hover:bg-yellow-600 text-white py-3 rounded font-semibold">Login</button>
      </form>
      <p class="mt-4 text-center text-sm text-gray-600">
        Don't have an account? 
        <button id="show-register" class="text-yellow-500 hover:underline font-semibold">Register here</button>
      </p>
    </div>

    <div id="register-form" class="hidden">
      <h2 class="text-2xl font-bold mb-6 text-center">Register at MaBagnole</h2>
      <form method="POST">
        <input name="name" type="text" placeholder="Username" required
          class="w-full mb-4 px-4 py-3 border rounded focus:outline-yellow-500" />
        <input name="email" type="email" placeholder="Email" required
          class="w-full mb-4 px-4 py-3 border rounded focus:outline-yellow-500" />
        <input name="password" type="password" placeholder="Password" required
          class="w-full mb-6 px-4 py-3 border rounded focus:outline-yellow-500" />
        <button name="register" type="submit"
          class="w-full bg-yellow-500 hover:bg-yellow-600 text-white py-3 rounded font-semibold">Register</button>
      </form>
      <p class="mt-4 text-center text-sm text-gray-600">
        Already have an account? 
        <button id="show-login" class="text-yellow-500 hover:underline font-semibold">Login here</button>
      </p>
    </div>

  </div>
</div>

<!-- HERO SECTION -->
<section class="bg-[url('https://images.unsplash.com/photo-1503376780353-7e6692767b70')] bg-cover bg-center">
  <div class="bg-black/60">
    <div class="max-w-7xl mx-auto px-6 py-24 text-center text-white">
      <h2 class="text-4xl md:text-5xl font-bold mb-4">Rent the Perfect Car in Morocco</h2>
      <p class="mb-8 text-lg">Flexible rentals • Best prices • New vehicles</p>

      <!-- SEARCH FORM -->
      <div class="bg-white rounded-lg p-6 grid grid-cols-1 md:grid-cols-4 gap-4 text-gray-800">
        <input type="text" placeholder="Pick-up location" class="border p-3 rounded" />
        <input type="date" class="border p-3 rounded" />
        <input type="date" class="border p-3 rounded" />
        <button class="bg-yellow-500 text-white rounded px-4 py-3 hover:bg-yellow-600">Search</button>
      </div>
    </div>
  </div>
</section>

<!-- VEHICLE CATEGORIES -->
<section class="max-w-7xl mx-auto px-6 py-16">
  <h3 class="text-3xl font-bold mb-10 text-center">Vehicle Categories</h3>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
    <div class="bg-white shadow rounded p-6 text-center hover:shadow-lg">
      <h4 class="font-semibold text-lg">Economy</h4>
    </div>
    <div class="bg-white shadow rounded p-6 text-center hover:shadow-lg">
      <h4 class="font-semibold text-lg">SUV</h4>
    </div>
    <div class="bg-white shadow rounded p-6 text-center hover:shadow-lg">
      <h4 class="font-semibold text-lg">Luxury</h4>
    </div>
    <div class="bg-white shadow rounded p-6 text-center hover:shadow-lg">
      <h4 class="font-semibold text-lg">Motorbike</h4>
    </div>
  </div>
</section>

<!-- VEHICLE LIST -->
<section class="bg-gray-100 py-16">
  <h3 class="text-3xl font-bold mb-10 text-center">Available Vehicles</h3>

  <div class="max-w-7xl mx-auto px-6">

    <div id="listvehicles" class="grid grid-cols-1 md:grid-cols-3 gap-8">
      
    </div>

    <!-- PAGINATION -->
    <div class="flex justify-center mt-10 space-x-2">
      <a href="#" class="px-4 py-2 bg-white border rounded hover:bg-yellow-500 hover:text-white">1</a>
      <a href="#" class="px-4 py-2 bg-white border rounded hover:bg-yellow-500 hover:text-white">2</a>
      <a href="#" class="px-4 py-2 bg-white border rounded hover:bg-yellow-500 hover:text-white">3</a>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="bg-gray-900 text-gray-300">
  <div class="max-w-7xl mx-auto px-6 py-10 text-center">
    <p>© 2025 MaBagnole. All rights reserved.</p>
  </div>
</footer>

<script src="./index.js"></script>

</body>
</html>
