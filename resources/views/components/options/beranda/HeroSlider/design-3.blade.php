{{-- ============================================================
     HERO SLIDER — DESIGN 3
     Tema     : Organic Nature / Soft Editorial
     Ciri     : Warna pastel hangat, wave SVG di bawah, teks
                center, kartu info melayang, partikel daun,
                thumbnail strip navigasi, transisi cube 3D
     Library  : Swiper 12 · Tailwind CDN
     ============================================================ --}}

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400;1,600&family=Outfit:wght@300;400;500&display=swap" rel="stylesheet">

<style>
    /* ── Base ── */
    .d3-hero {
        position: relative; width: 100%;
        height: 100vh; min-height: 600px; overflow: hidden;
        font-family: 'Outfit', sans-serif;
    }
    .d3-hero .swiper,
    .d3-hero .swiper-wrapper,
    .d3-hero .swiper-slide { width: 100%; height: 100%; }

    /* ── Slide background ── */
    .d3-hero .swiper-slide { position: relative;{{-- ============================================================
     HERO SLIDER — DESIGN 3
     Tema     : Organic Nature / Soft Editorial
     Ciri     : Warna pastel hangat, wave SVG di bawah, teks
                center, kartu info melayang, partikel daun,
                thumbnail strip navigasi, transisi cube 3D
     Library  : Swiper 12 · Tailwind CDN
     ============================================================ --}}

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400;1,600&family=Outfit:wght@300;400;500&display=swap" rel="stylesheet">

<style>
    /* ── Base ── */
    .d3-hero {
        position: relative; width: 100%;
        height: 100vh; min-height: 600px; overflow: hidden;
        font-family: 'Outfit', sans-serif;
    }
    .d3-hero .swiper,
    .d3-hero .swiper-wrapper,
    .d3-hero .swiper-slide { width: 100%; height: 100%; }

    /* ── Slide background ── */
    .d3-hero .swiper-slide { position: relative; overflow: hidden; }
    .d3-bg {
        position: absolute; inset: 0;
        background-size: cover; background-position: center;
        transform: scale(1.05);
        transition: transform 7s ease;
        filter: brightness(0.72) saturate(1.1);
    }
    .d3-hero .swiper-slide-active .d3-bg { transform: scale(1); }

    /* Warm tint overlay */
    .d3-overlay {
        position: absolute; inset: 0;
        background: radial-gradient(ellipse at 50% 30%, rgba(255,210,140,0.18) 0%, rgba(20,50,30,0.55) 100%);
        z-index: 1;
    }

    /* ── SVG wave bottom ── */
    .d3-wave {
        position: absolute; bottom: -2px; left: 0; right: 0; z-index: 3;
        line-height: 0;
    }
    .d3-wave svg { display: block; width: 100%; }

    /* ── Floating leaf particles ── */
    .d3-particles { position: absolute; inset: 0; z-index: 2; pointer-events: none; overflow: hidden; }
    .d3-leaf {
        position: absolute; width: 8px; height: 8px;
        background: rgba(255,255,255,0.15);
        border-radius: 60% 40% 70% 30% / 50% 60% 40% 50%;
        animation: d3Float linear infinite;
    }
    @keyframes d3Float {
        0%   { transform: translateY(110vh) rotate(0deg); opacity: 0; }
        10%  { opacity: 0.6; }
        90%  { opacity: 0.3; }
        100% { transform: translateY(-10vh) rotate(720deg); opacity: 0; }
    }

    /* ── Center content ── */
    .d3-content {
        position: absolute; inset: 0; z-index: 4;
        display: flex; flex-direction: column;
        align-items: center; justify-content: center;
        text-align: center; padding: 0 5%;
    }
    .d3-eyebrow {
        display: inline-flex; align-items: center; gap: 14px;
        font-size: 0.7rem; letter-spacing: 0.3em;
        text-transform: uppercase; color: rgba(255,220,160,0.9);
        font-weight: 400;
        opacity: 0; transform: translateY(-16px);
        transition: opacity 0.6s 0.1s, transform 0.6s 0.1s;
    }
    .d3-eyebrow .d3-line { width: 40px; height: 1px; background: rgba(255,220,160,0.5); }
    .d3-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: clamp(3.5rem, 9vw, 9rem);
        font-weight: 600; line-height: 1.0; color: #FEFEFE;
        margin-top: 14px;
        opacity: 0; transform: translateY(24px);
        transition: opacity 0.8s 0.3s, transform 0.8s 0.3s;
    }
    .d3-title em { font-style: italic; color: #FFD48A; }
    .d3-subtitle {
        font-size: 1rem; color: rgba(255,255,255,0.6);
        font-weight: 300; letter-spacing: 0.05em;
        margin-top: 12px; max-width: 500px;
        opacity: 0; transform: translateY(16px);
        transition: opacity 0.7s 0.5s, transform 0.7s 0.5s;
    }
    .d3-btn-wrap {
        margin-top: 36px; display: flex; gap: 16px;
        opacity: 0; transform: translateY(14px);
        transition: opacity 0.7s 0.65s, transform 0.7s 0.65s;
    }
    .d3-btn {
        padding: 14px 34px; border-radius: 40px;
        font-size: 0.8rem; letter-spacing: 0.1em;
        text-transform: uppercase; text-decoration: none;
        font-weight: 500; cursor: pointer; border: none;
        transition: transform 0.3s, box-shadow 0.3s;
    }
    .d3-btn:hover { transform: translateY(-3px); }
    .d3-btn-solid {
        background: #FFD48A; color: #2A1A00;
        box-shadow: 0 8px 30px rgba(255,200,80,0.35);
    }
    .d3-btn-solid:hover { box-shadow: 0 12px 40px rgba(255,200,80,0.5); }
    .d3-btn-outline {
        background: transparent;
        border: 1.5px solid rgba(255,255,255,0.4);
        color: rgba(255,255,255,0.8);
    }
    .d3-btn-outline:hover { border-color: rgba(255,255,255,0.8); }

    /* Reveal on active */
    .d3-hero .swiper-slide-active .d3-eyebrow,
    .d3-hero .swiper-slide-active .d3-title,
    .d3-hero .swiper-slide-active .d3-subtitle,
    .d3-hero .swiper-slide-active .d3-btn-wrap {
        opacity: 1; transform: translateY(0);
    }

    /* ── Floating info card ── */
    .d3-card {
        position: absolute; bottom: 140px; right: 5%; z-index: 5;
        background: rgba(255,255,255,0.12); backdrop-filter: blur(16px);
        border: 1px solid rgba(255,255,255,0.2);
        border-radius: 16px; padding: 18px 24px;
        display: flex; align-items: center; gap: 14px;
        color: white; max-width: 240px;
        opacity: 0; transform: translateX(20px);
        transition: opacity 0.7s 0.9s, transform 0.7s 0.9s;
    }
    .d3-hero .swiper-slide-active .d3-card { opacity: 1; transform: translateX(0); }
    .d3-card-icon {
        width: 44px; height: 44px; background: rgba(255,212,138,0.2);
        border-radius: 12px; display: flex; align-items: center;
        justify-content: center; flex-shrink: 0; font-size: 1.3rem;
    }
    .d3-card-label { font-size: 0.65rem; color: rgba(255,255,255,0.5); letter-spacing: 0.15em; text-transform: uppercase; }
    .d3-card-value { font-size: 1rem; font-weight: 500; margin-top: 2px; }

    /* ── Thumbnail strip nav ── */
    .d3-thumbs {
        position: absolute; bottom: 72px; left: 50%;
        transform: translateX(-50%); z-index: 10;
        display: flex; gap: 10px;
    }
    .d3-thumb {
        width: 56px; height: 38px; overflow: hidden;
        border-radius: 8px; cursor: pointer;
        border: 2px solid transparent; opacity: 0.5;
        transition: opacity 0.3s, border-color 0.3s, transform 0.3s;
        background-size: cover; background-position: center;
    }
    .d3-thumb:hover { opacity: 0.8; transform: translateY(-3px); }
    .d3-thumb.active { border-color: #FFD48A; opacity: 1; }

    /* ── Arrow nav ── */
    .d3-arr {
        position: absolute; top: 50%; z-index: 10;
        transform: translateY(-50%);
        width: 50px; height: 50px;
        background: rgba(255,255,255,0.1); backdrop-filter: blur(8px);
        border: 1px solid rgba(255,255,255,0.25); border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
        cursor: pointer; color: white;
        transition: background 0.3s, border-color 0.3s;
    }
    .d3-arr:hover { background: rgba(255,212,138,0.3); border-color: #FFD48A; }
    .d3-arr-prev { left: 28px; }
    .d3-arr-next { right: 28px; }

    /* ── Progress ring ── */
    .d3-ring {
        position: absolute; bottom: 62px; right: 5%; z-index: 10;
    }
    .d3-ring svg { transform: rotate(-90deg); }
    .d3-ring-circle {
        stroke-dasharray: 100;
        stroke-dashoffset: 100;
        transition: stroke-dashoffset 0.1s linear;
    }

    @media (max-width: 640px) {
        .d3-card { bottom: 160px; right: 4%; }
        .d3-thumbs { bottom: 90px; gap: 6px; }
        .d3-thumb { width: 42px; height: 28px; }
        .d3-arr-prev { left: 10px; }
        .d3-arr-next { right: 10px; }
        .d3-ring { display: none; }
    }
</style>

<div class="d3-hero">
    <div class="swiper d3Swiper">
        <div class="swiper-wrapper">

            {{-- Slide 1 --}}
            <div class="swiper-slide">
                <div class="d3-bg" style="background-image: url('{{ asset('images/hero-1.jpg') }}')"></div>
                <div class="d3-overlay"></div>
                <div class="d3-particles" id="d3p1"></div>
                <div class="d3-content max-w-7xl mx-auto">
                    <div class="d3-eyebrow"><div class="d3-line"></div>Desa Wisata<div class="d3-line"></div></div>
                    <h1 class="d3-title">Glagah<em>wero</em></h1>
                    <p class="d3-subtitle">Keindahan alam dan kekayaan budaya menyatu dalam satu harmoni yang tak terlupakan.</p>
                    <div class="d3-btn-wrap">
                        <a href="#" class="d3-btn d3-btn-solid">Jelajahi Desa</a>
                        <a href="#" class="d3-btn d3-btn-outline">Tentang Kami</a>
                    </div>
                </div>
                <div class="d3-card">
                    <div class="d3-card-icon">🌿</div>
                    <div>
                        <div class="d3-card-label">Kabupaten</div>
                        <div class="d3-card-value">Jember, Jawa Timur</div>
                    </div>
                </div>
                <div class="d3-wave">
                    <svg viewBox="0 0 1440 90" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                        <path d="M0,40 C240,90 480,0 720,40 C960,80 1200,10 1440,40 L1440,90 L0,90 Z" fill="#F4F8FD"/>
                    </svg>
                </div>
            </div>

            {{-- Slide 2 --}}
            <div class="swiper-slide">
                <div class="d3-bg" style="background-image: url('{{ asset('images/hero-2.jpg') }}')"></div>
                <div class="d3-overlay"></div>
                <div class="d3-particles" id="d3p2"></div>
                <div class="d3-content">
                    <div class="d3-eyebrow"><div class="d3-line"></div>Produk Lokal<div class="d3-line"></div></div>
                    <h1 class="d3-title"><em>Potensi</em> Desa</h1>
                    <p class="d3-subtitle">Produk-produk unggulan hasil tangan terampil warga desa yang siap bersaing di pasar global.</p>
                    <div class="d3-btn-wrap">
                        <a href="#" class="d3-btn d3-btn-solid">Lihat Produk</a>
                        <a href="#" class="d3-btn d3-btn-outline">UMKM Lokal</a>
                    </div>
                </div>
                <div class="d3-card">
                    <div class="d3-card-icon">🛖</div>
                    <div>
                        <div class="d3-card-label">UMKM Aktif</div>
                        <div class="d3-card-value">24 Pelaku Usaha</div>
                    </div>
                </div>
                <div class="d3-wave">
                    <svg viewBox="0 0 1440 90" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                        <path d="M0,40 C240,90 480,0 720,40 C960,80 1200,10 1440,40 L1440,90 L0,90 Z" fill="#F4F8FD"/>
                    </svg>
                </div>
            </div>

            {{-- Slide 3 --}}
            <div class="swiper-slide">
                <div class="d3-bg" style="background-image: url('{{ asset('images/hero-3.jpg') }}')"></div>
                <div class="d3-overlay"></div>
                <div class="d3-particles" id="d3p3"></div>
                <div class="d3-content">
                    <div class="d3-eyebrow"><div class="d3-line"></div>Pemerintahan<div class="d3-line"></div></div>
                    <h1 class="d3-title">Bersama <em>Maju</em></h1>
                    <p class="d3-subtitle">Aparat desa yang amanah, transparan, dan berdedikasi untuk kesejahteraan seluruh masyarakat.</p>
                    <div class="d3-btn-wrap">
                        <a href="#" class="d3-btn d3-btn-solid">Profil Desa</a>
                        <a href="#" class="d3-btn d3-btn-outline">Layanan</a>
                    </div>
                </div>
                <div class="d3-card">
                    <div class="d3-card-icon">🏛️</div>
                    <div>
                        <div class="d3-card-label">Berdiri Sejak</div>
                        <div class="d3-card-value">Tahun 1945</div>
                    </div>
                </div>
                <div class="d3-wave">
                    <svg viewBox="0 0 1440 90" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                        <path d="M0,40 C240,90 480,0 720,40 C960,80 1200,10 1440,40 L1440,90 L0,90 Z" fill="#F4F8FD"/>
                    </svg>
                </div>
            </div>

        </div>

        <!-- Arrows -->
        <button class="d3-arr d3-arr-prev" aria-label="Prev">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
        </button>
        <button class="d3-arr d3-arr-next" aria-label="Next">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </button>

        <!-- Thumbnail strip -->
        <div class="d3-thumbs" id="d3Thumbs">
            <div class="d3-thumb active" style="background-image: url('{{ asset('images/hero-1.jpg') }}')" data-idx="0"></div>
            <div class="d3-thumb" style="background-image: url('{{ asset('images/hero-2.jpg') }}')" data-idx="1"></div>
            <div class="d3-thumb" style="background-image: url('{{ asset('images/hero-3.jpg') }}')" data-idx="2"></div>
        </div>

        <!-- Progress ring -->
        <div class="d3-ring">
            <svg width="40" height="40" viewBox="0 0 40 40">
                <circle cx="20" cy="20" r="16" fill="none" stroke="rgba(255,255,255,0.15)" stroke-width="2"/>
                <circle id="d3RingCircle" cx="20" cy="20" r="16" fill="none"
                        stroke="#FFD48A" stroke-width="2.5" stroke-linecap="round"
                        class="d3-ring-circle"
                        style="stroke-dasharray: 100.53; stroke-dashoffset: 100.53;"/>
            </svg>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script>
(function () {
    /* ── Leaf particles ── */
    function spawnLeaves(containerId) {
        const el = document.getElementById(containerId);
        if (!el) return;
        for (let i = 0; i < 14; i++) {
            const leaf = document.createElement('div');
            leaf.className = 'd3-leaf';
            leaf.style.cssText = `
                left: ${Math.random() * 100}%;
                width: ${5 + Math.random() * 8}px;
                height: ${5 + Math.random() * 8}px;
                animation-duration: ${8 + Math.random() * 12}s;
                animation-delay: ${Math.random() * 10}s;
                opacity: ${0.1 + Math.random() * 0.4};
            `;
            el.appendChild(leaf);
        }
    }
    ['d3p1','d3p2','d3p3'].forEach(spawnLeaves);

    /* ── Thumbnail nav ── */
    const thumbs = document.querySelectorAll('#d3Thumbs .d3-thumb');
    function setThumb(idx) {
        thumbs.forEach((t, i) => t.classList.toggle('active', i === idx));
    }
    thumbs.forEach(t => t.addEventListener('click', () => d3sw.slideTo(+t.dataset.idx)));

    /* ── Progress ring ── */
    const ring = document.getElementById('d3RingCircle');
    const circumference = 2 * Math.PI * 16; // ~100.53
    const delay = 5500;
    let startTime = null;
    let rafId = null;

    function animateRing(ts) {
        if (!startTime) startTime = ts;
        const elapsed = ts - startTime;
        const progress = Math.min(elapsed / delay, 1);
        ring.style.strokeDashoffset = circumference * (1 - progress);
        if (progress < 1) rafId = requestAnimationFrame(animateRing);
    }
    function resetRing() {
        cancelAnimationFrame(rafId);
        ring.style.strokeDashoffset = circumference;
        startTime = null;
        rafId = requestAnimationFrame(animateRing);
    }

    /* ── Swiper ── */
    const d3sw = new Swiper('.d3Swiper', {
        loop: false,
        speed: 1000,
        effect: 'creative',
        creativeEffect: {
            prev: { shadow: true, translate: [0, 0, -400] },
            next: { translate: ['100%', 0, 0] }
        },
        autoplay: { delay: delay, disableOnInteraction: false },
        navigation: { nextEl: '.d3-arr-next', prevEl: '.d3-arr-prev' },
        on: {
            init() { resetRing(); },
            slideChange() { setThumb(this.activeIndex); resetRing(); }
        }
    });
})();
</script>
 overflow: hidden; }
    .d3-bg {
        position: absolute; inset: 0;
        background-size: cover; background-position: center;
        transform: scale(1.05);
        transition: transform 7s ease;
        filter: brightness(0.72) saturate(1.1);
    }
    .d3-hero .swiper-slide-active .d3-bg { transform: scale(1); }

    /* Warm tint overlay */
    .d3-overlay {
        position: absolute; inset: 0;
        background: radial-gradient(ellipse at 50% 30%, rgba(255,210,140,0.18) 0%, rgba(20,50,30,0.55) 100%);
        z-index: 1;
    }

    /* ── SVG wave bottom ── */
    .d3-wave {
        position: absolute; bottom: -2px; left: 0; right: 0; z-index: 3;
        line-height: 0;
    }
    .d3-wave svg { display: block; width: 100%; }

    /* ── Floating leaf particles ── */
    .d3-particles { position: absolute; inset: 0; z-index: 2; pointer-events: none; overflow: hidden; }
    .d3-leaf {
        position: absolute; width: 8px; height: 8px;
        background: rgba(255,255,255,0.15);
        border-radius: 60% 40% 70% 30% / 50% 60% 40% 50%;
        animation: d3Float linear infinite;
    }
    @keyframes d3Float {
        0%   { transform: translateY(110vh) rotate(0deg); opacity: 0; }
        10%  { opacity: 0.6; }
        90%  { opacity: 0.3; }
        100% { transform: translateY(-10vh) rotate(720deg); opacity: 0; }
    }

    /* ── Center content ── */
    .d3-content {
        position: absolute; inset: 0; z-index: 4;
        display: flex; flex-direction: column;
        align-items: center; justify-content: center;
        text-align: center; padding: 0 5%;
    }
    .d3-eyebrow {
        display: inline-flex; align-items: center; gap: 14px;
        font-size: 0.7rem; letter-spacing: 0.3em;
        text-transform: uppercase; color: rgba(255,220,160,0.9);
        font-weight: 400;
        opacity: 0; transform: translateY(-16px);
        transition: opacity 0.6s 0.1s, transform 0.6s 0.1s;
    }
    .d3-eyebrow .d3-line { width: 40px; height: 1px; background: rgba(255,220,160,0.5); }
    .d3-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: clamp(3.5rem, 9vw, 9rem);
        font-weight: 600; line-height: 1.0; color: #FEFEFE;
        margin-top: 14px;
        opacity: 0; transform: translateY(24px);
        transition: opacity 0.8s 0.3s, transform 0.8s 0.3s;
    }
    .d3-title em { font-style: italic; color: #FFD48A; }
    .d3-subtitle {
        font-size: 1rem; color: rgba(255,255,255,0.6);
        font-weight: 300; letter-spacing: 0.05em;
        margin-top: 12px; max-width: 500px;
        opacity: 0; transform: translateY(16px);
        transition: opacity 0.7s 0.5s, transform 0.7s 0.5s;
    }
    .d3-btn-wrap {
        margin-top: 36px; display: flex; gap: 16px;
        opacity: 0; transform: translateY(14px);
        transition: opacity 0.7s 0.65s, transform 0.7s 0.65s;
    }
    .d3-btn {
        padding: 14px 34px; border-radius: 40px;
        font-size: 0.8rem; letter-spacing: 0.1em;
        text-transform: uppercase; text-decoration: none;
        font-weight: 500; cursor: pointer; border: none;
        transition: transform 0.3s, box-shadow 0.3s;
    }
    .d3-btn:hover { transform: translateY(-3px); }
    .d3-btn-solid {
        background: #FFD48A; color: #2A1A00;
        box-shadow: 0 8px 30px rgba(255,200,80,0.35);
    }
    .d3-btn-solid:hover { box-shadow: 0 12px 40px rgba(255,200,80,0.5); }
    .d3-btn-outline {
        background: transparent;
        border: 1.5px solid rgba(255,255,255,0.4);
        color: rgba(255,255,255,0.8);
    }
    .d3-btn-outline:hover { border-color: rgba(255,255,255,0.8); }

    /* Reveal on active */
    .d3-hero .swiper-slide-active .d3-eyebrow,
    .d3-hero .swiper-slide-active .d3-title,
    .d3-hero .swiper-slide-active .d3-subtitle,
    .d3-hero .swiper-slide-active .d3-btn-wrap {
        opacity: 1; transform: translateY(0);
    }

    /* ── Floating info card ── */
    .d3-card {
        position: absolute; bottom: 140px; right: 5%; z-index: 5;
        background: rgba(255,255,255,0.12); backdrop-filter: blur(16px);
        border: 1px solid rgba(255,255,255,0.2);
        border-radius: 16px; padding: 18px 24px;
        display: flex; align-items: center; gap: 14px;
        color: white; max-width: 240px;
        opacity: 0; transform: translateX(20px);
        transition: opacity 0.7s 0.9s, transform 0.7s 0.9s;
    }
    .d3-hero .swiper-slide-active .d3-card { opacity: 1; transform: translateX(0); }
    .d3-card-icon {
        width: 44px; height: 44px; background: rgba(255,212,138,0.2);
        border-radius: 12px; display: flex; align-items: center;
        justify-content: center; flex-shrink: 0; font-size: 1.3rem;
    }
    .d3-card-label { font-size: 0.65rem; color: rgba(255,255,255,0.5); letter-spacing: 0.15em; text-transform: uppercase; }
    .d3-card-value { font-size: 1rem; font-weight: 500; margin-top: 2px; }

    /* ── Thumbnail strip nav ── */
    .d3-thumbs {
        position: absolute; bottom: 72px; left: 50%;
        transform: translateX(-50%); z-index: 10;
        display: flex; gap: 10px;
    }
    .d3-thumb {
        width: 56px; height: 38px; overflow: hidden;
        border-radius: 8px; cursor: pointer;
        border: 2px solid transparent; opacity: 0.5;
        transition: opacity 0.3s, border-color 0.3s, transform 0.3s;
        background-size: cover; background-position: center;
    }
    .d3-thumb:hover { opacity: 0.8; transform: translateY(-3px); }
    .d3-thumb.active { border-color: #FFD48A; opacity: 1; }

    /* ── Arrow nav ── */
    .d3-arr {
        position: absolute; top: 50%; z-index: 10;
        transform: translateY(-50%);
        width: 50px; height: 50px;
        background: rgba(255,255,255,0.1); backdrop-filter: blur(8px);
        border: 1px solid rgba(255,255,255,0.25); border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
        cursor: pointer; color: white;
        transition: background 0.3s, border-color 0.3s;
    }
    .d3-arr:hover { background: rgba(255,212,138,0.3); border-color: #FFD48A; }
    .d3-arr-prev { left: 28px; }
    .d3-arr-next { right: 28px; }

    /* ── Progress ring ── */
    .d3-ring {
        position: absolute; bottom: 62px; right: 5%; z-index: 10;
    }
    .d3-ring svg { transform: rotate(-90deg); }
    .d3-ring-circle {
        stroke-dasharray: 100;
        stroke-dashoffset: 100;
        transition: stroke-dashoffset 0.1s linear;
    }

    @media (max-width: 640px) {
        .d3-card { bottom: 160px; right: 4%; }
        .d3-thumbs { bottom: 90px; gap: 6px; }
        .d3-thumb { width: 42px; height: 28px; }
        .d3-arr-prev { left: 10px; }
        .d3-arr-next { right: 10px; }
        .d3-ring { display: none; }
    }
</style>

<div class="d3-hero">
    <div class="swiper d3Swiper">
        <div class="swiper-wrapper">

            {{-- Slide 1 --}}
            <div class="swiper-slide">
                <div class="d3-bg" style="background-image: url('{{ asset('images/hero-1.jpg') }}')"></div>
                <div class="d3-overlay"></div>
                <div class="d3-particles" id="d3p1"></div>
                <div class="d3-content">
                    <div class="d3-eyebrow"><div class="d3-line"></div>Desa Wisata<div class="d3-line"></div></div>
                    <h1 class="d3-title">Glagah<em>wero</em></h1>
                    <p class="d3-subtitle">Keindahan alam dan kekayaan budaya menyatu dalam satu harmoni yang tak terlupakan.</p>
                    <div class="d3-btn-wrap">
                        <a href="#" class="d3-btn d3-btn-solid">Jelajahi Desa</a>
                        <a href="#" class="d3-btn d3-btn-outline">Tentang Kami</a>
                    </div>
                </div>
                <div class="d3-card">
                    <div class="d3-card-icon">🌿</div>
                    <div>
                        <div class="d3-card-label">Kabupaten</div>
                        <div class="d3-card-value">Jember, Jawa Timur</div>
                    </div>
                </div>
                <div class="d3-wave">
                    <svg viewBox="0 0 1440 90" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                        <path d="M0,40 C240,90 480,0 720,40 C960,80 1200,10 1440,40 L1440,90 L0,90 Z" fill="#F4F8FD"/>
                    </svg>
                </div>
            </div>

            {{-- Slide 2 --}}
            <div class="swiper-slide">
                <div class="d3-bg" style="background-image: url('{{ asset('images/hero-2.jpg') }}')"></div>
                <div class="d3-overlay"></div>
                <div class="d3-particles" id="d3p2"></div>
                <div class="d3-content">
                    <div class="d3-eyebrow"><div class="d3-line"></div>Produk Lokal<div class="d3-line"></div></div>
                    <h1 class="d3-title"><em>Potensi</em> Desa</h1>
                    <p class="d3-subtitle">Produk-produk unggulan hasil tangan terampil warga desa yang siap bersaing di pasar global.</p>
                    <div class="d3-btn-wrap">
                        <a href="#" class="d3-btn d3-btn-solid">Lihat Produk</a>
                        <a href="#" class="d3-btn d3-btn-outline">UMKM Lokal</a>
                    </div>
                </div>
                <div class="d3-card">
                    <div class="d3-card-icon">🛖</div>
                    <div>
                        <div class="d3-card-label">UMKM Aktif</div>
                        <div class="d3-card-value">24 Pelaku Usaha</div>
                    </div>
                </div>
                <div class="d3-wave">
                    <svg viewBox="0 0 1440 90" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                        <path d="M0,40 C240,90 480,0 720,40 C960,80 1200,10 1440,40 L1440,90 L0,90 Z" fill="#F4F8FD"/>
                    </svg>
                </div>
            </div>

            {{-- Slide 3 --}}
            <div class="swiper-slide">
                <div class="d3-bg" style="background-image: url('{{ asset('images/hero-3.jpg') }}')"></div>
                <div class="d3-overlay"></div>
                <div class="d3-particles" id="d3p3"></div>
                <div class="d3-content">
                    <div class="d3-eyebrow"><div class="d3-line"></div>Pemerintahan<div class="d3-line"></div></div>
                    <h1 class="d3-title">Bersama <em>Maju</em></h1>
                    <p class="d3-subtitle">Aparat desa yang amanah, transparan, dan berdedikasi untuk kesejahteraan seluruh masyarakat.</p>
                    <div class="d3-btn-wrap">
                        <a href="#" class="d3-btn d3-btn-solid">Profil Desa</a>
                        <a href="#" class="d3-btn d3-btn-outline">Layanan</a>
                    </div>
                </div>
                <div class="d3-card">
                    <div class="d3-card-icon">🏛️</div>
                    <div>
                        <div class="d3-card-label">Berdiri Sejak</div>
                        <div class="d3-card-value">Tahun 1945</div>
                    </div>
                </div>
                <div class="d3-wave">
                    <svg viewBox="0 0 1440 90" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                        <path d="M0,40 C240,90 480,0 720,40 C960,80 1200,10 1440,40 L1440,90 L0,90 Z" fill="#F4F8FD"/>
                    </svg>
                </div>
            </div>

        </div>

        <!-- Arrows -->
        <button class="d3-arr d3-arr-prev" aria-label="Prev">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
        </button>
        <button class="d3-arr d3-arr-next" aria-label="Next">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </button>

        <!-- Thumbnail strip -->
        <div class="d3-thumbs" id="d3Thumbs">
            <div class="d3-thumb active" style="background-image: url('{{ asset('images/hero-1.jpg') }}')" data-idx="0"></div>
            <div class="d3-thumb" style="background-image: url('{{ asset('images/hero-2.jpg') }}')" data-idx="1"></div>
            <div class="d3-thumb" style="background-image: url('{{ asset('images/hero-3.jpg') }}')" data-idx="2"></div>
        </div>

        <!-- Progress ring -->
        <div class="d3-ring">
            <svg width="40" height="40" viewBox="0 0 40 40">
                <circle cx="20" cy="20" r="16" fill="none" stroke="rgba(255,255,255,0.15)" stroke-width="2"/>
                <circle id="d3RingCircle" cx="20" cy="20" r="16" fill="none"
                        stroke="#FFD48A" stroke-width="2.5" stroke-linecap="round"
                        class="d3-ring-circle"
                        style="stroke-dasharray: 100.53; stroke-dashoffset: 100.53;"/>
            </svg>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script>
(function () {
    /* ── Leaf particles ── */
    function spawnLeaves(containerId) {
        const el = document.getElementById(containerId);
        if (!el) return;
        for (let i = 0; i < 14; i++) {
            const leaf = document.createElement('div');
            leaf.className = 'd3-leaf';
            leaf.style.cssText = `
                left: ${Math.random() * 100}%;
                width: ${5 + Math.random() * 8}px;
                height: ${5 + Math.random() * 8}px;
                animation-duration: ${8 + Math.random() * 12}s;
                animation-delay: ${Math.random() * 10}s;
                opacity: ${0.1 + Math.random() * 0.4};
            `;
            el.appendChild(leaf);
        }
    }
    ['d3p1','d3p2','d3p3'].forEach(spawnLeaves);

    /* ── Thumbnail nav ── */
    const thumbs = document.querySelectorAll('#d3Thumbs .d3-thumb');
    function setThumb(idx) {
        thumbs.forEach((t, i) => t.classList.toggle('active', i === idx));
    }
    thumbs.forEach(t => t.addEventListener('click', () => d3sw.slideTo(+t.dataset.idx)));

    /* ── Progress ring ── */
    const ring = document.getElementById('d3RingCircle');
    const circumference = 2 * Math.PI * 16; // ~100.53
    const delay = 5500;
    let startTime = null;
    let rafId = null;

    function animateRing(ts) {
        if (!startTime) startTime = ts;
        const elapsed = ts - startTime;
        const progress = Math.min(elapsed / delay, 1);
        ring.style.strokeDashoffset = circumference * (1 - progress);
        if (progress < 1) rafId = requestAnimationFrame(animateRing);
    }
    function resetRing() {
        cancelAnimationFrame(rafId);
        ring.style.strokeDashoffset = circumference;
        startTime = null;
        rafId = requestAnimationFrame(animateRing);
    }

    /* ── Swiper ── */
    const d3sw = new Swiper('.d3Swiper', {
        loop: false,
        speed: 1000,
        effect: 'creative',
        creativeEffect: {
            prev: { shadow: true, translate: [0, 0, -400] },
            next: { translate: ['100%', 0, 0] }
        },
        autoplay: { delay: delay, disableOnInteraction: false },
        navigation: { nextEl: '.d3-arr-next', prevEl: '.d3-arr-prev' },
        on: {
            init() { resetRing(); },
            slideChange() { setThumb(this.activeIndex); resetRing(); }
        }
    });
})();
</script>
