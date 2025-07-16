<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-200 leading-tight">
                {{ __('Edit Expert') }}
            </h2>
            <nav class="text-sm text-gray-400">
                <a href="{{ route('admin.experts.index') }}" class="hover:text-blue-400 transition-colors">Experts</a>
                <span class="mx-2">/</span>
                <span class="text-gray-200">Edit</span>
            </nav>
        </div>
    </x-slot>

    {{-- Latar belakang utama (elemen dekoratif di dalamnya telah dihapus) --}}
    <div class="py-12 bg-gradient-to-br from-slate-900 via-blue-950 to-gray-900 min-h-screen relative overflow-hidden">
        
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 relative z-10">
            <div class="bg-slate-800/50 backdrop-blur-md rounded-2xl shadow-lg mb-8 p-8 border border-slate-700/50">
                <div class="flex items-center mb-6">
                    <div class="bg-blue-900/50 p-3 rounded-xl mr-4 border border-blue-800">
                        <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-gray-100">Edit Expert</h1>
                        <p class="text-gray-400 mt-1">Update informasi untuk <span class="font-semibold text-blue-400">{{ $expert->name }}</span></p>
                    </div>
                </div>
            </div>

            @if ($errors->any())
                <div class="bg-red-900/40 backdrop-blur-md border-l-4 border-red-500 p-6 rounded-xl mb-8 shadow-sm border border-red-800/50">
                    <div class="flex items-center mb-4">
                        <svg class="w-6 h-6 text-red-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <h3 class="text-red-200 font-semibold">Terdapat beberapa kesalahan:</h3>
                    </div>
                    <ul class="space-y-2">
                        @foreach ($errors->all() as $error)
                            <li class="text-red-300 flex items-center">
                                <span class="w-2 h-2 bg-red-500 rounded-full mr-3"></span>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.experts.update', $expert->id) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf
                @method('PUT')

                <div class="bg-slate-800/50 backdrop-blur-md rounded-2xl shadow-lg p-8 border border-slate-700/50">
                    <div class="flex items-center mb-6">
                        <div class="bg-green-900/50 p-2 rounded-lg mr-3 border border-green-800">
                            <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <h2 class="text-xl font-bold text-gray-100">Informasi Personal</h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label for="name" class="block text-sm font-semibold text-gray-300">
                                Nama Lengkap <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="name" id="name" class="w-full px-4 py-3 border border-slate-600 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-slate-700/50 focus:bg-slate-700 text-white placeholder-gray-400" value="{{ old('name', $expert->name) }}" placeholder="Masukkan nama lengkap expert" required>
                        </div>

                        <div class="space-y-2">
                            <label for="university" class="block text-sm font-semibold text-gray-300">
                                Universitas
                            </label>
                            <input type="text" name="university" id="university" class="w-full px-4 py-3 border border-slate-600 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-slate-700/50 focus:bg-slate-700 text-white placeholder-gray-400" value="{{ old('university', $expert->university) }}" placeholder="Nama universitas">
                        </div>

                        <div class="space-y-2 md:col-span-2">
                            <label for="category" class="block text-sm font-semibold text-gray-300">
                                Kategori Keahlian <span class="text-red-500">*</span>
                            </label>
                            <select name="category" id="category" class="w-full px-4 py-3 border border-slate-600 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-slate-700/50 focus:bg-slate-700 text-white" required>
                                <option value="">Pilih Kategori Keahlian</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category }}" {{ old('category', $expert->category) == $category ? 'selected' : '' }}>
                                        {{ $category }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="bg-slate-800/50 backdrop-blur-md rounded-2xl shadow-lg p-8 border border-slate-700/50">
                    <div class="flex items-center mb-6">
                        <div class="bg-purple-900/50 p-2 rounded-lg mr-3 border border-purple-800">
                            <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                            </svg>
                        </div>
                        <h2 class="text-xl font-bold text-gray-100">Informasi Profesional</h2>
                    </div>

                    <div class="space-y-6">
                        <div class="space-y-2">
                            <label for="experience" class="block text-sm font-semibold text-gray-300">
                                Pengalaman Kerja (Singkat) <span class="text-red-500">*</span>
                            </label>
                            <textarea name="experience" id="experience" rows="4" class="w-full px-4 py-3 border border-slate-600 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-slate-700/50 focus:bg-slate-700 text-white placeholder-gray-400 resize-none" placeholder="Ringkasan singkat pengalaman kerja expert..." required>{{ old('experience', $expert->experience) }}</textarea>
                            <p class="text-sm text-gray-400">Deskripsikan pengalaman kerja utama dalam 2-3 kalimat</p>
                        </div>

                        <div class="space-y-2">
                            <label for="full_bio" class="block text-sm font-semibold text-gray-300">
                                Biografi Lengkap
                            </label>
                            <textarea name="full_bio" id="full_bio" rows="6" class="w-full px-4 py-3 border border-slate-600 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-slate-700/50 focus:bg-slate-700 text-white placeholder-gray-400 resize-none" placeholder="Biografi lengkap expert, termasuk pendidikan, pengalaman, pencapaian...">{{ old('full_bio', $expert->full_bio) }}</textarea>
                            <p class="text-sm text-gray-400">Biografi detail yang akan ditampilkan pada halaman "Baca Selengkapnya"</p>
                        </div>
                    </div>
                </div>

                <div class="bg-slate-800/50 backdrop-blur-md rounded-2xl shadow-lg p-8 border border-slate-700/50">
                    <div class="flex items-center mb-6">
                        <div class="bg-indigo-900/50 p-2 rounded-lg mr-3 border border-indigo-800">
                            <svg class="w-6 h-6 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h2 class="text-xl font-bold text-gray-100">Foto Profil</h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-4">
                            <h3 class="text-sm font-semibold text-gray-300">Foto Saat Ini</h3>
                            @if ($expert->photo_path)
                                <div class="relative inline-block">
                                    <img src="{{ asset('storage/' . $expert->photo_path) }}" alt="{{ $expert->name }}" class="w-32 h-32 object-cover rounded-2xl shadow-lg border-4 border-slate-700 ring-2 ring-slate-600">
                                    <div class="absolute -bottom-2 -right-2 bg-green-500 w-6 h-6 rounded-full border-2 border-slate-800 flex items-center justify-center">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                </div>
                                <label class="flex items-center space-x-3 cursor-pointer group">
                                    <input type="checkbox" name="remove_photo" value="1" class="w-5 h-5 text-red-600 border-gray-500 rounded focus:ring-red-500 bg-slate-700">
                                    <span class="text-sm text-red-500 group-hover:text-red-400 font-medium">Hapus foto ini</span>
                                </label>
                            @else
                                <div class="w-32 h-32 bg-slate-800 rounded-2xl border-2 border-dashed border-slate-600 flex items-center justify-center">
                                    <div class="text-center">
                                        <svg class="w-8 h-8 text-gray-500 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                        <p class="text-xs text-gray-500">Belum ada foto</p>
                                    </div>
                                </div>
                            @endif
                        </div>

                        <div class="space-y-4">
                            <h3 class="text-sm font-semibold text-gray-300">Upload Foto Baru</h3>
                            <div class="border-2 border-dashed border-slate-600 rounded-xl p-6 text-center hover:border-blue-500 transition-colors duration-200">
                                <svg class="w-12 h-12 text-gray-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                </svg>
                                <input type="file" name="photo" id="photo" class="hidden" accept="image/*">
                                <label for="photo" class="cursor-pointer">
                                    <span class="block text-sm font-medium text-blue-400 mb-2">Klik untuk upload</span>
                                    <span class="block text-xs text-gray-500">JPG, PNG, JPEG, GIF, SVG</span>
                                    <span class="block text-xs text-gray-500">Maksimal 2MB</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-slate-800/50 backdrop-blur-md rounded-2xl shadow-lg p-8 border border-slate-700/50">
                    <div class="flex flex-col sm:flex-row gap-4 justify-between items-center">
                        <a href="{{ route('admin.experts.index') }}" class="w-full sm:w-auto inline-flex items-center justify-center px-6 py-3 border border-slate-600 rounded-xl text-gray-300 bg-slate-700 hover:bg-slate-600 focus:ring-2 focus:ring-slate-500 focus:ring-offset-2 focus:ring-offset-slate-900 transition-all duration-200 font-medium">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            Kembali ke Daftar
                        </a>
                        
                        <button type="submit" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold rounded-xl hover:from-blue-700 hover:to-indigo-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-slate-900 transition-all duration-200 shadow-lg hover:shadow-blue-500/50 transform hover:-translate-y-0.5">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Update Expert
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <style>
    /* CSS untuk animasi dan pola grid telah dihapus. */
    /* CSS fungsional dipertahankan. */

    /* Custom file upload styling */
    #photo:focus + label {
        @apply ring-2 ring-blue-500 ring-offset-2 ring-offset-slate-800;
    }
    
    /* Scrollbar untuk textarea disesuaikan untuk tema gelap */
    textarea::-webkit-scrollbar {
        width: 6px;
    }
    textarea::-webkit-scrollbar-track {
        background: #1e293b; /* slate-800 */
        border-radius: 3px;
    }
    textarea::-webkit-scrollbar-thumb {
        background: #475569; /* slate-600 */
        border-radius: 3px;
    }
    textarea::-webkit-scrollbar-thumb:hover {
        background: #64748b; /* slate-500 */
    }
    
    /* Smooth transitions for all interactive elements */
    .transition-all {
        transition-property: all;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 200ms;
    }
    
    /* Backdrop blur enhancement */
    .backdrop-blur-md {
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
    }
    </style>
</x-app-layout>