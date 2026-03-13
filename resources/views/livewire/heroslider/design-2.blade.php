{{-- ============================================================
     HERO SLIDER — DESIGN 2 (v2 — PURE TAILWIND, ZERO <style>)
     Tema     : Brutalist Split Screen
     - Tidak ada <style> block
     - Semua styling Tailwind + inline style untuk hal yg tidak bisa Tailwind
     - wire:ignore mencegah Livewire morph
     - CDN Swiper di layout utama, script init di @script previewer
     ============================================================ --}}

<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">

<div class="d2-hero relative w-full overflow-hidden" style="font-family:'DM Sans',sans-serif" wire:ignore>
    <div class="swiper d2-swiper w-full bg-[#0A0A0A]" id="d2Swiper" style="height:600px">
        <div class="swiper-wrapper" style="height:100%">

            {{-- ══ SLIDE 1 ══ --}}
            <div class="swiper-slide overflow-hidden" style="height:100%; display:flex">
                {{-- Kiri: Teks --}}
                <div class="d2-left-panel relative z-10 flex flex-col justify-end bg-[#0A0A0A]"
                     style="width:50%; flex-shrink:0; padding:60px 8% 100px">
                    {{-- Nomor dekorasi --}}
                    <div class="absolute top-6 select-none pointer-events-none leading-none"
                         style="font-family:'Bebas Neue',sans-serif; left:6%; font-size:clamp(5rem,12vw,12rem); color:#111; -webkit-text-stroke:1px #1C1C1C">01</div>
                    {{-- Konten --}}
                    <div class="d2-anim-wrap flex flex-col">
                        <div class="d2-anim-el" style="opacity:0; transform:translateX(-22px)">
                            <span class="inline-flex items-center gap-2 text-[#39FF14] text-xs tracking-[0.25em] uppercase font-medium">
                                Desa Wisat0
                                <span class="inline-block w-8 h-px bg-[#39FF14]"></span>
                            </span>
                        </div>
                        <div class="d2-anim-el mt-3" style="opacity:0; transform:translateX(-22px)">
                            <h1 class="text-white leading-none"
                                style="font-family:'Bebas Neue',sans-serif; font-size:clamp(3.5rem,6vw,6.5rem); letter-spacing:0.03em">
                                GLAGAH<span class="text-[#39FF14]">WERO</span>
                            </h1>
                        </div>
                        <div class="d2-anim-el mt-5" style="opacity:0; transform:translateX(-22px)">
                            <p class="text-white/45 text-sm leading-relaxed max-w-xs">
                                Surga tersembunyi di Jember yang menyimpan kekayaan budaya dan keindahan alam yang tak ternilai.
                            </p>
                        </div>
                        <div class="d2-anim-el mt-8 flex gap-3 flex-wrap" style="opacity:0; transform:translateX(-22px)">
                            <a href="#" class="bg-[#39FF14] text-[#0A0A0A] px-7 py-3 text-xs font-bold tracking-[0.15em] uppercase hover:opacity-80 transition-opacity">Jelajahi</a>
                            <a href="#" class="border border-white/20 text-white/50 px-6 py-3 text-xs tracking-[0.1em] uppercase hover:border-[#39FF14] hover:text-[#39FF14] transition-all">Pelajari</a>
                        </div>
                    </div>
                </div>
                {{-- Kanan: Gambar --}}
                <div class="d2-right-panel relative flex-1 overflow-hidden">
                    <div class="d2-img-bg absolute inset-0 bg-cover bg-center"
                         style="background-image:url('{{ asset('images/hero-1.jpg') }}');
                                clip-path:polygon(8% 0,100% 0,100% 100%,0% 100%);
                                transform:scale(1.06); transition:transform 6s ease"></div>
                    <div class="absolute inset-0 z-10"
                         style="background:linear-gradient(to right,#0A0A0A 0%,transparent 35%)"></div>
                </div>
            </div>

            {{-- ══ SLIDE 2 ══ --}}
            <div class="swiper-slide overflow-hidden" style="height:100%; display:flex">
                <div class="d2-left-panel relative z-10 flex flex-col justify-end bg-[#0A0A0A]"
                     style="width:50%; flex-shrink:0; padding:60px 8% 100px">
                    <div class="absolute top-6 select-none pointer-events-none leading-none"
                         style="font-family:'Bebas Neue',sans-serif; left:6%; font-size:clamp(5rem,12vw,12rem); color:#111; -webkit-text-stroke:1px #1C1C1C">02</div>
                    <div class="d2-anim-wrap flex flex-col">
                        <div class="d2-anim-el" style="opacity:0; transform:translateX(-22px)">
                            <span class="inline-flex items-center gap-2 text-[#39FF14] text-xs tracking-[0.25em] uppercase font-medium">
                                Potensi Lokal
                                <span class="inline-block w-8 h-px bg-[#39FF14]"></span>
                            </span>
                        </div>
                        <div class="d2-anim-el mt-3" style="opacity:0; transform:translateX(-22px)">
                            <h1 class="text-white leading-none"
                                style="font-family:'Bebas Neue',sans-serif; font-size:clamp(3.5rem,6vw,6.5rem); letter-spacing:0.03em">
                                PRODUK<span class="text-[#39FF14]"> DESA</span>
                            </h1>
                        </div>
                        <div class="d2-anim-el mt-5" style="opacity:0; transform:translateX(-22px)">
                            <p class="text-white/45 text-sm leading-relaxed max-w-xs">
                                UMKM lokal yang bergeliat menghadirkan produk-produk unggulan khas Glagahwero ke pasar nasional.
                            </p>
                        </div>
                        <div class="d2-anim-el mt-8 flex gap-3 flex-wrap" style="opacity:0; transform:translateX(-22px)">
                            <a href="#" class="bg-[#39FF14] text-[#0A0A0A] px-7 py-3 text-xs font-bold tracking-[0.15em] uppercase hover:opacity-80 transition-opacity">Lihat Produk</a>
                            <a href="#" class="border border-white/20 text-white/50 px-6 py-3 text-xs tracking-[0.1em] uppercase hover:border-[#39FF14] hover:text-[#39FF14] transition-all">Info Lebih</a>
                        </div>
                    </div>
                </div>
                <div class="d2-right-panel relative flex-1 overflow-hidden">
                    <div class="d2-img-bg absolute inset-0 bg-cover bg-center"
                         style="background-image:url('{{ asset('images/hero-2.jpg') }}');
                                clip-path:polygon(8% 0,100% 0,100% 100%,0% 100%);
                                transform:scale(1.06); transition:transform 6s ease"></div>
                    <div class="absolute inset-0 z-10"
                         style="background:linear-gradient(to right,#0A0A0A 0%,transparent 35%)"></div>
                </div>
            </div>

            {{-- ══ SLIDE 3 ══ --}}
            <div class="swiper-slide overflow-hidden" style="height:100%; display:flex">
                <div class="d2-left-panel relative z-10 flex flex-col justify-end bg-[#0A0A0A]"
                     style="width:50%; flex-shrink:0; padding:60px 8% 100px">
                    <div class="absolute top-6 select-none pointer-events-none leading-none"
                         style="font-family:'Bebas Neue',sans-serif; left:6%; font-size:clamp(5rem,12vw,12rem); color:#111; -webkit-text-stroke:1px #1C1C1C">03</div>
                    <div class="d2-anim-wrap flex flex-col">
                        <div class="d2-anim-el" style="opacity:0; transform:translateX(-22px)">
                            <span class="inline-flex items-center gap-2 text-[#39FF14] text-xs tracking-[0.25em] uppercase font-medium">
                                Pemerintahan
                                <span class="inline-block w-8 h-px bg-[#39FF14]"></span>
                            </span>
                        </div>
                        <div class="d2-anim-el mt-3" style="opacity:0; transform:translateX(-22px)">
                            <h1 class="text-white leading-none"
                                style="font-family:'Bebas Neue',sans-serif; font-size:clamp(3.5rem,6vw,6.5rem); letter-spacing:0.03em">
                                LAYANAN<span class="text-[#39FF14]"> PRIMA</span>
                            </h1>
                        </div>
                        <div class="d2-anim-el mt-5" style="opacity:0; transform:translateX(-22px)">
                            <p class="text-white/45 text-sm leading-relaxed max-w-xs">
                                Transparansi dan dedikasi penuh dari aparat desa dalam melayani setiap kebutuhan masyarakat.
                            </p>
                        </div>
                        <div class="d2-anim-el mt-8 flex gap-3 flex-wrap" style="opacity:0; transform:translateX(-22px)">
                            <a href="#" class="bg-[#39FF14] text-[#0A0A0A] px-7 py-3 text-xs font-bold tracking-[0.15em] uppercase hover:opacity-80 transition-opacity">Profil Desa</a>
                            <a href="#" class="border border-white/20 text-white/50 px-6 py-3 text-xs tracking-[0.1em] uppercase hover:border-[#39FF14] hover:text-[#39FF14] transition-all">Kontak</a>
                        </div>
                    </div>
                </div>
                <div class="d2-right-panel relative flex-1 overflow-hidden">
                    <div class="d2-img-bg absolute inset-0 bg-cover bg-center"
                         style="background-image:url('{{ asset('images/hero-3.jpg') }}');
                                clip-path:polygon(8% 0,100% 0,100% 100%,0% 100%);
                                transform:scale(1.06); transition:transform 6s ease"></div>
                    <div class="absolute inset-0 z-10"
                         style="background:linear-gradient(to right,#0A0A0A 0%,transparent 35%)"></div>
                </div>
            </div>

        </div>

        {{-- Divider garis tengah + animasi drop via JS --}}
        <div id="d2Divider" class="absolute top-[10%] bottom-[10%] z-20 overflow-hidden"
             style="left:50%; width:1px; background:rgba(57,255,20,0.12)">
            <div id="d2DividerDrop" class="absolute left-0 w-full bg-[#39FF14]"
                 style="top:0; height:0; opacity:0"></div>
        </div>

        {{-- Label vertikal kanan --}}
        <div class="absolute right-6 top-1/2 z-20 hidden sm:block text-white/20 text-[0.6rem] tracking-[0.3em] uppercase whitespace-nowrap"
             style="transform:translateY(-50%) rotate(90deg)">
            Glagahwero · Jember · Jawa Timur
        </div>

        {{-- Bottom bar --}}
        <div class="absolute bottom-0 left-0 right-0 z-20 flex items-center gap-6 px-8 sm:px-12"
             style="height:70px; background:rgba(10,10,10,0.92); backdrop-filter:blur(8px); border-top:1px solid rgba(255,255,255,0.06)">
            <span class="text-white/30 text-[0.62rem] tracking-[0.2em] uppercase mr-auto">Desa Glagahwero</span>
            {{-- Dots — dikelola JS --}}
            <div class="flex gap-2 items-center" id="d2Dots">
                <div class="d2-dot" data-idx="0" style="height:2px; width:28px; background:#39FF14; cursor:pointer; transition:width 0.4s,background 0.4s"></div>
                <div class="d2-dot" data-idx="1" style="height:2px; width:8px; background:rgba(255,255,255,0.2); cursor:pointer; transition:width 0.4s,background 0.4s"></div>
                <div class="d2-dot" data-idx="2" style="height:2px; width:8px; background:rgba(255,255,255,0.2); cursor:pointer; transition:width 0.4s,background 0.4s"></div>
            </div>
            {{-- Nav --}}
            <div class="flex gap-0.5">
                <button class="d2-prev flex items-center justify-center border border-white/10 text-white/50 hover:bg-[#39FF14] hover:text-[#0A0A0A] hover:border-[#39FF14] transition-all duration-300"
                        style="width:44px; height:44px">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                </button>
                <button class="d2-next flex items-center justify-center border border-white/10 text-white/50 hover:bg-[#39FF14] hover:text-[#0A0A0A] hover:border-[#39FF14] transition-all duration-300"
                        style="width:44px; height:44px">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>

    </div>
</div>

<script>
// Expose ke window agar bisa dipanggil previewer saat Livewire re-render
window.initD2Standalone = function () {
    const el = document.getElementById('d2Swiper');
    if (!el || el.swiper) return;
    function initD2Swiper() {
        const el = document.getElementById('d2Swiper');
        if (!el) return;

        const wrapper = el.querySelector('.swiper-wrapper');
        if (!wrapper || wrapper.children.length === 0) return;

        if (el.swiper) el.swiper.destroy(true, true);
        if (typeof Swiper === 'undefined') return;

        // Responsive height
        function setHeight() {
            el.style.height = window.innerWidth < 640 ? '560px' : '600px';
        }
        setHeight();
        window.addEventListener('resize', setHeight);

        // Responsive slide layout
        function setSlideLayout() {
            el.querySelectorAll('.swiper-slide').forEach(slide => {
                const left  = slide.querySelector('.d2-left-panel');
                const right = slide.querySelector('.d2-right-panel');
                if (window.innerWidth < 640) {
                    slide.style.flexDirection = 'column';
                    if (left)  { left.style.width = '100%'; left.style.height = '55%'; }
                    if (right) right.style.height = '45%';
                } else {
                    slide.style.flexDirection = 'row';
                    if (left)  { left.style.width = '50%'; left.style.height = ''; }
                    if (right) right.style.height = '';
                }
            });
        }
        setSlideLayout();
        window.addEventListener('resize', setSlideLayout);

        // Animasi teks slide-in dari kiri
        // Reset semua slide ke opacity:0 dulu, baru animasikan yang aktif
        function resetAllSlides(swiper) {
            swiper.slides.forEach((slide, si) => {
                if (si === swiper.activeIndex) return;
                slide.querySelectorAll('.d2-anim-el').forEach(item => {
                    item.style.transition  = 'none';
                    item.style.opacity     = '0';
                    item.style.transform   = 'translateX(-22px)';
                });
            });
        }

        function animateSlide(swiper) {
            const slide = swiper.slides[swiper.activeIndex];
            if (!slide) return;
            // Reset dulu semua slide non-aktif
            resetAllSlides(swiper);
            // Paksa reflow agar transition:none benar-benar diterapkan
            slide.offsetHeight;
            slide.querySelectorAll('.d2-anim-el').forEach((item, i) => {
                // Set posisi awal tanpa transisi
                item.style.transition  = 'none';
                item.style.opacity     = '0';
                item.style.transform   = 'translateX(-22px)';
                // Reflow per elemen
                item.offsetHeight;
                // Sekarang aktifkan transisi dan animasikan
                item.style.transition      = 'opacity 0.6s ease, transform 0.6s ease';
                item.style.transitionDelay = `${0.1 + i * 0.16}s`;
                item.style.opacity         = '1';
                item.style.transform       = 'translateX(0)';
            });
        }

        // Zoom bg aktif → scale(1), sisanya scale(1.06)
        function updateBgZoom(swiper) {
            swiper.slides.forEach((slide, i) => {
                const bg = slide.querySelector('.d2-img-bg');
                if (!bg) return;
                bg.style.transform = i === swiper.activeIndex ? 'scale(1)' : 'scale(1.06)';
            });
        }

        // Dots styling via JS
        const dots = el.querySelectorAll('#d2Dots .d2-dot');
        function setDot(idx) {
            dots.forEach((d, i) => {
                if (i === idx) {
                    d.style.width      = '28px';
                    d.style.background = '#39FF14';
                } else {
                    d.style.width      = '8px';
                    d.style.background = 'rgba(255,255,255,0.2)';
                }
            });
        }

        // Divider drop animation via JS (ganti @keyframes d2drop di CSS)
        const drop = document.getElementById('d2DividerDrop');
        let dropAnim;
        function startDividerDrop() {
            if (!drop) return;
            clearInterval(dropAnim);
            let progress = 0;
            drop.style.top     = '0%';
            drop.style.height  = '0%';
            drop.style.opacity = '0';
            dropAnim = setInterval(() => {
                progress += 1;
                if (progress <= 30)  {
                    drop.style.height  = progress + '%';
                    drop.style.opacity = (progress / 30).toString();
                } else if (progress <= 70) {
                    drop.style.top    = (progress - 30) + '%';
                    drop.style.height = '30%';
                    drop.style.opacity = '1';
                } else if (progress <= 100) {
                    const p = progress - 70;
                    drop.style.top    = (40 + p) + '%';
                    drop.style.height = (30 - p) + '%';
                    drop.style.opacity = (1 - p / 30).toString();
                } else {
                    progress = 0;
                }
            }, 25);
        }
        startDividerDrop();

        // Ref elemen nav langsung (bukan string selector)
        const btnNext = el.querySelector('.d2-next');
        const btnPrev = el.querySelector('.d2-prev');

        const sw = new Swiper(el, {
            loop:  false,
            speed: 850,
            autoplay: { delay: 5500, disableOnInteraction: false },
            navigation: { nextEl: btnNext, prevEl: btnPrev },
            on: {
                afterInit(sw)                { animateSlide(sw); updateBgZoom(sw); setDot(sw.activeIndex); },
                slideChange(sw)              { setDot(sw.activeIndex); updateBgZoom(sw); },
                slideChangeTransitionEnd(sw) { animateSlide(sw); },
            },
        });

        // Fallback click listener
        if (btnNext) btnNext.addEventListener('click', () => sw.slideNext());
        if (btnPrev) btnPrev.addEventListener('click', () => sw.slidePrev());

        // Dots click
        dots.forEach(d => d.addEventListener('click', () => {
            sw.slideTo(+d.dataset.idx);
        }));
    }
    initD2Swiper();
};

// Jalankan langsung saat blade ini dimuat (untuk penggunaan standalone)
if (typeof Swiper !== 'undefined') {
    window.initD2Standalone();
} else {
    window.addEventListener('load', window.initD2Standalone);
}
</script>
