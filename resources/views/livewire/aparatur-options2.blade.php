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
       DESIGN 2 — SPOTLIGHT
  ════════════════════════════ --}}
  <div id="d2" class="tab-panel hidden" style="font-family:'Manrope',sans-serif;">
    <div class="relative py-10 overflow-hidden select-none" id="spotWrap" style="background:#F4F8FD;">

      <div class="pointer-events-none absolute left-0 top-0 bottom-0 w-28 z-10" style="background:linear-gradient(to right,#F4F8FD,transparent);"></div>
      <div class="pointer-events-none absolute right-0 top-0 bottom-0 w-28 z-10" style="background:linear-gradient(to left,#F4F8FD,transparent);"></div>

      <div class="overflow-hidden" id="spotOuter">
        <div id="spotTrack" class="flex items-center gap-3 px-16" style="width:max-content; transition:transform 0.5s cubic-bezier(.77,0,.175,1);">

          @php $siIndex = 0; @endphp
          @foreach($aparatur as $item)
          <div class="si group relative shrink-0 w-48 rounded-2xl overflow-hidden cursor-pointer transition-all duration-500"
               data-si="{{ $siIndex }}"
               style="filter:brightness(0.55) saturate(0.25); opacity:0.6; transform:scale(0.9);">

            <img src="{{ asset('images/aparatur-foto.jpg') }}" alt=""
                 class="si-img w-full object-cover object-top block"
                 style="height:208px; transition:height 0.5s cubic-bezier(.77,0,.175,1);"/>

            <div class="si-bar px-4 py-3 border-t-2 border-transparent transition-all duration-500" style="background:#0D2B5E;">
              <p class="si-name font-semibold text-white truncate opacity-0 transition-all duration-300" style="font-size:13px; transform:translateY(-4px);">{{ $item['nama'] }}</p>
              <p class="si-jab mt-0.5 truncate opacity-0 transition-opacity duration-300" style="font-size:11px; color:#1D4ED8;">{{ $item['jabatan'] }}</p>
            </div>
          </div>
          @php $siIndex++; @endphp
          @endforeach

        </div>
      </div>

      <div class="flex items-center justify-center gap-4 mt-6 px-4">
        <button id="spotPrev" class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-200 hover:scale-105 active:scale-95"
                style="background:#0D2B5E; border:1px solid #0D2B5E; color:white; box-shadow:0 4px 16px rgba(13,43,94,0.25);">
          <svg width="13" height="13" viewBox="0 0 14 14" fill="none"><path d="M9 2L4 7L9 12" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>

        <div id="spotDots" class="flex items-center gap-2">
          @for($i = 0; $i < count($aparatur); $i++)
            <div class="sd rounded-full cursor-pointer transition-all duration-300" data-di="{{ $i }}" style="width:6px;height:6px;background:#1D4ED8;opacity:0.3;"></div>
          @endfor
        </div>

        <button id="spotNext" class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-200 hover:scale-105 active:scale-95"
                style="background:#0D2B5E; border:1px solid #0D2B5E; color:white; box-shadow:0 4px 16px rgba(13,43,94,0.25);">
          <svg width="13" height="13" viewBox="0 0 14 14" fill="none"><path d="M5 2L10 7L5 12" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>

        <p class="ml-2" style="font-family:monospace;font-size:11px;color:#1D4ED8;letter-spacing:.15em;">
          <span id="spotNum" style="color:#0D2B5E;font-weight:700;">01</span>
          / {{ str_pad(count($aparatur), 2, '0', STR_PAD_LEFT) }}
        </p>
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
