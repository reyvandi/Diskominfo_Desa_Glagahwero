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

  {{-- Horizontal Scroll Cards --}}
  <div class="overflow-x-auto pb-4 scrollbar-hide">
    <div class="flex gap-4" style="width:max-content;">
      @forelse($produk as $item)
      <div class="group relative rounded-2xl overflow-hidden cursor-pointer shrink-0" style="width:220px; background:#F4F8FD; box-shadow:0 4px 20px rgba(13,43,94,0.1);">
        <div class="relative overflow-hidden" style="height:160px;">
          <img src="{{ $item->foto ? asset('storage/' . $item->foto) : asset('images/hero-2.jpg') }}"
               alt="{{ $item->nama }}"
               class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"/>
          <div class="absolute inset-0" style="background:linear-gradient(to top,rgba(13,43,94,0.6),transparent 60%);"></div>
          <span class="absolute top-2.5 right-2.5 text-white font-bold uppercase px-2 py-0.5 rounded-full" style="font-size:9px;letter-spacing:.08em;background:#1D4ED8;">
            {{ $item->kategori }}
          </span>
        </div>
        <div class="px-3.5 py-3">
          <p class="text-xs text-gray-400 mb-0.5">{{ $item->pemilik ?? $item->kategori }}</p>
          <p class="font-bold truncate" style="font-size:13px;color:#0D2B5E;">{{ $item->nama }}</p>
          <div class="mt-2 pt-2 border-t border-gray-100 flex items-center justify-between">
            <span style="font-size:10px;color:#1D4ED8;font-weight:600;">Lihat Detail →</span>
          </div>
        </div>
      </div>
      @empty
      <div class="py-16 text-center text-gray-400 w-full">
        <p>Belum ada data {{ $tabs[$aktifTab] }}.</p>
      </div>
      @endforelse
    </div>
  </div>
</div>
