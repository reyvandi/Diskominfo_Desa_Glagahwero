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
  <div id="d2" class="tab-panel" style="font-family:'Manrope',sans-serif;">
    <div class="relative py-10 overflow-hidden select-none" id="spotWrap2" style="background:#F4F8FD;">

      <div class="pointer-events-none absolute left-0 top-0 bottom-0 w-28 z-10" style="background:linear-gradient(to right,#F4F8FD,transparent);"></div>
      <div class="pointer-events-none absolute right-0 top-0 bottom-0 w-28 z-10" style="background:linear-gradient(to left,#F4F8FD,transparent);"></div>

      <div class="overflow-hidden" id="spotOuter2">
        <div id="spotTrack2" class="flex items-center gap-3 px-16" style="width:max-content; transition:transform 0.5s cubic-bezier(.77,0,.175,1);">

          @php $siIndex = 0; @endphp
          @foreach($aparatur as $item)
          <div class="si2 group relative shrink-0 w-48 rounded-2xl overflow-hidden cursor-pointer transition-all duration-500"
               data-si="{{ $siIndex }}"
               style="filter:brightness(0.55) saturate(0.25); opacity:0.6; transform:scale(0.9);">

            <img src="{{ asset('images/aparatur-foto.jpg') }}" alt=""
                 class="si-img2 w-full object-cover object-top block"
                 style="height:208px; transition:height 0.5s cubic-bezier(.77,0,.175,1);"/>

            <div class="si-bar2 px-4 py-3 border-t-2 border-transparent transition-all duration-500" style="background:#0D2B5E;">
              <p class="si-name2 font-semibold text-white truncate opacity-0 transition-all duration-300" style="font-size:13px; transform:translateY(-4px);">{{ $item['nama'] }}</p>
              <p class="si-jab2 mt-0.5 truncate opacity-0 transition-opacity duration-300" style="font-size:11px; color:#1D4ED8;">{{ $item['jabatan'] }}</p>
            </div>
          </div>
          @php $siIndex++; @endphp
          @endforeach

        </div>
      </div>

      <div class="flex items-center justify-center gap-4 mt-6 px-4">
        <button id="spotPrev2" class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-200 hover:scale-105 active:scale-95"
                style="background:#0D2B5E; border:1px solid #1D4ED8; color:white; box-shadow:0 4px 16px rgba(29,78,216,0.25);">
          <svg width="13" height="13" viewBox="0 0 14 14" fill="none"><path d="M9 2L4 7L9 12" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>

        <div id="spotDots2" class="flex items-center gap-2">
          @for($i = 0; $i < count($aparatur); $i++)
            <div class="sd2 rounded-full cursor-pointer transition-all duration-300" data-di="{{ $i }}" style="width:6px;height:6px;background:#1D4ED8;opacity:0.3;"></div>
          @endfor
        </div>

        <button id="spotNext2" class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-200 hover:scale-105 active:scale-95"
                style="background:#0D2B5E; border:1px solid #0D2B5E; color:white; box-shadow:0 4px 16px rgba(13,43,94,0.25);">
          <svg width="13" height="13" viewBox="0 0 14 14" fill="none"><path d="M5 2L10 7L5 12" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>

        <p class="ml-2" style="font-family:monospace;font-size:11px;color:#1D4ED8;letter-spacing:.15em;">
          <span id="spotNum2" style="color:#0D2B5E;font-weight:700;">01</span>
          / {{ str_pad(count($aparatur), 2, '0', STR_PAD_LEFT) }}
        </p>
      </div>
    </div>
  </div>

  @script
  <script>
    const track2 = document.getElementById('spotTrack2');
    const outer2 = document.getElementById('spotOuter2');
    const cards2 = [...(track2 ? track2.querySelectorAll('.si2') : [])];
    const dots2  = [...document.querySelectorAll('#spotDots2 .sd2')];
    const numEl2 = document.getElementById('spotNum2');
    const N2 = cards2.length;
    let cur2 = 0, timer2;

    function go2(idx) {
      cur2 = ((idx % N2) + N2) % N2;

      cards2.forEach((c, i) => {
        const diff = Math.min(Math.abs(i - cur2), N2 - Math.abs(i - cur2));
        const img  = c.querySelector('.si-img2');
        const bar  = c.querySelector('.si-bar2');
        const name = c.querySelector('.si-name2');
        const jab  = c.querySelector('.si-jab2');

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

      const ac = cards2[cur2];
      if (track2 && outer2 && ac) {
        track2.style.transform = `translateX(${-(ac.offsetLeft - outer2.offsetWidth / 2 + ac.offsetWidth / 2)}px)`;
      }

      dots2.forEach((d, i) => {
        if (i === cur2) { d.style.width = '1.25rem'; d.style.borderRadius = '.25rem'; d.style.background = '#0D2B5E'; d.style.opacity = '1'; }
        else            { d.style.width = '6px'; d.style.borderRadius = '9999px'; d.style.background = '#1D4ED8'; d.style.opacity = '0.3'; }
      });

      if (numEl2) numEl2.textContent = String(cur2 + 1).padStart(2, '0');
    }

    function start2() { clearInterval(timer2); timer2 = setInterval(() => go2(cur2 + 1), 3200); }

    document.getElementById('spotNext2')?.addEventListener('click', () => { go2(cur2 + 1); start2(); });
    document.getElementById('spotPrev2')?.addEventListener('click', () => { go2(cur2 - 1); start2(); });
    dots2.forEach((d, i) => d.addEventListener('click', () => { go2(i); start2(); }));
    cards2.forEach((c, i) => c.addEventListener('click', () => { go2(i); start2(); }));

    const wrap2 = document.getElementById('spotWrap2');
    if (wrap2) {
      wrap2.addEventListener('mouseenter', () => clearInterval(timer2));
      wrap2.addEventListener('mouseleave', start2);
      let tx2 = 0;
      wrap2.addEventListener('touchstart', e => { tx2 = e.touches[0].clientX; }, { passive: true });
      wrap2.addEventListener('touchend', e => {
        const dx = e.changedTouches[0].clientX - tx2;
        if (Math.abs(dx) > 40) { go2(dx < 0 ? cur2 + 1 : cur2 - 1); start2(); }
      }, { passive: true });
    }

    go2(0); start2();
  </script>
  @endscript

</div>
