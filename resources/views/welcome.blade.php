<x-guest-layout>
    <x-slot:styles>
        <style>
            /* CSS spesifik halaman ini */
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'Inter', sans-serif;
                line-height: 1.6;
            }

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
                color: #f3f4f6;
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

            .btn {
                padding: 0.75rem 1.5rem;
                border-radius: 0.5rem;
                font-weight: 500;
                text-decoration: none;
                transition: all 0.3s ease;
                cursor: pointer;
                border: none;
                display: inline-block;
                position: relative;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.1);
                transform: translateY(0);
            }

            .btn:hover {
                transform: translateY(-3px);
                box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3), 0 8px 25px rgba(0, 0, 0, 0.15);
            }

            .btn-dark {
                background: linear-gradient(145deg, #111827, #1a202c);
                color: white;
            }

            .section {
                padding: 2rem 1.5rem;
            }

            .section-light {
                background: #f9fafb;
            }

            .section-white {
                background: white;
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
            }

            .features-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
                gap: 2rem;
            }

            .feature-card {
                background: white;
                padding: 2rem;
                border-radius: 0.5rem;
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            }

            .feature-card h3 {
                font-size: 1.25rem;
                font-weight: bold;
                margin-bottom: 1rem;
            }

            .feature-card p {
                color: #4b5563;
            }
        </style>
    </x-slot:styles>

    <section class="hero">
        <div class="hero-content">
            <h1>Arctic Vision</h1>
            <p>Membangun masa depan untuk ekosistem Arktik melalui pemantauan cerdas dan konservasi berkelanjutan</p>
            <div class="hero-buttons">
                <a href="#monitoring">
                    <button
                        class="relative group border-none bg-transparent p-0 outline-none cursor-pointer font-mono font-light uppercase text-base">
                        <span
                            class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-60 rounded-lg transform translate-y-1 transition duration-[600ms] group-hover:translate-y-1.5">
                        </span>

                        <span class="absolute top-0 left-0 w-full h-full rounded-lg bg-zinc-900">
                        </span>

                        <div
                            class="relative flex items-center justify-between py-3 px-6 text-lg text-white rounded-lg transform -translate-y-1 bg-gradient-to-r from-zinc-800 via-zinc-900 to-black gap-3 transition duration-[600ms] ease-[cubic-bezier(0.3,0.7,0.4,1)] group-hover:-translate-y-1.5 group-hover:duration-[250ms] group-active:-translate-y-0.5 brightness-100 group-hover:brightness-125">

                            <span class="select-none font-bold">Monitoring</span>

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
                    <h3>Monitoring Realtime</h3>
                    <p>Pantau perubahan suhu dan kondisi iklim Arktik secara real-time dengan data akurat dan terkini.
                    </p>
                </div>
                <div class="feature-card">
                    <h3>Live Cams</h3>
                    <p>Saksikan kehidupan liar Arktik melalui kamera langsung yang menangkap momen-momen alami.</p>
                </div>
                <div class="feature-card">
                    <h3>Encyclopedia</h3>
                    <p>Pelajari tentang berbagai spesies yang hidup di Arktik dan upaya konservasi untuk melindungi
                        mereka.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="encyclopedia" class="section section-white">
        <div class="section-container">
            <h2>Encyclopedia - Penghuni Arktik</h2>
            <p style="text-align: center; color: #4b5563; max-width: 32rem; margin: 0 auto;">
                Jelajahi dunia fauna Arktik dan pelajari bagaimana mereka beradaptasi dengan lingkungan yang ekstrem.
            </p>
        </div>
    </section>
    </x-layout>
