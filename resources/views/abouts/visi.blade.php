@extends('layouts.frontend')

@section('title', 'Visi Misi - Selaras Mitra Integra')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-blue-50">
        {{-- Hero Section --}}
        <div class="relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-600 via-blue-700 to-blue-800"></div>
            <div class="absolute inset-0 bg-black opacity-10"></div>
            <div class="relative container mx-auto px-4 py-20">
                <div class="text-center text-white">
                    <h1 class="text-5xl md:text-7xl font-black mb-6 tracking-tight">
                        <span class="bg-gradient-to-r from-yellow-400 to-yellow-300 bg-clip-text text-transparent">VISI</span>
                        <span class="mx-4">•</span>
                        <span class="bg-gradient-to-r from-yellow-400 to-yellow-300 bg-clip-text text-transparent">MISI</span>
                        <span class="mx-4">•</span>
                        <span class="bg-gradient-to-r from-yellow-400 to-yellow-300 bg-clip-text text-transparent">VALUE</span>
                    </h1>
                    <p class="text-xl md:text-2xl text-blue-100 mb-8 max-w-3xl mx-auto font-light">
                        Fondasi yang mengarahkan setiap langkah perjalanan PT Selaras Mitra Integra
                    </p>
                    <div class="w-32 h-1 bg-gradient-to-r from-yellow-400 to-yellow-300 mx-auto rounded-full"></div>
                </div>
            </div>
        </div>

        {{-- Main Content --}}
        <div class="container mx-auto px-4 py-16">
            {{-- Visi Misi Value Cards --}}
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                {{-- VISI Card --}}
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-blue-700 rounded-3xl transform rotate-3 group-hover:rotate-6 transition-transform duration-500"></div>
                    <div class="relative bg-white rounded-3xl p-8 shadow-2xl transform group-hover:-translate-y-2 transition-all duration-500">
                        <div class="text-center mb-8">
                            <div class="w-16 h-16 bg-gradient-to-r from-blue-600 to-blue-700 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </div>
                            <h2 class="text-3xl font-black text-gray-800 mb-4">VISI</h2>
                        </div>
                        <div class="space-y-6 text-gray-700 leading-relaxed">
                            <div class="flex items-start">
                                <div class="w-3 h-3 bg-blue-500 rounded-full mt-2 mr-4 flex-shrink-0"></div>
                                <p class="text-base">
                                    Menjadi salah satu perusahaan multi usaha di Indonesia dengan pengelolaan terbaik yang mengedepankan kepuasan pelanggan melalui sumber daya manusia yang handal, struktur keuangan yang solid serta cara kerja yang efisien dan efektif.
                                </p>
                            </div>
                            <div class="flex items-start">
                                <div class="w-3 h-3 bg-blue-500 rounded-full mt-2 mr-4 flex-shrink-0"></div>
                                <p class="text-base">
                                    Menjadi perusahaan yang mempunyai tanggung jawab sosial terhadap lingkungan sekitar dimana usaha berada.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- MISI Card --}}
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-green-600 to-green-700 rounded-3xl transform -rotate-3 group-hover:-rotate-6 transition-transform duration-500"></div>
                    <div class="relative bg-white rounded-3xl p-8 shadow-2xl transform group-hover:-translate-y-2 transition-all duration-500">
                        <div class="text-center mb-8">
                            <div class="w-16 h-16 bg-gradient-to-r from-green-600 to-green-700 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h2 class="text-3xl font-black text-gray-800 mb-4">MISI</h2>
                        </div>
                        <div class="space-y-6 text-gray-700 leading-relaxed">
                            <div class="flex items-start">
                                <div class="w-3 h-3 bg-green-500 rounded-full mt-2 mr-4 flex-shrink-0"></div>
                                <p class="text-base">
                                    Memberikan layanan kepada pelanggan dan mitra bisnis dalam pelayanan bisnisnya
                                </p>
                            </div>
                            <div class="flex items-start">
                                <div class="w-3 h-3 bg-green-500 rounded-full mt-2 mr-4 flex-shrink-0"></div>
                                <p class="text-base">
                                    Menjadikan perusahaan sebagai tempat yang menyenangkan untuk bekerja bagi karyawannya
                                </p>
                            </div>
                            <div class="flex items-start">
                                <div class="w-3 h-3 bg-green-500 rounded-full mt-2 mr-4 flex-shrink-0"></div>
                                <p class="text-base">
                                    Berkeyakinan bahwa perusahaan dihargai sebagai investasi yang menguntungkan bagi pemegang saham
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- VALUE Card --}}
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-purple-700 rounded-3xl transform rotate-2 group-hover:rotate-4 transition-transform duration-500"></div>
                    <div class="relative bg-white rounded-3xl p-8 shadow-2xl transform group-hover:-translate-y-2 transition-all duration-500">
                        <div class="text-center mb-8">
                            <div class="w-16 h-16 bg-gradient-to-r from-purple-600 to-purple-700 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </div>
                            <h2 class="text-3xl font-black text-gray-800 mb-4">VALUE</h2>
                        </div>
                        <div class="space-y-4 text-gray-700">
                            <div class="flex items-center p-3 rounded-xl bg-purple-50 hover:bg-purple-100 transition-colors duration-300">
                                <div class="w-3 h-3 bg-purple-500 rounded-full mr-4 flex-shrink-0"></div>
                                <p class="text-base font-medium">Team Work & Sinergy</p>
                            </div>
                            <div class="flex items-center p-3 rounded-xl bg-purple-50 hover:bg-purple-100 transition-colors duration-300">
                                <div class="w-3 h-3 bg-purple-500 rounded-full mr-4 flex-shrink-0"></div>
                                <p class="text-base font-medium">Next process is our customer</p>
                            </div>
                            <div class="flex items-center p-3 rounded-xl bg-purple-50 hover:bg-purple-100 transition-colors duration-300">
                                <div class="w-3 h-3 bg-purple-500 rounded-full mr-4 flex-shrink-0"></div>
                                <p class="text-base font-medium">Positive Thinking and Open Mind</p>
                            </div>
                            <div class="flex items-center p-3 rounded-xl bg-purple-50 hover:bg-purple-100 transition-colors duration-300">
                                <div class="w-3 h-3 bg-purple-500 rounded-full mr-4 flex-shrink-0"></div>
                                <p class="text-base font-medium">Strive for Excellent</p>
                            </div>
                            <div class="flex items-center p-3 rounded-xl bg-purple-50 hover:bg-purple-100 transition-colors duration-300">
                                <div class="w-3 h-3 bg-purple-500 rounded-full mr-4 flex-shrink-0"></div>
                                <p class="text-base font-medium">Continous Improvement</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Call to Action --}}
            <div class="text-center mt-20">
                <div class="max-w-4xl mx-auto">
                    <h3 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">
                        Wujudkan Visi Bersama Kami
                    </h3>
                    <p class="text-xl text-gray-600 mb-10 leading-relaxed">
                        Bergabunglah dengan PT Selaras Mitra Integra dalam menciptakan solusi terbaik untuk pengembangan human capital dan organisasi.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                        <a href="{{ route('contact') }}" class="group relative inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-bold rounded-full text-lg shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
                            <span class="relative z-10">HUBUNGI KAMI</span>
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                        <a href="{{ route('services') }}" class="inline-flex items-center px-8 py-4 border-2 border-blue-600 text-blue-600 font-bold rounded-full text-lg hover:bg-blue-600 hover:text-white transition-all duration-300">
                            Lihat Layanan Kami
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
