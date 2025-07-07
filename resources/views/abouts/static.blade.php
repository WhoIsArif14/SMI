@extends('layouts.frontend')
@section('content')

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-center text-blue-800 mb-10">TENTANG KAMI</h1>

        <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
            <p class="text-lg text-gray-700 text-center mb-6">
                Temukan informasi lebih lanjut mengenai TENTANG KAMI melalui materi presentasi di bawah ini.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                {{-- Contoh Tautan ke Presentasi Canva --}}
                <div class="bg-blue-100 p-6 rounded-lg shadow-md text-center">
                    <h2 class="text-xl font-semibold text-blue-800 mb-3">Tentang Kami</h2>
                    <p class="text-gray-600 mb-4">Materi presentasi mengenai para ahli di bidang psikologi industri dan organisasi.</p>
                    <a href="{{ route('abouts.tentang') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-300">
                        <svg class="me-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        Lihat Detail
                    </a>
                </div>

                {{-- Contoh Tautan ke Dokumen PDF --}}
                <div class="bg-blue-100 p-6 rounded-lg shadow-md text-center">
                    <h2 class="text-xl font-semibold text-blue-800 mb-3">Visi dan Misi</h2>
                    <p class="text-gray-600 mb-4">Materi presentasi mengenai para ahli di bidang psikologi industri dan organisasi.</p>
                    <a href="{{ route('abouts.visi') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-300">
                        <svg class="me-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        Lihat Detail
                    </a>
                </div>

                {{-- Tambahkan lebih banyak item sesuai kebutuhan Anda --}}
                <div class="bg-purple-100 p-6 rounded-lg shadow-md text-center">
                    <h2 class="text-xl font-semibold text-purple-800 mb-3">Milestone</h2>
                    <p class="text-gray-600 mb-4">Presentasi singkat mengenai area spesialisasi psikolog klinis umum.</p>
                    <a href="{{ route('abouts.milestone') }}" class="inline-flex items-center px-4 py-2 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition duration-300">
                        <svg class="me-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        Lihat Detail
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endsection