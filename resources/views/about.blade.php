<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:heading>Tentang Kami - Grup 1</x-slot:heading>

    <div class="space-y-10">
        <!-- Bagian Informasi Proyek & Klien -->
        <div class="bg-white shadow sm:rounded-lg p-6">
            <h3 class="text-lg font-medium leading-6 text-gray-900">Informasi Proyek Instansi</h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">Kesepakatan pengembangan sistem untuk instansi pemerintah.</p>
            <div class="mt-4 border-t border-gray-200 pt-4">
                <dl class="grid grid-cols-1 gap-x-4 gap-y-4 sm:grid-cols-2">
                    <div>
                        <dt class="text-sm font-medium text-gray-500">Teknologi Utama</dt>
                        <dd class="mt-1 text-sm text-gray-900 font-semibold">Laravel 11 (Portal Berita & Company Profile)</dd>
                    </div>
                    <div>
                        <dt class="text-sm font-medium text-gray-500">Pengujian Sistem (Testing)</dt>
                        <dd class="mt-1 text-sm text-gray-900 font-semibold">Selenium WebDriver</dd>
                    </div>
                </dl>
            </div>
        </div>

        <!-- Bagian Daftar Anggota Tim Pengembang -->
        <div>
            <h3 class="text-xl font-bold tracking-tight text-gray-900 mb-6">Tim Pengembang (Grup 1)</h3>
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                
                <!-- Anggota 1: Team Leader -->
                <div class="bg-white overflow-hidden shadow rounded-lg p-5 border-t-4 border-indigo-500">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800 mb-2">Team Leader</span>
                    <h4 class="text-lg font-bold text-gray-900">R. TRI CAHYO BAGAS HARLIANTO</h4>
                    <p class="text-sm text-gray-500">NIM: 2702499023</p>
                </div>

                <!-- Anggota 2: Analis Proses Bisnis -->
                <div class="bg-white overflow-hidden shadow rounded-lg p-5 border-t-4 border-blue-500">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 mb-2">Analis Proses Bisnis</span>
                    <h4 class="text-lg font-bold text-gray-900">FIORENZA TERESA SUPIT</h4>
                    <p class="text-sm text-gray-500">NIM: 2702509762</p>
                </div>

                <!-- Anggota 3: Database Administrator -->
                <div class="bg-white overflow-hidden shadow rounded-lg p-5 border-t-4 border-green-500">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 mb-2">Database Administrator</span>
                    <h4 class="text-lg font-bold text-gray-900">AFIFAH NUR FADIYAH</h4>
                    <p class="text-sm text-gray-500">NIM: 2702489804</p>
                </div>

                <!-- Anggota 4: Programmer 1 -->
                <div class="bg-white overflow-hidden shadow rounded-lg p-5 border-t-4 border-yellow-500">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 mb-2">Programmer I</span>
                    <h4 class="text-lg font-bold text-gray-900">HABIB AZIZUL HAQ</h4>
                    <p class="text-sm text-gray-500">NIM: 2702488253</p>
                </div>

                <!-- Anggota 5: Programmer 2 -->
                <div class="bg-white overflow-hidden shadow rounded-lg p-5 border-t-4 border-purple-500">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800 mb-2">Programmer II</span>
                    <h4 class="text-lg font-bold text-gray-900">RIZAL MUFTHI AKBAR</h4>
                    <p class="text-sm text-gray-500">NIM: 2702509453</p>
                </div>

            </div>
        </div>
    </div>
</x-layout>