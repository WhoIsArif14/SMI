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
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-6">
                {{-- Kolom 1: Informasi Perusahaan --}}
                <div>
                    <h3 class="text-xl font-bold mb-4">{{ config('app.name', 'Selaras Mitra Integra') }}</h3>
                    <p class="text-gray-300 mb-4">Solusi terbaik untuk kebutuhan bisnis Anda dengan layanan profesional dan berkualitas tinggi.</p>
                </div>

                {{-- Kolom 2: Link Cepat --}}
                <div>
                    <h3 class="text-lg font-semibold mb-4">Link Cepat</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-white transition duration-300">Beranda</a></li>
                        <li><a href="{{ route('about-us') }}" class="text-gray-300 hover:text-white transition duration-300">Tentang Kami</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-300 hover:text-white transition duration-300">Layanan</a></li>
                        <li><a href="{{ route('news.index') }}" class="text-gray-300 hover:text-white transition duration-300">Berita</a></li>
                    </ul>
                </div>

                {{-- Kolom 3: Media Sosial --}}
                <div>
                    <h3 class="text-lg font-semibold mb-4">Ikuti Kami</h3>
                    <x-social-media />
                    <div class="mt-4">
                        <p class="text-gray-300 text-sm">Email: {{ config('social.contact.email') }}</p>
                        <p class="text-gray-300 text-sm">Phone: {{ config('social.contact.phone') }}</p>
                    </div>
                </div>
            </div>

            {{-- Copyright --}}
            <div class="border-t border-gray-700 pt-4 text-center">
                <p class="text-gray-300">&copy; {{ date('Y') }} {{ config('app.name', 'Selaras Mitra Integra') }}. All rights reserved.</p>
            </div>
        </div>
    </footer>

    @yield('scripts')
</body>
</html>