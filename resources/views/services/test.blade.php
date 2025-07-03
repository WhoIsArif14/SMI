@extends('layouts.frontend') {{-- Pastikan ini mengacu pada layout utama Anda --}}

@section('title', 'Tes Bakat Minat - Selaras Mitra Integra')

@section('content')
    <div class="container mx-auto px-4 py-8">
        {{-- Bagian Atas: Gambar dan Deskripsi --}}
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center p-8">
                {{-- Bagian Kiri: Gambar --}}
                <div>
                    <img src="{{ asset('images/talent-test-main.jpg') }}" alt="Ilustrasi Tes Bakat Minat" class="w-full h-auto rounded-lg shadow-md">
                    {{-- Pastikan Anda memiliki gambar ini di public/images/talent-test-main.jpg --}}
                </div>

                {{-- Bagian Kanan: Teks Tes Bakat Minat --}}
                <div class="text-gray-800">
                    <h1 class="text-4xl font-bold text-blue-800 mb-4">TES BAKAT MINAT</h1>
                    <p class="text-lg font-semibold mb-4">
                        Menggali Potensi Anda: Tes Bakat dan Minat yang Menginspirasi
                    </p>
                    <p class="text-lg mb-6">
                        Layanan dalam lingkup individual / klasikal berupa tes psikologi, interview psikolog hingga pembuatan laporan sesuai kebutuhan seperti penelusuran bakat dan minat individu yang berkaitan dengan karir, kesiapan sekolah, penerimaan siswa baru, maupun siswa akselerasi.
                    </p>
                    <p class="text-right text-gray-600">
                        <a href="{{ route('services') }}" class="text-blue-600 hover:underline">Kembali ke menu layanan</a>
                    </p>
                </div>
            </div>
        </div>

        {{-- Bagian Bawah: Tujuan Tes Bakat Minat --}}
        <div class="bg-blue-600 text-white p-8 rounded-lg shadow-lg text-center mt-12 relative overflow-hidden">
            <h2 class="text-3xl font-bold mb-8">TUJUAN TES BAKAT MINAT</h2>

            {{-- Gambar background panel surya (optional) --}}
            <img src="{{ asset('images/solar-panels-bg.jpg') }}" alt="Background Solar Panels" class="absolute inset-0 w-full h-full object-cover opacity-20 z-0">
            {{-- Pastikan Anda memiliki gambar ini di public/images/solar-panels-bg.jpg --}}

            <div class="relative z-10 flex flex-wrap justify-center items-center gap-6 py-8">
                {{-- Item 1 --}}
                <div class="bg-blue-800 text-white px-6 py-3 rounded-full shadow-md text-lg hover:bg-blue-700 transition duration-300">
                    Seleksi siswa baru
                </div>

                {{-- Item 2 (lebih panjang) --}}
                <div class="bg-yellow-400 text-blue-800 px-6 py-3 rounded-full shadow-md text-lg font-semibold hover:bg-yellow-500 transition duration-300">
                    Promosi guru/ dosen/ tenaga pendidik/ kepala sekolah
                </div>

                {{-- Item 3 --}}
                <div class="bg-blue-800 text-white px-6 py-3 rounded-full shadow-md text-lg hover:bg-blue-700 transition duration-300">
                    Asesmen karir
                </div>

                {{-- Item 4 --}}
                <div class="bg-blue-800 text-white px-6 py-3 rounded-full shadow-md text-lg hover:bg-blue-700 transition duration-300">
                    Seleksi siswa akselerasi
                </div>

                {{-- Item 5 (tengah) --}}
                <div class="bg-yellow-400 text-blue-800 px-6 py-3 rounded-full shadow-md text-lg font-semibold hover:bg-yellow-500 transition duration-300">
                    Psikotes penjurusan siswa
                </div>

                {{-- Item 6 --}}
                <div class="bg-blue-800 text-white px-6 py-3 rounded-full shadow-md text-lg hover:bg-blue-700 transition duration-300">
                    Asesmen kepribadian
                </div>

                {{-- Item 7 --}}
                <div class="bg-blue-800 text-white px-6 py-3 rounded-full shadow-md text-lg hover:bg-blue-700 transition duration-300">
                    Asesmen pendidik/ tenaga pendidik
                </div>
            </div>

            <p class="mt-4 text-gray-200 relative z-10">
                <a href="{{ route('services') }}" class="text-white hover:underline">Kembali ke menu layanan</a>
            </p>
        </div>
    </div>
@endsection