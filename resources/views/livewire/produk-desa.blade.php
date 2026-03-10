<div>
    {{-- Tab Nav --}}
    <div class="mb-6 overflow-x-auto scrollbar-hide">
        <div class="inline-flex items-center border border-gray-300 rounded-full p-1 gap-0.5 bg-white">
            @foreach($tabs as $key => $label)
            <button
                wire:click="switchTab('{{ $key }}')"
                class="px-[22px] py-[7px] rounded-full text-sm font-medium transition-all whitespace-nowrap
                       {{ $aktifTab === $key ? 'bg-[#1D4ED8] text-white' : 'bg-transparent text-gray-700 hover:bg-slate-100' }}">
                {{ $label }}
            </button>
            @endforeach
        </div>
    </div>

    {{-- Grid Produk --}}
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
        @forelse($produk as $item)
        <div class="rounded-xl overflow-hidden shadow-md relative bg-slate-200">
            <img src="{{ $item->foto ? asset('storage/' . $item->foto) : asset('images/hero-2.jpg') }}"
                 alt="{{ $item->nama }}"
                 class="w-full h-[140px] object-cover">
            <span class="absolute top-2 right-2 bg-[#1D4ED8] text-white text-[0.6rem] font-semibold px-1.5 py-0.5 rounded uppercase">
                {{ $item->kategori }}
            </span>
            <div class="px-2.5 pt-2 pb-2.5 bg-white">
                <p class="text-xs text-gray-400">{{ $item->pemilik ?? $item->kategori }}</p>
                <p class="text-xs font-semibold text-[#1D4ED8]">{{ $item->nama }}</p>
            </div>
        </div>
        @empty
        <div class="col-span-4 text-center py-16 text-gray-400">
            <p>Belum ada data {{ $tabs[$aktifTab] }}.</p>
        </div>
        @endforelse
    </div>
</div>
