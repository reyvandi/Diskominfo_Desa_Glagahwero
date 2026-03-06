@extends('layouts.app')

@section('content')

<section class="bg-gray-100 min-h-screen py-10 px-4 md:px-8 font-sans">
  <div class="max-w-6xl mx-auto flex flex-col lg:flex-row gap-8">

    {{-- ==============================
         SIDEBAR NAVIGASI KIRI
    ============================== --}}
    <aside class="lg:w-64 flex-shrink-0">
      <div class="sticky top-24 flex flex-col gap-3">

        <a href="#visi-misi"
           class="flex items-center gap-3 px-5 py-4 rounded-xl text-white font-semibold text-sm shadow-md transition-all hover:brightness-110 active-nav"
           style="background: #102778">
          <span class="w-9 h-9 rounded-lg flex items-center justify-center" style="background:rgba(255,255,255,0.15)">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="3"/><path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7-10-7-10-7z"/>
            </svg>
          </span>
          <div>
            <div class="font-bold">Visi &amp; Misi</div>
            <div class="text-xs opacity-70 font-normal">Tujuan dan Arah Desa</div>
          </div>
        </a>

        <a href="#sejarah"
           class="flex items-center gap-3 px-5 py-4 rounded-xl text-white font-semibold text-sm shadow-md transition-all hover:brightness-110"
           style="background: #102778">
          <span class="w-9 h-9 rounded-lg flex items-center justify-center" style="background:rgba(255,255,255,0.15)">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/>
            </svg>
          </span>
          <div>
            <div class="font-bold">Sejarah Desa</div>
            <div class="text-xs opacity-70 font-normal">Asal Usul Desa</div>
          </div>
        </a>

        <a href="#bagan"
           class="flex items-center gap-3 px-5 py-4 rounded-xl text-white font-semibold text-sm shadow-md transition-all hover:brightness-110"
           style="background: #102778">
          <span class="w-9 h-9 rounded-lg flex items-center justify-center" style="background:rgba(255,255,255,0.15)">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/>
              <rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/>
            </svg>
          </span>
          <div>
            <div class="font-bold">Bagan Desa</div>
            <div class="text-xs opacity-70 font-normal">Struktur Organisasi</div>
          </div>
        </a>

      </div>
    </aside>

    {{-- ==============================
         KONTEN UTAMA KANAN
    ============================== --}}
    <main class="flex-1 flex flex-col gap-10">

      {{-- ---- VISI ---- --}}
      <div id="visi-misi" class="scroll-mt-28">

        {{-- Header Visi --}}
        <div class="flex items-center gap-3 px-6 py-4 rounded-t-2xl text-white font-bold text-lg mb-0"
             style="background: linear-gradient(135deg, #0B1B52 0%, #193CB8 100%)">
          <span class="w-9 h-9 rounded-lg flex items-center justify-center bg-white bg-opacity-20">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="3"/><path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7-10-7-10-7z"/>
            </svg>
          </span>
          Visi
        </div>

        {{-- Isi Visi --}}
        <div class="bg-white rounded-b-2xl shadow-sm p-8">
          <div class="border-l-4 pl-6 py-2" style="border-color: #9ACD00">
            <p class="text-gray-700 text-base md:text-lg font-medium leading-relaxed text-justify italic">
              "Desa Glagahwero, sebagai Desa Wisata yang mampu mengelola potensi Desa dan pembangunan berkelanjutan
              untuk mewujudkan masyarakat yang sejahtera"
            </p>
          </div>
        </div>
      </div>

      {{-- ---- MISI ---- --}}
      <div>
        {{-- Header Misi --}}
        <div class="flex items-center gap-3 px-6 py-4 rounded-t-2xl text-white font-bold text-lg"
             style="background: linear-gradient(135deg, #0B1B52 0%, #193CB8 100%)">
          <span class="w-9 h-9 rounded-lg flex items-center justify-center bg-white bg-opacity-20">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2"/>
              <rect x="9" y="3" width="6" height="4" rx="1"/><path d="M9 12h6M9 16h4"/>
            </svg>
          </span>
          Misi
        </div>

        {{-- Grid Misi --}}
        <div class="bg-white rounded-b-2xl shadow-sm p-6">
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

            @php
              $misi = [
                1 => "Mewujudkan tata kelola pemerintahan yang baik, bersih, dan transparan.",
                2 => "Meningkatkan kualitas pelayanan publik kepada seluruh warga desa.",
                3 => "Mengembangkan potensi wisata dan budaya lokal Desa Glagahwero.",
                4 => "Meningkatkan pemberdayaan ekonomi masyarakat desa secara berkelanjutan.",
                5 => "Mewujudkan infrastruktur desa yang memadai dan merata.",
                6 => "Meningkatkan kualitas sumber daya manusia melalui pendidikan dan pelatihan.",
                7 => "Menjaga kelestarian lingkungan hidup dan sumber daya alam desa.",
                8 => "Memperkuat kerukunan, keamanan, dan ketertiban masyarakat desa.",
              ];
            @endphp

            @foreach ($misi as $no => $isi)
            <div class="flex items-start gap-4 p-4 rounded-xl border border-gray-100 hover:shadow-md transition-shadow bg-gray-50">
              <span class="flex-shrink-0 w-9 h-9 rounded-lg flex items-center justify-center text-white font-bold text-sm"
                    style="background: #1B2F5E">
                {{ $no }}
              </span>
              <p class="text-gray-600 text-sm leading-relaxed">{{ $isi }}</p>
            </div>
            @endforeach

          </div>
        </div>
      </div>

      {{-- ---- SEJARAH DESA ---- --}}
      <div id="sejarah" class="scroll-mt-28">

        {{-- Header Sejarah --}}
        <div class="flex items-center gap-3 px-6 py-4 rounded-t-2xl text-white font-bold text-lg"
             style="background: linear-gradient(135deg, #0B1B52 0%, #193CB8 100%)">
          <span class="w-9 h-9 rounded-lg flex items-center justify-center bg-white bg-opacity-20">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/>
            </svg>
          </span>
          Sejarah Desa
        </div>

        {{-- Isi Sejarah --}}
        <div class="bg-white rounded-b-2xl shadow-sm p-8">

          {{-- Aksen garis atas --}}
          <div class="flex items-center gap-3 mb-6">
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-4 text-gray-600 text-sm leading-relaxed text-justify"
               style="background: linear-gradient(135deg, #1B2F5E, #2a4a8a); border-radius: 1rem; padding: 2rem; color: rgba(255,255,255,0.85)">

            <div class="flex flex-col gap-4">
              <p>
                p ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor,
                dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula
                massa, varius a, semper congue, euismod non, mi.
              </p>
              <p>
                Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat.
                Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue.
              </p>
              <p>
                Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede.
                Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales.
              </p>
              <p>convallis id, congue eu, quam. Mauris ullamcorper felis vitae erat.</p>
            </div>

            <div class="flex flex-col gap-4">
              <p>
                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh.
                Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.
              </p>
              <p>
                Ut velit mauris, egestas sed, gravida nec, ornare ut, mi. Aenean ut orci vel massa suscipit pulvinar.
                Nulla sollicitudin. Fusce varius, ligula non tempus aliquam, nunc turpis ullamcorper nibh, in tempus
                sapien eros vitae ligula.
              </p>
              <p>
                Pellentesque rhoncus nunc et augue. Integer id felis. Curabitur aliquet pellentesque diam. Integer quis
                metus vitae elit lobortis egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel
                erat non mauris convallis vehicula.
              </p>
              <p>
                Nulla et sapien. Integer tortor tellus, aliquam faucibus, convallis id, congue eu, quam. Mauris
                ullamcorper felis vitae erat.
              </p>
            </div>

          </div>
        </div>
      </div>

      {{-- ---- BAGAN DESA ---- --}}
      <div id="bagan" class="scroll-mt-28">

        {{-- Header Bagan --}}
        <div class="flex items-center gap-3 px-6 py-4 rounded-t-2xl text-white font-bold text-lg"
             style="background: linear-gradient(135deg, #0B1B52 0%, #193CB8 100%)">
          <span class="w-9 h-9 rounded-lg flex items-center justify-center bg-white bg-opacity-20">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/>
              <rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/>
            </svg>
          </span>
          Bagan Desa
        </div>

        {{-- Isi Bagan --}}
        <div class="bg-white rounded-b-2xl shadow-sm p-6">

          {{-- Label & Badge Periode --}}
          <div class="flex items-center justify-between mb-4 flex-wrap gap-2">
            <div class="flex items-center gap-2">
              <div class="w-1 h-5 rounded-full" style="background:#9ACD00"></div>
              <span class="text-sm font-semibold text-gray-700">Struktur Organisasi Pemerintahan Desa</span>
            </div>
            <span class="px-3 py-1 rounded-full text-white text-xs font-bold" style="background:#1636A4">
              Periode 2022 – 2029
            </span>
          </div>

          {{-- Gambar Bagan --}}
          <div class="rounded-xl overflow-hidden border border-gray-100">
            <img src="{{ asset('images/bagan-desa.jpg') }}"
                 alt="Bagan Struktur Organisasi Pemerintahan Desa Glagahwero"
                 class="w-full object-cover"
                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
            {{-- Placeholder jika gambar belum ada --}}
            <div class="hidden w-full h-64 items-center justify-center flex-col gap-3 rounded-xl"
                 style="background: linear-gradient(135deg, #1B2F5E, #2a4a8a)">
              <svg class="w-14 h-14 opacity-30" fill="none" stroke="white" stroke-width="1.5" viewBox="0 0 24 24">
                <rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/>
                <rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/>
              </svg>
              <p class="text-white text-opacity-50 text-sm opacity-50">Gambar bagan belum tersedia</p>
            </div>
          </div>

        </div>
      </div>

    </main>
  </div>
</section>

{{-- ============================================================
     SCRIPT: Smooth scroll + Active sidebar highlight
     ============================================================ --}}
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const links = document.querySelectorAll('aside a');
    const sections = ['visi-misi', 'sejarah', 'bagan'];

    function setActive(id) {
      links.forEach(link => {
        const isActive = link.getAttribute('href') === '#' + id;

        if (isActive) {
          link.style.transform = 'scale(1.07)';
          link.style.boxShadow = '0 8px 24px rgba(27,47,94,0.5)';
          link.style.opacity = '1';
          link.style.zIndex = '10';
        } else {
          link.style.transform = 'scale(1)';
          link.style.boxShadow = '';
          link.style.opacity = '1'; // tetap sama, tidak redup
          link.style.zIndex = '1';
        }
      });
    }

    // Tambahkan ini — intercept klik visi-misi
    const visiLink = document.querySelector('a[href="#visi-misi"]');
    if (visiLink) {
      visiLink.addEventListener('click', function (e) {
        e.preventDefault(); // cegah default anchor scroll
        window.scrollTo({ top: 0, behavior: 'smooth' }); // scroll ke paling atas
        setActive('visi-misi');
      });
    }

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) setActive(entry.target.id);
      });
    }, { threshold: 0.3, rootMargin: '-80px 0px -60% 0px' });

    sections.forEach(id => {
      const el = document.getElementById(id);
      if (el) observer.observe(el);
    });

    // Set default aktif pertama
    setActive('visi-misi');
  });
</script>

@endsection
