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

                    <x-nav-link :href="route('admin.pages.index')" :active="request()->routeIs('admin.pages.*')"
                        class="group relative px-6 py-3 text-white/90 hover:text-white font-semibold transition-all duration-300 hover:scale-105">
                        <span class="relative z-10">{{ __('Halaman') }}</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600 rounded-lg opacity-0 group-hover:opacity-100 transition-all duration-300 transform scale-95 group-hover:scale-100"></div>
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
                            class="group inline-flex items-center px-4 py-2 border border-white/20 text-sm leading-4 font-semibold rounded-xl text-white bg-white/10 backdrop-blur-sm hover:bg-white/20 hover:border-white/30 focus:outline-none transition-all duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">
                            @auth
                                <div class="flex items-center space-x-2">
                                    <div class="w-8 h-8 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full flex items-center justify-center text-white font-bold text-sm">
                                        {{ substr(Auth::user()->name, 0, 1) }}
                                    </div>
                                    <span>{{ Auth::user()->name }}</span>
                                </div>
                            @endauth
                            <div class="ms-2">
                                <svg class="fill-current h-4 w-4 transition-transform duration-300 group-hover:rotate-180" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <div class="bg-white/95 backdrop-blur-lg border border-gray-200/50 rounded-xl shadow-2xl overflow-hidden">
                            <x-dropdown-link :href="route('profile.edit')" class="flex items-center space-x-3 px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition-all duration-200">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                <span class="font-medium">{{ __('Profile') }}</span>
                            </x-dropdown-link>

                            <div class="border-t border-gray-200/50"></div>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();"
                                    class="flex items-center space-x-3 px-4 py-3 text-red-600 hover:bg-red-50 hover:text-red-700 transition-all duration-200">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                    </svg>
                                    <span class="font-medium">{{ __('Log Out') }}</span>
                                </x-dropdown-link>
                            </form>
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

            {{-- Link ke Manajemen Halaman --}}
            <x-responsive-nav-link :href="route('admin.pages.index')" :active="request()->routeIs('admin.pages.*')"
                class="group block px-4 py-3 mx-2 rounded-xl text-white/90 hover:text-white font-semibold bg-white/5 hover:bg-white/15 transition-all duration-300 transform hover:scale-105 hover:translate-x-2">
                <div class="flex items-center space-x-3">
                    <div class="w-2 h-2 bg-purple-400 rounded-full group-hover:bg-purple-300 transition-colors duration-300"></div>
                    <span>{{ __('Halaman') }}</span>
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
