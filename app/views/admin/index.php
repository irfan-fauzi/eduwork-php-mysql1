<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Dashboard — AdminLTE style (Tailwind)</title>
 <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <style>
    /* small AdminLTE-like customizations */
    .sidebar-bg { background: linear-gradient(180deg, rgba(31,41,55,1) 0%, rgba(17,24,39,1) 100%); }
    .brand { font-weight: 700; letter-spacing: 0.4px; }
    .nav-item:hover { background-color: rgba(255,255,255,0.03); }
    .active-tab { border-bottom-width: 3px; border-color: #0ea5a4; }
  </style>
</head>
<body class="min-h-screen bg-slate-100 font-sans text-slate-800">
  <div class="flex">
    <!-- SIDEBAR -->
    <aside class="w-64 min-h-screen p-4 text-slate-100 sidebar-bg hidden md:block">
      <div class="flex items-center gap-3 px-2 py-4">
        <div class="w-10 h-10 bg-white/10 rounded flex items-center justify-center">AL</div>
        <div>
          <div class="brand text-lg">AdminTail</div>
          <div class="text-xs text-slate-300">Dashboard</div>
        </div>
      </div>

      <nav class="mt-6">
        <ul>
          <li class="nav-item px-3 py-2 rounded-md mb-1 flex items-center gap-3 text-slate-200">
            <!-- Home icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9 9 9M4 10v10a1 1 0 001 1h3m10-11v10a1 1 0 01-1 1h-3m-6 0h6"/></svg>
            <span>Home</span>
          </li>

          <li class="nav-item px-3 py-2 rounded-md mb-1 flex items-center gap-3 text-slate-200 bg-white/3">
            <!-- Produk icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V7a2 2 0 00-2-2h-3.586a1 1 0 00-.707.293l-7.414 7.414A1 1 0 006.586 13H4a2 2 0 00-2 2v3a2 2 0 002 2h14a2 2 0 002-2v-5z"/></svg>
            <span>Produk</span>
          </li>

          <li class="nav-item px-3 py-2 rounded-md mb-1 flex items-center gap-3 text-slate-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6a2 2 0 012-2h2a2 2 0 012 2v6m-6 0h6"/></svg>
            <span>Laporan</span>
          </li>
        </ul>
      </nav>

      <div class="mt-6 px-3 text-slate-300 text-sm">
        <div class="mb-2">Quick actions</div>
        <div class="flex flex-col gap-2">
          <button class="py-2 px-3 rounded bg-white/6 text-slate-100 text-sm">Tambah Produk</button>
          <button class="py-2 px-3 rounded bg-white/6 text-slate-100 text-sm">Export</button>
        </div>
      </div>
    </aside>

    <!-- MAIN -->
    <div class="flex-1 min-h-screen">
      <!-- NAVBAR -->
      <header class="flex items-center justify-between px-4 py-3 bg-white shadow-sm">
        <div class="flex items-center gap-3">
          <button id="mobile-open" class="md:hidden p-2 rounded-md bg-slate-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M3 5h14a1 1 0 100-2H3a1 1 0 000 2zm14 4H3a1 1 0 100 2h14a1 1 0 100-2zm0 6H3a1 1 0 100 2h14a1 1 0 100-2z" clip-rule="evenodd"/></svg>
          </button>
          <h1 class="text-lg font-semibold">Dashboard</h1>
        </div>

        <div class="flex items-center gap-3">
          <div class="relative">
            <input type="search" placeholder="Search" class="rounded-md border px-2 py-1 text-sm" />
          </div>
          <div class="flex items-center gap-3">
            <div class="text-sm text-slate-600">Halo, Irfan</div>
            <div class="w-9 h-9 rounded-full bg-slate-200 flex items-center justify-center">IF</div>
          </div>
        </div>
      </header>

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
                  <button class="py-2 px-3 rounded bg-emerald-500 text-white text-sm">Tambah Produk</button>
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
                      <th class="px-4 py-2 text-left text-sm font-medium text-slate-600">Nama Produk</th>
                      <th class="px-4 py-2 text-left text-sm font-medium text-slate-600">Kategori</th>
                      <th class="px-4 py-2 text-left text-sm font-medium text-slate-600">Harga</th>
                      <th class="px-4 py-2 text-left text-sm font-medium text-slate-600">Stok</th>
                      <th class="px-4 py-2 text-left text-sm font-medium text-slate-600">Aksi</th>
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
    </div>
  </div>

  <script>
    // mobile sidebar (simple toggle)
    const mobileOpen = document.getElementById('mobile-open');
    mobileOpen && mobileOpen.addEventListener('click', () => {
      const aside = document.querySelector('aside');
      aside.classList.toggle('hidden');
    });

    // basic tab handling (only one tab now: produk)
    document.querySelectorAll('[data-tab]').forEach(btn => {
      btn.addEventListener('click', (e) => {
        const name = btn.getAttribute('data-tab');
        // deactivate other tab buttons
        document.querySelectorAll('[data-tab]').forEach(b => b.classList.remove('active-tab'));
        btn.classList.add('active-tab');
        // hide all tab content
        document.querySelectorAll('.tab-content').forEach(s => s.style.display = 'none');
        // show selected
        const section = document.getElementById('tab-' + name);
        if (section) section.style.display = 'block';
      });
    });

    // ensure Produk tab visible by default
    document.getElementById('tab-produk').style.display = 'block';
  </script>
</body>
</html>
