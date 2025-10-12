<section class="px-[2rem] py-[1rem]">
    <h1 class="text-2xl font-semibold">Add prodcut</h1>
    <form action="<?= BASE_URL ?>/admin/storeProduct" method="POST" enctype="multipart/form-data" class="max-w-screen-lg">
        <!-- Upload Gambar -->
        <div class="flex align-items-center gap-[16px] mb-[10px] mt-5">
            <div>
                <label class="block mb-3">Gambar Produk:</label>
                <!-- Tombol Upload Kustom -->
                <label for="img" class="inline-block px-3 py-2 bg-blue-700 text-white rounded-lg cursor-pointer">
                    Pilih Gambar
                </label>
                <input type="file" id="img" name="img" accept="image/*" onchange="previewImage(event)"
                    style="display:none;">
                <span id="file-name" style="margin-left:8px; font-size:14px; color:#555;">nama file</span>
            </div>
            <!-- Preview Gambar -->
            <div>
                <img id="preview" src="#" alt="Preview Gambar"
                    style="display:none; width:120px; height:120px; object-fit:cover; border:1px solid #ccc; border-radius:4px;">
            </div>
        </div>
        <!-- Nama Produk -->
        <div class="mb-5 flex flex-col mt-5 gap-2">
            <label for="nama_produk">Nama Produk:</label>
            <input type="text" id="nama_produk" name="nama_produk"
                class="px-3 py-2 bg-white focus:outline-none focus:ring-0 focus:border-b focus:border-gray-300"
                placeholder="Nike Air jordan 1293">
        </div>

        <!-- Harga -->
        <div class="mb-5 flex flex-col mt-5 gap-2">
            <label for="harga">Harga:</label>
            <input type="number" id="harga" name="harga"
                class="px-3 py-2 bg-white focus:outline-none focus:ring-0 focus:border-b focus:border-gray-300 max-w-1/4"
                placeholder="Rp.90.000">
        </div>

        <!-- Deskripsi -->
        <div class="mb-5 flex flex-col mt-5 gap-2">
            <label for="deskripsi">Deskripsi:</label>
            <textarea id="deskripsi" name="deskripsi" rows="9" cols="110"
                class="px-3 py-2 bg-white focus:outline-none focus:ring-0 focus:border-b focus:border-gray-300"
                placeholder="empatkan semua barang-barang bawaan saat beraktivitas dengan Migrates Pack 15L..n"></textarea>
        </div>

        <!-- Stok -->
        <div class="mb-5 flex flex-col mt-5 gap-2">
            <label for="stok">Stok:</label>
            <input type="number" id="stok" name="stok"
                class="px-3 py-2 bg-white focus:outline-none focus:ring-0 focus:border-b focus:border-gray-300 max-w-1/4"
                placeholder="20">
        </div>

        <!-- Kategori -->
        <div class="mb-5 flex flex-col mt-5 gap-2">
            <label for="category">Kategori:</label>
            <input type="text" id="category" name="category"
                class="px-3 py-2 bg-white focus:outline-none focus:ring-0 focus:border-b focus:border-gray-300 max-w-2/4"
                placeholder="Shoes">
        </div>

        <button type="submit" class="bg-green-600 px-4 py-2 rounded-sm text-white font-semibold">Simpan</button>
    </form>

    <script>
        function previewImage(event) {
            const preview = document.getElementById('preview');
            preview.src = URL.createObjectURL(event.target.files[0]);
            preview.style.display = 'block';
        }
    </script>

</section>
