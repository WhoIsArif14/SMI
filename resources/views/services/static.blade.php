@extends('layouts.frontend')
@section('content')

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-center text-blue-800 mb-10">LAYANAN KAMI</h1>

        <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
            <p class="text-lg text-gray-700 text-center mb-6">
                Temukan informasi lebih lanjut mengenai tim expert kami melalui materi presentasi di bawah ini.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                {{-- Card pertama - Link ke outboud.blade.php --}}
                <div class="bg-blue-100 p-6 rounded-lg shadow-md text-center">
                    <h2 class="text-xl font-semibold text-blue-800 mb-3">REKRUTMEN</h2>
                    <p class="text-gray-600 mb-4">Materi presentasi mengenai para ahli di bidang psikologi industri dan organisasi.</p>
                    <a href="{{ route('services.rekrutmen') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-300">
                        <svg class="me-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        Lihat Detail
                    </a>
                </div>

                {{-- Contoh Tautan ke Dokumen PDF --}}
                <div class="bg-yellow-100 p-6 rounded-lg shadow-md text-center">
                    <h2 class="text-xl font-semibold text-yellow-800 mb-3">ASESMEN</h2>
                    <p class="text-gray-600 mb-4">Materi presentasi mengenai para ahli di bidang psikologi industri dan organisasi.</p>
                    <a href="{{ route('services.asesmen') }}" class="inline-flex items-center px-4 py-2 bg-yellow-600 text-white font-semibold rounded-lg hover:bg-yellow-700 transition duration-300">
                        <svg class="me-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        Lihat Detail
                    </a>
                </div>

                {{-- Tambahkan lebih banyak item sesuai kebutuhan Anda --}}
                <div class="bg-purple-100 p-6 rounded-lg shadow-md text-center">
                    <h2 class="text-xl font-semibold text-purple-800 mb-3">TEST BAKAT DAN MINAT</h2>
                    <p class="text-gray-600 mb-4">Presentasi singkat mengenai area spesialisasi psikolog klinis umum.</p>
                    <a href="{{ route('services.test') }}" class="inline-flex items-center px-4 py-2 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition duration-300">
                        <svg class="me-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        Lihat Detail
                    </a>
                </div>

                <div class="bg-green-100 p-6 rounded-lg shadow-md text-center">
                    <h2 class="text-xl font-semibold text-green-800 mb-3">COACHING AND CONCELING</h2>
                    <p class="text-gray-600 mb-4">Materi presentasi mengenai para ahli di bidang psikologi industri dan organisasi.</p>
                    <a href="{{ route('services.coaching') }}" class="inline-flex items-center px-4 py-2 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 transition duration-300">
                        <svg class="me-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        Lihat Detail
                    </a>
                </div>

                <div class="bg-red-100 p-6 rounded-lg shadow-md text-center">
                    <h2 class="text-xl font-semibold text-red-800 mb-3">SEMINAR</h2>
                    <p class="text-gray-600 mb-4">Materi presentasi mengenai para ahli di bidang psikologi industri dan organisasi.</p>
                    <a href="{{ route('services.seminar') }}" class="inline-flex items-center px-4 py-2 bg-red-600 text-white font-semibold rounded-lg hover:bg-red-700 transition duration-300">
                        <svg class="me-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        Lihat Detail
                    </a>
                </div>

                <div class="bg-indigo-100 p-6 rounded-lg shadow-md text-center">
                    <h2 class="text-xl font-semibold text-indigo-800 mb-3">KONSELING PSIKOLOG</h2>
                    <p class="text-gray-600 mb-4">Materi presentasi mengenai para ahli di bidang psikologi industri dan organisasi.</p>
                    <a href="{{ route('services.konseling') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 transition duration-300">
                        <svg class="me-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        Lihat Detail
                    </a>
                </div>

                <div class="bg-orange-100 p-6 rounded-lg shadow-md text-center">
                    <h2 class="text-xl font-semibold text-orange-800 mb-3">PENGEMBANGAN ORGANIZATION</h2>
                    <p class="text-gray-600 mb-4">Materi presentasi mengenai para ahli di bidang psikologi industri dan organisasi.</p>
                    <a href="{{ route('services.pengembangan') }}" class="inline-flex items-center px-4 py-2 bg-orange-600 text-white font-semibold rounded-lg hover:bg-orange-700 transition duration-300">
                        <svg class="me-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        Lihat Detail
                    </a>
                </div>

                <div class="bg-cyan-100 p-6 rounded-lg shadow-md text-center">
                    <h2 class="text-xl font-semibold text-cyan-800 mb-3">PELATIHAN DAN PENGEMBANGAN</h2>
                    <p class="text-gray-600 mb-4">Materi presentasi mengenai para ahli di bidang psikologi industri dan organisasi.</p>
                    <a href="{{ route('services.pelatihan') }}" class="inline-flex items-center px-4 py-2 bg-cyan-600 text-white font-semibold rounded-lg hover:bg-cyan-700 transition duration-300">
                        <svg class="me-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        Lihat Detail
                    </a>
                </div>

                 <div class="bg-teal-100 p-6 rounded-lg shadow-md text-center">
                    <h2 class="text-xl font-semibold text-teal-800 mb-3">OUTBOUND</h2>
                    <p class="text-gray-600 mb-4">Materi presentasi mengenai para ahli di bidang psikologi industri dan organisasi.</p>
                    <a href="{{ route('services.outbound') }}" class="inline-flex items-center px-4 py-2 bg-teal-600 text-white font-semibold rounded-lg hover:bg-teal-700 transition duration-300">
                        <svg class="me-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        Lihat Detail
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endsection
