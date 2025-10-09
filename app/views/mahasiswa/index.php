<?php
 $mahasiswa = $data['mahasiswa'];
?>

<main class="container-lg mx-auto">
  <h1>Mahasiswa page</h1>
   <ul>
        <?php foreach ($mahasiswa as $mhs): ?>
            <li class=" border-b p-2">
                <strong>Nama:</strong><?= $mhs["nama"]; ?>  <br> 
                <strong>Email:</strong> <?= $mhs["email"]; ?> <br> 
                <strong>Jurusan:</strong> <?= $mhs["jurusan"]; ?> <br> 
                 <a href=" <?= BASE_URL ?>/mahasiswa/detail/<?= $mhs['id'] ?> " class="text-white bg-blue-800 px-5 py-2 mt-2 inline-block hover:bg-blue-400 rounded-lg">detail</a>
            </li>
            <br>
        <?php endforeach; ?>
    </ul>
</main>