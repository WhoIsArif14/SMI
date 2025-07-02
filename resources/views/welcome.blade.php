@extends('layouts.frontend')

@section('title', 'Selaras Mitra Integra')

@section('content')
    <div class="py-12 px-4">
        {{-- Menggunakan flexbox untuk layout responsif: kolom di mobile, baris di desktop --}}
        <div class="flex flex-col md:flex-row items-center justify-center gap-8">
            {{-- Bagian Teks Selamat Datang --}}
            <div class="md:w-1/2 text-center md:text-left">
                <h1 class="text-4xl md:text-6xl font-extrabold bg-gradient-to-r from-blue-600 via-blue-800 to-indigo-900 bg-clip-text text-transparent mb-6 leading-tight tracking-tight animate-fade-in">
                    <span class="block font-black text-5xl md:text-7xl">Selamat Datang</span>
                    <span class="block text-3xl md:text-5xl font-light mt-2 text-gray-700">di Website Profil</span>
                    <span class="block text-3xl md:text-5xl font-bold bg-gradient-to-r from-yellow-500 to-orange-600 bg-clip-text text-transparent">Perusahaan Kami</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-600 mb-10 font-light leading-relaxed tracking-wide max-w-2xl">
                    Kami menyediakan <span class="font-semibold text-blue-700">solusi inovatif</span> untuk kebutuhan bisnis Anda.
                </p>
                <a href="{{ route('news.index') }}"
                    class="group inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded-full text-xl shadow-lg transition-all duration-500 ease-in-out transform hover:scale-110 hover:shadow-2xl hover:-translate-y-1 animate-pulse hover:animate-none">
                    <span class="relative font-bold tracking-wider">
                        Lihat Berita Terbaru
                        <span class="absolute inset-0 bg-gradient-to-r from-transparent via-white to-transparent opacity-0 group-hover:opacity-30 group-hover:animate-shimmer transform -skew-x-12"></span>
                    </span>
                </a>
            </div>
            {{-- Bagian Video Lokal --}}
            <div class="md:w-1/2 flex justify-center">
                <video controls autoplay muted loop class="rounded-lg shadow-xl w-full max-w-lg md:max-w-none">
                    <source src="{{ asset('videos/video_profil.mkv') }}" type="video/mkv">
                    {{-- Anda bisa menambahkan source lain untuk format video berbeda jika diperlukan --}}
                    {{-- <source src="{{ asset('videos/video_profil.webm') }}" type="video/webm"> --}}
                    Browser Anda tidak mendukung tag video.
                </video>
            </div>
            {{-- Akhir Bagian Video Lokal --}}
        </div>
    </div>

    {{-- Bagian "Tentang Kami" --}}
    <section class="py-12 bg-white rounded-lg shadow-md mt-8 px-4">
        <h2 class="text-4xl md:text-5xl font-black text-center bg-gradient-to-r from-blue-800 via-blue-600 to-indigo-700 bg-clip-text text-transparent mb-8 tracking-tight">Tentang Kami</h2>
        <p class="text-gray-700 text-xl md:text-2xl text-center leading-relaxed max-w-4xl mx-auto font-light tracking-wide">
            <span class="font-semibold text-blue-800">PT Selaras Mitra Integra</span> telah berpengalaman lebih dari <span class="font-bold text-yellow-600">10 tahun</span> di bidang Human Resource Consultant. Lebih
            dari <span class="font-bold text-blue-700">100 perusahaan</span> di berbagai bidang telah menggunakan layanan kami. Kami mengucapkan terima kasih atas
            kepercayaan yang diberikan kepada PT Selaras Mitra Integra untuk terus melayani Anda sebagai mitra kami.
            Kami berkomitmen untuk memberikan <span class="font-semibold text-green-600">pelayanan terbaik</span> untuk Anda.
            <br><br>
            Untuk Anda yang belum bermitra bersama kami, kami siap menunggu kabar dari Anda.
        </p>
        <div class="text-center mt-10">
            <a href="{{ route('about-us') }}" class="group inline-flex items-center px-8 py-4 text-lg font-bold text-blue-600 bg-blue-50 border-2 border-blue-200 rounded-2xl hover:bg-blue-100 hover:border-blue-300 hover:text-blue-700 transition-all duration-500 ease-in-out transform hover:scale-105 hover:shadow-xl hover:-translate-y-1 hover:rotate-1">
                <span class="mr-3 transform transition-transform duration-300 group-hover:scale-110 tracking-wide">Baca Selengkapnya Tentang Kami</span>
                <svg class="w-6 h-6 transition-all duration-500 group-hover:translate-x-2 group-hover:rotate-12 group-hover:scale-125" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
            </a>
        </div>
    </section>

    {{-- Bagian "Klien Kami" --}}
    <section class="py-12 mt-8 px-4">
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
            <p class="text-center text-gray-500">Belum ada klien yang ditambahkan.</p>
        @endif
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
