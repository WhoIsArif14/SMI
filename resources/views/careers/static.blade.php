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
        <div class="flex justify-center">
            <!-- Main Illustration and CTA -->
            <div class="text-center max-w-4xl">
                <div class="relative mb-12">
                    <!-- Character Illustration -->
                    <div class="w-96 h-96 mx-auto bg-gradient-to-br from-purple-400 to-pink-400 rounded-full flex items-center justify-center shadow-2xl mb-8">
                        <div class="text-center">
                            <div class="text-8xl mb-4">🎯</div>
                            <h3 class="text-3xl font-bold text-white mb-2">Target Karir</h3>
                            <p class="text-white/90 text-lg">Raih impianmu bersama kami!</p>
                        </div>
                    </div>

                    <!-- Floating Elements -->
                    <div class="absolute top-8 left-8 w-20 h-20 bg-gradient-to-br from-yellow-400 to-orange-400 rounded-full flex items-center justify-center shadow-lg animate-bounce">
                        <span class="text-3xl">⭐</span>
                    </div>
                    <div class="absolute bottom-8 right-8 w-20 h-20 bg-gradient-to-br from-green-400 to-blue-400 rounded-full flex items-center justify-center shadow-lg animate-bounce delay-1000">
                        <span class="text-3xl">🚀</span>
                    </div>
                    <div class="absolute top-16 right-16 w-16 h-16 bg-gradient-to-br from-pink-400 to-purple-400 rounded-full flex items-center justify-center shadow-lg animate-bounce delay-2000">
                        <span class="text-2xl">💡</span>
                    </div>
                    <div class="absolute bottom-16 left-16 w-18 h-18 bg-gradient-to-br from-blue-400 to-cyan-400 rounded-full flex items-center justify-center shadow-lg animate-bounce delay-3000">
                        <span class="text-2xl">🌟</span>
                    </div>
                </div>

                <!-- Main CTA Section -->
                <div class="bg-white rounded-3xl shadow-2xl p-12 backdrop-blur-sm bg-opacity-95 border border-white/20 mb-12">
                    <h2 class="text-4xl font-bold text-gray-800 mb-6">Mulai Perjalanan Karirmu!</h2>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        Bergabunglah dengan program karir dan pelatihan terbaik untuk mengembangkan potensi dirimu. 
                        Klik tombol di bawah untuk mendaftar dan memulai transformasi karirmu.
                    </p>
                    
                    <!-- CTA Buttons -->
                    <div class="space-y-4">
                        <a href="https://selarasmitragemilang.co.id/auth/register" target="_blank" 
                           class="inline-block w-full max-w-md bg-gradient-to-r from-blue-600 to-purple-600 text-white font-bold py-6 px-12 rounded-2xl hover:from-blue-700 hover:to-purple-700 transform hover:scale-105 transition-all duration-300 shadow-xl hover:shadow-2xl text-xl">
                            🚀 DAFTAR SEKARANG
                        </a>
                        <p class="text-sm text-gray-500 mt-4">
                            *Klik tombol di atas untuk mengakses platform pendaftaran resmi
                        </p>
                    </div>
                </div>

                <!-- Quick Info Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                    <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300">
                        <div class="text-4xl mb-4">📚</div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Pelatihan Intensif</h3>
                        <p class="text-gray-600 text-sm">Program pelatihan yang dirancang untuk meningkatkan skill profesional</p>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300">
                        <div class="text-4xl mb-4">🤝</div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Mentoring Ahli</h3>
                        <p class="text-gray-600 text-sm">Bimbingan langsung dari para ahli berpengalaman di industri</p>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300">
                        <div class="text-4xl mb-4">🎖️</div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Sertifikasi Resmi</h3>
                        <p class="text-gray-600 text-sm">Dapatkan sertifikat yang diakui oleh industri dan perusahaan</p>
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
                    <a href="https://selarasmitragemilang.co.id/auth/register" target="_blank" 
                       class="bg-white text-purple-600 font-bold py-4 px-8 rounded-2xl hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 shadow-lg inline-flex items-center justify-center">
                        <span class="text-2xl mr-2">🚀</span>
                        Daftar Program
                    </a>
                    <a href="https://wa.me/6287752636196?text=Halo%20SMI,%20saya%20tertarik%20untuk%20konsultasi%20program%20karir" target="_blank"
                       class="border-2 border-white text-white font-bold py-4 px-8 rounded-2xl hover:bg-white hover:text-purple-600 transform hover:scale-105 transition-all duration-300 inline-flex items-center justify-center">
                        <span class="text-2xl mr-2">💬</span>
                        Konsultasi WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Custom Styles -->
<style>
.delay-1000 { animation-delay: 1s; }
.delay-2000 { animation-delay: 2s; }
.delay-3000 { animation-delay: 3s; }

/* Enhanced hover effects */
a[target="_blank"]:hover {
    text-decoration: none;
}

/* Pulse animation for main CTA */
@keyframes pulse-glow {
    0%, 100% { box-shadow: 0 0 20px rgba(59, 130, 246, 0.5); }
    50% { box-shadow: 0 0 40px rgba(59, 130, 246, 0.8); }
}

.animate-pulse-glow {
    animation: pulse-glow 2s ease-in-out infinite;
}
</style>

<!-- JavaScript for Enhanced Interactions -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add click tracking for external links
    const externalLinks = document.querySelectorAll('a[href*="selarasmitragemilang.co.id"]');
    
    externalLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // Add visual feedback
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = 'scale(1.05)';
            }, 100);
            
            // Add analytics tracking
            console.log('External registration link clicked:', this.href);
            
            // Optional: Add a small delay to ensure tracking
            // e.preventDefault();
            // setTimeout(() => {
            //     window.open(this.href, '_blank');
            // }, 100);
        });
    });
    
    // Add floating animation to cards
    const cards = document.querySelectorAll('.bg-white.rounded-2xl');
    cards.forEach((card, index) => {
        card.style.animationDelay = `${index * 0.2}s`;
        card.classList.add('animate-pulse-glow');
    });
    
    // Add entrance animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    });
    
    // Observe elements for entrance animation
    document.querySelectorAll('.bg-white').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'all 0.6s ease-out';
        observer.observe(el);
    });
});
</script>
    @endsection