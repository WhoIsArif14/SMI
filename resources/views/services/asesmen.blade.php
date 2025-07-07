@extends('layouts.frontend') {{-- Pastikan ini mengacu pada layout utama Anda --}}

@section('title', 'Asesmen - Selaras Mitra Integra')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center p-8">
                {{-- Bagian Kiri: Gambar --}}
                <div>
                    <img src="{{ asset('images/asesmen.jpg') }}" alt="Ilustrasi Asesmen" class="w-full h-auto rounded-lg shadow-md">
                    {{-- Pastikan Anda memiliki gambar ini di public/images/assesment-main.jpg --}}
                </div>

                {{-- Bagian Kanan: Teks Asesmen --}}
                <div class="text-gray-800">
                    <h1 class="text-4xl font-bold text-blue-800 mb-4">ASESMEN</h1>
                    <p class="text-lg mb-4">
                        Eksplorasi Mendalam tentang Asesmen: Temukan Metode Terbaik untuk Evaluasi Kinerja.
                    </p>
                    <p class="text-lg mb-6">
                        PT Selaras Mitra Integra menggunakan pendekatan holistik untuk menganalisa individu, yang meliputi motif tersembunyi serta perilaku aktual, yang diukur dengan alat-alat psikotes yang bervariasi. Standar kami juga termasuk pertemuan para assessor untuk memastikan objektivitas data dan independensi assessor. Kami menggunakan standar tersebut dalam melaksanakan assessment dengan tujuan tertentu.
                    </p>
                    <p class="text-right text-gray-600">
                        <a href="{{ route('services') }}" class="group inline-flex items-center px-6 py-3 text-lg font-bold text-white bg-blue-600 bg-opacity-100 rounded-xl border border-white border-opacity-30 hover:bg-opacity-40 hover:border-opacity-60 transition-all duration-500 ease-in-out transform hover:scale-110 hover:shadow-xl backdrop-blur-sm">
                            <span class="mr-3">Kembali ke Menu Layanan</span>
                            <svg class="w-5 h-5 transition-all duration-500 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                    </p>
                </div>
            </div>
        </div>

        {{-- Bagian "Mengapa Memilih Kami" (disesuaikan dengan gaya Asesmen) --}}
        <div class="bg-blue-600 text-white p-8 rounded-lg shadow-lg text-center mt-12 relative overflow-hidden">
            <h2 class="text-3xl font-bold mb-8">Mengapa memilih kami</h2>

            {{-- Bentuk Panah Besar di background (opsional, sesuaikan dengan desain Anda) --}}
            <div class="absolute inset-0 bg-gradient-to-br from-blue-700 to-blue-500 opacity-20 transform -skew-y-3 scale-150 z-0"></div>
            <div class="absolute right-0 bottom-0 text-blue-500 opacity-30 z-0" style="font-size: 150px; line-height: 1;">
                &uarr; {{-- Panah ke atas, bisa diganti SVG atau gambar --}}
            </div>


            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6 justify-items-center relative z-10">
                {{-- Item 1: Kept Confidential --}}
                <div class="w-32 h-32 bg-white text-blue-800 flex flex-col justify-center items-center rounded-full shadow-md hover:-translate-y-1 transition duration-300">
                    <div class="text-center p-2">
                        <span class="block font-semibold text-base md:text-lg">Kept</span>
                        <span class="block font-semibold text-base md:text-lg">Confidential</span>
                    </div>
                </div>
                {{-- Item 2: Monitoring Proses --}}
                <div class="w-32 h-32 bg-yellow-400 text-blue-800 flex flex-col justify-center items-center rounded-full shadow-md hover:-translate-y-1 transition duration-300">
                    <div class="text-center p-2">
                        <span class="block font-semibold text-base md:text-lg">Monitoring</span>
                        <span class="block font-semibold text-base md:text-lg">Prose</span>
                    </div>
                </div>
                {{-- Item 3: Simple --}}
                <div class="w-32 h-32 bg-white text-blue-800 flex flex-col justify-center items-center rounded-full shadow-md hover:-translate-y-1 transition duration-300">
                    <div class="text-center p-2">
                        <span class="block font-semibold text-base md:text-lg">Simple</span>
                    </div>
                </div>
                {{-- Item 4: Unlimited Participant --}}
                <div class="w-32 h-32 bg-yellow-400 text-blue-800 flex flex-col justify-center items-center rounded-full shadow-md hover:-translate-y-1 transition duration-300">
                    <div class="text-center p-2">
                        <span class="block font-semibold text-base md:text-lg">Unlimited</span>
                        <span class="block font-semibold text-base md:text-lg">Participant</span>
                    </div>
                </div>
                {{-- Item 5: Fleksibel --}}
                <div class="w-32 h-32 bg-white text-blue-800 flex flex-col justify-center items-center rounded-full shadow-md hover:-translate-y-1 transition duration-300">
                    <div class="text-center p-2">
                        <span class="block font-semibold text-base md:text-lg">Fleksibel</span>
                    </div>
                </div>
                {{-- Item 6: Hasil Terverifikasi --}}
                <div class="w-32 h-32 bg-yellow-400 text-blue-800 flex flex-col justify-center items-center rounded-full shadow-md hover:-translate-y-1 transition duration-300">
                    <div class="text-center p-2">
                        <span class="block font-semibold text-base md:text-lg">Hasil</span>
                        <span class="block font-semibold text-base md:text-lg">Terverifikasi</span>
                    </div>
                </div>
                {{-- Item 7: Customize --}}
                <div class="w-32 h-32 bg-white text-blue-800 flex flex-col justify-center items-center rounded-full shadow-md hover:-translate-y-1 transition duration-300">
                    <div class="text-center p-2">
                        <span class="block font-semibold text-base md:text-lg">Customize</span>
                    </div>
                </div>
                {{-- Item 8: Tools Up to Date --}}
                <div class="w-32 h-32 bg-yellow-400 text-blue-800 flex flex-col justify-center items-center rounded-full shadow-md hover:-translate-y-1 transition duration-300">
                    <div class="text-center p-2">
                        <span class="block font-semibold text-base md:text-lg">Tools Up</span>
                        <span class="block font-semibold text-base md:text-lg">to Date</span>
                    </div>
                </div>
            </div>

            <a href="{{ route('contact') }}" class="inline-block bg-white text-blue-600 font-bold px-8 py-4 rounded-full text-lg hover:bg-gray-100 transition duration-300 mt-12 relative z-10">
                KONSULTASI SEKARANG
            </a>
            <p class="mt-4 text-gray-200 relative z-10">
                
            </p>
        </div>
    </div>
@endsection