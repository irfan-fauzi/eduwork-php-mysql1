<?php

class Admin extends Controller {
  public function index(){
    $this->view('templates/admin/header', );
    $this->view('templates/admin/sidebar', );
    $this->view('templates/admin/navbar', );
    $this->view('admin/index', );
    $this->view('templates/admin/footer', );
   
  }
}

?>