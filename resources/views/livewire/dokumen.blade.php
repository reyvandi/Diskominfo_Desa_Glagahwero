<section class="bg-gray-50 min-h-screen py-10 px-4 md:px-10">
  <div class="max-w-7xl mx-auto">

    {{-- Stats Cards --}}
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-10">
      @foreach([
        ['icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z', 'count' => $stats['total'],     'label' => 'Total Dokumen'],
        ['icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'count' => $stats['keuangan'],  'label' => 'Dokumen Keuangan'],
        ['icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2',                      'count' => $stats['peraturan'], 'label' => 'Peraturan Desa'],
        ['icon' => 'M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0',                                           'count' => $stats['perizinan'], 'label' => 'Dokumen Perizinan'],
      ] as $stat)
      <div class="bg-white rounded-xl shadow-sm p-4 flex items-center gap-4 hover:shadow-md transition-all">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0"
             style="background: #1D4ED8">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="{{ $stat['icon'] }}"/>
          </svg>
        </div>
        <div>
          <div class="text-2xl font-bold text-gray-800">{{ $stat['count'] }}</div>
          <div class="text-xs text-gray-500">{{ $stat['label'] }}</div>
        </div>
      </div>
      @endforeach
    </div>

    {{-- Header + Filter Kategori --}}
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
      <div class="flex items-center gap-3">
        <div class="w-1 h-6 rounded-full" style="background: linear-gradient(135deg, #1B2F5E, #2a4a8a)"></div>
        <h2 class="text-lg font-bold text-gray-800">Dokumen Desa</h2>
      </div>

      {{-- Tab Filter --}}
      <div class="flex flex-wrap gap-2">
        @foreach($kategoris as $key => $label)
          <button
            wire:click="switchKategori('{{ $key }}')"
            class="px-3 py-1.5 rounded-lg text-xs font-semibold transition-all
              {{ $aktifKategori === $key
                  ? 'text-white shadow'
                  : 'bg-white text-gray-600 border border-gray-200 hover:bg-gray-50' }}"
            @if($aktifKategori === $key) style="background: linear-gradient(135deg, #1B2F5E, #2a4a8a)" @endif
          >
            {{ $label }}
          </button>
        @endforeach
      </div>
    </div>

    {{-- Grid Dokumen --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5" id="dokumen-grid">
      @forelse($dokumens as $dok)
      <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-all duration-300 dokumen-card">
        {{-- Info Dokumen --}}
        <div class="flex items-center gap-3 p-4">
          <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0"
               style="background: linear-gradient(135deg, #1B2F5E, #2a4a8a)">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
          </div>
          <div>
            <p class="text-xs text-gray-400 uppercase tracking-wide font-semibold">{{ strtoupper($dok->kategori) }}</p>
            <p class="text-sm font-bold text-blue-700 leading-snug">{{ $dok->judul }}</p>
            <p class="text-xs text-gray-400 mt-0.5">
              {{ $dok->tanggal ? \Carbon\Carbon::parse($dok->tanggal)->translatedFormat('d M Y') : '-' }}
            </p>
          </div>
        </div>

        {{-- Divider --}}
        <div class="border-t border-gray-100 mx-4"></div>

        {{-- Footer --}}
        <div class="flex items-center justify-between px-4 py-3">
          <span class="text-xs text-gray-400">{{ $dok->ukuran ?? '-' }}</span>
          @if($dok->file)
          <a href="{{ asset('storage/' . $dok->file) }}"
             download
             class="flex items-center gap-1.5 text-white text-xs font-semibold px-4 py-2 rounded-lg shadow transition-all hover:brightness-110"
             style="background: linear-gradient(135deg, #1B2F5E, #2a4a8a)">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
            </svg>
            Unduh
          </a>
          @else
          <span class="text-xs text-gray-300 italic">File tidak tersedia</span>
          @endif
        </div>
      </div>
      @empty
      <div class="col-span-3 text-center py-16 text-gray-400">
        <svg class="w-12 h-12 mx-auto mb-3 opacity-40" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
          <path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
        </svg>
        <p class="text-sm font-medium">Tidak ada dokumen ditemukan</p>
      </div>
      @endforelse
    </div>

    {{-- Pagination --}}
    <div class="mt-8">
      {{ $dokumens->links() }}
    </div>

  </div>
</section>

{{-- Animasi card masuk saat scroll --}}
<script>
  document.addEventListener('livewire:navigated', initDocObserver);
  document.addEventListener('DOMContentLoaded', initDocObserver);

  function initDocObserver() {
    const docObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry, i) => {
        if (entry.isIntersecting) {
          setTimeout(() => {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
          }, i * 80);
          docObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });

    document.querySelectorAll('.dokumen-card').forEach(card => {
      card.style.opacity = '0';
      card.style.transform = 'translateY(24px)';
      card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
      docObserver.observe(card);
    });
  }

  // Re-init animasi setiap kali Livewire update DOM
  document.addEventListener('livewire:updated', initDocObserver);
</script>
