@extends('layouts.frontend')
@section('content')

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-purple-50 to-pink-50 relative overflow-hidden">
    <!-- Background Decorations -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-10 -left-10 w-72 h-72 bg-gradient-to-br from-blue-300 to-purple-300 rounded-full opacity-20 animate-pulse"></div>
        <div class="absolute -bottom-10 -right-10 w-96 h-96 bg-gradient-to-br from-pink-300 to-yellow-300 rounded-full opacity-20 animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-gradient-to-br from-green-300 to-blue-300 rounded-full opacity-10 animate-pulse delay-2000"></div>
    </div>

    <div class="container mx-auto px-4 py-12 relative z-10">
        <!-- Header Section -->
        <div class="text-center mb-16">
            <h1 class="text-5xl md:text-6xl font-extrabold bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 bg-clip-text text-transparent mb-6">
                KARIR DAN PELATIHAN
            </h1>
            <p class="text-xl text-gray-700 max-w-3xl mx-auto leading-relaxed">
                Temukan karir yang sesuai dengan potensimu dan 
                <span class="font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600">maksimalkan perkembangan potensimu</span> 
                dengan pelatihan dari kami.
            </p>
            <div class="mt-8">
                <p class="text-lg text-gray-600 font-medium">
                    Jadilah <span class="font-bold text-blue-600">"Most wanted candidate"</span> di perusahaan impianmu.
                </p>
                <div class="flex items-center justify-center mt-4">
                    <span class="text-2xl">👉</span>
                    <p class="text-lg text-gray-700 ml-2 font-semibold">Ayo daftarkan dirimu!</p>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Side - Registration Form -->
            <div class="bg-white rounded-3xl shadow-2xl p-8 backdrop-blur-sm bg-opacity-95 border border-white/20">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">Daftar Sekarang</h2>
                    <p class="text-gray-600">Mulai perjalanan karirmu bersama kami</p>
                </div>

                <form class="space-y-6" method="POST" action="#" id="registrationForm">
                    @csrf
                    <!-- Username Field -->
                    <div class="relative">
                        <input type="text" 
                               id="username" 
                               name="username" 
                               placeholder="USERNAME" 
                               class="w-full px-6 py-4 bg-gradient-to-r from-blue-500 to-cyan-500 text-white placeholder-white/80 rounded-2xl border-0 focus:ring-4 focus:ring-blue-300 focus:outline-none text-center font-semibold text-lg shadow-lg transform hover:scale-105 transition-all duration-300"
                               required>
                    </div>

                    <!-- Email/Phone Field -->
                    <div class="relative">
                        <input type="text" 
                               id="contact" 
                               name="contact" 
                               placeholder="EMAIL / HANDPHONE" 
                               class="w-full px-6 py-4 bg-gradient-to-r from-blue-500 to-cyan-500 text-white placeholder-white/80 rounded-2xl border-0 focus:ring-4 focus:ring-blue-300 focus:outline-none text-center font-semibold text-lg shadow-lg transform hover:scale-105 transition-all duration-300"
                               required>
                    </div>

                    <!-- Password Field -->
                    <div class="relative">
                        <input type="password" 
                               id="password" 
                               name="password" 
                               placeholder="PASSWORD" 
                               class="w-full px-6 py-4 bg-gradient-to-r from-blue-500 to-cyan-500 text-white placeholder-white/80 rounded-2xl border-0 focus:ring-4 focus:ring-blue-300 focus:outline-none text-center font-semibold text-lg shadow-lg transform hover:scale-105 transition-all duration-300"
                               required>
                    </div>

                    <!-- Forgot Password Link -->
                    <div class="text-center">
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium text-sm transition-colors duration-300">
                            Lupa password?
                        </a>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-4">
                        <button type="submit" 
                                class="w-full bg-gradient-to-r from-green-500 to-blue-600 text-white font-bold py-4 px-8 rounded-2xl hover:from-green-600 hover:to-blue-700 transform hover:scale-105 transition-all duration-300 shadow-xl hover:shadow-2xl text-lg">
                            DAFTAR SEKARANG
                        </button>
                    </div>

                    <!-- Login Link -->
                    <div class="text-center pt-4">
                        <p class="text-gray-600">
                            Sudah punya akun? 
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold transition-colors duration-300">
                                Login Disini!
                            </a>
                        </p>
                    </div>
                </form>
            </div>

            <!-- Right Side - Illustration -->
            <div class="flex items-center justify-center">
                <div class="relative">
                    <!-- Character Illustration -->
                    <div class="w-80 h-80 bg-gradient-to-br from-purple-400 to-pink-400 rounded-full flex items-center justify-center shadow-2xl">
                        <div class="text-center">
                            <div class="text-8xl mb-4">🎯</div>
                            <h3 class="text-2xl font-bold text-white mb-2">Target Karir</h3>
                            <p class="text-white/90">Raih impianmu!</p>
                        </div>
                    </div>

                    <!-- Floating Elements -->
                    <div class="absolute -top-8 -left-8 w-16 h-16 bg-gradient-to-br from-yellow-400 to-orange-400 rounded-full flex items-center justify-center shadow-lg animate-bounce">
                        <span class="text-2xl">⭐</span>
                    </div>
                    <div class="absolute -bottom-8 -right-8 w-16 h-16 bg-gradient-to-br from-green-400 to-blue-400 rounded-full flex items-center justify-center shadow-lg animate-bounce delay-1000">
                        <span class="text-2xl">🚀</span>
                    </div>
                    <div class="absolute top-4 -right-12 w-12 h-12 bg-gradient-to-br from-pink-400 to-purple-400 rounded-full flex items-center justify-center shadow-lg animate-bounce delay-2000">
                        <span class="text-xl">💡</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="mt-20">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Mengapa Memilih Kami?</h2>
                <p class="text-xl text-gray-600">Bergabunglah dengan ribuan kandidat yang telah sukses</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 border border-white/20">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-3xl text-white">🎓</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Pelatihan Berkualitas</h3>
                        <p class="text-gray-600">Dapatkan pelatihan dari para ahli dengan pengalaman puluhan tahun di industri</p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 border border-white/20">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-3xl text-white">🌟</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Sertifikasi Resmi</h3>
                        <p class="text-gray-600">Raih sertifikasi yang diakui industri untuk meningkatkan kredibilitas profesional Anda</p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 border border-white/20">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-blue-500 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-3xl text-white">💼</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Jaminan Karir</h3>
                        <p class="text-gray-600">Dapatkan akses ke network perusahaan partner untuk kesempatan karir yang lebih baik</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="mt-20 text-center">
            <div class="bg-gradient-to-r from-purple-600 to-pink-600 rounded-3xl p-12 text-white shadow-2xl">
                <h2 class="text-4xl font-bold mb-4">Siap Memulai Perjalanan Karirmu?</h2>
                <p class="text-xl mb-8 opacity-90">Jangan biarkan kesempatan emas ini terlewatkan!</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="bg-white text-purple-600 font-bold py-4 px-8 rounded-2xl hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 shadow-lg">
                        Konsultasi Gratis
                    </button>
                    <button class="border-2 border-white text-white font-bold py-4 px-8 rounded-2xl hover:bg-white hover:text-purple-600 transform hover:scale-105 transition-all duration-300">
                        Pelajari Lebih Lanjut
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Custom JavaScript for Form Enhancement -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('registrationForm');
    const inputs = form.querySelectorAll('input');
    
    // Add focus effects
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('scale-105');
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.classList.remove('scale-105');
        });
    });
    
    // Form submission
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Add loading state
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.textContent;
        submitBtn.textContent = 'MENDAFTAR...';
        submitBtn.disabled = true;
        
        // Simulate API call
        setTimeout(() => {
            alert('Pendaftaran berhasil! Kami akan menghubungi Anda segera.');
            submitBtn.textContent = originalText;
            submitBtn.disabled = false;
            form.reset();
        }, 2000);
    });
});
</script>
    @endsection