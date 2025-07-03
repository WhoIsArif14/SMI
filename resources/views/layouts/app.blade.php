<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <div class="flex">
            <aside class="w-64 bg-gray-800 dark:bg-gray-900 text-white min-h-screen p-4 shadow-lg">
                <div class="mb-8 text-center">
                    <h1 class="text-2xl font-bold text-gray-100">Admin Panel</h1>
                </div>
                <nav>
                    <ul>
                        <li class="mb-2">
                            <x-sidebar-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
                                <svg class="w-5 h-5 me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m0 0l-7 7m7-7v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                                {{ __('Dashboard') }}
                            </x-sidebar-link>
                        </li>
                        <li class="mb-2">
                            <x-sidebar-link :href="route('admin.posts.index')" :active="request()->routeIs('admin.posts.*')">
                                <svg class="w-5 h-5 me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v10m2-2h-3L13 22l3-3h3"></path></svg>
                                {{ __('Berita') }}
                            </x-sidebar-link>
                        </li>
                        <li class="mb-2">
                            <x-sidebar-link :href="route('admin.pages.index')" :active="request()->routeIs('admin.pages.*')">
                                <svg class="w-5 h-5 me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                {{ __('Halaman') }}
                            </x-sidebar-link>
                        </li>
                        <li class="mb-2">
                            <x-sidebar-link :href="route('admin.clients.index')" :active="request()->routeIs('admin.clients.*')">
                                <svg class="w-5 h-5 me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h2a2 2 0 002-2V4a2 2 0 00-2-2H5a2 2 0 00-2 2v14a2 2 0 002 2h2m0 0l4 4m-4-4v-4m0 4h-4m4 0h4m-4-4l-4-4"></path></svg>
                                {{ __('Klien Kami') }}
                            </x-sidebar-link>
                        </li>
                        <li class="mb-2">
                            <x-sidebar-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
                                <svg class="w-5 h-5 me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h10a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 012-2h2a2 2 0 012 2v1m-4 0h4m-4 0v1H7v-1h3zm0-4V3m-4 0v1"></path></svg>
                                {{ __('Profile') }}
                            </x-sidebar-link>
                        </li>
                        <li class="mb-2">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-sidebar-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    <svg class="w-5 h-5 me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                                    {{ __('Log Out') }}
                                </x-sidebar-link>
                            </form>
                        </li>
                    </ul>
                </nav>
            </aside>

            <main class="flex-grow p-4">
                {{ $slot }}
            </main>
        </div>

        {{-- Footer Admin --}}
        <footer class="bg-gray-800 dark:bg-gray-900 text-white p-4">
            <div class="max-w-7xl mx-auto">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="mb-4 md:mb-0">
                        <p class="text-gray-300">&copy; {{ date('Y') }} {{ config('app.name', 'Selaras Mitra Integra') }}. All rights reserved.</p>
                    </div>
                    <x-social-media size="w-5 h-5" />
                </div>
            </div>
        </footer>
    </div>
</body>
</html>