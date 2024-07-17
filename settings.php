<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Settings - Trading System</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

  <!-- Navigation Bar -->
  <nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex justify-between items-center">
      <div class="text-white font-bold text-xl">Trading System</div>
      <div>
        <a href="#dashboard" class="text-gray-300 hover:text-white px-3">Dashboard</a>
        <a href="#clients" class="text-gray-300 hover:text-white px-3">Clients</a>
        <a href="#orders" class="text-gray-300 hover:text-white px-3">Orders</a>
        <a href="#market-data" class="text-gray-300 hover:text-white px-3">Market Data</a>
        <a href="#reports" class="text-gray-300 hover:text-white px-3">Reports</a>
        <a href="#trade-history" class="text-gray-300 hover:text-white px-3">Trade History</a>
        <a href="#settings" class="text-gray-300 hover:text-white px-3">Settings</a>
        <a href="#admin" class="text-gray-300 hover:text-white px-3">Admin</a>
      </div>
    </div>
  </nav>

  <!-- Settings Content -->
  <div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-4">Settings</h2>
    <div class="bg-white p-4 rounded shadow-md">
      <h3 class="text-xl font-semibold mb-2">User Preferences</h3>
      <form>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
            Username
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
            Email
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Email">
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
            Password
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="********">
        </div>
        <div class="flex items-center justify-between">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
            Save Settings
          </button>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
