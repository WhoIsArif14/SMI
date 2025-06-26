<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Anda telah login!") }}
                    <div class="mt-4">
                        <p>Selamat datang di panel administrasi Anda. Dari sini Anda bisa mengelola konten website.</p>
                        <ul class="list-disc list-inside mt-2">
                            <li><a href="{{ route('admin.posts.index') }}" class="text-blue-600 hover:underline">Kelola Berita</a></li>
                            <li><a href="{{ route('admin.pages.index') }}" class="text-blue-600 hover:underline">Kelola Halaman</a></li>
                            {{-- Tambahkan link ke manajemen lain --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>