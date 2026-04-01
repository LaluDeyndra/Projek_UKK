<x-public-layout>
    <x-slot:title>Terms of Service - Arctic Vision</x-slot:title>

    <div class="min-h-screen pb-10 md:pb-16 pt-28 md:pt-36 relative overflow-hidden" style="background: var(--av-surface-2);">
        <!-- Background Decorations -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none z-0">
            <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full opacity-20 blur-[100px]" style="background: var(--av-primary);"></div>
            <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full opacity-20 blur-[100px]" style="background: var(--av-primary-2);"></div>
        </div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Breadcrumb Navigation -->
            <nav class="mb-8 mt-2 md:mt-4 overflow-x-auto whitespace-nowrap pb-2 scrollbar-none">
                <ol class="flex items-center space-x-2 text-sm style='color: var(--av-muted);'">
                    <li>
                        <a href="{{ route('welcome') }}" class="transition-colors hover:opacity-80 flex items-center gap-1.5" style="color: var(--av-primary);">
                            <i class="fas fa-home shrink-0"></i>
                            <span class="lang-id">Beranda</span>
                            <span class="lang-en">Home</span>
                        </a>
                    </li>
                    <li class="flex items-center shrink-0">
                        <i class="fas fa-chevron-right text-xs mx-2 opacity-50 shrink-0" style="color: var(--av-text);"></i>
                        <span style="color: var(--av-text); font-weight: 500;">
                            <span class="lang-id">Syarat & Ketentuan</span>
                            <span class="lang-en">Terms of Service</span>
                        </span>
                    </li>
                </ol>
            </nav>

            <!-- Header Section -->
            <div class="text-center mb-10 md:mb-16">
                <div class="inline-flex items-center justify-center p-4 rounded-full mb-4 md:mb-6 relative group">
                    <div class="absolute inset-0 rounded-full opacity-20 group-hover:opacity-30 transition-opacity duration-300" style="background: var(--av-primary);"></div>
                    <i class="fas fa-file-contract text-3xl md:text-4xl relative z-10" style="color: var(--av-primary);"></i>
                </div>
                <h1 class="text-3xl md:text-5xl font-extrabold mb-3 md:mb-4 tracking-tight leading-tight" style="color: var(--av-text);">
                    <span class="lang-id">Syarat & Ketentuan</span>
                    <span class="lang-en">Terms of Service</span>
                </h1>
                <p class="text-base md:text-lg max-w-2xl mx-auto opacity-70" style="color: var(--av-text);">
                    <span class="lang-id">Terakhir diperbarui: {{ date('d F Y') }}</span>
                    <span class="lang-en">Last updated: {{ date('F d, Y') }}</span>
                </p>
            </div>

            <!-- Content Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-6">
                <!-- Card 1 -->
                <div class="p-6 md:p-8 rounded-2xl md:rounded-3xl transition-all duration-300 hover:-translate-y-1 hover:shadow-lg lg:col-span-2" style="background: var(--av-surface); border: 1px solid var(--av-border);">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="p-3 rounded-2xl bg-blue-500/10 text-blue-500 shrink-0">
                            <i class="fas fa-info-circle text-xl"></i>
                        </div>
                        <div>
                            <h2 class="text-xl md:text-2xl font-bold mb-2 leading-tight" style="color: var(--av-text);">
                                <span class="lang-id">Sifat Proyek & Penolakan Hak Cipta</span>
                                <span class="lang-en">Project Nature & Copyright Disclaimer</span>
                            </h2>
                            <p class="leading-relaxed opacity-80 text-sm md:text-base" style="color: var(--av-text);">
                                <span class="lang-id">Penting untuk dicatat bahwa Arctic Vision adalah <strong>proyek prototipe edukasi (maket)</strong> yang dikembangkan murni untuk tujuan pembelajaran, demonstrasi, dan informasi. Ini bukan layanan komersial atau platform operasional resmi. Semua data yang disajikan bersifat demonstratif.</span>
                                <span class="lang-en">It is important to note that Arctic Vision is an <strong>educational prototype project (mockup)</strong> developed purely for learning, demonstration, and informational purposes. This is not a commercial service or official operational platform. All data presented is demonstrative.</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="p-6 md:p-8 rounded-2xl md:rounded-3xl transition-all duration-300 hover:-translate-y-1 hover:shadow-lg" style="background: var(--av-surface); border: 1px solid var(--av-border);">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="p-3 rounded-2xl bg-green-500/10 text-green-500 shrink-0">
                            <i class="fas fa-check-circle text-lg md:text-xl"></i>
                        </div>
                        <div>
                            <h2 class="text-lg md:text-xl font-bold mb-2 leading-tight" style="color: var(--av-text);">
                                <span class="lang-id">Penerimaan Syarat</span>
                                <span class="lang-en">Acceptance of Terms</span>
                            </h2>
                            <p class="leading-relaxed opacity-80 text-sm md:text-base" style="color: var(--av-text);">
                                <span class="lang-id">Dengan mengakses platform purwarupa kami, Anda setuju untuk terikat oleh panduan penggunaan ini dan mengakui bahwa situs ini beroperasi untuk tujuan demonstrasi semata.</span>
                                <span class="lang-en">By accessing our prototype platform, you agree to be bound by these usage guidelines and acknowledge that this site operates solely for demonstration purposes.</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="p-6 md:p-8 rounded-2xl md:rounded-3xl transition-all duration-300 hover:-translate-y-1 hover:shadow-lg" style="background: var(--av-surface); border: 1px solid var(--av-border);">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="p-3 rounded-2xl bg-purple-500/10 text-purple-500 shrink-0">
                            <i class="fas fa-desktop text-lg md:text-xl"></i>
                        </div>
                        <div>
                            <h2 class="text-lg md:text-xl font-bold mb-2 leading-tight" style="color: var(--av-text);">
                                <span class="lang-id">Penggunaan Layanan</span>
                                <span class="lang-en">Use of Service</span>
                            </h2>
                            <p class="leading-relaxed opacity-80 text-sm md:text-base" style="color: var(--av-text);">
                                <span class="lang-id">Platform ini dapat dijelajahi dengan bebas tanpa perlu pendaftaran akun. Anda setuju untuk mengeksplorasi situs ini secara wajar dan tidak menggunakan sarana otomatis untuk mengganggu atau membebani sistem demonstrasi kami.</span>
                                <span class="lang-en">This platform is free to explore without needing an account registration. You agree to explore this site reasonably and not use automated means to disrupt or burden our demonstration systems.</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="p-6 md:p-8 rounded-2xl md:rounded-3xl transition-all duration-300 hover:-translate-y-1 hover:shadow-lg" style="background: var(--av-surface); border: 1px solid var(--av-border);">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="p-3 rounded-2xl bg-orange-500/10 text-orange-500 shrink-0">
                            <i class="fas fa-shield-alt text-lg md:text-xl"></i>
                        </div>
                        <div>
                            <h2 class="text-lg md:text-xl font-bold mb-2 leading-tight" style="color: var(--av-text);">
                                <span class="lang-id">Penolakan Jaminan</span>
                                <span class="lang-en">Disclaimer of Warranties</span>
                            </h2>
                            <p class="leading-relaxed opacity-80 text-sm md:text-base" style="color: var(--av-text);">
                                <span class="lang-id">Sebagai proyek uji coba, semua informasi dan fitur situs disediakan "sebagaimana adanya". Kami tidak menjamin keakuratan simulasi data lingkungan atau ketersediaan berkelanjutan tanpa gangguan.</span>
                                <span class="lang-en">As a pilot project, all information and site features are provided "as is". We do not guarantee the accuracy of environmental data simulations or continuous availability without interruption.</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="p-6 md:p-8 rounded-2xl md:rounded-3xl transition-all duration-300 hover:-translate-y-1 hover:shadow-lg" style="background: var(--av-surface); border: 1px solid var(--av-border);">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="p-3 rounded-2xl bg-red-500/10 text-red-500 shrink-0">
                            <i class="fas fa-exclamation-triangle text-lg md:text-xl"></i>
                        </div>
                        <div>
                            <h2 class="text-lg md:text-xl font-bold mb-2 leading-tight" style="color: var(--av-text);">
                                <span class="lang-id">Batasan Tanggung Jawab</span>
                                <span class="lang-en">Limitation of Liability</span>
                            </h2>
                            <p class="leading-relaxed opacity-80 text-sm md:text-base" style="color: var(--av-text);">
                                <span class="lang-id">Pengembang proyek tidak memikul tanggung jawab hukum atas kerugian, kerusakan, atau konsekuensi apa pun yang timbul dari interaksi dengan proyek pameran teknologi ini.</span>
                                <span class="lang-en">The project developers assume no legal responsibility for any losses, damages, or consequences arising from interaction with this technological exhibition project.</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="mt-8 p-6 md:p-10 rounded-2xl md:rounded-3xl text-center relative overflow-hidden" style="background: var(--av-surface); border: 1px solid var(--av-border);">
                <div class="absolute inset-0 opacity-5" style="background: repeating-linear-gradient(45deg, var(--av-primary) 0, var(--av-primary) 1px, transparent 1px, transparent 10px);"></div>
                <div class="relative z-10">
                    <div class="inline-flex items-center justify-center p-3 md:p-4 rounded-full bg-blue-500/10 text-blue-500 mb-3 md:mb-4 shrink-0">
                        <i class="fas fa-envelope text-xl md:text-2xl"></i>
                    </div>
                    <h2 class="text-xl md:text-2xl font-bold mb-3" style="color: var(--av-text);">
                        <span class="lang-id">Punya Pertanyaan?</span>
                        <span class="lang-en">Have Questions?</span>
                    </h2>
                    <p class="mb-5 md:mb-6 opacity-80 max-w-lg mx-auto text-sm md:text-base" style="color: var(--av-text);">
                        <span class="lang-id">Jika Anda memiliki pertanyaan tentang proyek prototipe ini, silakan hubungi tim pengembang kami.</span>
                        <span class="lang-en">If you have any questions about this prototype project, please contact our development team.</span>
                    </p>
                    <a href="mailto:laludeyndrafavian@gmail.com" class="inline-flex flex-col sm:flex-row w-full sm:w-auto items-center justify-center px-4 sm:px-6 py-3 md:py-3.5 rounded-xl font-medium text-sm md:text-base transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_6px_20px_rgba(37,99,235,0.23)] break-all" style="background: var(--av-primary); color: white;">
                        <span class="flex items-center gap-2 mb-1 sm:mb-0 sm:mr-2 shrink-0">
                            <i class="fas fa-paper-plane"></i>
                            <span class="sm:hidden">Kirim Email ke:</span>
                        </span>
                        <span class="truncate max-w-full">laludeyndrafavian@gmail.com</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</x-public-layout>
