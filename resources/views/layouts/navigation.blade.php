<nav x-data="{ open: false }" class="backdrop-blur-lg border-b border-navy-700/30 shadow-2xl sticky top-0 z-50" style="background-color: #1e293b;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex items-center">
                {{-- Logo --}}
                <div class="shrink-0 flex items-center group">
                    <a href="{{ route('admin.dashboard') }}" class="transform transition-all duration-300 hover:scale-110 hover:rotate-1">
                        <div class="flex items-center">
                            {{-- Logo Image --}}
                            <img src="{{ asset('images/smi.png') }}" 
                                 alt="Logo Perusahaan" 
                                 class="h-12 w-auto object-contain transition-all duration-300 group-hover:scale-105 group-hover:brightness-110 filter drop-shadow-lg group-hover:drop-shadow-xl">
                        </div>
                    </a>
                </div>

                {{-- Navigation Links (Desktop) --}}
                <div class="hidden space-x-2 sm:-my-px sm:ml-12 sm:flex">
                    <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')" 
                        class="group relative px-6 py-3 text-white/90 hover:text-white font-semibold transition-all duration-300 hover:scale-105">
                        <span class="relative z-10">{{ __('Dashboard') }}</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg opacity-0 group-hover:opacity-100 transition-all duration-300 transform scale-95 group-hover:scale-100"></div>
                    </x-nav-link>

                    <x-nav-link :href="route('admin.posts.index')" :active="request()->routeIs('admin.posts.*')"
                        class="group relative px-6 py-3 text-white/90 hover:text-white font-semibold transition-all duration-300 hover:scale-105">
                        <span class="relative z-10">{{ __('Berita') }}</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-green-600 to-teal-600 rounded-lg opacity-0 group-hover:opacity-100 transition-all duration-300 transform scale-95 group-hover:scale-100"></div>
                    </x-nav-link>


                    {{-- Link ke Manajemen Klien --}}
                    <x-nav-link :href="route('admin.clients.index')" :active="request()->routeIs('admin.clients.*')"
                        class="group relative px-6 py-3 text-white/90 hover:text-white font-semibold transition-all duration-300 hover:scale-105">
                        <span class="relative z-10">{{ __('Klien Kami') }}</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-orange-600 to-red-600 rounded-lg opacity-0 group-hover:opacity-100 transition-all duration-300 transform scale-95 group-hover:scale-100"></div>
                    </x-nav-link>
                </div>
            </div>

            {{-- Settings Dropdown (Desktop) --}}
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="group inline-flex items-center px-5 py-3 border border-blue-400/30 text-sm leading-4 font-semibold rounded-xl text-white bg-gradient-to-r from-blue-500/20 to-cyan-500/20 backdrop-blur-sm hover:from-blue-500/30 hover:to-cyan-500/30 hover:border-blue-300/50 focus:outline-none transition-all duration-300 ease-in-out transform hover:scale-105 hover:shadow-xl hover:shadow-blue-500/25">
                            @auth
                                <div class="flex items-center space-x-3">
                                    <div class="relative">
                                        <div class="w-9 h-9 bg-gradient-to-br from-blue-400 via-cyan-400 to-blue-500 rounded-full flex items-center justify-center text-white font-bold text-sm shadow-lg ring-2 ring-blue-300/30">
                                            {{ substr(Auth::user()->name, 0, 2) }}
                                        </div>
                                        <div class="absolute -bottom-1 -right-1 w-3 h-3 bg-green-400 rounded-full border-2 border-slate-700 animate-pulse"></div>
                                    </div>
                                    <div class="flex flex-col items-start">
                                        <span class="text-white font-semibold text-sm">{{ Auth::user()->name }}</span>
                                        <span class="text-blue-200 text-xs">Administrator</span>
                                    </div>
                                </div>
                            @endauth
                            <div class="ms-3">
                                <svg class="fill-current h-4 w-4 text-blue-200 transition-all duration-300 group-hover:rotate-180 group-hover:text-white" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <div class="bg-white/95 backdrop-blur-xl border border-blue-200/50 rounded-2xl shadow-2xl overflow-hidden ring-1 ring-blue-100/50">
                            {{-- User Info Header --}}
                            <div class="px-6 py-4 bg-gradient-to-r from-blue-50 to-cyan-50 border-b border-blue-100/50">
                                <div class="flex items-center space-x-3">
                                    <div class="w-12 h-12 bg-gradient-to-br from-blue-400 via-cyan-400 to-blue-500 rounded-full flex items-center justify-center text-white font-bold shadow-lg ring-2 ring-blue-200">
                                        {{ substr(Auth::user()->name, 0, 2) }}
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-800">{{ Auth::user()->name }}</p>
                                        <p class="text-sm text-blue-600">{{ Auth::user()->email }}</p>
                                    </div>
                                </div>
                            </div>

                            {{-- Menu Items --}}
                            <div class="py-2">
                                <x-dropdown-link :href="route('profile.edit')" class="group flex items-center space-x-3 px-6 py-3 text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-cyan-50 hover:text-blue-700 transition-all duration-300 hover:pl-8">
                                    <div class="w-8 h-8 rounded-lg bg-blue-100 group-hover:bg-blue-200 flex items-center justify-center transition-colors duration-300">
                                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="font-medium">{{ __('Profile') }}</span>
                                        <p class="text-xs text-gray-500 group-hover:text-blue-600">Kelola informasi akun</p>
                                    </div>
                                    <svg class="w-4 h-4 ml-auto text-gray-400 group-hover:text-blue-600 group-hover:translate-x-1 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </x-dropdown-link>

                                <div class="mx-6 my-2 border-t border-gray-200"></div>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault(); this.closest('form').submit();"
                                        class="group flex items-center space-x-3 px-6 py-3 text-red-600 hover:bg-gradient-to-r hover:from-red-50 hover:to-pink-50 hover:text-red-700 transition-all duration-300 hover:pl-8">
                                        <div class="w-8 h-8 rounded-lg bg-red-100 group-hover:bg-red-200 flex items-center justify-center transition-colors duration-300">
                                            <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <span class="font-medium">{{ __('Log Out') }}</span>
                                            <p class="text-xs text-red-500 group-hover:text-red-600">Keluar dari sistem</p>
                                        </div>
                                        <svg class="w-4 h-4 ml-auto text-red-400 group-hover:text-red-600 group-hover:translate-x-1 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                        </svg>
                                    </x-dropdown-link>
                                </form>
                            </div>

                            {{-- Footer --}}
                            <div class="px-6 py-3 bg-gradient-to-r from-slate-50 to-gray-50 border-t border-gray-100">
                                <p class="text-xs text-gray-500 text-center">SMI Admin Panel v2.0</p>
                            </div>
                        </div>
                    </x-slot>
                </x-dropdown>
            </div>

            {{-- Hamburger --}}
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="group inline-flex items-center justify-center p-3 rounded-xl text-white/80 hover:text-white bg-white/10 hover:bg-white/20 backdrop-blur-sm border border-white/20 hover:border-white/30 focus:outline-none transition-all duration-300 ease-in-out transform hover:scale-110 hover:shadow-lg">
                    <svg class="h-6 w-6 transition-transform duration-300 group-hover:scale-110" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Responsive Navigation Menu (Mobile) --}}
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-4 pb-3 space-y-2 backdrop-blur-lg border-t border-white/10" style="background-color: rgba(30, 41, 59, 0.8);">
            <x-responsive-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')"
                class="group block px-4 py-3 mx-2 rounded-xl text-white/90 hover:text-white font-semibold bg-white/5 hover:bg-white/15 transition-all duration-300 transform hover:scale-105 hover:translate-x-2">
                <div class="flex items-center space-x-3">
                    <div class="w-2 h-2 bg-blue-400 rounded-full group-hover:bg-blue-300 transition-colors duration-300"></div>
                    <span>{{ __('Dashboard') }}</span>
                </div>
            </x-responsive-nav-link>

            {{-- Link ke Manajemen Berita --}}
            <x-responsive-nav-link :href="route('admin.posts.index')" :active="request()->routeIs('admin.posts.*')"
                class="group block px-4 py-3 mx-2 rounded-xl text-white/90 hover:text-white font-semibold bg-white/5 hover:bg-white/15 transition-all duration-300 transform hover:scale-105 hover:translate-x-2">
                <div class="flex items-center space-x-3">
                    <div class="w-2 h-2 bg-green-400 rounded-full group-hover:bg-green-300 transition-colors duration-300"></div>
                    <span>{{ __('Berita') }}</span>
                </div>
            </x-responsive-nav-link>

            {{-- Link ke Manajemen Klien (Responsive) --}}
            <x-responsive-nav-link :href="route('admin.clients.index')" :active="request()->routeIs('admin.clients.*')"
                class="group block px-4 py-3 mx-2 rounded-xl text-white/90 hover:text-white font-semibold bg-white/5 hover:bg-white/15 transition-all duration-300 transform hover:scale-105 hover:translate-x-2">
                <div class="flex items-center space-x-3">
                    <div class="w-2 h-2 bg-orange-400 rounded-full group-hover:bg-orange-300 transition-colors duration-300"></div>
                    <span>{{ __('Klien Kami') }}</span>
                </div>
            </x-responsive-nav-link>
        </div>

        {{-- Responsive Settings Options --}}
        <div class="pt-4 pb-4 border-t border-white/10 bg-gradient-to-b from-indigo-900/50 to-blue-900/80 backdrop-blur-lg">
            <div class="px-4 mb-4">
                @auth
                    <div class="flex items-center space-x-3 p-3 bg-white/10 rounded-xl backdrop-blur-sm">
                        <div class="w-10 h-10 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full flex items-center justify-center text-white font-bold">
                            {{ substr(Auth::user()->name, 0, 1) }}
                        </div>
                        <div>
                            <div class="font-bold text-base text-white">{{ Auth::user()->name }}</div>
                            <div class="font-medium text-sm text-white/70">{{ Auth::user()->email }}</div>
                        </div>
                    </div>
                @endauth
            </div>

            <div class="space-y-2 px-2">
                <x-responsive-nav-link :href="route('profile.edit')"
                    class="group flex items-center space-x-3 px-4 py-3 rounded-xl text-white/90 hover:text-white font-semibold bg-white/5 hover:bg-white/15 transition-all duration-300 transform hover:scale-105 hover:translate-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    <span>{{ __('Profile') }}</span>
                </x-responsive-nav-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();"
                        class="group flex items-center space-x-3 px-4 py-3 rounded-xl text-red-300 hover:text-red-200 font-semibold bg-red-500/10 hover:bg-red-500/20 transition-all duration-300 transform hover:scale-105 hover:translate-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                        </svg>
                        <span>{{ __('Log Out') }}</span>
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
