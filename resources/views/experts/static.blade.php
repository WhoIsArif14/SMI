@extends('layouts.frontend')
@section('content')

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-center text-blue-800 mb-10">EXPERT KAMI</h1>

        <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
            <p class="text-lg text-gray-700 text-center mb-6">
                Temukan informasi lebih lanjut mengenai tim expert kami melalui materi presentasi di bawah ini.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                {{-- Contoh Tautan ke Presentasi Canva --}}
                <div class="bg-blue-100 p-6 rounded-lg shadow-md text-center">
                    <h2 class="text-xl font-semibold text-blue-800 mb-3">Profil Psikolog Industri dan Organisasi</h2>
                    <p class="text-gray-600 mb-4">Materi presentasi mengenai para ahli di bidang psikologi industri dan organisasi.</p>
                    <a href="{{ route('experts.profil-psikolog') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-300">
                        <svg class="me-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        Lihat di Canva
                    </a>
                </div>

                {{-- Contoh Tautan ke Dokumen PDF --}}
                <div class="bg-green-100 p-6 rounded-lg shadow-md text-center">
                    <h2 class="text-xl font-semibold text-green-800 mb-3">Daftar Psikolog Pendidikan</h2>
                    <p class="text-gray-600 mb-4">Unduh dokumen PDF berisi daftar lengkap psikolog pendidikan kami.</p>
                    {{-- Jika PDF ada di folder public Anda, contoh: public/documents/psikolog-pendidikan.pdf --}}
                    <a href="{{ route('experts.daftar-psikolog') }}" target="_blank" class="inline-flex items-center px-4 py-2 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 transition duration-300">
                        <svg class="me-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        Unduh PDF
                    </a>
                </div>

                {{-- Tambahkan lebih banyak item sesuai kebutuhan Anda --}}
                <div class="bg-purple-100 p-6 rounded-lg shadow-md text-center">
                    <h2 class="text-xl font-semibold text-purple-800 mb-3">Psikologi Klinis Umum</h2>
                    <p class="text-gray-600 mb-4">Presentasi singkat mengenai area spesialisasi psikolog klinis umum.</p>
                    <a href="{{ route('experts.psikolog-klinis') }}" class="inline-flex items-center px-4 py-2 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition duration-300">
                        <svg class="me-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        Lihat di Canva
                    </a>
                </div>

                <div class="bg-purple-100 p-6 rounded-lg shadow-md text-center">
                    <h2 class="text-xl font-semibold text-purple-800 mb-3">Psikolog Anak</h2>
                    <p class="text-gray-600 mb-4">Presentasi singkat mengenai area spesialisasi psikolog klinis umum.</p>
                    <a href="{{ route('experts.psikolog-anak') }}" class="inline-flex items-center px-4 py-2 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition duration-300">
                        <svg class="me-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        Lihat di Canva
                    </a>
                </div>

                <div class="bg-purple-100 p-6 rounded-lg shadow-md text-center">
                    <h2 class="text-xl font-semibold text-purple-800 mb-3">Psikolog Remaja</h2>
                    <p class="text-gray-600 mb-4">Presentasi singkat mengenai area spesialisasi psikolog klinis umum.</p>
                    <a href="{{ route('experts.psikolog-remaja') }}" class="inline-flex items-center px-4 py-2 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition duration-300">
                        <svg class="me-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        Lihat di Canva
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endsection