@extends('layouts.frontend') {{-- Pastikan ini mengacu pada layout utama Anda --}}

@section('title', 'Rekrutmen - Selaras Mitra Integra')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center p-8">
                {{-- Bagian Kiri: Gambar --}}
                <div>
                    <img src="{{ asset('images/rkrt.jpg') }}" alt="Ilustrasi Rekrutmen"
                        class="w-full h-auto rounded-lg shadow-md">
                    {{-- Pastikan Anda memiliki gambar ini di public/images/rekrutmen-main.jpg --}}
                </div>

                {{-- Bagian Kanan: Teks Rekrutmen --}}
                <div class="text-gray-800">
                    <h1 class="text-4xl font-bold text-blue-800 mb-4">REKRUTMEN</h1>
                    <p class="text-lg mb-4">
                        Menempatkan orang yang tepat dalam posisi yang tepat menjadi salah satu kunci kesuksesan bisnis.
                    </p>
                    <p class="text-lg mb-6">
                        Kami percaya bahwa organisasi membutuhkan sumber daya manusia yang dapat berkembang di dalam
                        organisasi secara produktif. Oleh karenanya, rekrutmen merupakan proses yang penting bagi suatu
                        organisasi untuk mendapatkan orang yang tepat untuk posisi yang tepat. PT Selaras Mitra Integra
                        menawarkan solusi yang terintegrasi untuk mencapai tujuan tersebut.
                    </p>
                    <p class="text-lg font-semibold mb-2">Layanan kami terdiri dari:</p>
                    <ul class="list-disc list-inside text-lg mb-6">
                        <li>Pencarian Kandidat</li>
                        <li>Proses Seleksi</li>
                    </ul>
                    <p class="text-right text-gray-600">

                        <a href="{{ route('services') }}" class="text-blue-600 hover:underline">Kembali ke menu layanan</a>
                    </p>
                    =======
                    <a href="{{ route('services') }}"
                        class="group inline-flex items-center px-6 py-3 text-lg font-bold text-white bg-blue-600 bg-opacity-100 rounded-xl border border-white border-opacity-30 hover:bg-opacity-40 hover:border-opacity-60 transition-all duration-500 ease-in-out transform hover:scale-110 hover:shadow-xl backdrop-blur-sm">
                        <span class="mr-3">Kembali ke Menu Layanan</span>
                        <svg class="w-5 h-5 transition-all duration-500 group-hover:translate-x-1" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                    >>>>>>> 6fe6716a8f0d790c6f92de5b6685062ca3f48df0
                </div>
            </div>
        </div>

        {{-- Bagian "Mengapa Memilih Kami" --}}
        <div class="bg-blue-600 text-white p-8 rounded-lg shadow-lg text-center mt-12">
            <h2 class="text-3xl font-bold mb-8">Mengapa memilih kami</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6 justify-items-center">
                {{-- Item 1: Kept Confidential --}}
                <div
                    class="w-32 h-32 bg-white text-blue-800 flex flex-col justify-center items-center transform rotate-45 rounded-lg shadow-md hover:-translate-y-1 transition duration-300">
                    <div class="transform -rotate-45 text-center p-2">
                        <span class="block font-semibold text-base md:text-lg">Kept</span>
                        <span class="block font-semibold text-base md:text-lg">Confidential</span>
                    </div>
                </div>
                {{-- Item 2: Monitoring Proses --}}
                <div
                    class="w-32 h-32 bg-yellow-400 text-blue-800 flex flex-col justify-center items-center transform rotate-45 rounded-lg shadow-md hover:-translate-y-1 transition duration-300">
                    <div class="transform -rotate-45 text-center p-2">
                        <span class="block font-semibold text-base md:text-lg">Monitoring</span>
                        <span class="block font-semibold text-base md:text-lg">Proses</span>
                    </div>
                </div>
                {{-- Item 3: Simple --}}
                <div
                    class="w-32 h-32 bg-white text-blue-800 flex flex-col justify-center items-center transform rotate-45 rounded-lg shadow-md hover:-translate-y-1 transition duration-300">
                    <div class="transform -rotate-45 text-center p-2">
                        <span class="block font-semibold text-base md:text-lg">Simple</span>
                    </div>
                </div>
                {{-- Item 4: Unlimited Participant --}}
                <div
                    class="w-32 h-32 bg-yellow-400 text-blue-800 flex flex-col justify-center items-center transform rotate-45 rounded-lg shadow-md hover:-translate-y-1 transition duration-300">
                    <div class="transform -rotate-45 text-center p-2">
                        <span class="block font-semibold text-base md:text-lg">Unlimited</span>
                        <span class="block font-semibold text-base md:text-lg">Participant</span>
                    </div>
                </div>
                {{-- Item 5: Fleksibel --}}
                <div
                    class="w-32 h-32 bg-white text-blue-800 flex flex-col justify-center items-center transform rotate-45 rounded-lg shadow-md hover:-translate-y-1 transition duration-300">
                    <div class="transform -rotate-45 text-center p-2">
                        <span class="block font-semibold text-base md:text-lg">Fleksibel</span>
                    </div>
                </div>
                {{-- Item 6: Hasil Terverifikasi --}}
                <div
                    class="w-32 h-32 bg-yellow-400 text-blue-800 flex flex-col justify-center items-center transform rotate-45 rounded-lg shadow-md hover:-translate-y-1 transition duration-300">
                    <div class="transform -rotate-45 text-center p-2">
                        <span class="block font-semibold text-base md:text-lg">Hasil</span>
                        <span class="block font-semibold text-base md:text-lg">Terverifikasi</span>
                    </div>
                </div>
                {{-- Item 7: Customize --}}
                <div
                    class="w-32 h-32 bg-white text-blue-800 flex flex-col justify-center items-center transform rotate-45 rounded-lg shadow-md hover:-translate-y-1 transition duration-300">
                    <div class="transform -rotate-45 text-center p-2">
                        <span class="block font-semibold text-base md:text-lg">Customize</span>
                    </div>
                </div>
                {{-- Item 8: Tools Up to Date --}}
                <div
                    class="w-32 h-32 bg-yellow-400 text-blue-800 flex flex-col justify-center items-center transform rotate-45 rounded-lg shadow-md hover:-translate-y-1 transition duration-300">
                    <div class="transform -rotate-45 text-center p-2">
                        <span class="block font-semibold text-base md:text-lg">Tools Up</span>
                        <span class="block font-semibold text-base md:text-lg">to Date</span>
                    </div>
                </div>
            </div>

            <a href="{{ route('contact') }}"
                class="inline-block bg-white text-blue-600 font-bold px-8 py-4 rounded-full text-lg hover:bg-gray-100 transition duration-300 mt-12">
                KONSULTASI SEKARANG
            </a>
            <p class="mt-4 text-gray-200">
                <a href="{{ route('services') }}" class="text-white hover:underline">Kembali ke menu layanan</a>
            </p>
        </div>
    </div>
@endsection
