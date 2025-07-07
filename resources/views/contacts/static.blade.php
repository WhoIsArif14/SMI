@extends('layouts.frontend')
@section('content')

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 relative overflow-hidden">
    <!-- Background Decorations -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-20 left-20 w-32 h-32 bg-gradient-to-br from-blue-400 to-purple-400 rounded-full opacity-20 animate-pulse"></div>
        <div class="absolute bottom-20 right-20 w-40 h-40 bg-gradient-to-br from-pink-400 to-yellow-400 rounded-full opacity-15 animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 left-10 w-24 h-24 bg-gradient-to-br from-green-400 to-blue-400 rounded-full opacity-25 animate-pulse delay-2000"></div>
        <div class="absolute bottom-1/3 right-10 w-28 h-28 bg-gradient-to-br from-orange-400 to-red-400 rounded-full opacity-20 animate-pulse delay-3000"></div>
    </div>

    <div class="container mx-auto px-4 py-16 relative z-10">
        <!-- Header Section -->
        <div class="text-center mb-16">
            <h1 class="text-6xl md:text-7xl font-extrabold bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 bg-clip-text text-transparent mb-8 leading-tight">
                KONTAK KAMI
            </h1>
            <p class="text-xl text-gray-700 max-w-3xl mx-auto leading-relaxed mb-8">
                Hubungi kami untuk konsultasi dan informasi lebih lanjut mengenai layanan 
                <span class="font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600">HR Consultant</span>
                terbaik
            </p>
        </div>

        <!-- Contact Information Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            <!-- Phone Contact -->
            <div class="bg-white rounded-3xl shadow-2xl p-8 hover:shadow-3xl transform hover:-translate-y-4 transition-all duration-500 border border-gray-100 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-green-500 to-blue-500 rounded-full opacity-10 transform translate-x-8 -translate-y-8"></div>
                <div class="relative z-10 text-center">
                    <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-blue-500 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <span class="text-3xl text-white">📞</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Telepon</h3>
                    <div class="space-y-3">
                        <a href="tel:+6287752636196" class="block text-lg text-gray-600 hover:text-blue-600 transition-colors duration-300">
                            +62 877-5263-6196
                        </a>
                    </div>
                </div>
            </div>

            <!-- Email Contact -->
            <div class="bg-white rounded-3xl shadow-2xl p-8 hover:shadow-3xl transform hover:-translate-y-4 transition-all duration-500 border border-gray-100 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-blue-500 to-purple-500 rounded-full opacity-10 transform translate-x-8 -translate-y-8"></div>
                <div class="relative z-10 text-center">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-purple-500 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <span class="text-3xl text-white">✉️</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Email</h3>
                    <div class="space-y-3">
                        <a href="mailto:customercare@selarasmitraintegra.com" class="block text-lg text-gray-600 hover:text-blue-600 transition-colors duration-300">
                            customercare@selarasmitraintegra.com
                        </a>
                    </div>
                </div>
            </div>

            <!-- Address Contact -->
            <div class="bg-white rounded-3xl shadow-2xl p-8 hover:shadow-3xl transform hover:-translate-y-4 transition-all duration-500 border border-gray-100 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full opacity-10 transform translate-x-8 -translate-y-8"></div>
                <div class="relative z-10 text-center">
                    <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <span class="text-3xl text-white">📍</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Alamat</h3>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        Jl. Ketintang Madya No. 80<br>
                        Ketintang, Gayungan 60231<br>
                        Surabaya, Jawa Timur 
                    </p>
                </div>
            </div>
        </div>

        <!-- Social Media Section -->
        <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-3xl p-12 text-white shadow-2xl mb-16">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold mb-4">Ikuti Media Sosial Kami</h2>
                <p class="text-xl opacity-90">Dapatkan update terbaru dan tips karir dari para ahli</p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <!-- WhatsApp -->
                <a href="https://wa.me/+6287752636196" target="_blank" 
                   class="bg-white bg-opacity-20 rounded-2xl p-6 text-center hover:bg-opacity-30 transform hover:scale-105 transition-all duration-300 group">
                    <div class="text-4xl mb-3 group-hover:scale-110 transition-transform duration-300">💬</div>
                    <h3 class="text-lg font-semibold mb-2">WhatsApp</h3>
                    <p class="text-sm opacity-80">Chat Langsung</p>
                </a>
                
                <!-- Instagram -->
                <a href="https://instagram.com/selaras_mitraintegra" target="_blank" 
                   class="bg-white bg-opacity-20 rounded-2xl p-6 text-center hover:bg-opacity-30 transform hover:scale-105 transition-all duration-300 group">
                    <div class="text-4xl mb-3 group-hover:scale-110 transition-transform duration-300">📸</div>
                    <h3 class="text-lg font-semibold mb-2">Instagram</h3>
                    <p class="text-sm opacity-80">@selaras_mitraintegra</p>
                </a>
                
                <!-- LinkedIn -->
                <a href="https://www.linkedin.com/company/pt-selarasmitraintegra/" target="_blank" 
                   class="bg-white bg-opacity-20 rounded-2xl p-6 text-center hover:bg-opacity-30 transform hover:scale-105 transition-all duration-300 group">
                    <div class="text-4xl mb-3 group-hover:scale-110 transition-transform duration-300">💼</div>
                    <h3 class="text-lg font-semibold mb-2">LinkedIn</h3>
                    <p class="text-sm opacity-80">PT Selaras Mitra Integra</p>
                </a>
                
                <!-- Facebook -->
                <a href="http://facebook.com/selarasmitraintegra" target="_blank" 
                   class="bg-white bg-opacity-20 rounded-2xl p-6 text-center hover:bg-opacity-30 transform hover:scale-105 transition-all duration-300 group">
                    <div class="text-4xl mb-3 group-hover:scale-110 transition-transform duration-300">📘</div>
                    <h3 class="text-lg font-semibold mb-2">Facebook</h3>
                    <p class="text-sm opacity-80">Selaras Mitra Integra</p>
                </a>
            </div>
        </div>

        <!-- Business Hours -->
        <div class="text-center bg-gradient-to-r from-gray-800 to-gray-900 rounded-3xl p-12 text-white">
            <h2 class="text-3xl font-bold mb-8">Jam Operasional</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-3 text-yellow-400">Senin - Jumat</h3>
                    <p class="text-lg">08:00 - 16:00 WIB</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-3 text-yellow-400">Sabtu</h3>
                    <p class="text-lg">09:00 - 15:00 WIB</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-3 text-yellow-400">Minggu</h3>
                    <p class="text-lg">Tutup</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Custom Styles -->
<style>
.shadow-3xl {
    box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.25);
}

.delay-1000 { animation-delay: 1s; }
.delay-2000 { animation-delay: 2s; }
.delay-3000 { animation-delay: 3s; }

/* Form focus effects */
input:focus, textarea:focus {
    transform: scale(1.02);
}

/* Hover animation for contact cards */
.group:hover .group-hover\:scale-110 {
    transform: scale(1.1);
}
</style>

<!-- JavaScript for Enhanced Interactions -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Contact form submission
    const contactForm = document.getElementById('contactForm');
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form data
        const formData = new FormData(this);
        const name = this.querySelector('input[type="text"]').value;
        const email = this.querySelector('input[type="email"]').value;
        const phone = this.querySelector('input[type="tel"]').value;
        const message = this.querySelector('textarea').value;
        
        // Create WhatsApp message
        const whatsappMessage = `Halo SMI,%0A%0ANama: ${name}%0AEmail: ${email}%0ATelepon: ${phone}%0A%0APesan:%0A${message}`;
        const whatsappUrl = `https://wa.me/6281234567890?text=${whatsappMessage}`;
        
        // Show loading state
        const submitBtn = this.querySelector('button[type="submit"]');
        const originalText = submitBtn.textContent;
        submitBtn.textContent = 'Mengirim...';
        submitBtn.disabled = true;
        
        // Simulate sending and redirect to WhatsApp
        setTimeout(() => {
            window.open(whatsappUrl, '_blank');
            submitBtn.textContent = originalText;
            submitBtn.disabled = false;
            this.reset();
            alert('Pesan Anda akan dikirim melalui WhatsApp!');
        }, 1000);
    });
    
    // Add click tracking for social media links
    const socialLinks = document.querySelectorAll('a[href*="wa.me"], a[href*="instagram"], a[href*="linkedin"], a[href*="facebook"]');
    socialLinks.forEach(link => {
        link.addEventListener('click', function() {
            console.log('Social media link clicked:', this.href);
        });
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
    document.querySelectorAll('.bg-white, .bg-gradient-to-r').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'all 0.6s ease-out';
        observer.observe(el);
    });
});
</script>

@endsection