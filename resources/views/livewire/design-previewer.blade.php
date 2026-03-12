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

        {{-- DROPDOWN 2: DESIGN (hanya muncul jika komponen sudah dipilih) --}}
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
