<!-- SIDEBAR -->


<!-- MAIN -->


<!-- CONTENT -->
<main class="p-6">
    <div class="max-w-7xl mx-auto">
        <!-- Card: header -->
        <div class="bg-white shadow rounded p-4 mb-6">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-xl font-semibold">Ringkasan</h2>
                    <p class="text-sm text-slate-500">Overview singkat performa dan aktivitas</p>
                </div>
                <div class="flex items-center gap-3">
                    <div class="text-sm text-slate-500">Updated: 11 Oct 2025</div>
                </div>
            </div>
        </div>

        <!-- Tabs (user asked: 1 tab bertuliskan produk) -->
        <div class="bg-white shadow rounded p-4">
            <div class="border-b mb-4">
                <nav class="flex -mb-px">
                    <button class="py-3 px-4 text-sm font-medium active-tab" data-tab="produk">Produk</button>
                    <!-- If you want to add more tabs later, add them here -->
                </nav>
            </div>

            <section id="tab-produk" class="tab-content">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold">Daftar Produk</h3>
                    <div class="flex items-center gap-2">
                        <button class="py-2 px-3 rounded bg-emerald-500 text-white text-sm">Tambah
                            Produk</button>
                        <button class="py-2 px-3 rounded border text-sm">Import</button>
                    </div>
                </div>

                <!-- summary metrics -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
                    <div class="p-4 bg-slate-50 rounded shadow-sm">
                        <div class="text-sm text-slate-500">Total Produk</div>
                        <div class="text-2xl font-bold">128</div>
                    </div>
                    <div class="p-4 bg-slate-50 rounded shadow-sm">
                        <div class="text-sm text-slate-500">Stok Habis</div>
                        <div class="text-2xl font-bold text-rose-500">8</div>
                    </div>
                    <div class="p-4 bg-slate-50 rounded shadow-sm">
                        <div class="text-sm text-slate-500">Produk Terlaris (Minggu)</div>
                        <div class="text-2xl font-bold">Kaos Vintage</div>
                    </div>
                </div>

                <!-- products table (simple) -->
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-slate-200">
                        <thead class="bg-slate-50">
                            <tr>
                                <th class="px-4 py-2 text-left text-sm font-medium text-slate-600">#</th>
                                <th class="px-4 py-2 text-left text-sm font-medium text-slate-600">Nama
                                    Produk</th>
                                <th class="px-4 py-2 text-left text-sm font-medium text-slate-600">Kategori
                                </th>
                                <th class="px-4 py-2 text-left text-sm font-medium text-slate-600">Harga
                                </th>
                                <th class="px-4 py-2 text-left text-sm font-medium text-slate-600">Stok
                                </th>
                                <th class="px-4 py-2 text-left text-sm font-medium text-slate-600">Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-slate-100">
                            <tr>
                                <td class="px-4 py-3 text-sm">1</td>
                                <td class="px-4 py-3 text-sm">Kaos Vintage</td>
                                <td class="px-4 py-3 text-sm">Pakaian</td>
                                <td class="px-4 py-3 text-sm">Rp 120.000</td>
                                <td class="px-4 py-3 text-sm">24</td>
                                <td class="px-4 py-3 text-sm">
                                    <div class="flex gap-2">
                                        <button class="px-2 py-1 text-xs rounded border">Edit</button>
                                        <button class="px-2 py-1 text-xs rounded border">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 text-sm">2</td>
                                <td class="px-4 py-3 text-sm">Kacamata Vintage</td>
                                <td class="px-4 py-3 text-sm">Aksesoris</td>
                                <td class="px-4 py-3 text-sm">Rp 250.000</td>
                                <td class="px-4 py-3 text-sm">12</td>
                                <td class="px-4 py-3 text-sm">
                                    <div class="flex gap-2">
                                        <button class="px-2 py-1 text-xs rounded border">Edit</button>
                                        <button class="px-2 py-1 text-xs rounded border">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                            <!-- more rows... -->
                        </tbody>
                    </table>
                </div>
            </section>

        </div>
    </div>
</main>
