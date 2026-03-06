{{-- aparatur-desa.blade.php - Full Tailwind --}}

@extends('layouts.app')

@section('content')

<!-- ===== 1. PROFIL PIMPINAN DESA ===== -->
<section class="py-12 px-4 sm:px-6 bg-[#F4F8FD]">
  <div class="max-w-6xl mx-auto">

    {{-- Section Header --}}
    <div class="flex items-center gap-3 mb-6">
      <div class="w-1 h-6 bg-[#1D4ED8] rounded"></div>
      <h2 class="text-sm font-bold text-[#0D2B5E] uppercase tracking-widest">Profil Pimpinan Desa</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

      @foreach([['label' => 'Kepala Desa', 'periode' => '2021 – 2025'], ['label' => 'Sekretaris Desa', 'periode' => '2021 – 2025']] as $pimpinan)
      <div class="relative overflow-hidden rounded-2xl p-6 text-white shadow-[0_12px_40px_rgba(13,43,94,0.30)]"
           style="background: linear-gradient(145deg, #0D2B5E 0%, #1D4ED8 65%, #1a44b0 100%); animation: fadeUp 0.6s ease both;">

        <div class="absolute -bottom-12 -right-12 w-48 h-48 rounded-full bg-white/5 pointer-events-none"></div>

        <div class="flex items-start gap-4 mb-5">

          <div class="flex flex-col items-center gap-1.5 flex-shrink-0">
            <div class="w-[120px] h-[120px] rounded-full border-[3px] border-white/30 overflow-hidden">
                <img src="{{ asset('images/hero-3.jpg') }}"
                    alt="Foto"
                    class="w-full h-full object-cover object-top">
            </div>
            <span class="bg-amber-400 text-[#0D2B5E] text-[10px] font-bold px-2.5 py-0.5 rounded-full whitespace-nowrap">
              {{ $pimpinan['periode'] }}
            </span>
          </div>

          {{-- Judul --}}
          <div class="flex-1">
            <p class="text-[17px] font-bold tracking-[2px] text-amber-400 uppercase mb-1">Profil {{ $pimpinan['label'] }}</p>
            <h3 class="text-[25px] font-bold leading-snug mb-2">Membangun Desa,<br>Bersama Warga</h3>
            <div class="w-12 h-[5px] bg-amber-400 rounded"></div>
          </div>
        </div>

        {{-- Nama --}}
        <p class="text-xl font-bold tracking-tight mb-4">Nama Lengkap</p>

        {{-- Tabel info --}}
        <div class="bg-white/10 rounded-xl px-3.5 mb-4">
          @foreach([['lbl'=>'Alamat','val'=>'Desa Glagahwero, Kecamatan Kalisat'],['lbl'=>'Pendidikan','val'=>'S1 Sarjana Pendidikan'],['lbl'=>'TTL','val'=>'Desa Glagahwero, 01 – 01 – 19xx']] as $row)
          <div class="flex items-start gap-2.5 py-2 border-b border-white/10 last:border-0 text-xs">
            <span class="text-amber-400 font-semibold w-[72px] flex-shrink-0 text-[11.5px]">{{ $row['lbl'] }}</span>
            <span class="text-white/80 leading-relaxed">{{ $row['val'] }}</span>
          </div>
          @endforeach
        </div>

        {{-- Deskripsi --}}
        <p class="text-xs leading-relaxed text-white/70">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
        </p>

      </div>
      @endforeach

    </div>
  </div>
</section>

<!-- ===== 2. PERANGKAT DESA ===== -->
<section class="py-12 px-4 sm:px-6 bg-white">
  <div class="max-w-6xl mx-auto">

    {{-- Section Header --}}
    <div class="flex items-center justify-between mb-6">
      <div class="flex items-center gap-3">
        <div class="w-1 h-6 bg-[#1D4ED8] rounded"></div>
        <h2 class="text-sm font-bold text-[#0D2B5E] uppercase tracking-widest">Perangkat Desa</h2>
      </div>
    </div>

    {{-- Grid: 2 col mobile → 3 tablet → 4 desktop --}}
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-4">

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

      @foreach($perangkat as $index => $p)
      <div class="bg-white rounded-xl overflow-hidden shadow-[0_2px_12px_rgba(13,43,94,0.10)] hover:-translate-y-1 hover:shadow-[0_10px_28px_rgba(13,43,94,0.16)] transition-all duration-200"
           style="animation: fadeUp 0.5s ease {{ $index * 0.05 }}s both">

        {{-- Foto --}}
        <div class="w-full aspect-square bg-gradient-to-b from-[#cdd9f0] to-[#b8c9e2] flex items-end justify-center overflow-hidden">
          @if($p['foto'])
            <div class="w-full aspect-square bg-gradient-to-b from-[#cdd9f0] to-[#b8c9e2] flex items-end justify-center overflow-hidden">
          @else
            <img src="{{ asset('images/hero-1.jpg') }}" alt="{{ $p['nama'] }}" class="w-full h-full object-cover object-top">
          @endif
        </div>

        {{-- Info --}}
        <div class="p-2 sm:p-3 bg-[#0D2B5E] text-white text-center">
          <p class="text-xs sm:text-sm font-semibold truncate">{{ $p['nama'] }}</p>
          <p class="text-[10px] sm:text-xs text-blue-200 truncate">{{ $p['jabatan'] }}</p>
        </div>

      </div>
      @endforeach

    </div>

  </div>
</section>

<style>
  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(20px); }
    to   { opacity: 1; transform: translateY(0); }
  }
</style>

@endsection
