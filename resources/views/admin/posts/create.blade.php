<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ isset($post) ? __('Edit Berita') : __('Tambah Berita Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form method="POST" action="{{ isset($post) ? route('admin.posts.update', $post) : route('admin.posts.store') }}" enctype="multipart/form-data">
                    @csrf
                    @if (isset($post))
                        @method('PUT')
                    @endif

                    {{-- Judul Berita --}}
                    <div class="mb-4">
                        <x-input-label for="title" :value="__('Judul')" />
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title', $post->title ?? '')" required autofocus />
                        <x-input-error class="mt-2" :messages="$errors->get('title')" />
                    </div>

                    {{-- Konten Berita (Gunakan text-area atau editor WYSIWYG) --}}
                    <div class="mb-4">
                        <x-input-label for="content" :value="__('Konten')" />
                        <textarea id="content" name="content" rows="10" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full">{{ old('content', $post->content ?? '') }}</textarea>
                        <x-input-error class="mt-2" :messages="$errors->get('content')" />
                        {{-- Untuk editor WYSIWYG seperti TinyMCE atau CKEditor, Anda perlu mengintegrasikannya di sini dan menginisialisasi JS-nya --}}
                    </div>

                    {{-- Gambar Thumbnail (Opsional) --}}
                    <div class="mb-4">
                        <x-input-label for="thumbnail" :value="__('Gambar Thumbnail')" />
                        <input id="thumbnail" class="block mt-1 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file" name="thumbnail" accept="image/*">
                        <x-input-error class="mt-2" :messages="$errors->get('thumbnail')" />
                        @if (isset($post) && $post->thumbnail)
                            <div class="mt-2">
                                <p class="text-sm text-gray-500 dark:text-gray-400">Gambar saat ini:</p>
                                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Thumbnail" class="mt-2 w-32 h-32 object-cover rounded-lg">
                            </div>
                        @endif
                    </div>

                    {{-- Status Publikasi --}}
                    <div class="mb-4">
                        <label for="is_published" class="inline-flex items-center">
                            <input id="is_published" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="is_published" value="1" {{ old('is_published', $post->is_published ?? false) ? 'checked' : '' }}>
                            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Publikasikan') }}</span>
                        </label>
                        <x-input-error class="mt-2" :messages="$errors->get('is_published')" />
                    </div>

                    <div class="flex items-center justify-end mt-6">
                        <x-primary-button>
                            {{ isset($post) ? __('Update Berita') : __('Simpan Berita') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>