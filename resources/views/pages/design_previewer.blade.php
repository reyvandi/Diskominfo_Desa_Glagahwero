<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero Slider Preview</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

    @livewireStyles
</head>
<body class="bg-gray-50">

<section class="w-full">
    <div class="px-8 pt-8">
        <h1 class="text-2xl font-bold mb-6">Design Previewer</h1>
    </div>
    <div class="px-8">
        <livewire:design-previewer />
    </div>
</section>

@livewireScripts

</body>
</html>
