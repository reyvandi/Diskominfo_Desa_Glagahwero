<div class="w-full">

    {{-- ROW DROPDOWN --}}
    <div class="flex items-center gap-4 mb-6">

        {{-- DROPDOWN 1: KOMPONEN --}}
        <div class="relative">
            <button wire:click="toggleComponentDropdown"
                class="flex items-center gap-2 px-6 py-3 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition min-w-[180px] justify-between">
                <span>{{ $selectedComponent ? $components[$selectedComponent] : 'Pilih Komponen' }}</span>
                <svg class="w-4 h-4 transition-transform {{ $showComponentDropdown ? 'rotate-180' : '' }}"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            @if($showComponentDropdown)
            <div class="absolute z-20 mt-2 w-56 bg-white rounded-lg shadow-lg border border-gray-200">
                @foreach($components as $key => $label)
                <button wire:click="selectComponent('{{ $key }}')"
                    class="w-full text-left px-4 py-3 hover:bg-blue-50 hover:text-blue-600 transition
                           {{ $selectedComponent === $key ? 'bg-blue-100 text-blue-700 font-semibold' : 'text-gray-700' }}
                           {{ $loop->first ? 'rounded-t-lg' : '' }}
                           {{ $loop->last ? 'rounded-b-lg' : '' }}">
                    {{ $label }}
                </button>
                @endforeach
            </div>
            @endif
        </div>

        {{-- DROPDOWN 2: DESIGN --}}
        @if($selectedComponent)
        <div class="relative">
            <button wire:click="toggleDesignDropdown"
                class="flex items-center gap-2 px-6 py-3 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700 transition min-w-[150px] justify-between">
                <span>{{ $selectedDesign ? 'Design ' . $selectedDesign : 'Pilih Design' }}</span>
                <svg class="w-4 h-4 transition-transform {{ $showDesignDropdown ? 'rotate-180' : '' }}"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            @if($showDesignDropdown)
            <div class="absolute z-20 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200">
                @foreach($designs[$selectedComponent] as $num)
                <button wire:click="selectDesign({{ $num }})"
                    class="w-full text-left px-4 py-3 hover:bg-indigo-50 hover:text-indigo-600 transition
                           {{ $selectedDesign === $num ? 'bg-indigo-100 text-indigo-700 font-semibold' : 'text-gray-700' }}
                           {{ $loop->first ? 'rounded-t-lg' : '' }}
                           {{ $loop->last ? 'rounded-b-lg' : '' }}">
                    Design {{ $num }}
                </button>
                @endforeach
            </div>
            @endif
        </div>
        @endif

    </div>

    {{-- PREVIEW AREA --}}
    @if($selectedComponent && $selectedDesign)
    <div class="w-full">
        @if($selectedComponent === 'heroslider')
            @include('livewire.heroslider.design-' . $selectedDesign)

        @elseif($selectedComponent === 'aparatur')
            @include('livewire.aparatur.aparatur-options' . $selectedDesign)

        @elseif($selectedComponent === 'aparatur-halaman')
            @include('livewire.aparatur.aparatur-Halaman.aparatur-design' . $selectedDesign)

        @elseif($selectedComponent === 'produk')
            @include('livewire.produk.produk-options' . $selectedDesign, [
                'produk'   => $previewProduk,
                'tabs'     => $previewTabs,
                'aktifTab' => $previewTab,
            ])
        @endif
    </div>

    @elseif(!$selectedComponent)
    <div class="flex items-center justify-center h-64 bg-gray-50 rounded-xl border-2 border-dashed border-gray-300 text-gray-400">
        <p class="text-lg">← Pilih komponen terlebih dahulu</p>
    </div>
    @elseif(!$selectedDesign)
    <div class="flex items-center justify-center h-64 bg-gray-50 rounded-xl border-2 border-dashed border-gray-300 text-gray-400">
        <p class="text-lg">← Pilih design untuk melihat preview</p>
    </div>
    @endif

</div>

 @script
<script>
    /* ================================================================
       HERO SLIDER D1
    ================================================================ */
    function initD1Swiper() {
        const el = document.getElementById('d1Swiper');
        if (!el) return;

        // Guard: wrapper harus sudah punya children sebelum Swiper init
        const wrapper = el.querySelector('.swiper-wrapper');
        if (!wrapper || wrapper.children.length === 0) return;

        // Destroy instance lama
        if (el.swiper) {
            el.swiper.destroy(true, true);
        }

        if (typeof Swiper === 'undefined') {
            console.warn('[D1] Swiper belum dimuat. Pasang CDN di layout tanpa defer.');
            return;
        }

        const bar   = document.getElementById('d1Bar');
        const cur   = document.getElementById('d1Cur');
        const DELAY = 5000;

        // Ambil elemen nav & pagination via DOM reference
        // Lebih reliable daripada string selector saat loop mode aktif
        const btnNext = el.querySelector('.d1-next');
        const btnPrev = el.querySelector('.d1-prev');
        const pagEl   = el.querySelector('.swiper-pagination');

        function setHeight() {
            el.style.height = window.innerWidth < 640 ? '460px' : '600px';
        }
        setHeight();
        window.addEventListener('resize', setHeight);

        function styleBullets() {
            el.querySelectorAll('.swiper-pagination-bullet').forEach(b => {
                b.style.width        = '8px';
                b.style.height       = '8px';
                b.style.borderRadius = '0';
                b.style.opacity      = '1';
                b.style.margin       = '0';
                b.style.transition   = 'width 0.4s, background 0.4s';
                b.style.background   = 'rgba(255,255,255,0.4)';
            });
            const active = el.querySelector('.swiper-pagination-bullet-active');
            if (active) {
                active.style.width      = '28px';
                active.style.background = '#D4A843';
            }
        }

        function stylePagination() {
            if (!pagEl) return;
            pagEl.style.bottom         = '28px';
            pagEl.style.display        = 'flex';
            pagEl.style.justifyContent = 'center';
            pagEl.style.gap            = '8px';
            pagEl.style.width          = '100%';
        }

        function updateBgZoom(swiper) {
            swiper.slides.forEach((slide, i) => {
                const bg = slide.querySelector('.d1-slide-bg');
                if (!bg) return;
                bg.style.transform = i === swiper.activeIndex ? 'scale(1)' : 'scale(1.06)';
            });
        }

        function animateSlide(swiper) {
            const activeSlide = swiper.slides[swiper.activeIndex];
            if (!activeSlide) return;
            activeSlide.querySelectorAll('.d1-content-inner > *').forEach((item, i) => {
                item.style.transition     = 'none';
                item.style.opacity        = '0';
                item.style.transform      = 'translateY(22px)';
                setTimeout(() => {
                    item.style.transition      = 'opacity 0.65s ease, transform 0.65s ease';
                    item.style.transitionDelay = `${0.1 + i * 0.18}s`;
                    item.style.opacity         = '1';
                    item.style.transform       = 'translateY(0)';
                }, 30);
            });
        }

        function resetBar() {
            if (!bar) return;
            bar.style.transition = 'none';
            bar.style.width      = '0%';
            bar.offsetHeight;
            bar.style.transition = `width ${DELAY}ms linear`;
            bar.style.width      = '100%';
        }

        // Init Swiper dengan element reference, bukan string selector
        const sw = new Swiper(el, {
            loop:     true,
            speed:    900,
            autoplay: { delay: DELAY, disableOnInteraction: false },
            pagination: {
                el:        pagEl,
                clickable: true,
            },
            navigation: {
                nextEl: btnNext,
                prevEl: btnPrev,
            },
            on: {
                afterInit(sw) {
                    stylePagination();
                    styleBullets();
                    updateBgZoom(sw);
                    animateSlide(sw);
                    resetBar();
                },
                slideChange(sw) {
                    if (cur) cur.textContent = String(sw.realIndex + 1).padStart(2, '0');
                    updateBgZoom(sw);
                },
                paginationUpdate() { styleBullets(); },
                slideChangeTransitionEnd(sw) {
                    animateSlide(sw);
                    resetBar();
                },
            },
        });

        // Fallback click listener — jika Swiper navigation internal tidak terhubung
        // ini yang memastikan tombol PASTI bisa diklik
        if (btnNext) btnNext.addEventListener('click', () => sw.slideNext());
        if (btnPrev) btnPrev.addEventListener('click', () => sw.slidePrev());
    }

    /* ================================================================
       HERO SLIDER D2 — Brutalist Split Screen
    ================================================================ */
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

    /* ================================================================
       HERO SLIDER D3 — Organic Nature
    ================================================================ */
    function initD3Swiper() {
        const el = document.getElementById('d3Swiper');
        if (!el) return;

        const wrapper = el.querySelector('.swiper-wrapper');
        if (!wrapper || wrapper.children.length === 0) return;

        if (el.swiper) el.swiper.destroy(true, true);
        if (typeof Swiper === 'undefined') return;

        // Responsive height via JS
        function setHeight() {
            el.style.height = window.innerWidth < 640 ? '560px' : '100vh';
            el.style.minHeight = '600px';
            // Parent juga perlu height
            const hero = el.closest('.d3-hero');
            if (hero) { hero.style.height = el.style.height; hero.style.minHeight = '600px'; }
        }
        setHeight();
        window.addEventListener('resize', setHeight);

        // Spawn leaf particles via JS (ganti @keyframes d3Float CSS)
        function spawnLeaves(containerId) {
            const container = document.getElementById(containerId);
            if (!container || container.children.length > 0) return; // jangan dobel
            for (let i = 0; i < 14; i++) {
                const leaf = document.createElement('div');
                const size = 5 + Math.random() * 8;
                leaf.style.cssText = `
                    position:absolute;
                    width:${size}px; height:${size}px;
                    left:${Math.random() * 100}%;
                    background:rgba(255,255,255,0.15);
                    border-radius:60% 40% 70% 30% / 50% 60% 40% 50%;
                    opacity:0;
                    animation:d3Float ${8 + Math.random() * 12}s ${Math.random() * 10}s linear infinite;
                `;
                container.appendChild(leaf);
            }
        }
        // Inject keyframes sekali saja
        if (!document.getElementById('d3FloatKf')) {
            const style = document.createElement('style');
            style.id = 'd3FloatKf';
            style.textContent = `
                @keyframes d3Float {
                    0%   { transform:translateY(110vh) rotate(0deg);   opacity:0; }
                    10%  { opacity:0.6; }
                    90%  { opacity:0.3; }
                    100% { transform:translateY(-10vh) rotate(720deg); opacity:0; }
                }
            `;
            document.head.appendChild(style);
        }
        ['d3p1','d3p2','d3p3'].forEach(spawnLeaves);

        // BG zoom
        function updateBgZoom(swiper) {
            swiper.slides.forEach((slide, i) => {
                const bg = slide.querySelector('.d3-bg');
                if (!bg) return;
                bg.style.transform = i === swiper.activeIndex ? 'scale(1)' : 'scale(1.05)';
            });
        }

        // Animasi teks — eyebrow turun dari atas, title naik dari bawah, dll
        function animateSlide(swiper) {
            // Reset semua slide non-aktif dulu
            swiper.slides.forEach((slide, si) => {
                if (si === swiper.activeIndex) return;
                slide.querySelector('.d3-anim-eyebrow')?.setAttribute('style',
                    slide.querySelector('.d3-anim-eyebrow').getAttribute('style')
                    .replace(/opacity:[^;]+/, 'opacity:0')
                    .replace(/transform:[^;]+/, 'transform:translateY(-16px)')
                );
                ['d3-anim-title','d3-anim-sub','d3-anim-btn','d3-anim-card'].forEach(cls => {
                    const el = slide.querySelector('.' + cls);
                    if (!el) return;
                    el.style.transition = 'none';
                    el.style.opacity    = '0';
                });
            });

            const slide = swiper.slides[swiper.activeIndex];
            if (!slide) return;

            const eyebrow = slide.querySelector('.d3-anim-eyebrow');
            const title   = slide.querySelector('.d3-anim-title');
            const sub     = slide.querySelector('.d3-anim-sub');
            const btn     = slide.querySelector('.d3-anim-btn');
            const card    = slide.querySelector('.d3-anim-card');

            // Force reset tanpa transisi
            [eyebrow, title, sub, btn, card].forEach(el => {
                if (!el) return;
                el.style.transition = 'none';
                el.style.opacity    = '0';
            });
            if (eyebrow) eyebrow.style.transform = 'translateY(-16px)';
            if (title)   title.style.transform   = 'translateY(24px)';
            if (sub)     sub.style.transform     = 'translateY(16px)';
            if (btn)     btn.style.transform     = 'translateY(14px)';
            if (card)    card.style.transform    = 'translateX(20px)';

            // Reflow
            slide.offsetHeight;

            // Animasikan dengan delay bertingkat
            const items = [
                { el: eyebrow, delay: 0.1,  end: 'translateY(0)' },
                { el: title,   delay: 0.3,  end: 'translateY(0)' },
                { el: sub,     delay: 0.5,  end: 'translateY(0)' },
                { el: btn,     delay: 0.65, end: 'translateY(0)' },
                { el: card,    delay: 0.9,  end: 'translateX(0)' },
            ];
            items.forEach(({ el, delay, end }) => {
                if (!el) return;
                el.style.transition      = `opacity 0.7s ease ${delay}s, transform 0.7s ease ${delay}s`;
                el.style.opacity         = '1';
                el.style.transform       = end;
            });
        }

        // Thumbnail styling via JS
        const thumbs = el.querySelectorAll('#d3Thumbs .d3-thumb');
        function setThumb(idx) {
            thumbs.forEach((t, i) => {
                if (i === idx) {
                    t.style.borderColor = '#FFD48A';
                    t.style.opacity     = '1';
                } else {
                    t.style.borderColor = 'transparent';
                    t.style.opacity     = '0.5';
                }
            });
        }

        // Progress ring via JS (ganti .d3-ring-circle CSS transition)
        const ringCircle  = document.getElementById('d3RingCircle');
        const circumference = 100.53;
        const delay = 5500;
        let rafId = null, startTime = null;

        function animateRing(ts) {
            if (!startTime) startTime = ts;
            const progress = Math.min((ts - startTime) / delay, 1);
            if (ringCircle) ringCircle.style.strokeDashoffset = circumference * (1 - progress);
            if (progress < 1) rafId = requestAnimationFrame(animateRing);
        }
        function resetRing() {
            cancelAnimationFrame(rafId);
            if (ringCircle) ringCircle.style.strokeDashoffset = circumference;
            startTime = null;
            rafId = requestAnimationFrame(animateRing);
        }

        // Hover style arrow buttons via JS
        ['.d3-arr-prev', '.d3-arr-next'].forEach(sel => {
            const btn = el.querySelector(sel);
            if (!btn) return;
            btn.addEventListener('mouseenter', () => {
                btn.style.background    = 'rgba(255,212,138,0.3)';
                btn.style.borderColor   = '#FFD48A';
            });
            btn.addEventListener('mouseleave', () => {
                btn.style.background    = 'rgba(255,255,255,0.1)';
                btn.style.borderColor   = 'rgba(255,255,255,0.25)';
            });
        });

        // Ref elemen nav
        const btnNext = el.querySelector('.d3-arr-next');
        const btnPrev = el.querySelector('.d3-arr-prev');

        const sw = new Swiper(el, {
            loop:  false,
            speed: 1000,
            effect: 'creative',
            creativeEffect: {
                prev: { shadow: true, translate: [0, 0, -400] },
                next: { translate: ['100%', 0, 0] },
            },
            autoplay: { delay: delay, disableOnInteraction: false },
            navigation: { nextEl: btnNext, prevEl: btnPrev },
            on: {
                afterInit(sw)                { updateBgZoom(sw); animateSlide(sw); resetRing(); setThumb(0); },
                slideChange(sw)              { setThumb(sw.activeIndex); updateBgZoom(sw); resetRing(); },
                slideChangeTransitionEnd(sw) { animateSlide(sw); },
            },
        });

        // Fallback click listener
        if (btnNext) btnNext.addEventListener('click', () => sw.slideNext());
        if (btnPrev) btnPrev.addEventListener('click', () => sw.slidePrev());

        // Thumbnail click
        thumbs.forEach(t => t.addEventListener('click', () => sw.slideTo(+t.dataset.idx)));
    }

    /* ================================================================
       APARATUR SPOT 2
    ================================================================ */
    function initSpot2() {
        const track2 = document.getElementById('spotTrack2');
        const outer2 = document.getElementById('spotOuter2');
        if (!track2) return;

        const cards2 = [...track2.querySelectorAll('.si2')];
        const dots2  = [...document.querySelectorAll('#spotDots2 .sd2')];
        const numEl2 = document.getElementById('spotNum2');
        const N2 = cards2.length;
        if (!N2) return;

        let cur2 = 0, timer2;

        function go2(idx) {
            cur2 = ((idx % N2) + N2) % N2;
            cards2.forEach((c, i) => {
                const diff = Math.min(Math.abs(i - cur2), N2 - Math.abs(i - cur2));
                const img  = c.querySelector('.si-img2');
                const bar  = c.querySelector('.si-bar2');
                const name = c.querySelector('.si-name2');
                const jab  = c.querySelector('.si-jab2');
                if (diff === 0) {
                    c.style.filter    = 'brightness(1) saturate(1)';
                    c.style.opacity   = '1';
                    c.style.transform = 'scale(1)';
                    c.style.width     = '256px';
                    c.style.boxShadow = '0 0 0 2px rgba(13,43,94,0.4), 0 25px 60px rgba(13,43,94,0.2)';
                    if (img)  img.style.height = '255px';
                    if (bar)  bar.style.borderTopColor = 'rgba(29,78,216,0.4)';
                    if (name) { name.style.opacity = '1'; name.style.transform = 'translateY(0)'; }
                    if (jab)  jab.style.opacity = '1';
                } else {
                    const f = diff === 1 ? 'brightness(0.65) saturate(0.5)' : 'brightness(0.45) saturate(0.2)';
                    const o = diff === 1 ? '0.8' : '0.5';
                    const s = diff === 1 ? 'scale(0.96)' : 'scale(0.9)';
                    c.style.filter    = f;
                    c.style.opacity   = o;
                    c.style.transform = s;
                    c.style.width     = '192px';
                    c.style.boxShadow = 'none';
                    if (img)  img.style.height = '208px';
                    if (bar)  bar.style.borderTopColor = 'transparent';
                    if (name) { name.style.opacity = '0'; name.style.transform = 'translateY(-4px)'; }
                    if (jab)  jab.style.opacity = '0';
                }
            });
            const ac = cards2[cur2];
            if (ac) {
                track2.style.transform = `translateX(${-(ac.offsetLeft - outer2.offsetWidth / 2 + ac.offsetWidth / 2)}px)`;
            }
            dots2.forEach((d, i) => {
                if (i === cur2) { d.style.width = '1.25rem'; d.style.borderRadius = '.25rem'; d.style.background = '#0D2B5E'; d.style.opacity = '1'; }
                else            { d.style.width = '6px'; d.style.borderRadius = '9999px'; d.style.background = '#1D4ED8'; d.style.opacity = '0.3'; }
            });
            if (numEl2) numEl2.textContent = String(cur2 + 1).padStart(2, '0');
        }

        function start2() { clearInterval(timer2); timer2 = setInterval(() => go2(cur2 + 1), 3200); }

        document.getElementById('spotNext2')?.addEventListener('click', () => { go2(cur2 + 1); start2(); });
        document.getElementById('spotPrev2')?.addEventListener('click', () => { go2(cur2 - 1); start2(); });
        dots2.forEach((d, i) => d.addEventListener('click', () => { go2(i); start2(); }));
        cards2.forEach((c, i) => c.addEventListener('click', () => { go2(i); start2(); }));

        const wrap2 = document.getElementById('spotWrap2');
        if (wrap2) {
            wrap2.addEventListener('mouseenter', () => clearInterval(timer2));
            wrap2.addEventListener('mouseleave', start2);
            let tx2 = 0;
            wrap2.addEventListener('touchstart', e => { tx2 = e.touches[0].clientX; }, { passive: true });
            wrap2.addEventListener('touchend', e => {
                const dx = e.changedTouches[0].clientX - tx2;
                if (Math.abs(dx) > 40) { go2(dx < 0 ? cur2 + 1 : cur2 - 1); start2(); }
            }, { passive: true });
        }
        go2(0); start2();
    }

    /* ================================================================
       LIVEWIRE HOOKS
       Gunakan Livewire.hook('commit') — fired SETELAH setiap request
       Livewire selesai dan DOM sudah di-patch sempurna.
       Ini lebih reliable dari $wire.on('render') di Livewire 3.
    ================================================================ */
    function initAll() {
        // Destroy semua swiper aktif dulu
        document.querySelectorAll('.swiper').forEach(el => {
            if (el.swiper) el.swiper.destroy(true, true);
        });

        // Cek elemen mana yang ada di DOM, baru init
        if (document.getElementById('d1Swiper')) initD1Swiper();
        if (document.getElementById('d2Swiper')) initD2Swiper();
        if (document.getElementById('d3Swiper')) initD3Swiper();
        if (document.getElementById('spotTrack2')) initSpot2();
    }

    // Hook paling reliable di Livewire 3: difire setelah commit selesai
    Livewire.hook('commit', ({ component, commit, respond, succeed, fail }) => {
        succeed(({ snapshot, effect }) => {
            // nextTick: tunggu DOM selesai di-patch
            setTimeout(initAll, 200);
        });
    });

    // Fallback: navigasi antar halaman
    document.addEventListener('livewire:navigated', () => setTimeout(initAll, 200));
    document.addEventListener('livewire:navigated', () => initSpot2());
    $wire.on('render', () => setTimeout(initSpot2, 100));
    Livewire.hook('morph.updated', () => setTimeout(initSpot2, 100));
    setTimeout(initSpot2, 300);
</script>
@endscript
