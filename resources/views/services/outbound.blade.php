@extends('layouts.frontend')

@section('title', 'Outbound - Selaras Mitra Integra')

@section('content')
    <div class="container mx-auto px-4 py-8">
        {{-- Hero Section --}}
        <div class="bg-gradient-to-r from-blue-600 to-blue-800 rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center p-8">
                {{-- Bagian Kiri: Gambar --}}
                <div>
                    <img src="{{ asset('images/outbound-main.jpg') }}" alt="Ilustrasi Outbound" class="w-full h-auto rounded-lg shadow-md">
                    {{-- Pastikan Anda memiliki gambar ini di public/images/outbound-main.jpg --}}
                </div>

                {{-- Bagian Kanan: Teks Outbound --}}
                <div class="text-white">
                    <h1 class="text-4xl font-bold mb-4">OUTBOUND</h1>
                    <h2 class="text-2xl font-semibold mb-6">
                        Tingkatkan Kemampuan dan Jalin Hubungan Melalui Pelatihan dan Kegiatan Outbound
                    </h2>
                    <p class="text-lg mb-6 text-blue-100">
                        Kegiatan pengembangan secara indoor maupun outdoor seperti outbound bermanfaat untuk meningkatkan kepercayaan diri dalam bertindak maupun berpendapat, memacu rasa keberanian, membangun rasa kebersamaan dan komunikasi yang efektif antar sesama. Maka dari itu kami akan membantu Anda untuk memfasilitasi kebutuhan interaksi antar sesama.
                    </p>
                    <div class="flex items-center space-x-4 mt-6">
                        <a href="{{ route('contact') }}" class="bg-yellow-400 text-blue-800 font-bold px-6 py-3 rounded-full hover:bg-yellow-300 transition duration-300">
                            KONSULTASI SEKARANG
                        </a>
                        <a href="{{ route('services') }}" class="text-blue-200 hover:text-white border border-blue-300 px-6 py-3 rounded-full hover:bg-blue-700 transition duration-300">
                            Kembali ke Layanan
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Manfaat Outbound Section --}}
        <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-8">Manfaat Kegiatan Outbound</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                {{-- Manfaat 1: Meningkatkan Kepercayaan Diri --}}
                <div class="text-center group">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-blue-200 transition duration-300">
                        <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Meningkatkan Kepercayaan Diri</h3>
                    <p class="text-gray-600 text-sm">Membangun rasa percaya diri dalam bertindak dan berpendapat</p>
                </div>

                {{-- Manfaat 2: Memacu Keberanian --}}
                <div class="text-center group">
                    <div class="w-20 h-20 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-yellow-200 transition duration-300">
                        <svg class="w-10 h-10 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Memacu Keberanian</h3>
                    <p class="text-gray-600 text-sm">Mengembangkan mental yang kuat dan berani menghadapi tantangan</p>
                </div>

                {{-- Manfaat 3: Membangun Kebersamaan --}}
                <div class="text-center group">
                    <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-green-200 transition duration-300">
                        <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Membangun Kebersamaan</h3>
                    <p class="text-gray-600 text-sm">Menciptakan ikatan tim yang kuat dan rasa kebersamaan</p>
                </div>

                {{-- Manfaat 4: Komunikasi Efektif --}}
                <div class="text-center group">
                    <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-purple-200 transition duration-300">
                        <svg class="w-10 h-10 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Komunikasi Efektif</h3>
                    <p class="text-gray-600 text-sm">Meningkatkan kemampuan komunikasi antar sesama</p>
                </div>
            </div>
        </div>

        {{-- Jenis Kegiatan Outbound Section --}}
        <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg shadow-lg p-8 mb-8">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-8">Jenis Kegiatan Outbound</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                {{-- Indoor Activities --}}
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition duration-300">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800">Indoor Activities</h3>
                    </div>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Team Building Games
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Problem Solving Activities
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Communication Exercises
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Leadership Challenges
                        </li>
                    </ul>
                </div>

                {{-- Outdoor Activities --}}
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition duration-300">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800">Outdoor Activities</h3>
                    </div>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Adventure Activities
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Trust Building Exercises
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Team Challenges
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Nature-based Learning
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Call to Action Section --}}
        <div class="bg-gradient-to-r from-yellow-400 to-orange-500 rounded-lg shadow-lg text-center p-8">
            <h2 class="text-3xl font-bold text-white mb-4">Siap Memfasilitasi Kebutuhan Interaksi Tim Anda?</h2>
            <p class="text-lg text-white mb-6">
                Kami akan membantu Anda merancang kegiatan outbound yang sesuai dengan kebutuhan dan tujuan perusahaan Anda.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="{{ route('contact') }}" class="bg-white text-orange-600 font-bold px-8 py-4 rounded-full text-lg hover:bg-gray-100 transition duration-300 shadow-md">
                    KONSULTASI GRATIS
                </a>
                <a href="{{ route('services') }}" class="text-white border-2 border-white font-bold px-8 py-4 rounded-full text-lg hover:bg-white hover:text-orange-600 transition duration-300">
                    Lihat Layanan Lainnya
                </a>
            </div>
        </div>
    </div>
@endsection
