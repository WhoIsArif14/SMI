@extends('layouts.frontend')
@section('title', 'Daftar Expert')
@section('content')

<!-- Hero Section -->
<div class="bg-gradient-to-br from-blue-50 via-slate-50 to-indigo-50 py-16 px-4 relative overflow-hidden">
    <!-- Professional Background Pattern -->
    <div class="absolute inset-0 pointer-events-none">
        <!-- Grid Pattern -->
        <div class="absolute inset-0 bg-grid-pattern opacity-3"></div>
        
        <!-- Professional Elements -->
        <div class="absolute top-16 left-20 w-20 h-20 border border-blue-200 opacity-25 transform rotate-45 animate-drift-gentle"></div>
        <div class="absolute top-32 right-24 w-16 h-16 border border-slate-300 opacity-20 transform -rotate-30 animate-drift-gentle-delay"></div>
        <div class="absolute bottom-20 left-32 w-24 h-24 border border-indigo-200 opacity-30 transform rotate-12 animate-drift-gentle-delay-2"></div>
        <div class="absolute bottom-32 right-20 w-18 h-18 border border-blue-300 opacity-25 transform -rotate-45 animate-drift-gentle-delay-3"></div>
    </div>
    
    <div class="container mx-auto text-center relative z-10">
        <h1 class="text-4xl md:text-6xl font-black mb-6 bg-gradient-to-r from-blue-800 via-blue-600 to-indigo-700 bg-clip-text text-transparent tracking-tight">Tim Expert Kami</h1>
        <p class="text-xl md:text-2xl text-gray-600 mb-8 font-light leading-relaxed max-w-3xl mx-auto">
            Temukan expert terbaik sesuai dengan kebutuhan Anda dari berbagai bidang keahlian
        </p>
    </div>
</div>

<!-- Main Content -->
<div class="py-12 px-4 bg-gray-50">
    <div class="container mx-auto max-w-7xl">
        <div class="flex flex-col lg:flex-row gap-8">
            
            <!-- Sidebar Categories -->
            <div class="lg:w-1/4">
                <div class="bg-white rounded-2xl shadow-lg p-6 sticky top-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                        <svg class="w-6 h-6 mr-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                        </svg>
                        Kategori Expert
                    </h2>
                    <div class="space-y-2">
                        {{-- Link untuk melihat semua expert tanpa filter kategori --}}
                        <a href="{{ route('experts.index') }}"
                           class="group flex items-center px-4 py-3 rounded-xl text-base font-medium transition-all duration-300 hover:shadow-md
                                  {{ !request()->has('category') ? 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-lg' : 'text-gray-700 hover:bg-blue-50 hover:text-blue-600' }}">
                            <svg class="w-5 h-5 mr-3 {{ !request()->has('category') ? 'text-white' : 'text-gray-400 group-hover:text-blue-500' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                            Semua Kategori
                        </a>
                        
                        {{-- Loop melalui array konstanta CATEGORIES --}}
                        @foreach ($categories as $categoryName)
                            <a href="{{ route('experts.index', ['category' => $categoryName]) }}"
                               class="group flex items-center px-4 py-3 rounded-xl text-base font-medium transition-all duration-300 hover:shadow-md
                                      {{ request('category') == $categoryName ? 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-lg' : 'text-gray-700 hover:bg-blue-50 hover:text-blue-600' }}">
                                <svg class="w-5 h-5 mr-3 {{ request('category') == $categoryName ? 'text-white' : 'text-gray-400 group-hover:text-blue-500' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                {{ $categoryName }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Expert Grid -->
            <div class="lg:w-3/4">
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <div class="flex flex-col md:flex-row md:items-center justify-between mb-8">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4 md:mb-0">
                            @if(request('category'))
                                Expert {{ request('category') }}
                            @else
                                Semua Expert
                            @endif
                        </h2>
                        <div class="text-sm text-gray-500 bg-gray-100 px-4 py-2 rounded-full">
                            {{ $experts->total() }} Expert Ditemukan
                        </div>
                    </div>

                    @forelse ($experts as $expert)
                        <div class="group bg-gradient-to-br from-white to-gray-50 border border-gray-200 rounded-2xl p-6 mb-6 hover:shadow-xl transition-all duration-500 hover:border-blue-200 hover:-translate-y-1">
                            <div class="flex flex-col md:flex-row gap-6">
                                <!-- Expert Photo -->
                                <div class="flex-shrink-0">
                                    @if ($expert->photo_path)
                                        <img src="{{ asset('storage/' . $expert->photo_path) }}" 
                                             alt="{{ $expert->name }}" 
                                             class="w-24 h-24 md:w-32 md:h-32 object-cover rounded-2xl shadow-lg group-hover:shadow-xl transition-all duration-300 ring-4 ring-white group-hover:ring-blue-100">
                                    @else
                                        <div class="w-24 h-24 md:w-32 md:h-32 bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center text-gray-500 rounded-2xl shadow-lg group-hover:shadow-xl transition-all duration-300 ring-4 ring-white group-hover:ring-blue-100">
                                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                            </svg>
                                        </div>
                                    @endif
                                </div>

                                <!-- Expert Info -->
                                <div class="flex-1">
                                    <div class="flex flex-col md:flex-row md:items-start justify-between mb-4">
                                        <div>
                                            <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-blue-600 transition-colors duration-300">{{ $expert->name }}</h3>
                                            <div class="flex items-center mb-3">
                                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800 group-hover:bg-blue-200 transition-colors duration-300">
                                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 8.172V5L8 4z"></path>
                                                    </svg>
                                                    {{ $expert->category }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="prose prose-gray max-w-none">
                                        <p class="text-gray-600 leading-relaxed">{{ Str::limit($expert->full_bio, 200) }}</p>
                                    </div>

                                    @if(strlen($expert->full_bio) > 200)
                                        <button class="mt-4 inline-flex items-center text-blue-600 hover:text-blue-700 font-medium transition-colors duration-300">
                                            Baca Selengkapnya
                                            <svg class="w-4 h-4 ml-1 transform transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                            </svg>
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center py-16">
                            <svg class="w-24 h-24 mx-auto text-gray-300 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            <h3 class="text-xl font-semibold text-gray-500 mb-2">Tidak ada expert ditemukan</h3>
                            <p class="text-gray-400">
                                @if(request('category'))
                                    Tidak ada expert untuk kategori "{{ request('category') }}" saat ini.
                                @else
                                    Belum ada expert yang terdaftar saat ini.
                                @endif
                            </p>
                            @if(request('category'))
                                <a href="{{ route('experts.index') }}" class="inline-flex items-center mt-4 px-6 py-3 bg-blue-600 text-white rounded-xl hover:bg-blue-700 transition-colors duration-300">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                    </svg>
                                    Lihat Semua Expert
                                </a>
                            @endif
                        </div>
                    @endforelse

                    <!-- Pagination -->
                    @if($experts->hasPages())
                        <div class="mt-8 pt-6 border-t border-gray-200">
                            {{ $experts->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Professional Animation Keyframes */
@keyframes drift-gentle {
    0%, 100% { transform: translateY(0px) rotate(0deg); opacity: 0.3; }
    50% { transform: translateY(-5px) rotate(3deg); opacity: 0.5; }
}

.animate-drift-gentle {
    animation: drift-gentle 10s ease-in-out infinite;
}

.animate-drift-gentle-delay {
    animation: drift-gentle 10s ease-in-out infinite;
    animation-delay: 2s;
}

.animate-drift-gentle-delay-2 {
    animation: drift-gentle 10s ease-in-out infinite;
    animation-delay: 4s;
}

.animate-drift-gentle-delay-3 {
    animation: drift-gentle 10s ease-in-out infinite;
    animation-delay: 6s;
}

/* Grid Pattern Background */
.bg-grid-pattern {
    background-image: 
        linear-gradient(rgba(59, 130, 246, 0.1) 1px, transparent 1px),
        linear-gradient(90deg, rgba(59, 130, 246, 0.1) 1px, transparent 1px);
    background-size: 50px 50px;
}
</style>

@endsection