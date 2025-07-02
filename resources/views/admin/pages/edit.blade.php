<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Halaman') }}: {{ $page->title }}
        </h2>
    </x-slot>

     <div class="py-12">
       <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
               <form method="POST" action="{{ route('admin.pages.update', $page) }}">
                   @csrf
                   @method('PUT')

                   {{-- Judul Halaman --}}
                   <div class="mb-4">
                       <x-input-label for="title" :value="__('Judul')" />
                       <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title', $page->title)" required autofocus />
                       <x-input-error class="mt-2" :messages="$errors->get('title')" />
                   </div>

                   {{-- Konten Halaman --}}
                   <div class="mb-4">
                       <x-input-label for="content" :value="__('Konten')" />
                       <textarea id="content" name="content" rows="10" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full">{{ old('content', $page->content) }}</textarea>
                       <x-input-error class="mt-2" :messages="$errors->get('content')" />
                   </div>

                   {{-- Status Publikasi --}}
                   <div class="mb-4">
                       <label for="is_published" class="inline-flex items-center">
                           <input id="is_published" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="is_published" value="1" {{ old('is_published', $page->is_published) ? 'checked' : '' }}>
                           <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Publikasikan') }}</span>
                       </label>
                       <x-input-error class="mt-2" :messages="$errors->get('is_published')" />
                   </div>

                   <div class="flex items-center justify-end mt-6">
                       <x-primary-button>
                           {{ __('Update Halaman') }}
                       </x-primary-button>
                   </div>
               </form>
           </div>
       </div>
   </div>
</x-admin-layout>