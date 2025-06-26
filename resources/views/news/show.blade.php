<x-frontend-layout>
    <article class="bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ $post->title }}</h1>
        <p class="text-gray-600 text-sm mb-6">
            Dipublikasikan pada {{ $post->published_at->format('d M Y') }} oleh {{ $post->user->name }}
        </p>

        @if ($post->image)
            <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" class="w-full max-h-96 object-contain mb-6 rounded-lg">
        @endif

        <div class="prose max-w-none text-gray-800 leading-relaxed">
            {!! $post->content !!} {{-- Menggunakan {!! !!} karena konten bisa berisi HTML --}}
        </div>

        <div class="mt-8 text-center">
            <a href="{{ route('news.index') }}" class="inline-block bg-gray-200 text-gray-800 py-2 px-4 rounded-lg hover:bg-gray-300 transition duration-300">&larr; Kembali ke Daftar Berita</a>
        </div>
    </article>
</x-frontend-layout>