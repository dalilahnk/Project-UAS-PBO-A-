<?php
require_once 'Database.php';

class Product {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllProducts() {
        $this->db->query('SELECT * FROM products');
        return $this->db->resultSet();
    }

    public function addProduct($name, $description, $price, $stock) {
        $this->db->query('INSERT INTO products (name, description, price, stock) VALUES (:name, :description, :price, :stock)');
        $this->db->bind(':name', $name);
        $this->db->bind(':description', $description);
        $this->db->bind(':price', $price);
        $this->db->bind(':stock', $stock);
        return $this->db->execute();
    }
}
?>
