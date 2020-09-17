<?php 
  class Product {
    // DB connection
    private $conn;
    // Database table
    private $table = 'products';

    // Product Properties
    public $id;
    public $code;
    public $description;
    public $stock;

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get Products
    public function read() {
      // Create query
        $sqlQuery = "SELECT a.id, a.code, a.description, a.stock, b.packaging, b.printed, b.brand 
        FROM products a, product_types b WHERE a.type_id = b.id ORDER BY a.id";

      // Prepare statement
        $stmt = $this->conn->prepare($sqlQuery);

      // Execute query
        $stmt->execute();
        return $stmt;
    }
}