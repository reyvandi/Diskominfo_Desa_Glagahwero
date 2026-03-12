<div>

  {{-- ── Tab Nav ── --}}
  <div class="sticky top-0 z-50 border-b" style="background:#0D2B5E; border-color:rgba(255,255,255,0.08);">
    <div class="max-w-5xl mx-auto px-6">
      <div class="flex gap-0">
        <button data-tab="d1" class="tab-btn relative px-6 py-4 text-sm font-semibold transition-all duration-200" style="color:#ffffff; font-family:'Plus Jakarta Sans',sans-serif;">
          <span class="flex items-center gap-2">Film Strip</span>
          <div class="tab-underline absolute bottom-0 left-0 right-0 h-0.5 transition-all duration-200" style="background:#1D4ED8;"></div>
        </button>
        <button data-tab="d2" class="tab-btn relative px-6 py-4 text-sm font-semibold transition-all duration-200" style="color:rgba(255,255,255,0.45); font-family:'Plus Jakarta Sans',sans-serif;">
          <span class="flex items-center gap-2">Spotlight</span>
          <div class="tab-underline absolute bottom-0 left-0 right-0 h-0.5 transition-all duration-200" style="background:transparent;"></div>
        </button>
        <button data-tab="d3" class="tab-btn relative px-6 py-4 text-sm font-semibold transition-all duration-200" style="color:rgba(255,255,255,0.45); font-family:'Plus Jakarta Sans',sans-serif;">
          <span class="flex items-center gap-2">Galeri</span>
          <div class="tab-underline absolute bottom-0 left-0 right-0 h-0.5 transition-all duration-200" style="background:transparent;"></div>
        </button>
      </div>
    </div>
  </div>

  @php
    $aparatur = [
      ['nama'=>'Budi Santoso, S.E.','jabatan'=>'Kepala Desa'],
      ['nama'=>'Siti Rahayu, S.Pd.','jabatan'=>'Sekretaris Desa'],
      ['nama'=>'Ahmad Fauzi','jabatan'=>'Kasi Pemerintahan'],
      ['nama'=>'Dewi Lestari, A.Md.','jabatan'=>'Kaur Keuangan'],
      ['nama'=>'Rudi Hermawan','jabatan'=>'Kaur Umum & Perencanaan'],
      ['nama'=>'Nurul Hidayah','jabatan'=>'Kasi Kesejahteraan'],
      ['nama'=>'Hendra Wijaya','jabatan'=>'Kepala Dusun I'],
      ['nama'=>'Yuli Astuti, S.Sos.','jabatan'=>'Kepala Dusun II'],
    ];
  @endphp


  {{-- ════════════════════════════
       DESIGN 1 — FILM STRIP
  ════════════════════════════ --}}
  <div id="d1" class="tab-panel" style="background:#0D2B5E; padding:2.5rem 0;">

    <div class="overflow-hidden" style="mask-image:linear-gradient(to right,transparent,black 100px,black calc(100% - 100px),transparent); -webkit-mask-image:linear-gradient(to right,transparent,black 100px,black calc(100% - 100px),transparent);">
      <div id="strip1" class="flex gap-5 px-6" style="width:max-content; animation:stripRoll 35s linear infinite;">

        @foreach(array_merge($aparatur, $aparatur) as $item)
        <div class="d1c group relative shrink-0 cursor-pointer"
             style="width:200px; transform-style:preserve-3d;"
             onmousemove="d1Tilt(event,this)" onmouseleave="d1Reset(this)">

          {{-- Photo --}}
          <div class="rounded-2xl overflow-hidden mb-3" style="height:245px; box-shadow:0 6px 30px rgba(0,0,0,0.35);">
            <img src="{{ asset('images/aparatur-foto.jpg') }}" alt="{{ $item['nama'] }}"
                 class="w-full h-full object-cover object-top transition-all duration-500 group-hover:scale-[1.07]"/>
          </div>

          {{-- Info card --}}
          <div class="rounded-xl px-4 py-3 transition-all duration-300"
               style="background:rgba(255,255,255,0.06); border:1px solid rgba(96,165,250,0.15); backdrop-filter:blur(4px);">
            <div class="flex items-center gap-2 mb-1">
              <div class="w-1.5 h-1.5 rounded-full flex-shrink-0" style="background:#1D4ED8;"></div>
              <p style="font-size:10px; color:#1D4ED8; font-weight:600; letter-spacing:.08em; text-transform:uppercase; font-family:'Plus Jakarta Sans',sans-serif; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">{{ $item['jabatan'] }}</p>
            </div>
            <p class="font-bold truncate" style="font-size:13px; color:#ffffff; font-family:'Plus Jakarta Sans',sans-serif;">{{ $item['nama'] }}</p>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div>


  {{-- ════════════════════════════
       DESIGN 2 — SPOTLIGHT
  ════════════════════════════ --}}
  <div id="d2" class="tab-panel hidden" style="background:#0D2B5E;">

    {{-- Subtle top texture --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden" style="opacity:.04; background-image:radial-gradient(circle at 20% 50%,#1D4ED8 0,transparent 50%),radial-gradient(circle at 80% 20%,#1D4ED8 0,transparent 40%);"></div>

    <div class="relative py-12 overflow-hidden select-none" id="spotWrap">
      <div class="pointer-events-none absolute left-0 top-0 bottom-0 z-10" style="width:130px; background:linear-gradient(to right,#0D2B5E,transparent);"></div>
      <div class="pointer-events-none absolute right-0 top-0 bottom-0 z-10" style="width:130px; background:linear-gradient(to left,#0D2B5E,transparent);"></div>

      <div class="overflow-hidden" id="spotOuter">
        <div id="spotTrack" class="flex items-end gap-5 px-28" style="width:max-content; transition:transform .6s cubic-bezier(.77,0,.175,1);">

          @php $siIndex = 0; @endphp
          @foreach($aparatur as $item)
          <div class="si relative shrink-0 cursor-pointer rounded-2xl overflow-hidden"
               data-si="{{ $siIndex }}"
               style="width:176px; opacity:0.5; transform:scale(.88) translateY(14px); filter:saturate(.3) brightness(.75); transition:all .55s cubic-bezier(.77,0,.175,1); box-shadow:0 4px 20px rgba(0,0,0,0.3);">

            <img src="{{ asset('images/aparatur-foto.jpg') }}" alt=""
                 class="si-img w-full object-cover object-top block"
                 style="height:220px; transition:height .55s cubic-bezier(.77,0,.175,1);"/>

            {{-- Active ring overlay --}}
            <div class="si-ring absolute inset-0 rounded-2xl opacity-0 pointer-events-none transition-opacity duration-400" style="box-shadow:inset 0 0 0 2px #1D4ED8;"></div>

            {{-- Info --}}
            <div class="si-bar px-4 py-3" style="background:#0a2040; border-top:1px solid rgba(96,165,250,0); transition:border-color .4s;">
              <p class="si-jab font-semibold uppercase" style="font-size:9px; letter-spacing:.12em; color:#1D4ED8; opacity:0; transition:opacity .3s ease .1s; font-family:'Plus Jakarta Sans',sans-serif; margin-bottom:3px;">{{ $item['jabatan'] }}</p>
              <p class="si-name font-bold text-white truncate" style="font-size:13px; opacity:0; transform:translateY(5px); transition:all .3s ease .15s; font-family:'Plus Jakarta Sans',sans-serif;">{{ $item['nama'] }}</p>
            </div>
          </div>
          @php $siIndex++; @endphp
          @endforeach

        </div>
      </div>

      {{-- Controls --}}
      <div class="flex items-center justify-center gap-4 mt-8">
        <button id="spotPrev" class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-200 hover:scale-110 active:scale-90"
                style="background:rgba(255,255,255,0.08); border:1px solid rgba(255,255,255,0.15); color:#ffffff;">
          <svg width="13" height="13" viewBox="0 0 14 14" fill="none"><path d="M9 2L4 7L9 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>

        <div id="spotDots" class="flex items-center gap-2">
          @for($i = 0; $i < count($aparatur); $i++)
            <div class="sd rounded-full cursor-pointer transition-all duration-300" data-di="{{ $i }}" style="width:6px; height:6px; background:rgba(255,255,255,0.2);"></div>
          @endfor
        </div>

        <button id="spotNext" class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-200 hover:scale-110 active:scale-90"
                style="background:#1D4ED8; border:1px solid #1D4ED8; color:#ffffff; box-shadow:0 4px 16px rgba(59,130,246,0.4);">
          <svg width="13" height="13" viewBox="0 0 14 14" fill="none"><path d="M5 2L10 7L5 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
      </div>

      <div class="text-center mt-3 pb-10">
        <span style="font-family:monospace; font-size:11px; color:rgba(255,255,255,0.25); letter-spacing:.15em;">
          <span id="spotNum" style="color:rgba(255,255,255,0.7); font-weight:700; font-size:13px;">01</span>
          <span style="margin:0 .35rem; opacity:.4;">/</span>
          {{ str_pad(count($aparatur), 2, '0', STR_PAD_LEFT) }}
        </span>
      </div>
    </div>
  </div>


  {{-- ════════════════════════════
       DESIGN 3 — BENTO MOSAIC
  ════════════════════════════ --}}
  <div id="d3" class="tab-panel hidden" style="background:#0D2B5E;">
    <div class="py-10 px-5">
      <div class="grid grid-cols-12 gap-3 max-w-5xl mx-auto">

        {{-- 0 featured hero --}}
        <div class="group relative col-span-5 row-span-2 rounded-3xl overflow-hidden cursor-default" style="min-height:420px; box-shadow:0 8px 40px rgba(0,0,0,0.4);">
          <img src="{{ asset('images/aparatur-foto.jpg') }}" alt="" class="absolute inset-0 w-full h-full object-cover object-top transition-all duration-700 group-hover:scale-[1.05]"/>
          <div class="absolute inset-0" style="background:linear-gradient(160deg,transparent 30%,rgba(7,17,40,0.9) 100%);"></div>
          <div class="absolute top-0 left-0 right-0" style="height:3px; background:linear-gradient(to right,#1D4ED8,#1D4ED8,transparent);"></div>
          <div class="absolute top-4 left-4 px-3 py-1.5 rounded-full" style="background:rgba(59,130,246,0.2); border:1px solid rgba(96,165,250,0.4); backdrop-filter:blur(8px);">
            <span style="font-size:9px; font-weight:700; letter-spacing:.13em; text-transform:uppercase; color:#1D4ED8; font-family:'Plus Jakarta Sans',sans-serif;">Kepala Desa</span>
          </div>
          <div class="absolute bottom-0 left-0 right-0 p-5">
            <p class="font-black text-white" style="font-size:1.1rem; font-family:'Plus Jakarta Sans',sans-serif; letter-spacing:-.01em; margin-bottom:4px;">Budi Santoso, S.E.</p>
            <p style="font-size:11px; color:#1D4ED8; font-family:'Plus Jakarta Sans',sans-serif;">Desa Glagahwero</p>
          </div>
        </div>

        {{-- 1 tall --}}
        <div class="group relative col-span-4 row-span-2 rounded-3xl overflow-hidden cursor-default" style="min-height:420px; box-shadow:0 8px 40px rgba(0,0,0,0.35);">
          <img src="{{ asset('images/aparatur-foto.jpg') }}" alt="" class="absolute inset-0 w-full h-full object-cover object-top transition-all duration-700 group-hover:scale-[1.05]"/>
          <div class="absolute inset-0" style="background:linear-gradient(160deg,transparent 30%,rgba(7,17,40,0.88) 100%);"></div>
          <div class="absolute bottom-0 left-0 right-0 p-4">
            <p style="font-size:9px; font-weight:700; letter-spacing:.13em; text-transform:uppercase; color:#1D4ED8; font-family:'Plus Jakarta Sans',sans-serif; margin-bottom:5px;">Sekretaris Desa</p>
            <p class="font-bold text-white" style="font-size:.9rem; font-family:'Plus Jakarta Sans',sans-serif;">Siti Rahayu, S.Pd.</p>
          </div>
        </div>

        {{-- 2 --}}
        <div class="group relative col-span-3 rounded-3xl overflow-hidden cursor-default" style="min-height:200px; box-shadow:0 4px 24px rgba(0,0,0,0.3);">
          <img src="{{ asset('images/aparatur-foto.jpg') }}" alt="" class="absolute inset-0 w-full h-full object-cover object-top transition-all duration-700 group-hover:scale-[1.06]"/>
          <div class="absolute inset-0" style="background:linear-gradient(160deg,transparent 20%,rgba(7,17,40,0.88) 100%);"></div>
          <div class="absolute bottom-0 left-0 right-0 p-3">
            <p style="font-size:8px; font-weight:700; letter-spacing:.12em; text-transform:uppercase; color:#1D4ED8; font-family:'Plus Jakarta Sans',sans-serif; margin-bottom:3px;">Kasi Pemerintahan</p>
            <p class="font-bold text-white text-xs" style="font-family:'Plus Jakarta Sans',sans-serif;">Ahmad Fauzi</p>
          </div>
        </div>

        {{-- 3 --}}
        <div class="group relative col-span-3 rounded-3xl overflow-hidden cursor-default" style="min-height:200px; box-shadow:0 4px 24px rgba(0,0,0,0.3);">
          <img src="{{ asset('images/aparatur-foto.jpg') }}" alt="" class="absolute inset-0 w-full h-full object-cover object-top transition-all duration-700 group-hover:scale-[1.06]"/>
          <div class="absolute inset-0" style="background:linear-gradient(160deg,transparent 20%,rgba(7,17,40,0.88) 100%);"></div>
          <div class="absolute bottom-0 left-0 right-0 p-3">
            <p style="font-size:8px; font-weight:700; letter-spacing:.12em; text-transform:uppercase; color:#1D4ED8; font-family:'Plus Jakarta Sans',sans-serif; margin-bottom:3px;">Kaur Keuangan</p>
            <p class="font-bold text-white text-xs" style="font-family:'Plus Jakarta Sans',sans-serif;">Dewi Lestari, A.Md.</p>
          </div>
        </div>

        {{-- 4 --}}
        <div class="group relative col-span-6 rounded-3xl overflow-hidden cursor-default" style="min-height:210px; box-shadow:0 4px 24px rgba(0,0,0,0.3);">
          <img src="{{ asset('images/aparatur-foto.jpg') }}" alt="" class="absolute inset-0 w-full h-full object-cover object-top transition-all duration-700 group-hover:scale-[1.05]"/>
          <div class="absolute inset-0" style="background:linear-gradient(160deg,transparent 25%,rgba(7,17,40,0.88) 100%);"></div>
          <div class="absolute bottom-0 left-0 right-0 p-4">
            <p style="font-size:9px; font-weight:700; letter-spacing:.12em; text-transform:uppercase; color:#1D4ED8; font-family:'Plus Jakarta Sans',sans-serif; margin-bottom:4px;">Kaur Umum & Perencanaan</p>
            <p class="font-bold text-white" style="font-size:.875rem; font-family:'Plus Jakarta Sans',sans-serif;">Rudi Hermawan</p>
          </div>
        </div>

        {{-- 5 --}}
        <div class="group relative col-span-6 rounded-3xl overflow-hidden cursor-default" style="min-height:210px; box-shadow:0 4px 24px rgba(0,0,0,0.3);">
          <img src="{{ asset('images/aparatur-foto.jpg') }}" alt="" class="absolute inset-0 w-full h-full object-cover object-top transition-all duration-700 group-hover:scale-[1.05]"/>
          <div class="absolute inset-0" style="background:linear-gradient(160deg,transparent 25%,rgba(7,17,40,0.88) 100%);"></div>
          <div class="absolute bottom-0 left-0 right-0 p-4">
            <p style="font-size:9px; font-weight:700; letter-spacing:.12em; text-transform:uppercase; color:#1D4ED8; font-family:'Plus Jakarta Sans',sans-serif; margin-bottom:4px;">Kasi Kesejahteraan</p>
            <p class="font-bold text-white" style="font-size:.875rem; font-family:'Plus Jakarta Sans',sans-serif;">Nurul Hidayah</p>
          </div>
        </div>

        {{-- 6 --}}
        <div class="group relative col-span-4 rounded-3xl overflow-hidden cursor-default" style="min-height:230px; box-shadow:0 4px 24px rgba(0,0,0,0.3);">
          <img src="{{ asset('images/aparatur-foto.jpg') }}" alt="" class="absolute inset-0 w-full h-full object-cover object-top transition-all duration-700 group-hover:scale-[1.05]"/>
          <div class="absolute inset-0" style="background:linear-gradient(160deg,transparent 25%,rgba(7,17,40,0.88) 100%);"></div>
          <div class="absolute bottom-0 left-0 right-0 p-4">
            <p style="font-size:9px; font-weight:700; letter-spacing:.12em; text-transform:uppercase; color:#1D4ED8; font-family:'Plus Jakarta Sans',sans-serif; margin-bottom:4px;">Kepala Dusun I</p>
            <p class="font-bold text-white" style="font-size:.875rem; font-family:'Plus Jakarta Sans',sans-serif;">Hendra Wijaya</p>
          </div>
        </div>

        {{-- 7 --}}
        <div class="group relative col-span-8 rounded-3xl overflow-hidden cursor-default" style="min-height:230px; box-shadow:0 4px 24px rgba(0,0,0,0.3);">
          <img src="{{ asset('images/aparatur-foto.jpg') }}" alt="" class="absolute inset-0 w-full h-full object-cover transition-all duration-700 group-hover:scale-[1.05]" style="object-position:center 20%;"/>
          <div class="absolute inset-0" style="background:linear-gradient(160deg,transparent 25%,rgba(7,17,40,0.88) 100%);"></div>
          <div class="absolute top-4 right-4 px-3 py-1.5 rounded-full" style="background:rgba(59,130,246,0.2); border:1px solid rgba(96,165,250,0.35); backdrop-filter:blur(8px);">
            <span style="font-size:9px; font-weight:700; letter-spacing:.12em; text-transform:uppercase; color:#1D4ED8; font-family:'Plus Jakarta Sans',sans-serif;">Kepala Dusun II</span>
          </div>
          <div class="absolute bottom-0 left-0 right-0 p-4">
            <p class="font-bold text-white" style="font-size:1rem; font-family:'Plus Jakarta Sans',sans-serif;">Yuli Astuti, S.Sos.</p>
          </div>
        </div>

      </div>
    </div>
  </div>


  {{-- ── Styles & Scripts ── --}}
  <style>
    @keyframes stripRoll {
      0%   { transform: translateX(0); }
      100% { transform: translateX(-50%); }
    }
    #strip1:hover { animation-play-state: paused; }
  </style>

  <script>
    /* ── Tabs ── */
    document.querySelectorAll('.tab-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        document.querySelectorAll('.tab-btn').forEach(b => {
          b.style.color = 'rgba(255,255,255,0.45)';
          b.querySelector('.tab-underline').style.background = 'transparent';
        });
        document.querySelectorAll('.tab-panel').forEach(p => p.classList.add('hidden'));
        btn.style.color = '#ffffff';
        btn.querySelector('.tab-underline').style.background = '#1D4ED8';
        document.getElementById(btn.dataset.tab).classList.remove('hidden');
        if (btn.dataset.tab === 'd2') spot.go(0);
      });
    });

    /* ── D1: 3D tilt ── */
    function d1Tilt(e, el) {
      const r  = el.getBoundingClientRect();
      const rx = ((e.clientY - r.top)  / r.height - .5) * -14;
      const ry = ((e.clientX - r.left) / r.width  - .5) *  14;
      el.style.transform = `perspective(800px) rotateX(${rx}deg) rotateY(${ry}deg) scale3d(1.04,1.04,1.04)`;
      document.getElementById('strip1').style.animationPlayState = 'paused';
    }
    function d1Reset(el) {
      el.style.transform = '';
      document.getElementById('strip1').style.animationPlayState = '';
    }

    /* ── D2: Spotlight ── */
    const spot = (() => {
      const track = document.getElementById('spotTrack');
      const outer = document.getElementById('spotOuter');
      const cards = [...(track ? track.querySelectorAll('.si') : [])];
      const dots  = [...document.querySelectorAll('.sd')];
      const numEl = document.getElementById('spotNum');
      const N = cards.length;
      if (!N) return { go: () => {} };
      let cur = 0, timer;

      function go(idx) {
        cur = ((idx % N) + N) % N;

        cards.forEach((c, i) => {
          const img  = c.querySelector('.si-img');
          const ring = c.querySelector('.si-ring');
          const bar  = c.querySelector('.si-bar');
          const name = c.querySelector('.si-name');
          const jab  = c.querySelector('.si-jab');
          const diff = Math.min(Math.abs(i - cur), N - Math.abs(i - cur));

          if (diff === 0) {
            c.style.width     = '220px';
            c.style.opacity   = '1';
            c.style.transform = 'scale(1) translateY(0)';
            c.style.filter    = 'saturate(1) brightness(1)';
            c.style.boxShadow = '0 12px 50px rgba(0,0,0,0.5), 0 0 0 1.5px rgba(96,165,250,0.5)';
            if (img)  img.style.height = '270px';
            if (ring) ring.style.opacity = '1';
            if (bar)  bar.style.borderTopColor = 'rgba(96,165,250,0.25)';
            if (name) { name.style.opacity = '1'; name.style.transform = 'translateY(0)'; }
            if (jab)  jab.style.opacity = '1';
          } else {
            const w = diff === 1 ? '176px' : '156px';
            const s = diff === 1 ? 'scale(.9) translateY(12px)' : 'scale(.84) translateY(20px)';
            const f = diff === 1 ? 'saturate(.35) brightness(.7)' : 'saturate(.2) brightness(.6)';
            const o = diff === 1 ? '0.6' : '0.35';
            c.style.width     = w;
            c.style.opacity   = o;
            c.style.transform = s;
            c.style.filter    = f;
            c.style.boxShadow = '0 4px 20px rgba(0,0,0,0.3)';
            if (img)  img.style.height = '220px';
            if (ring) ring.style.opacity = '0';
            if (bar)  bar.style.borderTopColor = 'transparent';
            if (name) { name.style.opacity = '0'; name.style.transform = 'translateY(5px)'; }
            if (jab)  jab.style.opacity = '0';
          }
        });

        const ac = cards[cur];
        if (track && outer && ac) {
          track.style.transform = `translateX(${-(ac.offsetLeft - outer.offsetWidth / 2 + ac.offsetWidth / 2)}px)`;
        }

        dots.forEach((d, i) => {
          if (i === cur) { d.style.width = '1.5rem'; d.style.borderRadius = '.25rem'; d.style.background = '#1D4ED8'; }
          else           { d.style.width = '6px'; d.style.borderRadius = '9999px'; d.style.background = 'rgba(255,255,255,0.2)'; }
        });

        if (numEl) numEl.textContent = String(cur + 1).padStart(2, '0');
      }

      function start() { clearInterval(timer); timer = setInterval(() => go(cur + 1), 3500); }

      document.getElementById('spotNext')?.addEventListener('click', () => { go(cur + 1); start(); });
      document.getElementById('spotPrev')?.addEventListener('click', () => { go(cur - 1); start(); });
      dots.forEach((d, i) => d.addEventListener('click', () => { go(i); start(); }));
      cards.forEach((c, i) => c.addEventListener('click', () => { go(i); start(); }));

      const wrap = document.getElementById('spotWrap');
      if (wrap) {
        wrap.addEventListener('mouseenter', () => clearInterval(timer));
        wrap.addEventListener('mouseleave', start);
        let tx = 0;
        wrap.addEventListener('touchstart', e => { tx = e.touches[0].clientX; }, { passive: true });
        wrap.addEventListener('touchend', e => {
          const dx = e.changedTouches[0].clientX - tx;
          if (Math.abs(dx) > 40) { go(dx < 0 ? cur + 1 : cur - 1); start(); }
        }, { passive: true });
      }

      go(0); start();
      return { go };
    })();
  </script>

</div>{{-- end Livewire root --}}
