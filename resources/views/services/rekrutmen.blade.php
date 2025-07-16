@extends('layouts.frontend') {{-- Pastikan ini mengacu pada layout utama Anda --}}

@section('title', 'Rekrutmen - Selaras Mitra Integra')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center p-8">
                {{-- Bagian Kiri: Gambar --}}
                <div>
                    <img src="{{ asset('images/rkrt.jpg') }}" alt="Ilustrasi Rekrutmen" class="w-full h-auto rounded-lg shadow-md">
                    {{-- Pastikan Anda memiliki gambar ini di public/images/rekrutmen-main.jpg --}}
                </div>

                {{-- Bagian Kanan: Teks Rekrutmen --}}
                <div class="text-gray-800">
                    <h1 class="text-4xl font-bold text-blue-800 mb-4">REKRUTMEN</h1>
                    <p class="text-lg mb-4">
                        Menempatkan orang yang tepat dalam posisi yang tepat menjadi salah satu kunci kesuksesan bisnis.
                    </p>
                    <p class="text-lg mb-6">
                        Kami percaya bahwa organisasi membutuhkan sumber daya manusia yang dapat berkembang di dalam organisasi secara produktif. Oleh karenanya, rekrutmen merupakan proses yang penting bagi suatu organisasi untuk mendapatkan orang yang tepat untuk posisi yang tepat. PT Selaras Mitra Integra menawarkan solusi yang terintegrasi untuk mencapai tujuan tersebut.
                    </p>
                    <p class="text-lg font-semibold mb-2">Layanan kami terdiri dari:</p>
                    <ul class="list-disc list-inside text-lg mb-6">
                        <li>Pencarian Kandidat</li>
                        <li>Proses Seleksi</li>
                    </ul>
                    <p class="text-right text-gray-600">
                      <a href="{{ route('services') }}" class="group inline-flex items-center px-6 py-3 text-lg font-bold text-white bg-blue-600 bg-opacity-100 rounded-xl border border-white border-opacity-30 hover:bg-opacity-40 hover:border-opacity-60 transition-all duration-500 ease-in-out transform hover:scale-110 hover:shadow-xl backdrop-blur-sm">
                            <span class="mr-3">Kembali ke Menu Layanan</span>
                            <svg class="w-5 h-5 transition-all duration-500 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                </div>
            </div>
        </div>

        {{-- Bagian "Kelebihan Kami" --}}
<div class="bg-blue-800 text-white p-8 rounded-lg shadow-lg text-center mt-12">
    <h2 class="text-3xl font-bold mb-12">Kelebihan Kami</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 justify-items-center">

        {{-- Item 1: Kerahasiaan Terjamin --}}
        <div class="flex flex-col items-center text-center group">
            <div class="w-32 h-32 bg-white text-blue-800 flex flex-col justify-center items-center rounded-full shadow-lg group-hover:bg-yellow-400 transition duration-300 transform group-hover:-translate-y-2">
                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
            </div>
            <p class="mt-4 font-semibold text-lg">Kerahasiaan Terjamin</p>
        </div>

        {{-- Item 2: Proses Termonitor --}}
        <div class="flex flex-col items-center text-center group">
            <div class="w-32 h-32 bg-white text-blue-800 flex flex-col justify-center items-center rounded-full shadow-lg group-hover:bg-yellow-400 transition duration-300 transform group-hover:-translate-y-2">
                 <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            </div>
            <p class="mt-4 font-semibold text-lg">Proses Termonitor</p>
        </div>

        {{-- Item 3: Proses Mudah --}}
        <div class="flex flex-col items-center text-center group">
            <div class="w-32 h-32 bg-white text-blue-800 flex flex-col justify-center items-center rounded-full shadow-lg group-hover:bg-yellow-400 transition duration-300 transform group-hover:-translate-y-2">
                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </div>
            <p class="mt-4 font-semibold text-lg">Proses Mudah</p>
        </div>

        {{-- Item 4: Unlimited Peserta --}}
        <div class="flex flex-col items-center text-center group">
            <div class="w-32 h-32 bg-white text-blue-800 flex flex-col justify-center items-center rounded-full shadow-lg group-hover:bg-yellow-400 transition duration-300 transform group-hover:-translate-y-2">
                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            </div>
            <p class="mt-4 font-semibold text-lg">Unlimited Peserta</p>
        </div>
        
        {{-- Item 5: Layanan Fleksibel --}}
        <div class="flex flex-col items-center text-center group">
            <div class="w-32 h-32 bg-white text-blue-800 flex flex-col justify-center items-center rounded-full shadow-lg group-hover:bg-yellow-400 transition duration-300 transform group-hover:-translate-y-2">
                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m12 0a2 2 0 100-4m0 4a2 2 0 110-4m-6 0a2 2 0 100-4m0 4a2 2 0 110-4"></path></svg>
            </div>
            <p class="mt-4 font-semibold text-lg">Layanan Fleksibel</p>
        </div>

        {{-- Item 6: Hasil Terverifikasi --}}
        <div class="flex flex-col items-center text-center group">
            <div class="w-32 h-32 bg-white text-blue-800 flex flex-col justify-center items-center rounded-full shadow-lg group-hover:bg-yellow-400 transition duration-300 transform group-hover:-translate-y-2">
                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <p class="mt-4 font-semibold text-lg">Hasil Terverifikasi</p>
        </div>

        {{-- Item 7: Opsi Kustomisasi --}}
        <div class="flex flex-col items-center text-center group">
            <div class="w-32 h-32 bg-white text-blue-800 flex flex-col justify-center items-center rounded-full shadow-lg group-hover:bg-yellow-400 transition duration-300 transform group-hover:-translate-y-2">
                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
            </div>
            <p class="mt-4 font-semibold text-lg">Opsi Kustomisasi</p>
        </div>

        {{-- Item 8: Tools Terkini --}}
        <div class="flex flex-col items-center text-center group">
            <div class="w-32 h-32 bg-white text-blue-800 flex flex-col justify-center items-center rounded-full shadow-lg group-hover:bg-yellow-400 transition duration-300 transform group-hover:-translate-y-2">
                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l-3 3m5.657 5.657l-3-3M4.343 4.343l3 3m-3 12.314l3-3m-3 0l3 3m5.657-5.657l3 3m-3 0l3-3m0-5.657l-3 3"></path></svg>
            </div>
            <p class="mt-4 font-semibold text-lg">Tools Terkini</p>
        </div>

    </div>

    <a href="{{ route('contact') }}" class="inline-block bg-white text-blue-600 font-bold px-8 py-4 rounded-full text-lg hover:bg-yellow-400 hover:text-blue-800 transition duration-300 mt-12 transform hover:scale-105">
        KONSULTASI SEKARANG
    </a>
  <p class="mt-8">
    <a href="{{ route('services') }}" class="inline-flex items-center px-6 py-2 font-semibold text-white border-2 border-white/50 rounded-full hover:bg-white hover:text-blue-600 hover:border-white transition-all duration-300 transform hover:scale-105 group">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
        </svg>
        Kembali ke Layanan
    </a>
</p>
</div>
@endsection