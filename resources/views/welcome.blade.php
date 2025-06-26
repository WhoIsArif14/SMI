<x-frontend-layout>
    <div class="py-12 px-4">
        {{-- Menggunakan flexbox untuk layout responsif: kolom di mobile, baris di desktop --}}
        <div class="flex flex-col md:flex-row items-center justify-center gap-8">
            {{-- Bagian Teks Selamat Datang --}}
            <div class="md:w-1/2 text-center md:text-left">
                <h1 class="text-4xl md:text-5xl font-bold text-blue-800 mb-4">Selamat Datang di Website Profil Perusahaan
                    Kami</h1>
                <p class="text-lg text-gray-600 mb-8">Kami menyediakan solusi inovatif untuk kebutuhan bisnis Anda.</p>
                <a href="{{ route('news.index') }}"
                    class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full text-lg shadow-lg transition duration-300 ease-in-out">Lihat
                    Berita Terbaru</a>
            </div>
            {{-- Bagian Video Lokal --}}
            <div class="md:w-1/2 flex justify-center">
                <video controls autoplay muted loop class="rounded-lg shadow-xl w-full max-w-lg md:max-w-none">
                    <source src="{{ asset('videos/video_profil.mkv') }}" type="video/mkv">
                    {{-- Anda bisa menambahkan source lain untuk format video berbeda jika diperlukan --}}
                    {{-- <source src="{{ asset('videos/video_profil.webm') }}" type="video/webm"> --}}
                    Browser Anda tidak mendukung tag video.
                </video>
            </div>
            {{-- Akhir Bagian Video Lokal --}}
        </div>
    </div>

    {{-- Bagian "Tentang Kami" --}}
    <section class="py-12 bg-white rounded-lg shadow-md mt-8 px-4">
        <h2 class="text-3xl font-bold text-center text-blue-800 mb-6">Tentang Kami</h2>
        <p class="text-gray-700 text-lg text-center leading-relaxed max-w-3xl mx-auto">
            Selaras Mitra Integra telah berpengalaman lebih dari 10 tahun di bidang Human Resource Consultant. Lebih
            dati 100 perusahaan di berbagai bidang telah menggunakan layanan kami. Kami mengucapkan terima kasih atas
            kepercayaan yang diberikan kepada PT Selaras Mitra Integra untuk terus melayani Anda sebagai mitra kami.
            Kami berkomitmen untuk memberikan pelayanan terbaik untuk Anda.

            Untuk Anda yang belum bermitra bersama kami, kami siap menunggu kabar dari Anda.
        </p>
        <div class="text-center mt-6">
            <a href="{{ route('pages.show', 'about-us') }}" class="text-blue-600 hover:underline">Baca Selengkapnya
                Tentang Kami →</a>
        </div>
    </section>

    {{-- Bagian "Klien Kami" --}}
    <section class="py-12 mt-8 px-4">
        <h2 class="text-3xl font-bold text-center text-blue-800 mb-6">Klien Kami</h2>
        @if ($clients->isNotEmpty())
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 justify-items-center">
                @foreach ($clients as $client)
                    <div
                        class="flex flex-col items-center p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                        @if ($client->logo)
                            <img src="{{ asset('storage/' . $client->logo) }}" alt="{{ $client->name }}"
                                class="h-24 object-contain mb-2 filter grayscale hover:grayscale-0 transition-all duration-300">
                        @else
                            <div
                                class="h-24 flex items-center justify-center text-gray-500 text-center border rounded-md p-2 w-full">
                                Tidak Ada Logo</div>
                        @endif
                        <p class="text-lg font-semibold text-gray-800 text-center mt-2">{{ $client->name }}</p>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center text-gray-500">Belum ada klien yang ditambahkan.</p>
        @endif
    </section>
</x-frontend-layout>
