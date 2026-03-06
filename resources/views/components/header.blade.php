<header x-data="{ open: false }">

  {{-- TOP BAR --}}
  <div class="bg-[#1D4ED8] text-white text-sm py-2 px-4 sm:px-6">
    <div class="max-w-7xl mx-auto flex items-center justify-between">

      {{-- Kiri: Telepon & Email --}}
      <div class="flex items-center gap-3 sm:gap-5">
        <div class="flex items-center gap-1.5">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
          </svg>
          <span class="hidden sm:inline">08123456789</span>
        </div>
        <div class="flex items-center gap-1.5">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
          </svg>
          <span class="hidden sm:inline">email@gmail.com</span>
        </div>
      </div>

      {{-- Kanan: Sosmed --}}
      <div class="flex items-center gap-3 sm:gap-5">
        <div class="flex items-center gap-1.5">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/>
          </svg>
          <span class="hidden sm:inline">Facebook Jember</span>
        </div>
        <div class="flex items-center gap-1.5">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
            <circle cx="12" cy="12" r="4"/>
            <circle cx="17.5" cy="6.5" r="0.5" fill="currentColor" stroke="none"/>
          </svg>
          <span class="hidden sm:inline">Instagram Jember</span>
        </div>
      </div>

    </div>
  </div>

  {{-- MAIN HEADER --}}
<div class="bg-white shadow-sm py-3 px-4 sm:px-6">
    <div class="max-w-7xl mx-auto flex items-center justify-between">

      {{-- Logo --}}
      <div class="text-xl sm:text-2xl font-bold text-[#0D2B5E] tracking-wide">
        Glagahwero
      </div>

      {{-- Desktop Nav --}}
      <nav class="hidden md:block">
        <ul class="flex items-center gap-7 text-sm font-medium text-[#0D2B5E]">
          <li><a href="{{ route('beranda') }}" class="hover:underline hover:underline-offset-4 transition">Beranda</a></li>

          {{-- Profil Dropdown --}}
          <li class="relative group">
            <button class="flex items-center gap-1 hover:underline hover:underline-offset-4 transition cursor-pointer select-none">
              Profil
              <svg class="w-3.5 h-3.5 mt-0.5 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
              </svg>
            </button>

            {{-- Dropdown Panel --}}
            {{-- Dropdown Panel --}}
            <div class="absolute top-full left-0 mt-2 w-40 bg-white rounded-xl shadow-lg border border-gray-100
                        opacity-0 invisible translate-y-1
                        group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
                        transition-all duration-200 ease-out z-50">
            <ul class="py-1.5">
                <li>
                <a href="{{ route('profil') }}"
                    class="block px-4 py-2.5 text-sm text-[#0D2B5E] hover:bg-blue-50 transition-colors">
                    Profil Desa
                </a>
                </li>
                <li>
                <a href="{{ route('aparatur') }}"
                    class="block px-4 py-2.5 text-sm text-[#0D2B5E] hover:bg-blue-50 transition-colors">
                    Aparatur Desa
                </a>
                </li>
            </ul>
            </div>

          <li><a href="{{ route('berita') }}" class="hover:underline hover:underline-offset-4 transition">Berita</a></li>
          <li><a href="{{ route('dokumen') }}" class="hover:underline hover:underline-offset-4 transition">Dokumen</a></li>
          <li><a href="{{ route('produk') }}" class="hover:underline hover:underline-offset-4 transition">Produk Desa</a></li>
          <li><a href="{{ route('ppid') }}" class="hover:underline hover:underline-offset-4 transition">PPID</a></li>
        </ul>
      </nav>

      {{-- Hamburger Button (mobile only) --}}
      <button class="md:hidden p-2 rounded text-[#0D2B5E] focus:outline-none" onclick="toggleMenu()" id="hamburger-btn" aria-label="Menu">
        <svg id="icon-open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>

    </div>

    {{-- Mobile Nav Dropdown --}}
    <div id="mobile-menu" class="md:hidden hidden px-2 pt-3 pb-2 border-t border-gray-100 mt-3">
      <ul class="flex flex-col gap-1 text-sm font-medium text-[#0D2B5E]">
        <li><a href="{{ route('beranda') }}" class="block px-3 py-2 rounded hover:bg-blue-50 transition">Beranda</a></li>

        {{-- Profil accordion mobile --}}
        <li>
          <button onclick="toggleMobileProfil()" class="w-full flex items-center justify-between px-3 py-2 rounded hover:bg-blue-50 transition">
            <span>Profil</span>
            <svg id="profil-chevron" class="w-3.5 h-3.5 transition-transform duration-200" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
            </svg>
          </button>
          <div id="mobile-profil-sub" class="hidden pl-4 flex flex-col gap-0.5 mt-0.5">
            <a href="{{ route('profil') }}" class="block px-3 py-2 rounded hover:bg-blue-50 transition text-[#0D2B5E]">
              — Profil Desa
            </a>
            <a href="{{ route('aparatur') }}" class="block px-3 py-2 rounded hover:bg-blue-50 transition text-[#0D2B5E]">
              — Aparatur Desa
            </a>
          </div>
        </li>

        <li><a href="{{ route('berita') }}" class="block px-3 py-2 rounded hover:bg-blue-50 transition">Berita</a></li>
        <li><a href="{{ route('dokumen') }}" class="block px-3 py-2 rounded hover:bg-blue-50 transition">Dokumen</a></li>
        <li><a href="{{ route('produk') }}" class="block px-3 py-2 rounded hover:bg-blue-50 transition">Produk Desa</a></li>
        <li><a href="{{ route('ppid') }}" class="block px-3 py-2 rounded hover:bg-blue-50 transition">PPID</a></li>
      </ul>
    </div>

</div>

<script>
  function toggleMenu() {
    const menu = document.getElementById('mobile-menu');
    const iconOpen = document.getElementById('icon-open');
    const iconClose = document.getElementById('icon-close');
    const isHidden = menu.classList.contains('hidden');
    menu.classList.toggle('hidden', !isHidden);
    iconOpen.classList.toggle('hidden', isHidden);
    iconClose.classList.toggle('hidden', !isHidden);
  }

  function toggleMobileProfil() {
    const sub = document.getElementById('mobile-profil-sub');
    const chevron = document.getElementById('profil-chevron');
    const isHidden = sub.classList.contains('hidden');
    sub.classList.toggle('hidden', !isHidden);
    chevron.classList.toggle('rotate-180', isHidden);
  }
</script>
