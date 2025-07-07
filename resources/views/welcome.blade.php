@extends('layouts.frontend')

@section('title', 'Selaras Mitra Integra')

@section('content')
    <div class="py-12 px-4 relative min-h-screen" style="overflow: visible;">
        <!-- Hero Section Background Bubbles -->
        <div class="absolute inset-0 pointer-events-none" style="overflow: hidden;">
            <!-- Large Hero Bubbles -->
            <div class="absolute top-20 left-8 w-40 h-40 bg-gradient-to-br from-blue-200 to-blue-300 rounded-full opacity-15 animate-float-slow"></div>
            <div class="absolute top-40 right-16 w-32 h-32 bg-gradient-to-br from-purple-200 to-purple-300 rounded-full opacity-20 animate-float-slow-delay-1"></div>
            <div class="absolute bottom-32 left-24 w-48 h-48 bg-gradient-to-br from-indigo-200 to-indigo-300 rounded-full opacity-12 animate-float-slow-delay-2"></div>
            <div class="absolute bottom-16 right-8 w-36 h-36 bg-gradient-to-br from-cyan-200 to-cyan-300 rounded-full opacity-18 animate-float-slow-delay-3"></div>
            
            <!-- Medium Hero Bubbles -->
            <div class="absolute top-32 left-1/3 w-24 h-24 bg-gradient-to-br from-yellow-200 to-yellow-300 rounded-full opacity-25 animate-float-medium"></div>
            <div class="absolute top-56 right-1/3 w-28 h-28 bg-gradient-to-br from-pink-200 to-pink-300 rounded-full opacity-22 animate-float-medium-delay-1"></div>
            <div class="absolute bottom-56 left-1/4 w-20 h-20 bg-gradient-to-br from-green-200 to-green-300 rounded-full opacity-30 animate-float-medium-delay-2"></div>
            <div class="absolute bottom-40 right-1/4 w-26 h-26 bg-gradient-to-br from-orange-200 to-orange-300 rounded-full opacity-28 animate-float-medium-delay-3"></div>
            
            <!-- Small Hero Bubbles -->
            <div class="absolute top-16 left-2/3 w-12 h-12 bg-gradient-to-br from-blue-300 to-blue-400 rounded-full opacity-35 animate-bounce-slow"></div>
            <div class="absolute top-48 right-2/3 w-16 h-16 bg-gradient-to-br from-purple-300 to-purple-400 rounded-full opacity-32 animate-bounce-slow-delay-1"></div>
            <div class="absolute bottom-48 left-3/4 w-10 h-10 bg-gradient-to-br from-indigo-300 to-indigo-400 rounded-full opacity-40 animate-bounce-slow-delay-2"></div>
            <div class="absolute bottom-24 right-3/4 w-18 h-18 bg-gradient-to-br from-cyan-300 to-cyan-400 rounded-full opacity-33 animate-bounce-slow-delay-3"></div>
            
            <!-- Hero Decorative Shapes -->
            <div class="absolute top-12 left-1/2 w-8 h-8 bg-gradient-to-br from-yellow-300 to-yellow-400 transform rotate-45 opacity-35 animate-spin-slow"></div>
            <div class="absolute top-64 right-1/2 w-12 h-12 bg-gradient-to-br from-pink-300 to-pink-400 transform rotate-45 opacity-30 animate-spin-slow-reverse"></div>
            <div class="absolute bottom-64 left-1/2 w-6 h-6 bg-gradient-to-br from-green-300 to-green-400 transform rotate-45 opacity-40 animate-spin-slow-delay-1"></div>
            <div class="absolute bottom-12 right-1/2 w-14 h-14 bg-gradient-to-br from-orange-300 to-orange-400 transform rotate-45 opacity-28 animate-spin-slow-reverse-delay-1"></div>
            
            <!-- Additional Floating Elements -->
            <div class="absolute top-24 left-1/6 w-7 h-7 bg-gradient-to-br from-blue-400 to-blue-500 rounded-full opacity-45 animate-pulse-slow"></div>
            <div class="absolute top-72 right-1/6 w-9 h-9 bg-gradient-to-br from-purple-400 to-purple-500 rounded-full opacity-38 animate-pulse-slow-delay-1"></div>
            <div class="absolute bottom-72 left-5/6 w-5 h-5 bg-gradient-to-br from-indigo-400 to-indigo-500 rounded-full opacity-50 animate-pulse-slow-delay-2"></div>
            <div class="absolute bottom-24 right-5/6 w-11 h-11 bg-gradient-to-br from-cyan-400 to-cyan-500 rounded-full opacity-42 animate-pulse-slow-delay-3"></div>
            
            <!-- Geometric Accent Shapes -->
            <div class="absolute top-36 left-1/5 w-4 h-4 bg-gradient-to-br from-yellow-400 to-yellow-500 transform rotate-45 opacity-48 animate-wiggle"></div>
            <div class="absolute top-60 right-1/5 w-6 h-6 bg-gradient-to-br from-pink-400 to-pink-500 transform rotate-45 opacity-42 animate-wiggle-delay-1"></div>
            <div class="absolute bottom-60 left-4/5 w-3 h-3 bg-gradient-to-br from-green-400 to-green-500 transform rotate-45 opacity-55 animate-wiggle-delay-2"></div>
            <div class="absolute bottom-36 right-4/5 w-8 h-8 bg-gradient-to-br from-orange-400 to-orange-500 transform rotate-45 opacity-45 animate-wiggle-delay-3"></div>
        </div>
        
        {{-- Container dengan padding yang cukup untuk mencegah button terpotong --}}
        <div class="container mx-auto max-w-7xl">
            {{-- Menggunakan flexbox untuk layout responsif: kolom di mobile, baris di desktop --}}
            <div class="flex flex-col md:flex-row items-center justify-center gap-8 relative z-10">
                {{-- Bagian Teks Selamat Datang --}}
                <div class="md:w-1/2 text-center md:text-left px-4">
                    <h1 class="text-4xl md:text-6xl font-extrabold bg-gradient-to-r from-blue-600 via-blue-800 to-indigo-900 bg-clip-text text-transparent mb-6 leading-tight tracking-tight animate-fade-in">
                        <span class="block font-black text-5xl md:text-7xl">Selamat Datang</span>
                        <span class="block text-3xl md:text-5xl font-light mt-2 text-gray-700">di Website Profil</span>
                        <span class="block text-3xl md:text-5xl font-bold bg-gradient-to-r from-yellow-500 to-orange-600 bg-clip-text text-transparent">Perusahaan Kami</span>
                    </h1>
                    <p class="text-xl md:text-2xl text-gray-600 mb-10 font-light leading-relaxed tracking-wide max-w-2xl">
                        Kami menyediakan <span class="font-semibold text-blue-700">solusi inovatif</span> untuk kebutuhan bisnis Anda.
                    </p>
                    <div class="mb-8 btn-container flex justify-center">
                        <a href="{{ route('news.index') }}"
                            class="group btn-news bg-blue-600 hover:bg-blue-700 text-white shadow-lg transition-all duration-500 ease-in-out transform hover:scale-110 hover:shadow-2xl animate-pulse hover:animate-none whitespace-nowrap">
                            <span class="relative font-bold tracking-wider">
                                Lihat Berita Terbaru
                                <span class="absolute inset-0 bg-gradient-to-r from-transparent via-white to-transparent opacity-0 group-hover:opacity-30 group-hover:animate-shimmer transform -skew-x-12"></span>
                            </span>
                        </a>
                    </div>
                </div>
                {{-- Bagian Video Lokal --}}
                <div class="md:w-1/2 flex justify-center px-4">
                    <video controls autoplay muted loop class="rounded-lg shadow-xl w-full max-w-lg md:max-w-none">
                        <source src="{{ asset('videos/acol.mp4') }}" type="video/mp4">
                        {{-- Anda bisa menambahkan source lain untuk format video berbeda jika diperlukan --}}
                        {{-- <source src="{{ asset('videos/video_profil.webm') }}" type="video/webm"> --}}
                        Browser Anda tidak mendukung tag video.
                    </video>
                </div>
                {{-- Akhir Bagian Video Lokal --}}
            </div>
        </div>
    </div>

    {{-- Bagian "Tentang Kami" --}}
    <section class="py-12 bg-white rounded-lg shadow-md mt-8 px-4 relative overflow-hidden">
        <!-- Floating Bubbles Background -->
        <div class="absolute inset-0 pointer-events-none">
            <!-- Large Bubbles -->
            <div class="absolute top-10 left-10 w-32 h-32 bg-gradient-to-br from-blue-200 to-blue-300 rounded-full opacity-20 animate-float"></div>
            <div class="absolute top-32 right-20 w-24 h-24 bg-gradient-to-br from-purple-200 to-purple-300 rounded-full opacity-25 animate-float-delay-1"></div>
            <div class="absolute bottom-20 left-32 w-40 h-40 bg-gradient-to-br from-indigo-200 to-indigo-300 rounded-full opacity-15 animate-float-delay-2"></div>
            <div class="absolute bottom-32 right-10 w-28 h-28 bg-gradient-to-br from-cyan-200 to-cyan-300 rounded-full opacity-20 animate-float-delay-3"></div>
            
            <!-- Medium Bubbles -->
            <div class="absolute top-24 left-1/3 w-16 h-16 bg-gradient-to-br from-yellow-200 to-yellow-300 rounded-full opacity-30 animate-float-reverse"></div>
            <div class="absolute top-48 right-1/3 w-20 h-20 bg-gradient-to-br from-pink-200 to-pink-300 rounded-full opacity-25 animate-float-reverse-delay-1"></div>
            <div class="absolute bottom-48 left-1/4 w-14 h-14 bg-gradient-to-br from-green-200 to-green-300 rounded-full opacity-35 animate-float-reverse-delay-2"></div>
            <div class="absolute bottom-24 right-1/4 w-18 h-18 bg-gradient-to-br from-orange-200 to-orange-300 rounded-full opacity-30 animate-float-reverse-delay-3"></div>
            
            <!-- Small Bubbles -->
            <div class="absolute top-16 left-2/3 w-8 h-8 bg-gradient-to-br from-blue-300 to-blue-400 rounded-full opacity-40 animate-bounce-slow"></div>
            <div class="absolute top-40 right-2/3 w-10 h-10 bg-gradient-to-br from-purple-300 to-purple-400 rounded-full opacity-35 animate-bounce-slow-delay-1"></div>
            <div class="absolute bottom-40 left-3/4 w-6 h-6 bg-gradient-to-br from-indigo-300 to-indigo-400 rounded-full opacity-45 animate-bounce-slow-delay-2"></div>
            <div class="absolute bottom-16 right-3/4 w-12 h-12 bg-gradient-to-br from-cyan-300 to-cyan-400 rounded-full opacity-35 animate-bounce-slow-delay-3"></div>
            
            <!-- Decorative Shapes -->
            <div class="absolute top-8 left-1/2 w-6 h-6 bg-gradient-to-br from-yellow-300 to-yellow-400 transform rotate-45 opacity-40 animate-spin-slow"></div>
            <div class="absolute top-56 right-1/2 w-8 h-8 bg-gradient-to-br from-pink-300 to-pink-400 transform rotate-45 opacity-35 animate-spin-slow-reverse"></div>
            <div class="absolute bottom-56 left-1/2 w-4 h-4 bg-gradient-to-br from-green-300 to-green-400 transform rotate-45 opacity-45 animate-spin-slow-delay-1"></div>
            <div class="absolute bottom-8 right-1/2 w-10 h-10 bg-gradient-to-br from-orange-300 to-orange-400 transform rotate-45 opacity-30 animate-spin-slow-reverse-delay-1"></div>
        </div>
        
        <div class="relative z-10">
            <h2 class="text-4xl md:text-5xl font-black text-center bg-gradient-to-r from-blue-800 via-blue-600 to-indigo-700 bg-clip-text text-transparent mb-8 tracking-tight">Tentang Kami</h2>
        <p class="text-gray-700 text-xl md:text-2xl text-center leading-relaxed max-w-4xl mx-auto font-light tracking-wide">
            <span class="font-semibold text-blue-800">PT Selaras Mitra Integra</span> telah berpengalaman lebih dari <span class="font-bold text-yellow-600">10 tahun</span> di bidang Human Resource Consultant. Lebih
            dari <span class="font-bold text-blue-700">100 perusahaan</span> di berbagai bidang telah menggunakan layanan kami. Kami mengucapkan terima kasih atas
            kepercayaan yang diberikan kepada PT Selaras Mitra Integra untuk terus melayani Anda sebagai mitra kami.
            Kami berkomitmen untuk memberikan <span class="font-semibold text-green-600">pelayanan terbaik</span> untuk Anda.
            <br><br>
            Untuk Anda yang belum bermitra bersama kami, kami siap menunggu kabar dari Anda.
        </p>
        <div class="text-center mt-10 relative z-10">
            <a href="{{ route('about-us') }}" class="group inline-flex items-center px-8 py-4 text-lg font-bold text-blue-600 bg-blue-50 border-2 border-blue-200 rounded-2xl hover:bg-blue-100 hover:border-blue-300 hover:text-blue-700 transition-all duration-500 ease-in-out transform hover:scale-105 hover:shadow-xl hover:-translate-y-1 hover:rotate-1">
                <span class="mr-3 transform transition-transform duration-300 group-hover:scale-110 tracking-wide">Baca Selengkapnya Tentang Kami</span>
                <svg class="w-6 h-6 transition-all duration-500 group-hover:translate-x-2 group-hover:rotate-12 group-hover:scale-125" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
            </a>
        </div>
        </div>
    </section>

    {{-- Bagian "Klien Kami" --}}
    <section class="py-12 mt-8 px-4 relative overflow-hidden">
        <!-- Floating Bubbles Background for Klien Section -->
        <div class="absolute inset-0 pointer-events-none">
            <!-- Large Decorative Bubbles -->
            <div class="absolute top-5 left-5 w-24 h-24 bg-gradient-to-br from-blue-100 to-blue-200 rounded-full opacity-30 animate-float-slow"></div>
            <div class="absolute top-20 right-12 w-32 h-32 bg-gradient-to-br from-purple-100 to-purple-200 rounded-full opacity-25 animate-float-slow-delay-1"></div>
            <div class="absolute bottom-12 left-20 w-28 h-28 bg-gradient-to-br from-indigo-100 to-indigo-200 rounded-full opacity-35 animate-float-slow-delay-2"></div>
            <div class="absolute bottom-5 right-5 w-36 h-36 bg-gradient-to-br from-cyan-100 to-cyan-200 rounded-full opacity-20 animate-float-slow-delay-3"></div>
            
            <!-- Medium Floating Elements -->
            <div class="absolute top-32 left-1/4 w-16 h-16 bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-full opacity-40 animate-float-medium"></div>
            <div class="absolute top-48 right-1/4 w-20 h-20 bg-gradient-to-br from-pink-100 to-pink-200 rounded-full opacity-35 animate-float-medium-delay-1"></div>
            <div class="absolute bottom-32 left-3/4 w-18 h-18 bg-gradient-to-br from-green-100 to-green-200 rounded-full opacity-45 animate-float-medium-delay-2"></div>
            <div class="absolute bottom-48 right-3/4 w-14 h-14 bg-gradient-to-br from-orange-100 to-orange-200 rounded-full opacity-40 animate-float-medium-delay-3"></div>
            
            <!-- Small Decorative Dots -->
            <div class="absolute top-12 left-1/3 w-6 h-6 bg-gradient-to-br from-blue-200 to-blue-300 rounded-full opacity-50 animate-pulse-slow"></div>
            <div class="absolute top-24 right-1/3 w-8 h-8 bg-gradient-to-br from-purple-200 to-purple-300 rounded-full opacity-45 animate-pulse-slow-delay-1"></div>
            <div class="absolute bottom-24 left-2/3 w-4 h-4 bg-gradient-to-br from-indigo-200 to-indigo-300 rounded-full opacity-55 animate-pulse-slow-delay-2"></div>
            <div class="absolute bottom-12 right-2/3 w-10 h-10 bg-gradient-to-br from-cyan-200 to-cyan-300 rounded-full opacity-40 animate-pulse-slow-delay-3"></div>
            
            <!-- Geometric Shapes -->
            <div class="absolute top-16 left-1/2 w-5 h-5 bg-gradient-to-br from-yellow-200 to-yellow-300 transform rotate-45 opacity-45 animate-wiggle"></div>
            <div class="absolute top-40 right-1/2 w-7 h-7 bg-gradient-to-br from-pink-200 to-pink-300 transform rotate-45 opacity-40 animate-wiggle-delay-1"></div>
            <div class="absolute bottom-40 left-1/2 w-3 h-3 bg-gradient-to-br from-green-200 to-green-300 transform rotate-45 opacity-50 animate-wiggle-delay-2"></div>
            <div class="absolute bottom-16 right-1/2 w-9 h-9 bg-gradient-to-br from-orange-200 to-orange-300 transform rotate-45 opacity-35 animate-wiggle-delay-3"></div>
        </div>
        
        <div class="relative z-10">
            <h2 class="text-4xl md:text-5xl font-black text-center bg-gradient-to-r from-blue-800 via-purple-600 to-indigo-700 bg-clip-text text-transparent mb-10 tracking-tight">Klien Kami</h2>
        @if ($clients->isNotEmpty())
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 justify-items-center">
                @foreach ($clients as $client)
                    <div
                        class="group flex flex-col items-center p-4 bg-white rounded-lg shadow-md hover:shadow-2xl transition-all duration-500 ease-in-out transform hover:scale-105 hover:-translate-y-2 hover:rotate-1 cursor-pointer">
                        @if ($client->logo)
                            <img src="{{ asset('storage/' . $client->logo) }}" alt="{{ $client->name }}"
                                class="h-24 object-contain mb-2 filter grayscale hover:grayscale-0 transition-all duration-500 transform group-hover:scale-110 group-hover:rotate-3">
                        @else
                            <div
                                class="h-24 flex items-center justify-center text-gray-500 text-center border rounded-md p-2 w-full transition-all duration-500 group-hover:border-blue-300 group-hover:bg-blue-50 group-hover:text-blue-600">
                                Tidak Ada Logo</div>
                        @endif
                        <p class="text-xl font-bold text-gray-800 text-center mt-3 transition-all duration-300 group-hover:text-blue-600 group-hover:scale-105 tracking-wide">{{ $client->name }}</p>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center text-gray-500 relative z-10">Belum ada klien yang ditambahkan.</p>
        @endif
        </div>
    </section>

    <section class="bg-blue-700 text-white py-16 px-4">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl md:text-6xl font-black mb-16 bg-gradient-to-r from-white via-yellow-200 to-yellow-400 bg-clip-text text-transparent tracking-tight leading-tight">Mengapa memilih kami?</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 justify-items-center">

                <div class="relative w-40 h-40 transform rotate-45 flex items-center justify-center bg-blue-900 shadow-xl rounded-lg transition-all duration-500 hover:scale-110 hover:shadow-2xl hover:rotate-[50deg] cursor-pointer group">
                    <div class="absolute w-full h-full transform -rotate-45 flex items-center justify-center p-4 transition-transform duration-300 group-hover:scale-105">
                        <span class="text-center font-bold text-lg tracking-wide">Kept Confidential</span>
                    </div>
                </div>

                <div class="relative w-40 h-40 transform rotate-45 flex items-center justify-center bg-yellow-500 shadow-xl rounded-lg transition-all duration-500 hover:scale-110 hover:shadow-2xl hover:rotate-[50deg] cursor-pointer group">
                    <div class="absolute w-full h-full transform -rotate-45 flex items-center justify-center p-4 transition-transform duration-300 group-hover:scale-105">
                        <span class="text-center font-bold text-lg tracking-wide">Monitoring Proses</span>
                    </div>
                </div>

                <div class="relative w-40 h-40 transform rotate-45 flex items-center justify-center bg-white text-blue-800 shadow-xl rounded-lg transition-all duration-500 hover:scale-110 hover:shadow-2xl hover:rotate-[50deg] cursor-pointer group">
                    <div class="absolute w-full h-full transform -rotate-45 flex items-center justify-center p-4 transition-transform duration-300 group-hover:scale-105">
                        <span class="text-center font-bold text-lg tracking-wide">Simple</span>
                    </div>
                </div>

                <div class="relative w-40 h-40 transform rotate-45 flex items-center justify-center bg-blue-900 shadow-xl rounded-lg transition-all duration-500 hover:scale-110 hover:shadow-2xl hover:rotate-[50deg] cursor-pointer group">
                    <div class="absolute w-full h-full transform -rotate-45 flex items-center justify-center p-4 transition-transform duration-300 group-hover:scale-105">
                        <span class="text-center font-bold text-lg tracking-wide">Unlimited Participant</span>
                    </div>
                </div>

                <div class="relative w-40 h-40 transform rotate-45 flex items-center justify-center bg-white text-blue-800 shadow-xl rounded-lg transition-all duration-500 hover:scale-110 hover:shadow-2xl hover:rotate-[50deg] cursor-pointer group">
                    <div class="absolute w-full h-full transform -rotate-45 flex items-center justify-center p-4 transition-transform duration-300 group-hover:scale-105">
                        <span class="text-center font-bold text-lg tracking-wide">Fleksibel</span>
                    </div>
                </div>

                <div class="relative w-40 h-40 transform rotate-45 flex items-center justify-center bg-blue-900 shadow-xl rounded-lg transition-all duration-500 hover:scale-110 hover:shadow-2xl hover:rotate-[50deg] cursor-pointer group">
                    <div class="absolute w-full h-full transform -rotate-45 flex items-center justify-center p-4 transition-transform duration-300 group-hover:scale-105">
                        <span class="text-center font-bold text-lg tracking-wide">Hasil Terverifikasi</span>
                    </div>
                </div>

                <div class="relative w-40 h-40 transform rotate-45 flex items-center justify-center bg-yellow-500 shadow-xl rounded-lg transition-all duration-500 hover:scale-110 hover:shadow-2xl hover:rotate-[50deg] cursor-pointer group">
                    <div class="absolute w-full h-full transform -rotate-45 flex items-center justify-center p-4 transition-transform duration-300 group-hover:scale-105">
                        <span class="text-center font-bold text-lg tracking-wide">Customize</span>
                    </div>
                </div>

                <div class="relative w-40 h-40 transform rotate-45 flex items-center justify-center bg-white text-blue-800 shadow-xl rounded-lg transition-all duration-500 hover:scale-110 hover:shadow-2xl hover:rotate-[50deg] cursor-pointer group">
                    <div class="absolute w-full h-full transform -rotate-45 flex items-center justify-center p-4 transition-transform duration-300 group-hover:scale-105">
                        <span class="text-center font-bold text-lg tracking-wide">Tools Up to Date</span>
                    </div>
                </div>
            </div>

            <div class="mt-16">
                <a href="{{ route('contact') }}" class="group relative inline-block bg-yellow-500 text-blue-900 px-12 py-5 rounded-full text-2xl font-black hover:bg-yellow-400 transition-all duration-500 shadow-lg transform hover:scale-110 hover:shadow-2xl hover:-translate-y-2 animate-bounce hover:animate-none overflow-hidden tracking-wider">
                    <span class="relative z-10">KONSULTASI SEKARANG</span>
                    <span class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-yellow-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></span>
                    <span class="absolute inset-0 bg-white opacity-0 group-hover:opacity-20 transition-opacity duration-300"></span>
                </a>
                <p class="mt-6">
                    <a href="{{ route('services') }}" class="group inline-flex items-center px-6 py-3 text-base font-bold text-white bg-blue-600 bg-opacity-20 rounded-xl border border-white border-opacity-30 hover:bg-opacity-40 hover:border-opacity-60 transition-all duration-500 ease-in-out transform hover:scale-110 hover:shadow-xl backdrop-blur-sm hover:-translate-y-1 hover:rotate-1 tracking-wide">
                        <svg class="w-5 h-5 mr-3 transition-all duration-500 group-hover:-translate-x-1 group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        <span class="transition-transform duration-300 group-hover:scale-105">Kembali ke menu layanan</span>
                    </a>
                </p>
            </div>
        </div>
@endsection

<style>
/* Floating Animation Keyframes */
@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(180deg); }
}

@keyframes float-reverse {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(20px) rotate(-180deg); }
}

@keyframes float-slow {
    0%, 100% { transform: translateY(0px) scale(1); }
    50% { transform: translateY(-15px) scale(1.1); }
}

@keyframes float-medium {
    0%, 100% { transform: translateY(0px) translateX(0px); }
    25% { transform: translateY(-10px) translateX(5px); }
    75% { transform: translateY(10px) translateX(-5px); }
}

@keyframes bounce-slow {
    0%, 100% { transform: translateY(0px) scale(1); }
    50% { transform: translateY(-25px) scale(1.2); }
}

@keyframes pulse-slow {
    0%, 100% { opacity: 0.3; transform: scale(1); }
    50% { opacity: 0.7; transform: scale(1.3); }
}

@keyframes spin-slow {
    0% { transform: rotate(0deg) scale(1); }
    100% { transform: rotate(360deg) scale(1.1); }
}

@keyframes spin-slow-reverse {
    0% { transform: rotate(0deg) scale(1); }
    100% { transform: rotate(-360deg) scale(1.1); }
}

@keyframes wiggle {
    0%, 100% { transform: rotate(45deg) translateX(0px); }
    25% { transform: rotate(50deg) translateX(2px); }
    75% { transform: rotate(40deg) translateX(-2px); }
}

/* Animation Classes */
.animate-float {
    animation: float 6s ease-in-out infinite;
}

.animate-float-delay-1 {
    animation: float 6s ease-in-out infinite;
    animation-delay: 1s;
}

.animate-float-delay-2 {
    animation: float 6s ease-in-out infinite;
    animation-delay: 2s;
}

.animate-float-delay-3 {
    animation: float 6s ease-in-out infinite;
    animation-delay: 3s;
}

.animate-float-reverse {
    animation: float-reverse 8s ease-in-out infinite;
}

.animate-float-reverse-delay-1 {
    animation: float-reverse 8s ease-in-out infinite;
    animation-delay: 1.5s;
}

.animate-float-reverse-delay-2 {
    animation: float-reverse 8s ease-in-out infinite;
    animation-delay: 3s;
}

.animate-float-reverse-delay-3 {
    animation: float-reverse 8s ease-in-out infinite;
    animation-delay: 4.5s;
}

.animate-float-slow {
    animation: float-slow 10s ease-in-out infinite;
}

.animate-float-slow-delay-1 {
    animation: float-slow 10s ease-in-out infinite;
    animation-delay: 2s;
}

.animate-float-slow-delay-2 {
    animation: float-slow 10s ease-in-out infinite;
    animation-delay: 4s;
}

.animate-float-slow-delay-3 {
    animation: float-slow 10s ease-in-out infinite;
    animation-delay: 6s;
}

.animate-float-medium {
    animation: float-medium 7s ease-in-out infinite;
}

.animate-float-medium-delay-1 {
    animation: float-medium 7s ease-in-out infinite;
    animation-delay: 1s;
}

.animate-float-medium-delay-2 {
    animation: float-medium 7s ease-in-out infinite;
    animation-delay: 2s;
}

.animate-float-medium-delay-3 {
    animation: float-medium 7s ease-in-out infinite;
    animation-delay: 3s;
}

.animate-bounce-slow {
    animation: bounce-slow 4s ease-in-out infinite;
}

.animate-bounce-slow-delay-1 {
    animation: bounce-slow 4s ease-in-out infinite;
    animation-delay: 0.5s;
}

.animate-bounce-slow-delay-2 {
    animation: bounce-slow 4s ease-in-out infinite;
    animation-delay: 1s;
}

.animate-bounce-slow-delay-3 {
    animation: bounce-slow 4s ease-in-out infinite;
    animation-delay: 1.5s;
}

.animate-pulse-slow {
    animation: pulse-slow 5s ease-in-out infinite;
}

.animate-pulse-slow-delay-1 {
    animation: pulse-slow 5s ease-in-out infinite;
    animation-delay: 1s;
}

.animate-pulse-slow-delay-2 {
    animation: pulse-slow 5s ease-in-out infinite;
    animation-delay: 2s;
}

.animate-pulse-slow-delay-3 {
    animation: pulse-slow 5s ease-in-out infinite;
    animation-delay: 3s;
}

.animate-spin-slow {
    animation: spin-slow 12s linear infinite;
}

.animate-spin-slow-reverse {
    animation: spin-slow-reverse 12s linear infinite;
}

.animate-spin-slow-delay-1 {
    animation: spin-slow 12s linear infinite;
    animation-delay: 2s;
}

.animate-spin-slow-reverse-delay-1 {
    animation: spin-slow-reverse 12s linear infinite;
    animation-delay: 4s;
}

.animate-wiggle {
    animation: wiggle 3s ease-in-out infinite;
}

.animate-wiggle-delay-1 {
    animation: wiggle 3s ease-in-out infinite;
    animation-delay: 0.5s;
}

.animate-wiggle-delay-2 {
    animation: wiggle 3s ease-in-out infinite;
    animation-delay: 1s;
}

.animate-wiggle-delay-3 {
    animation: wiggle 3s ease-in-out infinite;
    animation-delay: 1.5s;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .animate-float, .animate-float-reverse, .animate-float-slow, .animate-float-medium {
        animation-duration: 4s;
    }
    
    .animate-bounce-slow, .animate-pulse-slow {
        animation-duration: 3s;
    }
}

/* Button responsive styling */
.btn-news {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 1rem 2rem;
    border-radius: 9999px;
    font-weight: 700;
    transition: all 0.3s ease;
    min-width: max-content;
    position: relative;
    overflow: hidden;
    z-index: 10;
}

@media (max-width: 640px) {
    .btn-news {
        padding: 0.875rem 1.5rem;
        font-size: 0.875rem;
    }
}

@media (min-width: 641px) and (max-width: 1024px) {
    .btn-news {
        padding: 1rem 1.75rem;
        font-size: 1rem;
    }
}

@media (min-width: 1025px) {
    .btn-news {
        padding: 1rem 2rem;
        font-size: 1.125rem;
    }
}

/* Ensure button container doesn't clip */
.btn-container {
    overflow: visible;
    position: relative;
    z-index: 20;
}

/* Shimmer effect */
@keyframes shimmer {
    0% {
        transform: translateX(-100%) skewX(-12deg);
    }
    100% {
        transform: translateX(200%) skewX(-12deg);
    }
}

.group-hover\:animate-shimmer:hover {
    animation: shimmer 1s ease-in-out;
}
</style>
