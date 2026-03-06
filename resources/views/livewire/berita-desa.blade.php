<div>
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-base sm:text-lg font-bold text-[#0D2B5E] border-l-4 border-[#1D4ED8] pl-3 uppercase tracking-wide">Berita Desa</h2>
        <a href="{{ route('berita') }}" class="bg-[#C0392B] hover:bg-red-700 text-white text-xs sm:text-sm font-semibold px-3 sm:px-4 py-2 rounded transition">Lihat Selengkapnya</a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        @foreach($berita as $item)
        <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
            <div class="w-full h-[130px] bg-slate-300" style="background-image: url('{{ asset($item->foto) }}'); background-size: cover; background-position: center;"></div>
            <div class="p-3">
                <p class="text-xs font-semibold text-gray-800 leading-snug mb-2">{{ $item->judul }}</p>
                <p class="text-xs text-gray-500 leading-relaxed mb-3">{{ $item->ringkasan }}</p>
                <div class="mt-2 text-right">
                    <a href="{{ $item->slug }}" class="text-blue-600 text-xs font-semibold hover:underline">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
