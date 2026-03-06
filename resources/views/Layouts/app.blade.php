<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>{{ $title ?? 'Glagahwero' }}</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Dancing+Script:wght@700&display=swap" rel="stylesheet"/>
        @livewireStyles
        <style>
            body { font-family: 'Poppins', sans-serif; }

            @keyframes scrollAparat {
                0%   { transform: translateX(0); }
                100% { transform: translateX(-50%); }
            }
            .animate-scroll-aparat {
                animation: scrollAparat 40s linear infinite;
            }
            .animate-scroll-aparat:hover {
                animation-play-state: paused;
            }
        </style>
    </head>
    <body class="min-h-screen flex flex-col bg-white">

        {{-- HEADER --}}
        @include('components.header')

        {{-- KONTEN --}}
        <main class="flex-1">
            @yield('content')
        </main>

        {{-- FOOTER --}}
        @include('components.footer')

        @livewireScripts
    </body>
</html>
