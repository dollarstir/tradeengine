<?php

class Model{

    public static function neworder($orderData){
        require_once 'db.php';
        // Define the private API key and the endpoint URL
        $privateKey = '74a7aba6-53bd-4680-a14a-f1e541801964';
        $url = "https://exchange.matraining.com/$privateKey/order";
        // Convert the order details to JSON
        $jsonData = json_encode($orderData);
                // Initialize cURL
        $ch = curl_init($url);

        // Set the cURL options
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Content-Length: ' . strlen($jsonData)
        ]);

        // Execute the POST request
        $response = curl_exec($ch);
                // Check for errors
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
            exit;
        } else {
            // Print the response which is the unique identifier for the order
            $orderId = $response;

        
        }

        // Close the cURL session
        curl_close($ch);

                // Save the order to the database
        try {
            extract($orderData);
            $stmt = $pdo->prepare("INSERT INTO orders (order_id, order_type, stock_symbol, quantity, price, status) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->execute([$orderId, $side, $product, $quantity, $price,'Open']);
            
            // Return the order details as JSON
            echo json_encode([
                'id' => $orderId,
                'type' => $side,
                'product' => $product,
                'quantity' => $quantity,
                'price' => $price,
                'status' => 'Open'
            ]);
        } catch (PDOException $e) {
            echo 'Database error: ' . $e->getMessage();
        }

    }


    // retrieve orders 

    public static function getorders(){
        include 'db.php';
                    // Retrieve orders from the database
            try {
                $stmt = $pdo->query("SELECT * FROM orders");
                $orders = $stmt->fetchAll();

                foreach ($orders as $order) {
                    echo "<tr>
                            <td class='py-2 px-4'>{$order['order_id']}</td>
                            <td class='py-2 px-4'>{$order['order_type']}</td>
                            <td class='py-2 px-4'>{$order['stock_symbol']}</td>
                            <td class='py-2 px-4'>{$order['quantity']}</td>
                            <td class='py-2 px-4'>{$order['price']}</td>
                            <td class='py-2 px-4'>{$order['status']}</td>
                            <td class='py-2 px-4'>
                            <button class='bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600'>Edit</button>
                            <button class='bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600'>Cancel</button>
                            </td>
                        </tr>";
                }
            } catch (PDOException $e) {
                echo 'Database error: ' . $e->getMessage();
            }
    }

}