<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400;1,600&family=Outfit:wght@300;400;500&display=swap" rel="stylesheet">

<div class="d3-hero relative w-full overflow-hidden" style="font-family:'Outfit',sans-serif; height:100vh; min-height:600px">
    <div class="swiper d3-swiper w-full h-full" id="d3Swiper">
        <div class="swiper-wrapper w-full h-full">

            {{-- ══ SLIDE 1 ══ --}}
            <div class="swiper-slide relative overflow-hidden w-full h-full">
                <div class="d3-bg absolute inset-0 bg-cover bg-center"
                     style="background-image:url('{{ asset('images/hero-1.jpg') }}');
                            transform:scale(1.05); transition:transform 7s ease;
                            filter:brightness(0.72) saturate(1.1)"></div>
                <div class="absolute inset-0 z-[1]"
                     style="background:radial-gradient(ellipse at 50% 30%,rgba(255,210,140,0.18) 0%,rgba(20,50,30,0.55) 100%)"></div>
                <div class="d3-particles absolute inset-0 z-[2] pointer-events-none overflow-hidden" id="d3p1"></div>
                <div class="absolute inset-0 z-[4] flex flex-col items-center justify-center text-center" style="padding:0 5%">
                    <div class="d3-anim-eyebrow inline-flex items-center gap-3 text-[rgba(255,220,160,0.9)] uppercase tracking-[0.3em] font-normal"
                         style="font-size:0.7rem; opacity:0; transform:translateY(-16px)">
                        <span class="inline-block w-10 h-px bg-[rgba(255,220,160,0.5)]"></span>
                        Desa Wisata
                        <span class="inline-block w-10 h-px bg-[rgba(255,220,160,0.5)]"></span>
                    </div>
                    <h1 class="d3-anim-title text-white leading-none mt-3"
                        style="font-family:'Cormorant Garamond',serif; font-size:clamp(3.5rem,9vw,9rem); font-weight:600; opacity:0; transform:translateY(24px)">
                        Glagah<em class="italic text-[#FFD48A]">wero</em>
                    </h1>
                    <p class="d3-anim-sub text-white/60 font-light tracking-wide mt-3 max-w-lg"
                       style="font-size:1rem; opacity:0; transform:translateY(16px)">
                        Keindahan alam dan kekayaan budaya menyatu dalam satu harmoni yang tak terlupakan.
                    </p>
                    <div class="d3-anim-btn mt-9 flex gap-4" style="opacity:0; transform:translateY(14px)">
                        <a href="#" class="px-8 py-3.5 rounded-full text-[#2A1A00] font-medium tracking-[0.1em] uppercase text-xs transition-all duration-300 hover:-translate-y-1"
                           style="background:#FFD48A; font-size:0.8rem; box-shadow:0 8px 30px rgba(255,200,80,0.35)">Jelajahi Desa</a>
                        <a href="#" class="px-8 py-3.5 rounded-full text-white/80 tracking-[0.1em] uppercase text-xs border border-white/40 transition-all duration-300 hover:border-white/80 hover:-translate-y-1"
                           style="font-size:0.8rem">Tentang Kami</a>
                    </div>
                </div>
                <div class="d3-anim-card absolute z-[5] flex items-center gap-3 text-white rounded-2xl"
                     style="bottom:140px; right:5%; max-width:240px; padding:18px 24px;
                            background:rgba(255,255,255,0.12); backdrop-filter:blur(16px);
                            border:1px solid rgba(255,255,255,0.2);
                            opacity:0; transform:translateX(20px)">
                    <div class="flex-shrink-0 flex items-center justify-center rounded-xl text-xl"
                         style="width:44px; height:44px; background:rgba(255,212,138,0.2)">🌿</div>
                    <div>
                        <div class="uppercase tracking-[0.15em] text-white/50" style="font-size:0.65rem">Kabupaten</div>
                        <div class="font-medium mt-0.5 text-base">Jember, Jawa Timur</div>
                    </div>
                </div>
                <div class="absolute bottom-[-2px] left-0 right-0 z-[3] leading-none">
                    <svg viewBox="0 0 1440 90" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" style="display:block; width:100%">
                        <path d="M0,40 C240,90 480,0 720,40 C960,80 1200,10 1440,40 L1440,90 L0,90 Z" fill="#F4F8FD"/>
                    </svg>
                </div>
            </div>

            {{-- ══ SLIDE 2 ══ --}}
            <div class="swiper-slide relative overflow-hidden w-full h-full">
                <div class="d3-bg absolute inset-0 bg-cover bg-center"
                     style="background-image:url('{{ asset('images/hero-2.jpg') }}');
                            transform:scale(1.05); transition:transform 7s ease;
                            filter:brightness(0.72) saturate(1.1)"></div>
                <div class="absolute inset-0 z-[1]"
                     style="background:radial-gradient(ellipse at 50% 30%,rgba(255,210,140,0.18) 0%,rgba(20,50,30,0.55) 100%)"></div>
                <div class="d3-particles absolute inset-0 z-[2] pointer-events-none overflow-hidden" id="d3p2"></div>
                <div class="absolute inset-0 z-[4] flex flex-col items-center justify-center text-center" style="padding:0 5%">
                    <div class="d3-anim-eyebrow inline-flex items-center gap-3 text-[rgba(255,220,160,0.9)] uppercase tracking-[0.3em] font-normal"
                         style="font-size:0.7rem; opacity:0; transform:translateY(-16px)">
                        <span class="inline-block w-10 h-px bg-[rgba(255,220,160,0.5)]"></span>
                        Produk Lokal
                        <span class="inline-block w-10 h-px bg-[rgba(255,220,160,0.5)]"></span>
                    </div>
                    <h1 class="d3-anim-title text-white leading-none mt-3"
                        style="font-family:'Cormorant Garamond',serif; font-size:clamp(3.5rem,9vw,9rem); font-weight:600; opacity:0; transform:translateY(24px)">
                        <em class="italic text-[#FFD48A]">Potensi</em> Desa
                    </h1>
                    <p class="d3-anim-sub text-white/60 font-light tracking-wide mt-3 max-w-lg"
                       style="font-size:1rem; opacity:0; transform:translateY(16px)">
                        Produk-produk unggulan hasil tangan terampil warga desa yang siap bersaing di pasar global.
                    </p>
                    <div class="d3-anim-btn mt-9 flex gap-4" style="opacity:0; transform:translateY(14px)">
                        <a href="#" class="px-8 py-3.5 rounded-full text-[#2A1A00] font-medium tracking-[0.1em] uppercase text-xs transition-all duration-300 hover:-translate-y-1"
                           style="background:#FFD48A; font-size:0.8rem; box-shadow:0 8px 30px rgba(255,200,80,0.35)">Lihat Produk</a>
                        <a href="#" class="px-8 py-3.5 rounded-full text-white/80 tracking-[0.1em] uppercase text-xs border border-white/40 transition-all duration-300 hover:border-white/80 hover:-translate-y-1"
                           style="font-size:0.8rem">UMKM Lokal</a>
                    </div>
                </div>
                <div class="d3-anim-card absolute z-[5] flex items-center gap-3 text-white rounded-2xl"
                     style="bottom:140px; right:5%; max-width:240px; padding:18px 24px;
                            background:rgba(255,255,255,0.12); backdrop-filter:blur(16px);
                            border:1px solid rgba(255,255,255,0.2);
                            opacity:0; transform:translateX(20px)">
                    <div class="flex-shrink-0 flex items-center justify-center rounded-xl text-xl"
                         style="width:44px; height:44px; background:rgba(255,212,138,0.2)">🛖</div>
                    <div>
                        <div class="uppercase tracking-[0.15em] text-white/50" style="font-size:0.65rem">UMKM Aktif</div>
                        <div class="font-medium mt-0.5 text-base">24 Pelaku Usaha</div>
                    </div>
                </div>
                <div class="absolute bottom-[-2px] left-0 right-0 z-[3] leading-none">
                    <svg viewBox="0 0 1440 90" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" style="display:block; width:100%">
                        <path d="M0,40 C240,90 480,0 720,40 C960,80 1200,10 1440,40 L1440,90 L0,90 Z" fill="#F4F8FD"/>
                    </svg>
                </div>
            </div>

            {{-- ══ SLIDE 3 ══ --}}
            <div class="swiper-slide relative overflow-hidden w-full h-full">
                <div class="d3-bg absolute inset-0 bg-cover bg-center"
                     style="background-image:url('{{ asset('images/hero-3.jpg') }}');
                            transform:scale(1.05); transition:transform 7s ease;
                            filter:brightness(0.72) saturate(1.1)"></div>
                <div class="absolute inset-0 z-[1]"
                     style="background:radial-gradient(ellipse at 50% 30%,rgba(255,210,140,0.18) 0%,rgba(20,50,30,0.55) 100%)"></div>
                <div class="d3-particles absolute inset-0 z-[2] pointer-events-none overflow-hidden" id="d3p3"></div>
                <div class="absolute inset-0 z-[4] flex flex-col items-center justify-center text-center" style="padding:0 5%">
                    <div class="d3-anim-eyebrow inline-flex items-center gap-3 text-[rgba(255,220,160,0.9)] uppercase tracking-[0.3em] font-normal"
                         style="font-size:0.7rem; opacity:0; transform:translateY(-16px)">
                        <span class="inline-block w-10 h-px bg-[rgba(255,220,160,0.5)]"></span>
                        Pemerintahan
                        <span class="inline-block w-10 h-px bg-[rgba(255,220,160,0.5)]"></span>
                    </div>
                    <h1 class="d3-anim-title text-white leading-none mt-3"
                        style="font-family:'Cormorant Garamond',serif; font-size:clamp(3.5rem,9vw,9rem); font-weight:600; opacity:0; transform:translateY(24px)">
                        Bersama <em class="italic text-[#FFD48A]">Maju</em>
                    </h1>
                    <p class="d3-anim-sub text-white/60 font-light tracking-wide mt-3 max-w-lg"
                       style="font-size:1rem; opacity:0; transform:translateY(16px)">
                        Aparat desa yang amanah, transparan, dan berdedikasi untuk kesejahteraan seluruh masyarakat.
                    </p>
                    <div class="d3-anim-btn mt-9 flex gap-4" style="opacity:0; transform:translateY(14px)">
                        <a href="#" class="px-8 py-3.5 rounded-full text-[#2A1A00] font-medium tracking-[0.1em] uppercase text-xs transition-all duration-300 hover:-translate-y-1"
                           style="background:#FFD48A; font-size:0.8rem; box-shadow:0 8px 30px rgba(255,200,80,0.35)">Profil Desa</a>
                        <a href="#" class="px-8 py-3.5 rounded-full text-white/80 tracking-[0.1em] uppercase text-xs border border-white/40 transition-all duration-300 hover:border-white/80 hover:-translate-y-1"
                           style="font-size:0.8rem">Layanan</a>
                    </div>
                </div>
                <div class="d3-anim-card absolute z-[5] flex items-center gap-3 text-white rounded-2xl"
                     style="bottom:140px; right:5%; max-width:240px; padding:18px 24px;
                            background:rgba(255,255,255,0.12); backdrop-filter:blur(16px);
                            border:1px solid rgba(255,255,255,0.2);
                            opacity:0; transform:translateX(20px)">
                    <div class="flex-shrink-0 flex items-center justify-center rounded-xl text-xl"
                         style="width:44px; height:44px; background:rgba(255,212,138,0.2)">🏛️</div>
                    <div>
                        <div class="uppercase tracking-[0.15em] text-white/50" style="font-size:0.65rem">Berdiri Sejak</div>
                        <div class="font-medium mt-0.5 text-base">Tahun 1945</div>
                    </div>
                </div>
                <div class="absolute bottom-[-2px] left-0 right-0 z-[3] leading-none">
                    <svg viewBox="0 0 1440 90" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" style="display:block; width:100%">
                        <path d="M0,40 C240,90 480,0 720,40 C960,80 1200,10 1440,40 L1440,90 L0,90 Z" fill="#F4F8FD"/>
                    </svg>
                </div>
            </div>

        </div>

        {{-- Arrows --}}
        <button class="d3-arr-prev absolute top-1/2 left-7 z-10 flex items-center justify-center rounded-full text-white transition-all duration-300"
                style="transform:translateY(-50%); width:50px; height:50px;
                       background:rgba(255,255,255,0.1); backdrop-filter:blur(8px);
                       border:1px solid rgba(255,255,255,0.25)">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
        </button>
        <button class="d3-arr-next absolute top-1/2 right-7 z-10 flex items-center justify-center rounded-full text-white transition-all duration-300"
                style="transform:translateY(-50%); width:50px; height:50px;
                       background:rgba(255,255,255,0.1); backdrop-filter:blur(8px);
                       border:1px solid rgba(255,255,255,0.25)">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </button>

        {{-- Thumbnail strip --}}
        <div class="absolute z-10 flex gap-2.5" id="d3Thumbs"
             style="bottom:72px; left:50%; transform:translateX(-50%)">
            <div class="d3-thumb rounded-lg cursor-pointer overflow-hidden bg-cover bg-center"
                 data-idx="0"
                 style="width:56px; height:38px; border:2px solid #FFD48A; opacity:1;
                        background-image:url('{{ asset('images/hero-1.jpg') }}');
                        transition:opacity 0.3s,border-color 0.3s,transform 0.3s"></div>
            <div class="d3-thumb rounded-lg cursor-pointer overflow-hidden bg-cover bg-center"
                 data-idx="1"
                 style="width:56px; height:38px; border:2px solid transparent; opacity:0.5;
                        background-image:url('{{ asset('images/hero-2.jpg') }}');
                        transition:opacity 0.3s,border-color 0.3s,transform 0.3s"></div>
            <div class="d3-thumb rounded-lg cursor-pointer overflow-hidden bg-cover bg-center"
                 data-idx="2"
                 style="width:56px; height:38px; border:2px solid transparent; opacity:0.5;
                        background-image:url('{{ asset('images/hero-3.jpg') }}');
                        transition:opacity 0.3s,border-color 0.3s,transform 0.3s"></div>
        </div>

        {{-- Progress ring --}}
        <div class="absolute z-10" id="d3Ring" style="bottom:62px; right:5%">
            <svg width="40" height="40" viewBox="0 0 40 40" style="transform:rotate(-90deg)">
                <circle cx="20" cy="20" r="16" fill="none" stroke="rgba(255,255,255,0.15)" stroke-width="2"/>
                <circle id="d3RingCircle" cx="20" cy="20" r="16" fill="none"
                        stroke="#FFD48A" stroke-width="2.5" stroke-linecap="round"
                        style="stroke-dasharray:100.53; stroke-dashoffset:100.53; transition:stroke-dashoffset 0.1s linear"/>
            </svg>
        </div>

    </div>
</div>
{{-- TIDAK ADA <script> di sini — init ditangani @script di previewer --}}
