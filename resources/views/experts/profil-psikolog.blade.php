@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 py-8">
    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Profil Psikolog</h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Temukan psikolog berpengalaman yang siap membantu Anda mengatasi berbagai tantangan psikologis
            </p>
        </div>

        <!-- Profile Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Profile Card 1 -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="relative">
                    <!-- Background Pattern -->
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-purple-500 opacity-10"></div>
                    <div class="relative p-8 text-center">
                        <!-- Profile Image -->
                        <div class="relative inline-block mb-6">
                            <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                                 alt="Dr. Sarah Amanda" 
                                 class="w-32 h-32 rounded-full object-cover border-4 border-white shadow-lg">
                            <div class="absolute -bottom-2 -right-2 bg-green-500 w-8 h-8 rounded-full border-4 border-white flex items-center justify-center">
                                <div class="w-3 h-3 bg-white rounded-full"></div>
                            </div>
                        </div>
                        
                        <!-- Name and Title -->
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Dr. Sarah Amanda, M.Psi</h3>
                        <p class="text-blue-600 font-semibold mb-4">Psikolog Klinis</p>
                        
                        <!-- University -->
                        <div class="flex items-center justify-center mb-4">
                            <svg class="w-5 h-5 text-gray-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                            </svg>
                            <span class="text-gray-600 font-medium">Universitas Indonesia</span>
                        </div>
                        
                        <!-- Experience -->
                        <div class="flex items-center justify-center mb-6">
                            <svg class="w-5 h-5 text-gray-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"/>
                                <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"/>
                            </svg>
                            <span class="text-gray-600 font-medium">8 Tahun Pengalaman</span>
                        </div>
                        
                        <!-- Specialization Tags -->
                        <div class="flex flex-wrap justify-center gap-2 mb-6">
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-medium">Kecemasan</span>
                            <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm font-medium">Depresi</span>
                            <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm font-medium">Trauma</span>
                        </div>
                        
                        <!-- Rating -->
                        <div class="flex items-center justify-center mb-6">
                            <div class="flex space-x-1">
                                @for($i = 1; $i <= 5; $i++)
                                    <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                @endfor
                            </div>
                            <span class="ml-2 text-gray-600 font-medium">4.9 (127 ulasan)</span>
                        </div>
                        
                        <!-- Action Button -->
                        <button class="w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white font-semibold py-3 px-6 rounded-xl hover:from-blue-600 hover:to-purple-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                            Lihat Selengkapnya
                        </button>
                    </div>
                </div>
            </div>

            <!-- Profile Card 2 -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-green-400 to-blue-500 opacity-10"></div>
                    <div class="relative p-8 text-center">
                        <div class="relative inline-block mb-6">
                            <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                                 alt="Dr. Michael Chen" 
                                 class="w-32 h-32 rounded-full object-cover border-4 border-white shadow-lg">
                            <div class="absolute -bottom-2 -right-2 bg-green-500 w-8 h-8 rounded-full border-4 border-white flex items-center justify-center">
                                <div class="w-3 h-3 bg-white rounded-full"></div>
                            </div>
                        </div>
                        
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Dr. Michael Chen, M.Psi</h3>
                        <p class="text-blue-600 font-semibold mb-4">Psikolog Anak & Remaja</p>
                        
                        <div class="flex items-center justify-center mb-4">
                            <svg class="w-5 h-5 text-gray-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                            </svg>
                            <span class="text-gray-600 font-medium">Universitas Gadjah Mada</span>
                        </div>
                        
                        <div class="flex items-center justify-center mb-6">
                            <svg class="w-5 h-5 text-gray-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"/>
                                <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"/>
                            </svg>
                            <span class="text-gray-600 font-medium">12 Tahun Pengalaman</span>
                        </div>
                        
                        <div class="flex flex-wrap justify-center gap-2 mb-6">
                            <span class="px-3 py-1 bg-pink-100 text-pink-800 rounded-full text-sm font-medium">Anak</span>
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm font-medium">Remaja</span>
                            <span class="px-3 py-1 bg-yellow-100 text-yellow-800 rounded-full text-sm font-medium">ADHD</span>
                        </div>
                        
                        <div class="flex items-center justify-center mb-6">
                            <div class="flex space-x-1">
                                @for($i = 1; $i <= 5; $i++)
                                    <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                @endfor
                            </div>
                            <span class="ml-2 text-gray-600 font-medium">4.8 (89 ulasan)</span>
                        </div>
                        
                        <button class="w-full bg-gradient-to-r from-green-500 to-blue-600 text-white font-semibold py-3 px-6 rounded-xl hover:from-green-600 hover:to-blue-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                            Lihat Selengkapnya
                        </button>
                    </div>
                </div>
            </div>

            <!-- Profile Card 3 -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-400 to-pink-500 opacity-10"></div>
                    <div class="relative p-8 text-center">
                        <div class="relative inline-block mb-6">
                            <img src="https://images.unsplash.com/photo-1594824947042-8c821c606e92?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                                 alt="Dr. Lisa Putri" 
                                 class="w-32 h-32 rounded-full object-cover border-4 border-white shadow-lg">
                            <div class="absolute -bottom-2 -right-2 bg-green-500 w-8 h-8 rounded-full border-4 border-white flex items-center justify-center">
                                <div class="w-3 h-3 bg-white rounded-full"></div>
                            </div>
                        </div>
                        
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Dr. Lisa Putri, M.Psi</h3>
                        <p class="text-blue-600 font-semibold mb-4">Psikolog Keluarga</p>
                        
                        <div class="flex items-center justify-center mb-4">
                            <svg class="w-5 h-5 text-gray-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                            </svg>
                            <span class="text-gray-600 font-medium">Universitas Airlangga</span>
                        </div>
                        
                        <div class="flex items-center justify-center mb-6">
                            <svg class="w-5 h-5 text-gray-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"/>
                                <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"/>
                            </svg>
                            <span class="text-gray-600 font-medium">6 Tahun Pengalaman</span>
                        </div>
                        
                        <div class="flex flex-wrap justify-center gap-2 mb-6">
                            <span class="px-3 py-1 bg-red-100 text-red-800 rounded-full text-sm font-medium">Keluarga</span>
                            <span class="px-3 py-1 bg-orange-100 text-orange-800 rounded-full text-sm font-medium">Pernikahan</span>
                            <span class="px-3 py-1 bg-teal-100 text-teal-800 rounded-full text-sm font-medium">Komunikasi</span>
                        </div>
                        
                        <div class="flex items-center justify-center mb-6">
                            <div class="flex space-x-1">
                                @for($i = 1; $i <= 5; $i++)
                                    <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                @endfor
                            </div>
                            <span class="ml-2 text-gray-600 font-medium">4.7 (64 ulasan)</span>
                        </div>
                        
                        <button class="w-full bg-gradient-to-r from-purple-500 to-pink-600 text-white font-semibold py-3 px-6 rounded-xl hover:from-purple-600 hover:to-pink-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                            Lihat Selengkapnya
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action Section -->
        <div class="mt-16 text-center">
            <div class="bg-white rounded-2xl shadow-xl p-8 max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Butuh Bantuan Psikologis?</h2>
                <p class="text-lg text-gray-600 mb-8">
                    Jangan ragu untuk menghubungi psikolog profesional kami. Kami siap membantu Anda mengatasi berbagai tantangan psikologis dengan pendekatan yang tepat dan personal.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="bg-gradient-to-r from-blue-500 to-purple-600 text-white font-semibold py-3 px-8 rounded-xl hover:from-blue-600 hover:to-purple-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                        Konsultasi Sekarang
                    </button>
                    <button class="border-2 border-gray-300 text-gray-700 font-semibold py-3 px-8 rounded-xl hover:border-gray-400 hover:bg-gray-50 transition-all duration-300">
                        Pelajari Lebih Lanjut
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection