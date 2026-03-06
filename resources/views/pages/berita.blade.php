@extends('layouts.app')

@section('content')
<section class="py-10 bg-gray-50 min-h-screen">
    <div class="max-w-6xl mx-auto px-6">
        <div class="mb-10">
            <h2 class="text-2xl font-bold text-blue-700 uppercase tracking-wide">Berita Desa Terkait</h2>
            <p class="text-gray-500 text-base mt-1">Menyajikan berita terbaru dan informasi penting seputar kegiatan serta peristiwa di Desa Glagahwero.</p>
        </div>

        <livewire:halaman-berita />
    </div>
</section>
@endsection
