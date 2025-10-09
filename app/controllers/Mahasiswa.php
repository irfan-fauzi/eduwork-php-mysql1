<?php
class Mahasiswa extends Controller {
  
  public function index($title = 'mahasiswa') {
    $data['title'] = $title;
    $data['mahasiswa'] = $this->model('Mahasiswa_model')->getMahasiswa();
    $this->view("templates/header", $data);
    $this->view('mahasiswa/index', $data);
    $this->view("templates/footer");
  }

  public function detail($id) {
    $data["title"] = 'Detail Mahasiswa';
     $data['mahasiswa'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
    $this->view("templates/header", $data);
    $this->view('mahasiswa/detail', $data);
    $this->view("templates/footer");
  }
}
?>