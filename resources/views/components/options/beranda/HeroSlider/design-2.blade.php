{{-- ============================================================
     HERO SLIDER — DESIGN 2
     Tema     : Brutalist Split Screen
     Ciri     : Layar terbagi 2 (teks kiri | gambar kanan),
                tipografi ultra-bold condensed, aksen hijau neon,
                animasi clip-path, nomor slide raksasa
     Library  : Swiper 12 · Tailwind CDN
     ============================================================ --}}

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">

<style>
    /* ── Wrapper ── */
    .d2-hero {
        position: relative; width: 100%;
        height: 100vh; min-height: 560px; overflow: hidden;
        background: #0A0A0A; font-family: 'DM Sans', sans-serif;
    }

    .d2-hero .swiper,
    .d2-hero .swiper-wrapper { width: 100%; height: 100%; }

    /* ── Slide layout: flex row ── */
    .d2-hero .swiper-slide {
        display: flex; height: 100%; overflow: hidden;
    }

    /* ── Left panel (text) ── */
    .d2-left {
        position: relative; z-index: 2;
        width: 50%; height: 100%; background: #0A0A0A;
        display: flex; flex-direction: column;
        justify-content: flex-end; padding: 60px 8% 80px 8%;
        flex-shrink: 0;
    }
    .d2-slide-num {
        font-family: 'Bebas Neue', sans-serif;
        font-size: clamp(6rem, 14vw, 14rem);
        line-height: 0.85; color: #111;
        position: absolute; top: 30px; left: 6%;
        -webkit-text-stroke: 1px #1C1C1C;
        user-select: none; pointer-events: none;
    }
    .d2-tag {
        display: inline-flex; align-items: center; gap: 10px;
        font-size: 0.72rem; letter-spacing: 0.25em; text-transform: uppercase;
        color: #39FF14; font-weight: 500; margin-bottom: 18px;
        opacity: 0; transform: translateX(-24px);
        transition: opacity 0.6s 0.15s, transform 0.6s 0.15s;
    }
    .d2-tag::after {
        content: ''; display: inline-block;
        width: 32px; height: 1px; background: #39FF14;
    }
    .d2-title {
        font-family: 'Bebas Neue', sans-serif;
        font-size: clamp(3.5rem, 6vw, 6.5rem);
        line-height: 0.95; color: #F5F5F5;
        letter-spacing: 0.03em;
        opacity: 0; transform: translateX(-30px);
        transition: opacity 0.7s 0.35s, transform 0.7s 0.35s;
    }
    .d2-title span { color: #39FF14; }
    .d2-desc {
        margin-top: 22px; font-size: 0.88rem; line-height: 1.7;
        color: rgba(255,255,255,0.45); max-width: 320px;
        opacity: 0; transform: translateX(-20px);
        transition: opacity 0.6s 0.55s, transform 0.6s 0.55s;
    }
    .d2-actions {
        margin-top: 36px; display: flex; gap: 14px; align-items: center;
        opacity: 0; transform: translateX(-20px);
        transition: opacity 0.6s 0.7s, transform 0.6s 0.7s;
    }
    .d2-btn-primary {
        background: #39FF14; color: #0A0A0A;
        padding: 13px 28px; font-size: 0.78rem;
        font-weight: 700; letter-spacing: 0.15em;
        text-transform: uppercase; text-decoration: none;
        transition: opacity 0.3s;
    }
    .d2-btn-primary:hover { opacity: 0.85; }
    .d2-btn-ghost {
        border: 1px solid rgba(255,255,255,0.2); color: rgba(255,255,255,0.5);
        padding: 12px 24px; font-size: 0.78rem;
        letter-spacing: 0.1em; text-transform: uppercase;
        text-decoration: none;
        transition: border-color 0.3s, color 0.3s;
    }
    .d2-btn-ghost:hover { border-color: #39FF14; color: #39FF14; }

    /* Active reveal */
    .d2-hero .swiper-slide-active .d2-tag,
    .d2-hero .swiper-slide-active .d2-title,
    .d2-hero .swiper-slide-active .d2-desc,
    .d2-hero .swiper-slide-active .d2-actions {
        opacity: 1; transform: translateX(0);
    }

    /* ── Right panel (image) ── */
    .d2-right {
        position: relative; flex: 1; overflow: hidden;
    }
    .d2-img {
        position: absolute; inset: 0;
        background-size: cover; background-position: center;
        transform: scale(1.06);
        clip-path: polygon(8% 0, 100% 0, 100% 100%, 0% 100%);
        transition: transform 6s ease;
    }
    .d2-hero .swiper-slide-active .d2-img { transform: scale(1); }
    .d2-img-overlay {
        position: absolute; inset: 0;
        background: linear-gradient(to right, #0A0A0A 0%, rgba(10,10,10,0.0) 40%);
        z-index: 1;
    }

    /* ── Divider line ── */
    .d2-divider {
        position: absolute; left: 50%; top: 10%; bottom: 10%;
        width: 1px; background: rgba(57,255,20,0.15); z-index: 3;
    }
    .d2-divider::after {
        content: ''; position: absolute;
        top: 0; left: 0; width: 100%; height: 30%;
        background: #39FF14;
        animation: d2DividerDrop 2.5s ease-in-out infinite;
    }
    @keyframes d2DividerDrop {
        0%   { top: 0; height: 0; opacity: 0; }
        30%  { opacity: 1; }
        70%  { top: 70%; height: 30%; opacity: 1; }
        100% { top: 100%; height: 0; opacity: 0; }
    }

    /* ── Bottom controls ── */
    .d2-controls {
        position: absolute; bottom: 0; left: 0; right: 0; height: 70px;
        background: rgba(10,10,10,0.9); backdrop-filter: blur(8px);
        z-index: 10; display: flex; align-items: center;
        padding: 0 8%; gap: 24px;
        border-top: 1px solid rgba(255,255,255,0.06);
    }
    .d2-ctrl-label {
        font-size: 0.65rem; color: rgba(255,255,255,0.3);
        letter-spacing: 0.2em; text-transform: uppercase;
        margin-right: auto;
    }
    .d2-ctrl-dots { display: flex; gap: 8px; align-items: center; }
    .d2-ctrl-dots .d2-dot {
        width: 8px; height: 2px; background: rgba(255,255,255,0.2);
        cursor: pointer; transition: width 0.4s, background 0.4s;
    }
    .d2-ctrl-dots .d2-dot.active { width: 28px; background: #39FF14; }
    .d2-ctrl-btns { display: flex; gap: 2px; }
    .d2-ctrl-btn {
        width: 46px; height: 46px; background: transparent;
        border: 1px solid rgba(255,255,255,0.1);
        color: rgba(255,255,255,0.5); display: flex;
        align-items: center; justify-content: center;
        cursor: pointer; transition: background 0.3s, color 0.3s, border-color 0.3s;
    }
    .d2-ctrl-btn:hover { background: #39FF14; color: #0A0A0A; border-color: #39FF14; }

    /* ── Vertical slide text (right side) ── */
    .d2-vert-text {
        position: absolute; right: 24px; top: 50%; z-index: 10;
        transform: translateY(-50%) rotate(90deg);
        font-size: 0.62rem; letter-spacing: 0.3em; text-transform: uppercase;
        color: rgba(255,255,255,0.2); white-space: nowrap;
    }

    /* ── Mobile ── */
    @media (max-width: 640px) {
        .d2-hero .swiper-slide { flex-direction: column; }
        .d2-left { width: 100%; height: 55%; padding: 40px 6% 30px; }
        .d2-right { height: 45%; }
        .d2-img { clip-path: polygon(0 12%, 100% 0, 100% 100%, 0 100%); }
        .d2-divider { display: none; }
        .d2-vert-text { display: none; }
        .d2-slide-num { font-size: 5rem; }
    }
</style>

<div class="d2-hero">
    <div class="swiper d2Swiper">
        <div class="swiper-wrapper">

            {{-- Slide 1 --}}
            <div class="swiper-slide">
                <div class="d2-left">
                    <div class="d2-slide-num">01</div>
                    <div class="d2-tag">Desa Wisata</div>
                    <h1 class="d2-title">GLAGAH<span>WERO</span></h1>
                    <p class="d2-desc">Surga tersembunyi di Jember yang menyimpan kekayaan budaya dan keindahan alam yang tak ternilai.</p>
                    <div class="d2-actions">
                        <a href="#" class="d2-btn-primary">Jelajahi</a>
                        <a href="#" class="d2-btn-ghost">Pelajari</a>
                    </div>
                </div>
                <div class="d2-right">
                    <div class="d2-img" style="background-image: url('{{ asset('images/hero-1.jpg') }}')"></div>
                    <div class="d2-img-overlay"></div>
                </div>
            </div>

            {{-- Slide 2 --}}
            <div class="swiper-slide">
                <div class="d2-left">
                    <div class="d2-slide-num">02</div>
                    <div class="d2-tag">Potensi Lokal</div>
                    <h1 class="d2-title">PRODUK<span> DESA</span></h1>
                    <p class="d2-desc">UMKM lokal yang bergeliat menghadirkan produk-produk unggulan khas Glagahwero ke pasar nasional.</p>
                    <div class="d2-actions">
                        <a href="#" class="d2-btn-primary">Lihat Produk</a>
                        <a href="#" class="d2-btn-ghost">Info Lebih</a>
                    </div>
                </div>
                <div class="d2-right">
                    <div class="d2-img" style="background-image: url('{{ asset('images/hero-2.jpg') }}')"></div>
                    <div class="d2-img-overlay"></div>
                </div>
            </div>

            {{-- Slide 3 --}}
            <div class="swiper-slide">
                <div class="d2-left">
                    <div class="d2-slide-num">03</div>
                    <div class="d2-tag">Pemerintahan</div>
                    <h1 class="d2-title">LAYANAN<span> PRIMA</span></h1>
                    <p class="d2-desc">Transparansi dan dedikasi penuh dari aparat desa dalam melayani setiap kebutuhan masyarakat.</p>
                    <div class="d2-actions">
                        <a href="#" class="d2-btn-primary">Profil Desa</a>
                        <a href="#" class="d2-btn-ghost">Kontak</a>
                    </div>
                </div>
                <div class="d2-right">
                    <div class="d2-img" style="background-image: url('{{ asset('images/hero-3.jpg') }}')"></div>
                    <div class="d2-img-overlay"></div>
                </div>
            </div>

        </div>

        <!-- Divider line -->
        <div class="d2-divider"></div>

        <!-- Vertical label -->
        <div class="d2-vert-text">Glagahwero · Jember · Jawa Timur</div>

        <!-- Bottom controls -->
        <div class="d2-controls">
            <span class="d2-ctrl-label">Desa Glagahwero</span>
            <div class="d2-ctrl-dots" id="d2Dots">
                <div class="d2-dot active" data-idx="0"></div>
                <div class="d2-dot" data-idx="1"></div>
                <div class="d2-dot" data-idx="2"></div>
            </div>
            <div class="d2-ctrl-btns">
                <button class="d2-ctrl-btn d2-prev" aria-label="Prev">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                </button>
                <button class="d2-ctrl-btn d2-next" aria-label="Next">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script>
(function () {
    const dots = document.querySelectorAll('#d2Dots .d2-dot');
    function setDot(idx) {
        dots.forEach((d, i) => d.classList.toggle('active', i === idx));
    }
    dots.forEach(d => {
        d.addEventListener('click', () => d2sw.slideTo(+d.dataset.idx));
    });

    const d2sw = new Swiper('.d2Swiper', {
        loop: false,
        speed: 850,
        autoplay: { delay: 5500, disableOnInteraction: false },
        navigation: { nextEl: '.d2-next', prevEl: '.d2-prev' },
        on: { slideChange() { setDot(this.activeIndex); } }
    });
})();
</script>
