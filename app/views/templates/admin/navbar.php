       <div class="flex-1 min-h-screen">
            <!-- NAVBAR -->
            <header class="flex items-center justify-between px-4 py-3 bg-white shadow-sm">
                <div class="flex items-center gap-3">
                    <button id="mobile-open" class="md:hidden p-2 rounded-md bg-slate-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M3 5h14a1 1 0 100-2H3a1 1 0 000 2zm14 4H3a1 1 0 100 2h14a1 1 0 100-2zm0 6H3a1 1 0 100 2h14a1 1 0 100-2z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <h1 class="text-lg font-semibold">Dashboard</h1>
                    <a href=<?= BASE_URL ?> class="text-md font-semibold cursor-pointer">Home</a>
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