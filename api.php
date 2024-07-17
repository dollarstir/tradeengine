<?php
require_once 'Model.php';
if(isset($_GET['action'])){
    $action  = $_GET['action'];
    switch($action){
        case 'neworder':
                        // Read the JSON input
            $data = json_decode(file_get_contents('php://input'), true);

            // Extract order details
            $orderType = strtoupper($data['orderType']);
            $stockSymbol = strtoupper($data['stockSymbol']);
            $quantity = intval($data['quantity']);
            $price = floatval($data['price']);

            $orderData = [
                "product" => $stockSymbol,
                "quantity" => $quantity,
                "price" => $price,
                "side" => $orderType,
                "type" => "LIMIT"
            ];

            Model::neworder($orderData);




          
            
            



    }
}
