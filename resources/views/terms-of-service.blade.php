<x-public-layout>
    <x-slot:title>Terms of Service - Arctic Vision</x-slot:title>

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
                            <span class="lang-id">Syarat dan Ketentuan</span>
                            <span class="lang-en">Terms of Service</span>
                        </span>
                    </li>
                </ol>
            </nav>

            <div class="shadow-sm rounded-2xl overflow-hidden" style="background: var(--av-surface); border: 1px solid var(--av-border);">
                <div class="px-6 py-8 sm:px-10">
                    <h1 class="text-3xl font-bold mb-8 text-center" style="color: var(--av-text);">
                        <span class="lang-id">Syarat dan Ketentuan</span>
                        <span class="lang-en">Terms of Service</span>
                    </h1>

                    <div class="prose prose-lg max-w-none" style="color: var(--av-text);">
                        <p class="mb-6 opacity-70">
                            <span class="lang-id">Terakhir diperbarui: {{ date('d F Y') }}</span>
                            <span class="lang-en">Last updated: {{ date('F d, Y') }}</span>
                        </p>

                        <section class="mb-8">
                            <h2 class="text-2xl font-semibold mb-4 text-blue-500">
                                <span class="lang-id">1. Penerimaan Syarat</span>
                                <span class="lang-en">1. Acceptance of Terms</span>
                            </h2>
                            <p class="mb-4 opacity-80">
                                <span class="lang-id">Dengan mengakses dan menggunakan situs web Arctic Vision, Anda menerima dan menyetujui untuk terikat oleh syarat dan ketentuan yang dijelaskan di sini. Jika Anda tidak setuju dengan syarat ini, harap jangan gunakan situs web kami.</span>
                                <span class="lang-en">By accessing and using the Arctic Vision website, you accept and agree to be bound by the terms and conditions described here. If you do not agree with these terms, please do not use our website.</span>
                            </p>
                        </section>

                        <section class="mb-8">
                            <h2 class="text-2xl font-semibold mb-4 text-blue-500">
                                <span class="lang-id">2. Penggunaan Layanan</span>
                                <span class="lang-en">2. Use of Service</span>
                            </h2>
                            <p class="mb-4 opacity-80">
                                <span class="lang-id">Anda setuju untuk menggunakan situs web kami hanya untuk tujuan yang sah dan sesuai dengan hukum yang berlaku. Anda tidak boleh:</span>
                                <span class="lang-en">You agree to use our website only for lawful purposes and in accordance with applicable laws. You must not:</span>
                            </p>
                            <ul class="list-disc list-inside mb-4 space-y-2 opacity-80">
                                <li>
                                    <span class="lang-id">Menggunakan situs web untuk aktivitas ilegal</span>
                                    <span class="lang-en">Use the website for illegal activities</span>
                                </li>
                                <li>
                                    <span class="lang-id">Mencoba mengakses area terbatas tanpa izin</span>
                                    <span class="lang-en">Attempt to access restricted areas without permission</span>
                                </li>
                                <li>
                                    <span class="lang-id">Mengganggu atau merusak fungsi situs web</span>
                                    <span class="lang-en">Disrupt or damage the functionality of the website</span>
                                </li>
                                <li>
                                    <span class="lang-id">Menggunakan bot atau alat otomatis tanpa izin</span>
                                    <span class="lang-en">Use bots or automated tools without authorization</span>
                                </li>
                            </ul>
                        </section>

                        <section class="mb-8">
                            <h2 class="text-2xl font-semibold mb-4 text-blue-500">
                                <span class="lang-id">3. Akun Pengguna</span>
                                <span class="lang-en">3. User Accounts</span>
                            </h2>
                            <p class="mb-4 opacity-80">
                                <span class="lang-id">Jika Anda membuat akun, Anda bertanggung jawab untuk menjaga kerahasiaan kata sandi dan semua aktivitas yang terjadi di bawah akun Anda. Anda harus segera memberitahu kami tentang penggunaan yang tidak sah.</span>
                                <span class="lang-en">If you create an account, you are responsible for maintaining the confidentiality of your password and all activities that occur under your account. You must notify us immediately of any unauthorized use.</span>
                            </p>
                        </section>

                        <section class="mb-8">
                            <h2 class="text-2xl font-semibold mb-4 text-blue-500">
                                <span class="lang-id">4. Hak Kekayaan Intelektual</span>
                                <span class="lang-en">4. Intellectual Property</span>
                            </h2>
                            <p class="mb-4 opacity-80">
                                <span class="lang-id">Semua konten di situs web ini, termasuk teks, gambar, logo, dan perangkat lunak, adalah milik Arctic Vision atau pemberi lisensinya dan dilindungi oleh hukum hak cipta.</span>
                                <span class="lang-en">All content on this website, including text, images, logos, and software, is the property of Arctic Vision or its licensors and is protected by copyright laws.</span>
                            </p>
                        </section>

                        <section class="mb-8">
                            <h2 class="text-2xl font-semibold mb-4 text-blue-500">
                                <span class="lang-id">5. Penolakan Jaminan</span>
                                <span class="lang-en">5. Disclaimer of Warranties</span>
                            </h2>
                            <p class="mb-4 opacity-80">
                                <span class="lang-id">Situs web ini disediakan "sebagaimana adanya" tanpa jaminan apa pun. Kami tidak menjamin bahwa situs web akan bebas dari kesalahan atau gangguan.</span>
                                <span class="lang-en">This website is provided "as is" without any warranties. We do not guarantee that the website will be free from errors or interruptions.</span>
                            </p>
                        </section>

                        <section class="mb-8">
                            <h2 class="text-2xl font-semibold mb-4 text-blue-500">
                                <span class="lang-id">6. Batasan Tanggung Jawab</span>
                                <span class="lang-en">6. Limitation of Liability</span>
                            </h2>
                            <p class="mb-4 opacity-80">
                                <span class="lang-id">Dalam keadaan apa pun, Arctic Vision tidak bertanggung jawab atas kerugian langsung, tidak langsung, insidental, atau konsekuensial yang timbul dari penggunaan situs web ini.</span>
                                <span class="lang-en">In no event shall Arctic Vision be liable for any direct, indirect, incidental, or consequential damages arising from the use of this website.</span>
                            </p>
                        </section>

                        <section class="mb-8">
                            <h2 class="text-2xl font-semibold mb-4 text-blue-500">
                                <span class="lang-id">7. Hubungi Kami</span>
                                <span class="lang-en">7. Contact Us</span>
                            </h2>
                            <p class="mb-4 opacity-80">
                                <span class="lang-id">Jika Anda memiliki pertanyaan tentang syarat dan ketentuan ini, silakan hubungi kami di:</span>
                                <span class="lang-en">If you have any questions about these terms and conditions, please contact us at:</span>
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
