{{-- ============================================================
     HERO SLIDER — DESIGN 2 (REBUILD — ANIMASI PAKAI JS)
     Tema     : Brutalist Split Screen
     Teks dijamin muncul, animasi JS bukan CSS selector
     Library  : Swiper 12 · Tailwind CDN
     ============================================================ --}}

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">

<style>
    .d2-hero { font-family: 'DM Sans', sans-serif; }
    .font-bebas { font-family: 'Bebas Neue', sans-serif; }

    /* Swiper override — scope ketat */
    .d2-hero .d2-swiper              { width: 100% !important; height: 600px !important; background: #0A0A0A; }
    .d2-hero .d2-swiper .swiper-wrapper { height: 100% !important; }
    .d2-hero .d2-swiper .swiper-slide {
        height: 100% !important;
        display: flex !important;   /* split screen butuh flex */
        overflow: hidden;
    }

    /* Image zoom */
    .d2-img-bg { transition: transform 6s ease; transform: scale(1.06); }
    .d2-hero .d2-swiper .swiper-slide-active .d2-img-bg { transform: scale(1); }

    /* Divider animasi */
    .d2-divider-line::after {
        content: ''; position: absolute; top: 0; left: 0;
        width: 100%; height: 30%; background: #39FF14;
        animation: d2drop 2.5s ease-in-out infinite;
    }
    @keyframes d2drop {
        0%   { top: 0;   height: 0;   opacity: 0; }
        30%  { opacity: 1; }
        70%  { top: 70%; height: 30%; opacity: 1; }
        100% { top: 100%; height: 0; opacity: 0; }
    }

    /* Dot nav */
    .d2-dot { width: 8px; height: 2px; background: rgba(255,255,255,0.2); cursor: pointer; transition: width 0.4s, background 0.4s; }
    .d2-dot.active { width: 28px; background: #39FF14; }

    @media (max-width: 640px) {
        .d2-hero .d2-swiper              { height: 560px !important; }
        .d2-hero .d2-swiper .swiper-slide { flex-direction: column !important; }
        .d2-left-panel  { width: 100% !important; height: 55% !important; }
        .d2-right-panel { height: 45% !important; }
    }
</style>

<div class="d2-hero relative w-full overflow-hidden">
    <div class="swiper d2-swiper" id="d2Swiper">
        <div class="swiper-wrapper">

            {{-- ══ SLIDE 1 ══ --}}
            <div class="swiper-slide">
                {{-- Kiri: Teks --}}
                <div class="d2-left-panel relative z-10 flex flex-col justify-end bg-[#0A0A0A]"
                     style="width:50%; flex-shrink:0; padding: 60px 8% 100px;">
                    {{-- Nomor dekorasi --}}
                    <div class="font-bebas absolute top-6 left-[6%] text-[#111] select-none pointer-events-none leading-none"
                         style="font-size: clamp(5rem,12vw,12rem); -webkit-text-stroke: 1px #1C1C1C;">01</div>

                    {{-- Konten animasi JS --}}
                    <div class="d2-anim-wrap flex flex-col gap-0">
                        <div class="d2-anim-el">
                            <span class="inline-flex items-center gap-2 text-[#39FF14] text-xs tracking-[0.25em] uppercase font-medium">
                                Desa Wisata
                                <span class="inline-block w-8 h-px bg-[#39FF14]"></span>
                            </span>
                        </div>
                        <div class="d2-anim-el mt-3">
                            <h1 class="font-bebas text-white leading-none" style="font-size: clamp(3.5rem,6vw,6.5rem); letter-spacing:0.03em;">
                                GLAGAH<span class="text-[#39FF14]">WERO</span>
                            </h1>
                        </div>
                        <div class="d2-anim-el mt-5">
                            <p class="text-white/45 text-sm leading-relaxed max-w-xs">
                                Surga tersembunyi di Jember yang menyimpan kekayaan budaya dan keindahan alam yang tak ternilai.
                            </p>
                        </div>
                        <div class="d2-anim-el mt-8 flex gap-3 flex-wrap">
                            <a href="#" class="bg-[#39FF14] text-[#0A0A0A] px-7 py-3 text-xs font-bold tracking-[0.15em] uppercase hover:opacity-80 transition-opacity">Jelajahi</a>
                            <a href="#" class="border border-white/20 text-white/50 px-6 py-3 text-xs tracking-[0.1em] uppercase hover:border-[#39FF14] hover:text-[#39FF14] transition-all">Pelajari</a>
                        </div>
                    </div>
                </div>

                {{-- Kanan: Gambar --}}
                <div class="d2-right-panel relative flex-1 overflow-hidden">
                    <div class="d2-img-bg absolute inset-0 bg-cover bg-center"
                         style="background-image:url('{{ asset('images/hero-1.jpg') }}');
                                clip-path: polygon(8% 0, 100% 0, 100% 100%, 0% 100%);"></div>
                    <div class="absolute inset-0 z-10"
                         style="background: linear-gradient(to right, #0A0A0A 0%, transparent 35%)"></div>
                </div>
            </div>

            {{-- ══ SLIDE 2 ══ --}}
            <div class="swiper-slide">
                <div class="d2-left-panel relative z-10 flex flex-col justify-end bg-[#0A0A0A]"
                     style="width:50%; flex-shrink:0; padding: 60px 8% 100px;">
                    <div class="font-bebas absolute top-6 left-[6%] text-[#111] select-none pointer-events-none leading-none"
                         style="font-size: clamp(5rem,12vw,12rem); -webkit-text-stroke: 1px #1C1C1C;">02</div>

                    <div class="d2-anim-wrap flex flex-col gap-0">
                        <div class="d2-anim-el">
                            <span class="inline-flex items-center gap-2 text-[#39FF14] text-xs tracking-[0.25em] uppercase font-medium">
                                Potensi Lokal
                                <span class="inline-block w-8 h-px bg-[#39FF14]"></span>
                            </span>
                        </div>
                        <div class="d2-anim-el mt-3">
                            <h1 class="font-bebas text-white leading-none" style="font-size: clamp(3.5rem,6vw,6.5rem); letter-spacing:0.03em;">
                                PRODUK<span class="text-[#39FF14]"> DESA</span>
                            </h1>
                        </div>
                        <div class="d2-anim-el mt-5">
                            <p class="text-white/45 text-sm leading-relaxed max-w-xs">
                                UMKM lokal yang bergeliat menghadirkan produk-produk unggulan khas Glagahwero ke pasar nasional.
                            </p>
                        </div>
                        <div class="d2-anim-el mt-8 flex gap-3 flex-wrap">
                            <a href="#" class="bg-[#39FF14] text-[#0A0A0A] px-7 py-3 text-xs font-bold tracking-[0.15em] uppercase hover:opacity-80 transition-opacity">Lihat Produk</a>
                            <a href="#" class="border border-white/20 text-white/50 px-6 py-3 text-xs tracking-[0.1em] uppercase hover:border-[#39FF14] hover:text-[#39FF14] transition-all">Info Lebih</a>
                        </div>
                    </div>
                </div>

                <div class="d2-right-panel relative flex-1 overflow-hidden">
                    <div class="d2-img-bg absolute inset-0 bg-cover bg-center"
                         style="background-image:url('{{ asset('images/hero-2.jpg') }}');
                                clip-path: polygon(8% 0, 100% 0, 100% 100%, 0% 100%);"></div>
                    <div class="absolute inset-0 z-10"
                         style="background: linear-gradient(to right, #0A0A0A 0%, transparent 35%)"></div>
                </div>
            </div>

            {{-- ══ SLIDE 3 ══ --}}
            <div class="swiper-slide">
                <div class="d2-left-panel relative z-10 flex flex-col justify-end bg-[#0A0A0A]"
                     style="width:50%; flex-shrink:0; padding: 60px 8% 100px;">
                    <div class="font-bebas absolute top-6 left-[6%] text-[#111] select-none pointer-events-none leading-none"
                         style="font-size: clamp(5rem,12vw,12rem); -webkit-text-stroke: 1px #1C1C1C;">03</div>

                    <div class="d2-anim-wrap flex flex-col gap-0">
                        <div class="d2-anim-el">
                            <span class="inline-flex items-center gap-2 text-[#39FF14] text-xs tracking-[0.25em] uppercase font-medium">
                                Pemerintahan
                                <span class="inline-block w-8 h-px bg-[#39FF14]"></span>
                            </span>
                        </div>
                        <div class="d2-anim-el mt-3">
                            <h1 class="font-bebas text-white leading-none" style="font-size: clamp(3.5rem,6vw,6.5rem); letter-spacing:0.03em;">
                                LAYANAN<span class="text-[#39FF14]"> PRIMA</span>
                            </h1>
                        </div>
                        <div class="d2-anim-el mt-5">
                            <p class="text-white/45 text-sm leading-relaxed max-w-xs">
                                Transparansi dan dedikasi penuh dari aparat desa dalam melayani setiap kebutuhan masyarakat.
                            </p>
                        </div>
                        <div class="d2-anim-el mt-8 flex gap-3 flex-wrap">
                            <a href="#" class="bg-[#39FF14] text-[#0A0A0A] px-7 py-3 text-xs font-bold tracking-[0.15em] uppercase hover:opacity-80 transition-opacity">Profil Desa</a>
                            <a href="#" class="border border-white/20 text-white/50 px-6 py-3 text-xs tracking-[0.1em] uppercase hover:border-[#39FF14] hover:text-[#39FF14] transition-all">Kontak</a>
                        </div>
                    </div>
                </div>

                <div class="d2-right-panel relative flex-1 overflow-hidden">
                    <div class="d2-img-bg absolute inset-0 bg-cover bg-center"
                         style="background-image:url('{{ asset('images/hero-3.jpg') }}');
                                clip-path: polygon(8% 0, 100% 0, 100% 100%, 0% 100%);"></div>
                    <div class="absolute inset-0 z-10"
                         style="background: linear-gradient(to right, #0A0A0A 0%, transparent 35%)"></div>
                </div>
            </div>

        </div>

        {{-- Divider tengah --}}
        <div class="d2-divider-line absolute top-[10%] bottom-[10%] z-20 overflow-hidden"
             style="left: 50%; width: 1px; background: rgba(57,255,20,0.12);"></div>

        {{-- Label vertikal kanan --}}
        <div class="absolute right-6 top-1/2 z-20 hidden sm:block text-white/20 text-[0.6rem] tracking-[0.3em] uppercase whitespace-nowrap"
             style="transform: translateY(-50%) rotate(90deg);">
            Glagahwero · Jember · Jawa Timur
        </div>

        {{-- Bottom bar --}}
        <div class="absolute bottom-0 left-0 right-0 z-20 flex items-center gap-6 px-8 sm:px-12"
             style="height:70px; background: rgba(10,10,10,0.92); backdrop-filter: blur(8px); border-top: 1px solid rgba(255,255,255,0.06);">
            <span class="text-white/30 text-[0.62rem] tracking-[0.2em] uppercase mr-auto">Desa Glagahwero</span>
            <div class="flex gap-2 items-center" id="d2Dots">
                <div class="d2-dot active" data-idx="0"></div>
                <div class="d2-dot" data-idx="1"></div>
                <div class="d2-dot" data-idx="2"></div>
            </div>
            <div class="flex gap-0.5">
                <button class="d2-prev w-11 h-11 flex items-center justify-center border border-white/10 text-white/50 hover:bg-[#39FF14] hover:text-[#0A0A0A] hover:border-[#39FF14] transition-all duration-300">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                </button>
                <button class="d2-next w-11 h-11 flex items-center justify-center border border-white/10 text-white/50 hover:bg-[#39FF14] hover:text-[#0A0A0A] hover:border-[#39FF14] transition-all duration-300">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script>
(function () {
    /* ── Animasi teks 100% JS ── */
    function animateSlide(swiper) {
        const slide = swiper.slides[swiper.activeIndex];
        if (!slide) return;
        const els = slide.querySelectorAll('.d2-anim-el');
        els.forEach((el, i) => {
            el.style.transition  = 'none';
            el.style.opacity     = '0';
            el.style.transform   = 'translateX(-22px)';
            setTimeout(() => {
                el.style.transition      = 'opacity 0.6s ease, transform 0.6s ease';
                el.style.transitionDelay = `${0.1 + i * 0.16}s`;
                el.style.opacity         = '1';
                el.style.transform       = 'translateX(0)';
            }, 30);
        });
    }

    /* ── Dots ── */
    const dots = document.querySelectorAll('#d2Dots .d2-dot');
    function setDot(idx) {
        dots.forEach((d, i) => d.classList.toggle('active', i === idx));
    }

    /* ── Swiper ── */
    const sw = new Swiper('#d2Swiper', {
        loop: false,
        speed: 850,
        autoplay: { delay: 5500, disableOnInteraction: false },
        navigation: { nextEl: '.d2-next', prevEl: '.d2-prev' },
        on: {
            afterInit(sw)               { animateSlide(sw); },
            slideChangeTransitionEnd(sw){ animateSlide(sw); setDot(sw.activeIndex); },
            slideChange(sw)             { setDot(sw.activeIndex); }
        }
    });

    dots.forEach(d => d.addEventListener('click', () => sw.slideTo(+d.dataset.idx)));
})();
</script>
