@extends('layouts.frontend')

@section('title', 'Pelatihan - Selaras Mitra Integra')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center p-8">
                {{-- Bagian Kiri: Gambar --}}
                <div>
                    <img src="{{ asset('images/pelatihan-main.jpg') }}" alt="Ilustrasi Pelatihan" class="w-full h-auto rounded-lg shadow-md">
                    {{-- Pastikan Anda memiliki gambar ini di public/images/pelatihan-main.jpg --}}
                </div>

                {{-- Bagian Kanan: Teks Pelatihan --}}
                <div class="text-gray-800">
                    <h1 class="text-4xl font-bold text-blue-800 mb-4">PELATIHAN</h1>
                    <p class="text-lg mb-4">
                        Solusi Pelatihan Terdepan untuk Mengembangkan Potensi SDM Perusahaan Anda.
                    </p>
                    <p class="text-lg mb-6">
                        PT Selaras Mitra Integra menyediakan layanan pelatihan yang dirancang khusus untuk memenuhi kebutuhan spesifik perusahaan Anda. Dengan pendekatan yang dapat disesuaikan, kami menawarkan berbagai metodologi pelatihan yang efektif, mulai dari pelatihan dalam kelas hingga aktivitas outdoor. Semua program pelatihan kami dijalankan oleh trainer berpengalaman dan mengacu pada standar HIMPSI serta TUK BNSP yang terverifikasi.
                    </p>
                    <p class="text-right text-gray-600">
                        
                    </p>
                </div>
            </div>
        </div>

        {{-- Bagian "Keunggulan Layanan Pelatihan Kami" --}}
        <div class="bg-blue-600 text-white p-8 rounded-lg shadow-lg text-center mt-12 relative overflow-hidden">
            <h2 class="text-3xl font-bold mb-8">Keunggulan Layanan Pelatihan Kami</h2>

            {{-- Background Pattern --}}
            <div class="absolute inset-0 bg-gradient-to-br from-blue-700 to-blue-500 opacity-20 transform -skew-y-3 scale-150 z-0"></div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 justify-items-center relative z-10">
                {{-- Card 1: Customizable Services --}}
                <div class="bg-white text-blue-800 p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 w-full max-w-sm">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Customizable Services</h3>
                    <p class="text-gray-700 text-sm mb-4">
                        Pelatihan dapat didesain berdasarkan kebutuhan spesifik perusahaan Anda
                    </p>
                    <p class="text-gray-700 text-sm">
                        Menawarkan beberapa metodologi pelatihan yang fleksibel dan efektif
                    </p>
                </div>

                {{-- Card 2: Expert Trainer --}}
                <div class="bg-white text-blue-800 p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 w-full max-w-sm">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Expert Trainer</h3>
                    <p class="text-gray-700 text-sm mb-4">
                        Bekerjasama dengan trainer yang berpengalaman dan ahli di bidangnya
                    </p>
                    <p class="text-gray-700 text-sm">
                        Tim trainer profesional dengan track record yang terbukti
                    </p>
                </div>

                {{-- Card 3: Standarisasi HIMPSI & TUK BNSP --}}
                <div class="bg-white text-blue-800 p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 w-full max-w-sm">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Standarisasi HIMPSI & Verified TUK BNSP</h3>
                    <p class="text-gray-700 text-sm mb-4">
                        Menggunakan standar HIMPSI dalam pelaksanaan pelatihan
                    </p>
                    <p class="text-gray-700 text-sm">
                        Tempat Uji Kompetensi (TUK) yang sudah terverifikasi BNSP
                    </p>
                </div>
            </div>

            {{-- Jenis Pelatihan --}}
            <div class="mt-12 relative z-10">
                <h3 class="text-2xl font-bold mb-6">Jenis Pelatihan Yang Kami Tawarkan</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                    <div class="bg-blue-700 p-4 rounded-lg">
                        <h4 class="text-lg font-semibold mb-2">Soft Skills Training</h4>
                        <p class="text-sm text-blue-100">Leadership, Communication, Teamwork, Problem Solving</p>
                    </div>
                    <div class="bg-blue-700 p-4 rounded-lg">
                        <h4 class="text-lg font-semibold mb-2">Hard Skills Training</h4>
                        <p class="text-sm text-blue-100">Technical Skills, Professional Competency, Industry Specific</p>
                    </div>
                    <div class="bg-blue-700 p-4 rounded-lg">
                        <h4 class="text-lg font-semibold mb-2">In-Class Training</h4>
                        <p class="text-sm text-blue-100">Pelatihan dalam ruangan dengan metode interaktif</p>
                    </div>
                    <div class="bg-blue-700 p-4 rounded-lg">
                        <h4 class="text-lg font-semibold mb-2">Outdoor Training</h4>
                        <p class="text-sm text-blue-100">Aktivitas outdoor untuk team building dan pengembangan</p>
                    </div>
                </div>
            </div>

            <a href="{{ route('contact') }}" class="inline-block bg-white text-blue-600 font-bold px-8 py-4 rounded-full text-lg hover:bg-gray-100 transition duration-300 mt-12 relative z-10">
                KONSULTASI SEKARANG
            </a>

            <p class="mt-4 text-gray-200 relative z-10">
                <a href="{{ route('services') }}" class="group inline-flex items-center px-6 py-3 text-lg font-bold text-white bg-blue-600 bg-opacity-100 rounded-xl border border-white border-opacity-30 hover:bg-opacity-40 hover:border-opacity-60 transition-all duration-500 ease-in-out transform hover:scale-110 hover:shadow-xl backdrop-blur-sm">
                            <span class="mr-3">Kembali ke Menu Layanan</span>
                            <svg class="w-5 h-5 transition-all duration-500 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
            </p>
        </div>
    </div>
@endsection
