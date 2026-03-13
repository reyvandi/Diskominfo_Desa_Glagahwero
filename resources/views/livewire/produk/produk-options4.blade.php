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

  {{-- List Style --}}
  <div class="flex flex-col gap-3" style="font-family:'Plus Jakarta Sans',sans-serif;">
    @forelse($produk as $item)
    <div class="group flex items-center gap-4 rounded-2xl overflow-hidden transition-all duration-300 hover:shadow-md cursor-pointer" style="background:#F4F8FD; border:1px solid #e2e8f0;">
      {{-- Image --}}
      <div class="relative shrink-0 overflow-hidden rounded-xl m-2.5" style="width:90px;height:90px;">
        <img src="{{ $item->foto ? asset('storage/' . $item->foto) : asset('images/hero-2.jpg') }}"
             alt="{{ $item->nama }}"
             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"/>
      </div>

      {{-- Info --}}
      <div class="flex-1 py-3 pr-4">
        <div class="flex items-center gap-2 mb-1">
          <span class="font-bold uppercase text-white px-2 py-0.5 rounded-full" style="font-size:8px;letter-spacing:.1em;background:#1D4ED8;">
            {{ $item->kategori }}
          </span>
          @if($item->pemilik)
          <span style="font-size:10px;color:#64748b;">{{ $item->pemilik }}</span>
          @endif
        </div>
        <p class="font-bold" style="font-size:14px;color:#0D2B5E;">{{ $item->nama }}</p>
        @if($item->deskripsi ?? false)
        <p class="mt-1 text-gray-400 line-clamp-1" style="font-size:11px;">{{ $item->deskripsi }}</p>
        @endif
      </div>

      {{-- Arrow --}}
      <div class="shrink-0 mr-4 w-8 h-8 rounded-full flex items-center justify-center transition-all duration-300 group-hover:scale-110" style="background:#1D4ED8;">
        <svg width="12" height="12" viewBox="0 0 14 14" fill="none"><path d="M5 2L10 7L5 12" stroke="white" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </div>
    </div>
    @empty
    <div class="text-center py-16 text-gray-400">
      <p>Belum ada data {{ $tabs[$aktifTab] }}.</p>
    </div>
    @endforelse
  </div>
</div>
