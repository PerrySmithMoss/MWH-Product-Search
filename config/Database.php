<?php 
  class Database {
    // DB Params
    private $host = 'HOST';
    private $db_name = 'DB_NAME';
    private $username = 'USERNAME';
    private $password = 'PASSWORD';
    private $conn;

    // Connect to Database method
    public function connect() {
        $this->conn = null;
        try { 
          $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
          $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
          echo 'Connection Error: ' . $e->getMessage();
        }
  
        return $this->conn;
      }
  }