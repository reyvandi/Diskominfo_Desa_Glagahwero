<div>
  {{-- Tab Nav --}}
  <div class="mb-6 overflow-x-auto scrollbar-hide">
    <div class="inline-flex items-center border border-gray-300 rounded-full p-1 gap-0.5 bg-white">
      @foreach($tabs as $key => $label)
      <button wire:click="switchProdukTab('{{ $key }}')"
        class="px-[22px] py-[7px] rounded-full text-sm font-medium transition-all whitespace-nowrap
               {{ $aktifTab === $key ? 'bg-[#0D2B5E] text-white' : 'bg-transparent text-gray-700 hover:bg-slate-100' }}">
        {{ $label }}
      </button>
      @endforeach
    </div>
  </div>

  {{-- Bento Grid --}}
  <div class="grid grid-cols-12 gap-3" style="font-family:'Plus Jakarta Sans',sans-serif;">
    @forelse($produk as $index => $item)
      @php
        $spans = [
          0 => 'col-span-7',
          1 => 'col-span-5',
          2 => 'col-span-4',
          3 => 'col-span-4',
          4 => 'col-span-4',
          5 => 'col-span-6',
          6 => 'col-span-6',
        ];
        $heights = [
          0 => '260px',
          1 => '260px',
          2 => '200px',
          3 => '200px',
          4 => '200px',
          5 => '220px',
          6 => '220px',
        ];
        $span = $spans[$index % 7] ?? 'col-span-4';
        $height = $heights[$index % 7] ?? '200px';
      @endphp
      <div class="group relative {{ $span }} rounded-2xl overflow-hidden cursor-pointer" style="min-height:{{ $height }};">
        <img src="{{ $item->foto ? asset('storage/' . $item->foto) : asset('images/hero-2.jpg') }}"
             alt="{{ $item->nama }}"
             class="absolute inset-0 w-full h-full object-cover transition-all duration-700 group-hover:scale-105"
             style="filter:saturate(0.7) brightness(0.85);"/>
        <div class="group-hover:[&]:opacity-100 absolute inset-0 transition-all duration-500"
             style="background:linear-gradient(to top,rgba(13,43,94,0.92) 0%,rgba(13,43,94,0.3) 50%,transparent 100%);"></div>
        <span class="absolute top-3 left-3 text-white font-bold uppercase px-2.5 py-1 rounded-full backdrop-blur-sm" style="font-size:8px;letter-spacing:.1em;background:rgba(29,78,216,0.85);">
          {{ $item->kategori }}
        </span>
        <div class="absolute bottom-0 left-0 right-0 p-3.5">
          <p class="text-white/60 mb-0.5" style="font-size:10px;">{{ $item->pemilik ?? $item->kategori }}</p>
          <p class="font-bold text-white truncate" style="font-size:13px;">{{ $item->nama }}</p>
        </div>
      </div>
    @empty
      <div class="col-span-12 text-center py-16 text-gray-400">
        <p>Belum ada data {{ $tabs[$aktifTab] }}.</p>
      </div>
    @endforelse
  </div>
</div>
