<?php
  $mhs = $data['mahasiswa'];
  
?>

<main class="container-lg mx-auto">
  <h1 class="text-3xl">Detail Mahasiswa page</h1>
   <ul>
      <li class=" border-b p-2">
         <strong>Nama:</strong><?= $mhs["nama"]; ?>  <br> 
         <strong>Email:</strong> <?= $mhs["email"]; ?> <br> 
         <strong>Jurusan:</strong> <?= $mhs["jurusan"]; ?> <br> 
      </li>
      <br>  
    </ul>
</main>