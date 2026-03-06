@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

<style>
  body { font-family: 'Poppins', sans-serif; }
  .font-dancing { font-family: 'Dancing Script', cursive; }

  /* Swiper hero */
  .swiper { width: 100%; height: 420px; }
  .swiper-slide { position: relative; display: flex; align-items: center; justify-content: center; background-size: cover; background-position: center; }

  /* Swiper aparat */
  .aparatSwiper .swiper-slide { height: auto; display: block; }

  /* Scrollbar sambutan */
  .sambutan-scroll::-webkit-scrollbar { width: 6px; }
  .sambutan-scroll::-webkit-scrollbar-track { background: #e5e7eb; border-radius: 4px; }
  .sambutan-scroll::-webkit-scrollbar-thumb { background: #1D4ED8; border-radius: 4px; }
  .sambutan-scroll::-webkit-scrollbar-thumb:hover { background: #1a5bc0; }

  /* Tab content toggle */
  .tab-content { display: none; }
  .tab-content.active { display: grid; }
</style>

<!-- ===== 1. HERO SLIDER ===== -->
<div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #F59E0B;" class="swiper mySwiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide" style="background-image: url('{{ asset('images/hero-1.jpg') }}'); background-size: cover; background-position: center;">
      <h1 class="font-dancing text-8xl text-white relative z-10" style="text-shadow: 2px 4px 20px rgba(0,0,0,0.4);">Glagahwero</h1>
    </div>
    <div class="swiper-slide" style="background-image: url('{{ asset('images/hero-2.jpg') }}'); background-size: cover; background-position: center;">
      <p class="text-base text-white relative z-10">Jember</p>
    </div>
    <div class="swiper-slide" style="background-image: url('{{ asset('images/hero-3.jpg') }}'); background-size: cover; background-position: center;"></div>
  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-pagination"></div>
</div>

<!-- ===== 2. BERITA DESA ===== -->
<section class="py-12 px-6 bg-[#F4F8FA]">
  <div class="max-w-6xl mx-auto">
    <div class="flex items-center justify-between mb-6">
      <h2 class="text-lg font-bold text-[#0D2B5E] border-l-4 border-[#1D4ED8] pl-3 uppercase tracking-wide">Berita Desa</h2>
      <button class="bg-[#C0392B] hover:bg-red-700 text-white text-sm font-semibold px-4 py-2 rounded transition">Lihat Selengkapnya</button>
    </div>
    <div class="grid grid-cols-4 gap-4">

      {{-- News Card Macro --}}
      @php $newsItems = range(1, 4); @endphp
      @foreach($newsItems as $i)
      <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
        <div class="w-full h-[130px] bg-slate-300" style="background-image: url('{{ asset('images/news.jpg') }}'); background-size: cover; background-position: center;"></div>
        <div class="p-3">
          <p class="text-xs font-semibold text-gray-800 leading-snug mb-2">Gotong Royong dan Pemberdayaan Petugas Kesehatan di Desa Karangbowo: Solusi Tingkatkan Layanan Kesehatan Primer</p>
          <p class="text-xs text-gray-500 leading-relaxed mb-3">Desa terbahagia Gotong Royong Art Per kembanman untuk tetap mendorong pemanfaatan teknologi informas...</p>
          <div class="mt-2 text-right">
            <a href="#" class="text-blue-600 text-xs font-semibold hover:underline">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</section>

<!-- ===== 3. SELAMAT DATANG ===== -->
<section class="py-14 px-6 bg-white">
  <div class="max-w-6xl mx-auto">
    <h2 class="text-3xl font-bold text-center text-[#0D2B5E] mb-10">Selamat Datang</h2>
    <div class="flex gap-10 items-start">

      <!-- Left: Scrollable sambutan -->
      <div class="flex-1">
        <div class="flex items-center gap-3 mb-5">
          <div class="w-1 h-6 bg-[#1D4ED8] rounded"></div>
          <h3 class="text-sm font-bold text-[#0D2B5E] uppercase tracking-widest">Sambutan Kepala Desa Glagahwero</h3>
        </div>

        <div class="sambutan-scroll bg-white rounded-lg h-[450px] overflow-y-auto pr-2">
          <div class="text-sm text-black leading-relaxed space-y-3 text-justify pr-4">
            <p>Assalamualaikum warahmatullah wabarakatuh,<br>Salam sejahtera bagi kita semua.</p>
            <p>Puji syukur kita panjatkan ke hadirat Allah SWT atas segala rahmat dan karunia-Nya, sehingga Website Resmi Desa Glagahwero ini hadir sebagai media informasi dan komunikasi bagi seluruh masyarakat.</p>
            <p>Sebagai Kepala Desa Glagahwero, saya menyambut baik hadirnya website ini sebagai langkah nyata dalam meningkatkan transparansi, pelayanan publik, dan partisipasi masyarakat. Kami berkomitmen untuk terus mendorong pemanfaatan teknologi informasi guna mendukung tata kelola pemerintahan desa yang lebih efektif, terbuka, dan responsif terhadap kebutuhan warga.</p>
            <p>Melalui website ini, masyarakat dapat memperoleh informasi mengenai program kerja, kegiatan desa, potensi wilayah, serta berbagai layanan administrasi secara lebih mudah dan cepat. Kami berharap platform ini tidak hanya menjadi sarana penyampaian informasi, tetapi juga menjadi ruang kolaboratif antara pemerintah desa dan masyarakat dalam membangun Desa Glagahwero yang maju, mandiri, dan sejahtera.</p>
            <p>Terima kasih atas dukungan dan partisipasi seluruh masyarakat.</p>
            <p>Wassalamualaikum warahmatullahi wabarakatuh.</p>
            <p class="font-semibold text-[#0D2B5E] mt-2">EKI JULIO</p>
          </div>
        </div>
      </div>

      <!-- Right: Photo Frame -->
      <div class="relative w-[220px] h-[260px] flex-shrink-0 mt-10">
        <div class="absolute bottom-0 right-0 w-[180px] h-[220px] bg-slate-200 rounded overflow-hidden">
          <img src="{{ asset('images/news.jpg') }}" alt="Kepala Desa" class="w-full h-full object-cover">
        </div>
        <!-- Top-left accent -->
        <div class="absolute top-0 left-0 w-[50px] h-[50px] border-t-[5px] border-l-[5px] border-[#1D4ED8]"></div>
        <!-- Bottom-right accent -->
        <div class="absolute bottom-[-8px] right-[-8px] w-[50px] h-[50px] border-b-[5px] border-r-[5px] border-[#1D4ED8]"></div>
      </div>

    </div>
  </div>
</section>

<!-- ===== 4. APARAT PEMERINTAH DESA ===== -->
<section class="py-14 px-6 bg-gradient-to-b from-slate-50 to-slate-200">
  <div class="max-w-6xl mx-auto">
    <h2 class="text-3xl font-bold text-center text-[#0D2B5E] mb-10">Aparat Pemerintah Desa</h2>

    <div class="swiper aparatSwiper">
      <div class="swiper-wrapper">
        @foreach(range(1, 20) as $i)
        <div class="swiper-slide">
          <div class="bg-white rounded-xl overflow-hidden shadow-md hover:-translate-y-1 transition-transform duration-200 min-w-[200px]">
            <div class="w-full h-[180px] bg-slate-200 flex items-center justify-center">
              <svg class="w-16 h-16 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
              </svg>
            </div>
            <div class="p-3 bg-[#0D2B5E] text-white">
              <p class="text-sm font-semibold">Nama Lengkap</p>
              <p class="text-xs text-blue-200">Jabatan</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <div class="flex justify-center mt-8">
      <button class="bg-[#C0392B] hover:bg-red-700 text-white font-semibold px-8 py-3 rounded-full transition text-sm">Lihat Data Selengkapnya</button>
    </div>
  </div>
</section>

<!-- ===== 5. PRODUK DESA ===== -->
<section class="py-12 px-6 bg-white">
  <div class="max-w-6xl mx-auto">

    <!-- Tab Nav -->
    <div class="inline-flex items-center border border-gray-300 rounded-full p-1 gap-0.5 bg-white mb-6">
      <button class="tab-btn px-[22px] py-[7px] rounded-full border-none cursor-pointer font-[Poppins] text-sm font-medium transition-all bg-[#1D4ED8] text-white" onclick="switchTab('umkm', this)">UMKM</button>
      <button class="tab-btn px-[22px] py-[7px] rounded-full border-none cursor-pointer font-[Poppins] text-sm font-medium transition-all bg-transparent text-gray-700 hover:bg-slate-100" onclick="switchTab('wisata', this)">Tempat Wisata</button>
      <button class="tab-btn px-[22px] py-[7px] rounded-full border-none cursor-pointer font-[Poppins] text-sm font-medium transition-all bg-transparent text-gray-700 hover:bg-slate-100" onclick="switchTab('pakaian', this)">Pakaian Daerah</button>
      <button class="tab-btn px-[22px] py-[7px] rounded-full border-none cursor-pointer font-[Poppins] text-sm font-medium transition-all bg-transparent text-gray-700 hover:bg-slate-100" onclick="switchTab('lagu', this)">Lagu Daerah</button>
      <button class="tab-btn px-[22px] py-[7px] rounded-full border-none cursor-pointer font-[Poppins] text-sm font-medium transition-all bg-transparent text-gray-700 hover:bg-slate-100" onclick="switchTab('adat', this)">Adat Istiadat</button>
    </div>

    {{-- Tab UMKM --}}
    <div class="tab-content active grid-cols-4 gap-4" id="tab-umkm">
      @foreach(range(1,8) as $i)
      <div class="rounded-xl overflow-hidden shadow-md relative bg-slate-200">
        <div class="w-full h-[140px] bg-gradient-to-br from-amber-200 to-orange-300 flex items-center justify-center">
          <svg class="w-10 h-10 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 3"/></svg>
        </div>
        <span class="absolute top-2 right-2 bg-[#1D4ED8] text-white text-[0.6rem] font-semibold px-1.5 py-0.5 rounded">PRODUK DESA</span>
        <div class="px-2.5 pt-2 pb-2.5 bg-white">
          <p class="text-xs text-gray-400">Telur Ayam</p>
          <p class="text-xs font-semibold text-[#1D4ED8]">Komoditi Telur Ayam</p>
        </div>
      </div>
      @endforeach
    </div>

    {{-- Tab Wisata --}}
    <div class="tab-content grid-cols-4 gap-4" id="tab-wisata">
      @foreach(range(1,4) as $i)
      <div class="rounded-xl overflow-hidden shadow-md relative bg-slate-200">
        <div class="w-full h-[140px] bg-gradient-to-br from-green-200 to-teal-300 flex items-center justify-center">
          <svg class="w-10 h-10 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
        </div>
        <span class="absolute top-2 right-2 bg-[#1D4ED8] text-white text-[0.6rem] font-semibold px-1.5 py-0.5 rounded">WISATA</span>
        <div class="px-2.5 pt-2 pb-2.5 bg-white">
          <p class="text-xs text-gray-400">Wisata Alam</p>
          <p class="text-xs font-semibold text-[#1D4ED8]">Tempat Wisata Desa</p>
        </div>
      </div>
      @endforeach
    </div>

    {{-- Tab Pakaian --}}
    <div class="tab-content grid-cols-4 gap-4" id="tab-pakaian">
      @foreach(range(1,4) as $i)
      <div class="rounded-xl overflow-hidden shadow-md relative bg-slate-200">
        <div class="w-full h-[140px] bg-gradient-to-br from-purple-200 to-pink-300 flex items-center justify-center">
          <svg class="w-10 h-10 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 2l5 3 5-3v6l-5 3-5-3V2z"/></svg>
        </div>
        <span class="absolute top-2 right-2 bg-[#1D4ED8] text-white text-[0.6rem] font-semibold px-1.5 py-0.5 rounded">BUDAYA</span>
        <div class="px-2.5 pt-2 pb-2.5 bg-white">
          <p class="text-xs text-gray-400">Pakaian Tradisional</p>
          <p class="text-xs font-semibold text-[#1D4ED8]">Pakaian Daerah Desa</p>
        </div>
      </div>
      @endforeach
    </div>

    {{-- Tab Lagu --}}
    <div class="tab-content grid-cols-4 gap-4" id="tab-lagu">
      @foreach(range(1,4) as $i)
      <div class="rounded-xl overflow-hidden shadow-md relative bg-slate-200">
        <div class="w-full h-[140px] bg-gradient-to-br from-yellow-200 to-amber-300 flex items-center justify-center">
          <svg class="w-10 h-10 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/></svg>
        </div>
        <span class="absolute top-2 right-2 bg-[#1D4ED8] text-white text-[0.6rem] font-semibold px-1.5 py-0.5 rounded">BUDAYA</span>
        <div class="px-2.5 pt-2 pb-2.5 bg-white">
          <p class="text-xs text-gray-400">Musik Tradisional</p>
          <p class="text-xs font-semibold text-[#1D4ED8]">Lagu Daerah Desa</p>
        </div>
      </div>
      @endforeach
    </div>

    {{-- Tab Adat --}}
    <div class="tab-content grid-cols-4 gap-4" id="tab-adat">
      @foreach(range(1,4) as $i)
      <div class="rounded-xl overflow-hidden shadow-md relative bg-slate-200">
        <div class="w-full h-[140px] bg-gradient-to-br from-red-200 to-rose-300 flex items-center justify-center">
          <svg class="w-10 h-10 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0"/></svg>
        </div>
        <span class="absolute top-2 right-2 bg-[#1D4ED8] text-white text-[0.6rem] font-semibold px-1.5 py-0.5 rounded">BUDAYA</span>
        <div class="px-2.5 pt-2 pb-2.5 bg-white">
          <p class="text-xs text-gray-400">Tradisi Lokal</p>
          <p class="text-xs font-semibold text-[#1D4ED8]">Adat Istiadat Desa</p>
        </div>
      </div>
      @endforeach
    </div>

  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".mySwiper", {
    speed: 600,
    autoplay: { delay: 4000 },
    pagination: { el: ".swiper-pagination", clickable: true },
    navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
  });

  var aparatSwiper = new Swiper(".aparatSwiper", {
    slidesPerView: 4,
    spaceBetween: 16,
    pagination: {
      el: ".aparatSwiper .swiper-pagination",
      clickable: true,
    },
  });

  const tabIds = ['umkm', 'wisata', 'pakaian', 'lagu', 'adat'];
  function switchTab(id, btn) {
    tabIds.forEach(t => document.getElementById('tab-' + t).classList.remove('active'));
    document.querySelectorAll('.tab-btn').forEach(b => {
      b.classList.remove('bg-[#1D4ED8]', 'text-white');
      b.classList.add('bg-transparent', 'text-gray-700');
    });
    document.getElementById('tab-' + id).classList.add('active');
    btn.classList.remove('bg-transparent', 'text-gray-700');
    btn.classList.add('bg-[#1D4ED8]', 'text-white');
  }
</script>

@endsection
