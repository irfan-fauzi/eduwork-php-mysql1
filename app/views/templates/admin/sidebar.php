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
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l9-9 9 9M4 10v10a1 1 0 001 1h3m10-11v10a1 1 0 01-1 1h-3m-6 0h6" />
                        </svg>
                        <a href=<?= BASE_URL ?>>Home</a>
                    </li>

                    <li class="nav-item px-3 py-2 rounded-md mb-1 flex items-center gap-3 text-slate-200 bg-white/3">
                        <!-- Produk icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20 13V7a2 2 0 00-2-2h-3.586a1 1 0 00-.707.293l-7.414 7.414A1 1 0 006.586 13H4a2 2 0 00-2 2v3a2 2 0 002 2h14a2 2 0 002-2v-5z" />
                        </svg>
                        <span>Produk</span>
                    </li>

                    <li class="nav-item px-3 py-2 rounded-md mb-1 flex items-center gap-3 text-slate-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 17v-6a2 2 0 012-2h2a2 2 0 012 2v6m-6 0h6" />
                        </svg>
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