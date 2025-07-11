<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Edit Expert') }}
            </h2>
            <nav class="text-sm text-gray-500">
                <a href="{{ route('admin.experts.index') }}" class="hover:text-blue-600 transition-colors">Experts</a>
                <span class="mx-2">/</span>
                <span class="text-gray-700">Edit</span>
            </nav>
        </div>
    </x-slot>

    <div class="py-12 bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50 min-h-screen relative overflow-hidden">
        <!-- Professional Background Pattern -->
        <div class="absolute inset-0 pointer-events-none">
            <!-- Grid Pattern -->
            <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
            
            <!-- Geometric Professional Elements -->
            <div class="absolute top-20 left-10 w-32 h-32 border-2 border-blue-200 opacity-20 transform rotate-12 animate-float-professional"></div>
            <div class="absolute top-40 right-20 w-24 h-24 border border-slate-300 opacity-15 transform rotate-45 animate-drift-slow"></div>
            <div class="absolute bottom-32 left-32 w-40 h-40 border-2 border-indigo-200 opacity-10 transform -rotate-12 animate-float-professional-delay"></div>
            <div class="absolute bottom-20 right-16 w-28 h-28 border border-blue-300 opacity-20 transform rotate-45 animate-drift-slow-delay"></div>
            
            <!-- Subtle Accent Lines -->
            <div class="absolute top-32 left-1/4 w-16 h-0.5 bg-gradient-to-r from-blue-300 to-transparent opacity-30 transform rotate-45 animate-pulse-professional"></div>
            <div class="absolute top-60 right-1/3 w-20 h-0.5 bg-gradient-to-r from-slate-400 to-transparent opacity-25 transform -rotate-45 animate-pulse-professional-delay"></div>
            <div class="absolute bottom-60 left-1/3 w-24 h-0.5 bg-gradient-to-r from-indigo-300 to-transparent opacity-20 transform rotate-12 animate-pulse-professional-delay-2"></div>
            
            <!-- Professional Corner Elements -->
            <div class="absolute top-0 left-0 w-20 h-20 border-l-2 border-t-2 border-blue-200 opacity-20"></div>
            <div class="absolute top-0 right-0 w-20 h-20 border-r-2 border-t-2 border-slate-300 opacity-15"></div>
            <div class="absolute bottom-0 left-0 w-20 h-20 border-l-2 border-b-2 border-indigo-200 opacity-20"></div>
            <div class="absolute bottom-0 right-0 w-20 h-20 border-r-2 border-b-2 border-blue-300 opacity-15"></div>
        </div>
        
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 relative z-10">
            <!-- Header Section -->
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg mb-8 p-8 border border-white/20">
                <div class="flex items-center mb-6">
                    <div class="bg-blue-100 p-3 rounded-xl mr-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900">Edit Expert</h1>
                        <p class="text-gray-600 mt-1">Update informasi untuk <span class="font-semibold text-blue-600">{{ $expert->name }}</span></p>
                    </div>
                </div>
            </div>

            <!-- Error Messages -->
            @if ($errors->any())
                <div class="bg-red-50/90 backdrop-blur-sm border-l-4 border-red-400 p-6 rounded-xl mb-8 shadow-sm border border-white/20">
                    <div class="flex items-center mb-4">
                        <svg class="w-6 h-6 text-red-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <h3 class="text-red-800 font-semibold">Terdapat beberapa kesalahan:</h3>
                    </div>
                    <ul class="space-y-2">
                        @foreach ($errors->all() as $error)
                            <li class="text-red-700 flex items-center">
                                <span class="w-2 h-2 bg-red-400 rounded-full mr-3"></span>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Main Form -->
            <form action="{{ route('admin.experts.update', $expert->id) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf
                @method('PUT')

                <!-- Personal Information Card -->
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg p-8 border border-white/20">
                    <div class="flex items-center mb-6">
                        <div class="bg-green-100 p-2 rounded-lg mr-3">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <h2 class="text-xl font-bold text-gray-900">Informasi Personal</h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Name Field -->
                        <div class="space-y-2">
                            <label for="name" class="block text-sm font-semibold text-gray-700">
                                Nama Lengkap <span class="text-red-500">*</span>
                            </label>
                            <input type="text" 
                                   name="name" 
                                   id="name" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-gray-50 focus:bg-white" 
                                   value="{{ old('name', $expert->name) }}" 
                                   placeholder="Masukkan nama lengkap expert"
                                   required>
                        </div>

                        <!-- University Field -->
                        <div class="space-y-2">
                            <label for="university" class="block text-sm font-semibold text-gray-700">
                                Universitas
                            </label>
                            <input type="text" 
                                   name="university" 
                                   id="university" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-gray-50 focus:bg-white" 
                                   value="{{ old('university', $expert->university) }}"
                                   placeholder="Nama universitas">
                        </div>

                        <!-- Category Field -->
                        <div class="space-y-2 md:col-span-2">
                            <label for="category" class="block text-sm font-semibold text-gray-700">
                                Kategori Keahlian <span class="text-red-500">*</span>
                            </label>
                            <select name="category" 
                                    id="category" 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-gray-50 focus:bg-white" 
                                    required>
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

                <!-- Professional Information Card -->
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg p-8 border border-white/20">
                    <div class="flex items-center mb-6">
                        <div class="bg-purple-100 p-2 rounded-lg mr-3">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                            </svg>
                        </div>
                        <h2 class="text-xl font-bold text-gray-900">Informasi Profesional</h2>
                    </div>

                    <div class="space-y-6">
                        <!-- Experience Field -->
                        <div class="space-y-2">
                            <label for="experience" class="block text-sm font-semibold text-gray-700">
                                Pengalaman Kerja (Singkat) <span class="text-red-500">*</span>
                            </label>
                            <textarea name="experience" 
                                      id="experience" 
                                      rows="4" 
                                      class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-gray-50 focus:bg-white resize-none"
                                      placeholder="Ringkasan singkat pengalaman kerja expert..."
                                      required>{{ old('experience', $expert->experience) }}</textarea>
                            <p class="text-sm text-gray-500">Deskripsikan pengalaman kerja utama dalam 2-3 kalimat</p>
                        </div>

                        <!-- Full Bio Field -->
                        <div class="space-y-2">
                            <label for="full_bio" class="block text-sm font-semibold text-gray-700">
                                Biografi Lengkap
                            </label>
                            <textarea name="full_bio" 
                                      id="full_bio" 
                                      rows="6" 
                                      class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-gray-50 focus:bg-white resize-none"
                                      placeholder="Biografi lengkap expert, termasuk pendidikan, pengalaman, pencapaian...">{{ old('full_bio', $expert->full_bio) }}</textarea>
                            <p class="text-sm text-gray-500">Biografi detail yang akan ditampilkan pada halaman "Baca Selengkapnya"</p>
                        </div>
                    </div>
                </div>

                <!-- Photo Upload Card -->
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg p-8 border border-white/20">
                    <div class="flex items-center mb-6">
                        <div class="bg-indigo-100 p-2 rounded-lg mr-3">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h2 class="text-xl font-bold text-gray-900">Foto Profil</h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Current Photo -->
                        <div class="space-y-4">
                            <h3 class="text-sm font-semibold text-gray-700">Foto Saat Ini</h3>
                            @if ($expert->photo_path)
                                <div class="relative inline-block">
                                    <img src="{{ asset('storage/' . $expert->photo_path) }}" 
                                         alt="{{ $expert->name }}" 
                                         class="w-32 h-32 object-cover rounded-2xl shadow-lg border-4 border-white ring-2 ring-gray-200">
                                    <div class="absolute -bottom-2 -right-2 bg-green-500 w-6 h-6 rounded-full border-2 border-white flex items-center justify-center">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                </div>
                                <label class="flex items-center space-x-3 cursor-pointer group">
                                    <input type="checkbox" name="remove_photo" value="1" class="w-5 h-5 text-red-600 border-gray-300 rounded focus:ring-red-500">
                                    <span class="text-sm text-red-600 group-hover:text-red-700 font-medium">Hapus foto ini</span>
                                </label>
                            @else
                                <div class="w-32 h-32 bg-gray-100 rounded-2xl border-2 border-dashed border-gray-300 flex items-center justify-center">
                                    <div class="text-center">
                                        <svg class="w-8 h-8 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                        <p class="text-xs text-gray-500">Belum ada foto</p>
                                    </div>
                                </div>
                            @endif
                        </div>

                        <!-- Upload New Photo -->
                        <div class="space-y-4">
                            <h3 class="text-sm font-semibold text-gray-700">Upload Foto Baru</h3>
                            <div class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center hover:border-blue-400 transition-colors duration-200">
                                <svg class="w-12 h-12 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                </svg>
                                <input type="file" 
                                       name="photo" 
                                       id="photo" 
                                       class="hidden"
                                       accept="image/*">
                                <label for="photo" class="cursor-pointer">
                                    <span class="block text-sm font-medium text-gray-700 mb-2">Klik untuk upload</span>
                                    <span class="block text-xs text-gray-500">JPG, PNG, JPEG, GIF, SVG</span>
                                    <span class="block text-xs text-gray-500">Maksimal 2MB</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg p-8 border border-white/20">
                    <div class="flex flex-col sm:flex-row gap-4 justify-between items-center">
                        <a href="{{ route('admin.experts.index') }}" 
                           class="w-full sm:w-auto inline-flex items-center justify-center px-6 py-3 border border-gray-300 rounded-xl text-gray-700 bg-white hover:bg-gray-50 focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-all duration-200 font-medium">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            Kembali ke Daftar
                        </a>
                        
                        <button type="submit" 
                                class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold rounded-xl hover:from-blue-700 hover:to-indigo-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
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
    /* Grid Pattern Background */
    .bg-grid-pattern {
        background-image: 
            linear-gradient(rgba(59, 130, 246, 0.1) 1px, transparent 1px),
            linear-gradient(90deg, rgba(59, 130, 246, 0.1) 1px, transparent 1px);
        background-size: 50px 50px;
    }

    /* Professional Animation Keyframes */
    @keyframes float-professional {
        0%, 100% { transform: translateY(0px) rotate(0deg); opacity: 0.2; }
        50% { transform: translateY(-10px) rotate(5deg); opacity: 0.4; }
    }

    @keyframes drift-slow {
        0%, 100% { transform: translateX(0px) translateY(0px) rotate(0deg); }
        33% { transform: translateX(5px) translateY(-3px) rotate(2deg); }
        66% { transform: translateX(-3px) translateY(5px) rotate(-2deg); }
    }

    @keyframes pulse-professional {
        0%, 100% { opacity: 0.2; transform: scaleX(1); }
        50% { opacity: 0.5; transform: scaleX(1.2); }
    }

    /* Animation Classes */
    .animate-float-professional {
        animation: float-professional 8s ease-in-out infinite;
    }

    .animate-float-professional-delay {
        animation: float-professional 8s ease-in-out infinite;
        animation-delay: 2s;
    }

    .animate-drift-slow {
        animation: drift-slow 12s ease-in-out infinite;
    }

    .animate-drift-slow-delay {
        animation: drift-slow 12s ease-in-out infinite;
        animation-delay: 3s;
    }

    .animate-pulse-professional {
        animation: pulse-professional 6s ease-in-out infinite;
    }

    .animate-pulse-professional-delay {
        animation: pulse-professional 6s ease-in-out infinite;
        animation-delay: 1s;
    }

    .animate-pulse-professional-delay-2 {
        animation: pulse-professional 6s ease-in-out infinite;
        animation-delay: 2s;
    }

    /* Custom file upload styling */
    #photo:focus + label {
        @apply ring-2 ring-blue-500 ring-offset-2;
    }
    
    /* Custom scrollbar for textareas */
    textarea::-webkit-scrollbar {
        width: 6px;
    }
    
    textarea::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 3px;
    }
    
    textarea::-webkit-scrollbar-thumb {
        background: #c1c1c1;
        border-radius: 3px;
    }
    
    textarea::-webkit-scrollbar-thumb:hover {
        background: #a8a8a8;
    }
    
    /* Smooth transitions for all interactive elements */
    .transition-all {
        transition-property: all;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 200ms;
    }
    
    /* Focus ring enhancement */
    .focus\:ring-2:focus {
        box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.5);
    }
    
    /* Backdrop blur enhancement */
    .backdrop-blur-sm {
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
    }
    </style>
</x-app-layout>