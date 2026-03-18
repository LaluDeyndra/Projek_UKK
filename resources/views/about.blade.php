<x-public-layout>
    <x-slot:title>About - Arctic Vision</x-slot:title>

    <x-slot:styles>
        <style>
            .about-hero {
                padding-top: 100px;
                padding-bottom: 4rem;
                background: linear-gradient(to bottom, var(--av-surface-2) 0%, var(--av-bg) 100%);
                text-align: center;
                position: relative;
                overflow: hidden;
            }

            .about-hero::before {
                content: '';
                position: absolute;
                top: -50%;
                left: -50%;
                width: 200%;
                height: 200%;
                background: radial-gradient(circle at 50% 10%, color-mix(in srgb, var(--av-primary) 8%, transparent), transparent 40%);
                pointer-events: none;
            }

            .about-title {
                font-size: 2.5rem;
                font-weight: 800;
                color: var(--av-text);
                margin-bottom: 1rem;
                position: relative;
            }
            
            @media (min-width: 768px) {
                .about-title {
                    font-size: 3.5rem;
                }
            }

            .about-title span {
                background: linear-gradient(135deg, var(--av-primary) 0%, #38bdf8 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            .about-subtitle {
                font-size: 1.125rem;
                color: var(--av-muted);
                max-width: 42rem;
                margin: 0 auto 2rem;
                line-height: 1.7;
            }

            .about-grid {
                max-width: 1280px;
                margin: 0 auto;
                padding: 4rem 1.5rem;
                display: grid;
                gap: 4rem;
                align-items: center;
                grid-template-columns: 1fr;
            }

            @media (min-width: 1024px) {
                .about-grid {
                    grid-template-columns: 1fr 1fr;
                }
                
                .about-grid.reverse .about-text {
                    order: -1;
                }
            }

            .about-image {
                position: relative;
                border-radius: 1.5rem;
                overflow: hidden;
                box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.15);
                transform: perspective(1000px) rotateY(-5deg);
                transition: transform 0.5s ease;
            }

            .about-grid.reverse .about-image {
                transform: perspective(1000px) rotateY(5deg);
            }

            .about-image:hover {
                transform: perspective(1000px) rotateY(0deg) translateY(-10px);
            }

            .about-image img {
                width: 100%;
                height: auto;
                display: block;
                aspect-ratio: 4/3;
                object-fit: cover;
                filter: brightness(0.9);
            }

            .about-image::after {
                content: '';
                position: absolute;
                inset: 0;
                border-radius: 1.5rem;
                border: 1px solid rgba(255, 255, 255, 0.2);
            }

            .about-text h2 {
                font-size: 2rem;
                font-weight: 700;
                color: var(--av-text);
                margin-bottom: 1.5rem;
                line-height: 1.3;
            }

            .about-text p {
                font-size: 1.125rem;
                color: var(--av-muted);
                line-height: 1.8;
                margin-bottom: 1.5rem;
            }

            .feature-list {
                list-style: none;
                padding: 0;
                margin: 2rem 0 0;
            }

            .feature-list li {
                display: flex;
                align-items: flex-start;
                gap: 1rem;
                margin-bottom: 1.5rem;
            }

            .feature-list-icon {
                flex-shrink: 0;
                width: 3rem;
                height: 3rem;
                border-radius: 50%;
                background: color-mix(in srgb, var(--av-primary) 10%, transparent);
                color: var(--av-primary);
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 1.25rem;
            }

            .feature-list-text h4 {
                font-size: 1.125rem;
                font-weight: 600;
                color: var(--av-text);
                margin-bottom: 0.25rem;
            }

            .feature-list-text p {
                font-size: 0.95rem;
                color: var(--av-muted);
                margin-bottom: 0;
            }

            .glass-mission {
                background: color-mix(in srgb, var(--av-surface) 60%, transparent);
                backdrop-filter: blur(12px);
                -webkit-backdrop-filter: blur(12px);
                border: 1px solid var(--av-border);
                border-radius: 1.5rem;
                padding: 3rem;
                text-align: center;
                max-width: 800px;
                margin: -2rem auto 4rem;
                position: relative;
                z-index: 10;
                box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.05);
            }

            .glass-mission i {
                font-size: 2.5rem;
                color: var(--av-primary);
                margin-bottom: 1.5rem;
            }

            .glass-mission h3 {
                font-size: 1.75rem;
                font-weight: bold;
                color: var(--av-text);
                margin-bottom: 1rem;
            }

            .glass-mission p {
                font-size: 1.125rem;
                color: var(--av-muted);
                line-height: 1.6;
            }
        </style>
    </x-slot:styles>

    <section class="about-hero">
        <div style="max-width: 1280px; margin: 0 auto; padding: 0 1.5rem; position: relative; z-index: 2;">
            <div style="display: inline-flex; align-items: center; gap: 0.5rem; padding: 0.35rem 1rem; border-radius: 9999px; background: color-mix(in srgb, var(--av-primary) 10%, transparent); color: var(--av-primary); font-weight: 600; font-size: 0.875rem; margin-bottom: 1.5rem;">
                <i class="fas fa-snowflake"></i>
                <span class="lang-id">Profil Kami</span>
                <span class="lang-en">Our Profile</span>
            </div>
            <h1 class="about-title">
                <span class="lang-id">Purwarupa Ekosistem <span>Arktik</span></span>
                <span class="lang-en">Arctic Ecosystem <span>Prototype</span></span>
            </h1>
            <p class="about-subtitle">
                <span class="lang-id">Proyek ini adalah sebuah purwarupa (prototype) maket penangkaran satwa Arktik yang dirancang untuk mensimulasikan pemantauan lingkungan bersuhu dingin menggunakan teknologi IoT sederhana.</span>
                <span class="lang-en">This project is a prototype of an Arctic animal enclosure diorama designed to simulate cold environment monitoring using simple IoT technology.</span>
            </p>
        </div>
    </section>

    <!-- Mission Glass Box -->
    <div style="padding: 0 1.5rem;">
        <div class="glass-mission">
            <i class="fas fa-earth-americas"></i>
            <h3>
                <span class="lang-id">Konsep Maket Penangkaran Arktik</span>
                <span class="lang-en">Arctic Enclosure Diorama Concept</span>
            </h3>
            <p>
                <span class="lang-id">Menciptakan ekosistem mini yang mendemonstrasikan kondisi kutub utara. Melalui konsep miniatur ini, kami mengilustrasikan bagaimana sistem pendingin dan komponen cerdas bisa diintegrasikan dalam pemeliharaan satwa simulasi yang membutuhkan kontrol iklim yang teliti.</span>
                <span class="lang-en">Creating a miniature ecosystem that demonstrates North Pole conditions. Through this miniature concept, we illustrate how cooling systems and smart components can be integrated in maintaining simulated animals requiring precise climate control.</span>
            </p>
        </div>
    </div>

    <!-- Section 1 -->
    <section class="about-grid">
        <div class="about-image">
            <img src="{{ asset('img/arctic.jpg') }}" alt="Maket Penangkaran Arktik" />
        </div>
        <div class="about-text">
            <h2>
                <span class="lang-id">Desain Purwarupa Interaktif</span>
                <span class="lang-en">Interactive Prototype Design</span>
            </h2>
            <p>
                <span class="lang-id">Maket Arctic Vision dibangun untuk mendemonstrasikan infrastruktur monitoring sensor dari jarak jauh yang krusial bagi kehidupan satwa kutub. Meski berskala kecil, ekosistem buatan ini dapat diamati kinerjanya.</span>
                <span class="lang-en">The Arctic Vision diorama is built to demonstrate remote sensor monitoring infrastructure crucial for polar animal life. Although small-scale, the performance of this artificial ecosystem can be realistically observed.</span>
            </p>
            <ul class="feature-list">
                <li>
                    <div class="feature-list-icon"><i class="fas fa-temperature-arrow-down"></i></div>
                    <div class="feature-list-text">
                        <h4>
                            <span class="lang-id">Simulasi Iklim Mikrokontroler</span>
                            <span class="lang-en">Microcontroller Climate Simulation</span>
                        </h4>
                        <p>
                            <span class="lang-id">Menggunakan sistem sensor terpusat untuk membaca dan merepresentasikan iklim buatan dengan toleransi yang menyerupai habitat asli beruang dan penguin.</span>
                            <span class="lang-en">Using a centralized sensor system to read and represent an artificial climate with tolerances resembling the native habitat of bears and penguins.</span>
                        </p>
                    </div>
                </li>
                <li>
                    <div class="feature-list-icon"><i class="fas fa-shield-cat"></i></div>
                    <div class="feature-list-text">
                        <h4>
                            <span class="lang-id">Edukasi Lingkungan & Spesies</span>
                            <span class="lang-en">Environmental & Species Education</span>
                        </h4>
                        <p>
                            <span class="lang-id">Diorama fauna kutub ditujukan sebagai media pembelajaran interaktif mengenai kebiasaan adaptasi makhluk hidup pada iklim bersuhu sangat ekstrem.</span>
                            <span class="lang-en">The polar fauna diorama is intended as an interactive educational learning medium regarding the adaptation habits of living creatures in extreme cold climates.</span>
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- Section 2 -->
    <section style="background: var(--av-surface-2); border-top: 1px solid var(--av-border); border-bottom: 1px solid var(--av-border); margin-bottom: 4rem;">
        <div class="about-grid reverse" style="padding-top: 5rem; padding-bottom: 5rem;">
            <div class="about-image">
                <div style="width: 100%; height: 100%; min-height: 400px; border-radius: 1.5rem; background: linear-gradient(135deg, #1e3a8a, #0b1220); display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden;">
                    <i class="fas fa-microchip" style="font-size: 15rem; color: rgba(255,255,255,0.05);"></i>
                    <i class="fas fa-wifi" style="font-size: 4rem; color: #38bdf8; position: absolute; top: 25%; right: 25%;"></i>
                    <i class="fas fa-server" style="font-size: 5rem; color: #93c5fd; position: absolute; bottom: 25%; left: 25%;"></i>
                    <i class="fas fa-satellite-dish" style="font-size: 3rem; color: #e0e7ff; position: absolute; top: 40%; left: 40%;"></i>
                </div>
            </div>
            <div class="about-text">
                <h2>
                    <span class="lang-id">Teknologi IoT Konsep Sederhana</span>
                    <span class="lang-en">Simple Concept IoT Technology</span>
                </h2>
                <p>
                    <span class="lang-id">Sistem monitoring website ini secara khusus dirakit serta terhubung dengan sebuah perangkat cerdas (NodeMCU / mikrokontroler) yang bekerja mirip dengan instrumen penangkaran satwa cerdas di realita nyatanya.</span>
                    <span class="lang-en">This website's monitoring system is specifically assembled and connected with a smart device (NodeMCU / microcontroller) that works similarly to intelligent animal enclosure instruments in reality.</span>
                </p>
                <p>
                    <span class="lang-id">Sebuah sensor pintar yang terpasang pada maket siap bertugas membaca data <strong>Suhu Udara</strong> dan <strong>Kelembaban Udara</strong> lingkungan ruangannya. Datanya langsung dikirim ke server pusat, di mana Anda dapat langsung menyaksikan demonstrasi monitoring kestabilan iklim buatan kami secara <em>realtime</em> kapanpun.</span>
                    <span class="lang-en">A smart sensor installed on the diorama is ready to read the <strong>Air Temperature</strong> and <strong>Air Humidity</strong> data of its room environment. The data is sent directly to the central server, where you can immediately witness the demonstration of our artificial climate stability monitoring in <em>realtime</em> anytime.</span>
                </p>
                <div style="margin-top: 2.5rem;">
                    <a href="{{ route('monitoring') }}" style="display: inline-flex; align-items: center; gap: 0.75rem; padding: 0.85rem 2rem; background: var(--av-primary); color: white; border-radius: 9999px; font-weight: 600; text-decoration: none; transition: transform 0.3s, background 0.3s; box-shadow: 0 4px 14px 0 color-mix(in srgb, var(--av-primary) 40%, transparent);" onmouseover="this.style.transform='translateY(-2px)';" onmouseout="this.style.transform='translateY(0)';">
                        <i class="fas fa-desktop"></i>
                        <span class="lang-id">Lihat Data Realtime</span>
                        <span class="lang-en">View Realtime Data</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</x-public-layout>
