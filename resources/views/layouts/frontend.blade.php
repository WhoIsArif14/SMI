<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selaras Mitra Integra</title>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    {{-- Atau gunakan @vite(['resources/css/app.css', 'resources/js/app.js']) jika ingin mengkompilasi --}}

    <style>
        /* Your custom CSS here */
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    {{-- Header & Navigasi Publik --}}
    <header class="bg-blue-600 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-2xl font-bold">{{ config('app.name', 'Nama Perusahaan') }}</a>
            <nav>
                <a href="{{ route('home') }}" class="px-3 py-2 rounded hover:bg-blue-700">Beranda</a>
                <a href="{{ route('pages.show', 'about-us') }}" class="px-3 py-2 rounded hover:bg-blue-700">Tentang Kami</a>
                <a href="{{ route('news.index') }}" class="px-3 py-2 rounded hover:bg-blue-700">Berita</a>
                {{-- Tambahkan link lain seperti Portofolio, Layanan, Kontak --}}
                <a href="{{ route('login') }}" class="px-3 py-2 rounded bg-blue-700 hover:bg-blue-800">Login Admin</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto py-8 px-4">
        {{ $slot }} {{-- Ini adalah tempat konten spesifik halaman akan diinjeksikan --}}
    </main>

    {{-- Footer Publik --}}
    <footer class="bg-gray-800 text-white p-6 mt-8">
        <div class="container mx-auto text-center">
            &copy; {{ date('Y') }} {{ config('app.name', 'Nama Perusahaan Anda') }}. All rights reserved.
        </div>
    </footer>

    <script>
        // Your custom JS here
    </script>
</body>
</html>