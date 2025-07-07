@extends('layouts.app') {{-- Atau layout admin Anda --}}

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Edit Expert: {{ $expert->name }}</h1>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.experts.update', $expert->id) }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded-lg p-6">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama Lengkap:</label>
                <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('name', $expert->name) }}" required>
            </div>
            <div class="mb-4">
                <label for="university" class="block text-gray-700 text-sm font-bold mb-2">Universitas:</label>
                <input type="text" name="university" id="university" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('university', $expert->university) }}">
            </div>
            <div class="mb-4">
                <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Kategori:</label>
                <select name="category" id="category" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    <option value="">Pilih Kategori</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category }}" {{ old('category', $expert->category) == $category ? 'selected' : '' }}>{{ $category }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="experience" class="block text-gray-700 text-sm font-bold mb-2">Pengalaman Kerja (Singkat):</label>
                <textarea name="experience" id="experience" rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>{{ old('experience', $expert->experience) }}</textarea>
            </div>
            <div class="mb-4">
                <label for="full_bio" class="block text-gray-700 text-sm font-bold mb-2">Biografi Lengkap (Lihat Selengkapnya):</label>
                <textarea name="full_bio" id="full_bio" rows="6" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('full_bio', $expert->full_bio) }}</textarea>
            </div>
            <div class="mb-4">
                <label for="photo" class="block text-gray-700 text-sm font-bold mb-2">Foto Profil Saat Ini:</label>
                @if ($expert->photo_path)
                    <img src="{{ asset('storage/' . $expert->photo_path) }}" alt="{{ $expert->name }}" class="w-32 h-32 object-cover rounded-full mb-2">
                    <label class="inline-flex items-center mt-2">
                        <input type="checkbox" name="remove_photo" value="1" class="form-checkbox">
                        <span class="ml-2 text-gray-700">Hapus Foto</span>
                    </label>
                @else
                    <p class="text-gray-600">Tidak ada foto profil saat ini.</p>
                @endif
                <label for="photo" class="block text-gray-700 text-sm font-bold mt-4 mb-2">Unggah Foto Profil Baru:</label>
                <input type="file" name="photo" id="photo" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none">
                <p class="mt-1 text-sm text-gray-500">JPG, PNG, JPEG, GIF, SVG (MAX. 2MB).</p>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Perbarui Expert
                </button>
                <a href="{{ route('admin.experts.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-600 hover:text-blue-800">
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection