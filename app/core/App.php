<?php

  /*
    Dokumentasi
    warning! jangan pusingin kode ini!! 

    aplikasi ini berbasis url, fokus pada url
    misal pada url di browser = http://localhost/mvc-app/transaksi/pembayaran/tunai
    maka = http://localhost/mvc-app/controller/method/parameter
    jadi kelas dibawah ini fungsinya untuk mengisi controller, method, dan param
    menjadi modular/fleksibel tergantung url yang diketik user



  */

  class App {

  protected $controller = 'Home';
  protected $method = 'index';
  protected $params = [];

  public function __construct()
  {
    $url = $this->pareseUrl();
    // ketika mengetik url di browser, urutannya /controller/method misal 'home/index' home=controller index=method
    // cek apakah ada file didalam folder controller yang namanya sesuai dengan apa yang di tulis di url
    if (isset($url[0])) {
      if (file_exists('../app/controllers/' . $url[0] . '.php')) {
        // kalau ada, timpa controller $controller di atas jadi controller baru yang di input
        $this->controller = $url[0];
        unset($url[0]);

      }
    }

    require_once '../app/controllers/' . $this->controller .'.php';
    $this->controller = new $this->controller(); // instansiasi object nya
    // cek dulu method nya ada ga didalam controllernya
    if (isset($url[1])) {
      if(method_exists($this->controller, $url[1])){
        $this->method = $url[1];
        unset($url[1]);
      }
    }

    // mengisi $parameter diatas menjadi sesuai dengan url yang diketik 
    if(!empty($url)){
      $this->params = array_values($url);
    }

    // jalankan controller &method, kirimkan params jika ada
    call_user_func_array([$this->controller, $this->method], $this->params);


  }
    
  // untuk menjalankan controller, tangkap url untuk di olah di controller
  public function pareseUrl() {
    if (isset($_GET['url'])) {
      $url = rtrim($_GET['url'], '/'); // rtrim = menghapus tanda '/' di akhir url
      $url = filter_var($url, FILTER_SANITIZE_URL); // membersihkan url dari karakter aneh
      $url = explode('/', $url); // pecah url menjadi array []
      return $url;
    }
  }
}



		
?>