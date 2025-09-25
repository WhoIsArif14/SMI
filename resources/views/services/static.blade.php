@extends('layouts.frontend')

@section('title', 'SMI - Layanan')

@section('content')

    {{-- 
        Palet Warna yang Digunakan:
        Biru Tua: #265999
        Biru Medium: #4488BF
        Emas Tua: #CA9703
        Emas Terang: #D5AD36
        Krem: #F4F2C9
    --}}

    <div class="container mx-auto px-4 py-8">
        {{-- Judul utama menggunakan warna biru tua dari palet --}}
        <h1 class="py-2 text-4xl md:text-5xl font-black mb-6 bg-gradient-to-r from-blue-800 via-blue-600 to-indigo-700 bg-clip-text text-transparent tracking-tight text-center">LAYANAN KAMI</h1>

        {{-- Latar belakang utama diubah menjadi warna krem dari palet --}}
        <div class="bg-[#F4F2C9] rounded-lg shadow-lg p-8 mb-8">
            <p class="text-lg text-gray-700 text-center mb-6">
                Temukan informasi lebih lanjut mengenai tim expert kami melalui materi presentasi di bawah ini.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                {{-- Card 1: Tema Biru --}}
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h2 class="text-xl font-semibold text-[#265999] mb-3">REKRUTMEN</h2>
                    <p class="text-gray-700 mb-4">Menempatkan orang yang tepat dalam posisi yang tepat menjadi salah satu kunci kesuksesan bisnis.</p>
                    <a href="{{ route('services.rekrutmen') }}" class="inline-flex items-center px-4 py-2 bg-[#265999] text-[#F4F2C9] font-semibold rounded-lg hover:bg-[#4488BF] transition duration-300">
                        <svg class="me-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        Lihat Detail
                    </a>
                </div>

                {{-- Card 2: Tema Emas --}}
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h2 class="text-xl font-semibold text-[#CA9703] mb-3">ASESMEN</h2>
                    <p class="text-gray-700 mb-4">Eksplorasi Mendalam tentang Asesmen: Temukan Metode Terbaik untuk Evaluasi Kinerja.</p>
                    <a href="{{ route('services.asesmen') }}" class="inline-flex items-center px-4 py-2 bg-[#CA9703] text-[#F4F2C9] font-semibold rounded-lg hover:bg-[#D5AD36] transition duration-300">
                        <svg class="me-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        Lihat Detail
                    </a>
                </div>

                {{-- Card 3: Tema Biru --}}
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h2 class="text-xl font-semibold text-[#265999] mb-3">TEST BAKAT DAN MINAT</h2>
                    <p class="text-gray-700 mb-4">Menggali Potensi Anda: Tes Bakat dan Minat yang Menginspirasi.</p>
                    <a href="{{ route('services.test') }}" class="inline-flex items-center px-4 py-2 bg-[#265999] text-[#F4F2C9] font-semibold rounded-lg hover:bg-[#4488BF] transition duration-300">
                        <svg class="me-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        Lihat Detail
                    </a>
                </div>

                {{-- Card 4: Tema Emas --}}
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h2 class="text-xl font-semibold text-[#CA9703] mb-3">COACHING AND CONCELING</h2>
                    <p class="text-gray-700 mb-4">Tingkatkan performa, kerjasama demi meningkatkan produktivitas tim.</p>
                    <a href="{{ route('services.coaching') }}" class="inline-flex items-center px-4 py-2 bg-[#CA9703] text-[#F4F2C9] font-semibold rounded-lg hover:bg-[#D5AD36] transition duration-300">
                        <svg class="me-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        Lihat Detail
                    </a>
                </div>

                {{-- Card 5: Tema Biru --}}
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h2 class="text-xl font-semibold text-[#265999] mb-3">SEMINAR</h2>
                    <p class="text-gray-700 mb-4">Peningkatan wawasan setiap individu untuk permasalahan secara mandiri.</p>
                    <a href="{{ route('services.seminar') }}" class="inline-flex items-center px-4 py-2 bg-[#265999] text-[#F4F2C9] font-semibold rounded-lg hover:bg-[#4488BF] transition duration-300">
                        <svg class="me-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        Lihat Detail
                    </a>
                </div>

                {{-- Card 6: Tema Emas --}}
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h2 class="text-xl font-semibold text-[#CA9703] mb-3">KONSELING PSIKOLOG</h2>
                    <p class="text-gray-700 mb-4">Solusi profesional untuk kesehatan mental dan pengembangan diri.</p>
                    <a href="{{ route('services.konseling') }}" class="inline-flex items-center px-4 py-2 bg-[#CA9703] text-[#F4F2C9] font-semibold rounded-lg hover:bg-[#D5AD36] transition duration-300">
                        <svg class="me-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        Lihat Detail
                    </a>
                </div>

                {{-- Card 7: Tema Biru --}}
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h2 class="text-xl font-semibold text-[#265999] mb-3">PENGEMBANGAN ORGANIZATION</h2>
                    <p class="text-gray-700 mb-4">Solusi Komprehensif untuk Pengembangan Organisasi dan Sumber Daya Manusia.</p>
                    <a href="{{ route('services.pengembangan') }}" class="inline-flex items-center px-4 py-2 bg-[#265999] text-[#F4F2C9] font-semibold rounded-lg hover:bg-[#4488BF] transition duration-300">
                        <svg class="me-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        Lihat Detail
                    </a>
                </div>

                {{-- Card 8: Tema Emas --}}
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h2 class="text-xl font-semibold text-[#CA9703] mb-3">PELATIHAN DAN PENGEMBANGAN</h2>
                    <p class="text-gray-700 mb-4">Solusi Pelatihan Terdepan untuk Mengembangkan Potensi SDM Perusahaan Anda.</p>
                    <a href="{{ route('services.pelatihan') }}" class="inline-flex items-center px-4 py-2 bg-[#CA9703] text-[#F4F2C9] font-semibold rounded-lg hover:bg-[#D5AD36] transition duration-300">
                        <svg class="me-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        Lihat Detail
                    </a>
                </div>

                {{-- Card 9: Tema Biru --}}
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h2 class="text-xl font-semibold text-[#265999] mb-3">OUTBOUND</h2>
                    <p class="text-gray-700 mb-4">Tingkatkan Kemampuan dan Jalin Hubungan Melalui Pelatihan dan Kegiatan Outbound.</p>
                    <a href="{{ route('services.outbound') }}" class="inline-flex items-center px-4 py-2 bg-[#265999] text-[#F4F2C9] font-semibold rounded-lg hover:bg-[#4488BF] transition duration-300">
                        <svg class="me-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        Lihat Detail
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection