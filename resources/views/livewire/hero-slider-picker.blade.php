<div class="w-full">

    {{-- BUTTON UTAMA --}}
    <div class="relative inline-block text-left mb-4">
        <button
            wire:click="toggleDropdown"
            class="flex items-center gap-2 px-6 py-3 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">
            🎨 Hero Slider
            <svg class="w-4 h-4 transition-transform {{ $showDropdown ? 'rotate-180' : '' }}"
                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
        </button>

        {{-- DROPDOWN --}}
        @if($showDropdown)
        <div class="absolute z-10 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200">
            @foreach([1, 2, 3] as $num)
            <button
                wire:click="selectDesign({{ $num }})"
                class="w-full text-left px-4 py-3 hover:bg-blue-50 hover:text-blue-600 transition
                       {{ $selectedDesign === $num ? 'bg-blue-100 text-blue-700 font-semibold' : 'text-gray-700' }}
                       {{ $num === 1 ? 'rounded-t-lg' : '' }}
                       {{ $num === 3 ? 'rounded-b-lg' : '' }}">
                Design {{ $num }}
            </button>
            @endforeach
        </div>
        @endif
    </div>

    {{-- DESIGN PREVIEW - FULL WIDTH --}}
    @if($selectedDesign)
    <div class="w-full">
        @include('livewire.heroslider.design-' . $selectedDesign)
    </div>
    @endif

</div>
