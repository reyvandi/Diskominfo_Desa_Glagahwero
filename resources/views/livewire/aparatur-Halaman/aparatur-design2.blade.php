<div>
    <style>
        @keyframes fadeUp2 {
            from { opacity: 0; transform: translateY(24px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .reveal-ap2 { opacity: 0; transform: translateY(28px); transition: opacity 0.6s ease, transform 0.6s ease; }
        .reveal-ap2.visible { opacity: 1; transform: translateY(0); }
    </style>

    <!-- PROFIL PIMPINAN — Design 2: Dark Luxury -->
    <section class="py-12 px-4 sm:px-6" style="background:#0A0F1E">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center gap-3 mb-8 reveal-ap2">
                <div class="w-8 h-px bg-amber-400"></div>
                <h2 class="text-xs font-bold text-amber-400 uppercase tracking-[4px]">Profil Pimpinan Desa</h2>
            </div>

            @if($pimpinan->isEmpty())
            <div class="text-center py-10 text-gray-500"><p>Belum ada data pimpinan desa.</p></div>
            @else
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach($pimpinan as $i => $item)
                <div class="reveal-ap2 relative rounded-2xl overflow-hidden"
                     style="background:linear-gradient(135deg,#111827,#1f2937); border:1px solid rgba(255,255,255,0.07); transition-delay:{{ $i*0.12 }}s">
                    {{-- Dekorasi pojok --}}
                    <div class="absolute top-0 right-0 w-32 h-32 rounded-bl-full opacity-10" style="background:radial-gradient(circle,#F59E0B,transparent)"></div>

                    <div class="p-6 flex gap-5 items-start">
                        {{-- Foto + border amber --}}
                        <div class="flex-shrink-0 flex flex-col items-center gap-2">
                            <div class="rounded-xl overflow-hidden" style="width:100px;height:120px;border:2px solid rgba(245,158,11,0.4)">
                                <img src="{{ $item->foto ? asset('storage/'.$item->foto) : asset('images/aparatur-foto.jpg') }}"
                                     alt="{{ $item->nama }}" class="w-full h-full object-cover object-top">
                            </div>
                            <span class="text-[9px] font-bold text-amber-400 border border-amber-400/40 px-2 py-0.5 rounded-full whitespace-nowrap">
                                {{ $item->periode ?? '2021-2025' }}
                            </span>
                        </div>
                        {{-- Info --}}
                        <div class="flex-1">
                            <p class="text-[10px] text-amber-400 font-bold uppercase tracking-[2px] mb-1">{{ $item->jabatan }}</p>
                            <h3 class="text-white font-bold text-lg leading-snug mb-3">{{ $item->nama }}</h3>
                            <div class="h-px w-10 bg-amber-400 mb-3"></div>
                            <div class="space-y-1.5">
                                @foreach([['Alamat',$item->alamat??'-'],['Pendidikan',$item->pendidikan??'-'],['TTL',$item->ttl??'-']] as $row)
                                <div class="flex gap-2 text-xs">
                                    <span class="text-amber-400/80 font-medium w-20 flex-shrink-0">{{ $row[0] }}</span>
                                    <span class="text-gray-400">{{ $row[1] }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="px-6 pb-5">
                        <p class="text-xs text-gray-500 leading-relaxed line-clamp-2">{{ $item->deskripsi ?? '-' }}</p>
                    </div>
                    {{-- Bottom accent --}}
                    <div class="h-0.5 w-full" style="background:linear-gradient(to right,#F59E0B,transparent)"></div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </section>

    <!-- PERANGKAT DESA — Design 2: Dark Portrait -->
    <section class="py-12 px-4 sm:px-6" style="background:#0D1117">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center gap-3 mb-8 reveal-ap2">
                <div class="w-8 h-px bg-amber-400"></div>
                <h2 class="text-xs font-bold text-amber-400 uppercase tracking-[4px]">Perangkat Desa</h2>
            </div>

            @if($perangkat->isEmpty())
            <div class="text-center py-16 text-gray-500"><p>Belum ada data perangkat desa.</p></div>
            @else
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach($perangkat as $index => $item)
                <div class="reveal-ap2 group relative rounded-xl overflow-hidden cursor-pointer"
                     style="border:1px solid rgba(255,255,255,0.06); transition-delay:{{ $index*0.06 }}s">
                    {{-- Foto full --}}
                    <div class="aspect-[3/4] overflow-hidden">
                        <img src="{{ $item->foto ? asset('storage/'.$item->foto) : asset('images/aparatur-foto.jpg') }}"
                             alt="{{ $item->nama }}"
                             class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500 brightness-75 group-hover:brightness-90">
                    </div>
                    {{-- Overlay gradient bawah --}}
                    <div class="absolute inset-0 flex flex-col justify-end p-3"
                         style="background:linear-gradient(to top,rgba(0,0,0,0.85) 0%,rgba(0,0,0,0.2) 50%,transparent 100%)">
                        <div class="h-px w-6 bg-amber-400 mb-1.5 group-hover:w-full transition-all duration-500"></div>
                        <p class="text-white text-xs font-bold truncate">{{ $item->nama }}</p>
                        <p class="text-amber-400 text-[10px] truncate">{{ $item->jabatan }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </section>

    <script>
        const obs2 = new IntersectionObserver(entries => {
            entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); obs2.unobserve(e.target); } });
        }, { threshold: 0.08 });
        document.querySelectorAll('.reveal-ap2').forEach(el => obs2.observe(el));
    </script>
</div>
