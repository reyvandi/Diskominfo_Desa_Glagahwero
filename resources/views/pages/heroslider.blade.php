@extends('layouts.app')
@section('content')
    <section class="w-full">
        <div class="px-8 pt-8">
            <h1 class="text-2xl font-bold mb-6">Hero Slider Preview</h1>
        </div>
        {{-- Livewire di luar padding agar full width --}}
        <div class="px-8">
            <livewire:hero-slider-picker />
        </div>
    </section>
@endsection
