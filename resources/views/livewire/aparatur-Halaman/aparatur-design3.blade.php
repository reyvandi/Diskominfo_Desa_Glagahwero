<div>
    <style>
        .reveal-ap3 { opacity: 0; transform: translateY(28px); transition: opacity 0.6s ease, transform 0.6s ease; }
        .reveal-ap3.visible { opacity: 1; transform: translateY(0); }

        .pimpinan-card3 {
            position: relative;
            overflow: hidden;
            border-radius: 1.25rem;
            background: white;
            box-shadow: 0 4px 24px rgba(29,78,216,0.10);
        }
        .pimpinan-card3::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 5px;
            background: linear-gradient(to right, #1D4ED8, #7C3AED, #F59E0B);
        }

        .perangkat-card3 {
            position: relative;
            border-radius: 1rem;
            overflow: hidden;
            background: white;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .perangkat-card3:hover { transform: translateY(-6px); box-shadow: 0 16px 40px rgba(29,78,216,0.2); }
        .perangkat-card3 .badge-jabatan {
            position: absolute;
            top: 10px; left: 10px;
            background: linear-gradient(135deg, #1D4ED8, #7C3AED);
            color: white;
            font-size: 9px;
            font-weight: 700;
            padding: 2px 8px;
            border-radius: 999px;
            letter-spacing: 0.05em;
            max-width: calc(100% - 20px);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>

    <!-- PROFIL PIMPINAN — Design 3: Colorful Bold -->
    <section class="py-12 px-4 sm:px-6 bg-gradient-to-br from-blue-50 via-white to-violet-50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-10 reveal-ap3">
                <span class="inline-block px-4 py-1 rounded-full text-xs font-bold text-white mb-3"
                      style="background:linear-gradient(135deg,#1D4ED8,#7C3AED)">Kepemimpinan</span>
                <h2 class="text-2xl font-bold text-[#0D2B5E]">Profil Pimpinan Desa</h2>
            </div>

            @if($pimpinan->isEmpty())
            <div class="text-center py-10 text-gray-400"><p>Belum ada data pimpinan desa.</p></div>
            @else
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach($pimpinan as $i => $item)
                <div class="pimpinan-card3 reveal-ap3 p-6" style="transition-delay:{{ $i*0.12 }}s">
                    <div class="flex gap-5 items-start">
                        {{-- Foto dengan ring warna --}}
                        <div class="flex-shrink-0 flex flex-col items-center gap-2">
                            <div class="rounded-2xl overflow-hidden p-0.5"
                                 style="background:linear-gradient(135deg,#1D4ED8,#7C3AED,#F59E0B); width:108px">
                                <div class="rounded-2xl overflow-hidden bg-white" style="height:120px">
                                    <img src="{{ $item->foto ? asset('storage/'.$item->foto) : asset('images/aparatur-foto.jpg') }}"
                                         alt="{{ $item->nama }}" class="w-full h-full object-cover object-top">
                                </div>
                            </div>
                            <span class="text-[9px] font-bold px-2.5 py-0.5 rounded-full text-white whitespace-nowrap"
                                  style="background:linear-gradient(135deg,#F59E0B,#ef4444)">
                                {{ $item->periode ?? '2021-2025' }}
                            </span>
                        </div>
                        {{-- Info --}}
                        <div class="flex-1">
                            <span class="inline-block px-2.5 py-0.5 rounded-full text-[10px] font-bold text-white mb-2"
                                  style="background:linear-gradient(135deg,#1D4ED8,#7C3AED)">{{ $item->jabatan }}</span>
                            <h3 class="text-[#0D2B5E] font-bold text-lg leading-snug mb-3">{{ $item->nama }}</h3>
                            <div class="space-y-1.5">
                                @foreach([['Alamat',$item->alamat??'-'],['Pendidikan',$item->pendidikan??'-'],['TTL',$item->ttl??'-']] as $row)
                                <div class="flex gap-2 text-xs">
                                    <span class="font-bold text-[#1D4ED8] w-20 flex-shrink-0">{{ $row[0] }}</span>
                                    <span class="text-gray-500">{{ $row[1] }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <p class="text-xs text-gray-400 leading-relaxed line-clamp-2">{{ $item->deskripsi ?? '-' }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </section>

    <!-- PERANGKAT DESA — Design 3: Colorful Bold Grid -->
    <section class="py-12 px-4 sm:px-6 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-10 reveal-ap3">
                <span class="inline-block px-4 py-1 rounded-full text-xs font-bold text-white mb-3"
                      style="background:linear-gradient(135deg,#1D4ED8,#7C3AED)">Tim</span>
                <h2 class="text-2xl font-bold text-[#0D2B5E]">Perangkat Desa</h2>
            </div>

            @if($perangkat->isEmpty())
            <div class="text-center py-16 text-gray-400"><p class="text-lg">Belum ada data perangkat desa.</p></div>
            @else
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach($perangkat as $index => $item)
                <div class="perangkat-card3 reveal-ap3 shadow-[0_2px_12px_rgba(29,78,216,0.08)]"
                     style="transition-delay:{{ $index*0.06 }}s">
                    <div class="aspect-square overflow-hidden">
                        <img src="{{ $item->foto ? asset('storage/'.$item->foto) : asset('images/aparatur-foto.jpg') }}"
                             alt="{{ $item->nama }}"
                             class="w-full h-full object-cover object-top transition-transform duration-500 hover:scale-105">
                    </div>
                    <span class="badge-jabatan">{{ $item->jabatan }}</span>
                    {{-- Footer --}}
                    <div class="p-3" style="border-top: 3px solid; border-image: linear-gradient(to right,#1D4ED8,#7C3AED) 1">
                        <p class="text-xs font-bold text-[#0D2B5E] truncate">{{ $item->nama }}</p>
                        <div class="flex items-center gap-1 mt-1">
                            <div class="w-1.5 h-1.5 rounded-full" style="background:linear-gradient(135deg,#1D4ED8,#7C3AED)"></div>
                            <p class="text-[10px] text-gray-400 truncate">{{ $item->jabatan }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </section>

    <script>
        const obs3 = new IntersectionObserver(entries => {
            entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); obs3.unobserve(e.target); } });
        }, { threshold: 0.08 });
        document.querySelectorAll('.reveal-ap3').forEach(el => obs3.observe(el));
    </script>
</div>
