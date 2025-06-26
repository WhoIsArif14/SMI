{{-- resources/views/pages/show.blade.php --}}
@extends('components.frontend-layout') {{-- Menggunakan layout frontend Anda --}}

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-blue-800 mb-6">{{ $page->title }}</h1>
        <div class="prose max-w-none"> {{-- Tailwind Typography untuk styling konten --}}
            {!! $page->content !!} {{-- Menggunakan {!! !!} karena konten biasanya HTML --}}
        </div>
    </div>
@endsection