@extends('layouts.frontend')
@section('title', 'SMI - Tentang Kami')

@section('content')

    <div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-blue-50">
        {{-- Hero Section --}}
        <div class="relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-600 via-blue-700 to-blue-800"></div>
            <div class="absolute inset-0 bg-black opacity-10"></div>
            <div class="relative container mx-auto px-4 py-20">
                <div class="text-center text-white">
                    <h1 class="text-5xl md:text-7xl font-black mb-6 tracking-tight">
                        <span class="bg-gradient-to-r from-yellow-400 to-yellow-300 bg-clip-text text-transparent">TENTANG</span>
                        <span class="mx-4">•</span>
                        <span class="bg-gradient-to-r from-yellow-400 to-yellow-300 bg-clip-text text-transparent">KAMI</span>
                    </h1>
                    <p class="text-xl md:text-2xl text-blue-100 mb-8 max-w-4xl mx-auto font-light">
                        Mengenal lebih dekat PT Selaras Mitra Integra - Mitra Terpercaya dalam Solusi Human Resource
                    </p>
                    <div class="w-32 h-1 bg-gradient-to-r from-yellow-400 to-yellow-300 mx-auto rounded-full"></div>
                </div>
            </div>
        </div>

        {{-- Section 1: Tentang Kami --}}
        <div class="container mx-auto px-4 py-16">
            <div class="bg-white rounded-lg shadow-lg p-8 mb-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    {{-- Kolom Kiri: Teks Profil Perusahaan --}}
                    <div>
                        <h2 class="text-3xl font-bold text-gray-800 mb-6">Profil Perusahaan</h2>
                        
                        <p class="text-lg text-gray-700 mb-4 text-justify">
                            <span class="font-semibold text-blue-800">PT Selaras Mitra Integra</span> merupakan konsultan yang
                            fokus pada pengembangan human capital dan organisasi. Kami menggunakan pendekatan yang humanis dan
                            metode-metode yang reliabel untuk membantu setiap human capital dan organisasi untuk berkembang.
                        </p>
                        
                        <p class="text-lg text-gray-700 mb-4 text-justify">
                            Kami mengkombinasikan <span class="font-semibold text-amber-600">teori dan praktik human
                                resource</span> sebagai pendekatan yang diterapkan. Kami percaya bahwa <span
                                class="font-bold text-blue-700">manusia merupakan aset yang paling penting</span> bagi
                            organisasi.
                        </p>
                        
                        <p class="text-lg text-gray-700 text-justify">
                            Paradigma ini memberi kami <span class="font-semibold text-yellow-600">perspektif yang unik</span>
                            dalam mencari solusi yang holistik akan masalah human capital dan organisasi.
                        </p>
                    </div>

                    {{-- Kolom Kanan: Gambar Logo --}}
                    <div>
                        <img src="{{ asset('images/smi.png') }}" alt="Logo PT Selaras Mitra Integra"
                            class="w-64 h-auto mx-auto">
                    </div>
                </div>

                {{-- Office Locations --}}
                <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-lg shadow-lg p-8 mt-8">
                    <h2 class="text-3xl font-bold text-gray-800 text-center mb-8">Lokasi Kantor Kami</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        {{-- Head Office --}}
                        <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                        </path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-blue-800">HEAD OFFICE</h3>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-gray-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <p class="text-gray-700 font-medium">Jl Ketintang Madya no 80 Surabaya</p>
                            </div>
                        </div>

                        {{-- Representative Office Semarang --}}
                        <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                        </path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-amber-800">REPRESENTATIVE OFFICE</h3>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-gray-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <p class="text-gray-700 font-medium">Ruko Bringin, Jl KRT Wongsonegoro (Depan SMAN 8 Semarang) Jawa Tengah</p>
                            </div>
                        </div>

                        {{-- Representative Office Jakarta --}}
                        <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                        </path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-amber-800">REPRESENTATIVE OFFICE</h3>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-gray-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <p class="text-gray-700 font-medium">Kebagusan City 1 KC 28 Jalan Raya Baung Kebagusan Pasar Minggu Jakarta Selatan</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Our Values --}}
                <div class="bg-white rounded-lg shadow-lg p-8 mt-8">
                    <h2 class="text-3xl font-bold text-gray-800 text-center mb-8">Nilai-Nilai Kami</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        {{-- Professional --}}
                        <div class="text-center p-6 rounded-lg bg-blue-50 hover:bg-blue-100 transition-all duration-300">
                            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-blue-800 mb-2">Professional</h3>
                            <p class="text-gray-700">Memberikan layanan dengan standar profesional tertinggi</p>
                        </div>

                        {{-- Trusted --}}
                        <div class="text-center p-6 rounded-lg bg-amber-50 hover:bg-amber-100 transition-all duration-300">
                            <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-amber-800 mb-2">Trusted</h3>
                            <p class="text-gray-700">Dipercaya oleh lebih dari 100 perusahaan di Indonesia</p>
                        </div>

                        {{-- Innovative --}}
                        <div class="text-center p-6 rounded-lg bg-amber-50 hover:bg-amber-100 transition-all duration-300">
                            <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-amber-800 mb-2">Innovative</h3>
                            <p class="text-gray-700">Menghadirkan solusi inovatif untuk kebutuhan HR modern</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Section 2: Visi Misi Value --}}
        <div class="container mx-auto px-4 py-16">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-black bg-gradient-to-r from-blue-800 via-purple-600 to-indigo-700 bg-clip-text text-transparent mb-4 tracking-tight">
                    VISI • MISI • VALUE
                </h2>
                <p class="text-xl text-gray-600 font-light max-w-3xl mx-auto">
                    Fondasi yang mengarahkan setiap langkah perjalanan PT Selaras Mitra Integra
                </p>
            </div>

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
                    <div class="absolute inset-0 bg-gradient-to-r from-amber-500 to-amber-600 rounded-3xl transform -rotate-3 group-hover:-rotate-6 transition-transform duration-500"></div>
                    <div class="relative bg-white rounded-3xl p-8 shadow-2xl transform group-hover:-translate-y-2 transition-all duration-500">
                        <div class="text-center mb-8">
                            <div class="w-16 h-16 bg-gradient-to-r from-amber-500 to-amber-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h2 class="text-3xl font-black text-gray-800 mb-4">MISI</h2>
                        </div>
                        <div class="space-y-6 text-gray-700 leading-relaxed">
                            <div class="flex items-start">
                                <div class="w-3 h-3 bg-amber-500 rounded-full mt-2 mr-4 flex-shrink-0"></div>
                                <p class="text-base">
                                    Memberikan layanan kepada pelanggan dan mitra bisnis dalam pelayanan bisnisnya
                                </p>
                            </div>
                            <div class="flex items-start">
                                <div class="w-3 h-3 bg-amber-500 rounded-full mt-2 mr-4 flex-shrink-0"></div>
                                <p class="text-base">
                                    Menjadikan perusahaan sebagai tempat yang menyenangkan untuk bekerja bagi karyawannya
                                </p>
                            </div>
                            <div class="flex items-start">
                                <div class="w-3 h-3 bg-amber-500 rounded-full mt-2 mr-4 flex-shrink-0"></div>
                                <p class="text-base">
                                    Berkeyakinan bahwa perusahaan dihargai sebagai investasi yang menguntungkan bagi pemegang saham
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- VALUE Card --}}
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-blue-700 rounded-3xl transform rotate-2 group-hover:rotate-4 transition-transform duration-500"></div>
                    <div class="relative bg-white rounded-3xl p-8 shadow-2xl transform group-hover:-translate-y-2 transition-all duration-500">
                        <div class="text-center mb-8">
                            <div class="w-16 h-16 bg-gradient-to-r from-blue-600 to-blue-700 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </div>
                            <h2 class="text-3xl font-black text-gray-800 mb-4">VALUE</h2>
                        </div>
                        <div class="space-y-4 text-gray-700">
                            <div class="flex items-center p-3 rounded-xl bg-blue-50 hover:bg-blue-100 transition-colors duration-300">
                                <div class="w-3 h-3 bg-blue-500 rounded-full mr-4 flex-shrink-0"></div>
                                <p class="text-base font-medium">Team Work & Sinergy</p>
                            </div>
                            <div class="flex items-center p-3 rounded-xl bg-blue-50 hover:bg-blue-100 transition-colors duration-300">
                                <div class="w-3 h-3 bg-blue-500 rounded-full mr-4 flex-shrink-0"></div>
                                <p class="text-base font-medium">Next process is our customer</p>
                            </div>
                            <div class="flex items-center p-3 rounded-xl bg-blue-50 hover:bg-blue-100 transition-colors duration-300">
                                <div class="w-3 h-3 bg-blue-500 rounded-full mr-4 flex-shrink-0"></div>
                                <p class="text-base font-medium">Positive Thinking and Open Mind</p>
                            </div>
                            <div class="flex items-center p-3 rounded-xl bg-blue-50 hover:bg-blue-100 transition-colors duration-300">
                                <div class="w-3 h-3 bg-blue-500 rounded-full mr-4 flex-shrink-0"></div>
                                <p class="text-base font-medium">Strive for Excellent</p>
                            </div>
                            <div class="flex items-center p-3 rounded-xl bg-blue-50 hover:bg-blue-100 transition-colors duration-300">
                                <div class="w-3 h-3 bg-blue-500 rounded-full mr-4 flex-shrink-0"></div>
                                <p class="text-base font-medium">Continous Improvement</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Section 3: Milestone --}}
        <div class="py-12 px-4 relative min-h-screen" style="overflow: visible;">
            <!-- Background Bubbles -->
            <div class="absolute inset-0 pointer-events-none" style="overflow: hidden;">
                <!-- Large Bubbles -->
                <div class="absolute top-20 left-8 w-40 h-40 bg-gradient-to-br from-blue-200 to-blue-300 rounded-full opacity-15 animate-float-slow"></div>
                <div class="absolute top-40 right-16 w-32 h-32 bg-gradient-to-br from-purple-200 to-purple-300 rounded-full opacity-20 animate-float-slow-delay-1"></div>
                <div class="absolute bottom-32 left-24 w-48 h-48 bg-gradient-to-br from-indigo-200 to-indigo-300 rounded-full opacity-12 animate-float-slow-delay-2"></div>
                <div class="absolute bottom-16 right-8 w-36 h-36 bg-gradient-to-br from-cyan-200 to-cyan-300 rounded-full opacity-18 animate-float-slow-delay-3"></div>
                
                <!-- Medium Bubbles -->
                <div class="absolute top-32 left-1/3 w-24 h-24 bg-gradient-to-br from-yellow-200 to-yellow-300 rounded-full opacity-25 animate-float-medium"></div>
                <div class="absolute top-56 right-1/3 w-28 h-28 bg-gradient-to-br from-pink-200 to-pink-300 rounded-full opacity-22 animate-float-medium-delay-1"></div>
                <div class="absolute bottom-56 left-1/4 w-20 h-20 bg-gradient-to-br from-green-200 to-green-300 rounded-full opacity-30 animate-float-medium-delay-2"></div>
                <div class="absolute bottom-40 right-1/4 w-26 h-26 bg-gradient-to-br from-orange-200 to-orange-300 rounded-full opacity-28 animate-float-medium-delay-3"></div>
                
                <!-- Small Bubbles -->
                <div class="absolute top-16 left-2/3 w-12 h-12 bg-gradient-to-br from-blue-300 to-blue-400 rounded-full opacity-35 animate-bounce-slow"></div>
                <div class="absolute top-48 right-2/3 w-16 h-16 bg-gradient-to-br from-purple-300 to-purple-400 rounded-full opacity-32 animate-bounce-slow-delay-1"></div>
                <div class="absolute bottom-48 left-3/4 w-10 h-10 bg-gradient-to-br from-indigo-300 to-indigo-400 rounded-full opacity-40 animate-bounce-slow-delay-2"></div>
                <div class="absolute bottom-24 right-3/4 w-18 h-18 bg-gradient-to-br from-cyan-300 to-cyan-400 rounded-full opacity-33 animate-bounce-slow-delay-3"></div>
            </div>
            
            <!-- Main Content -->
            <div class="container mx-auto max-w-7xl relative z-10">
                <!-- Header Section -->
                <div class="text-center mb-16">
                    <h1 class="text-5xl md:text-7xl font-extrabold bg-gradient-to-r from-blue-600 via-blue-800 to-indigo-900 bg-clip-text text-transparent mb-6 leading-tight tracking-tight animate-fade-in">
                        <span class="block font-black">Milestone</span>
                        <span class="block text-3xl md:text-4xl font-light mt-2 text-gray-700">Perjalanan Kesuksesan Kami</span>
                    </h1>
                    <p class="text-xl md:text-2xl text-gray-600 font-light leading-relaxed tracking-wide max-w-4xl mx-auto">
                        Mengenang perjalanan panjang <span class="font-semibold text-blue-700">PT Selaras Mitra Integra</span> dalam memberikan 
                        <span class="font-semibold text-yellow-400">solusi terbaik</span> untuk kebutuhan Human Resource Consultant selama lebih dari 
                        <span class="font-bold text-yellow-600">10 tahun</span>.
                    </p>
                </div>

                <!-- Milestone Image Section -->
                <div class="mb-16 relative">
                    <div class="relative max-w-6xl mx-auto">
                        <!-- Decorative Elements Behind Image -->
                        <div class="absolute -top-6 -left-6 w-full h-full bg-gradient-to-br from-blue-100 to-purple-100 rounded-2xl opacity-30 transform rotate-2"></div>
                        <div class="absolute -bottom-6 -right-6 w-full h-full bg-gradient-to-br from-yellow-100 to-orange-100 rounded-2xl opacity-25 transform -rotate-1"></div>
                        
                        <!-- Main Image Container -->
                        <div class="relative bg-white rounded-2xl shadow-2xl overflow-hidden transform transition-all duration-700 hover:scale-105 hover:shadow-3xl hover:-translate-y-2">
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-purple-50 opacity-20"></div>
                            <img src="{{ asset('images/Milestone.png') }}" 
                                 alt="Milestone PT Selaras Mitra Integra" 
                                 class="w-full h-auto object-cover transition-transform duration-700 hover:scale-110 relative z-10">
                            
                            <!-- Overlay Gradient -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/10 via-transparent to-transparent opacity-0 hover:opacity-100 transition-opacity duration-500"></div>
                            
                            <!-- Floating Action Button -->
                            <div class="absolute bottom-6 right-6 opacity-0 hover:opacity-100 transition-opacity duration-500">
                                <button class="bg-white bg-opacity-20 backdrop-blur-sm text-white p-3 rounded-full hover:bg-opacity-30 transition-all duration-300 hover:scale-110 shadow-lg">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Achievement Stats Section -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                    <!-- Stat 1 -->
                    <div class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:scale-105 hover:-translate-y-2 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-blue-600 opacity-0 group-hover:opacity-10 transition-opacity duration-500"></div>
                        <div class="relative z-10 p-8 text-center">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-4xl font-bold text-blue-800 mb-2 group-hover:text-blue-600 transition-colors">10+</h3>
                            <p class="text-xl font-semibold text-gray-700 mb-2">Tahun Pengalaman</p>
                            <p class="text-gray-600">Melayani dengan dedikasi tinggi sejak awal berdiri</p>
                        </div>
                    </div>

                    <!-- Stat 2 -->
                    <div class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:scale-105 hover:-translate-y-2 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-blue-600 opacity-0 group-hover:opacity-10 transition-opacity duration-500"></div>
                        <div class="relative z-10 p-8 text-center">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                            <h3 class="text-4xl font-bold text-blue-800 mb-2 group-hover:text-blue-600 transition-colors">100+</h3>
                            <p class="text-xl font-semibold text-gray-700 mb-2">Perusahaan Klien</p>
                            <p class="text-gray-600">Kepercayaan dari berbagai bidang industri</p>
                        </div>
                    </div>

                    <!-- Stat 3 -->
                    <div class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:scale-105 hover:-translate-y-2 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-yellow-400 to-yellow-600 opacity-0 group-hover:opacity-10 transition-opacity duration-500"></div>
                        <div class="relative z-10 p-8 text-center">
                            <div class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                </svg>
                            </div>
                            <h3 class="text-4xl font-bold text-yellow-800 mb-2 group-hover:text-yellow-600 transition-colors">∞</h3>
                            <p class="text-xl font-semibold text-gray-700 mb-2">Komitmen Kualitas</p>
                            <p class="text-gray-600">Memberikan pelayanan terbaik tanpa batas</p>
                        </div>
                    </div>
                </div>

                <!-- Journey Timeline Section -->
                <div class="relative mb-16">
                    <div class="text-center mb-12">
                        <h2 class="text-4xl md:text-5xl font-black bg-gradient-to-r from-blue-800 via-purple-600 to-indigo-700 bg-clip-text text-transparent mb-4 tracking-tight">
                            Perjalanan Kami
                        </h2>
                        <p class="text-xl text-gray-600 font-light max-w-3xl mx-auto">
                            Dari visi awal hingga menjadi mitra terpercaya dalam layanan Human Resource Consultant
                        </p>
                    </div>

                    <!-- Timeline Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Timeline Item 1 -->
                        <div class="group relative bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:scale-105 hover:-translate-y-2">
                            <div class="absolute -top-4 -right-4 w-8 h-8 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center shadow-lg">
                                <span class="text-white font-bold text-sm">1</span>
                            </div>
                            <div class="mb-6">
                                <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-blue-800 mb-2">Visi Awal</h3>
                                <p class="text-gray-700">Memulai perjalanan dengan komitmen memberikan solusi HR terbaik untuk perusahaan Indonesia</p>
                            </div>
                        </div>
                    
                        <!-- Timeline Item 2 -->
                        <div class="group relative bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:scale-105 hover:-translate-y-2">
                            <div class="absolute -top-4 -right-4 w-8 h-8 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center shadow-lg">
                                <span class="text-white font-bold text-sm">2</span>
                            </div>
                            <div class="mb-6">
                                <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-blue-800 mb-2">Membangun Tim</h3>
                                <p class="text-gray-700">Mengumpulkan para ahli terbaik di bidang HR untuk memberikan layanan berkualitas tinggi</p>
                            </div>
                        </div>

                        <!-- Timeline Item 3 -->
                        <div class="group relative bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:scale-105 hover:-translate-y-2">
                            <div class="absolute -top-4 -right-4 w-8 h-8 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-full flex items-center justify-center shadow-lg">
                                <span class="text-white font-bold text-sm">3</span>
                            </div>
                            <div class="mb-6">
                                <div class="w-12 h-12 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-yellow-800 mb-2">Pencapaian</h3>
                                <p class="text-gray-700">Meraih kepercayaan dari 100+ perusahaan dan terus berkembang hingga saat ini</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Call to Action Section -->
                <div class="text-center bg-gradient-to-br from-blue-900 via-blue-800 to-indigo-900 text-white rounded-3xl p-12 relative overflow-hidden">
                    <!-- Background Pattern -->
                    <div class="absolute inset-0 opacity-10">
                        <div class="absolute top-0 left-0 w-full h-full" style="background-image: radial-gradient(circle at 25% 25%, rgba(255,255,255,0.1) 0%, transparent 70%), radial-gradient(circle at 75% 75%, rgba(255,255,255,0.05) 0%, transparent 70%);"></div>
                    </div>
                    
                    <div class="relative z-10">
                        <h2 class="text-4xl md:text-5xl font-black mb-6 bg-gradient-to-r from-white via-yellow-200 to-yellow-400 bg-clip-text text-transparent">
                            Bergabung Dengan Kami
                        </h2>
                        <p class="text-xl md:text-2xl text-blue-100 mb-8 font-light leading-relaxed max-w-3xl mx-auto">
                            Jadilah bagian dari perjalanan selanjutnya dan rasakan pengalaman bekerja sama dengan 
                            <span class="font-semibold text-yellow-300">mitra terpercaya</span> dalam solusi HR
                        </p>
                        
                        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                            <a href="{{ route('contact') }}" class="group relative inline-block bg-yellow-500 text-blue-900 px-8 py-4 rounded-full text-xl font-black hover:bg-yellow-400 transition-all duration-500 shadow-lg transform hover:scale-110 hover:shadow-2xl hover:-translate-y-1 overflow-hidden">
                                <span class="relative z-10">HUBUNGI KAMI</span>
                                <span class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-yellow-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></span>
                            </a>
                            
                            <a href="{{ route('services') }}" class="group inline-flex items-center px-6 py-3 text-lg font-bold text-white bg-blue-600 bg-opacity-20 rounded-xl border border-white border-opacity-30 hover:bg-opacity-40 hover:border-opacity-60 transition-all duration-500 ease-in-out transform hover:scale-110 hover:shadow-xl backdrop-blur-sm">
                                <span class="mr-3">Lihat Layanan</span>
                                <svg class="w-5 h-5 transition-all duration-500 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<style>
/* Animation Keyframes */
@keyframes float-slow {
    0%, 100% { transform: translateY(0px) scale(1); }
    50% { transform: translateY(-15px) scale(1.1); }
}

@keyframes float-medium {
    0%, 100% { transform: translateY(0px) translateX(0px); }
    25% { transform: translateY(-10px) translateX(5px); }
    75% { transform: translateY(10px) translateX(-5px); }
}

@keyframes bounce-slow {
    0%, 100% { transform: translateY(0px) scale(1); }
    50% { transform: translateY(-25px) scale(1.2); }
}

@keyframes fade-in {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Animation Classes */
.animate-float-slow {
    animation: float-slow 10s ease-in-out infinite;
}

.animate-float-slow-delay-1 {
    animation: float-slow 10s ease-in-out infinite;
    animation-delay: 2s;
}

.animate-float-slow-delay-2 {
    animation: float-slow 10s ease-in-out infinite;
    animation-delay: 4s;
}

.animate-float-slow-delay-3 {
    animation: float-slow 10s ease-in-out infinite;
    animation-delay: 6s;
}

.animate-float-medium {
    animation: float-medium 7s ease-in-out infinite;
}

.animate-float-medium-delay-1 {
    animation: float-medium 7s ease-in-out infinite;
    animation-delay: 1s;
}

.animate-float-medium-delay-2 {
    animation: float-medium 7s ease-in-out infinite;
    animation-delay: 2s;
}

.animate-float-medium-delay-3 {
    animation: float-medium 7s ease-in-out infinite;
    animation-delay: 3s;
}

.animate-bounce-slow {
    animation: bounce-slow 4s ease-in-out infinite;
}

.animate-bounce-slow-delay-1 {
    animation: bounce-slow 4s ease-in-out infinite;
    animation-delay: 0.5s;
}

.animate-bounce-slow-delay-2 {
    animation: bounce-slow 4s ease-in-out infinite;
    animation-delay: 1s;
}

.animate-bounce-slow-delay-3 {
    animation: bounce-slow 4s ease-in-out infinite;
    animation-delay: 1.5s;
}

.animate-fade-in {
    animation: fade-in 1s ease-out;
}

/* Custom Shadow */
.shadow-3xl {
    box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.25);
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .animate-float-slow, .animate-float-medium {
        animation-duration: 6s;
    }
    
    .animate-bounce-slow {
        animation-duration: 3s;
    }
}

/* Hover Effects */
.group:hover .group-hover\:scale-110 {
    transform: scale(1.1);
}

.group:hover .group-hover\:translate-x-1 {
    transform: translateX(0.25rem);
}

/* Image Hover Effects */
img:hover {
    filter: brightness(1.1) contrast(1.1);
}

/* Background Patterns */
.bg-pattern {
    background-image: 
        radial-gradient(circle at 25% 25%, rgba(255,255,255,0.1) 0%, transparent 70%),
        radial-gradient(circle at 75% 75%, rgba(255,255,255,0.05) 0%, transparent 70%);
}
</style>

@endsection