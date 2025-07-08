<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'SMI') }} - Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-br from-blue-900 via-slate-900 to-blue-900 relative overflow-hidden">
            <!-- Background animated elements -->
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute -top-40 -right-40 w-80 h-80 bg-blue-500/10 rounded-full blur-3xl animate-pulse"></div>
                <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-blue-400/10 rounded-full blur-3xl animate-pulse delay-1000"></div>
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-blue-600/5 rounded-full blur-3xl animate-pulse delay-500"></div>
            </div>

            <div class="relative z-10 mb-8">
                <a href="/" class="transform transition-all duration-300 hover:scale-110">
                    <img src="{{ asset('images/smi.png') }}" 
                         alt="SMI Logo" 
                         class="w-24 h-24 object-contain drop-shadow-2xl hover:drop-shadow-[0_0_30px_rgba(59,130,246,0.5)] transition-all duration-300">
                </a>
            </div>

            <div class="relative z-10 w-full sm:max-w-md px-8 py-10 bg-white/95 dark:bg-slate-800/95 backdrop-blur-lg shadow-2xl overflow-hidden rounded-2xl border border-white/20 dark:border-slate-700/50 hover:shadow-blue-500/10 transition-all duration-500">
                {{ $slot }}
            </div>
            
            <div class="relative z-10 mt-8 text-center">
                <p class="text-blue-200/70 text-sm">
                    © {{ date('Y') }} SMI. All rights reserved.
                </p>
            </div>
        </div>
    </body>
</html>
