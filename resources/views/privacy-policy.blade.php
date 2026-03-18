<x-public-layout>
    <x-slot:title>Privacy Policy - Arctic Vision</x-slot:title>

    <div class="min-h-screen py-12 pt-28" style="background: var(--av-surface-2);">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Breadcrumb Navigation -->
            <nav class="mb-8 mt-4">
                <ol class="flex items-center space-x-2 text-sm style='color: var(--av-muted);'">
                    <li>
                        <a href="{{ route('welcome') }}" class="transition-colors" style="color: var(--av-primary);">
                            <i class="fas fa-home mr-1"></i>
                            <span class="lang-id">Beranda</span>
                            <span class="lang-en">Home</span>
                        </a>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mx-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span style="color: var(--av-text); font-weight: 500;">
                            <span class="lang-id">Kebijakan Privasi</span>
                            <span class="lang-en">Privacy Policy</span>
                        </span>
                    </li>
                </ol>
            </nav>

            <div class="shadow-sm rounded-2xl overflow-hidden" style="background: var(--av-surface); border: 1px solid var(--av-border);">
                <div class="px-6 py-8 sm:px-10">
                    <h1 class="text-3xl font-bold mb-8 text-center" style="color: var(--av-text);">
                        <span class="lang-id">Kebijakan Privasi</span>
                        <span class="lang-en">Privacy Policy</span>
                    </h1>

                    <div class="prose prose-lg max-w-none" style="color: var(--av-text);">
                        <p class="mb-6 opacity-70">
                            <span class="lang-id">Terakhir diperbarui: {{ date('d F Y') }}</span>
                            <span class="lang-en">Last updated: {{ date('F d, Y') }}</span>
                        </p>

                        <section class="mb-8">
                            <h2 class="text-2xl font-semibold mb-4 text-blue-500">
                                <span class="lang-id">1. Pengumpulan Informasi</span>
                                <span class="lang-en">1. Information Collection</span>
                            </h2>
                            <p class="mb-4 opacity-80">
                                <span class="lang-id">Arctic Vision mengumpulkan informasi yang Anda berikan secara langsung kepada kami, seperti ketika Anda membuat akun, mengisi formulir, atau menghubungi kami. Informasi ini mungkin termasuk nama, alamat email, dan informasi kontak lainnya.</span>
                                <span class="lang-en">Arctic Vision collects information you provide directly to us, such as when you create an account, fill out a form, or contact us. This information may include your name, email address, and other contact details.</span>
                            </p>
                        </section>

                        <section class="mb-8">
                            <h2 class="text-2xl font-semibold mb-4 text-blue-500">
                                <span class="lang-id">2. Penggunaan Informasi</span>
                                <span class="lang-en">2. Use of Information</span>
                            </h2>
                            <p class="mb-4 opacity-80">
                                <span class="lang-id">Kami menggunakan informasi yang dikumpulkan untuk:</span>
                                <span class="lang-en">We use the collected information to:</span>
                            </p>
                            <ul class="list-disc list-inside mb-4 space-y-2 opacity-80">
                                <li>
                                    <span class="lang-id">Menyediakan dan memelihara layanan kami</span>
                                    <span class="lang-en">Provide and maintain our services</span>
                                </li>
                                <li>
                                    <span class="lang-id">Mengirim pembaruan dan informasi penting</span>
                                    <span class="lang-en">Send updates and important information</span>
                                </li>
                                <li>
                                    <span class="lang-id">Meningkatkan pengalaman pengguna</span>
                                    <span class="lang-en">Improve user experience</span>
                                </li>
                                <li>
                                    <span class="lang-id">Mematuhi persyaratan hukum</span>
                                    <span class="lang-en">Comply with legal obligations</span>
                                </li>
                            </ul>
                        </section>

                        <section class="mb-8">
                            <h2 class="text-2xl font-semibold mb-4 text-blue-500">
                                <span class="lang-id">3. Berbagi Informasi</span>
                                <span class="lang-en">3. Information Sharing</span>
                            </h2>
                            <p class="mb-4 opacity-80">
                                <span class="lang-id">Kami tidak menjual, memperdagangkan, atau menyewakan informasi pribadi Anda kepada pihak ketiga. Kami hanya membagikan informasi dalam keadaan berikut:</span>
                                <span class="lang-en">We do not sell, trade, or rent your personal information to third parties. We only share information under the following circumstances:</span>
                            </p>
                            <ul class="list-disc list-inside mb-4 space-y-2 opacity-80">
                                <li>
                                    <span class="lang-id">Dengan persetujuan Anda</span>
                                    <span class="lang-en">With your consent</span>
                                </li>
                                <li>
                                    <span class="lang-id">Untuk mematuhi hukum atau proses hukum</span>
                                    <span class="lang-en">To comply with the law or legal processes</span>
                                </li>
                                <li>
                                    <span class="lang-id">Untuk melindungi hak dan keselamatan kami</span>
                                    <span class="lang-en">To protect our rights and safety</span>
                                </li>
                            </ul>
                        </section>

                        <section class="mb-8">
                            <h2 class="text-2xl font-semibold mb-4 text-blue-500">
                                <span class="lang-id">4. Keamanan Data</span>
                                <span class="lang-en">4. Data Security</span>
                            </h2>
                            <p class="mb-4 opacity-80">
                                <span class="lang-id">Kami menerapkan langkah-langkah keamanan yang sesuai untuk melindungi informasi pribadi Anda dari akses, perubahan, pengungkapan, atau penghancuran yang tidak sah.</span>
                                <span class="lang-en">We implement appropriate security measures to protect your personal information from unauthorized access, alteration, disclosure, or destruction.</span>
                            </p>
                        </section>

                        <section class="mb-8">
                            <h2 class="text-2xl font-semibold mb-4 text-blue-500">
                                <span class="lang-id">5. Hak Anda</span>
                                <span class="lang-en">5. Your Rights</span>
                            </h2>
                            <p class="mb-4 opacity-80">
                                <span class="lang-id">Anda memiliki hak untuk:</span>
                                <span class="lang-en">You have the right to:</span>
                            </p>
                            <ul class="list-disc list-inside mb-4 space-y-2 opacity-80">
                                <li>
                                    <span class="lang-id">Mengakses informasi pribadi yang kami simpan tentang Anda</span>
                                    <span class="lang-en">Access personal information we hold about you</span>
                                </li>
                                <li>
                                    <span class="lang-id">Memperbaiki informasi yang tidak akurat</span>
                                    <span class="lang-en">Correct inaccurate information</span>
                                </li>
                                <li>
                                    <span class="lang-id">Menghapus informasi pribadi Anda</span>
                                    <span class="lang-en">Delete your personal information</span>
                                </li>
                                <li>
                                    <span class="lang-id">Menolak pemrosesan data</span>
                                    <span class="lang-en">Object to data processing</span>
                                </li>
                            </ul>
                        </section>

                        <section class="mb-8">
                            <h2 class="text-2xl font-semibold mb-4 text-blue-500">
                                <span class="lang-id">6. Hubungi Kami</span>
                                <span class="lang-en">6. Contact Us</span>
                            </h2>
                            <p class="mb-4 opacity-80">
                                <span class="lang-id">Jika Anda memiliki pertanyaan tentang kebijakan privasi ini, silakan hubungi kami di:</span>
                                <span class="lang-en">If you have any questions about this privacy policy, please contact us at:</span>
                            </p>
                            <p class="opacity-80">
                                Email: laludeyndrafavian@gmail.com
                            </p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>
