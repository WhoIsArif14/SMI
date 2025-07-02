@extends('layouts.frontend')
@section('content')

<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
        <!-- Header Section -->
        <div class="text-center mb-10">
            <h1 class="text-4xl font-bold text-blue-800 mb-4">Profil Psikolog Industri dan Organisasi</h1>
            <p class="text-lg text-gray-600">Tim expert kami dalam bidang psikologi industri dan organisasi</p>
        </div>

        <!-- Content Section -->
        <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Left Column -->
                <div>
                    <h2 class="text-2xl font-semibold text-blue-800 mb-4">Keahlian Kami</h2>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-600 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Rekrutmen dan Seleksi Karyawan
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-600 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Pengembangan Organisasi
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-600 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Pelatihan dan Pengembangan SDM
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-600 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Evaluasi Kinerja Karyawan
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-600 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Analisis Budaya Organisasi
                        </li>
                    </ul>
                </div>

                <!-- Right Column -->
                <div>
                    <h2 class="text-2xl font-semibold text-blue-800 mb-4">Layanan Konsultasi</h2>
                    <p class="text-gray-700 mb-4">
                        Tim psikolog industri dan organisasi kami memiliki pengalaman luas dalam memberikan solusi 
                        yang tepat untuk berbagai kebutuhan perusahaan dan organisasi.
                    </p>
                    <p class="text-gray-700 mb-6">
                        Kami menggunakan pendekatan yang berbasis riset dan praktik terbaik untuk membantu 
                        organisasi mencapai tujuan mereka melalui pengembangan sumber daya manusia yang efektif.
                    </p>
                    
                    <!-- Contact Button -->
                    <div class="text-center">
                        <a href="#" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-300">
                            <svg class="mr-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team Section -->
        <div class="bg-gray-50 rounded-lg p-8">
            <h2 class="text-2xl font-semibold text-blue-800 mb-6 text-center">Tim Expert Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Expert 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="w-20 h-20 bg-blue-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-10 h-10 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Dr. [Nama Expert]</h3>
                    <p class="text-gray-600 text-sm">Psikolog Industri & Organisasi</p>
                    <p class="text-gray-500 text-xs mt-1">15+ tahun pengalaman</p>
                </div>

                <!-- Expert 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="w-20 h-20 bg-blue-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-10 h-10 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">M.Psi. [Nama Expert]</h3>
                    <p class="text-gray-600 text-sm">Konsultan Pengembangan SDM</p>
                    <p class="text-gray-500 text-xs mt-1">10+ tahun pengalaman</p>
                </div>

                <!-- Expert 3 -->
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="w-20 h-20 bg-blue-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-10 h-10 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">S.Psi. [Nama Expert]</h3>
                    <p class="text-gray-600 text-sm">Spesialis Rekrutmen</p>
                    <p class="text-gray-500 text-xs mt-1">8+ tahun pengalaman</p>
                </div>
            </div>
        </div>

        <!-- Back Button -->
        <div class="text-center mt-8">
            <a href="{{ url()->previous() }}" class="inline-flex items-center px-4 py-2 bg-gray-600 text-white font-semibold rounded-lg hover:bg-gray-700 transition duration-300">
                <svg class="mr-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Kembali
            </a>
        </div>
    </div>
</div>

@endsection
