{{-- ============================================================
     HERO SLIDER — DESIGN 1 (v5 — PURE TAILWIND, ZERO <style>)
     - Tidak ada <style> block sama sekali
     - Semua styling pakai Tailwind utility classes
     - Swiper-specific styling (bullet, wrapper) diset via JS
     - wire:ignore mencegah Livewire morph elemen ini
     - CDN Swiper di layout utama, script init di @script previewer
     ============================================================ --}}

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">

<div class="d1-hero relative w-full overflow-hidden" style="font-family:'Jost',sans-serif" wire:ignore>

    {{-- Progress bar --}}
    <div class="absolute top-0 left-0 right-0 z-20 h-0.5 bg-white/10">
        <div id="d1Bar" class="h-full bg-[#D4A843] w-0"></div>
    </div>

    <div class="swiper d1-swiper w-full" id="d1Swiper" style="height:600px">
        <div class="swiper-wrapper" style="height:100%">

            {{-- ══ SLIDE 1 ══ --}}
            <div class="swiper-slide relative overflow-hidden" style="height:100%">
                <div class="d1-slide-bg absolute inset-0 bg-cover bg-center scale-[1.06]"
                     style="background-image:url('{{ asset('images/hero-1.jpg') }}'); transition:transform 6s ease"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-black/10"></div>
                <div class="absolute bottom-0 left-0 right-0 h-40 bg-gradient-to-t from-black/60 to-transparent"></div>
                <div class="absolute inset-0 flex items-center z-10">
                    <div class="w-full max-w-7xl mx-auto px-4 sm:px-6">
                        <div class="d1-content-inner flex flex-col items-start">
                            <span class="inline-flex items-center gap-3 text-[#D4A843] text-xs tracking-[0.3em] uppercase font-medium mb-4">
                                <span class="inline-block w-10 h-px bg-[#D4A843]"></span>
                                Desa Wisata
                            </span>
                            <h1 class="text-6xl sm:text-7xl lg:text-8xl font-black text-white leading-none"
                                style="font-family:'Playfair Display',serif">
                                Glagah<em class="text-[#D4A843] italic">wero</em>
                            </h1>
                            <p class="mt-5 text-white/60 text-sm sm:text-base leading-relaxed max-w-md">
                                Desa yang kaya akan budaya, alam, dan kearifan lokal yang tumbuh di jantung Kabupaten Jember.
                            </p>
                            <a href="#" class="mt-8 inline-flex items-center gap-3 border border-[#D4A843] text-[#D4A843] px-8 py-3.5 text-xs tracking-[0.2em] uppercase hover:bg-[#D4A843] hover:text-black transition-all duration-300">
                                Jelajahi Desa
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ══ SLIDE 2 ══ --}}
            <div class="swiper-slide relative overflow-hidden" style="height:100%">
                <div class="d1-slide-bg absolute inset-0 bg-cover bg-center scale-[1.06]"
                     style="background-image:url('{{ asset('images/hero-2.jpg') }}'); transition:transform 6s ease"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-black/10"></div>
                <div class="absolute bottom-0 left-0 right-0 h-40 bg-gradient-to-t from-black/60 to-transparent"></div>
                <div class="absolute inset-0 flex items-center z-10">
                    <div class="w-full max-w-7xl mx-auto px-4 sm:px-6">
                        <div class="d1-content-inner flex flex-col items-start">
                            <span class="inline-flex items-center gap-3 text-[#D4A843] text-xs tracking-[0.3em] uppercase font-medium mb-4">
                                <span class="inline-block w-10 h-px bg-[#D4A843]"></span>
                                Alam & Budaya
                            </span>
                            <h1 class="text-6xl sm:text-7xl lg:text-8xl font-black text-white leading-none"
                                style="font-family:'Playfair Display',serif">
                                Potensi<br><em class="text-[#D4A843] italic">Tak Terbatas</em>
                            </h1>
                            <p class="mt-5 text-white/60 text-sm sm:text-base leading-relaxed max-w-md">
                                Hamparan sawah, sungai jernih, dan produk lokal unggulan menjadi kekayaan yang kami jaga bersama.
                            </p>
                            <a href="#" class="mt-8 inline-flex items-center gap-3 border border-[#D4A843] text-[#D4A843] px-8 py-3.5 text-xs tracking-[0.2em] uppercase hover:bg-[#D4A843] hover:text-black transition-all duration-300">
                                Produk Desa
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ══ SLIDE 3 ══ --}}
            <div class="swiper-slide relative overflow-hidden" style="height:100%">
                <div class="d1-slide-bg absolute inset-0 bg-cover bg-center scale-[1.06]"
                     style="background-image:url('{{ asset('images/hero-3.jpg') }}'); transition:transform 6s ease"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-black/10"></div>
                <div class="absolute bottom-0 left-0 right-0 h-40 bg-gradient-to-t from-black/60 to-transparent"></div>
                <div class="absolute inset-0 flex items-center z-10">
                    <div class="w-full max-w-7xl mx-auto px-4 sm:px-6">
                        <div class="d1-content-inner flex flex-col items-start">
                            <span class="inline-flex items-center gap-3 text-[#D4A843] text-xs tracking-[0.3em] uppercase font-medium mb-4">
                                <span class="inline-block w-10 h-px bg-[#D4A843]"></span>
                                Pemerintahan
                            </span>
                            <h1 class="text-6xl sm:text-7xl lg:text-8xl font-black text-white leading-none"
                                style="font-family:'Playfair Display',serif">
                                Melayani<br>dengan <em class="text-[#D4A843] italic">Hati</em>
                            </h1>
                            <p class="mt-5 text-white/60 text-sm sm:text-base leading-relaxed max-w-md">
                                Pemerintah desa Glagahwero berkomitmen memberikan pelayanan terbaik bagi seluruh warga masyarakat.
                            </p>
                            <a href="#" class="mt-8 inline-flex items-center gap-3 border border-[#D4A843] text-[#D4A843] px-8 py-3.5 text-xs tracking-[0.2em] uppercase hover:bg-[#D4A843] hover:text-black transition-all duration-300">
                                Profil Desa
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- Pagination — bullet styling diset via JS di initD1Swiper --}}
        <div class="swiper-pagination"></div>

        {{-- Nav Prev --}}
        <button class="d1-prev absolute left-4 sm:left-8 top-1/2 -translate-y-1/2 z-10
                        w-11 h-11 flex items-center justify-center
                        border border-white/30 bg-white/5 backdrop-blur-sm text-white
                        hover:border-[#D4A843] hover:bg-[#D4A843]/20 transition-all duration-300">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M19 12H5M12 19l-7-7 7-7"/>
            </svg>
        </button>

        {{-- Nav Next --}}
        <button class="d1-next absolute right-4 sm:right-8 top-1/2 -translate-y-1/2 z-10
                        w-11 h-11 flex items-center justify-center
                        border border-white/30 bg-white/5 backdrop-blur-sm text-white
                        hover:border-[#D4A843] hover:bg-[#D4A843]/20 transition-all duration-300">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
        </button>

        {{-- Counter --}}
        <div class="absolute bottom-7 right-6 sm:right-10 z-10 flex items-end gap-1 text-white/40"
             style="font-family:'Playfair Display',serif">
            <span id="d1Cur" class="text-4xl font-bold text-[#D4A843] leading-none">01</span>
            <span class="text-lg pb-1">/</span>
            <span class="text-lg pb-1">03</span>
        </div>

    </div>
</div>
