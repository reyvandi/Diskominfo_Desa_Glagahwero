@extends('layouts.app')

@section('content')
<section class="py-10 bg-gray-50 min-h-screen">
  <div class="max-w-6xl mx-auto px-6">

    {{-- Header Section --}}
    <div class="mb-10">
      <h2 class="text-2xl font-bold text-blue-700 uppercase tracking-wide">Berita Desa Terkait</h2>
      <p class="text-gray-500 text-base mt-1">Menyajikan berita terbaru dan informasi penting seputar kegiatan serta peristiwa di Desa Kersik.</p>
    </div>

    {{-- List Berita --}}
    <div class="flex flex-col gap-5">

      {{-- Item Berita 1 --}}
      <div class="bg-white rounded-2xl shadow-sm flex gap-6 p-6 hover:shadow-md transition-shadow">
        <img src="https://placehold.co/220x160/4a7c59/white?text=Berita"
             alt="Foto Berita"
             class="w-52 h-40 object-cover rounded-xl flex-shrink-0">
        <div class="flex flex-col justify-between flex-1">
          <div>
            <div class="flex items-center gap-1.5 text-gray-400 text-sm mb-3">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/>
              </svg>
              27 Feb 2026
            </div>
            <h3 class="font-bold text-gray-800 text-base leading-snug mb-3">
              Gotong Royong dan Pemberdayaan Petugas Kesehatan di Desa Karangdowo: Solusi Tingkatkan Layanan Kesehatan Primer
            </h3>
            <p class="text-gray-500 text-sm leading-relaxed line-clamp-3">
              Dalam semangat Gotong Royong dan Pemberdayaan Petugas Kesehatan di Desa, kami hadir untuk berbagi pengalaman dan keberhasilan kami dalam meningkatkan layanan kesehatan primer.
            </p>
          </div>
          <div class="mt-3">
            <a href="#" class="text-blue-600 text-sm font-semibold hover:underline">Baca Selengkapnya</a>
          </div>
        </div>
      </div>

      {{-- Item Berita 2 --}}
      <div class="bg-white rounded-2xl shadow-sm flex gap-6 p-6 hover:shadow-md transition-shadow">
        <img src="https://placehold.co/220x160/4a7c59/white?text=Berita"
             alt="Foto Berita"
             class="w-52 h-40 object-cover rounded-xl flex-shrink-0">
        <div class="flex flex-col justify-between flex-1">
          <div>
            <div class="flex items-center gap-1.5 text-gray-400 text-sm mb-3">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/>
              </svg>
              27 Feb 2026
            </div>
            <h3 class="font-bold text-gray-800 text-base leading-snug mb-3">
              Gotong Royong dan Pemberdayaan Petugas Kesehatan di Desa Karangdowo: Solusi Tingkatkan Layanan Kesehatan Primer
            </h3>
            <p class="text-gray-500 text-sm leading-relaxed line-clamp-3">
              Dalam semangat Gotong Royong dan Pemberdayaan Petugas Kesehatan di Desa, kami hadir untuk berbagi pengalaman dan keberhasilan kami dalam meningkatkan layanan kesehatan primer.
            </p>
          </div>
          <div class="mt-3">
            <a href="#" class="text-blue-600 text-sm font-semibold hover:underline">Baca Selengkapnya</a>
          </div>
        </div>
      </div>

      {{-- Item Berita 3 --}}
      <div class="bg-white rounded-2xl shadow-sm flex gap-6 p-6 hover:shadow-md transition-shadow">
        <img src="https://placehold.co/220x160/4a7c59/white?text=Berita"
             alt="Foto Berita"
             class="w-52 h-40 object-cover rounded-xl flex-shrink-0">
        <div class="flex flex-col justify-between flex-1">
          <div>
            <div class="flex items-center gap-1.5 text-gray-400 text-sm mb-3">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/>
              </svg>
              27 Feb 2026
            </div>
            <h3 class="font-bold text-gray-800 text-base leading-snug mb-3">
              Gotong Royong dan Pemberdayaan Petugas Kesehatan di Desa Karangdowo: Solusi Tingkatkan Layanan Kesehatan Primer
            </h3>
            <p class="text-gray-500 text-sm leading-relaxed line-clamp-3">
              Dalam semangat Gotong Royong dan Pemberdayaan Petugas Kesehatan di Desa, kami hadir untuk berbagi pengalaman dan keberhasilan kami dalam meningkatkan layanan kesehatan primer.
            </p>
          </div>
          <div class="mt-3">
            <a href="#" class="text-blue-600 text-sm font-semibold hover:underline">Baca Selengkapnya</a>
          </div>
        </div>
      </div>

      {{-- Item Berita 4 --}}
      <div class="bg-white rounded-2xl shadow-sm flex gap-6 p-6 hover:shadow-md transition-shadow">
        <img src="https://placehold.co/220x160/4a7c59/white?text=Berita"
             alt="Foto Berita"
             class="w-52 h-40 object-cover rounded-xl flex-shrink-0">
        <div class="flex flex-col justify-between flex-1">
          <div>
            <div class="flex items-center gap-1.5 text-gray-400 text-sm mb-3">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/>
              </svg>
              27 Feb 2026
            </div>
            <h3 class="font-bold text-gray-800 text-base leading-snug mb-3">
              Gotong Royong dan Pemberdayaan Petugas Kesehatan di Desa Karangdowo: Solusi Tingkatkan Layanan Kesehatan Primer
            </h3>
            <p class="text-gray-500 text-sm leading-relaxed line-clamp-3">
              Dalam semangat Gotong Royong dan Pemberdayaan Petugas Kesehatan di Desa, kami hadir untuk berbagi pengalaman dan keberhasilan kami dalam meningkatkan layanan kesehatan primer.
            </p>
          </div>
          <div class="mt-3">
            <a href="#" class="text-blue-600 text-sm font-semibold hover:underline">Baca Selengkapnya</a>
          </div>
        </div>
      </div>

    </div>

    {{-- Pagination --}}
    <div class="flex items-center justify-between mt-8 text-sm text-gray-500">
      <span>Showing 1 to 9 from 4xxx results</span>
      <div class="flex items-center gap-1.5">
        <button class="px-3 py-1.5 rounded-lg hover:bg-gray-200 text-gray-400">&lt;</button>
        <button class="px-3.5 py-1.5 rounded-lg bg-blue-700 text-white font-bold">1</button>
        <button class="px-3.5 py-1.5 rounded-lg hover:bg-gray-200">2</button>
        <button class="px-3.5 py-1.5 rounded-lg hover:bg-gray-200">3</button>
        <button class="px-3.5 py-1.5 rounded-lg hover:bg-gray-200">4</button>
        <button class="px-3.5 py-1.5 rounded-lg hover:bg-gray-200">5</button>
        <span class="px-1">...</span>
        <button class="px-3.5 py-1.5 rounded-lg hover:bg-gray-200">999</button>
        <button class="px-3 py-1.5 rounded-lg hover:bg-gray-200 text-gray-400">&gt;</button>
      </div>
    </div>

  </div>
</section>

@endsection
