<x-app-layout>
    <x-slot name="header">
        <div class="bg-gradient-to-r from-blue-900 via-blue-800 to-blue-900 rounded-lg p-6 shadow-lg">
            <h2 class="font-bold text-2xl text-white leading-tight flex items-center">
                <svg class="w-8 h-8 mr-3 text-blue-200" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z" />
                </svg>
                {{ __('Dashboard Admin') }}
            </h2>
            <p class="text-blue-100 mt-2">Panel kontrol administrasi SMI</p>
        </div>
    </x-slot>

    <div class="py-8 bg-gradient-to-br from-slate-50 to-blue-50 dark:from-gray-900 dark:to-blue-900 min-h-screen">
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

                        {{-- Welcome Section --}}
                        <div
                            class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-2xl mb-8 border border-blue-100 dark:border-blue-800">
                            <div class="p-8 bg-gradient-to-r from-blue-600 to-blue-800 text-white">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h1 class="text-3xl font-bold mb-2">Selamat Datang, {{ Auth::user()->name }}! 👋
                                        </h1>
                                        <p class="text-blue-100 text-lg">Kelola semua konten website SMI dari sini</p>
                                    </div>
                                    <div class="hidden md:block">
                                        <div
                                            class="w-24 h-24 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                                            <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                                            </svg>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            {{-- Stats Cards --}}
                            <div class="p-6 bg-gray-50 dark:bg-gray-700">
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <div class="bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl p-4 text-white">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <p class="text-blue-100 text-sm">Total Berita</p>
                                                <p class="text-2xl font-bold">{{ \App\Models\Post::count() }}</p>
                                            </div>
                                            <svg class="w-8 h-8 text-blue-200" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z" />
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="bg-gradient-to-r from-cyan-500 to-cyan-600 rounded-xl p-4 text-white">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <p class="text-cyan-100 text-sm">Total Klien</p>
                                                <p class="text-2xl font-bold">{{ \App\Models\Client::count() }}</p>
                                            </div>
                                            <svg class="w-8 h-8 text-cyan-200" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M16 4c0-1.11.89-2 2-2s2 .89 2 2-.89 2-2 2-2-.89-2-2zm4 18v-6h2.5l-2.54-7.63A3 3 0 0 0 17.1 7H16c-.8 0-1.54.37-2.03.97L12 10.5l-1.97-2.53A2.99 2.99 0 0 0 8 7H6.9a3 3 0 0 0-2.86 1.37L1.5 16H4v6h2v-6h2.5l1.4-1.75L12 16.5l2.1-2.25L15.5 16H18v6h2z" />
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="bg-gradient-to-r from-teal-500 to-teal-600 rounded-xl p-4 text-white">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <p class="text-teal-100 text-sm">Total Expert</p>
                                                <p class="text-2xl font-bold">{{ \App\Models\Expert::count() }}</p>
                                            </div>
                                            <svg class="w-8 h-8 text-teal-200" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2C13.1 2 14 2.9 14 4C14 5.1 13.1 6 12 6C10.9 6 10 5.1 10 4C10 2.9 10.9 2 12 2ZM21 9V7L15 1L13.5 2.5L16.17 5.17C15.24 5.06 14.32 5 13.38 5H10.62C9.68 5 8.76 5.06 7.83 5.17L10.5 2.5L9 1L3 7V9H4.27C5.04 10.81 6.5 12.19 8.34 12.8C7.51 13.5 7 14.63 7 15.86V21H9V15.86C9 14.97 9.62 14.2 10.5 14.04L11.5 21H12.5L13.5 14.04C14.38 14.2 15 14.97 15 15.86V21H17V15.86C17 14.63 16.49 13.5 15.66 12.8C17.5 12.19 18.96 10.81 19.73 9H21Z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Management Cards --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                            {{-- Card untuk Berita --}}
                            <div
                                class="group relative bg-white dark:bg-gray-800 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-blue-100 dark:border-blue-800 overflow-hidden">
                                <div
                                    class="absolute inset-0 bg-gradient-to-br from-blue-600 to-blue-800 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                </div>
                                <div class="relative p-8">
                                    <div class="flex items-center justify-between mb-4">
                                        <div
                                            class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl flex items-center justify-center shadow-lg group-hover:shadow-xl transition-shadow duration-300">
                                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z" />
                                            </svg>
                                        </div>
                                        <div class="opacity-20 group-hover:opacity-40 transition-opacity duration-300">
                                            <svg class="w-24 h-24 text-blue-600" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <h3
                                        class="text-2xl font-bold text-gray-900 dark:text-gray-100 group-hover:text-white transition-colors duration-300 mb-3">
                                        Manajemen Berita
                                    </h3>
                                    <p
                                        class="text-gray-600 dark:text-gray-300 group-hover:text-blue-100 transition-colors duration-300 mb-6">
                                        Kelola postingan berita dan artikel terbaru untuk website.
                                    </p>
                                    <a href="{{ route('admin.posts.index') }}"
                                        class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 border border-transparent rounded-xl font-semibold text-sm text-white uppercase tracking-wider hover:from-blue-700 hover:to-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl group-hover:bg-white group-hover:text-blue-600">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                        Kelola Berita
                                        <svg class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform duration-300"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            {{-- Card untuk Klien --}}
                            <div
                                class="group relative bg-white dark:bg-gray-800 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-cyan-100 dark:border-cyan-800 overflow-hidden">
                                <div
                                    class="absolute inset-0 bg-gradient-to-br from-cyan-600 to-cyan-800 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                </div>
                                <div class="relative p-8">
                                    <div class="flex items-center justify-between mb-4">
                                        <div
                                            class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-cyan-700 rounded-2xl flex items-center justify-center shadow-lg group-hover:shadow-xl transition-shadow duration-300">
                                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M16 4c0-1.11.89-2 2-2s2 .89 2 2-.89 2-2 2-2-.89-2-2zm4 18v-6h2.5l-2.54-7.63A3 3 0 0 0 17.1 7H16c-.8 0-1.54.37-2.03.97L12 10.5l-1.97-2.53A2.99 2.99 0 0 0 8 7H6.9a3 3 0 0 0-2.86 1.37L1.5 16H4v6h2v-6h2.5l1.4-1.75L12 16.5l2.1-2.25L15.5 16H18v6h2z" />
                                            </svg>
                                        </div>
                                        <div class="opacity-20 group-hover:opacity-40 transition-opacity duration-300">
                                            <svg class="w-24 h-24 text-cyan-600" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M16 4c0-1.11.89-2 2-2s2 .89 2 2-.89 2-2 2-2-.89-2-2zm4 18v-6h2.5l-2.54-7.63A3 3 0 0 0 17.1 7H16c-.8 0-1.54.37-2.03.97L12 10.5l-1.97-2.53A2.99 2.99 0 0 0 8 7H6.9a3 3 0 0 0-2.86 1.37L1.5 16H4v6h2v-6h2.5l1.4-1.75L12 16.5l2.1-2.25L15.5 16H18v6h2z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <h3
                                        class="text-2xl font-bold text-gray-900 dark:text-gray-100 group-hover:text-white transition-colors duration-300 mb-3">
                                        Manajemen Klien
                                    </h3>
                                    <p
                                        class="text-gray-600 dark:text-gray-300 group-hover:text-cyan-100 transition-colors duration-300 mb-6">
                                        Kelola daftar klien dan logo perusahaan mereka.
                                    </p>
                                    <a href="{{ route('admin.clients.index') }}"
                                        class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-cyan-600 to-cyan-700 border border-transparent rounded-xl font-semibold text-sm text-white uppercase tracking-wider hover:from-cyan-700 hover:to-cyan-800 focus:outline-none focus:ring-4 focus:ring-cyan-300 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl group-hover:bg-white group-hover:text-cyan-600">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                        Kelola Klien
                                        <svg class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform duration-300"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            {{-- Card untuk Expert --}}
                            <div
                                class="group relative bg-white dark:bg-gray-800 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-teal-100 dark:border-teal-800 overflow-hidden">
                                <div
                                    class="absolute inset-0 bg-gradient-to-br from-teal-600 to-teal-800 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                </div>
                                <div class="relative p-8">
                                    <div class="flex items-center justify-between mb-4">
                                        <div
                                            class="w-16 h-16 bg-gradient-to-br from-teal-500 to-teal-700 rounded-2xl flex items-center justify-center shadow-lg group-hover:shadow-xl transition-shadow duration-300">
                                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2C13.1 2 14 2.9 14 4C14 5.1 13.1 6 12 6C10.9 6 10 5.1 10 4C10 2.9 10.9 2 12 2ZM21 9V7L15 1L13.5 2.5L16.17 5.17C15.24 5.06 14.32 5 13.38 5H10.62C9.68 5 8.76 5.06 7.83 5.17L10.5 2.5L9 1L3 7V9H4.27C5.04 10.81 6.5 12.19 8.34 12.8C7.51 13.5 7 14.63 7 15.86V21H9V15.86C9 14.97 9.62 14.2 10.5 14.04L11.5 21H12.5L13.5 14.04C14.38 14.2 15 14.97 15 15.86V21H17V15.86C17 14.63 16.49 13.5 15.66 12.8C17.5 12.19 18.96 10.81 19.73 9H21Z" />
                                            </svg>
                                        </div>
                                        <div class="opacity-20 group-hover:opacity-40 transition-opacity duration-300">
                                            <svg class="w-24 h-24 text-teal-600" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2C13.1 2 14 2.9 14 4C14 5.1 13.1 6 12 6C10.9 6 10 5.1 10 4C10 2.9 10.9 2 12 2ZM21 9V7L15 1L13.5 2.5L16.17 5.17C15.24 5.06 14.32 5 13.38 5H10.62C9.68 5 8.76 5.06 7.83 5.17L10.5 2.5L9 1L3 7V9H4.27C5.04 10.81 6.5 12.19 8.34 12.8C7.51 13.5 7 14.63 7 15.86V21H9V15.86C9 14.97 9.62 14.2 10.5 14.04L11.5 21H12.5L13.5 14.04C14.38 14.2 15 14.97 15 15.86V21H17V15.86C17 14.63 16.49 13.5 15.66 12.8C17.5 12.19 18.96 10.81 19.73 9H21Z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <h3
                                        class="text-2xl font-bold text-gray-900 dark:text-gray-100 group-hover:text-white transition-colors duration-300 mb-3">
                                        Manajemen Expert
                                    </h3>
                                    <p
                                        class="text-gray-600 dark:text-gray-300 group-hover:text-teal-100 transition-colors duration-300 mb-6">
                                        Kelola daftar expert dan layanan konsultasi.
                                    </p>
                                    <a href="{{ route('admin.experts.index') }}"
                                        class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-teal-600 to-teal-700 border border-transparent rounded-xl font-semibold text-sm text-white uppercase tracking-wider hover:from-teal-700 hover:to-teal-800 focus:outline-none focus:ring-4 focus:ring-teal-300 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl group-hover:bg-white group-hover:text-teal-600">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        Kelola Expert
                                        <svg class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform duration-300"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        {{-- Quick Actions Section --}}
                        <div class="mt-12">
                            <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-6 flex items-center">
                                <svg class="w-8 h-8 mr-3 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13,9H18.5L13,3.5V9M6,2H14L20,8V20A2,2 0 0,1 18,22H6C4.89,22 4,21.1 4,20V4C4,2.89 4.89,2 6,2M15,18V16H6V18H15M18,14V12H6V14H18Z" />
                                </svg>
                                Quick Actions
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <a href="{{ route('admin.posts.create') }}"
                                    class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-blue-100 dark:border-blue-800 group">
                                    <div
                                        class="flex items-center justify-center w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg mb-4 group-hover:bg-blue-600 transition-colors duration-300">
                                        <svg class="w-6 h-6 text-blue-600 group-hover:text-white transition-colors duration-300"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 4v16m8-8H4" />
                                        </svg>
                                    </div>
                                    <h4
                                        class="font-semibold text-gray-900 dark:text-gray-100 group-hover:text-blue-600 dark:group-hover:text-blue-400">
                                        Tambah Berita</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Buat artikel baru</p>
                                </a>

                                <a href="{{ route('admin.clients.create') }}"
                                    class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-cyan-100 dark:border-cyan-800 group">
                                    <div
                                        class="flex items-center justify-center w-12 h-12 bg-cyan-100 dark:bg-cyan-900 rounded-lg mb-4 group-hover:bg-cyan-600 transition-colors duration-300">
                                        <svg class="w-6 h-6 text-cyan-600 group-hover:text-white transition-colors duration-300"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                        </svg>
                                    </div>
                                    <h4
                                        class="font-semibold text-gray-900 dark:text-gray-100 group-hover:text-cyan-600 dark:group-hover:text-cyan-400">
                                        Tambah Klien</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Daftarkan klien baru</p>
                                </a>

                                <a href="{{ route('admin.experts.create') }}"
                                    class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-teal-100 dark:border-teal-800 group">
                                    <div
                                        class="flex items-center justify-center w-12 h-12 bg-teal-100 dark:bg-teal-900 rounded-lg mb-4 group-hover:bg-teal-600 transition-colors duration-300">
                                        <svg class="w-6 h-6 text-teal-600 group-hover:text-white transition-colors duration-300"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>
                                    <h4
                                        class="font-semibold text-gray-900 dark:text-gray-100 group-hover:text-teal-600 dark:group-hover:text-teal-400">
                                        Tambah Expert</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Registrasi expert baru</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
</x-app-layout>
