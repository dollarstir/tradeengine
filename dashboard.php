<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Trading System</title>
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
      </div>
    </div>
  </nav>

  <!-- Dashboard Content -->
  <div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-4">Dashboard</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Summary Cards -->
      <div class="bg-white p-4 rounded shadow-md">
        <h3 class="text-xl font-semibold mb-2">Total Portfolio Value</h3>
        <p class="text-2xl">$100,000</p>
      </div>
      <div class="bg-white p-4 rounded shadow-md">
        <h3 class="text-xl font-semibold mb-2">Total Trades</h3>
        <p class="text-2xl">150</p>
      </div>
      <div class="bg-white p-4 rounded shadow-md">
        <h3 class="text-xl font-semibold mb-2">Profit/Loss</h3>
        <p class="text-2xl">$5,000</p>
      </div>
    </div>
    <!-- Recent Trades -->
    <div class="bg-white p-4 rounded shadow-md mt-6">
      <h3 class="text-xl font-semibold mb-2">Recent Trades</h3>
      <table class="w-full">
        <thead>
          <tr class="bg-gray-200">
            <th class="py-2 px-4">Trade ID</th>
            <th class="py-2 px-4">Stock</th>
            <th class="py-2 px-4">Quantity</th>
            <th class="py-2 px-4">Price</th>
            <th class="py-2 px-4">Status</th>
          </tr>
        </thead>
        <tbody>
          <!-- Recent trade rows will go here -->
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
