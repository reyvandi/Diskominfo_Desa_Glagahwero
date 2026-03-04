@extends('layouts.app')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

<section class="bg-gray-50 min-h-screen py-10 px-4 md:px-10">
  <div class="max-w-6xl mx-auto">

    {{-- Search Bar --}}
    <div class="flex items-center gap-3 mb-10">
      <div class="relative">
        <select class="appearance-none border border-gray-300 rounded-lg px-4 py-2.5 pr-8 text-sm text-gray-600 bg-white shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
          <option>Semua Kategori</option>
          <option>Makanan</option>
          <option>Minuman</option>
          <option>Kerajinan</option>
        </select>
        <svg class="absolute right-2 top-3 w-4 h-4 text-gray-400 pointer-events-none" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M19 9l-7 7-7-7"/>
        </svg>
      </div>
      <input type="text" placeholder="Cari Produk"
             class="flex-1 border border-gray-300 rounded-lg px-4 py-2.5 text-sm text-gray-600 bg-white shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"/>
      <button class="bg-blue-700 hover:bg-blue-800 text-white text-sm font-semibold px-6 py-2.5 rounded-lg shadow transition-all">
        Cari
      </button>
    </div>

    {{-- Header --}}
    <div class="mb-6">
      <h2 class="text-2xl font-bold text-blue-700">Produk Desa</h2>
      <p class="text-gray-600 text-sm mt-1 font-semibold max-w-xS">
        Menyajikan beragam produk unggulan hasil karya masyarakat desa yang diolah secara mandiri
        dengan mengutamakan kualitas, kearifan lokal, dan nilai ekonomi yang berkelanjutan.
      </p>
    </div>


    {{-- Grid Produk --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6" id="produk-grid">
      @foreach(range(1,9) as $i)
      <div class="bg-white rounded-2xl shadow-sm overflow-hidden hover:shadow-lg transition-all duration-300 hover:-translate-y-1 produk-card">
        {{-- Gambar --}}
        <div class="relative overflow-hidden h-48">
          <img src="https://placehold.co/400x300/4a7c59/white?text=Produk+{{$i}}"
               alt="Produk {{$i}}"
               class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
        </div>
        {{-- Info --}}
        <div class="p-4">
          <h3 class="font-bold text-gray-800 text-sm mb-1">Nama Produk</h3>
          <p class="text-blue-600 font-bold text-sm mb-1">
            Rp XX.XXX,XX <span class="text-gray-400 font-normal">/ Kg</span>
          </p>
          <p class="text-gray-500 text-xs leading-relaxed mb-3 line-clamp-2">
            Menyajikan beragam produk unggulan hasil karya masyarakat desa yang diolah secara mandiri dengan
          </p>
          <div class="flex items-center gap-1 text-gray-500 text-xs mb-3">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>
            </svg>
            Nama Penjual
          </div>
          <div class="flex gap-2">
            <a href="#"
               class="flex-1 flex items-center justify-center gap-1.5 bg-blue-700 hover:bg-blue-800 text-white text-xs font-semibold py-2 rounded-lg transition-all">
              <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                <path d="M12 0C5.373 0 0 5.373 0 12c0 2.127.558 4.126 1.535 5.858L.057 23.428a.75.75 0 0 0 .916.915l5.57-1.479A11.952 11.952 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0z"/>
              </svg>
              Beli Sekarang
            </a>
            <a href="#"
               class="flex items-center justify-center gap-1.5 border border-blue-700 text-blue-700 hover:bg-blue-50 text-xs font-semibold px-3 py-2 rounded-lg transition-all">
              <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>
              </svg>
              Lokasi
            </a>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    {{-- Pagination --}}
    <div class="flex items-center justify-between mt-8 text-xs text-gray-500">
      <span>Showing 1 to 9 from 4xxx results</span>
      <div class="flex items-center gap-1">
        <button class="px-2 py-1 rounded hover:bg-gray-200 text-gray-400">&lt;</button>
        <button class="px-2.5 py-1 rounded bg-blue-700 text-white font-bold">1</button>
        <button class="px-2.5 py-1 rounded hover:bg-gray-200">2</button>
        <button class="px-2.5 py-1 rounded hover:bg-gray-200">3</button>
        <button class="px-2.5 py-1 rounded hover:bg-gray-200">4</button>
        <button class="px-2.5 py-1 rounded hover:bg-gray-200">5</button>
        <span class="px-1">...</span>
        <button class="px-2.5 py-1 rounded hover:bg-gray-200">999</button>
        <button class="px-2 py-1 rounded hover:bg-gray-200 text-gray-400">&gt;</button>
      </div>
    </div>

  </div>
</section>

{{-- Swiper JS --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  // Featured Swiper (banner atas)
  const featuredSwiper = new Swiper('.featuredSwiper', {
    loop: true,
    autoplay: { delay: 3500, disableOnInteraction: false },
    pagination: { el: '.swiper-pagination', clickable: true },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    effect: 'fade',
    fadeEffect: { crossFade: true },
  });

  // Animasi card masuk saat scroll
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry, i) => {
      if (entry.isIntersecting) {
        setTimeout(() => {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
        }, i * 80);
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });

  document.querySelectorAll('.produk-card').forEach(card => {
    card.style.opacity = '0';
    card.style.transform = 'translateY(24px)';
    card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
    observer.observe(card);
  });
</script>
