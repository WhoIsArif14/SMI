@extends('layouts.frontend') {{-- Menggunakan layout frontend Anda --}}

@section('title', $expert->name . ' - Expert Kami')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden p-8">
            <div class="flex flex-col md:flex-row items-center md:items-start gap-8">
                <div class="flex-shrink-0">
                    @if ($expert->photo_path)
                        <img src="{{ asset('storage/' . $expert->photo_path) }}" alt="{{ $expert->name }}" class="w-48 h-48 object-cover rounded-full border-4 border-yellow-400 shadow-lg">
                    @else
                        <div class="w-48 h-48 bg-gray-200 rounded-full flex items-center justify-center text-gray-500 text-lg border-4 border-yellow-400 shadow-lg">No Photo</div>
                    @endif
                </div>
                <div class="text-gray-800 text-center md:text-left">
                    <h1 class="text-4xl font-bold text-blue-800 mb-2">{{ $expert->name }}</h1>
                    <p class="text-xl text-gray-700 mb-2">{{ $expert->university }}</p>
                    <p class="text-lg font-semibold text-blue-600 mb-4">Kategori: {{ $expert->category }}</p>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2">Pengalaman Singkat:</h2>
                    <p class="text-lg mb-4">{{ $expert->experience }}</p>

                    @if ($expert->full_bio)
                        <h2 class="text-2xl font-semibold text-gray-800 mb-2">Biografi Lengkap:</h2>
                        <p class="text-lg leading-relaxed text-gray-700">{{ $expert->full_bio }}</p>
                    @endif

                    <div class="mt-8">
                        <a href="{{ route('experts.index') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300">
                            Kembali ke Daftar Expert
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection