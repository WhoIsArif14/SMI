<x-app-layout> {{-- Menggunakan layout admin default dari Breeze --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="text-2xl font-bold mb-4">Selamat Datang, {{ Auth::user()->name }}!</p>
                    <p class="text-gray-700 dark:text-gray-300">Ini adalah panel administrasi Anda. Dari sini Anda bisa
                        mengelola konten website.</p>

                    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        {{-- Card untuk Berita --}}
                        <div
                            class="bg-blue-100 dark:bg-blue-700 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                            <h3 class="text-xl font-semibold text-blue-800 dark:text-blue-100 mb-2">Manajemen Berita
                            </h3>
                            <p class="text-blue-700 dark:text-blue-200 mb-4">Kelola postingan berita dan artikel.</p>
                            <a href="{{ route('admin.posts.index') }}"
                                class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                Lihat Berita
                                <svg class="ms-2 -me-0.5 h-4 w-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>

                        {{-- Card untuk Klien --}}
                        <div
                            class="bg-purple-100 dark:bg-purple-700 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                            <h3 class="text-xl font-semibold text-purple-800 dark:text-purple-100 mb-2">Manajemen Klien
                            </h3>
                            <p class="text-purple-700 dark:text-purple-200 mb-4">Kelola daftar klien dan logo mereka.
                            </p>
                            <a href="{{ route('admin.clients.index') }}"
                                class="inline-flex items-center px-4 py-2 bg-purple-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-purple-700 focus:bg-purple-700 active:bg-purple-900 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                Lihat Klien
                                <svg class="ms-2 -me-0.5 h-4 w-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>

                        {{-- Card untuk Expert --}}
                        <div
                            class="bg-green-100 dark:bg-green-700 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                            <h3 class="text-xl font-semibold text-green-800 dark:text-green-100 mb-2">Manajemen Expert
                            </h3>
                            <p class="text-green-700 dark:text-green-200 mb-4">Kelola daftar expert dan layanan kami.
                            </p>
                            <a href="{{ route('admin.experts.index') }}"
                                class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 focus:bg-green-700 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                Lihat Expert
                                <svg class="ms-2 -me-0.5 h-4 w-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>

                        {{-- Tambahkan card lain untuk modul lain (layanan, users, settings, dll.) --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
