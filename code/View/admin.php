<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>MaBagnole | Admin Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-gray-100 flex min-h-screen">

<!-- SIDEBAR -->
<aside class="w-64 bg-gray-800 border-r border-gray-700 flex flex-col">
  <div class="p-6 border-b border-gray-700">
    <a href="../index.php" class="text-2xl font-bold text-yellow-400">MaBagnole</a>
    <p class="text-sm text-gray-400">Admin Panel</p>
  </div>

  <nav class="flex-grow px-4 py-6 space-y-2">
    <a href="#" class="block px-4 py-2 rounded-lg bg-gray-700 text-yellow-400 font-semibold">
      Dashboard
    </a>
    <a href="#" class="block px-4 py-2 rounded-lg hover:bg-gray-700 transition">
      Manage Vehicles
    </a>
    <a href="#" class="block px-4 py-2 rounded-lg hover:bg-gray-700 transition">
      Bookings
    </a>
    <a href="#" class="block px-4 py-2 rounded-lg hover:bg-gray-700 transition">
      Users
    </a>
    <a href="#" class="block px-4 py-2 rounded-lg hover:bg-gray-700 transition">
      Settings
    </a>
  </nav>

  <div class="p-4 border-t border-gray-700">
    <a href="#" class="block text-center py-2 rounded-lg bg-red-600 hover:bg-red-500 transition font-semibold">
      Logout
    </a>
  </div>
</aside>

<!-- MAIN CONTENT -->
<main class="flex-1 p-8">

  <!-- HEADER -->
  <header class="flex justify-between items-center mb-10">
    <h2 class="text-4xl font-bold text-yellow-400">Dashboard</h2>
    <button class="bg-yellow-500 text-black px-5 py-2 rounded-lg font-semibold hover:bg-yellow-400 transition">
      + Add Vehicle
    </button>
  </header>

  <!-- STATS -->
  <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
    <div class="bg-gray-800 p-6 rounded-xl shadow">
      <p class="text-gray-400">Total Vehicles</p>
      <h3 class="text-3xl font-bold text-yellow-400 mt-2">45</h3>
    </div>

    <div class="bg-gray-800 p-6 rounded-xl shadow">
      <p class="text-gray-400">Active Bookings</p>
      <h3 class="text-3xl font-bold text-yellow-400 mt-2">12</h3>
    </div>

    <div class="bg-gray-800 p-6 rounded-xl shadow">
      <p class="text-gray-400">Registered Users</p>
      <h3 class="text-3xl font-bold text-yellow-400 mt-2">102</h3>
    </div>
  </section>

  <!-- VEHICLES TABLE -->
  <section class="bg-gray-800 rounded-xl shadow p-6">
    <h3 class="text-2xl font-bold text-yellow-400 mb-6">
      Manage Vehicles
    </h3>

    <div class="overflow-x-auto">
      <table class="w-full border-collapse">
        <thead>
          <tr class="bg-gray-700 text-yellow-400">
            <th class="px-4 py-3 text-left">ID</th>
            <th class="px-4 py-3 text-left">Model</th>
            <th class="px-4 py-3 text-left">Category</th>
            <th class="px-4 py-3 text-left">Price / Day</th>
            <th class="px-4 py-3 text-left">Status</th>
            <th class="px-4 py-3 text-center">Actions</th>
          </tr>
        </thead>

        <tbody>
          <tr class="border-b border-gray-700 hover:bg-gray-700 transition">
            <td class="px-4 py-3">1</td>
            <td class="px-4 py-3">Dacia Logan</td>
            <td class="px-4 py-3">Economy</td>
            <td class="px-4 py-3">200 DH</td>
            <td class="px-4 py-3 text-green-400 font-semibold">Available</td>
            <td class="px-4 py-3 text-center space-x-3">
              <button class="text-blue-400 hover:underline">Edit</button>
              <button class="text-red-400 hover:underline">Delete</button>
            </td>
          </tr>

          <tr class="border-b border-gray-700 hover:bg-gray-700 transition">
            <td class="px-4 py-3">2</td>
            <td class="px-4 py-3">Range Rover</td>
            <td class="px-4 py-3">SUV</td>
            <td class="px-4 py-3">600 DH</td>
            <td class="px-4 py-3 text-red-400 font-semibold">Booked</td>
            <td class="px-4 py-3 text-center space-x-3">
              <button class="text-blue-400 hover:underline">Edit</button>
              <button class="text-red-400 hover:underline">Delete</button>
            </td>
          </tr>

          <tr class="hover:bg-gray-700 transition">
            <td class="px-4 py-3">3</td>
            <td class="px-4 py-3">Mercedes C-Class</td>
            <td class="px-4 py-3">Luxury</td>
            <td class="px-4 py-3">500 DH</td>
            <td class="px-4 py-3 text-green-400 font-semibold">Available</td>
            <td class="px-4 py-3 text-center space-x-3">
              <button class="text-blue-400 hover:underline">Edit</button>
              <button class="text-red-400 hover:underline">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

</main>

</body>
</html>
