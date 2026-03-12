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
       DESIGN 1 — FILM STRIP
  ════════════════════════════ --}}
  <div id="d1" class="tab-panel" style="font-family:'Plus Jakarta Sans',sans-serif;">
    <div class="relative overflow-hidden py-10 select-none" style="background:#F4F8FD;">

      <div class="pointer-events-none absolute -top-24 -left-24 w-80 h-80 rounded-full opacity-10" style="background:radial-gradient(circle,#0D2B5E,transparent 70%);"></div>
      <div class="pointer-events-none absolute -bottom-20 right-10 w-96 h-96 rounded-full opacity-5" style="background:radial-gradient(circle,#0D2B5E,transparent 70%);"></div>



      <div class="overflow-hidden px-4" style="mask-image:linear-gradient(to right,transparent,black 80px,black calc(100% - 80px),transparent); -webkit-mask-image:linear-gradient(to right,transparent,black 80px,black calc(100% - 80px),transparent);">
        <div id="strip1" class="flex gap-3" style="width:max-content; animation:stripRoll 30s linear infinite;">

          @foreach(array_merge($aparatur, $aparatur) as $idx => $item)
          <div class="d1c group relative shrink-0 rounded-2xl overflow-hidden cursor-pointer transition-all duration-300"
               style="width:208px; transform-style:preserve-3d;"
               onmousemove="d1Tilt(event,this)" onmouseleave="d1Reset(this)">

            <div class="absolute inset-0 z-10 pointer-events-none overflow-hidden rounded-2xl">
              <div class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-500" style="background:linear-gradient(to right,transparent,rgba(255,255,255,0.15),transparent);"></div>
            </div>

            <span class="absolute top-2.5 left-2.5 z-20 text-white/60 bg-black/20 border border-white/20 rounded-full px-2 py-0.5 backdrop-blur-sm" style="font-size:9px;font-family:monospace;font-weight:600;">{{ str_pad(($idx % 8) + 1, 2, '0', STR_PAD_LEFT) }}</span>

            <img src="{{ asset('images/aparatur-foto.jpg') }}" alt="{{ $item['nama'] }}"
                 class="w-full object-cover object-top transition-all duration-500 group-hover:scale-[1.07]"
                 style="height:200px; filter:saturate(0.6) brightness(0.9);"/>

            <div class="relative px-4 py-3 border-t" style="background:#0D2B5E; border-color:rgba(29,78,216,0.2);">
              <div class="absolute top-0 left-4 right-4" style="height:1px;background:linear-gradient(to right,rgba(29,78,216,0.5),transparent);"></div>
              <p class="font-semibold text-white truncate translate-y-2 opacity-70 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300" style="font-size:13px;">{{ $item['nama'] }}</p>
              <p style="font-size:11px;color:#1D4ED8;margin-top:2px;">{{ $item['jabatan'] }}</p>
            </div>
          </div>
          @endforeach

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
