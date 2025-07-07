@extends('layouts.frontend')

@section('title', 'Layanan Konseling - Selaras Mitra Integra')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center p-8">
                {{-- Bagian Kiri: Gambar --}}
                <div>
                    <img src="{{ asset('images/konseling-main.jpg') }}" alt="Ilustrasi Konseling" class="w-full h-auto rounded-lg shadow-md">
                    {{-- Pastikan Anda memiliki gambar ini di public/images/konseling-main.jpg --}}
                </div>

                {{-- Bagian Kanan: Teks Konseling --}}
                <div class="text-gray-800">
                    <h1 class="text-4xl font-bold text-indigo-800 mb-4">LAYANAN KONSELING</h1>
                    <h2 class="text-2xl font-semibold text-gray-700 mb-6">
                        Solusi profesional untuk kesehatan mental dan pengembangan diri.
                    </h2>
                    <p class="text-lg mb-6">
                        Layanan konseling PT Selaras Mitra Integra memberikan dukungan profesional untuk berbagai kebutuhan konseling, baik untuk individu maupun kelompok. Dengan didukung oleh psikolog berpengalaman, kami menyediakan layanan konseling yang fleksibel dan dapat disesuaikan dengan kebutuhan klien.
                    </p>
                    <p class="text-right text-gray-600">

                </div>
            </div>
        </div>

        {{-- Bagian Jenis Layanan Konseling --}}
        <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-lg shadow-lg p-8 mb-8">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-8">Jenis Layanan Konseling</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                {{-- Konseling Psikologi --}}
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 text-center mb-2">Konseling Psikologi</h3>
                    <p class="text-gray-600 text-sm text-center">Bantuan profesional untuk kesehatan mental dan emosional</p>
                </div>

                {{-- Konseling Karir --}}
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 text-center mb-2">Konseling Karir</h3>
                    <p class="text-gray-600 text-sm text-center">Bimbingan untuk pengembangan karir dan profesional</p>
                </div>

                {{-- Konseling Keluarga --}}
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 text-center mb-2">Konseling Keluarga</h3>
                    <p class="text-gray-600 text-sm text-center">Solusi untuk hubungan keluarga yang harmonis</p>
                </div>

                {{-- Konseling Kelompok --}}
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 text-center mb-2">Konseling Kelompok</h3>
                    <p class="text-gray-600 text-sm text-center">Terapi kelompok untuk berbagai permasalahan</p>
                </div>
            </div>
        </div>

        {{-- Bagian "Kelebihan Layanan Kami" --}}
        <div class="bg-gradient-to-br from-indigo-600 via-purple-600 to-indigo-800 text-white p-8 rounded-lg shadow-lg text-center mt-12 relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-indigo-500 to-purple-900 opacity-20 transform -skew-y-3 scale-150 z-0"></div>
            
            <h2 class="text-3xl font-bold mb-8 relative z-10">Kelebihan Layanan Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 justify-items-center relative z-10">
                {{-- Card 1: Fleksible --}}
                <div class="bg-white text-indigo-800 p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 w-full max-w-sm">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Fleksible</h3>
                    <p class="text-gray-700 text-sm">Pelaksanaan konseling bisa dilaksanakan secara online maupun offline dimanapun dan kapanpun</p>
                </div>

                {{-- Card 2: Unlimited Participant --}}
                <div class="bg-white text-indigo-800 p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 w-full max-w-sm">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Unlimited Participant</h3>
                    <p class="text-gray-700 text-sm">Tidak ada batasan jumlah peserta dalam layanan konseling</p>
                </div>

                {{-- Card 3: Expert Counselor --}}
                <div class="bg-white text-indigo-800 p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 w-full max-w-sm">
                    <div class="w-16 h-16 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Expert Counselor</h3>
                    <p class="text-gray-700 text-sm">Bekerjasama dengan psikolog yang berpengalaman dan kompeten</p>
                </div>
            </div>

            {{-- Proses Konseling --}}
            <div class="mt-12 relative z-10">
                <h3 class="text-2xl font-bold mb-6">Proses Konseling</h3>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 max-w-6xl mx-auto">
                    <div class="bg-indigo-700 p-4 rounded-lg">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center mx-auto mb-2">
                            <span class="text-indigo-600 font-bold">1</span>
                        </div>
                        <h4 class="font-semibold mb-2">Assessment</h4>
                        <p class="text-sm text-indigo-100">Evaluasi awal kondisi klien</p>
                    </div>
                    <div class="bg-indigo-700 p-4 rounded-lg">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center mx-auto mb-2">
                            <span class="text-indigo-600 font-bold">2</span>
                        </div>
                        <h4 class="font-semibold mb-2">Planning</h4>
                        <p class="text-sm text-indigo-100">Penyusunan rencana terapi</p>
                    </div>
                    <div class="bg-indigo-700 p-4 rounded-lg">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center mx-auto mb-2">
                            <span class="text-indigo-600 font-bold">3</span>
                        </div>
                        <h4 class="font-semibold mb-2">Treatment</h4>
                        <p class="text-sm text-indigo-100">Pelaksanaan sesi konseling</p>
                    </div>
                    <div class="bg-indigo-700 p-4 rounded-lg">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center mx-auto mb-2">
                            <span class="text-indigo-600 font-bold">4</span>
                        </div>
                        <h4 class="font-semibold mb-2">Evaluation</h4>
                        <p class="text-sm text-indigo-100">Evaluasi hasil dan tindak lanjut</p>
                    </div>
                </div>
            </div>

            <a href="{{ route('contact') }}" class="inline-block bg-white text-indigo-600 font-bold px-8 py-4 rounded-full text-lg hover:bg-gray-100 transition duration-300 mt-12 relative z-10">
                KONSULTASI SEKARANG
            </a>
            <p class="mt-4 text-indigo-200 relative z-10">
              <a href="{{ route('services') }}" class="group inline-flex items-center px-6 py-3 text-lg font-bold text-white bg-blue-600 bg-opacity-100 rounded-xl border border-white border-opacity-30 hover:bg-opacity-40 hover:border-opacity-60 transition-all duration-500 ease-in-out transform hover:scale-110 hover:shadow-xl backdrop-blur-sm">
                            <span class="mr-3">Kembali ke Menu Layanan</span>
                            <svg class="w-5 h-5 transition-all duration-500 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
            </p>
        </div>
    </div>
@endsection
