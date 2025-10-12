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
  public function storeProduct($data, $file) {
   
    $imgName = $this->uploadImage($file);
    $query = "INSERT INTO " . $this->table . " VALUES ('', :nama_produk, :img, :harga, :deskripsi, :stok, :category)";
    $this->db->query($query);
    $this->db->bind("nama_produk", $data["nama_produk"]);
    $this->db->bind("img", $imgName);
    $this->db->bind("harga", $data["harga"]);
    $this->db->bind("deskripsi", $data["deskripsi"]);
    $this->db->bind("stok", $data["stok"]);
    $this->db->bind("category", $data["category"]);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function uploadImage($file) {
    $targetDir = __DIR__ . '/../../img/';
    $fileName = uniqid() . '_' . basename($file['name']);
    $targetFile = $targetDir . $fileName;
    if(!is_dir($targetDir)){
      mkdir($targetDir,0777, true);
    }

    // validasi file
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $allowedTypes = ['jpg', 'jpeg', 'png', 'webp'];
    if(!in_array($fileType, $allowedTypes)){
      throw new Exception('type file not allowed');
    } if($file['size'] > 2 * 1024 * 1024){
      throw new Exception('maximum file is 2 mb');
    } if(move_uploaded_file($file['tmp_name'], $targetFile)){
      return $fileName;
    } else {
      throw new Exception('Faiild upload image');
    }
  }




}
