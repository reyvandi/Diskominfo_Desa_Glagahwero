<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">

<div class="d2-hero relative w-full overflow-hidden" style="font-family:'DM Sans',sans-serif">
    <div class="swiper d2-swiper w-full bg-[#0A0A0A]" id="d2Swiper" style="height:600px">
        <div class="swiper-wrapper" style="height:100%">

            {{-- ══ SLIDE 1 ══ --}}
            <div class="swiper-slide overflow-hidden" style="height:100%; display:flex">
                <div class="d2-left-panel relative z-10 flex flex-col justify-end bg-[#0A0A0A]"
                     style="width:50%; flex-shrink:0; padding:60px 8% 100px">
                    <div class="absolute top-6 select-none pointer-events-none leading-none"
                         style="font-family:'Bebas Neue',sans-serif; left:6%; font-size:clamp(5rem,12vw,12rem); color:#111; -webkit-text-stroke:1px #1C1C1C">01</div>
                    <div class="d2-anim-wrap flex flex-col">
                        <div class="d2-anim-el" style="opacity:0; transform:translateX(-22px)">
                            <span class="inline-flex items-center gap-2 text-[#39FF14] text-xs tracking-[0.25em] uppercase font-medium">
                                Desa Wisata
                                <span class="inline-block w-8 h-px bg-[#39FF14]"></span>
                            </span>
                        </div>
                        <div class="d2-anim-el mt-3" style="opacity:0; transform:translateX(-22px)">
                            <h1 class="text-white leading-none"
                                style="font-family:'Bebas Neue',sans-serif; font-size:clamp(3.5rem,6vw,6.5rem); letter-spacing:0.03em">
                                GLAGAH<span class="text-[#39FF14]">WERO</span>
                            </h1>
                        </div>
                        <div class="d2-anim-el mt-5" style="opacity:0; transform:translateX(-22px)">
                            <p class="text-white/45 text-sm leading-relaxed max-w-xs">
                                Surga tersembunyi di Jember yang menyimpan kekayaan budaya dan keindahan alam yang tak ternilai.
                            </p>
                        </div>
                        <div class="d2-anim-el mt-8 flex gap-3 flex-wrap" style="opacity:0; transform:translateX(-22px)">
                            <a href="#" class="bg-[#39FF14] text-[#0A0A0A] px-7 py-3 text-xs font-bold tracking-[0.15em] uppercase hover:opacity-80 transition-opacity">Jelajahi</a>
                            <a href="#" class="border border-white/20 text-white/50 px-6 py-3 text-xs tracking-[0.1em] uppercase hover:border-[#39FF14] hover:text-[#39FF14] transition-all">Pelajari</a>
                        </div>
                    </div>
                </div>
                <div class="d2-right-panel relative flex-1 overflow-hidden">
                    <div class="d2-img-bg absolute inset-0 bg-cover bg-center"
                         style="background-image:url('{{ asset('images/hero-1.jpg') }}');
                                clip-path:polygon(8% 0,100% 0,100% 100%,0% 100%);
                                transform:scale(1.06); transition:transform 6s ease"></div>
                    <div class="absolute inset-0 z-10"
                         style="background:linear-gradient(to right,#0A0A0A 0%,transparent 35%)"></div>
                </div>
            </div>

            {{-- ══ SLIDE 2 ══ --}}
            <div class="swiper-slide overflow-hidden" style="height:100%; display:flex">
                <div class="d2-left-panel relative z-10 flex flex-col justify-end bg-[#0A0A0A]"
                     style="width:50%; flex-shrink:0; padding:60px 8% 100px">
                    <div class="absolute top-6 select-none pointer-events-none leading-none"
                         style="font-family:'Bebas Neue',sans-serif; left:6%; font-size:clamp(5rem,12vw,12rem); color:#111; -webkit-text-stroke:1px #1C1C1C">02</div>
                    <div class="d2-anim-wrap flex flex-col">
                        <div class="d2-anim-el" style="opacity:0; transform:translateX(-22px)">
                            <span class="inline-flex items-center gap-2 text-[#39FF14] text-xs tracking-[0.25em] uppercase font-medium">
                                Potensi Lokal
                                <span class="inline-block w-8 h-px bg-[#39FF14]"></span>
                            </span>
                        </div>
                        <div class="d2-anim-el mt-3" style="opacity:0; transform:translateX(-22px)">
                            <h1 class="text-white leading-none"
                                style="font-family:'Bebas Neue',sans-serif; font-size:clamp(3.5rem,6vw,6.5rem); letter-spacing:0.03em">
                                PRODUK<span class="text-[#39FF14]"> DESA</span>
                            </h1>
                        </div>
                        <div class="d2-anim-el mt-5" style="opacity:0; transform:translateX(-22px)">
                            <p class="text-white/45 text-sm leading-relaxed max-w-xs">
                                UMKM lokal yang bergeliat menghadirkan produk-produk unggulan khas Glagahwero ke pasar nasional.
                            </p>
                        </div>
                        <div class="d2-anim-el mt-8 flex gap-3 flex-wrap" style="opacity:0; transform:translateX(-22px)">
                            <a href="#" class="bg-[#39FF14] text-[#0A0A0A] px-7 py-3 text-xs font-bold tracking-[0.15em] uppercase hover:opacity-80 transition-opacity">Lihat Produk</a>
                            <a href="#" class="border border-white/20 text-white/50 px-6 py-3 text-xs tracking-[0.1em] uppercase hover:border-[#39FF14] hover:text-[#39FF14] transition-all">Info Lebih</a>
                        </div>
                    </div>
                </div>
                <div class="d2-right-panel relative flex-1 overflow-hidden">
                    <div class="d2-img-bg absolute inset-0 bg-cover bg-center"
                         style="background-image:url('{{ asset('images/hero-2.jpg') }}');
                                clip-path:polygon(8% 0,100% 0,100% 100%,0% 100%);
                                transform:scale(1.06); transition:transform 6s ease"></div>
                    <div class="absolute inset-0 z-10"
                         style="background:linear-gradient(to right,#0A0A0A 0%,transparent 35%)"></div>
                </div>
            </div>

            {{-- ══ SLIDE 3 ══ --}}
            <div class="swiper-slide overflow-hidden" style="height:100%; display:flex">
                <div class="d2-left-panel relative z-10 flex flex-col justify-end bg-[#0A0A0A]"
                     style="width:50%; flex-shrink:0; padding:60px 8% 100px">
                    <div class="absolute top-6 select-none pointer-events-none leading-none"
                         style="font-family:'Bebas Neue',sans-serif; left:6%; font-size:clamp(5rem,12vw,12rem); color:#111; -webkit-text-stroke:1px #1C1C1C">03</div>
                    <div class="d2-anim-wrap flex flex-col">
                        <div class="d2-anim-el" style="opacity:0; transform:translateX(-22px)">
                            <span class="inline-flex items-center gap-2 text-[#39FF14] text-xs tracking-[0.25em] uppercase font-medium">
                                Pemerintahan
                                <span class="inline-block w-8 h-px bg-[#39FF14]"></span>
                            </span>
                        </div>
                        <div class="d2-anim-el mt-3" style="opacity:0; transform:translateX(-22px)">
                            <h1 class="text-white leading-none"
                                style="font-family:'Bebas Neue',sans-serif; font-size:clamp(3.5rem,6vw,6.5rem); letter-spacing:0.03em">
                                LAYANAN<span class="text-[#39FF14]"> PRIMA</span>
                            </h1>
                        </div>
                        <div class="d2-anim-el mt-5" style="opacity:0; transform:translateX(-22px)">
                            <p class="text-white/45 text-sm leading-relaxed max-w-xs">
                                Transparansi dan dedikasi penuh dari aparat desa dalam melayani setiap kebutuhan masyarakat.
                            </p>
                        </div>
                        <div class="d2-anim-el mt-8 flex gap-3 flex-wrap" style="opacity:0; transform:translateX(-22px)">
                            <a href="#" class="bg-[#39FF14] text-[#0A0A0A] px-7 py-3 text-xs font-bold tracking-[0.15em] uppercase hover:opacity-80 transition-opacity">Profil Desa</a>
                            <a href="#" class="border border-white/20 text-white/50 px-6 py-3 text-xs tracking-[0.1em] uppercase hover:border-[#39FF14] hover:text-[#39FF14] transition-all">Kontak</a>
                        </div>
                    </div>
                </div>
                <div class="d2-right-panel relative flex-1 overflow-hidden">
                    <div class="d2-img-bg absolute inset-0 bg-cover bg-center"
                         style="background-image:url('{{ asset('images/hero-3.jpg') }}');
                                clip-path:polygon(8% 0,100% 0,100% 100%,0% 100%);
                                transform:scale(1.06); transition:transform 6s ease"></div>
                    <div class="absolute inset-0 z-10"
                         style="background:linear-gradient(to right,#0A0A0A 0%,transparent 35%)"></div>
                </div>
            </div>

        </div>

        {{-- Divider --}}
        <div id="d2Divider" class="absolute top-[10%] bottom-[10%] z-20 overflow-hidden"
             style="left:50%; width:1px; background:rgba(57,255,20,0.12)">
            <div id="d2DividerDrop" class="absolute left-0 w-full bg-[#39FF14]"
                 style="top:0; height:0; opacity:0"></div>
        </div>

        {{-- Label vertikal kanan --}}
        <div class="absolute right-6 top-1/2 z-20 hidden sm:block text-white/20 text-[0.6rem] tracking-[0.3em] uppercase whitespace-nowrap"
             style="transform:translateY(-50%) rotate(90deg)">
            Glagahwero · Jember · Jawa Timur
        </div>

        {{-- Bottom bar --}}
        <div class="absolute bottom-0 left-0 right-0 z-20 flex items-center gap-6 px-8 sm:px-12"
             style="height:70px; background:rgba(10,10,10,0.92); backdrop-filter:blur(8px); border-top:1px solid rgba(255,255,255,0.06)">
            <span class="text-white/30 text-[0.62rem] tracking-[0.2em] uppercase mr-auto">Desa Glagahwero</span>
            <div class="flex gap-2 items-center" id="d2Dots">
                <div class="d2-dot" data-idx="0" style="height:2px; width:28px; background:#39FF14; cursor:pointer; transition:width 0.4s,background 0.4s"></div>
                <div class="d2-dot" data-idx="1" style="height:2px; width:8px; background:rgba(255,255,255,0.2); cursor:pointer; transition:width 0.4s,background 0.4s"></div>
                <div class="d2-dot" data-idx="2" style="height:2px; width:8px; background:rgba(255,255,255,0.2); cursor:pointer; transition:width 0.4s,background 0.4s"></div>
            </div>
            <div class="flex gap-0.5">
                <button class="d2-prev flex items-center justify-center border border-white/10 text-white/50 hover:bg-[#39FF14] hover:text-[#0A0A0A] hover:border-[#39FF14] transition-all duration-300"
                        style="width:44px; height:44px">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                </button>
                <button class="d2-next flex items-center justify-center border border-white/10 text-white/50 hover:bg-[#39FF14] hover:text-[#0A0A0A] hover:border-[#39FF14] transition-all duration-300"
                        style="width:44px; height:44px">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>

    </div>
</div>
{{-- TIDAK ADA <script> di sini — init ditangani @script di previewer --}}
