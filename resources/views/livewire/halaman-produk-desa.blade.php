<div>
    {{-- Search Bar --}}
    <div class="flex items-center gap-3 mb-10">
        <div class="relative">
            <select wire:model.live="kategori"
                    class="appearance-none border border-gray-300 rounded-lg px-4 py-2.5 pr-8 text-sm text-black bg-white shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                @foreach($kategoriList as $value => $label)
                <option value="{{ $value }}">{{ $label }}</option>
                @endforeach
            </select>
            <svg class="absolute right-2 top-3 w-4 h-4 text-gray-400 pointer-events-none" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M19 9l-7 7-7-7"/>
            </svg>
        </div>
        <input wire:model.live.debounce.300ms="search"
               type="text"
               placeholder="Cari Produk"
               class="flex-1 border border-gray-300 rounded-lg px-4 py-2.5 text-sm text-gray-600 bg-white shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"/>
    </div>

    {{-- Grid Produk --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @forelse($produk as $item)
        <div class="bg-white rounded-2xl shadow-sm overflow-hidden hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
            <div class="relative overflow-hidden h-48">
                <img src="{{ $item->foto ? asset('storage/' . $item->foto) : asset('images/hero-2.jpg') }}"
                     alt="{{ $item->nama }}"

                     class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
            </div>
            <div class="p-4">
                <h3 class="font-bold text-gray-800 text-sm mb-1">{{ $item->nama }}</h3>
                <p class="text-gray-500 text-xs leading-relaxed mb-3 line-clamp-2">{{ $item->deskripsi }}</p>
                <div class="flex items-center gap-1 text-gray-500 text-xs mb-3">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>
                    </svg>
                    {{ $item->pemilik ?? '-' }}
                </div>
                <div class="flex gap-2">
                    @if($item->whatsapp)
                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $item->whatsapp) }}?text=Halo,%20saya%20ingin%20memesan%20{{ urlencode($item->nama) }}"
                    target="_blank"
                    class="flex-1 flex items-center justify-center gap-1.5 bg-blue-700 hover:bg-blue-800 text-white text-xs font-semibold py-2 rounded-lg transition-all">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                            <path d="M12 0C5.373 0 0 5.373 0 12c0 2.127.558 4.126 1.535 5.858L.057 23.428a.75.75 0 0 0 .916.915l5.57-1.479A11.952 11.952 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0z"/>
                        </svg>
                        Beli Sekarang
                    </a>
                    @else
                    <button disabled class="flex-1 flex items-center justify-center gap-1.5 bg-gray-300 text-gray-500 text-xs font-semibold py-2 rounded-lg cursor-not-allowed">
                        Beli Sekarang
                    </button>
                    @endif

                    @if($item->lokasi)
                    <a href="{{ $item->lokasi }}" target="_blank"
                    class="flex items-center justify-center gap-1.5 border border-blue-700 text-blue-700 hover:bg-blue-50 text-xs font-semibold px-3 py-2 rounded-lg transition-all">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>
                        </svg>
                        Lokasi
                    </a>
                    @endif
                </div>
            </div>
        </div>
        @empty
        <div class="col-span-3 text-center py-16 text-gray-400">
            <p class="text-lg">Belum ada produk ditemukan.</p>
        </div>
        @endforelse
    </div>

    {{-- Pagination --}}
    @if($produk->hasPages())
    <div class="flex items-center justify-between mt-8 text-xs text-gray-500">
        <span>Menampilkan {{ $produk->firstItem() }} - {{ $produk->lastItem() }} dari {{ $produk->total() }} produk</span>
        {{ $produk->links() }}
    </div>
    @endif
</div>
