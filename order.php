<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Management - Trading System</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $("form").submit(function(event) {
        event.preventDefault();
        
        const orderData = {
          orderType: $("input[name='orderType']:checked").val(),
          stockSymbol: $("#stock-symbol").val(),
          quantity: $("#quantity").val(),
          price: $("#price").val()
        };
        
        $.ajax({
          url: 'api.php?action=neworder',
          type: 'POST',
          contentType: 'application/json',
          data: JSON.stringify(orderData),
          success: function(response) {

            const order = JSON.parse(response);
            $("#orders-table tbody").append(`
              <tr>
                <td class="py-2 px-4">${order.id}</td>
                <td class="py-2 px-4">${order.type}</td>
                <td class="py-2 px-4">${order.product}</td>
                <td class="py-2 px-4">${order.quantity}</td>
                <td class="py-2 px-4">${order.price}</td>
                <td class="py-2 px-4">Open</td>
                <td class="py-2 px-4">
                  <button class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">Edit</button>
                  <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Cancel</button>
                </td>
              </tr>
            `);
          },
          error: function(error) {
            console.error("Error:", error);
          }
        });
      });
    });
  </script>
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

  <!-- Order Management Content -->
  <div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-4">Order Management</h2>
    <div class="bg-white p-4 rounded shadow-md">
      <h3 class="text-xl font-semibold mb-2">Place New Order</h3>
      <form class="mb-4">
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="order-type">
            Order Type
          </label>
          <div class="flex">
            <label class="inline-flex items-center mr-4">
              <input type="radio" class="form-radio" name="orderType" value="BUY" checked>
              <span class="ml-2">Buy</span>
            </label>
            <label class="inline-flex items-center">
              <input type="radio" class="form-radio" name="orderType" value="SELL">
              <span class="ml-2">Sell</span>
            </label>
          </div>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="stock-symbol">
            Stock Symbol
          </label>
          <select id="stock-symbol" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            <option value="AAPL">Apple Inc. (AAPL)</option>
            <option value="GOOGL">Alphabet Inc. (GOOGL)</option>
            <option value="MSFT">Microsoft Corp. (MSFT)</option>
            <option value="AMZN">Amazon.com Inc. (AMZN)</option>
            <option value="FB">Facebook, Inc. (FB)</option>
            <option value="TSLA">Tesla, Inc. (TSLA)</option>
            <!-- Add more stock options as needed -->
          </select>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="quantity">
            Quantity
          </label>
          <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="quantity" placeholder="Quantity">
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="price">
            Price
          </label>
          <input type="number" step="0.01" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="price" placeholder="Price">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Place Order</button>
      </form>
      <h3 class="text-xl font-semibold mb-2">Open Orders</h3>
      <table id="orders-table" class="w-full bg-white rounded shadow-md">
        <thead>
          <tr class="bg-gray-200">
            <th class="py-2 px-4">Order ID</th>
            <th class="py-2 px-4">Order Type</th>
            <th class="py-2 px-4">Stock</th>
            <th class="py-2 px-4">Quantity</th>
            <th class="py-2 px-4">Price</th>
            <th class="py-2 px-4">Status</th>
            <th class="py-2 px-4">Actions</th>
          </tr>
        </thead>
        <tbody>
            <?= Model::getorders();?>
          <!-- Order rows will be dynamically added here -->
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
