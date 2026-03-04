
<header>
    <div class="bg-[#1D4ED8] text-white text-sm py-2 px-6">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
        <!-- Kiri: Telepon & Email -->
        <div class="flex items-center gap-5">
            <div class="flex items-center gap-1.5">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
            </svg>
            <span>08123456789</span>
            </div>
            <div class="flex items-center gap-1.5">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            <span>email@gmail.com</span>
            </div>
        </div>

        <!-- Kanan: Facebook & Instagram -->
        <div class="flex items-center gap-5">
            <div class="flex items-center gap-1.5">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/>
                </svg>
                <span>Facebook Jember</span>
                </div>
                    <div class="flex items-center gap-1.5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                        <circle cx="12" cy="12" r="4"/>
                        <circle cx="17.5" cy="6.5" r="0.5" fill="currentColor" stroke="none"/>
                    </svg>
                    <span>Instagram Jember</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- MAIN HEADER -->
    <div class="bg-white shadow-sm py-3 px-6">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
        <!-- Logo / Brand -->
        <div class="text-2xl font-bold text-[#0D2B5E] tracking-wide">
            Glagahwero
        </div>

            <!-- Navigasi -->
            <nav>
                <ul class="flex items-center gap-7 text-sm font-medium text-[#0D2B5E]">

                    <li>
                    <a href="{{ route('beranda') }}"
                        class="hover:underline hover:underline-offset-4 transition">
                        Beranda
                    </a>
                    </li>

                    <li>
                    <a href="{{ route('profil') }}"
                        class="hover:underline hover:underline-offset-4 transition">
                        Profil
                    </a>
                    </li>

                    <li>
                    <a href="{{ route('berita') }}"
                        class="hover:underline hover:underline-offset-4 transition">
                        Berita
                    </a>
                    </li>

                    <li>
                    <a href="{{ route('dokumen') }}"
                        class="hover:underline hover:underline-offset-4 transition">
                        Dokumen
                    </a>
                    </li>

                    <li>
                    <a href="{{ route('produk') }}"
                        class="hover:underline hover:underline-offset-4 transition">
                        Produk Desa
                    </a>
                    </li>

                    <li>
                    <a href="{{ route('ppid') }}"
                        class="hover:underline hover:underline-offset-4 transition">
                        PPID
                    </a>
                    </li>

                </ul>
            </nav>
        </div>
    </div>
</header>
