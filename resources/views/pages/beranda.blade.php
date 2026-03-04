{{-- beranda.blade.php - Konten halaman beranda tanpa header & footer --}}

<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Dancing+Script:wght@700&display=swap');
  :root {
    --blue-dark: #0D2B5E;
    --blue-main: #1D4ED8;
  }
  body { font-family: 'Poppins', sans-serif; }

  /* HERO SLIDER */
  .hero-slider { position: relative; overflow: hidden; height: 420px; background: #0D2B5E; }
  .hero-slide { position: absolute; inset: 0; opacity: 0; transition: opacity 0.8s ease; background-size: cover; background-position: center; }
  .hero-slide.active { opacity: 1; }
  .hero-slide-1 { background: linear-gradient(135deg, #0D2B5E 0%, #1D4ED8 50%, #3b6fd4 100%); }
  .hero-slide-2 { background: linear-gradient(135deg, #1a3a6b 0%, #2563EB 100%); }
  .hero-slide-3 { background: linear-gradient(135deg, #0a1f4e 0%, #1D4ED8 100%); }
  .hero-title { font-family: 'Dancing Script', cursive; font-size: 5rem; color: white; text-shadow: 2px 4px 20px rgba(0,0,0,0.4); }
  .hero-dots { display: flex; gap: 8px; justify-content: center; }
  .hero-dot { width: 12px; height: 12px; border-radius: 50%; background: rgba(255,255,255,0.4); cursor: pointer; transition: background 0.3s; }
  .hero-dot.active { background: #F59E0B; }

  /* BERITA */
  .news-card { background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.08); transition: transform 0.2s, box-shadow 0.2s; }
  .news-card:hover { transform: translateY(-4px); box-shadow: 0 8px 20px rgba(0,0,0,0.12); }
  .news-img { width: 100%; height: 130px; object-fit: cover; background: #cbd5e1; display: flex; align-items: center; justify-content: center; }

  /* SAMBUTAN */
  .photo-frame { position: relative; width: 220px; height: 260px; flex-shrink: 0; }
  .photo-frame .frame-bg { position: absolute; bottom: 0; right: 0; width: 180px; height: 220px; background: #e2e8f0; border-radius: 4px; }
  .photo-frame .frame-accent-1 { position: absolute; top: 0; left: 0; width: 50px; height: 50px; border-top: 5px solid var(--blue-main); border-left: 5px solid var(--blue-main); }
  .photo-frame .frame-accent-2 { position: absolute; bottom: -8px; right: -8px; width: 50px; height: 50px; border-bottom: 5px solid var(--blue-main); border-right: 5px solid var(--blue-main); }

  /* APARAT */
  .aparat-section { background: linear-gradient(180deg, #f8fafc 0%, #e2e8f0 100%); }
  .aparat-card { background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 2px 12px rgba(0,0,0,0.1); transition: transform 0.2s; min-width: 200px; }
  .aparat-card:hover { transform: translateY(-4px); }
  .aparat-img { width: 100%; height: 180px; background: #e2e8f0; display: flex; align-items: center; justify-content: center; }
  .aparat-slider { overflow: hidden; }
  .aparat-track { display: flex; gap: 16px; transition: transform 0.4s ease; }
  .slider-btn { width: 36px; height: 36px; border-radius: 50%; background: white; border: none; box-shadow: 0 2px 8px rgba(0,0,0,0.15); cursor: pointer; display: flex; align-items: center; justify-content: center; transition: background 0.2s; }
  .slider-btn:hover { background: var(--blue-main); color: white; }

  /* PRODUK DESA */
  .tab-wrapper { display: inline-flex; align-items: center; border: 1.5px solid #d1d5db; border-radius: 999px; padding: 4px; gap: 2px; background: white; }
  .tab-btn { padding: 7px 22px; border-radius: 999px; border: none; cursor: pointer; font-family: 'Poppins', sans-serif; font-size: 0.875rem; font-weight: 500; transition: all 0.2s; background: transparent; color: #374151; }
  .tab-btn.active { background: var(--blue-main); color: white; }
  .tab-btn:not(.active):hover { background: #f1f5f9; }
  .produk-card { border-radius: 10px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1); position: relative; background: #e2e8f0; }
  .produk-img { width: 100%; height: 140px; display: flex; align-items: center; justify-content: center; }
  .produk-badge { position: absolute; top: 8px; right: 8px; background: var(--blue-main); color: white; font-size: 0.6rem; font-weight: 600; padding: 2px 6px; border-radius: 4px; }
  .produk-info { padding: 8px 10px 10px; background: white; }
  .tab-content { display: none; }
  .tab-content.active { display: grid; }
</style>

<!-- ===== 1. HERO SLIDER ===== -->
<section class="hero-slider">
    <div class="hero-slide hero-slide-1 active" style="background-image: url('{{ asset('images/hero-1.jpg') }}'); background-size: cover; background-position: center;">
        <div class="flex flex-col items-center justify-center h-full gap-4 px-4 text-center">
            <h1 class="hero-title">Glagahwero</h1>
        </div>
    </div>
    <div class="hero-slide hero-slide-2" style="background-image: url('{{ asset('images/hero-2.jpg') }}'); background-size: cover; background-position: center;">
        <div class="flex flex-col items-center justify-center h-full gap-4 px-4 text-center">
            <h1 class="hero-title">Glagahwero</h1>
        </div>
    </div>
    <div class="hero-slide hero-slide-3" style="background-image: url('{{ asset('images/hero-3.jpg') }}'); background-size: cover; background-position: center;">
        <div class="flex flex-col items-center justify-center h-full gap-4 px-4 text-center">
            <h1 class="hero-title">Glagahwero</h1>
        </div>
    </div>
    <div class="absolute bottom-5 left-0 right-0 flex justify-center">
        <div class="hero-dots">
            <div class="hero-dot active" onclick="goToSlide(0)"></div>
            <div class="hero-dot" onclick="goToSlide(1)"></div>
            <div class="hero-dot" onclick="goToSlide(2)"></div>
        </div>
    </div>
</section>

<!-- ===== 2. BERITA DESA ===== -->
<section class="py-12 px-6 bg-[#F4F8FA]">
  <div class="max-w-6xl mx-auto">
    <div class="flex items-center justify-between mb-6">
      <h2 class="text-lg font-bold text-[#0D2B5E] border-l-4 border-[#1D4ED8] pl-3 uppercase tracking-wide">Berita Desa</h2>
      <button class="bg-[#C0392B] hover:bg-red-700 text-white text-sm font-semibold px-4 py-2 rounded transition">Lihat Selengkapnya</button>
    </div>
    <div class="grid grid-cols-4 gap-4">

      {{-- Card 1 --}}
      <div class="news-card">
        <div class="news-img" style="background-image: url('{{ asset('images/news.jpg') }}'); background-size: cover; background-position: center;">
        </div>
        <div class="p-3">
          <p class="text-xs font-semibold text-gray-800 leading-snug mb-2">Gotong Royong dan Pemberdayaan Petugas Kesehatan di Desa Karangbowo: Solusi Tingkatkan Layanan Kesehatan Primer</p>
          <p class="text-xs text-gray-500 leading-relaxed mb-3">Desa terbahagia Gotong Royong Art Per kembanman untuk tetap mendorong pemanfaatan teknologi informas...</p>
          <div class="mt-2 text-right">
            <a href="#" class="text-blue-600 text-xs font-semibold hover:underline">Baca Selengkapnya</a>
          </div>
        </div>
      </div>

      {{-- Card 2 --}}
      <div class="news-card">
        <div class="news-img" style="background-image: url('{{ asset('images/news.jpg') }}'); background-size: cover; background-position: center;">
        </div>
        <div class="p-3">
          <p class="text-xs font-semibold text-gray-800 leading-snug mb-2">Gotong Royong dan Pemberdayaan Petugas Kesehatan di Desa Karangbowo: Solusi Tingkatkan Layanan Kesehatan Primer</p>
          <p class="text-xs text-gray-500 leading-relaxed mb-3">Desa terbahagia Gotong Royong Art Per kembanman untuk tetap mendorong pemanfaatan teknologi informas...</p>
          <div class="mt-2 text-right">
            <a href="#" class="text-blue-600 text-xs font-semibold hover:underline">Baca Selengkapnya</a>
          </div>
        </div>
      </div>

      {{-- Card 3 --}}
      <div class="news-card">
        <div class="news-img" style="background-image: url('{{ asset('images/news.jpg') }}'); background-size: cover; background-position: center;">
        </div>
        <div class="p-3">
          <p class="text-xs font-semibold text-gray-800 leading-snug mb-2">Gotong Royong dan Pemberdayaan Petugas Kesehatan di Desa Karangbowo: Solusi Tingkatkan Layanan Kesehatan Primer</p>
          <p class="text-xs text-gray-500 leading-relaxed mb-3">Desa terbahagia Gotong Royong Art Per kembanman untuk tetap mendorong pemanfaatan teknologi informas...</p>
          <div class="mt-2 text-right">
            <a href="#" class="text-blue-600 text-xs font-semibold hover:underline">Baca Selengkapnya</a>
          </div>
        </div>
      </div>

      {{-- Card 4 --}}
      <div class="news-card">
        <div class="news-img" style="background-image: url('{{ asset('images/news.jpg') }}'); background-size: cover; background-position: center;">
        </div>
        <div class="p-3">
          <p class="text-xs font-semibold text-gray-800 leading-snug mb-2">Gotong Royong dan Pemberdayaan Petugas Kesehatan di Desa Karangbowo: Solusi Tingkatkan Layanan Kesehatan Primer</p>
          <p class="text-xs text-gray-500 leading-relaxed mb-3">Desa terbahagia Gotong Royong Art Per kembanman untuk tetap mendorong pemanfaatan teknologi informas...</p>
          <div class="mt-2 text-right">
            <a href="#" class="text-blue-600 text-xs font-semibold hover:underline">Baca Selengkapnya</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ===== 3. SELAMAT DATANG ===== -->
<section class="py-14 px-6 bg-white">
  <div class="max-w-6xl mx-auto">
    <h2 class="text-3xl font-bold text-center text-[#0D2B5E] mb-10">Selamat Datang</h2>
    <div class="flex gap-10 items-start">
    <div class="flex-1">
      <div class="flex items-center gap-3 mb-5">
        <div class="w-1 h-6 bg-[#1D4ED8] rounded"></div>
        <h3 class="text-sm font-bold text-[#0D2B5E] uppercase tracking-widest">Sambutan Kepala Desa &nbsp; Glagahwero</h3>
      </div>
      <div class="text-sm text-gray-700 leading-relaxed space-y-3 text-justify">
        <p>Assalamualaikum warahmatullah wabarakatuh,<br>Salam sejahtera bagi kita semua.</p>
        <p>Puji syukur kita panjatkan ke hadirat Allah SWT atas segala rahmat dan karunia-Nya, sehingga Website Resmi Desa Sumbersari ini hadir sebagai media informasi dan komunikasi bagi seluruh masyarakat.</p>
        <p>Sebagai Kepala Desa Sumbersari, saya menyambut baik hadirnya website ini sebagai langkah nyata dalam meningkatkan transparansi, pelayanan publik, dan partisipasi masyarakat. Kami berkomitmen untuk terus mendorong pemanfaatan teknologi informasi guna mendukung tata kelola pemerintahan desa yang lebih efektif, terbuka, dan responsif terhadap kebutuhan warga.</p>
        <p>Melalui website ini, masyarakat dapat memperoleh informasi mengenai program kerja, kegiatan desa, potensi wilayah, serta berbagai layanan administrasi secara lebih mudah dan cepat. Kami berharap platform ini tidak hanya menjadi sarana penyampaian informasi, tetapi juga menjadi ruang kolaboratif antara pemerintah desa dan masyarakat dalam membangun Desa Sumbersari yang maju, mandiri, dan sejahtera.</p>
        <p>Terima kasih atas dukungan dan partisipasi seluruh masyarakat.</p>
        <p>Wassalamualaikum warahmatullahi wabarakatuh.</p>
        <p class="font-semibold text-[#0D2B5E] mt-2">EKI JULIO</p>
      </div>
    </div>
    <div class="photo-frame mt-10">
      <div class="frame-bg flex items-center justify-center">
        <img src="{{ asset('images/news.jpg') }}" alt="Kepala Desa" class="w-full h-full object-cover rounded">
      </div>
      <div class="frame-accent-1"></div>
      <div class="frame-accent-2"></div>
    </div>
    </div>
  </div>
</section>

<!-- ===== 4. APARAT PEMERINTAH DESA ===== -->
<section class="aparat-section py-14 px-6 bg-[#F4F8FD]">
  <div class="max-w-6xl mx-auto">
    <h2 class="text-3xl font-bold text-center text-[#0D2B5E] mb-10">Aparat Pemerintah Desa</h2>
    <div class="relative flex items-center gap-4">
      <button class="slider-btn flex-shrink-0" onclick="slideAparat(-1)">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
      </button>
      <div class="aparat-slider flex-1 overflow-hidden">
        <div class="aparat-track" id="aparatTrack">

          <div class="aparat-card flex-shrink-0" style="width: calc(25% - 12px)">
            <div class="aparat-img">
              <svg class="w-16 h-16 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
            </div>
            <div class="p-3 bg-[#0D2B5E] text-white">
              <p class="text-sm font-semibold">Nama Lengkap</p>
              <p class="text-xs text-blue-200">Jabatan</p>
            </div>
          </div>

          <div class="aparat-card flex-shrink-0" style="width: calc(25% - 12px)">
            <div class="aparat-img">
              <svg class="w-16 h-16 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
            </div>
            <div class="p-3 bg-[#0D2B5E] text-white">
              <p class="text-sm font-semibold">Nama Lengkap</p>
              <p class="text-xs text-blue-200">Kepala Desa</p>
            </div>
          </div>

          <div class="aparat-card flex-shrink-0" style="width: calc(25% - 12px)">
            <div class="aparat-img">
              <svg class="w-16 h-16 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
            </div>
            <div class="p-3 bg-[#0D2B5E] text-white">
              <p class="text-sm font-semibold">Nama Lengkap</p>
              <p class="text-xs text-blue-200">Kepala Desa</p>
            </div>
          </div>

          <div class="aparat-card flex-shrink-0" style="width: calc(25% - 12px)">
            <div class="aparat-img">
              <svg class="w-16 h-16 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
            </div>
            <div class="p-3 bg-[#0D2B5E] text-white">
              <p class="text-sm font-semibold">Nama Lengkap</p>
              <p class="text-xs text-blue-200">Kepala Desa</p>
            </div>
          </div>

          <div class="aparat-card flex-shrink-0" style="width: calc(25% - 12px)">
            <div class="aparat-img">
              <svg class="w-16 h-16 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
            </div>
            <div class="p-3 bg-[#0D2B5E] text-white">
              <p class="text-sm font-semibold">Nama Lengkap</p>
              <p class="text-xs text-blue-200">Kepala Desa</p>
            </div>
          </div>

          <div class="aparat-card flex-shrink-0" style="width: calc(25% - 12px)">
            <div class="aparat-img">
              <svg class="w-16 h-16 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
            </div>
            <div class="p-3 bg-[#0D2B5E] text-white">
              <p class="text-sm font-semibold">Nama Lengkap</p>
              <p class="text-xs text-blue-200">Kepala Desa</p>
            </div>
          </div>

        </div>
      </div>
      <button class="slider-btn flex-shrink-0" onclick="slideAparat(1)">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
      </button>
    </div>
    <div class="flex justify-center mt-8">
      <button class="bg-[#E53E3E] hover:bg-red-700 text-white font-semibold px-8 py-3 rounded-full transition text-sm">Lihat Data Selengkapnya</button>
    </div>
  </div>
</section>

<!-- ===== 5. PRODUK DESA ===== -->
<section class="py-12 px-6 bg-white">
  <div class="max-w-6xl mx-auto">
    <div class="tab-wrapper mb-6">
      <button class="tab-btn active" onclick="switchTab('umkm', this)">UMKM</button>
      <button class="tab-btn" onclick="switchTab('wisata', this)">Tempat Wisata</button>
      <button class="tab-btn" onclick="switchTab('pakaian', this)">Pakaian Daerah</button>
      <button class="tab-btn" onclick="switchTab('lagu', this)">Lagu Daerah</button>
      <button class="tab-btn" onclick="switchTab('adat', this)">Adat Istiadat</button>
    </div>

    {{-- Tab UMKM --}}
    <div class="tab-content active grid-cols-4 gap-4" id="tab-umkm">
      <div class="produk-card">
        <div class="produk-img bg-gradient-to-br from-amber-200 to-orange-300"><svg class="w-10 h-10 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 3"/></svg></div>
        <div class="produk-badge">PRODUK DESA</div>
        <div class="produk-info"><p class="text-xs text-gray-400">Telur Ayam</p><p class="text-xs font-semibold text-[#1D4ED8]">Komoditi Telur Ayam</p></div>
      </div>
      <div class="produk-card">
        <div class="produk-img bg-gradient-to-br from-amber-200 to-orange-300"><svg class="w-10 h-10 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 3"/></svg></div>
        <div class="produk-badge">PRODUK DESA</div>
        <div class="produk-info"><p class="text-xs text-gray-400">Telur Ayam</p><p class="text-xs font-semibold text-[#1D4ED8]">Komoditi Telur Ayam</p></div>
      </div>
      <div class="produk-card">
        <div class="produk-img bg-gradient-to-br from-amber-200 to-orange-300"><svg class="w-10 h-10 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 3"/></svg></div>
        <div class="produk-badge">PRODUK DESA</div>
        <div class="produk-info"><p class="text-xs text-gray-400">Telur Ayam</p><p class="text-xs font-semibold text-[#1D4ED8]">Komoditi Telur Ayam</p></div>
      </div>
      <div class="produk-card">
        <div class="produk-img bg-gradient-to-br from-amber-200 to-orange-300"><svg class="w-10 h-10 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 3"/></svg></div>
        <div class="produk-badge">PRODUK DESA</div>
        <div class="produk-info"><p class="text-xs text-gray-400">Telur Ayam</p><p class="text-xs font-semibold text-[#1D4ED8]">Komoditi Telur Ayam</p></div>
      </div>
      <div class="produk-card">
        <div class="produk-img bg-gradient-to-br from-amber-200 to-orange-300"><svg class="w-10 h-10 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 3"/></svg></div>
        <div class="produk-badge">PRODUK DESA</div>
        <div class="produk-info"><p class="text-xs text-gray-400">Telur Ayam</p><p class="text-xs font-semibold text-[#1D4ED8]">Komoditi Telur Ayam</p></div>
      </div>
      <div class="produk-card">
        <div class="produk-img bg-gradient-to-br from-amber-200 to-orange-300"><svg class="w-10 h-10 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 3"/></svg></div>
        <div class="produk-badge">PRODUK DESA</div>
        <div class="produk-info"><p class="text-xs text-gray-400">Telur Ayam</p><p class="text-xs font-semibold text-[#1D4ED8]">Komoditi Telur Ayam</p></div>
      </div>
      <div class="produk-card">
        <div class="produk-img bg-gradient-to-br from-amber-200 to-orange-300"><svg class="w-10 h-10 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 3"/></svg></div>
        <div class="produk-badge">PRODUK DESA</div>
        <div class="produk-info"><p class="text-xs text-gray-400">Telur Ayam</p><p class="text-xs font-semibold text-[#1D4ED8]">Komoditi Telur Ayam</p></div>
      </div>
      <div class="produk-card">
        <div class="produk-img bg-gradient-to-br from-amber-200 to-orange-300"><svg class="w-10 h-10 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 3"/></svg></div>
        <div class="produk-badge">PRODUK DESA</div>
        <div class="produk-info"><p class="text-xs text-gray-400">Telur Ayam</p><p class="text-xs font-semibold text-[#1D4ED8]">Komoditi Telur Ayam</p></div>
      </div>
    </div>

    {{-- Tab Wisata --}}
    <div class="tab-content grid-cols-4 gap-4" id="tab-wisata">
      <div class="produk-card">
        <div class="produk-img bg-gradient-to-br from-green-200 to-teal-300"><svg class="w-10 h-10 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg></div>
        <div class="produk-badge">WISATA</div>
        <div class="produk-info"><p class="text-xs text-gray-400">Wisata Alam</p><p class="text-xs font-semibold text-[#1D4ED8]">Tempat Wisata Desa</p></div>
      </div>
      <div class="produk-card">
        <div class="produk-img bg-gradient-to-br from-green-200 to-teal-300"><svg class="w-10 h-10 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg></div>
        <div class="produk-badge">WISATA</div>
        <div class="produk-info"><p class="text-xs text-gray-400">Wisata Alam</p><p class="text-xs font-semibold text-[#1D4ED8]">Tempat Wisata Desa</p></div>
      </div>
      <div class="produk-card">
        <div class="produk-img bg-gradient-to-br from-green-200 to-teal-300"><svg class="w-10 h-10 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg></div>
        <div class="produk-badge">WISATA</div>
        <div class="produk-info"><p class="text-xs text-gray-400">Wisata Alam</p><p class="text-xs font-semibold text-[#1D4ED8]">Tempat Wisata Desa</p></div>
      </div>
      <div class="produk-card">
        <div class="produk-img bg-gradient-to-br from-green-200 to-teal-300"><svg class="w-10 h-10 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg></div>
        <div class="produk-badge">WISATA</div>
        <div class="produk-info"><p class="text-xs text-gray-400">Wisata Alam</p><p class="text-xs font-semibold text-[#1D4ED8]">Tempat Wisata Desa</p></div>
      </div>
    </div>

    {{-- Tab Pakaian --}}
    <div class="tab-content grid-cols-4 gap-4" id="tab-pakaian">
      <div class="produk-card">
        <div class="produk-img bg-gradient-to-br from-purple-200 to-pink-300"><svg class="w-10 h-10 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 2l5 3 5-3v6l-5 3-5-3V2z"/></svg></div>
        <div class="produk-badge">BUDAYA</div>
        <div class="produk-info"><p class="text-xs text-gray-400">Pakaian Tradisional</p><p class="text-xs font-semibold text-[#1D4ED8]">Pakaian Daerah Desa</p></div>
      </div>
      <div class="produk-card">
        <div class="produk-img bg-gradient-to-br from-purple-200 to-pink-300"><svg class="w-10 h-10 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 2l5 3 5-3v6l-5 3-5-3V2z"/></svg></div>
        <div class="produk-badge">BUDAYA</div>
        <div class="produk-info"><p class="text-xs text-gray-400">Pakaian Tradisional</p><p class="text-xs font-semibold text-[#1D4ED8]">Pakaian Daerah Desa</p></div>
      </div>
      <div class="produk-card">
        <div class="produk-img bg-gradient-to-br from-purple-200 to-pink-300"><svg class="w-10 h-10 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 2l5 3 5-3v6l-5 3-5-3V2z"/></svg></div>
        <div class="produk-badge">BUDAYA</div>
        <div class="produk-info"><p class="text-xs text-gray-400">Pakaian Tradisional</p><p class="text-xs font-semibold text-[#1D4ED8]">Pakaian Daerah Desa</p></div>
      </div>
      <div class="produk-card">
        <div class="produk-img bg-gradient-to-br from-purple-200 to-pink-300"><svg class="w-10 h-10 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 2l5 3 5-3v6l-5 3-5-3V2z"/></svg></div>
        <div class="produk-badge">BUDAYA</div>
        <div class="produk-info"><p class="text-xs text-gray-400">Pakaian Tradisional</p><p class="text-xs font-semibold text-[#1D4ED8]">Pakaian Daerah Desa</p></div>
      </div>
    </div>

    {{-- Tab Lagu --}}
    <div class="tab-content grid-cols-4 gap-4" id="tab-lagu">
      <div class="produk-card">
        <div class="produk-img bg-gradient-to-br from-yellow-200 to-amber-300"><svg class="w-10 h-10 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/></svg></div>
        <div class="produk-badge">BUDAYA</div>
        <div class="produk-info"><p class="text-xs text-gray-400">Musik Tradisional</p><p class="text-xs font-semibold text-[#1D4ED8]">Lagu Daerah Desa</p></div>
      </div>
      <div class="produk-card">
        <div class="produk-img bg-gradient-to-br from-yellow-200 to-amber-300"><svg class="w-10 h-10 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/></svg></div>
        <div class="produk-badge">BUDAYA</div>
        <div class="produk-info"><p class="text-xs text-gray-400">Musik Tradisional</p><p class="text-xs font-semibold text-[#1D4ED8]">Lagu Daerah Desa</p></div>
      </div>
      <div class="produk-card">
        <div class="produk-img bg-gradient-to-br from-yellow-200 to-amber-300"><svg class="w-10 h-10 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/></svg></div>
        <div class="produk-badge">BUDAYA</div>
        <div class="produk-info"><p class="text-xs text-gray-400">Musik Tradisional</p><p class="text-xs font-semibold text-[#1D4ED8]">Lagu Daerah Desa</p></div>
      </div>
      <div class="produk-card">
        <div class="produk-img bg-gradient-to-br from-yellow-200 to-amber-300"><svg class="w-10 h-10 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/></svg></div>
        <div class="produk-badge">BUDAYA</div>
        <div class="produk-info"><p class="text-xs text-gray-400">Musik Tradisional</p><p class="text-xs font-semibold text-[#1D4ED8]">Lagu Daerah Desa</p></div>
      </div>
    </div>

    {{-- Tab Adat --}}
    <div class="tab-content grid-cols-4 gap-4" id="tab-adat">
      <div class="produk-card">
        <div class="produk-img bg-gradient-to-br from-red-200 to-rose-300"><svg class="w-10 h-10 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0"/></svg></div>
        <div class="produk-badge">BUDAYA</div>
        <div class="produk-info"><p class="text-xs text-gray-400">Tradisi Lokal</p><p class="text-xs font-semibold text-[#1D4ED8]">Adat Istiadat Desa</p></div>
      </div>
      <div class="produk-card">
        <div class="produk-img bg-gradient-to-br from-red-200 to-rose-300"><svg class="w-10 h-10 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0"/></svg></div>
        <div class="produk-badge">BUDAYA</div>
        <div class="produk-info"><p class="text-xs text-gray-400">Tradisi Lokal</p><p class="text-xs font-semibold text-[#1D4ED8]">Adat Istiadat Desa</p></div>
      </div>
      <div class="produk-card">
        <div class="produk-img bg-gradient-to-br from-red-200 to-rose-300"><svg class="w-10 h-10 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0"/></svg></div>
        <div class="produk-badge">BUDAYA</div>
        <div class="produk-info"><p class="text-xs text-gray-400">Tradisi Lokal</p><p class="text-xs font-semibold text-[#1D4ED8]">Adat Istiadat Desa</p></div>
      </div>
      <div class="produk-card">
        <div class="produk-img bg-gradient-to-br from-red-200 to-rose-300"><svg class="w-10 h-10 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0"/></svg></div>
        <div class="produk-badge">BUDAYA</div>
        <div class="produk-info"><p class="text-xs text-gray-400">Tradisi Lokal</p><p class="text-xs font-semibold text-[#1D4ED8]">Adat Istiadat Desa</p></div>
      </div>
    </div>

  </div>
</section>

<script>
  // ===== HERO SLIDER =====
  let currentSlide = 0;
  const slides = document.querySelectorAll('.hero-slide');
  const dots = document.querySelectorAll('.hero-dot');

  function goToSlide(n) {
    slides[currentSlide].classList.remove('active');
    dots[currentSlide].classList.remove('active');
    currentSlide = n;
    slides[currentSlide].classList.add('active');
    dots[currentSlide].classList.add('active');
  }

  setInterval(() => {
    goToSlide((currentSlide + 1) % slides.length);
  }, 4000);

  // ===== APARAT SLIDER =====
  let aparatIndex = 0;
  function slideAparat(dir) {
    const track = document.getElementById('aparatTrack');
    const cards = track.children;
    const maxIndex = cards.length - 4;
    aparatIndex = Math.max(0, Math.min(aparatIndex + dir, maxIndex));
    const cardWidth = cards[0].offsetWidth + 16;
    track.style.transform = `translateX(-${aparatIndex * cardWidth}px)`;
  }

  // ===== TABS =====
  const tabIds = ['umkm', 'wisata', 'pakaian', 'lagu', 'adat'];
  function switchTab(id, btn) {
    tabIds.forEach(t => {
      document.getElementById('tab-' + t).classList.remove('active');
    });
    document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
    document.getElementById('tab-' + id).classList.add('active');
    btn.classList.add('active');
  }
</script>
