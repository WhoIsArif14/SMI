@extends('layouts.frontend') {{-- Menggunakan layout frontend Anda --}}

@section('title', 'Expert Kami - Selaras Mitra Integra')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-blue-800 text-center mb-12">EXPERT KAMI</h1>

        <div class="flex flex-col md:flex-row gap-8">
            {{-- Sidebar Kategori --}}
            <div class="md:w-1/4 bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-2xl font-semibold text-blue-700 mb-4">Kategori Psikolog</h2>
                <ul class="space-y-2">
                    @forelse (($categories ?? []) as $category)
                        <li>
                            <a href="?category={{ urlencode($category) }}"
                               class="block px-4 py-2 rounded-lg text-lg font-medium transition duration-300
                               {{ request('category') == $category ? 'bg-blue-800 text-white' : 'bg-blue-600 text-white hover:bg-blue-700' }}">
                                {{ $category }}
                            </a>
                        </li>
                    @empty
                        <li class="text-gray-500">Tidak ada kategori tersedia</li>
                    @endforelse
                    @if (request('category'))
                        <li>
                            <a href="{{ route('experts.index') }}" class="block px-4 py-2 rounded-lg text-lg font-medium bg-gray-300 text-gray-800 hover:bg-gray-400 transition duration-300 mt-4">
                                Tampilkan Semua
                            </a>
                        </li>
                    @endif
                </ul>
            </div>

            {{-- Daftar Expert --}}
            <div class="md:w-3/4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
                    @forelse (($experts ?? collect()) as $expert)
                        <div class="bg-yellow-400 rounded-lg shadow-md p-6 flex items-center space-x-4">
                            <div class="flex-shrink-0 w-24 h-24 rounded-full overflow-hidden border-4 border-white">
                                @if ($expert->photo_path)
                                    <img src="{{ asset('storage/' . $expert->photo_path) }}" alt="{{ $expert->name }}" class="w-full h-full object-cover">
                                @else
                                    <div class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-500 text-xs">No Photo</div>
                                @endif
                            </div>
                            <div class="flex-grow text-blue-800">
                                <h3 class="text-xl font-bold">{{ $expert->name }}</h3>
                                <p class="text-lg">{{ $expert->university }}</p>
                                <p class="text-md">{{ Str::limit($expert->experience, 80) }}</p>
                                <a href="{{ route('experts.show', $expert->id) }}" class="text-blue-600 hover:underline text-sm mt-2 block">Lihat selengkapnya</a>
                            </div>
                        </div>
                    @empty
                        <div class="md:col-span-2 lg:col-span-2 bg-white rounded-lg shadow-md p-6 text-center text-gray-700">
                            Tidak ada expert ditemukan untuk kategori ini.
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
