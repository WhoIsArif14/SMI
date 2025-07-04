@extends('layouts.frontend') {{-- Pastikan ini mengacu pada layout utama Anda --}}

@section('title', 'Layanan Konseling - Selaras Mitra Integra')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="p-8">
                <h1 class="text-4xl font-bold text-blue-800 mb-4 text-center md:text-left">LAYANAN KONSELING</h1>
                <h2 class="text-2xl font-semibold text-gray-700 mb-6 text-center md:text-left">
                    Solusi profesional untuk kesehatan mental dan pengembangan diri.
                </h2>
                <p class="text-lg text-gray-700 mb-6">
                    Layanan konseling PT Selaras Mitra Integra memberikan dukungan profesional untuk berbagai kebutuhan konseling, baik untuk individu maupun kelompok. Dengan didukung oleh psikolog berpengalaman, kami menyediakan layanan konseling yang fleksibel dan dapat disesuaikan dengan kebutuhan klien. Layanan kami mencakup konseling psikologi, konseling karir, konseling keluarga, dan berbagai layanan konseling lainnya yang dapat membantu mengatasi berbagai permasalahan dan mengoptimalkan potensi diri.
                </p>
                <p class="text-right text-gray-600">
                    <a href="{{ route('services') }}" class="text-blue-600 hover:underline">Kembali ke menu layanan</a>
                </p>
            </div>
        </div>

        {{-- Bagian "Kelebihan Layanan Kami" --}}
        <div class="bg-blue-600 text-white p-8 rounded-lg shadow-lg text-center mt-12">
            <h2 class="text-3xl font-bold mb-8">Kelebihan Layanan Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 justify-items-center">
                {{-- Card 1: Fleksible --}}
                <div class="bg-blue-700 p-6 rounded-lg shadow-md flex flex-col justify-end items-center h-48 w-full max-w-sm">
                    <div class="w-full h-24 border-2 border-white rounded-lg mb-4 flex items-center justify-center">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <p class="text-xl font-semibold">Fleksible</p>
                    <p class="text-sm text-gray-200 mt-2">Pelaksanaan konseling bisa dilaksanakan secara online maupun offline dimanapun dan kapanpun</p>
                </div>

                {{-- Card 2: Unlimited Participant --}}
                <div class="bg-blue-700 p-6 rounded-lg shadow-md flex flex-col justify-end items-center h-48 w-full max-w-sm">
                    <div class="w-full h-24 border-2 border-white rounded-lg mb-4 flex items-center justify-center">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <p class="text-xl font-semibold">Unlimited Participant</p>
                    <p class="text-sm text-gray-200 mt-2">Tidak ada batasan jumlah peserta dalam layanan konseling</p>
                </div>

                {{-- Card 3: Expert Counselor --}}
                <div class="bg-blue-700 p-6 rounded-lg shadow-md flex flex-col justify-end items-center h-48 w-full max-w-sm">
                    <div class="w-full h-24 border-2 border-white rounded-lg mb-4 flex items-center justify-center">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <p class="text-xl font-semibold">Expert Counselor</p>
                    <p class="text-sm text-gray-200 mt-2">Bekerjasama dengan psikolog yang berpengalaman dan kompeten</p>
                </div>
            </div>

            <a href="{{ route('contact') }}" class="inline-block bg-yellow-400 text-blue-800 font-bold px-8 py-4 rounded-full text-lg hover:bg-yellow-500 transition duration-300 mt-12">
                KONSULTASI SEKARANG
            </a>
            <p class="mt-4 text-gray-200">
                <a href="{{ route('services') }}" class="text-white hover:underline">Kembali ke menu layanan</a>
            </p>
        </div>
    </div>
@endsection