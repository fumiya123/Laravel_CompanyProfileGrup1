<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
    
    <x-slot:heading>
        Dashboard Utama
    </x-slot:heading>

    <div class="space-y-12 pb-10">
        <!-- Banner Utama Kotak Biru -->
        <div class="relative bg-gradient-to-r from-gray-900 to-indigo-900 rounded-2xl shadow-xl overflow-hidden p-8 sm:p-12 text-white">
            <div class="max-w-2xl">
                <span class="inline-block bg-indigo-500 text-white text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider mb-4">
                    Grup 1 - Official Project
                </span>
                <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight mb-4">
                    Portal Berita & Company Profile Instansi
                </h1>
                <p class="text-gray-300 text-base sm:text-lg mb-6 leading-relaxed">
                    Sistem informasi dan layanan digital terpadu yang dikembangkan khusus untuk instansi pemerintah dengan standar keandalan tinggi.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="/artikels" class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium px-6 py-3 rounded-lg shadow transition">
                        Jelajahi Portal Berita
                    </a>
                    <a href="/about" class="bg-gray-800 hover:bg-gray-700 text-gray-200 font-medium px-6 py-3 rounded-lg border border-gray-600 transition">
                        Lihat Tim Pengembang
                    </a>
                </div>
            </div>
        </div>

        <!-- Section Fitur 3 KOtak -->
        <div>
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Pilar Pengembangan Sistem</h2>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                
                <!-- Kartu 1 -->
                <div class="bg-white p-6 rounded-xl shadow border border-gray-100 hover:shadow-md transition">
                    <div class="w-12 h-12 bg-indigo-100 text-indigo-600 rounded-lg flex items-center justify-center font-bold text-xl mb-4">
                        ⚡
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Laravel 11 Framework</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Dibangun menggunakan teknologi *backend* PHP modern versi terbaru untuk performa sistem yang cepat, aman, dan terstruktur.
                    </p>
                </div>

                <!-- Kartu 2 -->
                <div class="bg-white p-6 rounded-xl shadow border border-gray-100 hover:shadow-md transition">
                    <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center font-bold text-xl mb-4">
                        📰
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Portal Berita Terpadu</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Menyajikan informasi dan publikasi kegiatan instansi secara aktual, transparan, dan mudah diakses oleh masyarakat luas.
                    </p>
                </div>

                <!-- Kartu 3 -->
                <div class="bg-white p-6 rounded-xl shadow border border-gray-100 hover:shadow-md transition">
                    <div class="w-12 h-12 bg-green-100 text-green-600 rounded-lg flex items-center justify-center font-bold text-xl mb-4">
                        🧪
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Selenium Testing</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Menjamin kualitas fungsionalitas dan kestabilan aplikasi melalui pengujian sistem otomatis berbasis Selenium yang ketat.
                    </p>
                </div>

            </div>
        </div>
    </div>
</x-layout>