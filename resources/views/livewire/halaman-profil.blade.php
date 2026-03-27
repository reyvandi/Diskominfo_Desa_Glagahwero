<div>
    <section class="bg-gray-100 min-h-screen py-10 px-4 md:px-8 font-sans">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-8">

            {{-- SIDEBAR --}}
            <aside class="lg:w-64 flex-shrink-0">
                <div class="sticky top-4 lg:top-6 flex flex-col gap-8 bg-[#F4F8FD] p-4 rounded-xl shadow-sm">

                    <a href="#visi-misi"
                       class="sidebar-link flex items-center gap-3 px-5 py-4 rounded-xl text-white font-semibold text-sm shadow-md transition-all hover:brightness-110"
                       style="background:#102778; opacity:0; transform:translateX(-24px)">
                        <span class="w-9 h-9 rounded-lg flex items-center justify-center" style="background:rgba(255,255,255,0.15)">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7-10-7-10-7z"/></svg>
                        </span>
                        <div>
                            <div class="font-bold">Visi &amp; Misi</div>
                            <div class="text-xs opacity-70 font-normal">Tujuan dan Arah Desa</div>
                        </div>
                    </a>

                    <a href="#sejarah"
                       class="sidebar-link flex items-center gap-3 px-5 py-4 rounded-xl text-white font-semibold text-sm shadow-md transition-all hover:brightness-110"
                       style="background:#102778; opacity:0; transform:translateX(-24px)">
                        <span class="w-9 h-9 rounded-lg flex items-center justify-center" style="background:rgba(255,255,255,0.15)">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
                        </span>
                        <div>
                            <div class="font-bold">Sejarah Desa</div>
                            <div class="text-xs opacity-70 font-normal">Asal Usul Desa</div>
                        </div>
                    </a>

                    <a href="#bagan"
                       class="sidebar-link flex items-center gap-3 px-5 py-4 rounded-xl text-white font-semibold text-sm shadow-md transition-all hover:brightness-110"
                       style="background:#102778; opacity:0; transform:translateX(-24px)">
                        <span class="w-9 h-9 rounded-lg flex items-center justify-center" style="background:rgba(255,255,255,0.15)">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg>
                        </span>
                        <div>
                            <div class="font-bold">Bagan Desa</div>
                            <div class="text-xs opacity-70 font-normal">Struktur Organisasi</div>
                        </div>
                    </a>

                </div>
            </aside>

            {{-- KONTEN UTAMA --}}
            <main class="flex-1 flex flex-col gap-10">

                @if(!$profil)
                <div class="text-center py-20 text-gray-400">
                    <p class="text-lg">Belum ada data profil desa.</p>
                </div>
                @else

                {{-- VISI --}}
                <div id="visi-misi" class="scroll-mt-28 reveal-block" style="opacity:0; transform:translateY(32px)">
                    <div class="flex items-center gap-3 px-6 py-4 rounded-t-2xl text-white font-bold text-lg" style="background: linear-gradient(135deg, #0B1B52 0%, #193CB8 100%)">
                        <span class="w-9 h-9 rounded-lg flex items-center justify-center bg-white bg-opacity-20">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7-10-7-10-7z"/></svg>
                        </span>
                        Visi
                    </div>
                    <div class="bg-white rounded-b-2xl shadow-sm p-8">
                        <div class="border-l-4 pl-6 py-2" style="border-color: #0D2B5E">
                            <p class="text-gray-700 text-base md:text-lg font-medium leading-relaxed text-justify italic">
                                "{{ $profil->visi }}"
                            </p>
                        </div>
                    </div>
                </div>

                {{-- MISI --}}
                <div class="reveal-block" style="opacity:0; transform:translateY(32px)">
                    <div class="flex items-center gap-3 px-6 py-4 rounded-t-2xl text-white font-bold text-lg" style="background: linear-gradient(135deg, #0B1B52 0%, #193CB8 100%)">
                        <span class="w-9 h-9 rounded-lg flex items-center justify-center bg-white bg-opacity-20">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2"/><rect x="9" y="3" width="6" height="4" rx="1"/><path d="M9 12h6M9 16h4"/></svg>
                        </span>
                        Misi
                    </div>
                    <div class="bg-white rounded-b-2xl shadow-sm p-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            @foreach($profil->misi as $no => $isi)
                            <div class="misi-card flex items-start gap-4 p-4 rounded-xl border border-gray-100 hover:shadow-md transition-shadow bg-gray-50"
                                 style="opacity:0; transform:translateY(20px)">
                                <span class="flex-shrink-0 w-9 h-9 rounded-lg flex items-center justify-center text-white font-bold text-sm" style="background: #1B2F5E">
                                    {{ $no + 1 }}
                                </span>
                                <p class="text-gray-600 text-sm leading-relaxed">{{ $isi['item'] }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- SEJARAH --}}
                <div id="sejarah" class="scroll-mt-28 reveal-block" style="opacity:0; transform:translateY(32px)">
                    <div class="flex items-center gap-3 px-6 py-4 rounded-t-2xl text-white font-bold text-lg" style="background: linear-gradient(135deg, #0B1B52 0%, #193CB8 100%)">
                        <span class="w-9 h-9 rounded-lg flex items-center justify-center bg-white bg-opacity-20">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
                        </span>
                        Sejarah Desa
                    </div>
                    <div class="bg-white rounded-b-2xl shadow-sm p-8">
                        <div class="rounded-xl p-8 text-white text-sm leading-relaxed text-justify" style="background: linear-gradient(135deg, #1B2F5E, #2a4a8a)">
                            {!! $profil->sejarah !!}
                        </div>
                    </div>
                </div>

                {{-- BAGAN --}}
                <div id="bagan" class="scroll-mt-28 reveal-block" style="opacity:0; transform:translateY(32px)">
                    <div class="flex items-center gap-3 px-6 py-4 rounded-t-2xl text-white font-bold text-lg" style="background: linear-gradient(135deg, #0B1B52 0%, #193CB8 100%)">
                        <span class="w-9 h-9 rounded-lg flex items-center justify-center bg-white bg-opacity-20">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg>
                        </span>
                        Bagan Desa
                    </div>
                    <div class="bg-white rounded-b-2xl shadow-sm p-6">
                        <div class="flex items-center justify-between mb-4 flex-wrap gap-2">
                            <div class="flex items-center gap-2">
                                <div class="w-1 h-5 rounded-full" style="background:#0D2B5E"></div>
                                <span class="text-sm font-semibold text-gray-700">Struktur Organisasi Pemerintahan Desa</span>
                            </div>
                            <span class="px-3 py-1 rounded-full text-white text-xs font-bold" style="background:#1636A4">
                                Periode {{ $profil->periode ?? '2022 - 2029' }}
                            </span>
                        </div>
                        <div class="rounded-xl overflow-hidden border border-gray-100">
                            @if($profil->bagan)
                            <img src="{{ asset('storage/' . $profil->bagan) }}" alt="Bagan Desa" class="w-full object-cover">
                            @else
                            <div class="w-full h-64 flex items-center justify-center flex-col gap-3 rounded-xl" style="background: linear-gradient(135deg, #1B2F5E, #2a4a8a)">
                                <svg class="w-14 h-14 opacity-30" fill="none" stroke="white" stroke-width="1.5" viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg>
                                <p class="text-white text-sm opacity-50">Gambar bagan belum tersedia</p>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                @endif

            </main>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            /* ── SIDEBAR SLIDE-IN ── */
            document.querySelectorAll('.sidebar-link').forEach((el, i) => {
                setTimeout(() => {
                    el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                    el.style.opacity    = '1';
                    el.style.transform  = 'translateX(0)';
                }, 100 + i * 120);
            });

            /* ── SCROLL REVEAL untuk .reveal-block ── */
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (!entry.isIntersecting) return;
                    const el = entry.target;
                    el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                    el.style.opacity    = '1';
                    el.style.transform  = 'translateY(0)';

                    // Animasi kartu misi di dalam block ini
                    el.querySelectorAll('.misi-card').forEach((card, i) => {
                        setTimeout(() => {
                            card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                            card.style.opacity    = '1';
                            card.style.transform  = 'translateY(0)';
                        }, 100 + i * 80);
                    });

                    revealObserver.unobserve(el);
                });
            }, { threshold: 0.08 });

            document.querySelectorAll('.reveal-block').forEach(el => revealObserver.observe(el));

            /* ── ACTIVE SIDEBAR ── */
            const links    = document.querySelectorAll('aside a');
            const sections = ['visi-misi', 'sejarah', 'bagan'];

            function setActive(id) {
                links.forEach(link => {
                    const isActive = link.getAttribute('href') === '#' + id;
                    link.style.transform  = isActive ? 'translateX(8px) scale(1.02)' : 'translateX(0) scale(1)';
                    link.style.boxShadow  = isActive ? '0 8px 24px rgba(27,47,94,0.5)' : '';
                    link.style.transition = 'transform 0.3s ease, box-shadow 0.3s ease';
                });
            }

            const visiLink = document.querySelector('a[href="#visi-misi"]');
            if (visiLink) {
                visiLink.addEventListener('click', function (e) {
                    e.preventDefault();
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                    setActive('visi-misi');
                });
            }

            const sectionObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) setActive(entry.target.id);
                });
            }, { threshold: 0.1, rootMargin: '-80px 0px -30% 0px' });

            sections.forEach(id => {
                const el = document.getElementById(id);
                if (el) sectionObserver.observe(el);
            });

            setActive('visi-misi');
        });
    </script>
</div>
