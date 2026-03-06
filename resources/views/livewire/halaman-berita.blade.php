<div>
    {{-- Search --}}
    <div class="mb-6">
        <input wire:model.live.debounce.300ms="search"
               type="text"
               placeholder="Cari berita..."
               class="w-full sm:w-80 px-4 py-2 rounded-xl border border-gray-300 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    {{-- List Berita --}}
    <div class="flex flex-col gap-5">
        @forelse($berita as $item)
        <div class="bg-white rounded-2xl shadow-sm flex gap-6 p-6 hover:shadow-md transition-shadow">
            <img src="{{ $item->foto ? asset('storage/' . $item->foto) : asset('images/news.jpg') }}"
                 alt="{{ $item->judul }}"
                 class="w-52 h-40 object-cover rounded-xl flex-shrink-0">
            <div class="flex flex-col justify-between flex-1">
                <div>
                    <div class="flex items-center gap-1.5 text-gray-400 text-sm mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/>
                        </svg>
                        {{ $item->published_at?->format('d M Y') ?? '-' }}
                    </div>
                    <h3 class="font-bold text-gray-800 text-base leading-snug mb-3">{{ $item->judul }}</h3>
                    <p class="text-gray-500 text-sm leading-relaxed line-clamp-3">{{ $item->ringkasan }}</p>
                </div>
                <div class="mt-3">
                    <a href="{{ route('berita.show', $item->slug) }}" class="text-blue-600 text-sm font-semibold hover:underline">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        @empty
        <div class="text-center py-16 text-gray-400">
            <p class="text-lg">Belum ada berita.</p>
        </div>
        @endforelse
    </div>

    {{-- Pagination --}}
    @if($berita->hasPages())
    <div class="flex items-center justify-between mt-8 text-sm text-gray-500">
        <span>Menampilkan {{ $berita->firstItem() }} - {{ $berita->lastItem() }} dari {{ $berita->total() }} berita</span>
        {{ $berita->links() }}
    </div>
    @endif
</div>
