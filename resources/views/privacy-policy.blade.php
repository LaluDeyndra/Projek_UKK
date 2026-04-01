<x-public-layout>
    <x-slot:title>Privacy Policy - Arctic Vision</x-slot:title>

    <div class="min-h-screen pb-10 md:pb-16 pt-28 md:pt-36 relative overflow-hidden" style="background: var(--av-surface-2);">
        <!-- Background Decorations -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none z-0">
            <div class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full opacity-20 blur-[100px]" style="background: var(--av-primary);"></div>
            <div class="absolute bottom-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full opacity-20 blur-[100px]" style="background: var(--av-primary-2);"></div>
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
                            <span class="lang-id">Kebijakan Privasi</span>
                            <span class="lang-en">Privacy Policy</span>
                        </span>
                    </li>
                </ol>
            </nav>

            <!-- Header Section -->
            <div class="text-center mb-10 md:mb-16">
                <div class="inline-flex items-center justify-center p-4 rounded-full mb-4 md:mb-6 relative group">
                    <div class="absolute inset-0 rounded-full opacity-20 group-hover:opacity-30 transition-opacity duration-300" style="background: var(--av-primary);"></div>
                    <i class="fas fa-user-shield text-3xl md:text-4xl relative z-10" style="color: var(--av-primary);"></i>
                </div>
                <h1 class="text-3xl md:text-5xl font-extrabold mb-3 md:mb-4 tracking-tight leading-tight" style="color: var(--av-text);">
                    <span class="lang-id">Kebijakan Privasi</span>
                    <span class="lang-en">Privacy Policy</span>
                </h1>
                <p class="text-base md:text-lg max-w-2xl mx-auto opacity-70" style="color: var(--av-text);">
                    <span class="lang-id">Terakhir diperbarui: {{ date('d F Y') }}</span>
                    <span class="lang-en">Last updated: {{ date('F d, Y') }}</span>
                </p>
                <div class="mt-6 mx-auto inline-flex px-4 md:px-5 py-3 md:py-2.5 rounded-2xl md:rounded-full border shadow-sm w-full md:w-auto max-w-[400px] md:max-w-none text-left md:text-center items-start md:items-center justify-center transition-all duration-300" style="border-color: color-mix(in srgb, var(--av-border) 80%, transparent); background: var(--av-surface); color: var(--av-text);">
                    <span class="flex items-start md:items-center gap-3 md:gap-3 text-sm font-medium w-full md:w-auto">
                        <span class="relative flex h-3 w-3 shrink-0 mt-[3px] md:mt-0">
                          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                          <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                        </span>
                        <span class="leading-relaxed md:leading-normal flex-1">
                            <span class="lang-id">Situs ini sepenuhnya tidak memerlukan akun dan 100% tanpa pelacakan pengguna.</span>
                            <span class="lang-en">This site is completely account-free and 100% without user tracking.</span>
                        </span>
                    </span>
                </div>
            </div>

            <!-- Content Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-6 relative">
                <!-- Card 1 -->
                <div class="p-6 md:p-8 rounded-2xl md:rounded-3xl transition-all duration-300 hover:-translate-y-1 hover:shadow-lg lg:col-span-2" style="background: var(--av-surface); border: 1px solid var(--av-border);">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="p-3 rounded-2xl bg-teal-500/10 text-teal-500 shrink-0">
                            <i class="fas fa-eye-slash text-lg md:text-xl"></i>
                        </div>
                        <div>
                            <h2 class="text-xl md:text-2xl font-bold mb-2 leading-tight" style="color: var(--av-text);">
                                <span class="lang-id">Komitmen Privasi Proyek Maket</span>
                                <span class="lang-en">Mockup Project Privacy Commitment</span>
                            </h2>
                            <p class="leading-relaxed opacity-80 text-sm md:text-base" style="color: var(--av-text);">
                                <span class="lang-id">Situs Arctic Vision adalah <strong>prototipe berbasis informasi</strong> yang sama sekali tidak memerlukan login atau pembuatan akun. Oleh karena itu, kami sama sekali <strong>tidak mengumpulkan, menyimpan, atau melacak</strong> data pribadi, rekam jejak identitas, maupun kredensial pengunjung. Privasi Anda terjaga sempurna saat menjelajah.</span>
                                <span class="lang-en">The Arctic Vision site is an <strong>information-based prototype</strong> that requires absolutely no login or account creation. Therefore, we absolutely <strong>do not collect, store, or track</strong> personal data, identity footprints, or visitor credentials. Your privacy is perfectly preserved while browsing.</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="p-6 md:p-8 rounded-2xl md:rounded-3xl transition-all duration-300 hover:-translate-y-1 hover:shadow-lg" style="background: var(--av-surface); border: 1px solid var(--av-border);">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="p-3 rounded-2xl bg-blue-500/10 text-blue-500 shrink-0">
                            <i class="fas fa-database text-lg md:text-xl"></i>
                        </div>
                        <div>
                            <h2 class="text-lg md:text-xl font-bold mb-2 leading-tight" style="color: var(--av-text);">
                                <span class="lang-id">Tidak Ada Pengumpulan Data</span>
                                <span class="lang-en">No Data Collection</span>
                            </h2>
                            <p class="leading-relaxed opacity-80 text-sm md:text-base" style="color: var(--av-text);">
                                <span class="lang-id">Fitur pendaftaran dan login telah dihapus secara permanen untuk fokus pada demonstrasi proyek. Kehadiran Anda di platform ini bersifat anonim, di mana informasi hanya ditayangkan dari antarmuka kami tanpa mencatat informasi dari perangkat Anda.</span>
                                <span class="lang-en">Registration and login features have been permanently removed to focus on project demonstration. Your presence on this platform is anonymous, where information is only broadcasted from our interface without logging information from your device.</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="p-6 md:p-8 rounded-2xl md:rounded-3xl transition-all duration-300 hover:-translate-y-1 hover:shadow-lg" style="background: var(--av-surface); border: 1px solid var(--av-border);">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="p-3 rounded-2xl bg-indigo-500/10 text-indigo-500 shrink-0">
                            <i class="fas fa-cookie-bite text-lg md:text-xl"></i>
                        </div>
                        <div>
                            <h2 class="text-lg md:text-xl font-bold mb-2 leading-tight" style="color: var(--av-text);">
                                <span class="lang-id">Penggunaan Penyimpanan Minimal</span>
                                <span class="lang-en">Minimal Storage Usage</span>
                            </h2>
                            <p class="leading-relaxed opacity-80 text-sm md:text-base" style="color: var(--av-text);">
                                <span class="lang-id">Kami hanya menggunakan <em>local storage</em> browser semata-mata untuk mengingat preferensi antarmuka UI Anda (seperti pilihan tema terang/gelap serta bahasa). Tidak ada file pelacakan maupun alat analisis invasif dalam prototipe ini.</span>
                                <span class="lang-en">We only use browser <em>local storage</em> solely to remember your UI interface preferences (such as light/dark theme choices and language). There are no tracking files or invasive analysis tools in this prototype.</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="p-6 md:p-8 rounded-2xl md:rounded-3xl transition-all duration-300 hover:-translate-y-1 hover:shadow-lg lg:col-span-2" style="background: var(--av-surface); border: 1px solid var(--av-border);">
                    <div class="flex flex-col md:flex-row items-start md:items-center gap-6 justify-between">
                        <div class="flex items-start gap-4">
                            <div class="p-3 rounded-2xl bg-amber-500/10 text-amber-500 shrink-0">
                                <i class="fas fa-address-book text-lg md:text-xl"></i>
                            </div>
                            <div>
                                <h2 class="text-lg md:text-xl font-bold mb-2 leading-tight" style="color: var(--av-text);">
                                    <span class="lang-id">Komunikasi Opsional & Dukungan</span>
                                    <span class="lang-en">Optional Communication & Support</span>
                                </h2>
                                <p class="leading-relaxed opacity-80 text-sm md:text-base" style="color: var(--av-text);">
                                    <span class="lang-id">Jika Anda secara sukarela memutuskan untuk menghubungi kami via email untuk menanyakan perihal pengembangan proyek maket ini, alamat email dan pesan Anda hanya akan kami tanggapi untuk keperluan komunikasi tersebut dan tidak akan dibagikan ke pihak eksternal mana pun.</span>
                                    <span class="lang-en">If you voluntarily decide to contact us via email to inquire about the development of this mockup project, your email address and message will only be addressed for that communication and will not be shared with any external parties.</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Developer Seal -->
            <div class="mt-8 md:mt-12 text-center pb-8">
                 <div class="inline-flex items-center gap-3 px-5 py-2.5 md:px-6 md:py-3 rounded-full border opacity-70 transition-opacity hover:opacity-100 hover:shadow-md" style="border-color: var(--av-border); background: var(--av-surface); color: var(--av-text);">
                     <i class="fas fa-code text-blue-500 shrink-0"></i>
                     <span class="text-xs md:text-sm font-medium tracking-wide">
                         <span class="lang-id">Dikembangkan dengan integritas untuk UKK</span>
                         <span class="lang-en">Developed with integrity for UKK</span>
                     </span>
                 </div>
            </div>

        </div>
    </div>
</x-public-layout>
