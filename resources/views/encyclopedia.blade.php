<x-public-layout>
    <div class="pt-24 pb-12 min-h-screen">
        <section class="section section-white" style="position: relative; overflow: visible; min-height: 80vh;">
            <!-- Background Elements -->
            <div
                class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-500 rounded-full mix-blend-screen filter blur-[100px] opacity-10 animate-blob">
            </div>
            <div
                class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-cyan-400 rounded-full mix-blend-screen filter blur-[100px] opacity-10 animate-blob animation-delay-2000">
            </div>

            <div class="section-container relative z-10">
                <!-- NEW PREMIUM HEADER -->
                <div class="encyclopedia-hero relative text-center mb-20 min-h-[300px] flex flex-col justify-center">
                    <div class="absolute inset-x-0 inset-y-0 flex items-center justify-center z-0 pointer-events-none">
                        <h1
                            class="text-[10rem] md:text-[14rem] font-black uppercase text-transparent bg-clip-text bg-gradient-to-b from-slate-300 to-transparent dark:from-blue-500/10 dark:to-transparent leading-none select-none drop-shadow-sm">
                            ARCTIC
                        </h1>
                    </div>
                    <div class="relative z-10 pt-16">
                        <div
                            class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-500/10 border border-blue-500/20 text-blue-700 dark:text-blue-400 text-sm font-semibold tracking-wide uppercase mb-6">
                            <i class="fas fa-compass"></i>
                            <span class="lang-id">Direktori Eksplorasi</span>
                            <span class="lang-en">Exploration Directory</span>
                        </div>
                        <h2
                            class="text-4xl md:text-6xl font-extrabold tracking-tight mb-6 text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500 dark:from-blue-400 dark:to-cyan-300 drop-shadow-sm">
                            <span class="lang-id">Ensiklopedia Fauna</span>
                            <span class="lang-en">Fauna Encyclopedia</span>
                        </h2>
                        <p
                            class="text-lg md:text-xl text-slate-600 dark:text-slate-400 max-w-3xl mx-auto leading-relaxed">
                            <span class="lang-id">Pilih subjek studi Anda di bawah ini untuk mempelajari lebih dalam
                                tentang taksonomi, habitat, siklus hidup, dan keajaiban anatomi hewan.</span>
                            <span class="lang-en">Select your subject of study below to dive deeper into the taxonomy,
                                habitat, life cycle, and anatomical wonders surrounding each animal.</span>
                        </p>
                    </div>
                </div>

                <div class="encyclo-grid">
                    @foreach ($animals as $animal)
                        <a href="{{ route('encyclopedia.show', $animal['slug']) }}" class="encyclo-card group">
                            <div class="encyclo-img-wrapper">
                                <!-- Beautiful Fallback Gradient if image is broken or missing -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-br from-blue-900 to-slate-900 flex items-center justify-center -z-10">
                                    <i class="fas fa-image text-4xl text-blue-500/30"></i>
                                </div>
                                <img src="{{ asset($animal['image']) }}" alt="{{ $animal['name_en'] }}"
                                    class="encyclo-img" onerror="this.style.opacity='0'">

                                <div class="encyclo-overlay">
                                    <span class="encyclo-view-btn">
                                        <span class="lang-id">Mulai Eksplorasi</span>
                                        <span class="lang-en">Begin Exploration</span>
                                        <i
                                            class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="encyclo-content">
                                <div class="encyclo-badge">{{ $animal['badge'] }}</div>
                                <h3 class="encyclo-title">
                                    <span class="lang-id">{{ $animal['name_id'] }}</span>
                                    <span class="lang-en">{{ $animal['name_en'] }}</span>
                                </h3>
                                <p class="encyclo-desc">
                                    <span class="lang-id">{{ $animal['short_id'] }}</span>
                                    <span class="lang-en">{{ $animal['short_en'] }}</span>
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    <style>
        /* Section Container - Mobile Padding */
        .section-container {
            padding: 0 1.25rem;
        }

        @media (min-width: 640px) {
            .section-container {
                padding: 0 2rem;
            }
        }

        @media (min-width: 1024px) {
            .section-container {
                padding: 0;
            }
        }

        /* Encyclopedia Hero - Responsive Padding */
        .encyclopedia-hero {
            padding: 0 1.25rem;
        }

        @media (min-width: 640px) {
            .encyclopedia-hero {
                padding: 0 2rem;
            }
        }

        .encyclo-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.25rem;
        }

        @media (min-width: 640px) {
            .encyclo-grid {
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 2rem;
                padding: 0 2rem;
            }
        }

        @media (min-width: 1024px) {
            .encyclo-grid {
                grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
                gap: 2.5rem;
                padding: 0;
            }
        }

        .encyclo-card {
            display: flex;
            flex-direction: column;
            background: var(--av-surface);
            border-radius: 1.5rem;
            overflow: hidden;
            text-decoration: none;
            border: 1px solid var(--av-border);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            transform: translateY(0);
        }

        .encyclo-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            border-color: color-mix(in srgb, var(--av-primary) 30%, var(--av-border));
        }

        .encyclo-img-wrapper {
            position: relative;
            width: 100%;
            padding-top: 65%;
            /* 16:9 Aspect Ratio */
            overflow: hidden;
        }

        .encyclo-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .encyclo-card:hover .encyclo-img {
            transform: scale(1.08);
        }

        .encyclo-overlay {
            position: absolute;
            inset: 0;
            background: rgba(15, 23, 42, 0);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.4s ease;
        }

        .encyclo-card:hover .encyclo-overlay {
            background: rgba(15, 23, 42, 0.3);
        }

        .encyclo-view-btn {
            background: white;
            color: #0f172a;
            padding: 0.75rem 1.5rem;
            border-radius: 2rem;
            font-weight: 600;
            font-size: 0.95rem;
            transform: translateY(20px);
            opacity: 0;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            align-items: center;
        }

        .encyclo-card:hover .encyclo-view-btn {
            transform: translateY(0);
            opacity: 1;
        }

        .encyclo-content {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        @media (min-width: 640px) {
            .encyclo-content {
                padding: 2rem;
            }
        }

        .encyclo-badge {
            align-self: flex-start;
            background: var(--av-surface-2);
            color: var(--av-primary);
            padding: 0.35rem 0.85rem;
            border-radius: 2rem;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            margin-bottom: 1rem;
            border: 1px solid color-mix(in srgb, var(--av-primary) 20%, transparent);
        }

        .encyclo-title {
            font-size: 1.35rem;
            font-weight: 800;
            color: var(--av-text);
            margin-bottom: 0.75rem;
            transition: color 0.3s ease;
            line-height: 1.3;
        }

        @media (min-width: 640px) {
            .encyclo-title {
                font-size: 1.5rem;
            }
        }

        .encyclo-card:hover .encyclo-title {
            color: var(--av-primary);
        }

        .encyclo-desc {
            font-size: 0.95rem;
            color: var(--av-muted);
            line-height: 1.6;
            margin: 0;
        }

        @media (min-width: 640px) {
            .encyclo-desc {
                font-size: 1rem;
            }
        }
    </style>
</x-public-layout>
