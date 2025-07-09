@extends('layouts.frontend')

@section('title', 'Selaras Mitra Integra')

@section('content')
    <div class="py-12 px-4 relative min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50" style="overflow: visible;">
        <!-- Professional Background Pattern -->
        <div class="absolute inset-0 pointer-events-none" style="overflow: hidden;">
            <!-- Grid Pattern -->
            <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
            
            <!-- Geometric Professional Elements -->
            <div class="absolute top-20 left-10 w-32 h-32 border-2 border-blue-200 opacity-20 transform rotate-12 animate-float-professional"></div>
            <div class="absolute top-40 right-20 w-24 h-24 border border-slate-300 opacity-15 transform rotate-45 animate-drift-slow"></div>
            <div class="absolute bottom-32 left-32 w-40 h-40 border-2 border-indigo-200 opacity-10 transform -rotate-12 animate-float-professional-delay"></div>
            <div class="absolute bottom-20 right-16 w-28 h-28 border border-blue-300 opacity-20 transform rotate-45 animate-drift-slow-delay"></div>
            
            <!-- Subtle Accent Lines -->
            <div class="absolute top-32 left-1/4 w-16 h-0.5 bg-gradient-to-r from-blue-300 to-transparent opacity-30 transform rotate-45 animate-pulse-professional"></div>
            <div class="absolute top-60 right-1/3 w-20 h-0.5 bg-gradient-to-r from-slate-400 to-transparent opacity-25 transform -rotate-45 animate-pulse-professional-delay"></div>
            <div class="absolute bottom-60 left-1/3 w-24 h-0.5 bg-gradient-to-r from-indigo-300 to-transparent opacity-20 transform rotate-12 animate-pulse-professional-delay-2"></div>
            <div class="absolute bottom-40 right-1/4 w-18 h-0.5 bg-gradient-to-r from-blue-400 to-transparent opacity-30 transform -rotate-12 animate-pulse-professional-delay-3"></div>
            
            <!-- Corporate Hexagons -->
            <div class="absolute top-16 left-1/2 w-12 h-12 border border-blue-200 opacity-25 transform rotate-30 animate-rotate-professional" style="clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%)"></div>
            <div class="absolute top-48 right-1/2 w-16 h-16 border border-slate-300 opacity-20 transform -rotate-30 animate-rotate-professional-reverse" style="clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%)"></div>
            <div class="absolute bottom-48 left-1/2 w-10 h-10 border border-indigo-200 opacity-30 transform rotate-45 animate-rotate-professional-delay" style="clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%)"></div>
            <div class="absolute bottom-16 right-1/2 w-14 h-14 border border-blue-300 opacity-15 transform -rotate-45 animate-rotate-professional-reverse-delay" style="clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%)"></div>
            
            <!-- Minimalist Dots -->
            <div class="absolute top-24 left-1/5 w-2 h-2 bg-blue-400 rounded-full opacity-40 animate-fade-professional"></div>
            <div class="absolute top-56 right-1/5 w-3 h-3 bg-slate-400 rounded-full opacity-35 animate-fade-professional-delay"></div>
            <div class="absolute bottom-56 left-4/5 w-1.5 h-1.5 bg-indigo-400 rounded-full opacity-45 animate-fade-professional-delay-2"></div>
            <div class="absolute bottom-24 right-4/5 w-2.5 h-2.5 bg-blue-500 rounded-full opacity-30 animate-fade-professional-delay-3"></div>
            
            <!-- Professional Corner Elements -->
            <div class="absolute top-0 left-0 w-20 h-20 border-l-2 border-t-2 border-blue-200 opacity-20"></div>
            <div class="absolute top-0 right-0 w-20 h-20 border-r-2 border-t-2 border-slate-300 opacity-15"></div>
            <div class="absolute bottom-0 left-0 w-20 h-20 border-l-2 border-b-2 border-indigo-200 opacity-20"></div>
            <div class="absolute bottom-0 right-0 w-20 h-20 border-r-2 border-b-2 border-blue-300 opacity-15"></div>
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
                            class="group btn-news bg-blue-600 hover:bg-blue-700 text-white shadow-lg transition-all duration-500 ease-in-out transform hover:scale-110 hover:shadow-2xl animate-pulse whitespace-nowrap">
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
                        <source src="{{ asset('videos/Compro_Selaras.mp4') }}" type="video/mp4">
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
        <!-- Professional About Background -->
        <div class="absolute inset-0 pointer-events-none">
            <!-- Subtle Corporate Grid -->
            <div class="absolute inset-0 bg-grid-small opacity-3"></div>
            
            <!-- Professional Geometric Elements -->
            <div class="absolute top-10 left-16 w-20 h-20 border border-blue-100 opacity-30 transform rotate-45 animate-drift-gentle"></div>
            <div class="absolute top-32 right-24 w-16 h-16 border border-slate-200 opacity-25 transform -rotate-45 animate-drift-gentle-delay"></div>
            <div class="absolute bottom-20 left-32 w-24 h-24 border border-indigo-100 opacity-20 transform rotate-12 animate-drift-gentle-delay-2"></div>
            <div class="absolute bottom-32 right-16 w-18 h-18 border border-blue-200 opacity-35 transform -rotate-12 animate-drift-gentle-delay-3"></div>
            
            <!-- Minimal Accent Lines -->
            <div class="absolute top-24 left-1/4 w-12 h-0.5 bg-gradient-to-r from-blue-200 to-transparent opacity-40 animate-fade-in-out"></div>
            <div class="absolute top-48 right-1/3 w-16 h-0.5 bg-gradient-to-r from-slate-300 to-transparent opacity-30 animate-fade-in-out-delay"></div>
            <div class="absolute bottom-48 left-1/3 w-14 h-0.5 bg-gradient-to-r from-indigo-200 to-transparent opacity-35 animate-fade-in-out-delay-2"></div>
            <div class="absolute bottom-24 right-1/4 w-10 h-0.5 bg-gradient-to-r from-blue-300 to-transparent opacity-25 animate-fade-in-out-delay-3"></div>
            
            <!-- Corporate Corner Elements -->
            <div class="absolute top-0 left-0 w-12 h-12 border-l border-t border-blue-100 opacity-40"></div>
            <div class="absolute top-0 right-0 w-12 h-12 border-r border-t border-slate-200 opacity-30"></div>
            <div class="absolute bottom-0 left-0 w-12 h-12 border-l border-b border-indigo-100 opacity-40"></div>
            <div class="absolute bottom-0 right-0 w-12 h-12 border-r border-b border-blue-200 opacity-30"></div>
            
            <!-- Subtle Professional Dots -->
            <div class="absolute top-16 left-1/2 w-1 h-1 bg-blue-300 rounded-full opacity-50 animate-pulse-gentle"></div>
            <div class="absolute top-40 right-1/2 w-1.5 h-1.5 bg-slate-400 rounded-full opacity-40 animate-pulse-gentle-delay"></div>
            <div class="absolute bottom-40 left-1/2 w-1 h-1 bg-indigo-300 rounded-full opacity-60 animate-pulse-gentle-delay-2"></div>
            <div class="absolute bottom-16 right-1/2 w-1.5 h-1.5 bg-blue-400 rounded-full opacity-35 animate-pulse-gentle-delay-3"></div>
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
    <section class="py-12 mt-8 px-4 relative overflow-hidden bg-gradient-to-br from-gray-50 to-slate-100">
        <!-- Professional Client Section Background -->
        <div class="absolute inset-0 pointer-events-none">
            <!-- Corporate Grid Pattern -->
            <div class="absolute inset-0 bg-grid-corporate opacity-4"></div>
            
            <!-- Professional Elements -->
            <div class="absolute top-8 left-12 w-16 h-16 border border-gray-200 opacity-30 transform rotate-45 animate-drift-professional"></div>
            <div class="absolute top-24 right-20 w-20 h-20 border border-slate-300 opacity-25 transform -rotate-30 animate-drift-professional-delay"></div>
            <div class="absolute bottom-16 left-24 w-18 h-18 border border-blue-200 opacity-35 transform rotate-30 animate-drift-professional-delay-2"></div>
            <div class="absolute bottom-8 right-12 w-22 h-22 border border-gray-300 opacity-20 transform -rotate-45 animate-drift-professional-delay-3"></div>
            
            <!-- Minimal Corporate Lines -->
            <div class="absolute top-32 left-1/5 w-8 h-0.5 bg-gradient-to-r from-gray-300 to-transparent opacity-40 animate-slide-professional"></div>
            <div class="absolute top-48 right-1/4 w-12 h-0.5 bg-gradient-to-r from-slate-400 to-transparent opacity-30 animate-slide-professional-delay"></div>
            <div class="absolute bottom-32 left-1/3 w-10 h-0.5 bg-gradient-to-r from-blue-300 to-transparent opacity-35 animate-slide-professional-delay-2"></div>
            <div class="absolute bottom-48 right-1/5 w-14 h-0.5 bg-gradient-to-r from-gray-400 to-transparent opacity-25 animate-slide-professional-delay-3"></div>
            
            <!-- Corporate Accent Points -->
            <div class="absolute top-12 left-1/3 w-1 h-1 bg-gray-400 rounded-full opacity-50 animate-blink-professional"></div>
            <div class="absolute top-24 right-1/3 w-1.5 h-1.5 bg-slate-500 rounded-full opacity-40 animate-blink-professional-delay"></div>
            <div class="absolute bottom-24 left-2/3 w-1 h-1 bg-blue-400 rounded-full opacity-60 animate-blink-professional-delay-2"></div>
            <div class="absolute bottom-12 right-2/3 w-1.5 h-1.5 bg-gray-500 rounded-full opacity-35 animate-blink-professional-delay-3"></div>
            
            <!-- Professional Corner Accents -->
            <div class="absolute top-0 left-0 w-8 h-8 border-l border-t border-gray-200 opacity-50"></div>
            <div class="absolute top-0 right-0 w-8 h-8 border-r border-t border-slate-300 opacity-40"></div>
            <div class="absolute bottom-0 left-0 w-8 h-8 border-l border-b border-blue-200 opacity-50"></div>
            <div class="absolute bottom-0 right-0 w-8 h-8 border-r border-b border-gray-300 opacity-40"></div>
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

    <section class="bg-gradient-to-br from-gray-50 via-slate-50 to-blue-50 text-gray-800 py-16 px-4 relative overflow-hidden">
        <!-- Professional Background Pattern -->
        <div class="absolute inset-0 pointer-events-none">
            <!-- Subtle Grid Pattern -->
            <div class="absolute inset-0 bg-grid-pattern opacity-3"></div>
            
            <!-- Professional Elements -->
            <div class="absolute top-16 left-20 w-20 h-20 border border-gray-200 opacity-25 transform rotate-45 animate-drift-gentle"></div>
            <div class="absolute top-32 right-24 w-16 h-16 border border-slate-300 opacity-20 transform -rotate-30 animate-drift-gentle-delay"></div>
            <div class="absolute bottom-20 left-32 w-24 h-24 border border-blue-200 opacity-30 transform rotate-12 animate-drift-gentle-delay-2"></div>
            <div class="absolute bottom-32 right-20 w-18 h-18 border border-gray-300 opacity-25 transform -rotate-45 animate-drift-gentle-delay-3"></div>
            
            <!-- Subtle Lines -->
            <div class="absolute top-24 left-1/4 w-12 h-0.5 bg-gradient-to-r from-gray-300 to-transparent opacity-30 animate-fade-in-out"></div>
            <div class="absolute top-48 right-1/3 w-16 h-0.5 bg-gradient-to-r from-slate-400 to-transparent opacity-25 animate-fade-in-out-delay"></div>
            <div class="absolute bottom-48 left-1/3 w-14 h-0.5 bg-gradient-to-r from-blue-300 to-transparent opacity-35 animate-fade-in-out-delay-2"></div>
            <div class="absolute bottom-24 right-1/4 w-10 h-0.5 bg-gradient-to-r from-gray-400 to-transparent opacity-20 animate-fade-in-out-delay-3"></div>
            
            <!-- Corner Elements -->
            <div class="absolute top-0 left-0 w-16 h-16 border-l-2 border-t-2 border-gray-200 opacity-30"></div>
            <div class="absolute top-0 right-0 w-16 h-16 border-r-2 border-t-2 border-slate-300 opacity-25"></div>
            <div class="absolute bottom-0 left-0 w-16 h-16 border-l-2 border-b-2 border-blue-200 opacity-30"></div>
            <div class="absolute bottom-0 right-0 w-16 h-16 border-r-2 border-b-2 border-gray-300 opacity-25"></div>
        </div>
        
        <div class="container mx-auto text-center relative z-10">
            <h2 class="text-4xl md:text-6xl font-black mb-16 bg-gradient-to-r from-slate-800 via-blue-700 to-indigo-800 bg-clip-text text-transparent tracking-tight leading-tight">Mengapa memilih kami?</h2>
            
            <!-- Carousel Container -->
            <div class="relative max-w-lg mx-auto px-20">
                <!-- Main Card Display -->
                <div class="carousel-container relative overflow-hidden">
                    <div class="carousel-track flex transition-transform duration-500 ease-in-out" id="carouselTrack">
                        <!-- Card 1 -->
                        <div class="carousel-item w-full flex-shrink-0 flex justify-center">
                            <div class="relative w-40 h-40 transform rotate-45 flex items-center justify-center bg-white border-2 border-blue-200 text-blue-800 shadow-xl rounded-lg transition-all duration-500 hover:scale-110 hover:shadow-2xl hover:rotate-[50deg] cursor-pointer group">
                                <div class="absolute w-full h-full transform -rotate-45 flex items-center justify-center p-4 transition-transform duration-300 group-hover:scale-105">
                                    <span class="text-center font-bold text-lg tracking-wide">Kept Confidential</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Card 2 -->
                        <div class="carousel-item w-full flex-shrink-0 flex justify-center">
                            <div class="relative w-40 h-40 transform rotate-45 flex items-center justify-center bg-gradient-to-br from-blue-600 to-blue-700 text-white shadow-xl rounded-lg transition-all duration-500 hover:scale-110 hover:shadow-2xl hover:rotate-[50deg] cursor-pointer group">
                                <div class="absolute w-full h-full transform -rotate-45 flex items-center justify-center p-4 transition-transform duration-300 group-hover:scale-105">
                                    <span class="text-center font-bold text-lg tracking-wide">Monitoring Proses</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Card 3 -->
                        <div class="carousel-item w-full flex-shrink-0 flex justify-center">
                            <div class="relative w-40 h-40 transform rotate-45 flex items-center justify-center bg-white border-2 border-slate-300 text-slate-800 shadow-xl rounded-lg transition-all duration-500 hover:scale-110 hover:shadow-2xl hover:rotate-[50deg] cursor-pointer group">
                                <div class="absolute w-full h-full transform -rotate-45 flex items-center justify-center p-4 transition-transform duration-300 group-hover:scale-105">
                                    <span class="text-center font-bold text-lg tracking-wide">Simple</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Card 4 -->
                        <div class="carousel-item w-full flex-shrink-0 flex justify-center">
                            <div class="relative w-40 h-40 transform rotate-45 flex items-center justify-center bg-gradient-to-br from-indigo-600 to-indigo-700 text-white shadow-xl rounded-lg transition-all duration-500 hover:scale-110 hover:shadow-2xl hover:rotate-[50deg] cursor-pointer group">
                                <div class="absolute w-full h-full transform -rotate-45 flex items-center justify-center p-4 transition-transform duration-300 group-hover:scale-105">
                                    <span class="text-center font-bold text-lg tracking-wide">Unlimited Participant</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Card 5 -->
                        <div class="carousel-item w-full flex-shrink-0 flex justify-center">
                            <div class="relative w-40 h-40 transform rotate-45 flex items-center justify-center bg-white border-2 border-gray-300 text-gray-800 shadow-xl rounded-lg transition-all duration-500 hover:scale-110 hover:shadow-2xl hover:rotate-[50deg] cursor-pointer group">
                                <div class="absolute w-full h-full transform -rotate-45 flex items-center justify-center p-4 transition-transform duration-300 group-hover:scale-105">
                                    <span class="text-center font-bold text-lg tracking-wide">Fleksibel</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Card 6 -->
                        <div class="carousel-item w-full flex-shrink-0 flex justify-center">
                            <div class="relative w-40 h-40 transform rotate-45 flex items-center justify-center bg-gradient-to-br from-slate-600 to-slate-700 text-white shadow-xl rounded-lg transition-all duration-500 hover:scale-110 hover:shadow-2xl hover:rotate-[50deg] cursor-pointer group">
                                <div class="absolute w-full h-full transform -rotate-45 flex items-center justify-center p-4 transition-transform duration-300 group-hover:scale-105">
                                    <span class="text-center font-bold text-lg tracking-wide">Hasil Terverifikasi</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Card 7 -->
                        <div class="carousel-item w-full flex-shrink-0 flex justify-center">
                            <div class="relative w-40 h-40 transform rotate-45 flex items-center justify-center bg-gradient-to-br from-blue-500 to-blue-600 text-white shadow-xl rounded-lg transition-all duration-500 hover:scale-110 hover:shadow-2xl hover:rotate-[50deg] cursor-pointer group">
                                <div class="absolute w-full h-full transform -rotate-45 flex items-center justify-center p-4 transition-transform duration-300 group-hover:scale-105">
                                    <span class="text-center font-bold text-lg tracking-wide">Customize</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Card 8 -->
                        <div class="carousel-item w-full flex-shrink-0 flex justify-center">
                            <div class="relative w-40 h-40 transform rotate-45 flex items-center justify-center bg-white border-2 border-indigo-300 text-indigo-800 shadow-xl rounded-lg transition-all duration-500 hover:scale-110 hover:shadow-2xl hover:rotate-[50deg] cursor-pointer group">
                                <div class="absolute w-full h-full transform -rotate-45 flex items-center justify-center p-4 transition-transform duration-300 group-hover:scale-105">
                                    <span class="text-center font-bold text-lg tracking-wide">Tools Up to Date</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Navigation Buttons -->
                <button type="button" class="carousel-btn carousel-btn-prev absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-600 bg-opacity-20 hover:bg-opacity-40 text-gray-700 p-3 rounded-full transition-all duration-300 hover:scale-110 shadow-lg backdrop-blur-sm border border-gray-400 border-opacity-30" id="prevBtn">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button type="button" class="carousel-btn carousel-btn-next absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-600 bg-opacity-20 hover:bg-opacity-40 text-gray-700 p-3 rounded-full transition-all duration-300 hover:scale-110 shadow-lg backdrop-blur-sm border border-gray-400 border-opacity-30" id="nextBtn">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
                
                <!-- Dots Indicator -->
                <div class="flex justify-center mt-8 space-x-2">
                    <button class="dot w-3 h-3 rounded-full bg-gray-500 bg-opacity-30 hover:bg-opacity-60 transition-all duration-300 active"></button>
                    <button class="dot w-3 h-3 rounded-full bg-gray-500 bg-opacity-30 hover:bg-opacity-60 transition-all duration-300"></button>
                    <button class="dot w-3 h-3 rounded-full bg-gray-500 bg-opacity-30 hover:bg-opacity-60 transition-all duration-300"></button>
                    <button class="dot w-3 h-3 rounded-full bg-gray-500 bg-opacity-30 hover:bg-opacity-60 transition-all duration-300"></button>
                    <button class="dot w-3 h-3 rounded-full bg-gray-500 bg-opacity-30 hover:bg-opacity-60 transition-all duration-300"></button>
                    <button class="dot w-3 h-3 rounded-full bg-gray-500 bg-opacity-30 hover:bg-opacity-60 transition-all duration-300"></button>
                    <button class="dot w-3 h-3 rounded-full bg-gray-500 bg-opacity-30 hover:bg-opacity-60 transition-all duration-300"></button>
                    <button class="dot w-3 h-3 rounded-full bg-gray-500 bg-opacity-30 hover:bg-opacity-60 transition-all duration-300"></button>
                </div>
            </div>

            <div class="mt-16">
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="{{ route('contact') }}" class="group relative inline-block bg-blue-600 text-white px-8 py-4 rounded-full text-lg font-black hover:bg-blue-700 transition-all duration-500 shadow-lg hover:shadow-2xl animate-pulse overflow-hidden tracking-wider">
                        <span class="relative z-10">KONSULTASI SEKARANG</span>
                        <span class="absolute inset-0 bg-gradient-to-r from-blue-700 to-indigo-700 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></span>
                        <span class="absolute inset-0 bg-white opacity-0 group-hover:opacity-20 transition-opacity duration-300"></span>
                    </a>
                    
                    <a href="{{ route('services') }}" class="group inline-flex items-center px-6 py-4 text-base font-bold text-gray-700 bg-green-500 bg-opacity-60 rounded-xl border border-gray-300 border-opacity-50 hover:bg-opacity-80 hover:border-opacity-70 transition-all duration-500 ease-in-out transform hover:scale-110 hover:shadow-xl backdrop-blur-sm hover:-translate-y-1 hover:rotate-1 tracking-wide">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        <span class="transition-transform duration-300 group-hover:scale-105">Lihat Menu Layanan</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

<script>
// Carousel functionality
let currentSlideIndex = 0;
const totalSlides = 8;

function showSlide(index) {
    const track = document.getElementById('carouselTrack');
    const dots = document.querySelectorAll('.dot');
    
    console.log('showSlide called with index:', index, 'current index:', currentSlideIndex);
    
    // Ensure index is a number
    index = parseInt(index);
    
    // Keep index within bounds
    if (index >= totalSlides) {
        currentSlideIndex = 0;
    } else if (index < 0) {
        currentSlideIndex = totalSlides - 1;
    } else {
        currentSlideIndex = index;
    }
    
    console.log('Final slide index:', currentSlideIndex);
    
    if (!track) {
        console.error('Carousel track not found!');
        return;
    }
    
    // Move carousel track
    track.style.transform = `translateX(-${currentSlideIndex * 100}%)`;
    
    // Update dots
    dots.forEach((dot, i) => {
        dot.classList.remove('active');
        if (i === currentSlideIndex) {
            dot.classList.add('active');
        }
    });
    
    console.log('Slide changed to:', currentSlideIndex);
}

function nextSlide() {
    console.log('nextSlide called, current index:', currentSlideIndex);
    showSlide(currentSlideIndex + 1);
}

function prevSlide() {
    console.log('prevSlide called, current index:', currentSlideIndex);
    showSlide(currentSlideIndex - 1);
}

function goToSlide(index) {
    console.log('goToSlide called with index:', index);
    showSlide(index);
}

// Event listeners
document.addEventListener('DOMContentLoaded', function() {
    const nextBtn = document.getElementById('nextBtn');
    const prevBtn = document.getElementById('prevBtn');
    
    console.log('DOM loaded, buttons found:', { nextBtn, prevBtn });
    
    // Initialize first slide
    showSlide(0);
    
    if (nextBtn) {
        nextBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            console.log('Next button clicked via event listener');
            nextSlide();
        });
    }
    
    if (prevBtn) {
        prevBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            console.log('Prev button clicked via event listener');
            prevSlide();
        });
    }
    
    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowLeft') {
            prevSlide();
        } else if (e.key === 'ArrowRight') {
            nextSlide();
        }
    });
    
    // Touch/swipe support for mobile
    let startX = 0;
    let endX = 0;
    
    const carousel = document.querySelector('.carousel-container');
    
    if (carousel) {
        carousel.addEventListener('touchstart', function(e) {
            startX = e.touches[0].clientX;
        });
        
        carousel.addEventListener('touchend', function(e) {
            endX = e.changedTouches[0].clientX;
            handleSwipe();
        });
    }
    
    function handleSwipe() {
        const threshold = 50;
        const diff = startX - endX;
        
        if (Math.abs(diff) > threshold) {
            if (diff > 0) {
                nextSlide();
            } else {
                prevSlide();
            }
        }
    }
    
    // Handle dot clicks
    const dots = document.querySelectorAll('.dot');
    dots.forEach((dot, index) => {
        dot.addEventListener('click', function(e) {
            e.preventDefault();
            console.log('Dot clicked, index:', index);
            goToSlide(index);
        });
    });
});
</script>

<style>
/* Carousel Styles */
.carousel-container {
    position: relative;
    width: 100%;
    height: 200px;
    overflow: hidden;
    border-radius: 1rem;
    margin: 0 auto;
}

.carousel-track {
    display: flex;
    transition: transform 0.5s ease-in-out;
    height: 100%;
}

.carousel-item {
    width: 100%;
    flex-shrink: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
}

.carousel-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 1000;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    transition: all 0.3s ease;
    cursor: pointer;
    outline: none;
    user-select: none;
    pointer-events: auto;
}

.carousel-btn:hover {
    background: rgba(255, 255, 255, 0.4);
    transform: translateY(-50%) scale(1.1);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
}

.carousel-btn:active {
    transform: translateY(-50%) scale(0.95);
}

.carousel-btn-prev {
    left: -60px;
}

.carousel-btn-next {
    right: -60px;
}

.dot {
    cursor: pointer;
    transition: all 0.3s ease;
    z-index: 1000;
    pointer-events: auto;
    user-select: none;
    outline: none;
    border: none;
}

.dot.active {
    background: rgba(255, 255, 255, 0.9) !important;
    transform: scale(1.2);
}

.dot:hover {
    transform: scale(1.1);
}

.dot:active {
    transform: scale(0.9);
}

/* Responsive adjustments for carousel */
@media (max-width: 768px) {
    .carousel-btn-prev {
        left: -50px;
    }
    
    .carousel-btn-next {
        right: -50px;
    }
    
    .carousel-btn {
        padding: 0.5rem;
    }
    
    .carousel-btn svg {
        width: 1rem;
        height: 1rem;
    }
}

@media (max-width: 480px) {
    .carousel-btn-prev {
        left: -30px;
    }
    
    .carousel-btn-next {
        right: -30px;
    }
    
    .carousel-btn {
        padding: 0.4rem;
        width: 2.5rem;
        height: 2.5rem;
    }
    
    .carousel-btn svg {
        width: 0.9rem;
        height: 0.9rem;
    }
    
    /* Adjust container padding for mobile */
    .relative.max-w-lg.mx-auto.px-20 {
        padding-left: 3rem;
        padding-right: 3rem;
    }
}

/* Professional Animation Keyframes */
@keyframes float-professional {
    0%, 100% { transform: translateY(0px) rotate(0deg); opacity: 0.2; }
    50% { transform: translateY(-10px) rotate(5deg); opacity: 0.4; }
}

@keyframes drift-slow {
    0%, 100% { transform: translateX(0px) translateY(0px) rotate(0deg); }
    33% { transform: translateX(5px) translateY(-3px) rotate(2deg); }
    66% { transform: translateX(-3px) translateY(5px) rotate(-2deg); }
}

@keyframes pulse-professional {
    0%, 100% { opacity: 0.2; transform: scaleX(1); }
    50% { opacity: 0.5; transform: scaleX(1.2); }
}

@keyframes rotate-professional {
    0% { transform: rotate(0deg); opacity: 0.25; }
    50% { transform: rotate(180deg); opacity: 0.4; }
    100% { transform: rotate(360deg); opacity: 0.25; }
}

@keyframes fade-professional {
    0%, 100% { opacity: 0.3; }
    50% { opacity: 0.6; }
}

@keyframes drift-gentle {
    0%, 100% { transform: translateY(0px) rotate(0deg); opacity: 0.3; }
    50% { transform: translateY(-5px) rotate(3deg); opacity: 0.5; }
}

@keyframes fade-in-out {
    0%, 100% { opacity: 0.2; transform: scaleX(0.8); }
    50% { opacity: 0.6; transform: scaleX(1.1); }
}

@keyframes pulse-gentle {
    0%, 100% { opacity: 0.4; transform: scale(1); }
    50% { opacity: 0.7; transform: scale(1.2); }
}

@keyframes drift-professional {
    0%, 100% { transform: translateX(0px) translateY(0px) rotate(0deg); opacity: 0.3; }
    25% { transform: translateX(3px) translateY(-2px) rotate(1deg); opacity: 0.4; }
    75% { transform: translateX(-2px) translateY(3px) rotate(-1deg); opacity: 0.5; }
}

@keyframes slide-professional {
    0%, 100% { transform: translateX(-10px); opacity: 0.2; }
    50% { transform: translateX(0px); opacity: 0.6; }
}

@keyframes blink-professional {
    0%, 100% { opacity: 0.3; transform: scale(1); }
    50% { opacity: 0.8; transform: scale(1.3); }
}

/* Professional Animation Classes */
.animate-float-professional {
    animation: float-professional 8s ease-in-out infinite;
}

.animate-float-professional-delay {
    animation: float-professional 8s ease-in-out infinite;
    animation-delay: 2s;
}

.animate-drift-slow {
    animation: drift-slow 12s ease-in-out infinite;
}

.animate-drift-slow-delay {
    animation: drift-slow 12s ease-in-out infinite;
    animation-delay: 3s;
}

.animate-pulse-professional {
    animation: pulse-professional 6s ease-in-out infinite;
}

.animate-pulse-professional-delay {
    animation: pulse-professional 6s ease-in-out infinite;
    animation-delay: 1s;
}

.animate-pulse-professional-delay-2 {
    animation: pulse-professional 6s ease-in-out infinite;
    animation-delay: 2s;
}

.animate-pulse-professional-delay-3 {
    animation: pulse-professional 6s ease-in-out infinite;
    animation-delay: 3s;
}

.animate-rotate-professional {
    animation: rotate-professional 15s linear infinite;
}

.animate-rotate-professional-reverse {
    animation: rotate-professional 15s linear infinite reverse;
}

.animate-rotate-professional-delay {
    animation: rotate-professional 15s linear infinite;
    animation-delay: 3s;
}

.animate-rotate-professional-reverse-delay {
    animation: rotate-professional 15s linear infinite reverse;
    animation-delay: 5s;
}

.animate-fade-professional {
    animation: fade-professional 4s ease-in-out infinite;
}

.animate-fade-professional-delay {
    animation: fade-professional 4s ease-in-out infinite;
    animation-delay: 1s;
}

.animate-fade-professional-delay-2 {
    animation: fade-professional 4s ease-in-out infinite;
    animation-delay: 2s;
}

.animate-fade-professional-delay-3 {
    animation: fade-professional 4s ease-in-out infinite;
    animation-delay: 3s;
}

.animate-drift-gentle {
    animation: drift-gentle 10s ease-in-out infinite;
}

.animate-drift-gentle-delay {
    animation: drift-gentle 10s ease-in-out infinite;
    animation-delay: 2s;
}

.animate-drift-gentle-delay-2 {
    animation: drift-gentle 10s ease-in-out infinite;
    animation-delay: 4s;
}

.animate-drift-gentle-delay-3 {
    animation: drift-gentle 10s ease-in-out infinite;
    animation-delay: 6s;
}

.animate-fade-in-out {
    animation: fade-in-out 5s ease-in-out infinite;
}

.animate-fade-in-out-delay {
    animation: fade-in-out 5s ease-in-out infinite;
    animation-delay: 1s;
}

.animate-fade-in-out-delay-2 {
    animation: fade-in-out 5s ease-in-out infinite;
    animation-delay: 2s;
}

.animate-fade-in-out-delay-3 {
    animation: fade-in-out 5s ease-in-out infinite;
    animation-delay: 3s;
}

.animate-pulse-gentle {
    animation: pulse-gentle 4s ease-in-out infinite;
}

.animate-pulse-gentle-delay {
    animation: pulse-gentle 4s ease-in-out infinite;
    animation-delay: 1s;
}

.animate-pulse-gentle-delay-2 {
    animation: pulse-gentle 4s ease-in-out infinite;
    animation-delay: 2s;
}

.animate-pulse-gentle-delay-3 {
    animation: pulse-gentle 4s ease-in-out infinite;
    animation-delay: 3s;
}

.animate-drift-professional {
    animation: drift-professional 9s ease-in-out infinite;
}

.animate-drift-professional-delay {
    animation: drift-professional 9s ease-in-out infinite;
    animation-delay: 2s;
}

.animate-drift-professional-delay-2 {
    animation: drift-professional 9s ease-in-out infinite;
    animation-delay: 4s;
}

.animate-drift-professional-delay-3 {
    animation: drift-professional 9s ease-in-out infinite;
    animation-delay: 6s;
}

.animate-slide-professional {
    animation: slide-professional 7s ease-in-out infinite;
}

.animate-slide-professional-delay {
    animation: slide-professional 7s ease-in-out infinite;
    animation-delay: 1.5s;
}

.animate-slide-professional-delay-2 {
    animation: slide-professional 7s ease-in-out infinite;
    animation-delay: 3s;
}

.animate-slide-professional-delay-3 {
    animation: slide-professional 7s ease-in-out infinite;
    animation-delay: 4.5s;
}

.animate-blink-professional {
    animation: blink-professional 3s ease-in-out infinite;
}

.animate-blink-professional-delay {
    animation: blink-professional 3s ease-in-out infinite;
    animation-delay: 0.5s;
}

.animate-blink-professional-delay-2 {
    animation: blink-professional 3s ease-in-out infinite;
    animation-delay: 1s;
}

.animate-blink-professional-delay-3 {
    animation: blink-professional 3s ease-in-out infinite;
    animation-delay: 1.5s;
}

/* Grid Pattern Backgrounds */
.bg-grid-pattern {
    background-image: 
        linear-gradient(rgba(59, 130, 246, 0.1) 1px, transparent 1px),
        linear-gradient(90deg, rgba(59, 130, 246, 0.1) 1px, transparent 1px);
    background-size: 50px 50px;
}

.bg-grid-small {
    background-image: 
        linear-gradient(rgba(148, 163, 184, 0.1) 1px, transparent 1px),
        linear-gradient(90deg, rgba(148, 163, 184, 0.1) 1px, transparent 1px);
    background-size: 25px 25px;
}

.bg-grid-corporate {
    background-image: 
        linear-gradient(rgba(107, 114, 128, 0.1) 1px, transparent 1px),
        linear-gradient(90deg, rgba(107, 114, 128, 0.1) 1px, transparent 1px);
    background-size: 30px 30px;
}

/* Responsive Professional Adjustments */
@media (max-width: 768px) {
    .animate-float-professional, 
    .animate-drift-slow, 
    .animate-pulse-professional,
    .animate-rotate-professional,
    .animate-fade-professional,
    .animate-drift-gentle,
    .animate-fade-in-out,
    .animate-pulse-gentle,
    .animate-drift-professional,
    .animate-slide-professional,
    .animate-blink-professional {
        animation-duration: 6s;
    }
}

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