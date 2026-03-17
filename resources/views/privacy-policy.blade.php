<x-guest-layout>
    <x-slot:title>Privacy Policy - Arctic Vision</x-slot:title>

    <div class="min-h-screen py-12" style="background: var(--av-surface-2);">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Breadcrumb Navigation -->
            <nav class="mb-8 mt-10">
                <ol class="flex items-center space-x-2 text-sm text-gray-500">
                    <li>
                        <a href="{{ route('welcome') }}" class="hover:text-blue-600 transition-colors">
                            <i class="fas fa-home mr-1"></i>Beranda
                        </a>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mx-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-900 font-medium">Kebijakan Privasi</span>
                    </li>
                </ol>
            </nav>

            <div class="bg-white shadow-sm rounded-2xl overflow-hidden border border-slate-200">
                <div class="px-6 py-8 sm:px-10">
                    <h1 class="text-3xl font-bold text-gray-900 mb-8 text-center">Kebijakan Privasi</h1>

                    <div class="prose prose-lg max-w-none">
                        <p class="text-gray-600 mb-6">
                            Terakhir diperbarui: {{ date('d F Y') }}
                        </p>

                        <section class="mb-8">
                            <h2 class="text-2xl font-semibold text-gray-900 mb-4">1. Pengumpulan Informasi</h2>
                            <p class="text-gray-700 mb-4">
                                Arctic Vision mengumpulkan informasi yang Anda berikan secara langsung kepada kami,
                                seperti ketika Anda membuat akun, mengisi formulir, atau menghubungi kami. Informasi ini
                                mungkin termasuk nama, alamat email, dan informasi kontak lainnya.
                            </p>
                        </section>

                        <section class="mb-8">
                            <h2 class="text-2xl font-semibold text-gray-900 mb-4">2. Penggunaan Informasi</h2>
                            <p class="text-gray-700 mb-4">
                                Kami menggunakan informasi yang dikumpulkan untuk:
                            </p>
                            <ul class="list-disc list-inside text-gray-700 mb-4 space-y-2">
                                <li>Menyediakan dan memelihara layanan kami</li>
                                <li>Mengirim pembaruan dan informasi penting</li>
                                <li>Meningkatkan pengalaman pengguna</li>
                                <li>Mematuhi persyaratan hukum</li>
                            </ul>
                        </section>

                        <section class="mb-8">
                            <h2 class="text-2xl font-semibold text-gray-900 mb-4">3. Berbagi Informasi</h2>
                            <p class="text-gray-700 mb-4">
                                Kami tidak menjual, memperdagangkan, atau menyewakan informasi pribadi Anda kepada pihak
                                ketiga. Kami hanya membagikan informasi dalam keadaan berikut:
                            </p>
                            <ul class="list-disc list-inside text-gray-700 mb-4 space-y-2">
                                <li>Dengan persetujuan Anda</li>
                                <li>Untuk mematuhi hukum atau proses hukum</li>
                                <li>Untuk melindungi hak dan keselamatan kami</li>
                            </ul>
                        </section>

                        <section class="mb-8">
                            <h2 class="text-2xl font-semibold text-gray-900 mb-4">4. Keamanan Data</h2>
                            <p class="text-gray-700 mb-4">
                                Kami menerapkan langkah-langkah keamanan yang sesuai untuk melindungi informasi pribadi
                                Anda dari akses, perubahan, pengungkapan, atau penghancuran yang tidak sah.
                            </p>
                        </section>

                        <section class="mb-8">
                            <h2 class="text-2xl font-semibold text-gray-900 mb-4">5. Hak Anda</h2>
                            <p class="text-gray-700 mb-4">
                                Anda memiliki hak untuk:
                            </p>
                            <ul class="list-disc list-inside text-gray-700 mb-4 space-y-2">
                                <li>Mengakses informasi pribadi yang kami simpan tentang Anda</li>
                                <li>Memperbaiki informasi yang tidak akurat</li>
                                <li>Menghapus informasi pribadi Anda</li>
                                <li>Menolak pemrosesan data</li>
                            </ul>
                        </section>

                        <section class="mb-8">
                            <h2 class="text-2xl font-semibold text-gray-900 mb-4">6. Perubahan Kebijakan</h2>
                            <p class="text-gray-700 mb-4">
                                Kami dapat memperbarui kebijakan privasi ini dari waktu ke waktu. Kami akan memberitahu
                                Anda tentang perubahan signifikan melalui email atau pemberitahuan di situs web kami.
                            </p>
                        </section>

                        <section class="mb-8">
                            <h2 class="text-2xl font-semibold text-gray-900 mb-4">7. Hubungi Kami</h2>
                            <p class="text-gray-700 mb-4">
                                Jika Anda memiliki pertanyaan tentang kebijakan privasi ini, silakan hubungi kami di:
                            </p>
                            <p class="text-gray-700">
                                Email: laludeyndrafavian@gmail.com
                            </p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
