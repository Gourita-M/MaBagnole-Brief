<?php
  include_once "../controlls/rented_logic.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>My Rentals & Reviews | MaBagnole</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-gray-100 min-h-screen flex flex-col">

<!-- HEADER -->
<header class="bg-gray-800 shadow-lg">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    <h1 class="text-2xl font-bold text-yellow-400">MaBagnole</h1>

    <nav class="space-x-6 hidden md:block">
      <a href="index.php" class="hover:text-yellow-400 transition">Home</a>
      <a href="Vehicles.php" class="hover:text-yellow-400 transition">Vehicles</a>
      <a href="customer.php" class="text-yellow-400 font-semibold">My Rentals</a>
      <a href="logout.php" class="hover:text-red-400 transition">Logout</a>
    </nav>
  </div>
</header>

<!-- MAIN -->
<main class="flex-grow max-w-7xl mx-auto px-6 py-10">

  <h2 class="text-4xl font-bold mb-8 text-yellow-400">
    My Rented Cars & Reviews
  </h2>

  <!-- GRID -->
  <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

    <!-- CARD -->
    <article class="bg-gray-800 rounded-lg shadow p-4 flex gap-4">
      <img
        src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=300&q=80"
        class="w-28 h-20 rounded-md object-cover"
        alt="Dacia Logan"
      />

      <div class="flex-1">
        <h3 class="text-lg font-semibold text-yellow-400">
          Dacia Logan
        </h3>

        <p class="text-sm text-gray-300">
          Economy • 200 DH / day
        </p>

        <p class="text-xs text-gray-400 mb-2">
          10 Jan 2025 → 15 Jan 2025
        </p>

        <!-- REVIEW FORM -->
        <form class="flex flex-col items-center gap-2">
          <select
            class="w-full bg-gray-700 text-yellow-400 text-sm px-2 py-1 rounded border border-gray-600">
            <option disabled selected>Rate</option>
            <option value="1">1 ⭐</option>
            <option value="2">2 ⭐⭐</option>
            <option value="3">3 ⭐⭐⭐</option>
            <option value="4">4 ⭐⭐⭐⭐</option>
            <option value="5">5 ⭐⭐⭐⭐⭐</option>
          </select>

          <input
            type="text"
            placeholder="Your review..."
            class="w-full flex-1 bg-gray-700 text-sm px-2 py-1 rounded border border-gray-600 focus:ring-1 focus:ring-yellow-500 outline-none"
          />

          <button
            class="bg-yellow-500 text-black text-sm px-3 py-1 rounded hover:bg-yellow-400 transition">
            Send
          </button>
        </form>
      </div>
    </article>

    <!-- CARD -->
    <article class="bg-gray-800 rounded-lg shadow p-4 flex gap-4">
      <img
        src="https://images.unsplash.com/photo-1549924231-f129b911e442?auto=format&fit=crop&w=300&q=80"
        class="w-28 h-20 rounded-md object-cover"
        alt="Range Rover"
      />

      <div class="flex-1">
        <h3 class="text-lg font-semibold text-yellow-400">
          Range Rover
        </h3>

        <p class="text-sm text-gray-300">
          SUV • 600 DH / day
        </p>

        <p class="text-xs text-gray-400 mb-2">
          05 Feb 2025 → 10 Feb 2025
        </p>

        <form class="flex flex-col items-center gap-2">
          <select
            class="w-full bg-gray-700 text-yellow-400 text-sm px-2 py-1 rounded border border-gray-600">
            <option disabled selected>Rate</option>
            <option value="1">1 ⭐</option>
            <option value="2">2 ⭐⭐</option>
            <option value="3">3 ⭐⭐⭐</option>
            <option value="4">4 ⭐⭐⭐⭐</option>
            <option value="5">5 ⭐⭐⭐⭐⭐</option>
          </select>

          <input
            type="text"
            placeholder="Your review..."
            class="w-full flex-1 bg-gray-700 text-sm px-2 py-1 rounded border border-gray-600 focus:ring-1 focus:ring-yellow-500 outline-none"
          />

          <button
            class="bg-yellow-500 text-black text-sm px-3 py-1 rounded hover:bg-yellow-400 transition">
            Send
          </button>
        </form>
      </div>
    </article>

  </section>

</main>

<!-- FOOTER -->
<footer class="bg-gray-800 text-gray-400 py-6 text-center">
  © 2025 MaBagnole. All rights reserved.
</footer>

</body>
</html>
