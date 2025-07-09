@extends('layouts.frontend')

@section('content')
<div class="container mx-auto px-4 py-8">
    <article class="max-w-4xl mx-auto">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">{{ $post->title }}</h1>
        
        <div class="text-gray-600 text-sm mb-6">
            Dipublikasikan pada {{ $post->published_at ? $post->published_at->format('d M Y') : 'Draft' }}
            @if ($post->user)
                oleh {{ $post->user->name }}
            @endif
        </div>

        @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-64 object-cover rounded-lg mb-6">
        @endif

        <div class="prose max-w-none">
            {!! nl2br(e($post->content)) !!}
        </div>
    </article>
</div>
@endsection
