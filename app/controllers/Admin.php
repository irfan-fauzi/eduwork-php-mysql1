<?php

class Admin extends Controller {

  protected $productModel;
  public function __construct(){
    $this->productModel = $this->model('Product_model');
  }
  
  public function index(){
   
    if(isset($_GET['keyword']) && $_GET['keyword'] !== '' ){
      $products = $this->productModel->searchProductsByName($_GET['keyword']);
      // harus pakai else
    } else {
      $products = $this->productModel->getAllProducts();
    }
    
    $data['products'] = $products;

    $this->view('templates/admin/header', );
    $this->view('templates/admin/sidebar', );
    $this->view('templates/admin/navbar', );
    $this->view('admin/index', $data);
    $this->view('templates/admin/footer', );
   
  }
  public function addProduct(){
    
    $this->view('templates/admin/header', );
    $this->view('templates/admin/sidebar', );
    $this->view('templates/admin/navbar', );
    $this->view('admin/add_product', );
    $this->view('templates/admin/footer', );
  }
  public function storeProduct(){
    $file = $_FILES['img'];
    if( $this->productModel->storeProduct($_POST, $file) > 0){
      header('Location: ' . BASE_URL . '/admin');
      exit;
    }
  }
}

?>