{{-- ============================================================
     HERO SLIDER — DESIGN 1
     Tema     : Cinematic Dark Luxury
     Ciri     : Overlay diagonal gelap, tipografi besar serif,
                aksen emas, counter animasi, gradient hitam bawah
     Library  : Swiper 12 · Tailwind CDN
     ============================================================ --}}

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">

<style>
    /* ── Base ── */
    .d1-hero { position: relative; width: 100%; height: 100vh; min-height: 560px; overflow: hidden; font-family: 'Jost', sans-serif; }

    /* Swiper fill */
    .d1-hero .swiper,
    .d1-hero .swiper-wrapper,
    .d1-hero .swiper-slide { width: 100%; height: 100%; }

    /* Each slide: background image */
    .d1-hero .swiper-slide { position: relative; overflow: hidden; }
    .d1-hero .slide-bg {
        position: absolute; inset: 0;
        background-size: cover; background-position: center;
        transform: scale(1.08);
        transition: transform 6s ease;
    }
    .d1-hero .swiper-slide-active .slide-bg { transform: scale(1); }

    /* Diagonal dark overlay */
    .d1-hero .slide-overlay {
        position: absolute; inset: 0;
        background: linear-gradient(115deg, rgba(5,5,10,0.85) 48%, rgba(5,5,10,0.25) 100%);
        z-index: 1;
    }

    /* Bottom gradient */
    .d1-hero .slide-bottom {
        position: absolute; bottom: 0; left: 0; right: 0; height: 200px;
        background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
        z-index: 2;
    }

    /* Content */
    .d1-hero .slide-content {
        position: absolute; inset: 0; z-index: 3;
        display: flex; flex-direction: column;
        justify-content: center; padding: 0 6% 0 8%;
    }
    .d1-slide-tag {
        display: inline-flex; align-items: center; gap: 10px;
        text-transform: uppercase; letter-spacing: 0.3em;
        font-size: 0.7rem; color: #D4A843; font-weight: 500;
        opacity: 0; transform: translateY(20px);
        transition: opacity 0.7s 0.1s, transform 0.7s 0.1s;
    }
    .d1-slide-tag::before {
        content: ''; display: inline-block;
        width: 40px; height: 1px; background: #D4A843;
    }
    .d1-slide-title {
        font-family: 'Playfair Display', serif;
        font-size: clamp(3rem, 7vw, 7rem);
        font-weight: 900; line-height: 1.0;
        color: #ffffff;
        opacity: 0; transform: translateY(30px);
        transition: opacity 0.8s 0.3s, transform 0.8s 0.3s;
    }
    .d1-slide-title em { color: #D4A843; font-style: italic; }
    .d1-slide-desc {
        max-width: 480px; font-size: 0.95rem;
        color: rgba(255,255,255,0.65); line-height: 1.7;
        margin-top: 20px;
        opacity: 0; transform: translateY(20px);
        transition: opacity 0.7s 0.55s, transform 0.7s 0.55s;
    }
    .d1-slide-btn {
        margin-top: 36px; display: inline-flex; align-items: center; gap: 12px;
        background: transparent; border: 1px solid #D4A843;
        color: #D4A843; padding: 14px 32px;
        font-size: 0.78rem; letter-spacing: 0.2em; text-transform: uppercase;
        cursor: pointer; text-decoration: none;
        opacity: 0; transform: translateY(20px);
        transition: opacity 0.7s 0.75s, transform 0.7s 0.75s, background 0.3s, color 0.3s;
    }
    .d1-slide-btn:hover { background: #D4A843; color: #050505; }
    .d1-slide-btn svg { width: 16px; height: 16px; transition: transform 0.3s; }
    .d1-slide-btn:hover svg { transform: translateX(4px); }

    /* Active slide text reveal */
    .d1-hero .swiper-slide-active .d1-slide-tag,
    .d1-hero .swiper-slide-active .d1-slide-title,
    .d1-hero .swiper-slide-active .d1-slide-desc,
    .d1-hero .swiper-slide-active .d1-slide-btn {
        opacity: 1; transform: translateY(0);
    }

    /* ── Side navigation ── */
    .d1-nav {
        position: absolute; right: 48px; top: 50%; z-index: 10;
        transform: translateY(-50%);
        display: flex; flex-direction: column; gap: 14px;
    }
    .d1-nav-btn {
        width: 44px; height: 44px; border: 1px solid rgba(255,255,255,0.3);
        background: rgba(255,255,255,0.05); backdrop-filter: blur(6px);
        display: flex; align-items: center; justify-content: center;
        cursor: pointer; transition: border-color 0.3s, background 0.3s;
        color: white;
    }
    .d1-nav-btn:hover { border-color: #D4A843; background: rgba(212,168,67,0.15); }

    /* ── Slide counter ── */
    .d1-counter {
        position: absolute; bottom: 44px; right: 56px; z-index: 10;
        font-family: 'Playfair Display', serif;
        display: flex; align-items: flex-end; gap: 4px;
        color: rgba(255,255,255,0.4);
    }
    .d1-counter .current {
        font-size: 3rem; line-height: 1; color: #D4A843; font-weight: 700;
    }
    .d1-counter .sep { font-size: 1.5rem; padding-bottom: 6px; }
    .d1-counter .total { font-size: 1.4rem; padding-bottom: 4px; }

    /* ── Progress bar ── */
    .d1-progress {
        position: absolute; bottom: 0; left: 0; height: 3px;
        background: #D4A843; z-index: 10;
        animation: d1Progress 5s linear forwards;
    }
    @keyframes d1Progress { from { width: 0 } to { width: 100% } }

    /* ── Pagination dots (left bottom) ── */
    .d1-hero .swiper-pagination {
        position: absolute; bottom: 44px; left: 8%;
        display: flex; gap: 10px; width: auto !important;
    }
    .d1-hero .swiper-pagination-bullet {
        width: 6px; height: 6px; border-radius: 0;
        background: rgba(255,255,255,0.35); opacity: 1;
        transition: width 0.4s, background 0.4s;
    }
    .d1-hero .swiper-pagination-bullet-active {
        width: 32px; background: #D4A843;
    }

    /* ── Scroll hint ── */
    .d1-scroll-hint {
        position: absolute; bottom: 40px; left: 50%; transform: translateX(-50%);
        z-index: 10; display: flex; flex-direction: column; align-items: center;
        gap: 8px; color: rgba(255,255,255,0.4);
        font-size: 0.65rem; letter-spacing: 0.2em; text-transform: uppercase;
    }
    .d1-scroll-hint .d1-scroll-line {
        width: 1px; height: 40px; background: rgba(255,255,255,0.2);
        position: relative; overflow: hidden;
    }
    .d1-scroll-line::after {
        content: ''; position: absolute; top: -100%; left: 0;
        width: 100%; height: 100%; background: #D4A843;
        animation: scrollDrop 1.6s ease-in-out infinite;
    }
    @keyframes scrollDrop { 0%{top:-100%} 100%{top:100%} }

    @media (max-width: 640px) {
        .d1-hero .slide-content { padding: 0 5% 0 5%; }
        .d1-nav { right: 16px; }
        .d1-counter { right: 20px; bottom: 56px; }
        .d1-scroll-hint { display: none; }
    }
</style>

<div class="d1-hero">
    <div class="swiper d1Swiper">
        <div class="swiper-wrapper">

            {{-- Slide 1 --}}
            <div class="swiper-slide">
                <div class="slide-bg" style="background-image: url('{{ asset('images/hero-1.jpg') }}')"></div>
                <div class="slide-overlay"></div>
                <div class="slide-bottom"></div>
                <div class="slide-content">
                    <span class="d1-slide-tag">Desa Wisata</span>
                    <h1 class="d1-slide-title">Glagah<em>wero</em></h1>
                    <p class="d1-slide-desc">Desa yang kaya akan budaya, alam, dan kearifan lokal yang tumbuh di jantung Kabupaten Jember.</p>
                    <a href="#" class="d1-slide-btn">
                        Jelajahi Desa
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            {{-- Slide 2 --}}
            <div class="swiper-slide">
                <div class="slide-bg" style="background-image: url('{{ asset('images/hero-2.jpg') }}')"></div>
                <div class="slide-overlay"></div>
                <div class="slide-bottom"></div>
                <div class="slide-content">
                    <span class="d1-slide-tag">Alam & Budaya</span>
                    <h1 class="d1-slide-title">Potensi<br><em>Tak Terbatas</em></h1>
                    <p class="d1-slide-desc">Hamparan sawah, sungai jernih, dan produk lokal unggulan menjadi kekayaan yang kami jaga bersama.</p>
                    <a href="#" class="d1-slide-btn">
                        Produk Desa
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            {{-- Slide 3 --}}
            <div class="swiper-slide">
                <div class="slide-bg" style="background-image: url('{{ asset('images/hero-3.jpg') }}')"></div>
                <div class="slide-overlay"></div>
                <div class="slide-bottom"></div>
                <div class="slide-content">
                    <span class="d1-slide-tag">Pemerintahan</span>
                    <h1 class="d1-slide-title">Melayani<br>dengan <em>Hati</em></h1>
                    <p class="d1-slide-desc">Pemerintah desa Glagahwero berkomitmen memberikan pelayanan terbaik bagi seluruh warga masyarakat.</p>
                    <a href="#" class="d1-slide-btn">
                        Profil Desa
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

        </div>

        <!-- Custom Prev/Next -->
        <div class="d1-nav">
            <button class="d1-nav-btn d1-prev" aria-label="Previous">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            </button>
            <button class="d1-nav-btn d1-next" aria-label="Next">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </button>
        </div>

        <!-- Counter -->
        <div class="d1-counter">
            <span class="current" id="d1Current">01</span>
            <span class="sep">/</span>
            <span class="total">03</span>
        </div>

        <!-- Progress bar -->
        <div class="d1-progress" id="d1Progress"></div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <!-- Scroll hint -->
    <div class="d1-scroll-hint">
        <div class="d1-scroll-line"></div>
        <span>Scroll</span>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script>
(function () {
    const total = 3;
    const currentEl = document.getElementById('d1Current');
    const progressEl = document.getElementById('d1Progress');

    function resetProgress() {
        progressEl.style.animation = 'none';
        progressEl.offsetHeight; // reflow
        progressEl.style.animation = 'd1Progress 5s linear forwards';
    }

    const d1Swiper = new Swiper('.d1Swiper', {
        loop: true,
        speed: 900,
        autoplay: { delay: 5000, disableOnInteraction: false },
        pagination: { el: '.swiper-pagination', clickable: true },
        const btnNext = el.querySelector('.d1-next');
        const btnPrev = el.querySelector('.d1-prev');
        navigation: { nextEl: btnNext, prevEl: btnPrev },
        on: {
            slideChange() {
                const idx = this.realIndex;
                currentEl.textContent = String(idx + 1).padStart(2, '0');
                resetProgress();
            }
        }
    });
})();
</script>
