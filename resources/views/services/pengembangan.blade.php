@extends('layouts.frontend')

@section('title', 'Pengembangan - Selaras Mitra Integra')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center p-8">
                {{-- Bagian Kiri: Gambar --}}
                <div>
                    <img src="{{ asset('images/pengembangan-main.jpg') }}" alt="Ilustrasi Pengembangan" class="w-full h-auto rounded-lg shadow-md">
                </div>

                {{-- Bagian Kanan: Teks Pengembangan --}}
                <div class="text-gray-800">
                    <h1 class="text-4xl font-bold text-blue-800 mb-4">PENGEMBANGAN</h1>
                    <p class="text-lg mb-4">
                        Solusi Komprehensif untuk Pengembangan Organisasi dan Sumber Daya Manusia.
                    </p>
                    <p class="text-lg mb-6">
                        PT Selaras Mitra Integra menyediakan layanan pengembangan organisasi yang komprehensif dan disesuaikan dengan kebutuhan spesifik perusahaan Anda. Dengan tim ahli yang berpengalaman di bidang HR dan pengembangan organisasi, kami membantu perusahaan mencapai tujuan strategis melalui peningkatan kualitas sumber daya manusia dan optimalisasi sistem organisasi.
                    </p>
                    <p class="text-right text-gray-600">
                       
                    </p>
                </div>
            </div>
        </div>

        {{-- Bagian "Keunggulan Layanan Kami" --}}
        <div class="bg-blue-600 text-white p-8 rounded-lg shadow-lg text-center mt-12 relative overflow-hidden">
            <h2 class="text-3xl font-bold mb-8">Keunggulan Layanan Kami</h2>

            {{-- Background decorative elements --}}
            <div class="absolute inset-0 bg-gradient-to-br from-blue-700 to-blue-500 opacity-20 transform -skew-y-3 scale-150 z-0"></div>
            <div class="absolute right-0 bottom-0 text-blue-500 opacity-30 z-0" style="font-size: 150px; line-height: 1;">
                ⚡
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 justify-items-center relative z-10 max-w-4xl mx-auto">
                {{-- Card 1: Customizable Services --}}
                <div class="bg-white text-blue-800 p-8 rounded-lg shadow-md hover:shadow-xl transition duration-300 transform hover:-translate-y-2 w-full max-w-md">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-blue-800">Customizable Services</h3>
                    <p class="text-gray-700 text-lg leading-relaxed">
                        Layanan yang dapat disesuaikan dengan kebutuhan spesifik perusahaan Anda. Kami memahami bahwa setiap organisasi memiliki tantangan dan tujuan yang unik, sehingga solusi yang kami tawarkan dirancang khusus untuk memenuhi kebutuhan individual perusahaan.
                    </p>
                </div>

                {{-- Card 2: Expert Human Resource --}}
                <div class="bg-white text-blue-800 p-8 rounded-lg shadow-md hover:shadow-xl transition duration-300 transform hover:-translate-y-2 w-full max-w-md">
                    <div class="w-20 h-20 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-blue-800">Expert Human Resource</h3>
                    <p class="text-gray-700 text-lg leading-relaxed">
                        Tim ahli yang berkompetensi dan berpengalaman di bidang HR dan pengembangan organisasi. Dengan latar belakang yang kuat dalam psikologi industri dan manajemen SDM, kami mampu memberikan solusi yang efektif dan berkelanjutan untuk pengembangan organisasi Anda.
                    </p>
                </div>
            </div>

            {{-- Layanan Tambahan --}}
            <div class="mt-12 relative z-10">
                <h3 class="text-2xl font-bold mb-6 text-white">Layanan Pengembangan Kami Meliputi:</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 max-w-4xl mx-auto">
                    <div class="bg-blue-700 p-4 rounded-lg">
                        <h4 class="font-semibold text-lg mb-2">Organizational Development</h4>
                        <p class="text-blue-200">Pengembangan struktur dan budaya organisasi</p>
                    </div>
                    <div class="bg-blue-700 p-4 rounded-lg">
                        <h4 class="font-semibold text-lg mb-2">Leadership Development</h4>
                        <p class="text-blue-200">Pengembangan kepemimpinan dan manajemen</p>
                    </div>
                    <div class="bg-blue-700 p-4 rounded-lg">
                        <h4 class="font-semibold text-lg mb-2">Strategic Planning</h4>
                        <p class="text-blue-200">Perencanaan strategis dan implementasi</p>
                    </div>
                </div>
            </div>

            <a href="{{ route('contact') }}" class="inline-block bg-yellow-400 text-blue-800 font-bold px-8 py-4 rounded-full text-lg hover:bg-yellow-500 transition duration-300 mt-12 relative z-10 shadow-lg">
                KONSULTASI SEKARANG
            </a>
            <a href="{{ route('services') }}" class="group inline-flex items-center px-6 py-3 text-lg font-bold text-white bg-blue-600 bg-opacity-100 rounded-xl border border-white border-opacity-30 hover:bg-opacity-40 hover:border-opacity-60 transition-all duration-500 ease-in-out transform hover:scale-110 hover:shadow-xl backdrop-blur-sm">
                            <span class="mr-3">Kembali ke Menu Layanan</span>
                            <svg class="w-5 h-5 transition-all duration-500 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
        </div>

        {{-- Bagian Proses Pengembangan --}}
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mt-12 p-8">
            <h2 class="text-3xl font-bold text-blue-800 mb-8 text-center">Proses Pengembangan</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-blue-600">1</span>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Analisis Kebutuhan</h3>
                    <p class="text-gray-600">Identifikasi kebutuhan pengembangan organisasi</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-blue-600">2</span>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Desain Program</h3>
                    <p class="text-gray-600">Merancang program pengembangan yang sesuai</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-blue-600">3</span>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Implementasi</h3>
                    <p class="text-gray-600">Pelaksanaan program pengembangan</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-blue-600">4</span>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Evaluasi</h3>
                    <p class="text-gray-600">Monitoring dan evaluasi hasil pengembangan</p>
                </div>
            </div>
        </div>
    </div>
@endsection
