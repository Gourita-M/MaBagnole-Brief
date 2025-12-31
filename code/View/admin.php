<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8" />
  <title>MaBagnole Admin Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 flex min-h-screen">

  <!-- SIDEBAR -->
  <aside class="w-64 bg-white shadow flex flex-col">
    <div class="p-6 border-b">
      <h1 class="text-3xl font-bold text-yellow-500">MaBagnole Admin</h1>
    </div>
    <nav class="flex-grow px-6 py-4 space-y-3">
      <a href="#" class="block py-2 px-4 rounded hover:bg-yellow-100 text-yellow-600 font-semibold">Dashboard</a>
      <a href="#" class="block py-2 px-4 rounded hover:bg-yellow-100">Manage Vehicles</a>
      <a href="#" class="block py-2 px-4 rounded hover:bg-yellow-100">Bookings</a>
      <a href="#" class="block py-2 px-4 rounded hover:bg-yellow-100">Users</a>
      <a href="#" class="block py-2 px-4 rounded hover:bg-yellow-100">Settings</a>
      <a href="#" class="block py-2 px-4 rounded hover:bg-yellow-100 text-red-600 font-semibold">Logout</a>
    </nav>
  </aside>

  <!-- MAIN CONTENT -->
  <main class="flex-1 p-8">

    <!-- HEADER -->
    <header class="flex justify-between items-center mb-8">
      <h2 class="text-4xl font-bold">Dashboard</h2>
      <div>
        <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Add Vehicle</button>
      </div>
    </header>

    <!-- DASHBOARD CARDS -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
      <div class="bg-white p-6 rounded shadow">
        <h3 class="text-lg font-semibold mb-2">Total Vehicles</h3>
        <p class="text-3xl font-bold text-yellow-500">45</p>
      </div>
      <div class="bg-white p-6 rounded shadow">
        <h3 class="text-lg font-semibold mb-2">Active Bookings</h3>
        <p class="text-3xl font-bold text-yellow-500">12</p>
      </div>
      <div class="bg-white p-6 rounded shadow">
        <h3 class="text-lg font-semibold mb-2">Registered Users</h3>
        <p class="text-3xl font-bold text-yellow-500">102</p>
      </div>
    </section>

    <!-- VEHICLE MANAGEMENT TABLE -->
    <section class="bg-white p-6 rounded shadow">
      <h3 class="text-2xl font-bold mb-6">Manage Vehicles</h3>
      <table class="w-full table-auto border-collapse border border-gray-300">
        <thead>
          <tr class="bg-yellow-100 text-yellow-700">
            <th class="border border-gray-300 px-4 py-2 text-left">ID</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Model</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Category</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Price / day</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Status</th>
            <th class="border border-gray-300 px-4 py-2 text-center">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr class="hover:bg-yellow-50">
            <td class="border border-gray-300 px-4 py-2">1</td>
            <td class="border border-gray-300 px-4 py-2">Dacia Logan</td>
            <td class="border border-gray-300 px-4 py-2">Economy</td>
            <td class="border border-gray-300 px-4 py-2">200 DH</td>
            <td class="border border-gray-300 px-4 py-2 text-green-600 font-semibold">Available</td>
            <td class="border border-gray-300 px-4 py-2 text-center space-x-2">
              <button class="text-blue-600 hover:underline">Edit</button>
              <button class="text-red-600 hover:underline">Delete</button>
            </td>
          </tr>
          <tr class="hover:bg-yellow-50">
            <td class="border border-gray-300 px-4 py-2">2</td>
            <td class="border border-gray-300 px-4 py-2">Range Rover</td>
            <td class="border border-gray-300 px-4 py-2">SUV</td>
            <td class="border border-gray-300 px-4 py-2">600 DH</td>
            <td class="border border-gray-300 px-4 py-2 text-red-600 font-semibold">Booked</td>
            <td class="border border-gray-300 px-4 py-2 text-center space-x-2">
              <button class="text-blue-600 hover:underline">Edit</button>
              <button class="text-red-600 hover:underline">Delete</button>
            </td>
          </tr>
          <tr class="hover:bg-yellow-50">
            <td class="border border-gray-300 px-4 py-2">3</td>
            <td class="border border-gray-300 px-4 py-2">Mercedes C-Class</td>
            <td class="border border-gray-300 px-4 py-2">Luxury</td>
            <td class="border border-gray-300 px-4 py-2">500 DH</td>
            <td class="border border-gray-300 px-4 py-2 text-green-600 font-semibold">Available</td>
            <td class="border border-gray-300 px-4 py-2 text-center space-x-2">
              <button class="text-blue-600 hover:underline">Edit</button>
              <button class="text-red-600 hover:underline">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </section>

  </main>

</body>
</html>
