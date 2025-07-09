<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Berita Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form method="POST" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data">
                    @csrf

                    {{-- Judul --}}
                    <div class="mb-4">
                        <x-input-label for="title" :value="__('Judul Berita')" />
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>

                    {{-- Konten --}}
                    <div class="mb-4">
                        <x-input-label for="content" :value="__('Konten Berita')" />
                        <textarea id="content" name="content" rows="10" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>{{ old('content') }}</textarea>
                        <x-input-error :messages="$errors->get('content')" class="mt-2" />
                    </div>

                    {{-- Upload Gambar --}}
                    <div class="mb-4">
                        <x-input-label for="image" :value="__('Gambar Berita')" />
                        <input id="image" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="file" name="image" accept="image/*" />
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Format yang didukung: JPEG, PNG, JPG, GIF, SVG, WEBP. Maksimal 2MB.</p>
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        
                        {{-- Preview Image --}}
                        <div id="image-preview" class="mt-2 hidden">
                            <img id="preview-img" src="" alt="Preview" class="max-w-xs h-auto rounded-lg shadow-md">
                        </div>
                    </div>

                    {{-- Status Publikasi --}}
                    <div class="mb-4">
                        <label for="is_published" class="inline-flex items-center">
                            <input id="is_published" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="is_published" value="1" {{ old('is_published') ? 'checked' : '' }}>
                            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Publikasikan') }}</span>
                        </label>
                        <x-input-error class="mt-2" :messages="$errors->get('is_published')" />
                    </div>

                    <div class="flex items-center justify-end mt-6">
                        <a href="{{ route('admin.posts.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2">
                            {{ __('Batal') }}
                        </a>
                        <x-primary-button>
                            {{ __('Simpan Berita') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- JavaScript untuk preview image --}}
    <script>
        document.getElementById('image').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('preview-img').src = e.target.result;
                    document.getElementById('image-preview').classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            } else {
                document.getElementById('image-preview').classList.add('hidden');
            }
        });
    </script>
</x-app-layout>
