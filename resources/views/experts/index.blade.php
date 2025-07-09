@extends('layouts.frontend') {{-- Menggunakan layout frontend Anda --}}
@section('title', 'Daftar Expert')
@section('content')
<div class="md:w-1/4 bg-white rounded-lg shadow-md p-6">
    <h2 class="text-2xl font-semibold text-blue-700 mb-4">Kategori Expert</h2>
    <ul class="space-y-2">
        {{-- Loop melalui array konstanta CATEGORIES --}}
        @foreach ($categories as $categoryName)
            <li>
                {{-- Gunakan $categoryName langsung untuk URL dan teks tampilan --}}
                <a href="{{ route('experts.index', ['category' => $categoryName]) }}"
                   class="block px-4 py-2 rounded-lg text-lg font-medium
                          {{ request('category') == $categoryName ? 'bg-blue-600 text-white' : 'text-gray-700 hover:bg-gray-100' }}">
                    {{ $categoryName }}
                </a>
            </li>
        @endforeach
        {{-- Link untuk melihat semua expert tanpa filter kategori --}}
        <li>
            <a href="{{ route('experts.index') }}"
               class="block px-4 py-2 rounded-lg text-lg font-medium
                      {{ !request()->has('category') ? 'bg-blue-600 text-white' : 'text-gray-700 hover:bg-gray-100' }}">
                Semua Kategori
            </a>
        </li>
    </ul>
</div>

<div class="md:w-3/4 p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Daftar Expert</h2>
    @forelse ($experts as $expert)
        <div class="mb-4 p-4 border rounded-lg">
            <h3 class="text-xl font-bold">{{ $expert->name }}</h3>
            {{-- Tampilkan kategori dari kolom 'category' di model Expert --}}
            <p class="text-gray-600 text-sm">Kategori: {{ $expert->category }}</p>
            <p class="mt-2">{{ $expert->full_bio }}</p> {{-- Menggunakan full_bio sesuai model --}}
            {{-- Tampilkan gambar expert jika ada, sesuai dengan photo_path --}}
            @if ($expert->photo_path)
                <img src="{{ asset('storage/' . $expert->photo_path) }}" alt="{{ $expert->name }}" class="mt-2 w-32 h-32 object-cover rounded-lg">
            @else
                <div class="mt-2 w-32 h-32 bg-gray-200 flex items-center justify-center text-gray-500 rounded-lg">
                    No Photo
                </div>
            @endif
        </div>
    @empty
        <p class="text-gray-500">Tidak ada expert ditemukan untuk kategori ini.</p>
    @endforelse

    <div class="mt-4">
        {{ $experts->links() }}
    </div>
</div>
@endsection