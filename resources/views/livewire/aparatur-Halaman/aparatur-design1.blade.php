<div>
    <style>
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(24px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .reveal-ap { opacity: 0; transform: translateY(28px); transition: opacity 0.6s ease, transform 0.6s ease; }
        .reveal-ap.visible { opacity: 1; transform: translateY(0); }
    </style>

    <!-- PROFIL PIMPINAN — Design 1: Modern Split Card -->
    <section class="py-12 px-4 sm:px-6 bg-[#F4F8FD]">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center gap-3 mb-8 reveal-ap">
                <div class="w-1 h-6 bg-[#1D4ED8] rounded"></div>
                <h2 class="text-sm font-bold text-[#0D2B5E] uppercase tracking-widest">Profil Pimpinan Desa</h2>
            </div>

            @if($pimpinan->isEmpty())
            <div class="text-center py-10 text-gray-400"><p>Belum ada data pimpinan desa.</p></div>
            @else
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach($pimpinan as $i => $item)
                <div class="reveal-ap bg-white rounded-2xl overflow-hidden shadow-[0_4px_24px_rgba(13,43,94,0.10)] flex flex-col sm:flex-row"
                     style="transition-delay: {{ $i * 0.12 }}s">
                    {{-- Kiri: Foto --}}
                    <div class="sm:w-44 flex-shrink-0 relative">
                        <img src="{{ $item->foto ? asset('storage/'.$item->foto) : asset('images/aparatur-foto.jpg') }}"
                             alt="{{ $item->nama }}"
                             class="w-full h-52 sm:h-full object-cover object-top">
                        <div class="absolute inset-0" style="background:linear-gradient(to top, rgba(13,43,94,0.5) 0%, transparent 50%)"></div>
                        <span class="absolute bottom-3 left-3 bg-amber-400 text-[#0D2B5E] text-[10px] font-bold px-2 py-0.5 rounded-full">
                            {{ $item->periode ?? '2021 - 2025' }}
                        </span>
                    </div>
                    {{-- Kanan: Info --}}
                    <div class="flex-1 p-5 flex flex-col justify-between">
                        <div>
                            <p class="text-[10px] font-bold text-[#1D4ED8] uppercase tracking-[2px] mb-1">{{ $item->jabatan }}</p>
                            <h3 class="text-lg font-bold text-[#0D2B5E] mb-3">{{ $item->nama }}</h3>
                            <div class="space-y-2">
                                @foreach([['Alamat',$item->alamat??'-'],['Pendidikan',$item->pendidikan??'-'],['TTL',$item->ttl??'-']] as $row)
                                <div class="flex gap-2 text-xs">
                                    <span class="text-[#1D4ED8] font-semibold w-20 flex-shrink-0">{{ $row[0] }}</span>
                                    <span class="text-gray-500">{{ $row[1] }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <p class="text-xs text-gray-400 leading-relaxed mt-4 line-clamp-3">{{ $item->deskripsi ?? '-' }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </section>

    <!-- PERANGKAT DESA — Design 1: Hover Flip Card -->
    <section class="py-12 px-4 sm:px-6 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center gap-3 mb-8 reveal-ap">
                <div class="w-1 h-6 bg-[#1D4ED8] rounded"></div>
                <h2 class="text-sm font-bold text-[#0D2B5E] uppercase tracking-widest">Perangkat Desa</h2>
            </div>

            @if($perangkat->isEmpty())
            <div class="text-center py-16 text-gray-400"><p class="text-lg">Belum ada data perangkat desa.</p></div>
            @else
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach($perangkat as $index => $item)
                <div class="reveal-ap group relative bg-white rounded-2xl overflow-hidden shadow-[0_2px_12px_rgba(13,43,94,0.08)] hover:shadow-[0_12px_32px_rgba(13,43,94,0.18)] transition-all duration-300 hover:-translate-y-2"
                     style="transition-delay: {{ $index * 0.06 }}s">
                    <div class="aspect-square overflow-hidden">
                        <img src="{{ $item->foto ? asset('storage/'.$item->foto) : asset('images/aparatur-foto.jpg') }}"
                             alt="{{ $item->nama }}"
                             class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                    </div>
                    {{-- Overlay saat hover --}}
                    <div class="absolute inset-0 flex flex-col items-center justify-end pb-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                         style="background:linear-gradient(to top, rgba(13,43,94,0.85) 0%, transparent 60%)">
                        <p class="text-white text-xs font-bold text-center px-2">{{ $item->nama }}</p>
                        <p class="text-blue-300 text-[10px] text-center px-2">{{ $item->jabatan }}</p>
                    </div>
                    {{-- Label bawah --}}
                    <div class="p-2.5 bg-[#F4F8FD] border-t border-gray-100 text-center group-hover:bg-[#0D2B5E] transition-colors duration-300">
                        <p class="text-xs font-semibold text-[#0D2B5E] group-hover:text-white truncate transition-colors duration-300">{{ $item->nama }}</p>
                        <p class="text-[10px] text-gray-400 group-hover:text-blue-300 truncate transition-colors duration-300">{{ $item->jabatan }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </section>

    <script>
        const obs1 = new IntersectionObserver(entries => {
            entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); obs1.unobserve(e.target); } });
        }, { threshold: 0.08 });
        document.querySelectorAll('.reveal-ap').forEach(el => obs1.observe(el));
    </script>
</div>
