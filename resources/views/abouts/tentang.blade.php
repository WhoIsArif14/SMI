@extends('layouts.frontend')

@section('title', 'Tentang Kami - Selaras Mitra Integra')

@section('content')
    <div class="container mx-auto px-4 py-8">
        {{-- Hero Section --}}
        <div class="bg-gradient-to-r from-blue-600 to-blue-800 rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="p-8 text-white">
                <div class="text-center">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">Tentang Kami</h1>
                    <p class="text-xl md:text-2xl text-blue-100 mb-6">
                        PT Selaras Mitra Integra - Mitra Terpercaya dalam Solusi Human Resource
                    </p>
                    <div class="w-24 h-1 bg-yellow-400 mx-auto"></div>
                </div>
            </div>
        </div>

        {{-- Company Overview --}}
        <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Profil Perusahaan</h2>
                    <p class="text-lg text-gray-700 mb-4">
                        <span class="font-semibold text-blue-800">PT Selaras Mitra Integra</span> merupakan konsultan yang fokus pada pengembangan human capital dan organisasi. Kami menggunakan pendekatan yang humanis dan metode-metode yang reliabel untuk membantu setiap human capital dan organisasi untuk berkembang.
                    </p>
                    <p class="text-lg text-gray-700 mb-4">
                        Kami mengkombinasikan <span class="font-semibold text-green-600">teori dan praktik human resource</span> sebagai pendekatan yang diterapkan. Kami percaya bahwa <span class="font-bold text-blue-700">manusia merupakan aset yang paling penting</span> bagi organisasi.
                    </p>
                    <p class="text-lg text-gray-700">
                        Paradigma ini memberi kami <span class="font-semibold text-yellow-600">perspektif yang unik</span> dalam mencari solusi yang holistik akan masalah human capital dan organisasi.
                    </p>
                </div>
                <div class="text-center">
                    <img src="{{ asset('images/smi.png') }}" alt="Logo PT Selaras Mitra Integra" class="w-64 h-auto mx-auto mb-4"
                </div>
            </div>
        </div>

        {{-- Office Locations --}}
        <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-lg shadow-lg p-8 mb-8">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-8">Lokasi Kantor Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                {{-- Head Office --}}
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-blue-800">HEAD OFFICE</h3>
                    </div>
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-gray-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <p class="text-gray-700 font-medium">Jl Ketintang Madya no 80 Surabaya</p>
                    </div>
                </div>

                {{-- Representative Office Semarang --}}
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-green-800">REPRESENTATIVE OFFICE</h3>
                    </div>
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-gray-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <p class="text-gray-700 font-medium">Ruko Bringin, Jl KRT Wongsonegoro (Depan SMAN 8 Semarang) Jawa Tengah</p>
                    </div>
                </div>

                {{-- Representative Office Jakarta --}}
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-purple-800">REPRESENTATIVE OFFICE</h3>
                    </div>
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-gray-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <p class="text-gray-700 font-medium">Kebagusan City 1 KC 28 Jalan Raya Baung Kebagusan Pasar Minggu Jakarta Selatan</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Our Values --}}
        <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-8">Nilai-Nilai Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                {{-- Professional --}}
                <div class="text-center p-6 rounded-lg bg-blue-50 hover:bg-blue-100 transition-all duration-300">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-blue-800 mb-2">Professional</h3>
                    <p class="text-gray-700">Memberikan layanan dengan standar profesional tertinggi</p>
                </div>

                {{-- Trusted --}}
                <div class="text-center p-6 rounded-lg bg-green-50 hover:bg-green-100 transition-all duration-300">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-green-800 mb-2">Trusted</h3>
                    <p class="text-gray-700">Dipercaya oleh lebih dari 100 perusahaan di Indonesia</p>
                </div>

                {{-- Innovative --}}
                <div class="text-center p-6 rounded-lg bg-purple-50 hover:bg-purple-100 transition-all duration-300">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-purple-800 mb-2">Innovative</h3>
                    <p class="text-gray-700">Menghadirkan solusi inovatif untuk kebutuhan HR modern</p>
                </div>
            </div>
        </div>

        {{-- Connect With Us --}}
        <div class="bg-gradient-to-r from-blue-600 to-blue-800 rounded-lg shadow-lg p-8 text-white text-center">
            <h2 class="text-3xl font-bold mb-4">Terhubung Dengan Kami</h2>
            <p class="text-xl text-blue-100 mb-8">
                Ikuti media sosial kami untuk mendapatkan update terbaru dan informasi menarik
            </p>
            
            {{-- Social Media Links --}}
            <div class="flex justify-center mb-8">
                <x-social-media size="w-8 h-8" />
            </div>

            {{-- Contact Information --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div class="bg-blue-700 rounded-lg p-6">
                    <div class="flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-blue-200 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <h3 class="text-xl font-bold">Email</h3>
                    </div>
                    <p class="text-blue-100 text-lg">{{ config('social.contact.email', 'info@selarasmitraintegra.com') }}</p>
                </div>

                <div class="bg-blue-700 rounded-lg p-6">
                    <div class="flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-blue-200 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <h3 class="text-xl font-bold">Telepon</h3>
                    </div>
                    <p class="text-blue-100 text-lg">{{ config('social.contact.phone', '+62-31-1234-5678') }}</p>
                </div>
            </div>

            {{-- Call to Action --}}
            <div class="mt-12">
                <a href="{{ route('contact') }}" class="inline-block bg-yellow-400 text-blue-800 font-bold px-8 py-4 rounded-full text-lg hover:bg-yellow-300 transition duration-300 shadow-lg">
                    HUBUNGI KAMI SEKARANG
                </a>
                <p class="mt-4 text-blue-200">
                   <a href="{{ route('services') }}" class="group inline-flex items-center px-6 py-3 text-lg font-bold text-white bg-blue-600 bg-opacity-20 rounded-xl border border-white border-opacity-30 hover:bg-opacity-40 hover:border-opacity-60 transition-all duration-500 ease-in-out transform hover:scale-110 hover:shadow-xl backdrop-blur-sm">
                            <span class="mr-3">Lihat Layanan Kami</span>
                            <svg class="w-5 h-5 transition-all duration-500 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                </p>
            </div>
        </div>
    </div>
@endsection
