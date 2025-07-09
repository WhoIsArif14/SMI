<x-app-layout>
    <x-slot name="header">
    <div class="bg-gradient-to-r from-blue-900 via-blue-800 to-blue-900 rounded-lg p-6 shadow-lg">
        <h2 class="font-bold text-2xl text-white leading-tight flex items-center">
            <svg class="w-8 h-8 mr-3 text-blue-200" fill="currentColor" viewBox="0 0 24 24">
                {{-- Ikon Profil --}}
                <path d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z"/>
            </svg>
            {{ __('Profil') }}
        </h2>
        <p class="text-blue-100 mt-2">Panel Kontrol Profil</p>
    </div>
</x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
