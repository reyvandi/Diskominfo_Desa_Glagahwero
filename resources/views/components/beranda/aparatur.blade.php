<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Preview — Aparatur Desa</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600&family=Manrope:wght@300;400;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            outfit:  ['Outfit', 'sans-serif'],
            manrope: ['Manrope', 'sans-serif'],
            jakarta: ['Plus Jakarta Sans', 'sans-serif'],
          },
          colors: {
            navy:    '#0D2B5E',
            navydark:'#070E1F',
            navymid: '#0b1629',
          },
          keyframes: {
            stripRoll: {
              '0%':   { transform: 'translateX(0)' },
              '100%': { transform: 'translateX(-50%)' },
            },
            blobFloat: {
              '0%,100%': { transform: 'translateY(0) scale(1)' },
              '50%':     { transform: 'translateY(-20px) scale(1.05)' },
            },
          },
          animation: {
            stripRoll:  'stripRoll 30s linear infinite',
            blobFloat:  'blobFloat 8s ease-in-out infinite',
            blobFloat2: 'blobFloat 8s ease-in-out 3s infinite',
          },
        },
      },
    }
  </script>
</head>
<body class="m-0 bg-slate-100">

  <!-- ── Tab Nav ── -->
  <div class="sticky top-0 z-50 bg-white border-b border-gray-200 shadow-sm">
    <div class="max-w-5xl mx-auto px-4 py-3 flex gap-1">
      <button data-tab="d1" class="tab-btn px-5 py-2 text-sm font-semibold border-b-2 border-navy text-navy transition-all">Design 1 — Film Strip</button>
      <button data-tab="d2" class="tab-btn px-5 py-2 text-sm font-semibold border-b-2 border-transparent text-gray-400 hover:text-gray-600 transition-all">Design 2 — Spotlight</button>
      <button data-tab="d3" class="tab-btn px-5 py-2 text-sm font-semibold border-b-2 border-transparent text-gray-400 hover:text-gray-600 transition-all">Design 3 — Bento Grid</button>
    </div>
  </div>


  <!-- ═══════════════════════════
       DESIGN 1 — FILM STRIP 3D TILT
  ═══════════════════════════ -->
  <div id="d1" class="tab-panel font-outfit">
    <div class="relative overflow-hidden bg-navydark py-10 select-none">

      <div class="animate-blobFloat pointer-events-none absolute -top-24 -left-24 w-80 h-80 rounded-full opacity-20 bg-[radial-gradient(circle,#1e40af,transparent_70%)]"></div>
      <div class="animate-blobFloat2 pointer-events-none absolute -bottom-20 right-10 w-96 h-96 rounded-full opacity-10 bg-[radial-gradient(circle,#0D2B5E,transparent_70%)]"></div>

      <!-- top holes -->
      <div class="flex gap-2 px-2 mb-2 overflow-hidden opacity-25 pointer-events-none" aria-hidden="true">
        <div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div>
      </div>

      <div class="overflow-hidden px-4 [mask-image:linear-gradient(to_right,transparent,black_80px,black_calc(100%-80px),transparent)]">
        <div id="strip1" class="flex gap-3 w-max animate-stripRoll hover:[animation-play-state:paused]">

          <!-- original 8 cards -->
          <div class="d1c group relative shrink-0 w-52 rounded-2xl overflow-hidden cursor-pointer transition-all duration-300 [transform-style:preserve-3d]" onmousemove="d1Tilt(event,this)" onmouseleave="d1Reset(this)">
            <div class="absolute inset-0 z-10 pointer-events-none overflow-hidden rounded-2xl"><div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-500"></div></div>
            <span class="absolute top-2.5 left-2.5 z-20 text-[9px] font-mono font-semibold text-white/40 bg-white/5 border border-white/10 rounded-full px-2 py-0.5 backdrop-blur-sm leading-none">01</span>
            <img src="https://i.pravatar.cc/400?img=11" alt="" class="w-full h-[200px] object-cover object-top saturate-50 brightness-90 group-hover:saturate-100 group-hover:brightness-100 transition-all duration-500"/>
            <div class="relative bg-navy px-4 py-3 border-t border-blue-800/50">
              <div class="absolute top-0 left-4 right-4 h-px bg-gradient-to-r from-blue-200/50 to-transparent"></div>
              <p class="text-[13px] font-semibold text-white translate-y-2 opacity-70 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">Budi Santoso, S.E.</p>
              <p class="text-[11px] text-blue-200 mt-0.5">Kepala Desa</p>
            </div>
          </div>

          <div class="d1c group relative shrink-0 w-52 rounded-2xl overflow-hidden cursor-pointer transition-all duration-300 [transform-style:preserve-3d]" onmousemove="d1Tilt(event,this)" onmouseleave="d1Reset(this)">
            <div class="absolute inset-0 z-10 pointer-events-none overflow-hidden rounded-2xl"><div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-500"></div></div>
            <span class="absolute top-2.5 left-2.5 z-20 text-[9px] font-mono font-semibold text-white/40 bg-white/5 border border-white/10 rounded-full px-2 py-0.5 backdrop-blur-sm leading-none">02</span>
            <img src="https://i.pravatar.cc/400?img=15" alt="" class="w-full h-[200px] object-cover object-top saturate-50 brightness-90 group-hover:saturate-100 group-hover:brightness-100 transition-all duration-500"/>
            <div class="relative bg-navy px-4 py-3 border-t border-blue-800/50">
              <div class="absolute top-0 left-4 right-4 h-px bg-gradient-to-r from-blue-200/50 to-transparent"></div>
              <p class="text-[13px] font-semibold text-white translate-y-2 opacity-70 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">Siti Rahayu, S.Pd.</p>
              <p class="text-[11px] text-blue-200 mt-0.5">Sekretaris Desa</p>
            </div>
          </div>

          <div class="d1c group relative shrink-0 w-52 rounded-2xl overflow-hidden cursor-pointer transition-all duration-300 [transform-style:preserve-3d]" onmousemove="d1Tilt(event,this)" onmouseleave="d1Reset(this)">
            <div class="absolute inset-0 z-10 pointer-events-none overflow-hidden rounded-2xl"><div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-500"></div></div>
            <span class="absolute top-2.5 left-2.5 z-20 text-[9px] font-mono font-semibold text-white/40 bg-white/5 border border-white/10 rounded-full px-2 py-0.5 backdrop-blur-sm leading-none">03</span>
            <img src="https://i.pravatar.cc/400?img=20" alt="" class="w-full h-[200px] object-cover object-top saturate-50 brightness-90 group-hover:saturate-100 group-hover:brightness-100 transition-all duration-500"/>
            <div class="relative bg-navy px-4 py-3 border-t border-blue-800/50">
              <div class="absolute top-0 left-4 right-4 h-px bg-gradient-to-r from-blue-200/50 to-transparent"></div>
              <p class="text-[13px] font-semibold text-white translate-y-2 opacity-70 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">Ahmad Fauzi</p>
              <p class="text-[11px] text-blue-200 mt-0.5">Kasi Pemerintahan</p>
            </div>
          </div>

          <div class="d1c group relative shrink-0 w-52 rounded-2xl overflow-hidden cursor-pointer transition-all duration-300 [transform-style:preserve-3d]" onmousemove="d1Tilt(event,this)" onmouseleave="d1Reset(this)">
            <div class="absolute inset-0 z-10 pointer-events-none overflow-hidden rounded-2xl"><div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-500"></div></div>
            <span class="absolute top-2.5 left-2.5 z-20 text-[9px] font-mono font-semibold text-white/40 bg-white/5 border border-white/10 rounded-full px-2 py-0.5 backdrop-blur-sm leading-none">04</span>
            <img src="https://i.pravatar.cc/400?img=25" alt="" class="w-full h-[200px] object-cover object-top saturate-50 brightness-90 group-hover:saturate-100 group-hover:brightness-100 transition-all duration-500"/>
            <div class="relative bg-navy px-4 py-3 border-t border-blue-800/50">
              <div class="absolute top-0 left-4 right-4 h-px bg-gradient-to-r from-blue-200/50 to-transparent"></div>
              <p class="text-[13px] font-semibold text-white translate-y-2 opacity-70 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">Dewi Lestari, A.Md.</p>
              <p class="text-[11px] text-blue-200 mt-0.5">Kaur Keuangan</p>
            </div>
          </div>

          <div class="d1c group relative shrink-0 w-52 rounded-2xl overflow-hidden cursor-pointer transition-all duration-300 [transform-style:preserve-3d]" onmousemove="d1Tilt(event,this)" onmouseleave="d1Reset(this)">
            <div class="absolute inset-0 z-10 pointer-events-none overflow-hidden rounded-2xl"><div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-500"></div></div>
            <span class="absolute top-2.5 left-2.5 z-20 text-[9px] font-mono font-semibold text-white/40 bg-white/5 border border-white/10 rounded-full px-2 py-0.5 backdrop-blur-sm leading-none">05</span>
            <img src="https://i.pravatar.cc/400?img=30" alt="" class="w-full h-[200px] object-cover object-top saturate-50 brightness-90 group-hover:saturate-100 group-hover:brightness-100 transition-all duration-500"/>
            <div class="relative bg-navy px-4 py-3 border-t border-blue-800/50">
              <div class="absolute top-0 left-4 right-4 h-px bg-gradient-to-r from-blue-200/50 to-transparent"></div>
              <p class="text-[13px] font-semibold text-white translate-y-2 opacity-70 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">Rudi Hermawan</p>
              <p class="text-[11px] text-blue-200 mt-0.5">Kaur Umum & Perencanaan</p>
            </div>
          </div>

          <div class="d1c group relative shrink-0 w-52 rounded-2xl overflow-hidden cursor-pointer transition-all duration-300 [transform-style:preserve-3d]" onmousemove="d1Tilt(event,this)" onmouseleave="d1Reset(this)">
            <div class="absolute inset-0 z-10 pointer-events-none overflow-hidden rounded-2xl"><div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-500"></div></div>
            <span class="absolute top-2.5 left-2.5 z-20 text-[9px] font-mono font-semibold text-white/40 bg-white/5 border border-white/10 rounded-full px-2 py-0.5 backdrop-blur-sm leading-none">06</span>
            <img src="https://i.pravatar.cc/400?img=35" alt="" class="w-full h-[200px] object-cover object-top saturate-50 brightness-90 group-hover:saturate-100 group-hover:brightness-100 transition-all duration-500"/>
            <div class="relative bg-navy px-4 py-3 border-t border-blue-800/50">
              <div class="absolute top-0 left-4 right-4 h-px bg-gradient-to-r from-blue-200/50 to-transparent"></div>
              <p class="text-[13px] font-semibold text-white translate-y-2 opacity-70 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">Nurul Hidayah</p>
              <p class="text-[11px] text-blue-200 mt-0.5">Kasi Kesejahteraan</p>
            </div>
          </div>

          <div class="d1c group relative shrink-0 w-52 rounded-2xl overflow-hidden cursor-pointer transition-all duration-300 [transform-style:preserve-3d]" onmousemove="d1Tilt(event,this)" onmouseleave="d1Reset(this)">
            <div class="absolute inset-0 z-10 pointer-events-none overflow-hidden rounded-2xl"><div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-500"></div></div>
            <span class="absolute top-2.5 left-2.5 z-20 text-[9px] font-mono font-semibold text-white/40 bg-white/5 border border-white/10 rounded-full px-2 py-0.5 backdrop-blur-sm leading-none">07</span>
            <img src="https://i.pravatar.cc/400?img=40" alt="" class="w-full h-[200px] object-cover object-top saturate-50 brightness-90 group-hover:saturate-100 group-hover:brightness-100 transition-all duration-500"/>
            <div class="relative bg-navy px-4 py-3 border-t border-blue-800/50">
              <div class="absolute top-0 left-4 right-4 h-px bg-gradient-to-r from-blue-200/50 to-transparent"></div>
              <p class="text-[13px] font-semibold text-white translate-y-2 opacity-70 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">Hendra Wijaya</p>
              <p class="text-[11px] text-blue-200 mt-0.5">Kepala Dusun I</p>
            </div>
          </div>

          <div class="d1c group relative shrink-0 w-52 rounded-2xl overflow-hidden cursor-pointer transition-all duration-300 [transform-style:preserve-3d]" onmousemove="d1Tilt(event,this)" onmouseleave="d1Reset(this)">
            <div class="absolute inset-0 z-10 pointer-events-none overflow-hidden rounded-2xl"><div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-500"></div></div>
            <span class="absolute top-2.5 left-2.5 z-20 text-[9px] font-mono font-semibold text-white/40 bg-white/5 border border-white/10 rounded-full px-2 py-0.5 backdrop-blur-sm leading-none">08</span>
            <img src="https://i.pravatar.cc/400?img=45" alt="" class="w-full h-[200px] object-cover object-top saturate-50 brightness-90 group-hover:saturate-100 group-hover:brightness-100 transition-all duration-500"/>
            <div class="relative bg-navy px-4 py-3 border-t border-blue-800/50">
              <div class="absolute top-0 left-4 right-4 h-px bg-gradient-to-r from-blue-200/50 to-transparent"></div>
              <p class="text-[13px] font-semibold text-white translate-y-2 opacity-70 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">Yuli Astuti, S.Sos.</p>
              <p class="text-[11px] text-blue-200 mt-0.5">Kepala Dusun II</p>
            </div>
          </div>

          <!-- duplicates (seamless loop) -->
          <div class="d1c group relative shrink-0 w-52 rounded-2xl overflow-hidden cursor-pointer transition-all duration-300 [transform-style:preserve-3d]" onmousemove="d1Tilt(event,this)" onmouseleave="d1Reset(this)"><div class="absolute inset-0 z-10 pointer-events-none overflow-hidden rounded-2xl"><div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-500"></div></div><img src="https://i.pravatar.cc/400?img=11" alt="" class="w-full h-[200px] object-cover object-top saturate-50 brightness-90 group-hover:saturate-100 group-hover:brightness-100 transition-all duration-500"/><div class="relative bg-navy px-4 py-3 border-t border-blue-800/50"><div class="absolute top-0 left-4 right-4 h-px bg-gradient-to-r from-blue-200/50 to-transparent"></div><p class="text-[13px] font-semibold text-white translate-y-2 opacity-70 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">Budi Santoso, S.E.</p><p class="text-[11px] text-blue-200 mt-0.5">Kepala Desa</p></div></div>
          <div class="d1c group relative shrink-0 w-52 rounded-2xl overflow-hidden cursor-pointer transition-all duration-300 [transform-style:preserve-3d]" onmousemove="d1Tilt(event,this)" onmouseleave="d1Reset(this)"><div class="absolute inset-0 z-10 pointer-events-none overflow-hidden rounded-2xl"><div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-500"></div></div><img src="https://i.pravatar.cc/400?img=15" alt="" class="w-full h-[200px] object-cover object-top saturate-50 brightness-90 group-hover:saturate-100 group-hover:brightness-100 transition-all duration-500"/><div class="relative bg-navy px-4 py-3 border-t border-blue-800/50"><div class="absolute top-0 left-4 right-4 h-px bg-gradient-to-r from-blue-200/50 to-transparent"></div><p class="text-[13px] font-semibold text-white translate-y-2 opacity-70 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">Siti Rahayu, S.Pd.</p><p class="text-[11px] text-blue-200 mt-0.5">Sekretaris Desa</p></div></div>
          <div class="d1c group relative shrink-0 w-52 rounded-2xl overflow-hidden cursor-pointer transition-all duration-300 [transform-style:preserve-3d]" onmousemove="d1Tilt(event,this)" onmouseleave="d1Reset(this)"><div class="absolute inset-0 z-10 pointer-events-none overflow-hidden rounded-2xl"><div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-500"></div></div><img src="https://i.pravatar.cc/400?img=20" alt="" class="w-full h-[200px] object-cover object-top saturate-50 brightness-90 group-hover:saturate-100 group-hover:brightness-100 transition-all duration-500"/><div class="relative bg-navy px-4 py-3 border-t border-blue-800/50"><div class="absolute top-0 left-4 right-4 h-px bg-gradient-to-r from-blue-200/50 to-transparent"></div><p class="text-[13px] font-semibold text-white translate-y-2 opacity-70 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">Ahmad Fauzi</p><p class="text-[11px] text-blue-200 mt-0.5">Kasi Pemerintahan</p></div></div>
          <div class="d1c group relative shrink-0 w-52 rounded-2xl overflow-hidden cursor-pointer transition-all duration-300 [transform-style:preserve-3d]" onmousemove="d1Tilt(event,this)" onmouseleave="d1Reset(this)"><div class="absolute inset-0 z-10 pointer-events-none overflow-hidden rounded-2xl"><div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-500"></div></div><img src="https://i.pravatar.cc/400?img=25" alt="" class="w-full h-[200px] object-cover object-top saturate-50 brightness-90 group-hover:saturate-100 group-hover:brightness-100 transition-all duration-500"/><div class="relative bg-navy px-4 py-3 border-t border-blue-800/50"><div class="absolute top-0 left-4 right-4 h-px bg-gradient-to-r from-blue-200/50 to-transparent"></div><p class="text-[13px] font-semibold text-white translate-y-2 opacity-70 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">Dewi Lestari, A.Md.</p><p class="text-[11px] text-blue-200 mt-0.5">Kaur Keuangan</p></div></div>
          <div class="d1c group relative shrink-0 w-52 rounded-2xl overflow-hidden cursor-pointer transition-all duration-300 [transform-style:preserve-3d]" onmousemove="d1Tilt(event,this)" onmouseleave="d1Reset(this)"><div class="absolute inset-0 z-10 pointer-events-none overflow-hidden rounded-2xl"><div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-500"></div></div><img src="https://i.pravatar.cc/400?img=30" alt="" class="w-full h-[200px] object-cover object-top saturate-50 brightness-90 group-hover:saturate-100 group-hover:brightness-100 transition-all duration-500"/><div class="relative bg-navy px-4 py-3 border-t border-blue-800/50"><div class="absolute top-0 left-4 right-4 h-px bg-gradient-to-r from-blue-200/50 to-transparent"></div><p class="text-[13px] font-semibold text-white translate-y-2 opacity-70 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">Rudi Hermawan</p><p class="text-[11px] text-blue-200 mt-0.5">Kaur Umum & Perencanaan</p></div></div>
          <div class="d1c group relative shrink-0 w-52 rounded-2xl overflow-hidden cursor-pointer transition-all duration-300 [transform-style:preserve-3d]" onmousemove="d1Tilt(event,this)" onmouseleave="d1Reset(this)"><div class="absolute inset-0 z-10 pointer-events-none overflow-hidden rounded-2xl"><div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-500"></div></div><img src="https://i.pravatar.cc/400?img=35" alt="" class="w-full h-[200px] object-cover object-top saturate-50 brightness-90 group-hover:saturate-100 group-hover:brightness-100 transition-all duration-500"/><div class="relative bg-navy px-4 py-3 border-t border-blue-800/50"><div class="absolute top-0 left-4 right-4 h-px bg-gradient-to-r from-blue-200/50 to-transparent"></div><p class="text-[13px] font-semibold text-white translate-y-2 opacity-70 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">Nurul Hidayah</p><p class="text-[11px] text-blue-200 mt-0.5">Kasi Kesejahteraan</p></div></div>
          <div class="d1c group relative shrink-0 w-52 rounded-2xl overflow-hidden cursor-pointer transition-all duration-300 [transform-style:preserve-3d]" onmousemove="d1Tilt(event,this)" onmouseleave="d1Reset(this)"><div class="absolute inset-0 z-10 pointer-events-none overflow-hidden rounded-2xl"><div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-500"></div></div><img src="https://i.pravatar.cc/400?img=40" alt="" class="w-full h-[200px] object-cover object-top saturate-50 brightness-90 group-hover:saturate-100 group-hover:brightness-100 transition-all duration-500"/><div class="relative bg-navy px-4 py-3 border-t border-blue-800/50"><div class="absolute top-0 left-4 right-4 h-px bg-gradient-to-r from-blue-200/50 to-transparent"></div><p class="text-[13px] font-semibold text-white translate-y-2 opacity-70 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">Hendra Wijaya</p><p class="text-[11px] text-blue-200 mt-0.5">Kepala Dusun I</p></div></div>
          <div class="d1c group relative shrink-0 w-52 rounded-2xl overflow-hidden cursor-pointer transition-all duration-300 [transform-style:preserve-3d]" onmousemove="d1Tilt(event,this)" onmouseleave="d1Reset(this)"><div class="absolute inset-0 z-10 pointer-events-none overflow-hidden rounded-2xl"><div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-500"></div></div><img src="https://i.pravatar.cc/400?img=45" alt="" class="w-full h-[200px] object-cover object-top saturate-50 brightness-90 group-hover:saturate-100 group-hover:brightness-100 transition-all duration-500"/><div class="relative bg-navy px-4 py-3 border-t border-blue-800/50"><div class="absolute top-0 left-4 right-4 h-px bg-gradient-to-r from-blue-200/50 to-transparent"></div><p class="text-[13px] font-semibold text-white translate-y-2 opacity-70 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">Yuli Astuti, S.Sos.</p><p class="text-[11px] text-blue-200 mt-0.5">Kepala Dusun II</p></div></div>

        </div>
      </div>

      <!-- bottom holes -->
      <div class="flex gap-2 px-2 mt-2 overflow-hidden opacity-25 pointer-events-none" aria-hidden="true">
        <div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div><div class="w-2.5 h-[18px] bg-navy rounded-sm shrink-0"></div>
      </div>
    </div>
  </div>


  <!-- ═══════════════════════════
       DESIGN 2 — SPOTLIGHT CAROUSEL
  ═══════════════════════════ -->
  <div id="d2" class="tab-panel hidden font-manrope">
    <div class="relative bg-navydark py-10 overflow-hidden select-none" id="spotWrap">
      <div class="pointer-events-none absolute left-0 top-0 bottom-0 w-28 z-10 bg-gradient-to-r from-navydark to-transparent"></div>
      <div class="pointer-events-none absolute right-0 top-0 bottom-0 w-28 z-10 bg-gradient-to-l from-navydark to-transparent"></div>

      <div class="overflow-hidden" id="spotOuter">
        <div id="spotTrack" class="flex items-center gap-3 w-max transition-transform duration-500 ease-[cubic-bezier(.77,0,.175,1)] px-16">

          <div class="si group relative shrink-0 w-48 rounded-2xl overflow-hidden cursor-pointer transition-all duration-500 ease-[cubic-bezier(.77,0,.175,1)] brightness-[.4] saturate-[.25] opacity-60 scale-90" data-si="0">
            <img src="https://i.pravatar.cc/500?img=11" alt="" class="si-img w-full h-52 object-cover object-top block transition-[height] duration-500"/>
            <div class="si-bar bg-navy px-4 py-3 border-t-2 border-transparent transition-all duration-500">
              <p class="si-name text-[13px] font-semibold text-white opacity-0 -translate-y-1 transition-all duration-300 delay-100 truncate">Budi Santoso, S.E.</p>
              <p class="si-jab text-[11px] text-blue-200 mt-0.5 opacity-0 transition-opacity duration-300 delay-150 truncate">Kepala Desa</p>
            </div>
          </div>

          <div class="si group relative shrink-0 w-48 rounded-2xl overflow-hidden cursor-pointer transition-all duration-500 ease-[cubic-bezier(.77,0,.175,1)] brightness-[.4] saturate-[.25] opacity-60 scale-90" data-si="1">
            <img src="https://i.pravatar.cc/500?img=15" alt="" class="si-img w-full h-52 object-cover object-top block transition-[height] duration-500"/>
            <div class="si-bar bg-navy px-4 py-3 border-t-2 border-transparent transition-all duration-500">
              <p class="si-name text-[13px] font-semibold text-white opacity-0 -translate-y-1 transition-all duration-300 delay-100 truncate">Siti Rahayu, S.Pd.</p>
              <p class="si-jab text-[11px] text-blue-200 mt-0.5 opacity-0 transition-opacity duration-300 delay-150 truncate">Sekretaris Desa</p>
            </div>
          </div>

          <div class="si group relative shrink-0 w-48 rounded-2xl overflow-hidden cursor-pointer transition-all duration-500 ease-[cubic-bezier(.77,0,.175,1)] brightness-[.4] saturate-[.25] opacity-60 scale-90" data-si="2">
            <img src="https://i.pravatar.cc/500?img=20" alt="" class="si-img w-full h-52 object-cover object-top block transition-[height] duration-500"/>
            <div class="si-bar bg-navy px-4 py-3 border-t-2 border-transparent transition-all duration-500">
              <p class="si-name text-[13px] font-semibold text-white opacity-0 -translate-y-1 transition-all duration-300 delay-100 truncate">Ahmad Fauzi</p>
              <p class="si-jab text-[11px] text-blue-200 mt-0.5 opacity-0 transition-opacity duration-300 delay-150 truncate">Kasi Pemerintahan</p>
            </div>
          </div>

          <div class="si group relative shrink-0 w-48 rounded-2xl overflow-hidden cursor-pointer transition-all duration-500 ease-[cubic-bezier(.77,0,.175,1)] brightness-[.4] saturate-[.25] opacity-60 scale-90" data-si="3">
            <img src="https://i.pravatar.cc/500?img=25" alt="" class="si-img w-full h-52 object-cover object-top block transition-[height] duration-500"/>
            <div class="si-bar bg-navy px-4 py-3 border-t-2 border-transparent transition-all duration-500">
              <p class="si-name text-[13px] font-semibold text-white opacity-0 -translate-y-1 transition-all duration-300 delay-100 truncate">Dewi Lestari, A.Md.</p>
              <p class="si-jab text-[11px] text-blue-200 mt-0.5 opacity-0 transition-opacity duration-300 delay-150 truncate">Kaur Keuangan</p>
            </div>
          </div>

          <div class="si group relative shrink-0 w-48 rounded-2xl overflow-hidden cursor-pointer transition-all duration-500 ease-[cubic-bezier(.77,0,.175,1)] brightness-[.4] saturate-[.25] opacity-60 scale-90" data-si="4">
            <img src="https://i.pravatar.cc/500?img=30" alt="" class="si-img w-full h-52 object-cover object-top block transition-[height] duration-500"/>
            <div class="si-bar bg-navy px-4 py-3 border-t-2 border-transparent transition-all duration-500">
              <p class="si-name text-[13px] font-semibold text-white opacity-0 -translate-y-1 transition-all duration-300 delay-100 truncate">Rudi Hermawan</p>
              <p class="si-jab text-[11px] text-blue-200 mt-0.5 opacity-0 transition-opacity duration-300 delay-150 truncate">Kaur Umum & Perencanaan</p>
            </div>
          </div>

          <div class="si group relative shrink-0 w-48 rounded-2xl overflow-hidden cursor-pointer transition-all duration-500 ease-[cubic-bezier(.77,0,.175,1)] brightness-[.4] saturate-[.25] opacity-60 scale-90" data-si="5">
            <img src="https://i.pravatar.cc/500?img=35" alt="" class="si-img w-full h-52 object-cover object-top block transition-[height] duration-500"/>
            <div class="si-bar bg-navy px-4 py-3 border-t-2 border-transparent transition-all duration-500">
              <p class="si-name text-[13px] font-semibold text-white opacity-0 -translate-y-1 transition-all duration-300 delay-100 truncate">Nurul Hidayah</p>
              <p class="si-jab text-[11px] text-blue-200 mt-0.5 opacity-0 transition-opacity duration-300 delay-150 truncate">Kasi Kesejahteraan</p>
            </div>
          </div>

          <div class="si group relative shrink-0 w-48 rounded-2xl overflow-hidden cursor-pointer transition-all duration-500 ease-[cubic-bezier(.77,0,.175,1)] brightness-[.4] saturate-[.25] opacity-60 scale-90" data-si="6">
            <img src="https://i.pravatar.cc/500?img=40" alt="" class="si-img w-full h-52 object-cover object-top block transition-[height] duration-500"/>
            <div class="si-bar bg-navy px-4 py-3 border-t-2 border-transparent transition-all duration-500">
              <p class="si-name text-[13px] font-semibold text-white opacity-0 -translate-y-1 transition-all duration-300 delay-100 truncate">Hendra Wijaya</p>
              <p class="si-jab text-[11px] text-blue-200 mt-0.5 opacity-0 transition-opacity duration-300 delay-150 truncate">Kepala Dusun I</p>
            </div>
          </div>

          <div class="si group relative shrink-0 w-48 rounded-2xl overflow-hidden cursor-pointer transition-all duration-500 ease-[cubic-bezier(.77,0,.175,1)] brightness-[.4] saturate-[.25] opacity-60 scale-90" data-si="7">
            <img src="https://i.pravatar.cc/500?img=45" alt="" class="si-img w-full h-52 object-cover object-top block transition-[height] duration-500"/>
            <div class="si-bar bg-navy px-4 py-3 border-t-2 border-transparent transition-all duration-500">
              <p class="si-name text-[13px] font-semibold text-white opacity-0 -translate-y-1 transition-all duration-300 delay-100 truncate">Yuli Astuti, S.Sos.</p>
              <p class="si-jab text-[11px] text-blue-200 mt-0.5 opacity-0 transition-opacity duration-300 delay-150 truncate">Kepala Dusun II</p>
            </div>
          </div>

        </div>
      </div>

      <div class="flex items-center justify-center gap-4 mt-6 px-4">
        <button id="spotPrev" class="w-10 h-10 rounded-full bg-navy/70 border border-blue-200/20 text-blue-200 flex items-center justify-center backdrop-blur hover:bg-navy hover:border-blue-200/50 hover:scale-105 active:scale-95 transition-all duration-200">
          <svg width="13" height="13" viewBox="0 0 14 14" fill="none"><path d="M9 2L4 7L9 12" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        <div id="spotDots" class="flex items-center gap-2">
          <div class="sd w-1.5 h-1.5 rounded-full bg-blue-200/25 cursor-pointer transition-all duration-300" data-di="0"></div>
          <div class="sd w-1.5 h-1.5 rounded-full bg-blue-200/25 cursor-pointer transition-all duration-300" data-di="1"></div>
          <div class="sd w-1.5 h-1.5 rounded-full bg-blue-200/25 cursor-pointer transition-all duration-300" data-di="2"></div>
          <div class="sd w-1.5 h-1.5 rounded-full bg-blue-200/25 cursor-pointer transition-all duration-300" data-di="3"></div>
          <div class="sd w-1.5 h-1.5 rounded-full bg-blue-200/25 cursor-pointer transition-all duration-300" data-di="4"></div>
          <div class="sd w-1.5 h-1.5 rounded-full bg-blue-200/25 cursor-pointer transition-all duration-300" data-di="5"></div>
          <div class="sd w-1.5 h-1.5 rounded-full bg-blue-200/25 cursor-pointer transition-all duration-300" data-di="6"></div>
          <div class="sd w-1.5 h-1.5 rounded-full bg-blue-200/25 cursor-pointer transition-all duration-300" data-di="7"></div>
        </div>
        <button id="spotNext" class="w-10 h-10 rounded-full bg-navy/70 border border-blue-200/20 text-blue-200 flex items-center justify-center backdrop-blur hover:bg-navy hover:border-blue-200/50 hover:scale-105 active:scale-95 transition-all duration-200">
          <svg width="13" height="13" viewBox="0 0 14 14" fill="none"><path d="M5 2L10 7L5 12" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        <p class="font-mono text-[11px] text-blue-200/40 tracking-widest ml-2"><span id="spotNum" class="text-blue-200">01</span> / 08</p>
      </div>
    </div>
  </div>


  <!-- ═══════════════════════════
       DESIGN 3 — BENTO MOSAIC
  ═══════════════════════════ -->
  <div id="d3" class="tab-panel hidden font-jakarta">
    <div class="bg-[#07101f] py-10 px-5">
      <div class="grid grid-cols-12 gap-2 max-w-4xl mx-auto">

        <!-- 0 featured wide tall + top accent via ring -->
        <div class="group relative col-span-5 row-span-2 rounded-2xl overflow-hidden cursor-default min-h-[380px] ring-t-[3px] ring-blue-500">
          <div class="absolute top-0 left-0 right-0 h-[3px] bg-gradient-to-r from-blue-500 via-blue-300 to-transparent z-10"></div>
          <span class="absolute top-3 left-3 z-10 text-[9px] font-bold tracking-[.12em] uppercase text-blue-200 bg-navy/75 border border-blue-200/30 rounded-full px-2.5 py-1 backdrop-blur-sm">Kepala Desa</span>
          <img src="https://i.pravatar.cc/600?img=11" alt="" class="absolute inset-0 w-full h-full object-cover object-top saturate-[.6] brightness-[.8] group-hover:scale-[1.07] group-hover:saturate-100 group-hover:brightness-[.95] transition-all duration-[600ms]"/>
          <div class="absolute inset-0 bg-gradient-to-t from-[#07101f]/95 via-[#07101f]/40 to-transparent"></div>
          <div class="absolute bottom-0 left-0 right-0 p-4">
            <p class="text-[9px] tracking-[.13em] uppercase font-semibold text-blue-200 opacity-0 translate-y-1.5 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 delay-[50ms] mb-1">Kepala Desa</p>
            <p class="text-base font-bold text-white translate-y-1 group-hover:translate-y-0 transition-all duration-300">Budi Santoso, S.E.</p>
          </div>
        </div>

        <!-- 1 tall medium -->
        <div class="group relative col-span-4 row-span-2 rounded-2xl overflow-hidden cursor-default min-h-[380px]">
          <img src="https://i.pravatar.cc/600?img=15" alt="" class="absolute inset-0 w-full h-full object-cover object-top saturate-[.6] brightness-[.8] group-hover:scale-[1.07] group-hover:saturate-100 group-hover:brightness-[.95] transition-all duration-[600ms]"/>
          <div class="absolute inset-0 bg-gradient-to-t from-[#07101f]/95 via-[#07101f]/40 to-transparent"></div>
          <div class="absolute bottom-0 left-0 right-0 p-4">
            <p class="text-[9px] tracking-[.13em] uppercase font-semibold text-blue-200 opacity-0 translate-y-1.5 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 delay-[50ms] mb-1">Sekretaris Desa</p>
            <p class="text-sm font-bold text-white translate-y-1 group-hover:translate-y-0 transition-all duration-300">Siti Rahayu, S.Pd.</p>
          </div>
        </div>

        <!-- 2 small -->
        <div class="group relative col-span-3 rounded-2xl overflow-hidden cursor-default min-h-[185px]">
          <img src="https://i.pravatar.cc/400?img=20" alt="" class="absolute inset-0 w-full h-full object-cover object-top saturate-[.6] brightness-[.8] group-hover:scale-[1.07] group-hover:saturate-100 group-hover:brightness-[.95] transition-all duration-[600ms]"/>
          <div class="absolute inset-0 bg-gradient-to-t from-[#07101f]/95 via-[#07101f]/40 to-transparent"></div>
          <div class="absolute bottom-0 left-0 right-0 p-3">
            <p class="text-[8px] tracking-[.13em] uppercase font-semibold text-blue-200 opacity-0 translate-y-1.5 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 delay-[50ms] mb-0.5">Kasi Pemerintahan</p>
            <p class="text-xs font-bold text-white translate-y-1 group-hover:translate-y-0 transition-all duration-300">Ahmad Fauzi</p>
          </div>
        </div>

        <!-- 3 small -->
        <div class="group relative col-span-3 rounded-2xl overflow-hidden cursor-default min-h-[185px]">
          <img src="https://i.pravatar.cc/400?img=25" alt="" class="absolute inset-0 w-full h-full object-cover object-top saturate-[.6] brightness-[.8] group-hover:scale-[1.07] group-hover:saturate-100 group-hover:brightness-[.95] transition-all duration-[600ms]"/>
          <div class="absolute inset-0 bg-gradient-to-t from-[#07101f]/95 via-[#07101f]/40 to-transparent"></div>
          <div class="absolute bottom-0 left-0 right-0 p-3">
            <p class="text-[8px] tracking-[.13em] uppercase font-semibold text-blue-200 opacity-0 translate-y-1.5 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 delay-[50ms] mb-0.5">Kaur Keuangan</p>
            <p class="text-xs font-bold text-white translate-y-1 group-hover:translate-y-0 transition-all duration-300">Dewi Lestari, A.Md.</p>
          </div>
        </div>

        <!-- 4 half -->
        <div class="group relative col-span-6 rounded-2xl overflow-hidden cursor-default min-h-[205px]">
          <img src="https://i.pravatar.cc/600?img=30" alt="" class="absolute inset-0 w-full h-full object-cover object-top saturate-[.6] brightness-[.8] group-hover:scale-[1.07] group-hover:saturate-100 group-hover:brightness-[.95] transition-all duration-[600ms]"/>
          <div class="absolute inset-0 bg-gradient-to-t from-[#07101f]/95 via-[#07101f]/40 to-transparent"></div>
          <div class="absolute bottom-0 left-0 right-0 p-4">
            <p class="text-[9px] tracking-[.13em] uppercase font-semibold text-blue-200 opacity-0 translate-y-1.5 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 delay-[50ms] mb-1">Kaur Umum & Perencanaan</p>
            <p class="text-sm font-bold text-white translate-y-1 group-hover:translate-y-0 transition-all duration-300">Rudi Hermawan</p>
          </div>
        </div>

        <!-- 5 half -->
        <div class="group relative col-span-6 rounded-2xl overflow-hidden cursor-default min-h-[205px]">
          <img src="https://i.pravatar.cc/600?img=35" alt="" class="absolute inset-0 w-full h-full object-cover object-top saturate-[.6] brightness-[.8] group-hover:scale-[1.07] group-hover:saturate-100 group-hover:brightness-[.95] transition-all duration-[600ms]"/>
          <div class="absolute inset-0 bg-gradient-to-t from-[#07101f]/95 via-[#07101f]/40 to-transparent"></div>
          <div class="absolute bottom-0 left-0 right-0 p-4">
            <p class="text-[9px] tracking-[.13em] uppercase font-semibold text-blue-200 opacity-0 translate-y-1.5 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 delay-[50ms] mb-1">Kasi Kesejahteraan</p>
            <p class="text-sm font-bold text-white translate-y-1 group-hover:translate-y-0 transition-all duration-300">Nurul Hidayah</p>
          </div>
        </div>

        <!-- 6 medium -->
        <div class="group relative col-span-4 rounded-2xl overflow-hidden cursor-default min-h-[220px]">
          <img src="https://i.pravatar.cc/600?img=40" alt="" class="absolute inset-0 w-full h-full object-cover object-top saturate-[.6] brightness-[.8] group-hover:scale-[1.07] group-hover:saturate-100 group-hover:brightness-[.95] transition-all duration-[600ms]"/>
          <div class="absolute inset-0 bg-gradient-to-t from-[#07101f]/95 via-[#07101f]/40 to-transparent"></div>
          <div class="absolute bottom-0 left-0 right-0 p-4">
            <p class="text-[9px] tracking-[.13em] uppercase font-semibold text-blue-200 opacity-0 translate-y-1.5 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 delay-[50ms] mb-1">Kepala Dusun I</p>
            <p class="text-sm font-bold text-white translate-y-1 group-hover:translate-y-0 transition-all duration-300">Hendra Wijaya</p>
          </div>
        </div>

        <!-- 7 cinematic wide -->
        <div class="group relative col-span-8 rounded-2xl overflow-hidden cursor-default min-h-[220px]">
          <img src="https://i.pravatar.cc/800?img=45" alt="" class="absolute inset-0 w-full h-full object-cover [object-position:center_20%] saturate-[.6] brightness-[.8] group-hover:scale-[1.07] group-hover:saturate-100 group-hover:brightness-[.95] transition-all duration-[600ms]"/>
          <div class="absolute inset-0 bg-gradient-to-t from-[#07101f]/95 via-[#07101f]/40 to-transparent"></div>
          <div class="absolute bottom-0 left-0 right-0 p-4">
            <p class="text-[9px] tracking-[.13em] uppercase font-semibold text-blue-200 opacity-0 translate-y-1.5 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 delay-[50ms] mb-1">Kepala Dusun II</p>
            <p class="text-[15px] font-bold text-white translate-y-1 group-hover:translate-y-0 transition-all duration-300">Yuli Astuti, S.Sos.</p>
          </div>
        </div>

      </div>
    </div>
  </div>


  <script>
    /* ── Tabs ── */
    document.querySelectorAll('.tab-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        document.querySelectorAll('.tab-btn').forEach(b => {
          b.classList.remove('border-navy','text-navy');
          b.classList.add('border-transparent','text-gray-400');
        });
        document.querySelectorAll('.tab-panel').forEach(p => p.classList.add('hidden'));
        btn.classList.remove('border-transparent','text-gray-400');
        btn.classList.add('border-navy','text-navy');
        document.getElementById(btn.dataset.tab).classList.remove('hidden');
        if (btn.dataset.tab === 'd2') spot.go(0);
      });
    });

    /* ── D1: 3D tilt ── */
    function d1Tilt(e, el) {
      const r  = el.getBoundingClientRect();
      const rx = ((e.clientY - r.top)  / r.height - .5) * -20;
      const ry = ((e.clientX - r.left) / r.width  - .5) *  20;
      el.style.transform = `perspective(700px) rotateX(${rx}deg) rotateY(${ry}deg) scale3d(1.05,1.05,1.05)`;
      el.closest('#strip1').style.animationPlayState = 'paused';
    }
    function d1Reset(el) {
      el.style.transform = '';
      el.closest('#strip1').style.animationPlayState = '';
    }

    /* ── D2: spotlight ── */
    const spot = (() => {
      const track = document.getElementById('spotTrack');
      const outer = document.getElementById('spotOuter');
      const cards = [...track.querySelectorAll('.si')];
      const dots  = [...document.querySelectorAll('.sd')];
      const numEl = document.getElementById('spotNum');
      const N = cards.length;
      let cur = 0, timer;

      function go(idx) {
        cur = ((idx % N) + N) % N;

        cards.forEach((c, i) => {
          const diff = Math.min(Math.abs(i - cur), N - Math.abs(i - cur));
          const img  = c.querySelector('.si-img');
          const bar  = c.querySelector('.si-bar');
          const name = c.querySelector('.si-name');
          const jab  = c.querySelector('.si-jab');

          // reset base classes
          c.classList.remove(
            'brightness-100','saturate-100','opacity-100','scale-100',
            '!w-64','shadow-[0_0_0_2px_rgba(147,197,253,.45),0_25px_60px_rgba(13,43,94,.7)]',
            'brightness-[.65]','saturate-[.5]','!opacity-80','!scale-[.96]'
          );

          if (diff === 0) {
            c.classList.add('brightness-100','saturate-100','opacity-100','scale-100','!w-64','shadow-[0_0_0_2px_rgba(147,197,253,.45),0_25px_60px_rgba(13,43,94,.7)]');
            img.classList.replace('h-52','h-[255px]');
            bar.classList.replace('border-transparent','border-blue-200/40');
            name.classList.replace('opacity-0','opacity-100');
            name.classList.replace('-translate-y-1','translate-y-0');
            jab.classList.replace('opacity-0','opacity-100');
          } else {
            img.classList.replace('h-[255px]','h-52');
            bar.classList.replace('border-blue-200/40','border-transparent');
            name.classList.replace('opacity-100','opacity-0');
            name.classList.replace('translate-y-0','-translate-y-1');
            jab.classList.replace('opacity-100','opacity-0');
            if (diff === 1) c.classList.add('brightness-[.65]','saturate-[.5]','!opacity-80','!scale-[.96]');
          }
        });

        // center scroll
        const ac = cards[cur];
        track.style.transform = `translateX(${-(ac.offsetLeft - outer.offsetWidth/2 + ac.offsetWidth/2)}px)`;

        // dots
        dots.forEach((d, i) => {
          if (i === cur) { d.classList.add('!w-5','!rounded','!bg-blue-200'); d.classList.remove('bg-blue-200/25'); }
          else           { d.classList.remove('!w-5','!rounded','!bg-blue-200'); d.classList.add('bg-blue-200/25'); }
        });

        numEl.textContent = String(cur + 1).padStart(2, '0');
      }

      function start() { clearInterval(timer); timer = setInterval(() => go(cur + 1), 3200); }

      document.getElementById('spotNext').addEventListener('click', () => { go(cur + 1); start(); });
      document.getElementById('spotPrev').addEventListener('click', () => { go(cur - 1); start(); });
      dots.forEach((d, i) => d.addEventListener('click', () => { go(i); start(); }));
      cards.forEach((c, i) => c.addEventListener('click', () => { go(i); start(); }));

      const wrap = document.getElementById('spotWrap');
      wrap.addEventListener('mouseenter', () => clearInterval(timer));
      wrap.addEventListener('mouseleave', start);

      let tx = 0;
      wrap.addEventListener('touchstart', e => { tx = e.touches[0].clientX; }, { passive: true });
      wrap.addEventListener('touchend',   e => {
        const dx = e.changedTouches[0].clientX - tx;
        if (Math.abs(dx) > 40) { go(dx < 0 ? cur + 1 : cur - 1); start(); }
      }, { passive: true });

      go(0); start();
      return { go };
    })();
  </script>

</body>
</html>
