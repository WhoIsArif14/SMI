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
            <aside class="w-72 bg-gradient-to-b from-slate-900 via-blue-900 to-slate-900 text-white min-h-screen shadow-2xl border-r border-blue-800/30 flex flex-col">
                {{-- Logo/Brand Section --}}
                <div class="p-6 border-b border-blue-800/30">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-blue-400 to-blue-600 rounded-xl flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                        </div>
                        <div>
                            <h1 class="text-xl font-bold bg-gradient-to-r from-blue-200 to-cyan-200 bg-clip-text text-transparent">Admin Panel</h1>
                            <p class="text-xs text-blue-300">SMI Management</p>
                        </div>
                    </div>
                </div>

                {{-- Navigation Menu --}}
                <nav class="flex-1 p-4 space-y-2 overflow-y-auto">
                    {{-- Dashboard --}}
                    <div class="group">
                        <x-sidebar-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')" class="flex items-center px-4 py-3 rounded-xl transition-all duration-300 hover:bg-blue-800/50 hover:transform hover:translate-x-1 {{ request()->routeIs('admin.dashboard') ? 'bg-gradient-to-r from-blue-600 to-blue-700 shadow-lg shadow-blue-500/25' : '' }}">
                            <div class="w-8 h-8 rounded-lg {{ request()->routeIs('admin.dashboard') ? 'bg-white/20' : 'bg-blue-800/30' }} flex items-center justify-center mr-3 group-hover:bg-white/20 transition-colors duration-300">
                                <svg class="w-4 h-4 {{ request()->routeIs('admin.dashboard') ? 'text-white' : 'text-blue-300' }} group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m0 0l-7 7m7-7v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg>
                            </div>
                            <span class="font-medium {{ request()->routeIs('admin.dashboard') ? 'text-white' : 'text-blue-100' }} group-hover:text-white transition-colors duration-300">{{ __('Dashboard') }}</span>
                            @if(request()->routeIs('admin.dashboard'))
                                <div class="ml-auto w-2 h-2 bg-blue-300 rounded-full animate-pulse"></div>
                            @endif
                        </x-sidebar-link>
                    </div>

                    {{-- Berita --}}
                    <div class="group">
                        <x-sidebar-link :href="route('admin.posts.index')" :active="request()->routeIs('admin.posts.*')" class="flex items-center px-4 py-3 rounded-xl transition-all duration-300 hover:bg-blue-800/50 hover:transform hover:translate-x-1 {{ request()->routeIs('admin.posts.*') ? 'bg-gradient-to-r from-blue-600 to-blue-700 shadow-lg shadow-blue-500/25' : '' }}">
                            <div class="w-8 h-8 rounded-lg {{ request()->routeIs('admin.posts.*') ? 'bg-white/20' : 'bg-blue-800/30' }} flex items-center justify-center mr-3 group-hover:bg-white/20 transition-colors duration-300">
                                <svg class="w-4 h-4 {{ request()->routeIs('admin.posts.*') ? 'text-white' : 'text-blue-300' }} group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1M9 12h4m-4 4h4m2-5a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <span class="font-medium {{ request()->routeIs('admin.posts.*') ? 'text-white' : 'text-blue-100' }} group-hover:text-white transition-colors duration-300">{{ __('Berita') }}</span>
                            @if(request()->routeIs('admin.posts.*'))
                                <div class="ml-auto w-2 h-2 bg-blue-300 rounded-full animate-pulse"></div>
                            @endif
                        </x-sidebar-link>
                    </div>

                    {{-- Klien --}}
                    <div class="group">
                        <x-sidebar-link :href="route('admin.clients.index')" :active="request()->routeIs('admin.clients.*')" class="flex items-center px-4 py-3 rounded-xl transition-all duration-300 hover:bg-cyan-800/50 hover:transform hover:translate-x-1 {{ request()->routeIs('admin.clients.*') ? 'bg-gradient-to-r from-cyan-600 to-cyan-700 shadow-lg shadow-cyan-500/25' : '' }}">
                            <div class="w-8 h-8 rounded-lg {{ request()->routeIs('admin.clients.*') ? 'bg-white/20' : 'bg-cyan-800/30' }} flex items-center justify-center mr-3 group-hover:bg-white/20 transition-colors duration-300">
                                <svg class="w-4 h-4 {{ request()->routeIs('admin.clients.*') ? 'text-white' : 'text-cyan-300' }} group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <span class="font-medium {{ request()->routeIs('admin.clients.*') ? 'text-white' : 'text-blue-100' }} group-hover:text-white transition-colors duration-300">{{ __('Klien Kami') }}</span>
                            @if(request()->routeIs('admin.clients.*'))
                                <div class="ml-auto w-2 h-2 bg-cyan-300 rounded-full animate-pulse"></div>
                            @endif
                        </x-sidebar-link>
                    </div>

                    {{-- Expert --}}
                    <div class="group">
                        <x-sidebar-link :href="route('admin.experts.index')" :active="request()->routeIs('admin.experts.*')" class="flex items-center px-4 py-3 rounded-xl transition-all duration-300 hover:bg-teal-800/50 hover:transform hover:translate-x-1 {{ request()->routeIs('admin.experts.*') ? 'bg-gradient-to-r from-teal-600 to-teal-700 shadow-lg shadow-teal-500/25' : '' }}">
                            <div class="w-8 h-8 rounded-lg {{ request()->routeIs('admin.experts.*') ? 'bg-white/20' : 'bg-teal-800/30' }} flex items-center justify-center mr-3 group-hover:bg-white/20 transition-colors duration-300">
                                <svg class="w-4 h-4 {{ request()->routeIs('admin.experts.*') ? 'text-white' : 'text-teal-300' }} group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                </svg>
                            </div>
                            <span class="font-medium {{ request()->routeIs('admin.experts.*') ? 'text-white' : 'text-blue-100' }} group-hover:text-white transition-colors duration-300">{{ __('Expert Kami') }}</span>
                            @if(request()->routeIs('admin.experts.*'))
                                <div class="ml-auto w-2 h-2 bg-teal-300 rounded-full animate-pulse"></div>
                            @endif
                        </x-sidebar-link>
                    </div>

                    {{-- Divider --}}
                    <div class="my-6 border-t border-blue-800/30"></div>

                    {{-- Profile --}}
                    <div class="group">
                        <x-sidebar-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')" class="flex items-center px-4 py-3 rounded-xl transition-all duration-300 hover:bg-indigo-800/50 hover:transform hover:translate-x-1 {{ request()->routeIs('profile.edit') ? 'bg-gradient-to-r from-indigo-600 to-indigo-700 shadow-lg shadow-indigo-500/25' : '' }}">
                            <div class="w-8 h-8 rounded-lg {{ request()->routeIs('profile.edit') ? 'bg-white/20' : 'bg-indigo-800/30' }} flex items-center justify-center mr-3 group-hover:bg-white/20 transition-colors duration-300">
                                <svg class="w-4 h-4 {{ request()->routeIs('profile.edit') ? 'text-white' : 'text-indigo-300' }} group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <span class="font-medium {{ request()->routeIs('profile.edit') ? 'text-white' : 'text-blue-100' }} group-hover:text-white transition-colors duration-300">{{ __('Profile') }}</span>
                            @if(request()->routeIs('profile.edit'))
                                <div class="ml-auto w-2 h-2 bg-indigo-300 rounded-full animate-pulse"></div>
                            @endif
                        </x-sidebar-link>
                    </div>

                    {{-- Logout --}}
                    <div class="group">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-sidebar-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="flex items-center px-4 py-3 rounded-xl transition-all duration-300 hover:bg-red-800/50 hover:transform hover:translate-x-1">
                                <div class="w-8 h-8 rounded-lg bg-red-800/30 flex items-center justify-center mr-3 group-hover:bg-red-600/40 transition-colors duration-300">
                                    <svg class="w-4 h-4 text-red-300 group-hover:text-red-200 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                    </svg>
                                </div>
                                <span class="font-medium text-red-200 group-hover:text-red-100 transition-colors duration-300">{{ __('Log Out') }}</span>
                            </x-sidebar-link>
                        </form>
                    </div>
                </nav>

                {{-- User Info Section --}}
                <div class="mt-auto p-4 border-t border-blue-800/30">
                    <div class="bg-gradient-to-r from-blue-800/40 to-cyan-800/40 backdrop-blur-sm rounded-xl p-4 border border-blue-700/30 hover:from-blue-700/50 hover:to-cyan-700/50 transition-all duration-300">
                        <div class="flex items-center space-x-3">
                            <div class="relative">
                                <div class="w-12 h-12 bg-gradient-to-br from-blue-400 via-cyan-400 to-blue-500 rounded-full flex items-center justify-center shadow-lg ring-2 ring-blue-300/30">
                                    <span class="text-sm font-bold text-white">{{ substr(Auth::user()->name, 0, 2) }}</span>
                                </div>
                                <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-green-400 rounded-full border-2 border-blue-900 animate-pulse"></div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-semibold text-white truncate leading-tight">{{ Auth::user()->name }}</p>
                                <p class="text-xs text-blue-300 truncate opacity-80">{{ Auth::user()->email }}</p>
                                <div class="flex items-center mt-1">
                                    <div class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></div>
                                    <span class="text-xs text-green-300 font-medium">Online</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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