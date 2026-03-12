{{-- ============================================================
     HERO SLIDER — DESIGN 3 (v2 — ANIMASI PAKAI JS)
     Organic Nature / Soft Editorial · animasi teks 100% via JS
     ============================================================ --}}

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400;1,600&family=Outfit:wght@300;400;500&display=swap" rel="stylesheet">

<style>
    .d3-hero { position: relative; width: 100%; overflow: hidden; font-family: 'Outfit', sans-serif; }
    .d3-swiper { width: 100% !important; height: 600px !important; }
    .d3-swiper .swiper-wrapper { height: 100% !important; }
    .d3-swiper .swiper-slide { height: 100% !important; display: block !important; position: relative !important; overflow: hidden; }

    /* BG zoom */
    .d3-bg { position: absolute; inset: 0; background-size: cover; background-position: center; transform: scale(1.05); transition: transform 7s ease; filter: brightness(0.72) saturate(1.1); }
    .d3-swiper .swiper-slide-active .d3-bg { transform: scale(1); }

    /* Overlay */
    .d3-overlay { position: absolute; inset: 0; z-index: 1; background: radial-gradient(ellipse at 50% 30%, rgba(255,210,140,0.18) 0%, rgba(20,50,30,0.55) 100%); }

    /* Particles */
    .d3-particles { position: absolute; inset: 0; z-index: 2; pointer-events: none; overflow: hidden; }
    .d3-leaf { position: absolute; background: rgba(255,255,255,0.15); border-radius: 60% 40% 70% 30% / 50% 60% 40% 50%; animation: d3Float linear infinite; }
    @keyframes d3Float { 0%{transform:translateY(110vh) rotate(0deg);opacity:0} 10%{opacity:0.6} 90%{opacity:0.3} 100%{transform:translateY(-10vh) rotate(720deg);opacity:0} }

    /* Wave */
    .d3-wave { position: absolute; bottom: -2px; left: 0; right: 0; z-index: 3; line-height: 0; }
    .d3-wave svg { display: block; width: 100%; }

    /* Content center */
    .d3-content { position: absolute; inset: 0; z-index: 4; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; padding: 0 5%; }

    /* Font */
    .font-cormorant { font-family: 'Cormorant Garamond', serif; }

    /* Info card */
    .d3-card {
        position: absolute; bottom: 130px; right: 5%; z-index: 5;
        background: rgba(255,255,255,0.12); backdrop-filter: blur(16px);
        border: 1px solid rgba(255,255,255,0.2); border-radius: 16px;
        padding: 18px 24px; display: flex; align-items: center; gap: 14px;
        color: white; max-width: 240px;
    }
    .d3-card-icon { width: 44px; height: 44px; background: rgba(255,212,138,0.2); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-size: 1.3rem; }
    .d3-card-label { font-size: 0.65rem; color: rgba(255,255,255,0.5); letter-spacing: 0.15em; text-transform: uppercase; }
    .d3-card-value { font-size: 1rem; font-weight: 500; margin-top: 2px; }

    /* Thumbnails */
    .d3-thumbs { position: absolute; bottom: 60px; left: 50%; transform: translateX(-50%); z-index: 10; display: flex; gap: 10px; }
    .d3-thumb { width: 56px; height: 38px; overflow: hidden; border-radius: 8px; cursor: pointer; border: 2px solid transparent; opacity: 0.5; transition: opacity 0.3s, border-color 0.3s, transform 0.3s; background-size: cover; background-position: center; }
    .d3-thumb:hover { opacity: 0.8; transform: translateY(-3px); }
    .d3-thumb.active { border-color: #FFD48A; opacity: 1; }

    /* Arrow nav */
    .d3-arr { position: absolute; top: 50%; z-index: 10; transform: translateY(-50%); width: 50px; height: 50px; background: rgba(255,255,255,0.1); backdrop-filter: blur(8px); border: 1px solid rgba(255,255,255,0.25); border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer; color: white; transition: background 0.3s, border-color 0.3s; }
    .d3-arr:hover { background: rgba(255,212,138,0.3); border-color: #FFD48A; }
    .d3-arr-prev { left: 28px; }
    .d3-arr-next { right: 28px; }

    /* Progress ring */
    .d3-ring { position: absolute; bottom: 55px; right: 5%; z-index: 10; }
    .d3-ring svg { transform: rotate(-90deg); }

    @media (max-width: 640px) {
        .d3-swiper { height: 500px !important; }
        .d3-card { bottom: 150px; right: 4%; }
        .d3-thumbs { bottom: 80px; gap: 6px; }
        .d3-thumb { width: 42px; height: 28px; }
        .d3-arr-prev { left: 10px; }
        .d3-arr-next { right: 10px; }
        .d3-ring { display: none; }
    }
</style>

<div class="d3-hero">
    <div class="swiper d3-swiper" id="d3Swiper">
        <div class="swiper-wrapper">

            {{-- ══ SLIDE 1 ══ --}}
            <div class="swiper-slide">
                <div class="d3-bg" style="background-image:url('{{ asset('images/hero-1.jpg') }}')"></div>
                <div class="d3-overlay"></div>
                <div class="d3-particles" id="d3p1"></div>
                <div class="d3-content">
                    <div class="d3-inner flex flex-col items-center">
                        <div class="d3-el inline-flex items-center gap-3 text-[rgba(255,220,160,0.9)] text-xs tracking-[0.3em] uppercase font-normal mb-4">
                            <span class="inline-block w-10 h-px bg-[rgba(255,220,160,0.5)]"></span>
                            Desa Wisata
                            <span class="inline-block w-10 h-px bg-[rgba(255,220,160,0.5)]"></span>
                        </div>
                        <h1 class="d3-el font-cormorant text-7xl sm:text-8xl lg:text-9xl font-semibold text-white leading-none">
                            Glagah<em class="italic text-[#FFD48A]">wero</em>
                        </h1>
                        <p class="d3-el mt-4 text-white/60 text-base font-light tracking-wide max-w-lg">
                            Keindahan alam dan kekayaan budaya menyatu dalam satu harmoni yang tak terlupakan.
                        </p>
                        <div class="d3-el mt-8 flex gap-4">
                            <a href="#" class="bg-[#FFD48A] text-[#2A1A00] font-medium text-xs tracking-[0.1em] uppercase px-8 py-3.5 rounded-full shadow-lg hover:-translate-y-1 transition-transform">Jelajahi Desa</a>
                            <a href="#" class="border border-white/40 text-white/80 text-xs tracking-[0.1em] uppercase px-7 py-3.5 rounded-full hover:border-white/80 transition-colors">Tentang Kami</a>
                        </div>
                    </div>
                </div>
                <div class="d3-card">
                    <div class="d3-card-icon">🌿</div>
                    <div><div class="d3-card-label">Kabupaten</div><div class="d3-card-value">Jember, Jawa Timur</div></div>
                </div>
                <div class="d3-wave">
                    <svg viewBox="0 0 1440 90" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                        <path d="M0,40 C240,90 480,0 720,40 C960,80 1200,10 1440,40 L1440,90 L0,90 Z" fill="#F4F8FD"/>
                    </svg>
                </div>
            </div>

            {{-- ══ SLIDE 2 ══ --}}
            <div class="swiper-slide">
                <div class="d3-bg" style="background-image:url('{{ asset('images/hero-2.jpg') }}')"></div>
                <div class="d3-overlay"></div>
                <div class="d3-particles" id="d3p2"></div>
                <div class="d3-content">
                    <div class="d3-inner flex flex-col items-center">
                        <div class="d3-el inline-flex items-center gap-3 text-[rgba(255,220,160,0.9)] text-xs tracking-[0.3em] uppercase font-normal mb-4">
                            <span class="inline-block w-10 h-px bg-[rgba(255,220,160,0.5)]"></span>
                            Produk Lokal
                            <span class="inline-block w-10 h-px bg-[rgba(255,220,160,0.5)]"></span>
                        </div>
                        <h1 class="d3-el font-cormorant text-7xl sm:text-8xl lg:text-9xl font-semibold text-white leading-none">
                            <em class="italic text-[#FFD48A]">Potensi</em> Desa
                        </h1>
                        <p class="d3-el mt-4 text-white/60 text-base font-light tracking-wide max-w-lg">
                            Produk-produk unggulan hasil tangan terampil warga desa yang siap bersaing di pasar global.
                        </p>
                        <div class="d3-el mt-8 flex gap-4">
                            <a href="#" class="bg-[#FFD48A] text-[#2A1A00] font-medium text-xs tracking-[0.1em] uppercase px-8 py-3.5 rounded-full shadow-lg hover:-translate-y-1 transition-transform">Lihat Produk</a>
                            <a href="#" class="border border-white/40 text-white/80 text-xs tracking-[0.1em] uppercase px-7 py-3.5 rounded-full hover:border-white/80 transition-colors">UMKM Lokal</a>
                        </div>
                    </div>
                </div>
                <div class="d3-card">
                    <div class="d3-card-icon">🛖</div>
                    <div><div class="d3-card-label">UMKM Aktif</div><div class="d3-card-value">24 Pelaku Usaha</div></div>
                </div>
                <div class="d3-wave">
                    <svg viewBox="0 0 1440 90" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                        <path d="M0,40 C240,90 480,0 720,40 C960,80 1200,10 1440,40 L1440,90 L0,90 Z" fill="#F4F8FD"/>
                    </svg>
                </div>
            </div>

            {{-- ══ SLIDE 3 ══ --}}
            <div class="swiper-slide">
                <div class="d3-bg" style="background-image:url('{{ asset('images/hero-3.jpg') }}')"></div>
                <div class="d3-overlay"></div>
                <div class="d3-particles" id="d3p3"></div>
                <div class="d3-content">
                    <div class="d3-inner flex flex-col items-center">
                        <div class="d3-el inline-flex items-center gap-3 text-[rgba(255,220,160,0.9)] text-xs tracking-[0.3em] uppercase font-normal mb-4">
                            <span class="inline-block w-10 h-px bg-[rgba(255,220,160,0.5)]"></span>
                            Pemerintahan
                            <span class="inline-block w-10 h-px bg-[rgba(255,220,160,0.5)]"></span>
                        </div>
                        <h1 class="d3-el font-cormorant text-7xl sm:text-8xl lg:text-9xl font-semibold text-white leading-none">
                            Bersama <em class="italic text-[#FFD48A]">Maju</em>
                        </h1>
                        <p class="d3-el mt-4 text-white/60 text-base font-light tracking-wide max-w-lg">
                            Aparat desa yang amanah, transparan, dan berdedikasi untuk kesejahteraan seluruh masyarakat.
                        </p>
                        <div class="d3-el mt-8 flex gap-4">
                            <a href="#" class="bg-[#FFD48A] text-[#2A1A00] font-medium text-xs tracking-[0.1em] uppercase px-8 py-3.5 rounded-full shadow-lg hover:-translate-y-1 transition-transform">Profil Desa</a>
                            <a href="#" class="border border-white/40 text-white/80 text-xs tracking-[0.1em] uppercase px-7 py-3.5 rounded-full hover:border-white/80 transition-colors">Layanan</a>
                        </div>
                    </div>
                </div>
                <div class="d3-card">
                    <div class="d3-card-icon">🏛️</div>
                    <div><div class="d3-card-label">Berdiri Sejak</div><div class="d3-card-value">Tahun 1945</div></div>
                </div>
                <div class="d3-wave">
                    <svg viewBox="0 0 1440 90" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                        <path d="M0,40 C240,90 480,0 720,40 C960,80 1200,10 1440,40 L1440,90 L0,90 Z" fill="#F4F8FD"/>
                    </svg>
                </div>
            </div>

        </div>

        <button class="d3-arr d3-arr-prev"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg></button>
        <button class="d3-arr d3-arr-next"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></button>

        <div class="d3-thumbs" id="d3Thumbs">
            <div class="d3-thumb active" style="background-image:url('{{ asset('images/hero-1.jpg') }}')" data-idx="0"></div>
            <div class="d3-thumb" style="background-image:url('{{ asset('images/hero-2.jpg') }}')" data-idx="1"></div>
            <div class="d3-thumb" style="background-image:url('{{ asset('images/hero-3.jpg') }}')" data-idx="2"></div>
        </div>

        <div class="d3-ring">
            <svg width="40" height="40" viewBox="0 0 40 40">
                <circle cx="20" cy="20" r="16" fill="none" stroke="rgba(255,255,255,0.15)" stroke-width="2"/>
                <circle id="d3Ring" cx="20" cy="20" r="16" fill="none" stroke="#FFD48A" stroke-width="2.5" stroke-linecap="round" style="stroke-dasharray:100.53;stroke-dashoffset:100.53;"/>
            </svg>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script>
(function () {
    /* Particles */
    function spawnLeaves(id) {
        const el = document.getElementById(id);
        if (!el) return;
        for (let i = 0; i < 14; i++) {
            const l = document.createElement('div');
            l.className = 'd3-leaf';
            const s = 5 + Math.random() * 8;
            l.style.cssText = `left:${Math.random()*100}%;width:${s}px;height:${s}px;animation-duration:${8+Math.random()*12}s;animation-delay:${Math.random()*10}s;`;
            el.appendChild(l);
        }
    }
    ['d3p1','d3p2','d3p3'].forEach(spawnLeaves);

    /* Thumbnails */
    const thumbs = document.querySelectorAll('#d3Thumbs .d3-thumb');
    function setThumb(idx) { thumbs.forEach((t,i) => t.classList.toggle('active', i===idx)); }
    thumbs.forEach(t => t.addEventListener('click', () => sw.slideTo(+t.dataset.idx)));

    /* Progress ring */
    const ring  = document.getElementById('d3Ring');
    const circ  = 2 * Math.PI * 16;
    const DELAY = 5500;
    let raf, t0;
    function animRing(ts) {
        if (!t0) t0 = ts;
        const p = Math.min((ts - t0) / DELAY, 1);
        ring.style.strokeDashoffset = circ * (1 - p);
        if (p < 1) raf = requestAnimationFrame(animRing);
    }
    function resetRing() { cancelAnimationFrame(raf); ring.style.strokeDashoffset = circ; t0 = null; raf = requestAnimationFrame(animRing); }

    /* ── Animasi teks via JS ── */
    function animateSlide(sw) {
        const slide = sw.slides[sw.activeIndex];
        if (!slide) return;

        /* teks */
        slide.querySelectorAll('.d3-el').forEach((el, i) => {
            el.style.transition = 'none';
            el.style.opacity    = '0';
            el.style.transform  = 'translateY(20px)';
            setTimeout(() => {
                el.style.transition      = 'opacity 0.65s ease, transform 0.65s ease';
                el.style.transitionDelay = `${0.08 + i * 0.16}s`;
                el.style.opacity         = '1';
                el.style.transform       = 'translateY(0)';
            }, 30);
        });

        /* info card */
        const card = slide.querySelector('.d3-card');
        if (card) {
            card.style.transition = 'none';
            card.style.opacity    = '0';
            card.style.transform  = 'translateX(20px)';
            setTimeout(() => {
                card.style.transition      = 'opacity 0.7s ease, transform 0.7s ease';
                card.style.transitionDelay = '0.7s';
                card.style.opacity         = '1';
                card.style.transform       = 'translateX(0)';
            }, 30);
        }
    }

    const sw = new Swiper('#d3Swiper', {
        loop: false, speed: 1000,
        effect: 'creative',
        creativeEffect: {
            prev: { shadow: true, translate: [0, 0, -400] },
            next: { translate: ['100%', 0, 0] }
        },
        autoplay: { delay: DELAY, disableOnInteraction: false },
        navigation: { nextEl: '.d3-arr-next', prevEl: '.d3-arr-prev' },
        on: {
            afterInit(sw)               { animateSlide(sw); resetRing(); },
            slideChange(sw)             { setThumb(sw.activeIndex); resetRing(); },
            slideChangeTransitionEnd(sw){ animateSlide(sw); }
        }
    });
})();
</script> 
