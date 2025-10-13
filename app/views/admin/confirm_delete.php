<?php
$product = $data;
?>

<section class="max-w-screen-lg mx-auto mt-10">
    <h1 class="text-2xl">Apakah anda yakin akan menghapus ini ?</h1>
    <div class="border p-5 max-w-screen-sm bg-white mt-10">
        <img src="<?= BASE_URL ?>/img/<?= htmlspecialchars($product['img']) ?>" alt="<?= $product['nama_produk'] ?>"
            class="object-cover w-[200px] h-[200px]">
        <p>nama produk: <?= $product['nama_produk'] ?></p>
        <p>harga: <?= $product['harga'] ?></p>
        <p>stok: <?= $product['harga'] ?></p>
        <p>deskripsi: <?= $product['deskripsi'] ?> </p>
        <p>category: <?= $product['category'] ?></p>
        <div class="flex gap-3 mt-5">
            <a href="<?= BASE_URL ?>admin/destroy/<?= $product['id'] ?>"
                class="inline-block bg-red-700 text-white px-3 py-2 rounded-md">Hapus</a>
            <a href="<?= BASE_URL ?>admin/" class="inline-block bg-gray-700 text-white px-3 py-2 rounded-md">kembali</a>
        </div>
    </div>

</section>
