@extends('layouts.frontend') {{-- Ensure this extends your main frontend layout --}}

@section('title', 'Seminar - Selaras Mitra Integra')

@section('content')
    <div class="container mx-auto px-4 py-8">
        {{-- Top Section: Image and Description --}}
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center p-8">
                {{-- Left/Right Section: Text (depending on screen size) --}}
                <div class="text-gray-800 order-2 md:order-1"> {{-- Order changed for mobile-first, text first --}}
                    <h1 class="text-4xl font-bold text-blue-800 mb-4">SEMINAR</h1>
                    <p class="text-lg font-semibold mb-4">
                        Peningkatan wawasan setiap individu untuk permasalahan secara mandiri
                    </p>
                    <p class="text-lg mb-6">
                        Kami membantu setiap peserta sejak level sekolah maupun dewasa untuk menerima berbagai wawasan baru yang sesuai dengan kebutuhan..
                    </p>
                    <p class="text-right text-gray-600">
                    </p>
                </div>

                {{-- Right/Left Section: Image --}}
                <div class="order-1 md:order-2"> {{-- Order changed for mobile-first, image second --}}
                    <img src="{{ asset('images/seminar-main.jpg') }}" alt="Ilustrasi Seminar" class="w-full h-auto rounded-lg shadow-md">
                    {{-- Make sure you have this image in public/images/seminar-main.jpg --}}
                </div>
            </div>
        </div>

        {{-- Bottom Section: Kategori Seminar --}}
        <div class="bg-white rounded-lg shadow-lg overflow-hidden p-8 mt-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
                {{-- Left Section: KATEGORI SEMINAR Heading --}}
                <div>
                    <h2 class="text-3xl font-bold text-blue-800 mb-8 md:mt-12">KATEGORI SEMINAR</h2>
                    <p class="mt-4 text-gray-600 md:text-left text-center">
                        <a href="{{ route('services') }}" class="group inline-flex items-center px-6 py-3 text-lg font-bold text-white bg-blue-600 bg-opacity-100 rounded-xl border border-white border-opacity-30 hover:bg-opacity-40 hover:border-opacity-60 transition-all duration-500 ease-in-out transform hover:scale-110 hover:shadow-xl backdrop-blur-sm">
                            <span class="mr-3">Kembali ke Menu Layanan</span>
                            <svg class="w-5 h-5 transition-all duration-500 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                </div>

                {{-- Right Section: Seminar Categories --}}
                <div class="space-y-6">
                    {{-- Kategori Anak --}}
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-24 h-24 rounded-lg overflow-hidden shadow-md">
                            <img src="{{ asset('images/seminar-anak.jpg') }}" alt="Kategori Anak" class="w-full h-full object-cover">
                            {{-- Placeholder, replace with actual image --}}
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Anak</h3>
                            <p class="text-gray-700 text-base">
                                Pemberian kepada anak sejak usia dini hingga sekolah menengah pertama. Beberapa diantaranya: pendidikan seks anak usia dini, bullying, pengenalan diri, dan lain sebagainya
                            </p>
                        </div>
                    </div>

                    {{-- Kategori Remaja --}}
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-24 h-24 rounded-lg overflow-hidden shadow-md">
                            <img src="{{ asset('images/seminar-remaja.jpg') }}" alt="Kategori Remaja" class="w-full h-full object-cover">
                            {{-- Placeholder, replace with actual image --}}
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Remaja</h3>
                            <p class="text-gray-700 text-base">
                                Seminar yang diberikan khusus untuk remaja dengan rentang usia 13 - 20 tahun. Menyediakan beberapa pilihan topik yang disesuaikan dengan kebutuhan remaja pada masanya dan dilakukan dengan metode yang atraktif
                            </p>
                        </div>
                    </div>

                    {{-- Kategori Dewasa --}}
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-24 h-24 rounded-lg overflow-hidden shadow-md">
                            <img src="{{ asset('images/seminar-dewasa.jpg') }}" alt="Kategori Dewasa" class="w-full h-full object-cover">
                            {{-- Placeholder, replace with actual image --}}
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Dewasa</h3>
                            <p class="text-gray-700 text-base">
                                Pemberian seminar di usia dewasa awal hingga menjadi orang tua dengan berbagai macam background, profesi, seminar yang kami adakan seputar parenting, mental health, pendidikan, dunia kerja, dan lain sebagainya
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection