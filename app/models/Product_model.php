<?php
class Product_model {
  private $table = 'products';
  private $db;

  public function __construct() {
    $this->db = new Database;
  }

  public function getAllProducts() {
    $this->db->query("SELECT * FROM {$this->table}");
    return $this->db->resultSet();
  }

  public function getProductById($id) {
    $this->db->query("SELECT * FROM {$this->table} WHERE id = :id");
    $this->db->bind(':id', $id);
    return $this->db->single();
  }

   
  public function getAllCategories() {
    $this->db->query('SELECT DISTINCT category FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getProductsByCategory($category) {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE category = :category');
    $this->db->bind(':category', $category);
    return $this->db->resultSet();
  }

   public function searchProductsByName($keyword) {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nama_produk LIKE :keyword');
    $this->db->bind(':keyword', "%$keyword%");
    return $this->db->resultSet();
  }


}
