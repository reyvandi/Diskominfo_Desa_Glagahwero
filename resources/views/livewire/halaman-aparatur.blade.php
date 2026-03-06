<div>

    <!-- ===== PROFIL PIMPINAN DESA ===== -->
    <section class="py-12 px-4 sm:px-6 bg-[#F4F8FD]">
        <div class="max-w-6xl mx-auto">

            <div class="flex items-center gap-3 mb-6">
                <div class="w-1 h-6 bg-[#1D4ED8] rounded"></div>
                <h2 class="text-sm font-bold text-[#0D2B5E] uppercase tracking-widest">Profil Pimpinan Desa</h2>
            </div>

            @if($pimpinan->isEmpty())
            <div class="text-center py-10 text-gray-400">
                <p>Belum ada data pimpinan desa.</p>
            </div>
            @else
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach($pimpinan as $item)
                <div class="relative overflow-hidden rounded-2xl p-6 text-white shadow-[0_12px_40px_rgba(13,43,94,0.30)]"
                     style="background: linear-gradient(145deg, #0D2B5E 0%, #1D4ED8 65%, #1a44b0 100%);">

                    <div class="absolute -bottom-12 -right-12 w-48 h-48 rounded-full bg-white/5 pointer-events-none"></div>

                    <div class="flex items-start gap-4 mb-5">
                        <div class="flex flex-col items-center gap-1.5 flex-shrink-0">
                            <div class="w-[120px] h-[120px] rounded-full border-[3px] border-white/30 overflow-hidden">
                                <img src="{{ $item->foto ? asset('storage/' . $item->foto) : asset('images/aparatur-foto.jpg') }}"
                                     alt="{{ $item->nama }}"
                                     class="w-full h-full object-cover object-top">
                            </div>
                            <span class="bg-amber-400 text-[#0D2B5E] text-[10px] font-bold px-2.5 py-0.5 rounded-full whitespace-nowrap">
                                2021 – 2025
                            </span>
                        </div>

                        <div class="flex-1">
                            <p class="text-[17px] font-bold tracking-[2px] text-amber-400 uppercase mb-1">Profil {{ $item->jabatan }}</p>
                            <h3 class="text-[25px] font-bold leading-snug mb-2">Membangun Desa,<br>Bersama Warga</h3>
                            <div class="w-12 h-[5px] bg-amber-400 rounded"></div>
                        </div>
                    </div>

                    <p class="text-xl font-bold tracking-tight mb-4">{{ $item->nama }}</p>

                    <div class="bg-white/10 rounded-xl px-3.5 mb-4">
                        <div class="flex items-start gap-2.5 py-2 border-b border-white/10 text-xs">
                            <span class="text-amber-400 font-semibold w-[72px] flex-shrink-0 text-[11.5px]">Jabatan</span>
                            <span class="text-white/80 leading-relaxed">{{ $item->jabatan }}</span>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
            @endif

        </div>
    </section>

    <!-- ===== PERANGKAT DESA ===== -->
    <section class="py-12 px-4 sm:px-6 bg-white">
        <div class="max-w-6xl mx-auto">

            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center gap-3">
                    <div class="w-1 h-6 bg-[#1D4ED8] rounded"></div>
                    <h2 class="text-sm font-bold text-[#0D2B5E] uppercase tracking-widest">Perangkat Desa</h2>
                </div>
                {{-- Search --}}
                <input wire:model.live.debounce.300ms="search"
                       type="text"
                       placeholder="Cari nama atau jabatan..."
                       class="w-full sm:w-64 px-4 py-2 rounded-xl border border-gray-300 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            @if($perangkat->isEmpty())
            <div class="text-center py-16 text-gray-400">
                <p class="text-lg">Belum ada data perangkat desa.</p>
            </div>
            @else
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-4">
                @foreach($perangkat as $index => $item)
                <div class="bg-white rounded-xl overflow-hidden shadow-[0_2px_12px_rgba(13,43,94,0.10)] hover:-translate-y-1 hover:shadow-[0_10px_28px_rgba(13,43,94,0.16)] transition-all duration-200">
                    <div class="w-full aspect-square overflow-hidden">
                        <img src="{{ $item->foto ? asset('storage/' . $item->foto) : asset('images/aparatur-foto.jpg') }}"
                             alt="{{ $item->nama }}"
                             class="w-full h-full object-cover object-top">
                    </div>
                    <div class="p-2 sm:p-3 bg-[#0D2B5E] text-white text-center">
                        <p class="text-xs sm:text-sm font-semibold truncate">{{ $item->nama }}</p>
                        <p class="text-[10px] sm:text-xs text-blue-200 truncate">{{ $item->jabatan }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            @endif

        </div>
    </section>

    <style>
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }
    </style>

</div>  
