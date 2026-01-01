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
      <a href="./View/testing.php" class="hover:text-yellow-400 transition">Vehicles</a>
      <a href="./View/admin.php" class="hover:text-yellow-400 transition">Dashboard</a>
      <a href="#" class="hover:text-yellow-400 transition">Contact</a>
    </nav>

    <button id="open-login-modal"
      class="bg-yellow-500 text-black px-4 py-2 rounded-lg font-semibold hover:bg-yellow-400 transition">
      Login/Register
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
<br><br>
<?php 
  if(isset($_SESSION['username']))
    include_once "../code/View/customer.php";
  else
    include_once "../code/View/notyetconnected.php";

?>

<!-- FOOTER -->
<footer class="bg-black text-gray-400">
  <div class="max-w-7xl mx-auto px-6 py-8 text-center">
    © 2025 MaBagnole. All rights reserved.
  </div>
</footer>

<script src="./index.js"></script>

</body>
</html>