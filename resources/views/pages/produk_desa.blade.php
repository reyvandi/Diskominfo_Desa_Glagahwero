@extends('layouts.app')

@section('content')
<section class="bg-gray-50 min-h-screen py-10 px-4 md:px-10">
    <div class="max-w-6xl mx-auto">

        <div class="mb-6">
            <h2 class="text-2xl font-bold text-blue-700">Produk Desa</h2>
                <p class="text-gray-600 text-sm mt-1 font-semibold max-w-xS">
                    Menyajikan beragam produk unggulan hasil karya masyarakat desa yang diolah secara mandiri
                    dengan mengutamakan kualitas, kearifan lokal, dan nilai ekonomi yang berkelanjutan.
                </p>
        </div>

        <livewire:halaman-produk-desa />

    </div>
</section>
@endsection
