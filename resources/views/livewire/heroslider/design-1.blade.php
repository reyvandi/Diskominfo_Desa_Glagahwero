{{-- ============================================================
     HERO SLIDER — DESIGN 1 (v3 — ANIMASI PAKAI JS, BUKAN CSS)
     Teks dijamin muncul karena tidak bergantung pada
     .swiper-slide-active CSS selector yang sering konflik
     ============================================================ --}}

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">

<style>
    .d1-hero { font-family: 'Jost', sans-serif; position: relative; width: 100%; overflow: hidden; }
    .d1-swiper { width: 100% !important; height: 600px !important; }
    .d1-swiper .swiper-wrapper { height: 100% !important; }
    .d1-swiper .swiper-slide { height: 100% !important; display: block !important; position: relative !important; overflow: hidden; }

    /* Zoom bg */
    .d1-slide-bg { position: absolute; inset: 0; background-size: cover; background-position: center; transform: scale(1.06); transition: transform 6s ease; }
    .d1-swiper .swiper-slide-active .d1-slide-bg { transform: scale(1); }

    /* Font */
    .font-playfair { font-family: 'Playfair Display', serif; }

    /* Teks — default VISIBLE, JS akan handle animasinya */
    .d1-content-inner > * { opacity: 1; transform: translateY(0); }

    /* Progress */
    .d1-bar { height: 3px; background: #D4A843; width: 0; }

    /* Pagination */
    .d1-swiper .swiper-pagination { bottom: 28px !important; display: flex !important; justify-content: center; gap: 8px; width: 100% !important; }
    .d1-swiper .swiper-pagination-bullet { width: 8px !important; height: 8px !important; border-radius: 0 !important; background: rgba(255,255,255,0.4) !important; opacity: 1 !important; transition: width 0.4s !important; margin: 0 !important; }
    .d1-swiper .swiper-pagination-bullet-active { width: 28px !important; background: #D4A843 !important; }

    @media (max-width: 640px) {
        .d1-swiper { height: 460px !important; }
    }
</style>

<div class="d1-hero">

    {{-- Progress bar --}}
    <div class="absolute top-0 left-0 right-0 z-20 h-0.5 bg-white/10">
        <div class="d1-bar" id="d1Bar"></div>
    </div>

    <div class="swiper d1-swiper" id="d1Swiper">
        <div class="swiper-wrapper">

            {{-- ══ SLIDE 1 ══ --}}
            <div class="swiper-slide">
                <div class="d1-slide-bg" style="background-image:url('{{ asset('images/hero-1.jpg') }}')"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-black/10"></div>
                <div class="absolute bottom-0 left-0 right-0 h-40 bg-gradient-to-t from-black/60 to-transparent"></div>
                <div class="absolute inset-0 flex items-center z-10">
                    <div class="w-full max-w-7xl mx-auto px-4 sm:px-6">
                        <div class="d1-content-inner flex flex-col items-start gap-0">
                            <span class="inline-flex items-center gap-3 text-[#D4A843] text-xs tracking-[0.3em] uppercase font-medium mb-4">
                                <span class="inline-block w-10 h-px bg-[#D4A843]"></span>
                                Desa Wisata
                            </span>
                            <h1 class="font-playfair text-6xl sm:text-7xl lg:text-8xl font-black text-white leading-none">
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
            <div class="swiper-slide">
                <div class="d1-slide-bg" style="background-image:url('{{ asset('images/hero-2.jpg') }}')"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-black/10"></div>
                <div class="absolute bottom-0 left-0 right-0 h-40 bg-gradient-to-t from-black/60 to-transparent"></div>
                <div class="absolute inset-0 flex items-center z-10">
                    <div class="w-full max-w-7xl mx-auto px-4 sm:px-6">
                        <div class="d1-content-inner flex flex-col items-start gap-0">
                            <span class="inline-flex items-center gap-3 text-[#D4A843] text-xs tracking-[0.3em] uppercase font-medium mb-4">
                                <span class="inline-block w-10 h-px bg-[#D4A843]"></span>
                                Alam & Budaya
                            </span>
                            <h1 class="font-playfair text-6xl sm:text-7xl lg:text-8xl font-black text-white leading-none">
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
            <div class="swiper-slide">
                <div class="d1-slide-bg" style="background-image:url('{{ asset('images/hero-3.jpg') }}')"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-black/10"></div>
                <div class="absolute bottom-0 left-0 right-0 h-40 bg-gradient-to-t from-black/60 to-transparent"></div>
                <div class="absolute inset-0 flex items-center z-10">
                    <div class="w-full max-w-7xl mx-auto px-4 sm:px-6">
                        <div class="d1-content-inner flex flex-col items-start gap-0">
                            <span class="inline-flex items-center gap-3 text-[#D4A843] text-xs tracking-[0.3em] uppercase font-medium mb-4">
                                <span class="inline-block w-10 h-px bg-[#D4A843]"></span>
                                Pemerintahan
                            </span>
                            <h1 class="font-playfair text-6xl sm:text-7xl lg:text-8xl font-black text-white leading-none">
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

        {{-- Pagination --}}
        <div class="swiper-pagination"></div>

        {{-- Nav --}}
        <button class="d1-prev absolute left-4 sm:left-8 top-1/2 -translate-y-1/2 z-10 w-11 h-11 flex items-center justify-center border border-white/30 bg-white/5 backdrop-blur-sm text-white hover:border-[#D4A843] hover:bg-[#D4A843]/20 transition-all duration-300">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
        </button>
        <button class="d1-next absolute right-4 sm:right-8 top-1/2 -translate-y-1/2 z-10 w-11 h-11 flex items-center justify-center border border-white/30 bg-white/5 backdrop-blur-sm text-white hover:border-[#D4A843] hover:bg-[#D4A843]/20 transition-all duration-300">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </button>

        {{-- Counter --}}
        <div class="absolute bottom-7 right-6 sm:right-10 z-10 flex items-end gap-1 text-white/40" style="font-family:'Playfair Display',serif">
            <span class="text-4xl font-bold text-[#D4A843] leading-none" id="d1Cur">01</span>
            <span class="text-lg pb-1">/</span>
            <span class="text-lg pb-1">03</span>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script>
(function () {
    const bar   = document.getElementById('d1Bar');
    const cur   = document.getElementById('d1Cur');
    const DELAY = 5000;

    /* ── Animasi teks pakai JS (tidak bergantung CSS selector) ── */
    function animateSlide(swiper) {
        const activeSlide = swiper.slides[swiper.activeIndex];
        if (!activeSlide) return;

        const els = activeSlide.querySelectorAll('.d1-content-inner > *');
        els.forEach((el, i) => {
            el.style.transition = 'none';
            el.style.opacity    = '0';
            el.style.transform  = 'translateY(22px)';
            setTimeout(() => {
                el.style.transition = `opacity 0.65s ease, transform 0.65s ease`;
                el.style.transitionDelay = `${0.1 + i * 0.18}s`;
                el.style.opacity    = '1';
                el.style.transform  = 'translateY(0)';
            }, 30);
        });
    }

    /* ── Progress bar ── */
    function resetBar() {
        bar.style.transition = 'none';
        bar.style.width = '0%';
        bar.offsetHeight; // reflow
        bar.style.transition = `width ${DELAY}ms linear`;
        bar.style.width = '100%';
    }

    /* ── Init Swiper ── */
    const sw = new Swiper('#d1Swiper', {
        loop: true,
        speed: 900,
        autoplay: { delay: DELAY, disableOnInteraction: false },
        pagination: { el: '.swiper-pagination', clickable: true },
        navigation: { nextEl: '.d1-next', prevEl: '.d1-prev' },
        on: {
            afterInit(sw)  { animateSlide(sw); resetBar(); },
            slideChange(sw){ cur.textContent = String(sw.realIndex + 1).padStart(2,'0'); },
            slideChangeTransitionEnd(sw) { animateSlide(sw); resetBar(); },
        }
    });
})();
</script>
