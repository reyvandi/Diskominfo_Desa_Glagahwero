<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{ $title ?? 'Glagahwero' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Dancing+Script:wght@700&display=swap" rel="stylesheet"/>
    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="min-h-screen flex flex-col bg-white">

    {{-- HEADER --}}
    @include('components.header')

    {{-- KONTEN --}}
    <main class="flex-1">
        @include('pages.beranda')
    </main>

    {{-- FOOTER --}}
    @include('components.footer')

</body>
</html>
