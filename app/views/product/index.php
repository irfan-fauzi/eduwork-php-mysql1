<?php
$products = $data['products'];
$categories = $data['categories'];
?>

<main class="container mx-auto px-4 py-10">
  <h1 class="text-3xl font-bold text-center mb-10 text-gray-700">🛍️ New Arrival</h1>

  
  <form method="GET" action="<?= BASE_URL ?>/product" class="flex flex-col md:flex-row gap-4 mb-10 items-center justify-center">
    <!-- Pencarian kategori -->
    <select name="category" onchange="this.form.submit()" 
            class="border border-gray-300 rounded-lg px-4 py-2 w-full md:w-1/4 focus:ring-2 focus:ring-blue-500">
      <option value="">-- Semua Kategori --</option>
      <?php foreach ($categories as $cat): ?>
        <option value="<?= $cat['category'] ?>" 
          <?= (isset($_GET['category']) && $_GET['category'] == $cat['category']) ? 'selected' : '' ?>>
          <?= ucfirst($cat['category']) ?>
        </option>
      <?php endforeach; ?>
    </select>

    <!-- Pencarian nama produk -->
    <div class="flex w-full md:w-1/2">
      <input type="text" name="keyword" placeholder="Cari nama produk..."
             value="<?= $_GET['keyword'] ?? '' ?>"
             class="flex-1 border border-gray-300 rounded-l-lg px-4 py-2 focus:ring-2 focus:ring-blue-500">
      <button type="submit"
              class="bg-blue-600 text-white px-6 py-2 rounded-r-lg hover:bg-blue-700 transition-colors">
        Cari
      </button>
    </div>
  </form>

  <!-- Daftar Produk -->
  <?php if (!empty($products)): ?>
  <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    <?php foreach ($products as $product): ?>
      <li class="bg-white rounded-2xl shadow-md hover:shadow-xl transition duration-300 overflow-hidden">
        <div class="relative w-full h-56 bg-gray-100">
          <img src="<?= $product['img'] ?>" alt="<?= $product['nama_produk'] ?>"
               class="object-cover w-full h-full hover:scale-105 transition-transform duration-300">
        </div>

        <div class="p-4">
          <h2 class="text-lg font-semibold text-gray-800 mb-1 truncate">
            <?= $product['nama_produk'] ?>
          </h2>

          <p class="text-sm text-gray-500 mb-1">
            <span class="font-medium text-gray-700">Stok:</span> <?= $product['stok'] ?>
          </p>

          <p class="text-sm text-gray-500 mb-3">
            <span class="font-medium text-gray-700">Kategori:</span> <?= $product['category'] ?>
          </p>

          <a href="<?= BASE_URL ?>/product/detail/<?= $product['id'] ?>"
             class="inline-block w-full text-center bg-blue-600 text-white font-medium py-2 rounded-lg hover:bg-blue-700 transition-colors">
             Detail
          </a>
        </div>
      </li>
    <?php endforeach; ?>
  </ul>
  <?php else: ?>
    <p class="text-center text-gray-500 mt-10">Produk tidak ditemukan.</p>
  <?php endif; ?>
</main>
