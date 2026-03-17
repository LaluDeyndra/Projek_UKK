<x-guest-layout>
    <x-slot:styles>
        <style>
            .hero {
                padding-top: 80px;
                position: relative;
                overflow: hidden;
                background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{ asset('img/arctic.jpg') }}');
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .hero-content {
                max-width: 1280px;
                margin: 0 auto;
                padding: 2rem 1.5rem;
                text-align: center;
                color: white;
                z-index: 10;
            }

            .hero h1 {
                font-size: 3rem;
                font-weight: bold;
                margin-bottom: 1rem;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            }

            @media (min-width: 768px) {
                .hero h1 {
                    font-size: 4rem;
                }
            }

            .hero p {
                font-size: 1.5rem;
                color: rgba(255, 255, 255, 0.92);
                margin-bottom: 2rem;
                max-width: 32rem;
                margin-left: auto;
                margin-right: auto;
                text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
            }

            .hero-buttons {
                display: flex;
                flex-direction: column;
                gap: 1.5rem;
                justify-content: center;
            }

            @media (min-width: 768px) {
                .hero-buttons {
                    flex-direction: row;
                }
            }

            .section {
                padding: 2rem 1.5rem;
            }

            .section-light {
                background: var(--av-surface-2);
            }

            .section-white {
                background: var(--av-surface);
            }

            .section-container {
                max-width: 1280px;
                margin: 0 auto;
            }

            .section h2 {
                font-size: 1.875rem;
                font-weight: bold;
                text-align: center;
                margin-bottom: 3rem;
                color: var(--av-text);
            }

            .features-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 2rem;
                margin-top: 2rem;
            }

            .feature-card {
                background: var(--av-surface);
                padding: 2.5rem 2rem;
                border-radius: 1rem;
                box-shadow: 0 6px 18px rgba(15, 23, 42, 0.08);
                border: 1px solid var(--av-border);
                transition: all 0.3s ease;
                text-align: center;
                position: relative;
                overflow: hidden;
            }

            .feature-card::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 4px;
                background: linear-gradient(90deg, var(--av-primary) 0%, var(--av-primary-2) 100%);
                transform: scaleX(0);
                transition: transform 0.3s ease;
            }

            .feature-card:hover {
                transform: translateY(-8px);
                box-shadow: 0 12px 28px rgba(15, 23, 42, 0.12);
            }

            .feature-card:hover::before {
                transform: scaleX(1);
            }

            .feature-icon {
                width: 4rem;
                height: 4rem;
                margin: 0 auto 1.5rem;
                background: linear-gradient(135deg, var(--av-primary) 0%, var(--av-primary-2) 100%);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                font-size: 1.5rem;
                box-shadow: 0 6px 16px rgba(37, 99, 235, 0.25);
            }

            .feature-card h3 {
                font-size: 1.5rem;
                font-weight: bold;
                margin-bottom: 1rem;
                color: var(--av-text);
            }

            .feature-card p {
                color: var(--av-muted);
                line-height: 1.6;
            }

            .av-kicker {
                display: inline-flex;
                align-items: center;
                gap: 0.5rem;
                padding: 0.35rem 0.75rem;
                border-radius: 9999px;
                border: 1px solid rgba(255, 255, 255, 0.22);
                background: rgba(255, 255, 255, 0.08);
                color: rgba(255, 255, 255, 0.92);
                font-size: 0.75rem;
                font-weight: 600;
                letter-spacing: 0.02em;
                margin: 0 auto 1rem;
                width: fit-content;
            }
        </style>
    </x-slot:styles>

    <section class="hero">
        <div class="hero-content">
            <div class="av-kicker">
                <i class="fas fa-snowflake"></i>
                Arctic Vision • Realtime Monitoring
            </div>
            <h1>Arctic Vision</h1>
            <p>Membangun masa depan untuk ekosistem Arktik melalui pemantauan cerdas dan konservasi berkelanjutan</p>
            <div class="hero-buttons">
                <a href="{{ route('monitoring') }}">
                    <button
                        class="relative group border-none bg-transparent p-0 outline-none cursor-pointer font-mono font-light uppercase text-base">
                        <span
                            class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-60 rounded-lg transform translate-y-1 transition duration-[600ms] group-hover:translate-y-1.5">
                        </span>

                        <span class="absolute top-0 left-0 w-full h-full rounded-lg bg-zinc-900">
                        </span>

                        <div
                            class="relative flex items-center justify-between py-3 px-6 text-lg text-white rounded-lg transform -translate-y-1 bg-gradient-to-r from-zinc-800 via-zinc-900 to-black gap-3 transition duration-[600ms] ease-[cubic-bezier(0.3,0.7,0.4,1)] group-hover:-translate-y-1.5 group-hover:duration-[250ms] group-active:-translate-y-0.5 brightness-100 group-hover:brightness-125">

                            <span class="select-none font-bold">Monitoring Suhu</span>

                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                class="w-5 h-5 ml-2 -mr-1 transition duration-250 group-hover:scale-110">
                                <path d="M12 20V10M18 20V4M6 20v-4" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </button>
                </a>
                <a href="#encyclopedia">
                    <button
                        class="relative group border-none bg-transparent p-0 outline-none cursor-pointer font-mono font-light uppercase text-base">
                        <span
                            class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-40 rounded-lg transform translate-y-0.5 transition duration-[600ms] group-hover:translate-y-1">
                        </span>

                        <span
                            class="absolute top-0 left-0 w-full h-full rounded-lg bg-gradient-to-l from-blue-950 via-blue-900 to-blue-950">
                        </span>

                        <div
                            class="relative flex items-center justify-between py-3 px-6 text-lg text-white rounded-lg transform -translate-y-1 bg-gradient-to-r from-blue-900 via-blue-800 to-blue-700 gap-3 transition duration-[600ms] ease-[cubic-bezier(0.3,0.7,0.4,1)] group-hover:-translate-y-1.5 group-hover:duration-[250ms] group-active:-translate-y-0.5 brightness-100 group-hover:brightness-110">

                            <span class="select-none font-bold">Pelajari Hewan</span>

                            <svg viewBox="0 0 20 20" fill="currentColor"
                                class="w-5 h-5 ml-2 -mr-1 transition duration-250 group-hover:translate-x-1">
                                <path clip-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    fill-rule="evenodd"></path>
                            </svg>
                        </div>
                    </button>
                </a>
            </div>
        </div>
    </section>

    <section id="monitoring" class="section section-light">
        <div class="section-container">
            <h2>Fitur Utama</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Monitoring Realtime</h3>
                    <p>Pantau perubahan suhu dan kondisi iklim Arktik secara real-time dengan data akurat dan terkini.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3>Encyclopedia</h3>
                    <p>Pelajari tentang berbagai spesies yang hidup di Arktik dan upaya konservasi untuk melindungi
                        mereka.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-halved"></i>
                    </div>
                    <h3>Privasi & Keamanan</h3>
                    <p>Data kamu diproses dengan prinsip minim data dan akses yang jelas, sehingga tetap aman dan nyaman.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="encyclopedia" class="section section-white">
        <div class="section-container">
            <h2>Encyclopedia - Penghuni Arktik</h2>
            <p style="text-align: center; color: var(--av-muted); max-width: 32rem; margin: 0 auto;">
                Jelajahi dunia fauna Arktik dan pelajari bagaimana mereka beradaptasi dengan lingkungan yang ekstrem.
            </p>
        </div>
    </section>
</x-guest-layout>
