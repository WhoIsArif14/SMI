<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selaras Mitra Integra</title> {{-- Judul sudah diubah menjadi Selaras Mitra Integra --}}

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    {{-- PENTING: Gunakan @vite untuk mengkompilasi aset Tailwind dan Alpine.js --}}
    {{-- Pastikan Anda sudah menjalankan 'npm install' dan 'npm run dev' atau 'npm run build' --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Your custom CSS here */
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    {{-- Header & Navigasi Publik --}}
    <header class="bg-blue-600 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            {{-- Logo / Nama Perusahaan --}}
            <a href="{{ route('home') }}" class="text-2xl font-bold">{{ config('app.name', 'SMI') }}</a> {{-- Menggunakan config('app.name') atau fallback 'SMI' --}}
            
            <nav class="flex items-center space-x-4"> {{-- Menambahkan space-x-4 untuk jarak antar menu --}}
                <a href="{{ route('home') }}" class="px-3 py-2 rounded hover:bg-blue-700">Beranda</a>
                <a href="{{ route('pages.show', 'about-us') }}" class="px-3 py-2 rounded hover:bg-blue-700">Tentang Kami</a>

                {{-- Dropdown Layanan --}}
                <div x-data="{ open: false }" @click.away="open = false" class="relative">
                    <button @click="open = !open" class="px-3 py-2 rounded hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300 flex items-center">
                        Layanan
                        <svg class="ml-1 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-10" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1" role="none">
                            {{-- Contoh Sub-menu Layanan. Ganti '#' dengan rute spesifik Anda nanti. --}}
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" tabindex="-1" id="menu-item-0">Rekrutmen</a>
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" tabindex="-1" id="menu-item-1">Asesmen</a>
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" tabindex="-1" id="menu-item-2">Test Bakat dan Minat</a>
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" tabindex="-1" id="menu-item-2">Coaching and Counseling</a>
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" tabindex="-1" id="menu-item-2">Seminar</a>
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" tabindex="-1" id="menu-item-2">Konseling Psikolog</a>
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" tabindex="-1" id="menu-item-2">Pengembangan Organisasi</a>
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" tabindex="-1" id="menu-item-2">Pelatihan dan Pengembangan</a>
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" tabindex="-1" id="menu-item-2">Outbound</a>
                        </div>
                    </div>
                </div>

                <a href="{{ route('news.index') }}" class="px-3 py-2 rounded hover:bg-blue-700">Berita</a>
                <a href="{{ route('news.index') }}" class="px-3 py-2 rounded hover:bg-blue-700">Expert Kami</a>
                <a href="{{ route('news.index') }}" class="px-3 py-2 rounded hover:bg-blue-700">Karir dan</a>
                {{-- Tambahkan link lain sesuai kebutuhan Anda --}}
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