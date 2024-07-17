<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Management - Trading System</title>
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

  <!-- Admin Management Content -->
  <div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-4">Admin Management</h2>
    <div class="bg-white p-4 rounded shadow-md">
      <h3 class="text-xl font-semibold mb-2">User Management</h3>
      <table class="w-full mb-6">
        <thead>
          <tr class="bg-gray-200">
            <th class="py-2 px-4">User ID</th>
            <th class="py-2 px-4">Username</th>
            <th class="py-2 px-4">Email</th>
            <th class="py-2 px-4">Role</th>
            <th class="py-2 px-4">Actions</th>
          </tr>
        </thead>
        <tbody>
          <!-- User management rows will go here -->
        </tbody>
      </table>
    </div>

    <div class="bg-white p-4 rounded shadow-md">
      <h3 class="text-xl font-semibold mb-2">System Configuration</h3>
      <form>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="exchange-url">
            Exchange URL
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exchange-url" type="text" placeholder="https://exchange.example.com">
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="api-key">
            API Key
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="api-key" type="text" placeholder="Your API Key">
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="max-orders-per-second">
            Max Orders Per Second
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="max-orders-per-second" type="number" placeholder="100">
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="max-order-value">
            Max Order Value
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="max-order-value" type="number" placeholder="1000000">
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="market-data-refresh-interval">
            Market Data Refresh Interval (ms)
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="market-data-refresh-interval" type="number" placeholder="1000">
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
