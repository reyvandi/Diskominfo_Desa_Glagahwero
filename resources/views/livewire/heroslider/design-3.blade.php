{{-- ============================================================
     HERO SLIDER — DESIGN 3 (PURE TAILWIND, ZERO <style>)
     Tema     : Organic Nature / Soft Editorial
     - Tidak ada <style> block sama sekali
     - Animasi teks: opacity:0 default di HTML, JS yang animasikan
     - wire:ignore mencegah Livewire morph
     - CDN Swiper di layout utama, script init di @script previewer
     ============================================================ --}}

<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400;1,600&family=Outfit:wght@300;400;500&display=swap" rel="stylesheet">

<div class="d3-hero relative w-full overflow-hidden" style="font-family:'Outfit',sans-serif; height:100vh; min-height:600px" wire:ignore>
    <div class="swiper d3-swiper w-full h-full" id="d3Swiper">
        <div class="swiper-wrapper w-full h-full">

            {{-- ══ SLIDE 1 ══ --}}
            <div class="swiper-slide relative overflow-hidden w-full h-full">
                {{-- BG --}}
                <div class="d3-bg absolute inset-0 bg-cover bg-center"
                     style="background-image:url('{{ asset('images/hero-1.jpg') }}');
                            transform:scale(1.05); transition:transform 7s ease;
                            filter:brightness(0.72) saturate(1.1)"></div>
                {{-- Warm overlay --}}
                <div class="absolute inset-0 z-[1]"
                     style="background:radial-gradient(ellipse at 50% 30%,rgba(255,210,140,0.18) 0%,rgba(20,50,30,0.55) 100%)"></div>
                {{-- Particles container --}}
                <div class="d3-particles absolute inset-0 z-[2] pointer-events-none overflow-hidden" id="d3p1"></div>
                {{-- Content — semua elemen default opacity:0, JS yang animasikan --}}
                <div class="absolute inset-0 z-[4] flex flex-col items-center justify-center text-center" style="padding:0 5%">
                    <div class="d3-anim-eyebrow inline-flex items-center gap-3 text-[rgba(255,220,160,0.9)] uppercase tracking-[0.3em] font-normal"
                         style="font-size:0.7rem; opacity:0; transform:translateY(-16px)">
                        <span class="inline-block w-10 h-px bg-[rgba(255,220,160,0.5)]"></span>
                        Desa Wisata
                        <span class="inline-block w-10 h-px bg-[rgba(255,220,160,0.5)]"></span>
                    </div>
                    <h1 class="d3-anim-title text-white leading-none mt-3"
                        style="font-family:'Cormorant Garamond',serif; font-size:clamp(3.5rem,9vw,9rem); font-weight:600; opacity:0; transform:translateY(24px)">
                        Glagah<em class="italic text-[#FFD48A]">wero</em>
                    </h1>
                    <p class="d3-anim-sub text-white/60 font-light tracking-wide mt-3 max-w-lg"
                       style="font-size:1rem; opacity:0; transform:translateY(16px)">
                        Keindahan alam dan kekayaan budaya menyatu dalam satu harmoni yang tak terlupakan.
                    </p>
                    <div class="d3-anim-btn mt-9 flex gap-4" style="opacity:0; transform:translateY(14px)">
                        <a href="#" class="px-8 py-3.5 rounded-full text-[#2A1A00] font-medium tracking-[0.1em] uppercase text-xs transition-all duration-300 hover:-translate-y-1"
                           style="background:#FFD48A; font-size:0.8rem; box-shadow:0 8px 30px rgba(255,200,80,0.35)">Jelajahi Desa</a>
                        <a href="#" class="px-8 py-3.5 rounded-full text-white/80 tracking-[0.1em] uppercase text-xs border border-white/40 transition-all duration-300 hover:border-white/80 hover:-translate-y-1"
                           style="font-size:0.8rem">Tentang Kami</a>
                    </div>
                </div>
                {{-- Floating card --}}
                <div class="d3-anim-card absolute z-[5] flex items-center gap-3 text-white rounded-2xl"
                     style="bottom:140px; right:5%; max-width:240px; padding:18px 24px;
                            background:rgba(255,255,255,0.12); backdrop-filter:blur(16px);
                            border:1px solid rgba(255,255,255,0.2);
                            opacity:0; transform:translateX(20px)">
                    <div class="flex-shrink-0 flex items-center justify-center rounded-xl text-xl"
                         style="width:44px; height:44px; background:rgba(255,212,138,0.2)">🌿</div>
                    <div>
                        <div class="uppercase tracking-[0.15em] text-white/50" style="font-size:0.65rem">Kabupaten</div>
                        <div class="font-medium mt-0.5 text-base">Jember, Jawa Timur</div>
                    </div>
                </div>
                {{-- Wave --}}
                <div class="absolute bottom-[-2px] left-0 right-0 z-[3] leading-none">
                    <svg viewBox="0 0 1440 90" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" style="display:block; width:100%">
                        <path d="M0,40 C240,90 480,0 720,40 C960,80 1200,10 1440,40 L1440,90 L0,90 Z" fill="#F4F8FD"/>
                    </svg>
                </div>
            </div>

            {{-- ══ SLIDE 2 ══ --}}
            <div class="swiper-slide relative overflow-hidden w-full h-full">
                <div class="d3-bg absolute inset-0 bg-cover bg-center"
                     style="background-image:url('{{ asset('images/hero-2.jpg') }}');
                            transform:scale(1.05); transition:transform 7s ease;
                            filter:brightness(0.72) saturate(1.1)"></div>
                <div class="absolute inset-0 z-[1]"
                     style="background:radial-gradient(ellipse at 50% 30%,rgba(255,210,140,0.18) 0%,rgba(20,50,30,0.55) 100%)"></div>
                <div class="d3-particles absolute inset-0 z-[2] pointer-events-none overflow-hidden" id="d3p2"></div>
                <div class="absolute inset-0 z-[4] flex flex-col items-center justify-center text-center" style="padding:0 5%">
                    <div class="d3-anim-eyebrow inline-flex items-center gap-3 text-[rgba(255,220,160,0.9)] uppercase tracking-[0.3em] font-normal"
                         style="font-size:0.7rem; opacity:0; transform:translateY(-16px)">
                        <span class="inline-block w-10 h-px bg-[rgba(255,220,160,0.5)]"></span>
                        Produk Lokal
                        <span class="inline-block w-10 h-px bg-[rgba(255,220,160,0.5)]"></span>
                    </div>
                    <h1 class="d3-anim-title text-white leading-none mt-3"
                        style="font-family:'Cormorant Garamond',serif; font-size:clamp(3.5rem,9vw,9rem); font-weight:600; opacity:0; transform:translateY(24px)">
                        <em class="italic text-[#FFD48A]">Potensi</em> Desa
                    </h1>
                    <p class="d3-anim-sub text-white/60 font-light tracking-wide mt-3 max-w-lg"
                       style="font-size:1rem; opacity:0; transform:translateY(16px)">
                        Produk-produk unggulan hasil tangan terampil warga desa yang siap bersaing di pasar global.
                    </p>
                    <div class="d3-anim-btn mt-9 flex gap-4" style="opacity:0; transform:translateY(14px)">
                        <a href="#" class="px-8 py-3.5 rounded-full text-[#2A1A00] font-medium tracking-[0.1em] uppercase text-xs transition-all duration-300 hover:-translate-y-1"
                           style="background:#FFD48A; font-size:0.8rem; box-shadow:0 8px 30px rgba(255,200,80,0.35)">Lihat Produk</a>
                        <a href="#" class="px-8 py-3.5 rounded-full text-white/80 tracking-[0.1em] uppercase text-xs border border-white/40 transition-all duration-300 hover:border-white/80 hover:-translate-y-1"
                           style="font-size:0.8rem">UMKM Lokal</a>
                    </div>
                </div>
                <div class="d3-anim-card absolute z-[5] flex items-center gap-3 text-white rounded-2xl"
                     style="bottom:140px; right:5%; max-width:240px; padding:18px 24px;
                            background:rgba(255,255,255,0.12); backdrop-filter:blur(16px);
                            border:1px solid rgba(255,255,255,0.2);
                            opacity:0; transform:translateX(20px)">
                    <div class="flex-shrink-0 flex items-center justify-center rounded-xl text-xl"
                         style="width:44px; height:44px; background:rgba(255,212,138,0.2)">🛖</div>
                    <div>
                        <div class="uppercase tracking-[0.15em] text-white/50" style="font-size:0.65rem">UMKM Aktif</div>
                        <div class="font-medium mt-0.5 text-base">24 Pelaku Usaha</div>
                    </div>
                </div>
                <div class="absolute bottom-[-2px] left-0 right-0 z-[3] leading-none">
                    <svg viewBox="0 0 1440 90" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" style="display:block; width:100%">
                        <path d="M0,40 C240,90 480,0 720,40 C960,80 1200,10 1440,40 L1440,90 L0,90 Z" fill="#F4F8FD"/>
                    </svg>
                </div>
            </div>

            {{-- ══ SLIDE 3 ══ --}}
            <div class="swiper-slide relative overflow-hidden w-full h-full">
                <div class="d3-bg absolute inset-0 bg-cover bg-center"
                     style="background-image:url('{{ asset('images/hero-3.jpg') }}');
                            transform:scale(1.05); transition:transform 7s ease;
                            filter:brightness(0.72) saturate(1.1)"></div>
                <div class="absolute inset-0 z-[1]"
                     style="background:radial-gradient(ellipse at 50% 30%,rgba(255,210,140,0.18) 0%,rgba(20,50,30,0.55) 100%)"></div>
                <div class="d3-particles absolute inset-0 z-[2] pointer-events-none overflow-hidden" id="d3p3"></div>
                <div class="absolute inset-0 z-[4] flex flex-col items-center justify-center text-center" style="padding:0 5%">
                    <div class="d3-anim-eyebrow inline-flex items-center gap-3 text-[rgba(255,220,160,0.9)] uppercase tracking-[0.3em] font-normal"
                         style="font-size:0.7rem; opacity:0; transform:translateY(-16px)">
                        <span class="inline-block w-10 h-px bg-[rgba(255,220,160,0.5)]"></span>
                        Pemerintahan
                        <span class="inline-block w-10 h-px bg-[rgba(255,220,160,0.5)]"></span>
                    </div>
                    <h1 class="d3-anim-title text-white leading-none mt-3"
                        style="font-family:'Cormorant Garamond',serif; font-size:clamp(3.5rem,9vw,9rem); font-weight:600; opacity:0; transform:translateY(24px)">
                        Bersama <em class="italic text-[#FFD48A]">Maju</em>
                    </h1>
                    <p class="d3-anim-sub text-white/60 font-light tracking-wide mt-3 max-w-lg"
                       style="font-size:1rem; opacity:0; transform:translateY(16px)">
                        Aparat desa yang amanah, transparan, dan berdedikasi untuk kesejahteraan seluruh masyarakat.
                    </p>
                    <div class="d3-anim-btn mt-9 flex gap-4" style="opacity:0; transform:translateY(14px)">
                        <a href="#" class="px-8 py-3.5 rounded-full text-[#2A1A00] font-medium tracking-[0.1em] uppercase text-xs transition-all duration-300 hover:-translate-y-1"
                           style="background:#FFD48A; font-size:0.8rem; box-shadow:0 8px 30px rgba(255,200,80,0.35)">Profil Desa</a>
                        <a href="#" class="px-8 py-3.5 rounded-full text-white/80 tracking-[0.1em] uppercase text-xs border border-white/40 transition-all duration-300 hover:border-white/80 hover:-translate-y-1"
                           style="font-size:0.8rem">Layanan</a>
                    </div>
                </div>
                <div class="d3-anim-card absolute z-[5] flex items-center gap-3 text-white rounded-2xl"
                     style="bottom:140px; right:5%; max-width:240px; padding:18px 24px;
                            background:rgba(255,255,255,0.12); backdrop-filter:blur(16px);
                            border:1px solid rgba(255,255,255,0.2);
                            opacity:0; transform:translateX(20px)">
                    <div class="flex-shrink-0 flex items-center justify-center rounded-xl text-xl"
                         style="width:44px; height:44px; background:rgba(255,212,138,0.2)">🏛️</div>
                    <div>
                        <div class="uppercase tracking-[0.15em] text-white/50" style="font-size:0.65rem">Berdiri Sejak</div>
                        <div class="font-medium mt-0.5 text-base">Tahun 1945</div>
                    </div>
                </div>
                <div class="absolute bottom-[-2px] left-0 right-0 z-[3] leading-none">
                    <svg viewBox="0 0 1440 90" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" style="display:block; width:100%">
                        <path d="M0,40 C240,90 480,0 720,40 C960,80 1200,10 1440,40 L1440,90 L0,90 Z" fill="#F4F8FD"/>
                    </svg>
                </div>
            </div>

        </div>

        {{-- Arrows --}}
        <button class="d3-arr-prev absolute top-1/2 left-7 z-10 flex items-center justify-center rounded-full text-white transition-all duration-300"
                style="transform:translateY(-50%); width:50px; height:50px;
                       background:rgba(255,255,255,0.1); backdrop-filter:blur(8px);
                       border:1px solid rgba(255,255,255,0.25)">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
        </button>
        <button class="d3-arr-next absolute top-1/2 right-7 z-10 flex items-center justify-center rounded-full text-white transition-all duration-300"
                style="transform:translateY(-50%); width:50px; height:50px;
                       background:rgba(255,255,255,0.1); backdrop-filter:blur(8px);
                       border:1px solid rgba(255,255,255,0.25)">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </button>

        {{-- Thumbnail strip --}}
        <div class="absolute z-10 flex gap-2.5" id="d3Thumbs"
             style="bottom:72px; left:50%; transform:translateX(-50%)">
            <div class="d3-thumb rounded-lg cursor-pointer overflow-hidden bg-cover bg-center"
                 data-idx="0"
                 style="width:56px; height:38px; border:2px solid #FFD48A; opacity:1;
                        background-image:url('{{ asset('images/hero-1.jpg') }}');
                        transition:opacity 0.3s,border-color 0.3s,transform 0.3s"></div>
            <div class="d3-thumb rounded-lg cursor-pointer overflow-hidden bg-cover bg-center"
                 data-idx="1"
                 style="width:56px; height:38px; border:2px solid transparent; opacity:0.5;
                        background-image:url('{{ asset('images/hero-2.jpg') }}');
                        transition:opacity 0.3s,border-color 0.3s,transform 0.3s"></div>
            <div class="d3-thumb rounded-lg cursor-pointer overflow-hidden bg-cover bg-center"
                 data-idx="2"
                 style="width:56px; height:38px; border:2px solid transparent; opacity:0.5;
                        background-image:url('{{ asset('images/hero-3.jpg') }}');
                        transition:opacity 0.3s,border-color 0.3s,transform 0.3s"></div>
        </div>

        {{-- Progress ring --}}
        <div class="absolute z-10" id="d3Ring" style="bottom:62px; right:5%">
            <svg width="40" height="40" viewBox="0 0 40 40" style="transform:rotate(-90deg)">
                <circle cx="20" cy="20" r="16" fill="none" stroke="rgba(255,255,255,0.15)" stroke-width="2"/>
                <circle id="d3RingCircle" cx="20" cy="20" r="16" fill="none"
                        stroke="#FFD48A" stroke-width="2.5" stroke-linecap="round"
                        style="stroke-dasharray:100.53; stroke-dashoffset:100.53; transition:stroke-dashoffset 0.1s linear"/>
            </svg>
        </div>

    </div>
</div>

<script>
window.initD3Standalone = function () {
    const el = document.getElementById('d3Swiper');
    if (!el || el.swiper) return;
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
    initD3Swiper();
};

if (typeof Swiper !== 'undefined') {
    window.initD3Standalone();
} else {
    window.addEventListener('load', window.initD3Standalone);
}
</script>
