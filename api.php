<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once 'config/Database.php';
  include_once 'models/Product.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate product object
  $items = new Product($db);

  // Product query
  $stmt = $items->read();
  // Get row count
  $itemCount = $stmt->rowCount();

  // Check if any posts
  if($itemCount > 0) {
    // Product array
    $productArr = array();

    // Loop through the read method and extract products 
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      extract($row);
      $productItem = array(
        'id' => $id,
        'code' => $code,
        'description' => $description,
        'stock' => $stock,
        'packaging' => $packaging,
        'printed' => $printed,
        'brand' => $brand
      );

      // Push data to array
      array_push($productArr, $productItem);
    }

    // Turn data to JSON & output
    echo json_encode($productArr);

  } else {
    // No Products
        http_response_code(404);
        echo json_encode(
            array("message" => "No products found.")
    );
  }