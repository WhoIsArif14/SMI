<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name', 'Selaras Mitra Integra'))</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/smi.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/smi.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Your custom CSS here */
        
        /* Enhanced active navbar styling */
        .navbar-active {
            position: relative;
        }
        
        /* Custom CSS ini sudah tidak diperlukan karena background gradient sudah menangani efek aktif */
        /* Namun, jika Anda ingin mempertahankannya untuk efek titik di bawah, pastikan tidak bentrok dengan style text-white */
        .navbar-active::after {
            content: '';
            position: absolute;
            bottom: -8px; /* Disesuaikan agar tidak terlalu jauh */
            left: 50%;
            transform: translateX(-50%);
            width: 8px;
            height: 8px;
            background: linear-gradient(45deg, #06b6d4, #3b82f6);
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(6, 182, 212, 0.5);
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% {
                transform: translateX(-50%) scale(1);
                opacity: 1;
            }
            50% {
                transform: translateX(-50%) scale(1.2);
                opacity: 0.8;
            }
            100% {
                transform: translateX(-50%) scale(1);
                opacity: 1;
            }
        }
        
        /* Enhanced mobile active styling */
        .mobile-active {
            position: relative;
            /* Garis kiri untuk menandai item aktif di menu mobile */
            border-left: 4px solid #3b82f6; /* Warna disesuaikan agar lebih kontras */
        }
        
        .mobile-active::before {
            content: '';
            position: absolute;
            left: -4px;
            top: 0;
            bottom: 0;
            width: 4px;
            background: linear-gradient(to bottom, #06b6d4, #3b82f6);
            animation: slideIn 0.3s ease-out;
        }
        
        @keyframes slideIn {
            from {
                transform: scaleY(0);
            }
            to {
                transform: scaleY(1);
            }
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    {{-- Header & Navigasi Publik --}}
    {{-- PERBAIKAN: Hapus kelas 'text-white' karena background header putih. Biarkan warna teks diatur oleh setiap link. --}}
    <header class="shadow-md sticky top-0 z-50 backdrop-blur-lg border-b border-gray-200/80" style="background-color: #102A71;">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                {{-- Logo / Nama Perusahaan --}}
                <a href="{{ route('home') }}" class="group flex items-center transform transition-all duration-300 hover:scale-105">
                    <img src="{{ asset('images/smi.png') }}" 
                         alt="Logo Perusahaan" 
                         class="h-14 w-auto object-contain transition-all duration-300 group-hover:scale-110 group-hover:brightness-110 filter drop-shadow-lg group-hover:drop-shadow-xl">
                </a>

                {{-- Desktop Navigation (SUDAH BENAR) --}}
                <nav class="hidden lg:flex items-center space-x-2">
                    <a href="{{ route('home') }}" class="group relative px-5 py-3 {{ request()->routeIs('home') ? 'text-white navbar-active' : 'text-white' }} font-bold text-lg transition-all duration-300 hover:scale-105 tracking-wide">
                        <span class="relative z-10">Beranda</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl {{ request()->routeIs('home') ? 'opacity-100' : 'opacity-0' }} group-hover:opacity-100 transition-all duration-300 transform {{ request()->routeIs('home') ? 'scale-100' : 'scale-90' }} group-hover:scale-100 shadow-lg"></div>
                    </a>
                    
                    <a href="{{ route('about-us') }}" class="group relative px-5 py-3 {{ request()->routeIs('about-us') ? 'text-white navbar-active' : 'text-white' }} font-bold text-lg transition-all duration-300 hover:scale-105 tracking-wide">
                        <span class="relative z-10">Tentang Kami</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl {{ request()->routeIs('about-us') ? 'opacity-100' : 'opacity-0' }} group-hover:opacity-100 transition-all duration-300 transform {{ request()->routeIs('about-us') ? 'scale-100' : 'scale-90' }} group-hover:scale-100 shadow-lg"></div>
                    </a>
                    
                    <a href="{{ route('services') }}" class="group relative px-5 py-3 {{ request()->routeIs('services*') ? 'text-blue-800 navbar-active' : 'text-white' }} font-bold text-lg transition-all duration-300 hover:scale-105 tracking-wide">
                        <span class="relative z-10">Layanan</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl {{ request()->routeIs('services*') ? 'opacity-100' : 'opacity-0' }} group-hover:opacity-100 transition-all duration-300 transform {{ request()->routeIs('services*') ? 'scale-100' : 'scale-90' }} group-hover:scale-100 shadow-lg"></div>
                    </a>
                    
                    <a href="{{ route('news.index') }}" class="group relative px-5 py-3 {{ request()->routeIs('news*') ? 'text-blue-800 navbar-active' : 'text-white' }} font-bold text-lg transition-all duration-300 hover:scale-105 tracking-wide">
                        <span class="relative z-10">Berita</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl {{ request()->routeIs('news*') ? 'opacity-100' : 'opacity-0' }} group-hover:opacity-100 transition-all duration-300 transform {{ request()->routeIs('news*') ? 'scale-100' : 'scale-90' }} group-hover:scale-100 shadow-lg"></div>
                    </a>
                    
                    <a href="{{ route('experts.index') }}" class="group relative px-5 py-3 {{ request()->routeIs('experts*') ? 'text-white navbar-active' : 'text-white' }}  font-bold text-lg transition-all duration-300 hover:scale-105 tracking-wide">
                        <span class="relative z-10">Expert Kami</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl {{ request()->routeIs('experts*') ? 'opacity-100' : 'opacity-0' }} group-hover:opacity-100 transition-all duration-300 transform {{ request()->routeIs('experts*') ? 'scale-100' : 'scale-90' }} group-hover:scale-100 shadow-lg"></div>
                    </a>
                    
                    <a href="{{ route('careers.index') }}" class="group relative px-5 py-3 {{ request()->routeIs('careers*') ? 'text-white navbar-active' : 'text-white' }}  font-bold text-lg transition-all duration-300 hover:scale-105 tracking-wide">
                        <span class="relative z-10">Karir dan Pelatihan</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl {{ request()->routeIs('careers*') ? 'opacity-100' : 'opacity-0' }} group-hover:opacity-100 transition-all duration-300 transform {{ request()->routeIs('careers*') ? 'scale-100' : 'scale-90' }} group-hover:scale-100 shadow-lg"></div>
                    </a>

                    <a href="{{ route('contact') }}" class="group relative px-5 py-3 {{ request()->routeIs('contact*') ? 'text-blue-800 navbar-active' : 'text-white' }} font-bold text-lg transition-all duration-300 hover:scale-105 tracking-wide">
                        <span class="relative z-10">Kontak Kami</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl {{ request()->routeIs('contact*') ? 'opacity-100' : 'opacity-0' }} group-hover:opacity-100 transition-all duration-300 transform {{ request()->routeIs('contact*') ? 'scale-100' : 'scale-90' }} group-hover:scale-100 shadow-lg"></div>
                    </a>
                </nav>

                {{-- PERBAIKAN: Tombol Menu Mobile disesuaikan untuk background putih --}}
                <button class="lg:hidden p-2 rounded-lg text-gray-600 bg-gray-100 hover:bg-gray-200 border border-gray-200 transition-all duration-300 transform hover:scale-110" onclick="toggleMobileMenu()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            {{-- PERBAIKAN: Navigasi Mobile disesuaikan untuk background putih --}}
            <div id="mobile-menu" class="lg:hidden hidden mt-4 pb-4 border-t border-gray-200">
                <div class="flex flex-col space-y-1 pt-4">
                    {{-- Ganti kelas warna dari text-white menjadi warna gelap seperti text-gray-700 atau text-blue-700 --}}
                    <a href="{{ route('home') }}" class="group flex items-center px-4 py-3 rounded-lg {{ request()->routeIs('home') ? 'text-blue-700 bg-blue-50 mobile-active' : 'text-gray-600' }} hover:text-blue-700 font-semibold hover:bg-blue-50 transition-all duration-200">
                        <span>Beranda</span>
                    </a>
                    
                    <a href="{{ route('about-us') }}" class="group flex items-center px-4 py-3 rounded-lg {{ request()->routeIs('about-us') ? 'text-blue-700 bg-blue-50 mobile-active' : 'text-gray-600' }} hover:text-blue-700 font-semibold hover:bg-blue-50 transition-all duration-200">
                        <span>Tentang Kami</span>
                    </a>
                    
                    <a href="{{ route('services') }}" class="group flex items-center px-4 py-3 rounded-lg {{ request()->routeIs('services*') ? 'text-blue-700 bg-blue-50 mobile-active' : 'text-gray-600' }} hover:text-blue-700 font-semibold hover:bg-blue-50 transition-all duration-200">
                        <span>Layanan</span>
                    </a>
                    
                    <a href="{{ route('news.index') }}" class="group flex items-center px-4 py-3 rounded-lg {{ request()->routeIs('news*') ? 'text-blue-700 bg-blue-50 mobile-active' : 'text-gray-600' }} hover:text-blue-700 font-semibold hover:bg-blue-50 transition-all duration-200">
                        <span>Berita</span>
                    </a>
                    
                    <a href="{{ route('experts.index') }}" class="group flex items-center px-4 py-3 rounded-lg {{ request()->routeIs('experts*') ? 'text-blue-700 bg-blue-50 mobile-active' : 'text-gray-600' }} hover:text-blue-700 font-semibold hover:bg-blue-50 transition-all duration-200">
                        <span>Expert Kami</span>
                    </a>
                    
                    <a href="{{ route('careers.index') }}" class="group flex items-center px-4 py-3 rounded-lg {{ request()->routeIs('careers*') ? 'text-blue-700 bg-blue-50 mobile-active' : 'text-gray-600' }} hover:text-blue-700 font-semibold hover:bg-blue-50 transition-all duration-200">
                        <span>Karir dan Pelatihan</span>
                    </a>

                    <a href="{{ route('contact') }}" class="group flex items-center px-4 py-3 rounded-lg {{ request()->routeIs('contact*') ? 'text-blue-700 bg-blue-50 mobile-active' : 'text-gray-600' }} hover:text-blue-700 font-semibold hover:bg-blue-50 transition-all duration-200">
                        <span>Kontak Kami</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main class="container mx-auto py-8 px-4 md:px-6 lg:px-8">
        @yield('content')
    </main>

  {{-- UBAH: Hapus font custom, tambahkan 'font-bold' untuk menebalkan semua teks --}}
        <footer class="bg-[#102A71] p-6 mt-0">
            <div class="container mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-6">
            {{-- Kolom 1: Informasi Perusahaan --}}
            <div>
                {{-- 'font-bold' sudah ada, jadi tidak perlu diubah --}}
                <h3 class="text-xl font-bold mb-4 text-white">PT Selaras Mitra Integra</h3>
                {{-- Teks ini akan menjadi bold karena mewarisi dari footer --}}
                <p class="text-white mb-4">Solusi terbaik untuk kebutuhan bisnis Anda dengan layanan profesional dan berkualitas tinggi.</p>
            </div>

            {{-- Kolom 2: Link Cepat --}}
            <div>
                {{-- UBAH: 'font-semibold' diubah menjadi 'font-bold' agar seragam --}}
                <h3 class="text-lg font-bold mb-4 text-white">Link Cepat</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="text-white  transition duration-300">Beranda</a></li>
                    <li><a href="{{ route('about-us') }}" class="text-white  transition duration-300">Tentang Kami</a></li>
                    <li><a href="{{ route('services') }}" class="text-white  transition duration-300">Layanan</a></li>
                    <li><a href="{{ route('experts.index') }}" class="text-white transition duration-300">Expert Kami</a></li>
                    <li><a href="{{ route('careers.index') }}" class="text-white transition duration-300">Karir dan Pelatihan</a></li>
                    <li><a href="{{ route('contact') }}" class="text-white transition duration-300">Kontak Kami</a></li>
                </ul>
            </div>

            {{-- Kolom 3: Media Sosial --}}
            <div>
                 {{-- UBAH: 'font-semibold' diubah menjadi 'font-bold' agar seragam --}}
                <h3 class="text-lg font-bold mb-4 text-white">Ikuti Kami</h3>
                <x-social-media />
                <div class="mt-4">
                     {{-- Teks ini akan menjadi bold karena mewarisi dari footer --}}
                    <p class="text-white text-sm">Email: {{ config('social.contact.email') }}</p>
                    <p class="text-white text-sm">Phone: {{ config('social.contact.phone') }}</p>
                </div>
            </div>
        </div>

        {{-- Copyright --}}
        <div class="border-t border-gray-200 pt-4 text-center">
            {{-- Teks ini akan menjadi bold karena mewarisi dari footer --}}
            <p class="text-white">&copy; {{ date('Y') }} {{ config('app.name', 'Selaras Mitra Integra') }}. All rights reserved.</p>
        </div>
    </div>
</footer>
    @yield('scripts')
    
    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const menu = document.getElementById('mobile-menu');
            // Check if the click is outside the menu and not on the toggle button
            if (!menu.contains(event.target) && !event.target.closest('button[onclick="toggleMobileMenu()"]')) {
                menu.classList.add('hidden');
            }
        });
        
        // Close mobile menu when window is resized to desktop
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 1024) {
                document.getElementById('mobile-menu').classList.add('hidden');
            }
        });
    </script>
</body>
</html>