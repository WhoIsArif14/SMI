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
    <header class="text-white shadow-2xl sticky top-0 z-50 backdrop-blur-lg border-b border-navy-700/30" style="background-color: #1e293b;">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                {{-- Logo / Nama Perusahaan --}}
                <a href="{{ route('home') }}" class="group flex items-center transform transition-all duration-300 hover:scale-105">
                    {{-- Logo Image --}}
                    <img src="{{ asset('images/smi.png') }}" 
                         alt="Logo Perusahaan" 
                         class="h-14 w-auto object-contain transition-all duration-300 group-hover:scale-110 group-hover:brightness-110 filter drop-shadow-lg group-hover:drop-shadow-xl">
                </a>

                {{-- Desktop Navigation --}}
                <nav class="hidden lg:flex items-center space-x-2">
                    <a href="{{ route('home') }}" class="group relative px-5 py-3 text-white/90 hover:text-white font-bold text-lg transition-all duration-300 hover:scale-105 tracking-wide">
                        <span class="relative z-10">Beranda</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl opacity-0 group-hover:opacity-100 transition-all duration-300 transform scale-90 group-hover:scale-100 shadow-lg"></div>
                    </a>
                    
                    <a href="{{ route('about-us') }}" class="group relative px-5 py-3 text-white/90 hover:text-white font-bold text-lg transition-all duration-300 hover:scale-105 tracking-wide">
                        <span class="relative z-10">Tentang Kami</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl opacity-0 group-hover:opacity-100 transition-all duration-300 transform scale-90 group-hover:scale-100 shadow-lg"></div>
                    </a>
                    
                    <a href="{{ route('services') }}" class="group relative px-5 py-3 text-white/90 hover:text-white font-bold text-lg transition-all duration-300 hover:scale-105 tracking-wide">
                        <span class="relative z-10">Layanan</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-green-500 to-teal-500 rounded-xl opacity-0 group-hover:opacity-100 transition-all duration-300 transform scale-90 group-hover:scale-100 shadow-lg"></div>
                    </a>
                    
                    <a href="{{ route('news.index') }}" class="group relative px-5 py-3 text-white/90 hover:text-white font-bold text-lg transition-all duration-300 hover:scale-105 tracking-wide">
                        <span class="relative z-10">Berita</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-orange-500 to-red-500 rounded-xl opacity-0 group-hover:opacity-100 transition-all duration-300 transform scale-90 group-hover:scale-100 shadow-lg"></div>
                    </a>
                    
                    <a href="{{ route('experts.index') }}" class="group relative px-5 py-3 text-white/90 hover:text-white font-bold text-lg transition-all duration-300 hover:scale-105 tracking-wide">
                        <span class="relative z-10">Expert Kami</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-xl opacity-0 group-hover:opacity-100 transition-all duration-300 transform scale-90 group-hover:scale-100 shadow-lg"></div>
                    </a>
                    
                    <a href="{{ route('careers.index') }}" class="group relative px-5 py-3 text-white/90 hover:text-white font-bold text-lg transition-all duration-300 hover:scale-105 tracking-wide">
                        <span class="relative z-10">Karir dan Pelatihan</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-pink-500 to-rose-500 rounded-xl opacity-0 group-hover:opacity-100 transition-all duration-300 transform scale-90 group-hover:scale-100 shadow-lg"></div>
                    </a>
                    
                    {{-- <a href="{{ route('login') }}" class="group relative px-6 py-3 ml-4 font-black text-lg bg-gradient-to-r from-yellow-400 to-orange-500 text-blue-900 rounded-2xl hover:from-yellow-300 hover:to-orange-400 transition-all duration-300 transform hover:scale-110 hover:shadow-xl hover:-translate-y-1 tracking-wide">
                        <span class="relative z-10">Login Admin</span>
                        <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-20 rounded-2xl transition-opacity duration-300"></div>
                    </a> --}}
                </nav>

                {{-- Mobile Menu Button --}}
                <button class="lg:hidden p-3 rounded-xl bg-white/10 hover:bg-white/20 backdrop-blur-sm border border-white/20 hover:border-white/30 transition-all duration-300 transform hover:scale-110" onclick="toggleMobileMenu()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            {{-- Mobile Navigation --}}
            <div id="mobile-menu" class="lg:hidden hidden mt-4 pb-4 border-t border-white/20">
                <div class="flex flex-col space-y-2 pt-4">
                    <a href="{{ route('home') }}" class="group flex items-center px-4 py-3 rounded-xl text-white/90 hover:text-white font-bold bg-white/5 hover:bg-white/15 transition-all duration-300 transform hover:scale-105 hover:translate-x-2">
                        <div class="w-2 h-2 bg-cyan-400 rounded-full mr-3 group-hover:bg-cyan-300 transition-colors duration-300"></div>
                        <span>Beranda</span>
                    </a>
                    
                    <a href="{{ route('about-us') }}" class="group flex items-center px-4 py-3 rounded-xl text-white/90 hover:text-white font-bold bg-white/5 hover:bg-white/15 transition-all duration-300 transform hover:scale-105 hover:translate-x-2">
                        <div class="w-2 h-2 bg-purple-400 rounded-full mr-3 group-hover:bg-purple-300 transition-colors duration-300"></div>
                        <span>Tentang Kami</span>
                    </a>
                    
                    <a href="{{ route('services') }}" class="group flex items-center px-4 py-3 rounded-xl text-white/90 hover:text-white font-bold bg-white/5 hover:bg-white/15 transition-all duration-300 transform hover:scale-105 hover:translate-x-2">
                        <div class="w-2 h-2 bg-green-400 rounded-full mr-3 group-hover:bg-green-300 transition-colors duration-300"></div>
                        <span>Layanan</span>
                    </a>
                    
                    <a href="{{ route('news.index') }}" class="group flex items-center px-4 py-3 rounded-xl text-white/90 hover:text-white font-bold bg-white/5 hover:bg-white/15 transition-all duration-300 transform hover:scale-105 hover:translate-x-2">
                        <div class="w-2 h-2 bg-orange-400 rounded-full mr-3 group-hover:bg-orange-300 transition-colors duration-300"></div>
                        <span>Berita</span>
                    </a>
                    
                    <a href="{{ route('experts.index') }}" class="group flex items-center px-4 py-3 rounded-xl text-white/90 hover:text-white font-bold bg-white/5 hover:bg-white/15 transition-all duration-300 transform hover:scale-105 hover:translate-x-2">
                        <div class="w-2 h-2 bg-indigo-400 rounded-full mr-3 group-hover:bg-indigo-300 transition-colors duration-300"></div>
                        <span>Expert Kami</span>
                    </a>
                    
                    <a href="{{ route('careers.index') }}" class="group flex items-center px-4 py-3 rounded-xl text-white/90 hover:text-white font-bold bg-white/5 hover:bg-white/15 transition-all duration-300 transform hover:scale-105 hover:translate-x-2">
                        <div class="w-2 h-2 bg-pink-400 rounded-full mr-3 group-hover:bg-pink-300 transition-colors duration-300"></div>
                        <span>Karir dan Pelatihan</span>
                    </a>

                    <a href="{{ route('contact') }}" class="group flex items-center px-4 py-3 rounded-xl text-white/90 hover:text-white font-bold bg-white/5 hover:bg-white/15 transition-all duration-300 transform hover:scale-105 hover:translate-x-2">
                        <div class="w-2 h-2 bg-pink-400 rounded-full mr-3 group-hover:bg-pink-300 transition-colors duration-300"></div>
                        <span>Kontak Kami</span>
                    </a>
                    
                    <a href="{{ route('login') }}" class="group flex items-center px-4 py-3 mt-2 rounded-xl font-black bg-gradient-to-r from-yellow-400 to-orange-500 text-blue-900 hover:from-yellow-300 hover:to-orange-400 transition-all duration-300 transform hover:scale-105">
                        <span>Login Admin</span>
                    </a>
                </div>
            </div>
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
    
    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const menu = document.getElementById('mobile-menu');
            const button = event.target.closest('button');
            
            if (!menu.contains(event.target) && !button) {
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