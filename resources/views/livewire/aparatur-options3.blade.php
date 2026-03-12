<div>

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
       DESIGN 3 — BENTO MOSAIC
  ════════════════════════════ --}}
  <div id="d3" class="tab-panel hidden" style="font-family:'Plus Jakarta Sans',sans-serif;">
    <div class="py-10 px-5" style="background:#F4F8FD;">
      <div class="grid grid-cols-12 gap-2 max-w-4xl mx-auto">

        {{-- 0 --}}
        <div class="group relative col-span-5 row-span-2 rounded-2xl overflow-hidden cursor-default" style="min-height:380px;">
          <div class="absolute top-0 left-0 right-0 z-10" style="height:3px;background:linear-gradient(to right,#0D2B5E,#3b82f6,transparent);"></div>
          <span class="absolute top-3 left-3 z-10 font-bold uppercase text-white px-2.5 py-1 rounded-full backdrop-blur-sm" style="font-size:9px;letter-spacing:.12em;background:rgba(13,43,94,0.75);border:1px solid rgba(29,78,216,0.3);">Kepala Desa</span>
          <img src="{{ asset('images/aparatur-foto.jpg') }}" alt="" class="absolute inset-0 w-full h-full object-cover object-top transition-all duration-700 group-hover:scale-[1.07]" style="filter:saturate(0.6) brightness(0.8);"/>
          <div class="absolute inset-0" style="background:linear-gradient(to top,rgba(13,43,94,0.95),rgba(13,43,94,0.4) 50%,transparent);"></div>
          <div class="absolute bottom-0 left-0 right-0 p-4">
            <p class="font-bold text-white" style="font-size:1.1rem;margin-bottom:2px;">Budi Santoso, S.E.</p>
            <p style="font-size:11px;color:#1D4ED8;">Desa Glagahwero</p>
          </div>
        </div>

        {{-- 1 --}}
        <div class="group relative col-span-4 row-span-2 rounded-2xl overflow-hidden cursor-default" style="min-height:380px;">
          <img src="{{ asset('images/aparatur-foto.jpg') }}" alt="" class="absolute inset-0 w-full h-full object-cover object-top transition-all duration-700 group-hover:scale-[1.07]" style="filter:saturate(0.6) brightness(0.8);"/>
          <div class="absolute inset-0" style="background:linear-gradient(to top,rgba(13,43,94,0.95),rgba(13,43,94,0.4) 50%,transparent);"></div>
          <div class="absolute bottom-0 left-0 right-0 p-4">
            <p class="font-semibold uppercase" style="font-size:9px;letter-spacing:.13em;color:#1D4ED8;margin-bottom:5px;">Sekretaris Desa</p>
            <p class="font-bold text-white" style="font-size:.9rem;">Siti Rahayu, S.Pd.</p>
          </div>
        </div>

        {{-- 2 --}}
        <div class="group relative col-span-3 rounded-2xl overflow-hidden cursor-default" style="min-height:185px;">
          <img src="{{ asset('images/aparatur-foto.jpg') }}" alt="" class="absolute inset-0 w-full h-full object-cover object-top transition-all duration-700 group-hover:scale-[1.06]" style="filter:saturate(0.6) brightness(0.8);"/>
          <div class="absolute inset-0" style="background:linear-gradient(to top,rgba(13,43,94,0.95),rgba(13,43,94,0.4) 50%,transparent);"></div>
          <div class="absolute bottom-0 left-0 right-0 p-3">
            <p class="font-semibold uppercase" style="font-size:8px;letter-spacing:.12em;color:#1D4ED8;margin-bottom:3px;">Kasi Pemerintahan</p>
            <p class="font-bold text-white" style="font-size:.75rem;">Ahmad Fauzi</p>
          </div>
        </div>

        {{-- 3 --}}
        <div class="group relative col-span-3 rounded-2xl overflow-hidden cursor-default" style="min-height:185px;">
          <img src="{{ asset('images/aparatur-foto.jpg') }}" alt="" class="absolute inset-0 w-full h-full object-cover object-top transition-all duration-700 group-hover:scale-[1.06]" style="filter:saturate(0.6) brightness(0.8);"/>
          <div class="absolute inset-0" style="background:linear-gradient(to top,rgba(13,43,94,0.95),rgba(13,43,94,0.4) 50%,transparent);"></div>
          <div class="absolute bottom-0 left-0 right-0 p-3">
            <p class="font-semibold uppercase" style="font-size:8px;letter-spacing:.12em;color:#1D4ED8;margin-bottom:3px;">Kaur Keuangan</p>
            <p class="font-bold text-white" style="font-size:.75rem;">Dewi Lestari, A.Md.</p>
          </div>
        </div>

        {{-- 4 --}}
        <div class="group relative col-span-6 rounded-2xl overflow-hidden cursor-default" style="min-height:205px;">
          <img src="{{ asset('images/aparatur-foto.jpg') }}" alt="" class="absolute inset-0 w-full h-full object-cover object-top transition-all duration-700 group-hover:scale-[1.05]" style="filter:saturate(0.6) brightness(0.8);"/>
          <div class="absolute inset-0" style="background:linear-gradient(to top,rgba(13,43,94,0.95),rgba(13,43,94,0.4) 50%,transparent);"></div>
          <div class="absolute bottom-0 left-0 right-0 p-4">
            <p class="font-semibold uppercase" style="font-size:9px;letter-spacing:.12em;color:#1D4ED8;margin-bottom:4px;">Kaur Umum & Perencanaan</p>
            <p class="font-bold text-white" style="font-size:.875rem;">Rudi Hermawan</p>
          </div>
        </div>

        {{-- 5 --}}
        <div class="group relative col-span-6 rounded-2xl overflow-hidden cursor-default" style="min-height:205px;">
          <img src="{{ asset('images/aparatur-foto.jpg') }}" alt="" class="absolute inset-0 w-full h-full object-cover object-top transition-all duration-700 group-hover:scale-[1.05]" style="filter:saturate(0.6) brightness(0.8);"/>
          <div class="absolute inset-0" style="background:linear-gradient(to top,rgba(13,43,94,0.95),rgba(13,43,94,0.4) 50%,transparent);"></div>
          <div class="absolute bottom-0 left-0 right-0 p-4">
            <p class="font-semibold uppercase" style="font-size:9px;letter-spacing:.12em;color:#1D4ED8;margin-bottom:4px;">Kasi Kesejahteraan</p>
            <p class="font-bold text-white" style="font-size:.875rem;">Nurul Hidayah</p>
          </div>
        </div>

        {{-- 6 --}}
        <div class="group relative col-span-4 rounded-2xl overflow-hidden cursor-default" style="min-height:220px;">
          <img src="{{ asset('images/aparatur-foto.jpg') }}" alt="" class="absolute inset-0 w-full h-full object-cover object-top transition-all duration-700 group-hover:scale-[1.05]" style="filter:saturate(0.6) brightness(0.8);"/>
          <div class="absolute inset-0" style="background:linear-gradient(to top,rgba(13,43,94,0.95),rgba(13,43,94,0.4) 50%,transparent);"></div>
          <div class="absolute bottom-0 left-0 right-0 p-4">
            <p class="font-semibold uppercase" style="font-size:9px;letter-spacing:.12em;color:#1D4ED8;margin-bottom:4px;">Kepala Dusun I</p>
            <p class="font-bold text-white" style="font-size:.875rem;">Hendra Wijaya</p>
          </div>
        </div>

        {{-- 7 --}}
        <div class="group relative col-span-8 rounded-2xl overflow-hidden cursor-default" style="min-height:220px;">
          <img src="{{ asset('images/aparatur-foto.jpg') }}" alt="" class="absolute inset-0 w-full h-full object-cover transition-all duration-700 group-hover:scale-[1.05]" style="object-position:center 20%; filter:saturate(0.6) brightness(0.8);"/>
          <div class="absolute inset-0" style="background:linear-gradient(to top,rgba(13,43,94,0.95),rgba(13,43,94,0.4) 50%,transparent);"></div>
          <div class="absolute top-4 right-4 font-bold uppercase text-white px-2.5 py-1 rounded-full backdrop-blur-sm" style="font-size:9px;letter-spacing:.12em;background:rgba(13,43,94,0.75);border:1px solid rgba(29,78,216,0.3);">Kepala Dusun II</div>
          <div class="absolute bottom-0 left-0 right-0 p-4">
            <p class="font-bold text-white" style="font-size:1rem;">Yuli Astuti, S.Sos.</p>
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
          b.style.borderBottomColor = 'transparent';
          b.style.color = '#1D4ED8';
        });
        document.querySelectorAll('.tab-panel').forEach(p => p.classList.add('hidden'));
        btn.style.borderBottomColor = '#0D2B5E';
        btn.style.color = '#0D2B5E';
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
          const diff = Math.min(Math.abs(i - cur), N - Math.abs(i - cur));
          const img  = c.querySelector('.si-img');
          const bar  = c.querySelector('.si-bar');
          const name = c.querySelector('.si-name');
          const jab  = c.querySelector('.si-jab');

          if (diff === 0) {
            c.style.filter    = 'brightness(1) saturate(1)';
            c.style.opacity   = '1';
            c.style.transform = 'scale(1)';
            c.style.width     = '256px';
            c.style.boxShadow = '0 0 0 2px rgba(13,43,94,0.4), 0 25px 60px rgba(13,43,94,0.2)';
            if (img)  img.style.height = '255px';
            if (bar)  bar.style.borderTopColor = 'rgba(29,78,216,0.4)';
            if (name) { name.style.opacity = '1'; name.style.transform = 'translateY(0)'; }
            if (jab)  jab.style.opacity = '1';
          } else {
            const f = diff === 1 ? 'brightness(0.65) saturate(0.5)' : 'brightness(0.45) saturate(0.2)';
            const o = diff === 1 ? '0.8' : '0.5';
            const s = diff === 1 ? 'scale(0.96)' : 'scale(0.9)';
            c.style.filter    = f;
            c.style.opacity   = o;
            c.style.transform = s;
            c.style.width     = '192px';
            c.style.boxShadow = 'none';
            if (img)  img.style.height = '208px';
            if (bar)  bar.style.borderTopColor = 'transparent';
            if (name) { name.style.opacity = '0'; name.style.transform = 'translateY(-4px)'; }
            if (jab)  jab.style.opacity = '0';
          }
        });

        const ac = cards[cur];
        if (track && outer && ac) {
          track.style.transform = `translateX(${-(ac.offsetLeft - outer.offsetWidth / 2 + ac.offsetWidth / 2)}px)`;
        }

        dots.forEach((d, i) => {
          if (i === cur) { d.style.width = '1.25rem'; d.style.borderRadius = '.25rem'; d.style.background = '#0D2B5E'; d.style.opacity = '1'; }
          else           { d.style.width = '6px'; d.style.borderRadius = '9999px'; d.style.background = '#1D4ED8'; d.style.opacity = '0.3'; }
        });

        if (numEl) numEl.textContent = String(cur + 1).padStart(2, '0');
      }

      function start() { clearInterval(timer); timer = setInterval(() => go(cur + 1), 3200); }

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
