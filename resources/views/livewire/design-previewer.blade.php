<div class="w-full">

    {{-- ROW DROPDOWN --}}
    <div class="flex items-center gap-4 mb-6">

        {{-- DROPDOWN 1: KOMPONEN --}}
        <div class="relative">
            <button wire:click="toggleComponentDropdown"
                class="flex items-center gap-2 px-6 py-3 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition min-w-[180px] justify-between">
                <span>{{ $selectedComponent ? $components[$selectedComponent] : '📦 Pilih Komponen' }}</span>
                <svg class="w-4 h-4 transition-transform {{ $showComponentDropdown ? 'rotate-180' : '' }}"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            @if($showComponentDropdown)
            <div class="absolute z-20 mt-2 w-56 bg-white rounded-lg shadow-lg border border-gray-200">
                @foreach($components as $key => $label)
                <button wire:click="selectComponent('{{ $key }}')"
                    class="w-full text-left px-4 py-3 hover:bg-blue-50 hover:text-blue-600 transition
                           {{ $selectedComponent === $key ? 'bg-blue-100 text-blue-700 font-semibold' : 'text-gray-700' }}
                           {{ $loop->first ? 'rounded-t-lg' : '' }}
                           {{ $loop->last ? 'rounded-b-lg' : '' }}">
                    {{ $label }}
                </button>
                @endforeach
            </div>
            @endif
        </div>

        {{-- DROPDOWN 2: DESIGN --}}
        @if($selectedComponent)
        <div class="relative">
            <button wire:click="toggleDesignDropdown"
                class="flex items-center gap-2 px-6 py-3 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700 transition min-w-[150px] justify-between">
                <span>{{ $selectedDesign ? '🎨 Design ' . $selectedDesign : '🎨 Pilih Design' }}</span>
                <svg class="w-4 h-4 transition-transform {{ $showDesignDropdown ? 'rotate-180' : '' }}"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            @if($showDesignDropdown)
            <div class="absolute z-20 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200">
                @foreach($designs[$selectedComponent] as $num)
                <button wire:click="selectDesign({{ $num }})"
                    class="w-full text-left px-4 py-3 hover:bg-indigo-50 hover:text-indigo-600 transition
                           {{ $selectedDesign === $num ? 'bg-indigo-100 text-indigo-700 font-semibold' : 'text-gray-700' }}
                           {{ $loop->first ? 'rounded-t-lg' : '' }}
                           {{ $loop->last ? 'rounded-b-lg' : '' }}">
                    Design {{ $num }}
                </button>
                @endforeach
            </div>
            @endif
        </div>
        @endif

    </div>

    {{-- PREVIEW AREA --}}
    @if($selectedComponent && $selectedDesign)
    <div class="w-full">
        @if($selectedComponent === 'heroslider')
            @include('livewire.heroslider.design-' . $selectedDesign)

        @elseif($selectedComponent === 'aparatur')
            @include('livewire.aparatur.aparatur-options' . $selectedDesign)

        @elseif($selectedComponent === 'produk')
            @include('livewire.produk.produk-options' . $selectedDesign, [
                'produk'   => $previewProduk,
                'tabs'     => $previewTabs,
                'aktifTab' => $previewTab,
            ])
        @endif
    </div>

    @elseif(!$selectedComponent)
    <div class="flex items-center justify-center h-64 bg-gray-50 rounded-xl border-2 border-dashed border-gray-300 text-gray-400">
        <p class="text-lg">← Pilih komponen terlebih dahulu</p>
    </div>
    @elseif(!$selectedDesign)
    <div class="flex items-center justify-center h-64 bg-gray-50 rounded-xl border-2 border-dashed border-gray-300 text-gray-400">
        <p class="text-lg">← Pilih design untuk melihat preview</p>
    </div>
    @endif

</div>

@script
<script>
    function initSpot2() {
        const track2 = document.getElementById('spotTrack2');
        const outer2 = document.getElementById('spotOuter2');
        if (!track2) return;

        const cards2 = [...track2.querySelectorAll('.si2')];
        const dots2  = [...document.querySelectorAll('#spotDots2 .sd2')];
        const numEl2 = document.getElementById('spotNum2');
        const N2 = cards2.length;
        if (!N2) return;

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
            if (ac) {
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
    }

    document.addEventListener('livewire:navigated', () => initSpot2());
    $wire.on('render', () => setTimeout(initSpot2, 100));
    Livewire.hook('morph.updated', () => setTimeout(initSpot2, 100));
    setTimeout(initSpot2, 300);
</script>
@endscript
