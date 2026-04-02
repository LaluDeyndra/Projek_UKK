<x-public-layout>
    <div class="pt-24 pb-12 min-h-screen overflow-x-hidden">
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
                            <span class="lang-id">Jelajahi Dunia Arktik</span>
                            <span class="lang-en">Explore the Arctic World</span>
                        </h2>
                        <p
                            class="text-lg md:text-xl text-slate-600 dark:text-slate-400 max-w-3xl mx-auto leading-relaxed">
                            <span class="lang-id">Selidiki sejarah panjang penjelajahan manusia di ujung dunia, lalu pelajari lebih dalam taksonomi, habitat, dan kehebatan anatomi satwa liar melalui basis data ensiklopedia kami.</span>
                            <span class="lang-en">Delve into the long history of human exploration at the edge of the world, then dive deeper into the taxonomy, habitats, and anatomical wonders of the wildlife through our encyclopedia database.</span>
                        </p>
                    </div>
                </div>

                </div>

                <!-- ARCTIC HISTORY TIMELINE -->
                <div class="relative py-16 mb-20">
                    <div class="text-center mb-16">
                        <h3
                            class="text-3xl md:text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500 dark:from-blue-400 dark:to-cyan-300 drop-shadow-sm">
                            <span class="lang-id">Sejarah Eksplorasi Arktik</span>
                            <span class="lang-en">History of Arctic Exploration</span>
                        </h3>
                    </div>

                    <div class="timeline-container relative max-w-5xl mx-auto px-4 md:px-0">
                        <!-- Vertical Line -->
                        <div
                            class="timeline-line absolute left-[20px] md:left-1/2 md:-ml-[2px] top-0 bottom-0 w-[4px] bg-gradient-to-b from-transparent via-blue-500/40 to-transparent rounded-full dark:via-blue-500/50">
                        </div>

                        <!-- Timeline Items -->
                        <!-- Item 1: 330 BC -->
                        <div
                            class="timeline-item relative flex items-center justify-between md:justify-normal w-full mb-12 opacity-0 translate-y-8 transition-all duration-[800ms] ease-out">
                            <!-- Node -->
                            <div
                                class="timeline-node absolute left-[16px] md:left-1/2 transform -translate-x-1/2 w-4 h-4 rounded-full bg-blue-500 shadow-[0_0_15px_rgba(59,130,246,0.6)] z-10 border-4 border-slate-100 dark:border-slate-900 transition-transform hover:scale-150 duration-300">
                            </div>
                            <!-- Spacer for desktop staggered layout -->
                            <div class="hidden md:block w-1/2 pr-12"></div>
                            <!-- Content -->
                            <div class="timeline-content w-full pl-12 md:pl-12 md:w-1/2 z-10">
                                <div
                                    class="glass-card p-6 md:p-8 rounded-3xl border border-blue-500/20 bg-white/60 dark:bg-slate-800/40 backdrop-blur-md hover:bg-white/80 dark:hover:bg-slate-800/60 transition-all hover:-translate-y-2 hover:shadow-[0_20px_40px_-15px_rgba(59,130,246,0.15)] relative overflow-hidden group">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-r from-blue-500/0 via-blue-500/0 to-blue-500/0 group-hover:via-blue-500/5 transition-all duration-500">
                                    </div>
                                    <span class="inline-block text-blue-600 dark:text-blue-400 font-bold text-xl mb-3 tracking-wider">c.
                                        330 BC</span>
                                    <h4 class="text-xl md:text-2xl font-extrabold text-slate-800 dark:text-slate-100 mb-3">
                                        <span class="lang-id">Penemuan Pertama</span>
                                        <span class="lang-en">The First Discovery</span>
                                    </h4>
                                    <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base leading-relaxed">
                                        <span class="lang-id">Pytheas, seorang penjelajah Yunani, menjadi orang Eropa
                                            pertama yang mendokumentasikan fenomena "matahari tengah malam" dan es
                                            kutub.</span>
                                        <span class="lang-en">Pytheas, a Greek explorer, becomes the first European to
                                            document the "midnight sun" and polar ice.</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 2: 982 AD -->
                        <div
                            class="timeline-item relative flex items-center justify-between md:justify-normal w-full mb-12 opacity-0 translate-y-8 transition-all duration-[800ms] ease-out">
                            <div
                                class="timeline-node absolute left-[16px] md:left-1/2 transform -translate-x-1/2 w-4 h-4 rounded-full bg-cyan-500 dark:bg-cyan-400 shadow-[0_0_15px_rgba(34,211,238,0.6)] z-10 border-4 border-slate-100 dark:border-slate-900 transition-transform hover:scale-150 duration-300">
                            </div>
                            <!-- Desktop staggering: put content on the left -->
                            <div class="timeline-content w-full pl-12 md:pl-0 md:pr-12 md:w-1/2 z-10 md:text-right">
                                <div
                                    class="glass-card p-6 md:p-8 rounded-3xl border border-cyan-500/20 bg-white/60 dark:bg-slate-800/40 backdrop-blur-md hover:bg-white/80 dark:hover:bg-slate-800/60 transition-all hover:-translate-y-2 hover:shadow-[0_20px_40px_-15px_rgba(34,211,238,0.15)] relative overflow-hidden group">
                                    <span
                                        class="inline-block text-cyan-600 dark:text-cyan-400 font-bold text-xl mb-3 tracking-wider">c.
                                        982 AD</span>
                                    <h4 class="text-xl md:text-2xl font-extrabold text-slate-800 dark:text-slate-100 mb-3">
                                        <span class="lang-id">Era Bangsa Norse</span>
                                        <span class="lang-en">The Norse Era</span>
                                    </h4>
                                    <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base leading-relaxed">
                                        <span class="lang-id">Erik The Red menemukan Greenland, membangun pemukiman
                                            Norse pertama di kawasan dengan cuaca sangat ekstrem.</span>
                                        <span class="lang-en">Erik the Red discovers Greenland, establishing the first
                                            Norse settlements in extreme weather conditions.</span>
                                    </p>
                                </div>
                            </div>
                            <div class="hidden md:block w-1/2 pl-12"></div>
                        </div>

                        <!-- Item 3: 1596 -->
                        <div
                            class="timeline-item relative flex items-center justify-between md:justify-normal w-full mb-12 opacity-0 translate-y-8 transition-all duration-[800ms] ease-out">
                            <div
                                class="timeline-node absolute left-[16px] md:left-1/2 transform -translate-x-1/2 w-4 h-4 rounded-full bg-blue-500 shadow-[0_0_15px_rgba(59,130,246,0.6)] z-10 border-4 border-slate-100 dark:border-slate-900 transition-transform hover:scale-150 duration-300">
                            </div>
                            <div class="hidden md:block w-1/2 pr-12"></div>
                            <div class="timeline-content w-full pl-12 md:pl-12 md:w-1/2 z-10">
                                <div
                                    class="glass-card p-6 md:p-8 rounded-3xl border border-blue-500/20 bg-white/60 dark:bg-slate-800/40 backdrop-blur-md hover:bg-white/80 dark:hover:bg-slate-800/60 transition-all hover:-translate-y-2 hover:shadow-[0_20px_40px_-15px_rgba(59,130,246,0.15)] relative overflow-hidden group">
                                    <span
                                        class="inline-block text-blue-600 dark:text-blue-400 font-bold text-xl mb-3 tracking-wider">1596</span>
                                    <h4 class="text-xl md:text-2xl font-extrabold text-slate-800 dark:text-slate-100 mb-3">
                                        <span class="lang-id">Musim Dingin Pertama</span>
                                        <span class="lang-en">The First Arctic Winter</span>
                                    </h4>
                                    <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base leading-relaxed">
                                        <span class="lang-id">Willem Barents menemukan Svalbard. Krunya menjadi orang
                                            Eropa pertama yang berhasil bertahan hidup melewati musim dingin Arktik yang
                                            mematikan.</span>
                                        <span class="lang-en">Willem Barents discovers Svalbard. His crew becomes the
                                            first Europeans to survive a deadly High Arctic winter.</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 4: 1845 -->
                        <div
                            class="timeline-item relative flex items-center justify-between md:justify-normal w-full mb-12 opacity-0 translate-y-8 transition-all duration-[800ms] ease-out">
                            <div
                                class="timeline-node absolute left-[16px] md:left-1/2 transform -translate-x-1/2 w-4 h-4 rounded-full bg-cyan-500 dark:bg-cyan-400 shadow-[0_0_15px_rgba(34,211,238,0.6)] z-10 border-4 border-slate-100 dark:border-slate-900 transition-transform hover:scale-150 duration-300">
                            </div>
                            <div class="timeline-content w-full pl-12 md:pl-0 md:pr-12 md:w-1/2 z-10 md:text-right">
                                <div
                                    class="glass-card p-6 md:p-8 rounded-3xl border border-cyan-500/20 bg-white/60 dark:bg-slate-800/40 backdrop-blur-md hover:bg-white/80 dark:hover:bg-slate-800/60 transition-all hover:-translate-y-2 hover:shadow-[0_20px_40px_-15px_rgba(34,211,238,0.15)] relative overflow-hidden group">
                                    <span
                                        class="inline-block text-cyan-600 dark:text-cyan-400 font-bold text-xl mb-3 tracking-wider">1845</span>
                                    <h4 class="text-xl md:text-2xl font-extrabold text-slate-800 dark:text-slate-100 mb-3">
                                        <span class="lang-id">Tragedi Franklin</span>
                                        <span class="lang-en">The Franklin Tragedy</span>
                                    </h4>
                                    <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base leading-relaxed">
                                        <span class="lang-id">Sir John Franklin berangkat menelusuri Jalur Barat Laut.
                                            Seluruh kru menghilang ditelan es, memicu puluhan misi pencarian
                                            besar-besaran.</span>
                                        <span class="lang-en">Sir John Franklin sets out for the Northwest Passage. The
                                            entire crew disappears into the ice, sparking massive search missions.</span>
                                    </p>
                                </div>
                            </div>
                            <div class="hidden md:block w-1/2 pl-12"></div>
                        </div>

                        <!-- Item 5: 1906 -->
                        <div
                            class="timeline-item relative flex items-center justify-between md:justify-normal w-full mb-12 opacity-0 translate-y-8 transition-all duration-[800ms] ease-out">
                            <div
                                class="timeline-node absolute left-[16px] md:left-1/2 transform -translate-x-1/2 w-4 h-4 rounded-full bg-blue-500 shadow-[0_0_15px_rgba(59,130,246,0.6)] z-10 border-4 border-slate-100 dark:border-slate-900 transition-transform hover:scale-150 duration-300">
                            </div>
                            <div class="hidden md:block w-1/2 pr-12"></div>
                            <div class="timeline-content w-full pl-12 md:pl-12 md:w-1/2 z-10">
                                <div
                                    class="glass-card p-6 md:p-8 rounded-3xl border border-blue-500/20 bg-white/60 dark:bg-slate-800/40 backdrop-blur-md hover:bg-white/80 dark:hover:bg-slate-800/60 transition-all hover:-translate-y-2 hover:shadow-[0_20px_40px_-15px_rgba(59,130,246,0.15)] relative overflow-hidden group">
                                    <span
                                        class="inline-block text-blue-600 dark:text-blue-400 font-bold text-xl mb-3 tracking-wider">1903-1906</span>
                                    <h4 class="text-xl md:text-2xl font-extrabold text-slate-800 dark:text-slate-100 mb-3">
                                        <span class="lang-id">Ekspedisi Amundsen</span>
                                        <span class="lang-en">Amundsen's Expedition</span>
                                    </h4>
                                    <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base leading-relaxed">
                                        <span class="lang-id">Roald Amundsen mencetak sejarah sebagai manusia pertama
                                            yang berhasil melewati keseluruhan Jalur Barat Laut yang membeku.</span>
                                        <span class="lang-en">Roald Amundsen makes history as the first to successfully
                                            navigate the frozen Northwest Passage aboard the Gjøa.</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 6: 1926 -->
                        <div
                            class="timeline-item relative flex items-center justify-between md:justify-normal w-full mb-12 opacity-0 translate-y-8 transition-all duration-[800ms] ease-out">
                            <div
                                class="timeline-node absolute left-[16px] md:left-1/2 transform -translate-x-1/2 w-4 h-4 rounded-full bg-cyan-500 dark:bg-cyan-400 shadow-[0_0_15px_rgba(34,211,238,0.6)] z-10 border-4 border-slate-100 dark:border-slate-900 transition-transform hover:scale-150 duration-300">
                            </div>
                            <div class="timeline-content w-full pl-12 md:pl-0 md:pr-12 md:w-1/2 z-10 md:text-right">
                                <div
                                    class="glass-card p-6 md:p-8 rounded-3xl border border-cyan-500/20 bg-white/60 dark:bg-slate-800/40 backdrop-blur-md hover:bg-white/80 dark:hover:bg-slate-800/60 transition-all hover:-translate-y-2 hover:shadow-[0_20px_40px_-15px_rgba(34,211,238,0.15)] relative overflow-hidden group">
                                    <span
                                        class="inline-block text-cyan-600 dark:text-cyan-400 font-bold text-xl mb-3 tracking-wider">1926</span>
                                    <h4 class="text-xl md:text-2xl font-extrabold text-slate-800 dark:text-slate-100 mb-3">
                                        <span class="lang-id">Menaklukkan Langit Kutub</span>
                                        <span class="lang-en">Conquering Polar Skies</span>
                                    </h4>
                                    <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base leading-relaxed">
                                        <span class="lang-id">Pesawat udara <i>Norge</i> menyelesaikan penerbangan
                                            pertama yang diakui melintasi Langit Kutub Utara secara langsung.</span>
                                        <span class="lang-en">The airship <i>Norge</i> executes the first undisputed
                                            flight passing directly over the North Pole skies.</span>
                                    </p>
                                </div>
                            </div>
                            <div class="hidden md:block w-1/2 pl-12"></div>
                        </div>

                        <!-- Item 7: 1958 -->
                        <div
                            class="timeline-item relative flex items-center justify-between md:justify-normal w-full mb-12 opacity-0 translate-y-8 transition-all duration-[800ms] ease-out">
                            <div
                                class="timeline-node absolute left-[16px] md:left-1/2 transform -translate-x-1/2 w-4 h-4 rounded-full bg-blue-500 shadow-[0_0_15px_rgba(59,130,246,0.6)] z-10 border-4 border-slate-100 dark:border-slate-900 transition-transform hover:scale-150 duration-300">
                            </div>
                            <div class="hidden md:block w-1/2 pr-12"></div>
                            <div class="timeline-content w-full pl-12 md:pl-12 md:w-1/2 z-10">
                                <div
                                    class="glass-card p-6 md:p-8 rounded-3xl border border-blue-500/20 bg-white/60 dark:bg-slate-800/40 backdrop-blur-md hover:bg-white/80 dark:hover:bg-slate-800/60 transition-all hover:-translate-y-2 hover:shadow-[0_20px_40px_-15px_rgba(59,130,246,0.15)] relative overflow-hidden group">
                                    <span
                                        class="inline-block text-blue-600 dark:text-blue-400 font-bold text-xl mb-3 tracking-wider">1958</span>
                                    <h4 class="text-xl md:text-2xl font-extrabold text-slate-800 dark:text-slate-100 mb-3">
                                        <span class="lang-id">Di Bawah Lapisan Es</span>
                                        <span class="lang-en">Beneath the Sea Ice</span>
                                    </h4>
                                    <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base leading-relaxed">
                                        <span class="lang-id">Kapal Selam USS <i>Nautilus</i> mencapai Kutub Utara
                                            Geografis dengan menjadi kapal pertama yang berlayar di bawah es.</span>
                                        <span class="lang-en">The Submarine USS <i>Nautilus</i> reaches the Geographic
                                            North Pole by navigating underwater beneath the ice sheet.</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- FAUNA DIRECTORY HEADER -->
                <div class="relative pt-8 pb-12">
                    <div class="text-center mb-12">
                        <div class="inline-block mb-4 p-3 rounded-full bg-blue-500/10 text-blue-500 relative">
                            <i class="fas fa-paw text-2xl relative z-10"></i>
                            <div class="absolute inset-0 bg-blue-400 blur-md opacity-20 rounded-full animate-pulse z-0"></div>
                        </div>
                        <h3
                            class="text-3xl md:text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-slate-700 to-slate-900 dark:from-slate-100 dark:to-slate-300 drop-shadow-sm mb-4">
                            <span class="lang-id">Ensiklopedia Fauna</span>
                            <span class="lang-en">Fauna Encyclopedia</span>
                        </h3>
                        <p class="text-slate-500 dark:text-slate-400 text-lg max-w-2xl mx-auto">
                            <span class="lang-id">Setelah memahami tantangan eksplorasinya, mari telusuri keajaiban makhluk ciptaan Tuhan yang mampu bertahan di alam yang paling tak kenal ampun ini.</span>
                            <span class="lang-en">After understanding the exploratory challenges, let's trace the wonders of creatures capable of surviving in this most unforgiving wilderness.</span>
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.remove('opacity-0', 'translate-y-8');
                        entry.target.classList.add('opacity-100', 'translate-y-0');
                    }
                });
            }, {
                threshold: 0.2,
                rootMargin: "0px 0px -50px 0px"
            });

            document.querySelectorAll('.timeline-item').forEach((item) => {
                observer.observe(item);
            });
        });
    </script>
</x-public-layout>
