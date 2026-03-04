{{-- aparatur-desa.blade.php - Konten halaman aparatur desa tanpa header & footer --}}

<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

  :root {
    --blue-dark: #0D2B5E;
    --blue-main: #1D4ED8;
  }

  body { font-family: 'Poppins', sans-serif; }

  .kepala-card {
    background: linear-gradient(145deg, #0D2B5E 0%, #1D4ED8 65%, #1a44b0 100%);
    border-radius: 16px;
    padding: 24px;
    color: #fff;
    box-shadow: 0 12px 40px rgba(13, 43, 94, 0.30);
    position: relative;
    overflow: hidden;
    animation: fadeUp 0.6s ease both;
  }
  .kepala-card:nth-child(2) { animation-delay: 0.12s; }

  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(20px); }
    to   { opacity: 1; transform: translateY(0); }
  }

  .kepala-card::after {
    content: '';
    position: absolute;
    bottom: -50px; right: -50px;
    width: 200px; height: 200px;
    background: rgba(255,255,255,0.05);
    border-radius: 50%;
    pointer-events: none;
  }

  .kd-avatar {
    width: 78px; height: 78px;
    border-radius: 50%;
    border: 3px solid rgba(255,255,255,0.3);
    background: #b8c9e8;
    overflow: hidden;
    display: flex; align-items: flex-end; justify-content: center;
    flex-shrink: 0;
  }
  .kd-avatar svg { width: 60px; fill: #8aa3c8; }

  .kd-badge {
    background: #F59E0B;
    color: #0D2B5E;
    font-size: 10px; font-weight: 700;
    padding: 3px 10px; border-radius: 20px;
    letter-spacing: 0.3px; white-space: nowrap;
    display: inline-block; margin-top: 6px;
  }

  .kd-divider { width: 28px; height: 3px; background: #F59E0B; border-radius: 2px; margin-top: 6px; }

  .kd-table {
    background: rgba(255,255,255,0.10);
    border-radius: 10px;
    padding: 2px 14px;
    margin-bottom: 14px;
  }
  .kd-row {
    display: flex; align-items: flex-start; gap: 10px;
    padding: 8px 0;
    border-bottom: 1px solid rgba(255,255,255,0.08);
    font-size: 12px;
  }
  .kd-row:last-child { border-bottom: none; }
  .kd-lbl { color: #F59E0B; font-weight: 600; width: 72px; flex-shrink: 0; font-size: 11.5px; }
  .kd-val { color: rgba(255,255,255,0.88); line-height: 1.5; }

  /* PERANGKAT CARD */
  .pcard {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 2px 12px rgba(13,43,94,0.10);
    transition: transform 0.25s ease, box-shadow 0.25s ease;
    animation: fadeUp 0.5s ease both;
  }
  .pcard:nth-child(1) { animation-delay: 0.05s; }
  .pcard:nth-child(2) { animation-delay: 0.10s; }
  .pcard:nth-child(3) { animation-delay: 0.15s; }
  .pcard:nth-child(4) { animation-delay: 0.20s; }
  .pcard:nth-child(5) { animation-delay: 0.25s; }
  .pcard:nth-child(6) { animation-delay: 0.30s; }
  .pcard:nth-child(7) { animation-delay: 0.35s; }
  .pcard:nth-child(8) { animation-delay: 0.40s; }

  .pcard:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 28px rgba(13,43,94,0.16);
  }

  .pcard-photo {
    width: 100%;
    aspect-ratio: 3/4;
    background: linear-gradient(160deg, #cdd9f0 0%, #b8c9e2 100%);
    display: flex; align-items: flex-end; justify-content: center;
    overflow: hidden;
  }
  .pcard-photo img { width: 100%; height: 100%; object-fit: cover; }
  .pcard-photo svg { width: 80%; fill: #92aad0; }
</style>

<!-- ===== 1. PROFIL PIMPINAN DESA ===== -->
<section class="py-12 px-6 bg-[#F4F8FD]">
  <div class="max-w-6xl mx-auto">

    {{-- Section Header --}}
    <div class="flex items-center gap-3 mb-6">
      <div class="w-1 h-6 bg-[#1D4ED8] rounded"></div>
      <h2 class="text-sm font-bold text-[#0D2B5E] uppercase tracking-widest">Profil Pimpinan Desa</h2>
    </div>

    {{-- Grid Kepala & Sekretaris --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

      {{-- Card Kepala Desa --}}
      <div class="kepala-card">
        <div class="flex items-start gap-4 mb-5">
          <div class="flex flex-col items-center gap-1 flex-shrink-0">
            <div class="kd-avatar">
              <svg viewBox="0 0 80 90" xmlns="http://www.w3.org/2000/svg">
                <ellipse cx="40" cy="28" rx="20" ry="22"/>
                <path d="M0 90 Q0 54 40 54 Q80 54 80 90 Z"/>
              </svg>
            </div>
            <div class="kd-badge">2021 – 2025</div>
          </div>
          <div class="flex-1">
            <p class="text-[10px] font-bold tracking-[2px] text-amber-400 uppercase mb-1">Profil Kepala Desa</p>
            <h3 class="text-sm font-bold leading-snug mb-1">Membangun Desa,<br>Bersama Warga</h3>
            <div class="kd-divider"></div>
          </div>
        </div>

        <p class="text-xl font-bold tracking-tight mb-4">Nama Lengkap</p>

        <div class="kd-table">
          <div class="kd-row">
            <span class="kd-lbl">Alamat</span>
            <span class="kd-val">Desa Glagahwero, Kecamatan Kalisat</span>
          </div>
          <div class="kd-row">
            <span class="kd-lbl">Pendidikan</span>
            <span class="kd-val">S1 Sarjana Pendidikan</span>
          </div>
          <div class="kd-row">
            <span class="kd-lbl">TTL</span>
            <span class="kd-val">Desa Glagahwero, 01 – 01 – 19xx</span>
          </div>
        </div>

        <p class="text-xs leading-relaxed text-white/70">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
      </div>

      {{-- Card Sekretaris Desa --}}
      <div class="kepala-card">
        <div class="flex items-start gap-4 mb-5">
          <div class="flex flex-col items-center gap-1 flex-shrink-0">
            <div class="kd-avatar">
              <svg viewBox="0 0 80 90" xmlns="http://www.w3.org/2000/svg">
                <ellipse cx="40" cy="28" rx="20" ry="22"/>
                <path d="M0 90 Q0 54 40 54 Q80 54 80 90 Z"/>
              </svg>
            </div>
            <div class="kd-badge">2021 – 2025</div>
          </div>
          <div class="flex-1">
            <p class="text-[10px] font-bold tracking-[2px] text-amber-400 uppercase mb-1">Profil Sekretaris Desa</p>
            <h3 class="text-sm font-bold leading-snug mb-1">Membangun Desa,<br>Bersama Warga</h3>
            <div class="kd-divider"></div>
          </div>
        </div>

        <p class="text-xl font-bold tracking-tight mb-4">Nama Lengkap</p>

        <div class="kd-table">
          <div class="kd-row">
            <span class="kd-lbl">Alamat</span>
            <span class="kd-val">Desa Glagahwero, Kecamatan Kalisat</span>
          </div>
          <div class="kd-row">
            <span class="kd-lbl">Pendidikan</span>
            <span class="kd-val">S1 Sarjana Pendidikan</span>
          </div>
          <div class="kd-row">
            <span class="kd-lbl">TTL</span>
            <span class="kd-val">Desa Glagahwero, 01 – 01 – 19xx</span>
          </div>
        </div>

        <p class="text-xs leading-relaxed text-white/70">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- ===== 2. PERANGKAT DESA ===== -->
<section class="py-12 px-6 bg-white">
  <div class="max-w-6xl mx-auto">

    {{-- Section Header --}}
    <div class="flex items-center justify-between mb-6">
      <div class="flex items-center gap-3">
        <div class="w-1 h-6 bg-[#1D4ED8] rounded"></div>
        <h2 class="text-sm font-bold text-[#0D2B5E] uppercase tracking-widest">Perangkat Desa</h2>
      </div>
      <button class="bg-[#C0392B] hover:bg-red-700 text-white text-sm font-semibold px-4 py-2 rounded transition">
        Lihat Selengkapnya
      </button>
    </div>

    {{-- Grid Perangkat --}}
    <div class="grid grid-cols-4 gap-4">

      @php
        $perangkat = [
          ['nama' => 'Nama', 'jabatan' => 'Jabatan', 'foto' => null],
          ['nama' => 'Nama', 'jabatan' => 'Jabatan', 'foto' => null],
          ['nama' => 'Nama', 'jabatan' => 'Jabatan', 'foto' => null],
          ['nama' => 'Nama', 'jabatan' => 'Jabatan', 'foto' => null],
          ['nama' => 'Nama', 'jabatan' => 'Jabatan', 'foto' => null],
          ['nama' => 'Nama', 'jabatan' => 'Jabatan', 'foto' => null],
          ['nama' => 'Nama', 'jabatan' => 'Jabatan', 'foto' => null],
          ['nama' => 'Nama', 'jabatan' => 'Jabatan', 'foto' => null],
        ];
      @endphp

      @foreach($perangkat as $p)
      <div class="pcard">
        <div class="pcard-photo">
          @if($p['foto'])
            <img src="{{ asset('storage/' . $p['foto']) }}" alt="{{ $p['nama'] }}">
          @else
            <svg viewBox="0 0 120 150" xmlns="http://www.w3.org/2000/svg">
              <ellipse cx="60" cy="60" rx="32" ry="36"/>
              <path d="M0 150 Q0 100 60 100 Q120 100 120 150Z"/>
            </svg>
          @endif
        </div>
        <div class="p-3 bg-[#0D2B5E] text-white text-center">
          <p class="text-sm font-semibold">{{ $p['nama'] }}</p>
          <p class="text-xs text-blue-200">{{ $p['jabatan'] }}</p>
        </div>
      </div>
      @endforeach

    </div>

  </div>
</section>
