@extends('layouts.frontend')
@section('content')
    <h1 class="text-4xl font-bold text-gray-900 mb-8 text-center">Berita Terbaru</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse ($posts as $post)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                @if ($post->image)
                    <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">
                @else
                    <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500">No Image</div>
                @endif
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-900 mb-2">{{ $post->title }}</h2>
                    <p class="text-gray-600 text-sm mb-4">
                        Dipublikasikan pada {{ $post->published_at->format('d M Y') }} oleh {{ $post->user->name }}
                    </p>
                    <p class="text-gray-700 mb-4">{{ Str::limit(strip_tags($post->content), 150) }}</p>
                    <a href="{{ route('news.show', $post->slug) }}" class="text-blue-600 hover:underline font-medium">Baca Selengkapnya &rarr;</a>
                </div>
            </div>
        @empty
            <p class="col-span-full text-center text-gray-600">Belum ada berita yang dipublikasikan.</p>
        @endforelse
    </div>

    <div class="mt-8">
        {{ $posts->links() }} {{-- Menampilkan link paginasi --}}
    </div>
@endsection