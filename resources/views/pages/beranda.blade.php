@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

<style>
    body { font-family: 'Poppins', sans-serif; }
    .font-dancing { font-family: 'Dancing Script', cursive; }
    .animate-scroll-aparat {
        animation: scrollAparat 150s linear infinite;
        animation-play-state: paused;
    }
    .animate-scroll-aparat.playing {
        animation-play-state: running;
    }
    .swiper { width: 100%; height: 420px; }
    .swiper-slide { position: relative; display: flex; align-items: center; justify-content: center; background-size: cover; background-position: center; }
    @keyframes scrollAparat {
        0%   { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    .sambutan-scroll::-webkit-scrollbar { width: 6px; }
    .sambutan-scroll::-webkit-scrollbar-track { background: #e5e7eb; border-radius: 4px; }
    .sambutan-scroll::-webkit-scrollbar-thumb { background: #1D4ED8; border-radius: 4px; }
    .sambutan-scroll::-webkit-scrollbar-thumb:hover { background: #1D4ED8; }
    @media (max-width: 640px) {
        .swiper { height: 240px; }
        .font-dancing { font-size: 3rem !important; }
    }

    /* ── ANIMASI HERO TEXT ── */
    @keyframes heroFadeUp {
        from { opacity: 0; transform: translateY(30px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    .hero-text {
        animation: heroFadeUp 1s ease forwards;
        animation-delay: 0.4s;
        opacity: 0;
    }

    /* ── REVEAL BLOCKS ── */
    .reveal {
        opacity: 0;
        transform: translateY(36px);
        transition: opacity 0.7s ease, transform 0.7s ease;
    }
    .reveal.visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* ── SAMBUTAN FOTO FRAME ── */
    .foto-frame {
        opacity: 0;
        transform: translateX(30px);
        transition: opacity 0.7s ease 0.2s, transform 0.7s ease 0.2s;
    }
    .foto-frame.visible {
        opacity: 1;
        transform: translateX(0);
    }

    /* ── SAMBUTAN TEKS ── */
    .sambutan-text {
        opacity: 0;
        transform: translateX(-30px);
        transition: opacity 0.7s ease 0.1s, transform 0.7s ease 0.1s;
    }
    .sambutan-text.visible {
        opacity: 1;
        transform: translateX(0);
    }

    /* ── COUNTER angka ── */
    .stat-card {
        opacity: 0;
        transform: translateY(24px) scale(0.95);
        transition: opacity 0.5s ease, transform 0.5s ease;
    }
    .stat-card.visible {
        opacity: 1;
        transform: translateY(0) scale(1);
    }

    /* ── SECTION HEADING garis ── */
    .section-heading::after {
        content: '';
        display: block;
        width: 0;
        height: 3px;
        background: #1D4ED8;
        border-radius: 4px;
        margin: 8px auto 0;
        transition: width 0.8s ease;
    }
    .section-heading.lined::after {
        width: 60px;
    }
</style>

<!-- ===== 1. HERO SLIDER ===== -->
<div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #F59E0B;" class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url('{{ asset('images/hero-1.jpg') }}'); background-size: cover; background-position: center;">
            <h1 class="hero-text font-dancing text-8xl sm:text-7xl text-white relative z-10" style="text-shadow: 2px 4px 20px rgba(0,0,0,0.4);">Glagahwero</h1>
        </div>
        <div class="swiper-slide" style="background-image: url('{{ asset('images/hero-2.jpg') }}'); background-size: cover; background-position: center;">
            <p class="hero-text text-base text-white relative z-10">Jember</p>
        </div>
        <div class="swiper-slide" style="background-image: url('{{ asset('images/hero-3.jpg') }}'); background-size: cover; background-position: center;"></div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>


<!-- ===== 2. BERITA DESA ===== -->
<section class="py-12 bg-[#F4F8FD]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 reveal">
        <h2 class="text-2xl sm:text-3xl font-bold text-center text-[#0D2B5E] mb-10 section-heading">Berita Desa</h2>
        @livewire('berita-desa')
    </div>
</section>


<!-- ===== 3. SELAMAT DATANG ===== -->
<section class="py-14 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <h2 class="text-2xl sm:text-3xl font-bold text-center text-[#0D2B5E] mb-10 section-heading reveal">Selamat Datang</h2>
        <div class="flex flex-col-reverse sm:flex-row gap-8 sm:gap-10 items-center sm:items-start">

            {{-- Teks sambutan --}}
            <div class="flex-1 w-full sambutan-text">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-1 h-6 bg-[#1D4ED8] rounded"></div>
                    <h3 class="text-xs sm:text-sm font-bold text-[#0D2B5E] uppercase tracking-widest">Sambutan Kepala Desa Glagahwero</h3>
                </div>
                <div class="sambutan-scroll bg-white rounded-lg h-[300px] sm:h-[450px] overflow-y-auto pr-2">
                    <div class="text-sm text-black leading-relaxed space-y-3 text-justify pr-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>
                        Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat.</p>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                        cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum. Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit.</p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                        quae ab illo inventore veritatis et quasi architecto beatae vitae
                        dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                        sit aspernatur aut odit aut fugit.</p>
                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam
                        corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
                        consequatur. Quis autem vel eum iure reprehenderit qui in ea
                        voluptate velit esse quam nihil molestiae consequatur.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam
                        corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
                        consequatur.</p>
                        <p class="font-semibold text-[#0D2B5E] mt-2">Nama Kepala Desa</p>
                    </div>
                </div>
            </div>

            {{-- Foto --}}
            <div class="relative w-52 sm:w-64 h-64 sm:h-80 mx-auto sm:mx-0 flex-shrink-0 foto-frame">
                <div class="absolute inset-4 bg-gray-300 overflow-hidden z-10">
                    <img src="{{ $foto ?? asset('images/hero-1.jpg') }}" alt="Foto" class="w-full h-full object-cover object-top">
                </div>
                <div class="absolute top-0 left-0 z-20" style="width: 40px; height: 40px;">
                    <div class="absolute top-0 left-0 bg-blue-600" style="width: 40px; height: 8px;"></div>
                    <div class="absolute top-0 left-0 bg-blue-600" style="width: 8px; height: 40px;"></div>
                </div>
                <div class="absolute bottom-0 right-0 z-20" style="width: 40px; height: 40px;">
                    <div class="absolute bottom-0 right-0 bg-blue-600" style="width: 40px; height: 8px;"></div>
                    <div class="absolute bottom-0 right-0 bg-blue-600" style="width: 8px; height: 40px;"></div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ===== 4. APARATUR ===== -->
<section id="section-aparatur" class="py-14 pb-6 px-4 sm:px-6 bg-[#F4F8FD]">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-2xl sm:text-3xl font-bold text-center text-[#0D2B5E] mb-10 section-heading reveal">Aparat Pemerintah Desa</h2>

        <div class="reveal">
            <livewire:aparaturd-desa />
        </div>

        <div class="flex justify-center mt-8 reveal">
            <a href="{{ route('aparatur') }}" class="bg-[#C0392B] hover:bg-red-700 text-white font-semibold px-8 py-3 rounded-full transition text-sm">
                Lihat Data Selengkapnya
            </a>
        </div>
    </div>
</section>


<!-- ===== 5. PRODUK DESA ===== -->
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 reveal">
        <livewire:produk-desa />
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script>
    /* ── SWIPER ── */
    const swiper = new Swiper(".mySwiper", {
        effect: "fade",
        fadeEffect: { crossFade: true },
        loop: true,
        autoplay: { delay: 4000, disableOnInteraction: false },
        speed: 800,
        navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
        pagination: { el: ".swiper-pagination", clickable: true },
        on: {
            // Re-trigger hero text animasi setiap slide ganti
            slideChangeTransitionStart() {
                document.querySelectorAll('.hero-text').forEach(el => {
                    el.style.animation = 'none';
                    el.offsetHeight; // reflow
                    el.style.animation = '';
                });
            }
        }
    });

    /* ── INTERSECTION OBSERVER: reveal & section-heading ── */
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, i) => {
            if (!entry.isIntersecting) return;
            const el = entry.target;

            // Delay bertingkat jika ada banyak elemen sekaligus
            setTimeout(() => {
                el.classList.add('visible');
                // Trigger garis bawah heading
                if (el.classList.contains('section-heading')) {
                    el.classList.add('lined');
                }
            }, 80);

            revealObserver.unobserve(el);
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.reveal, .sambutan-text, .foto-frame').forEach(el => {
        revealObserver.observe(el);
    });

    // Section heading yang berdiri sendiri (tidak dalam .reveal)
    document.querySelectorAll('.section-heading').forEach(el => {
        revealObserver.observe(el);
    });

    /* ── APARATUR scroll animation ── */
    const aparaturSection = document.getElementById('section-aparatur');
    const scrollEl = document.querySelector('.animate-scroll-aparat');
    const aparaturObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                scrollEl?.classList.add('playing');
            } else {
                scrollEl?.classList.remove('playing');
            }
        });
    }, { threshold: 0.2 });
    if (aparaturSection) aparaturObserver.observe(aparaturSection);
</script>

@endsection
