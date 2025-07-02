<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Judul akan diisi oleh @yield('title') dari view spesifik --}}
    <title>@yield('title', config('app.name', 'Selaras Mitra Integra'))</title>

    {{-- PENTING: Hanya @vite untuk mengkompilasi aset Tailwind dan Alpine.js --}}
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
            <a href="{{ route('home') }}" class="text-2xl font-bold">{{ config('app.name', 'SMI') }}</a>

            <nav class="flex items-center space-x-4">
                <a href="{{ route('home') }}" class="px-3 py-2 rounded hover:bg-blue-700">Beranda</a>
                <a href="{{ route('about-us') }}" class="px-3 py-2 rounded hover:bg-blue-700">Tentang Kami</a>
                <a href="{{ route('services') }}" class="px-3 py-2 rounded hover:bg-blue-700">Layanan</a>
                <a href="{{ route('news.index') }}" class="px-3 py-2 rounded hover:bg-blue-700">Berita</a>
                <a href="{{ route('experts.index') }}" class="px-3 py-2 rounded hover:bg-blue-700">Expert Kami</a>
                {{-- Jika "Karir dan Pelatihan" adalah halaman tersendiri, buat rutenya dan ganti '#' --}}
                <a href="{{ route('careers.index') }}" class="px-3 py-2 rounded hover:bg-blue-700">Karir dan Pelatihan</a>
                <a href="{{ route('login') }}" class="px-3 py-2 rounded bg-blue-700 hover:bg-blue-800">Login Admin</a>
            </nav>
        </div>
    </header>

     <main class="container mx-auto py-8 px-4">
        @yield('content') {{-- Ini adalah tempat konten spesifik halaman akan diinjeksikan --}}
    </main>

    <footer class="bg-gray-800 text-white p-6 mt-8">
        <div class="container mx-auto text-center">
            &copy; {{ date('Y') }} {{ config('app.name', 'Nama Perusahaan Anda') }}. All rights reserved.
        </div>
    </footer>

    @yield('scripts')
</body>
</html>