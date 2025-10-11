<?php
class Product extends Controller {

  protected $productModel;
  public function __construct(){
    $this->productModel = $this->model('Product_model');
  }
  public function index() {

    $data["title"] = 'Product';
    $categories = $this->productModel->getAllCategories();
    if (isset($_GET['category']) && $_GET['category'] !== '') {
      $products = $this->productModel->getProductsByCategory($_GET['category']);
    }elseif (isset($_GET['keyword']) && $_GET['keyword'] !== '') {
      $products = $this->productModel->searchProductsByName($_GET['keyword']);
    } else {
      $products = $this->productModel->getAllProducts();
    }

    $data['products'] = $products;
    $data['categories'] = $categories;
    // ambil produk berdasarkan keyword
    
    $this->view("templates/header", $data);
    $this->view('product/index', $data);
    $this->view("templates/footer");
   
  }

  public function detail($id) {
    $data["title"] = 'Detail Product';
    $data['product'] = $this->model('Product_model')->getProductById($id);

    $this->view("templates/header", $data);
    $this->view('product/detail', $data);
    $this->view("templates/footer");
  }
}
