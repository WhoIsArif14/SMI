<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Expert') }}
            </h2>>
        <form action="{{ route('admin.experts.store') }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded-lg p-6">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama Lengkap:</label>
                <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('name') }}" required>
            </div>
            <div class="mb-4">
                <label for="university" class="block text-gray-700 text-sm font-bold mb-2">Universitas:</label>
                <input type="text" name="university" id="university" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('university') }}">
            </div>
            <div class="mb-4">
                <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Kategori:</label>
                <select name="category" id="category" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    <option value="">Pilih Kategori</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category }}" {{ old('category') == $category ? 'selected' : '' }}>{{ $category }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="experience" class="block text-gray-700 text-sm font-bold mb-2">Pengalaman Kerja (Singkat):</label>
                <textarea name="experience" id="experience" rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>{{ old('experience') }}</textarea>
            </div>
            <div class="mb-4">
                <label for="full_bio" class="block text-gray-700 text-sm font-bold mb-2">Biografi Lengkap (Lihat Selengkapnya):</label>
                <textarea name="full_bio" id="full_bio" rows="6" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('full_bio') }}</textarea>
            </div>
            <div class="mb-4">
                <label for="photo" class="block text-gray-700 text-sm font-bold mb-2">Foto Profil:</label>
                <input type="file" name="photo" id="photo" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none">
                <p class="mt-1 text-sm text-gray-500">JPG, PNG, JPEG, GIF, SVG (MAX. 2MB).</p>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Simpan Expert
                </button>
                <a href="{{ route('admin.experts.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-600 hover:text-blue-800">
                    Batal
                </a>
            </div>
        </form>
    </div>
</x-app-layout>