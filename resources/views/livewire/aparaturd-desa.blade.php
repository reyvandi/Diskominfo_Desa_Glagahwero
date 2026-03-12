<div>
    <div class="overflow-hidden">
        <div class="flex gap-3 w-max animate-scroll-aparat hover:[animation-play-state:paused]">

            @forelse($aparatur as $item)
            <div class="flex-shrink-0 w-[calc(50vw-20px)] sm:w-[calc(33vw-16px)] lg:w-64">
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:-translate-y-1 transition-transform duration-200">
                    <div class="w-full h-[180px] overflow-hidden">
                        <img src="{{ $item->foto ? asset('storage/' . $item->foto) : asset('images/aparatur-foto.jpg') }}"
                             alt="{{ $item->nama }}"
                             class="w-full h-full object-cover object-top">
                    </div>
                    <div class="p-3 bg-[#0D2B5E] text-white">
                        <p class="text-sm font-semibold">{{ $item->nama }}</p>
                        <p class="text-xs text-blue-200">{{ $item->jabatan }}</p>
                    </div>
                </div>
            </div>
            @empty
            {{-- Tampilkan dummy saat data kosong agar animasi tetap jalan --}}
            @foreach(range(1, 8) as $i)
            <div class="flex-shrink-0 w-[calc(50vw-20px)] sm:w-[calc(33vw-16px)] lg:w-64">
                <div class="bg-white rounded-xl overflow-hidden shadow-md">
                    <div class="w-full h-[180px] overflow-hidden">
                        <img src="{{ asset('images/aparatur-foto.jpg') }}"
                             alt="Foto Aparat"
                             class="w-full h-full object-cover object-top">
                    </div>
                    <div class="p-3 bg-[#0D2B5E] text-white">
                        <p class="text-sm font-semibold">Nama Lengkap</p>
                        <p class="text-xs text-blue-200">Jabatan</p>
                    </div>
                </div>
            </div>
            @endforeach
            @endforelse

            {{-- Duplikat untuk seamless loop --}}
            @forelse($aparatur as $item)
            <div class="flex-shrink-0 w-[calc(50vw-20px)] sm:w-[calc(33vw-16px)] lg:w-64">
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:-translate-y-1 transition-transform duration-200">
                    <div class="w-full h-[180px] overflow-hidden">
                        <img src="{{ $item->foto ? asset('storage/' . $item->foto) : asset('images/aparatur-foto.jpg') }}"
                             alt="{{ $item->nama }}"
                             class="w-full h-full object-cover object-top">
                    </div>
                    <div class="p-3 bg-[#0D2B5E] text-white">
                        <p class="text-sm font-semibold">{{ $item->nama }}</p>
                        <p class="text-xs text-blue-200">{{ $item->jabatan }}</p>
                    </div>
                </div>
            </div>
            @empty
            @foreach(range(1, 8) as $i)
            <div class="flex-shrink-0 w-[calc(50vw-20px)] sm:w-[calc(33vw-16px)] lg:w-64">
                <div class="bg-white rounded-xl overflow-hidden shadow-md">
                    <div class="w-full h-[180px] overflow-hidden">
                        <img src="{{ asset('images/aparatur-foto.jpg') }}"
                             alt="Foto Aparat"
                             class="w-full h-full object-cover object-top">
                    </div>
                    <div class="p-3 bg-[#0D2B5E] text-white">
                        <p class="text-sm font-semibold">Nama Lengkap</p>
                        <p class="text-xs text-blue-200">Jabatan</p>
                    </div>
                </div>
            </div>
            @endforeach
            @endforelse

        </div>
    </div>
</div>
