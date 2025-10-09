<?php
class About extends Controller{
  public function index($title = 'about'){
    $data['title'] = $title;
    $this->view("templates/header", $data);
    $this->view('about/index');
    $this->view("templates/footer");
    
  }
  public function page($nama = "jaya", $alamat = "papua", $email = "@asd", $title = 'about page') {
    $data['title'] = $title;
    $data["nama"] = $nama;
    $data["alamat"] = $alamat;
    $data["email"] = $email;
    $this->view("templates/header", $data);
    $this->view('about/page', $data);
    $this->view("templates/footer");
  
    
  }
}
?>