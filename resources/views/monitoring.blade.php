<x-public-layout>
    <x-slot:title>Pusat Pantau Arktik - Arctic Vision</x-slot:title>

    <x-slot:styles>
        <style>
            /* Blob Animations */
            @keyframes blob {
                0% { transform: translate(0px, 0px) scale(1); }
                33% { transform: translate(30px, -50px) scale(1.1); }
                66% { transform: translate(-20px, 20px) scale(0.9); }
                100% { transform: translate(0px, 0px) scale(1); }
            }
            .animate-blob {
                animation: blob 10s infinite;
            }
            .animation-delay-2000 {
                animation-delay: 2s;
            }
            .animation-delay-4000 {
                animation-delay: 4s;
            }

            .av-blob {
                mix-blend-mode: multiply;
                filter: blur(120px);
                opacity: 0.15;
            }
            .theme-dark .av-blob {
                mix-blend-mode: screen;
                opacity: 0.2;
            }

            /* Glassmorphism Cards */
            .glass-card {
                background: rgba(255, 255, 255, 0.65);
                backdrop-filter: blur(20px);
                -webkit-backdrop-filter: blur(20px);
                border: 1px solid rgba(255, 255, 255, 0.8);
                box-shadow: 0 10px 40px -10px rgba(31, 38, 135, 0.08);
                border-radius: 1.5rem;
                transition: transform 0.3s ease, border-color 0.3s ease, background 0.3s ease;
            }
            .theme-dark .glass-card {
                background: rgba(15, 23, 42, 0.5);
                border: 1px solid rgba(255, 255, 255, 0.08);
                box-shadow: 0 10px 40px -10px rgba(0, 0, 0, 0.3);
            }
            .glass-card:hover {
                transform: translateY(-5px);
                border-color: rgba(255, 255, 255, 1);
                background: rgba(255, 255, 255, 0.85);
            }
            .theme-dark .glass-card:hover {
                border-color: rgba(56, 189, 248, 0.3);
                background: rgba(15, 23, 42, 0.7);
            }

            /* Status Dots */
            .status-dot {
                width: 10px;
                height: 10px;
                border-radius: 50%;
                display: inline-block;
            }
            .status-dot.ok { background: #22c55e; box-shadow: 0 0 10px #22c55e, 0 0 20px #22c55e; }
            .status-dot.warn { background: #facc15; box-shadow: 0 0 10px #facc15, 0 0 20px #facc15; }
            .status-dot.bad { background: #ef4444; box-shadow: 0 0 10px #ef4444, 0 0 20px #ef4444; }

            /* Trend Badges */
            .trend-badge {
                padding: 0.25rem 0.75rem;
                border-radius: 9999px;
                font-size: 0.75rem;
                font-weight: 700;
                display: inline-flex;
                align-items: center;
                gap: 0.25rem;
            }
            .trend-up { background: rgba(239, 68, 68, 0.15); color: #ef4444; }
            .trend-down { background: rgba(56, 189, 248, 0.15); color: #38bdf8; }
            .trend-stable { background: rgba(34, 197, 94, 0.15); color: #22c55e; }

            canvas.av-chart {
                width: 100%;
                height: 320px;
                display: block;
            }

            /* Customizing table in glassmorphism */
            .glass-table th {
                background: rgba(255, 255, 255, 0.6);
                border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            }
            .glass-table td {
                border-bottom: 1px solid rgba(0, 0, 0, 0.03);
            }
            .glass-table tr:hover td {
                background: rgba(255, 255, 255, 0.8);
            }
            .theme-dark .glass-table th { background: rgba(0, 0, 0, 0.3); border-color: rgba(255,255,255,0.08); }
            .theme-dark .glass-table td { border-color: rgba(255,255,255,0.05); }
            .theme-dark .glass-table tr:hover td { background: rgba(255, 255, 255, 0.04); }
        </style>
    </x-slot:styles>

    <div class="pt-24 pb-12 min-h-screen relative overflow-hidden transition-colors duration-500" style="background: var(--av-bg);">
        
        <!-- Animated Background Gradients (Optimized for both themes) -->
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-500 rounded-full animate-blob av-blob pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-cyan-400 rounded-full animate-blob animation-delay-2000 av-blob pointer-events-none"></div>
        <div class="absolute top-1/2 left-1/4 w-[400px] h-[400px] bg-indigo-400 rounded-full animate-blob animation-delay-4000 av-blob pointer-events-none"></div>

        <section class="relative z-10">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                
                <!-- Hero Section Premium -->
                <div class="text-center mb-16 pt-8">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-500/10 border border-blue-500/20 text-blue-700 dark:text-blue-400 text-xs sm:text-sm font-semibold tracking-wide uppercase mb-6 shadow-sm">
                        <i class="fas fa-tower-broadcast text-blue-600 dark:text-blue-400 animate-pulse"></i>
                        <span class="lang-id">Pengamatan Atmosfer Real-Time</span>
                        <span class="lang-en">Real-Time Atmospheric Observation</span>
                    </div>
                    
                    <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold tracking-tight mb-4 text-transparent bg-clip-text bg-gradient-to-r from-slate-800 to-slate-500 dark:from-white dark:to-slate-400 drop-shadow-sm pb-2 leading-tight">
                        <span class="lang-id">Pusat Pantau Ekologi</span>
                        <span class="lang-en">Ecology Monitor Center</span>
                    </h1>
                    
                    <p class="text-base sm:text-lg text-slate-600 dark:text-slate-400 max-w-2xl mx-auto leading-relaxed">
                        <span class="lang-id">Data dikalibrasi dan divalidasi langsung dari sensor lingkungan kami untuk memastikan Anda mendapatkan informasi iklim mikro terkini dengan filter tren prediktif matematis.</span>
                        <span class="lang-en">Data is calibrated and directly validated from our environmental sensors to ensure you receive the latest micro-climate information with mathematical predictive trend filters.</span>
                    </p>
                    
                    <div class="mt-8 flex items-center justify-center gap-4 text-sm font-medium text-slate-500 dark:text-slate-400">
                        <div class="flex items-center gap-2 bg-white/50 dark:bg-slate-900/50 px-4 py-2 rounded-full border border-slate-200 dark:border-slate-800">
                            <span class="status-dot ok" id="dot-sensor"></span>
                            <span id="sensor-status-text">
                                <span class="lang-id">Sedang sinkronisasi...</span>
                                <span class="lang-en">Synchronizing...</span>
                            </span>
                        </div>
                        <button id="btn-refresh" class="inline-flex items-center justify-center w-9 h-9 rounded-full bg-white/50 dark:bg-slate-900/50 hover:bg-blue-50 dark:hover:bg-blue-900/30 border border-slate-200 dark:border-slate-800 text-slate-600 dark:text-slate-300 transition-all hover:rotate-180" title="Refresh Manual">
                            <i class="fas fa-sync-alt"></i>
                        </button>
                    </div>
                </div>

                <!-- Bento Grid Metrics -->
                <div class="grid gap-6 md:grid-cols-3 mb-12">
                    
                    <!-- Temp Card -->
                    <div class="glass-card p-6 flex flex-col justify-between">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-orange-400 to-red-500 text-white flex items-center justify-center text-xl shadow-lg shadow-red-500/20">
                                <i class="fas fa-thermometer-half"></i>
                            </div>
                            <div class="trend-badge trend-stable" id="temp-trend">
                                <i class="fas fa-minus"></i> Stabil
                            </div>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">
                                <span class="lang-id">Suhu Atmosfer</span>
                                <span class="lang-en">Atmospheric Temp</span>
                            </h3>
                            <div class="flex items-baseline mt-2 gap-2">
                                <span class="text-5xl font-black text-slate-800 dark:text-white tabular-nums tracking-tighter" id="temperature-value">--</span>
                                <span class="text-xl font-bold text-slate-500 dark:text-slate-400">°C</span>
                            </div>
                            <p class="text-xs text-slate-500 dark:text-slate-400 mt-3" id="temp-insight">
                                Mengumpulkan data observasi...
                            </p>
                        </div>
                    </div>

                    <!-- Humidity Card -->
                    <div class="glass-card p-6 flex flex-col justify-between">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-cyan-400 to-blue-600 text-white flex items-center justify-center text-xl shadow-lg shadow-blue-500/20">
                                <i class="fas fa-wind"></i>
                            </div>
                            <div class="trend-badge trend-stable" id="hum-trend">
                                <i class="fas fa-minus"></i> Stabil
                            </div>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">
                                <span class="lang-id">Densitas Kelembaban</span>
                                <span class="lang-en">Humidity Density</span>
                            </h3>
                            <div class="flex items-baseline mt-2 gap-2">
                                <span class="text-5xl font-black text-slate-800 dark:text-white tabular-nums tracking-tighter" id="humidity-value">--</span>
                                <span class="text-xl font-bold text-slate-500 dark:text-slate-400">%</span>
                            </div>
                            <p class="text-xs text-slate-500 dark:text-slate-400 mt-3" id="hum-insight">
                                Mengumpulkan data observasi...
                            </p>
                        </div>
                    </div>

                    <!-- System Info Card -->
                    <div class="glass-card p-6 flex flex-col justify-between">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-indigo-400 to-purple-600 text-white flex items-center justify-center text-xl shadow-lg shadow-purple-500/20">
                                <i class="fas fa-satellite-dish"></i>
                            </div>
                            <div class="text-xs font-semibold text-slate-500 dark:text-slate-400 bg-black/5 dark:bg-white/10 px-3 py-1 rounded-full border border-slate-200 dark:border-slate-700">
                                <i class="fas fa-clock mr-1"></i> <span id="last-updated">--:--</span>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">
                                <span class="lang-id">Integritas Transmisi</span>
                                <span class="lang-en">Transmission Integrity</span>
                            </h3>
                            <div class="flex items-baseline mt-2 gap-2">
                                <span class="text-5xl font-black text-slate-800 dark:text-white tabular-nums tracking-tighter" id="system-health">--</span>
                                <span class="text-xl font-bold text-slate-500 dark:text-slate-400">%</span>
                            </div>
                            <p class="text-xs font-medium text-slate-600 dark:text-slate-300 mt-3" id="system-text">
                                Menunggu status uplink...
                            </p>
                        </div>
                    </div>

                </div>

                <!-- Bottom Section: Chart & Table -->
                <div class="grid gap-6 lg:grid-cols-3">
                    
                    <!-- Advanced Analytics Chart -->
                    <div class="lg:col-span-2">
                        <div class="glass-card p-6 h-full">
                            <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-6">
                                <div>
                                    <h2 class="text-xl font-bold text-slate-800 dark:text-white">
                                        <span class="lang-id">Proyeksi Tren Matematis (30 Menit)</span>
                                        <span class="lang-en">Mathematical Trend Projection (30 Mins)</span>
                                    </h2>
                                    <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">
                                        <span class="lang-id">Grafik merangkum data interval historis untuk memberikan visual tren iklim secara halus.</span>
                                        <span class="lang-en">Chart summarizes historical interval data to provide smooth climatic trend visuals.</span>
                                    </p>
                                </div>
                                <div class="mt-4 sm:mt-0 flex gap-3 text-xs font-bold uppercase tracking-wider">
                                    <span class="flex items-center gap-1 text-red-500 dark:text-red-400"><span class="w-3 h-3 rounded-full bg-red-500 dark:bg-red-400 block"></span> Suhu</span>
                                    <span class="flex items-center gap-1 text-cyan-500 dark:text-cyan-400"><span class="w-3 h-3 rounded-full bg-cyan-500 dark:bg-cyan-400 block"></span> Lembab</span>
                                </div>
                            </div>
                            
                            <div class="relative w-full rounded-2xl overflow-hidden bg-white/30 dark:bg-black/20 border border-slate-200/50 dark:border-slate-800/50 p-2">
                                <canvas id="historyChart" class="av-chart" style="max-width: 100%;"></canvas>
                            </div>

                            <!-- Small Stats Row -->
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-6">
                                <div class="bg-white/40 dark:bg-slate-900/40 p-4 rounded-xl border border-white/50 dark:border-slate-800 text-center">
                                    <div class="text-[10px] font-bold uppercase tracking-wider text-slate-500">
                                        <span class="lang-id">Suhu Puncak</span>
                                        <span class="lang-en">Peak Temp</span>
                                    </div>
                                    <div class="text-lg font-black text-slate-800 dark:text-slate-200 mt-1" id="temp-max">--</div>
                                </div>
                                <div class="bg-white/40 dark:bg-slate-900/40 p-4 rounded-xl border border-white/50 dark:border-slate-800 text-center">
                                    <div class="text-[10px] font-bold uppercase tracking-wider text-slate-500">
                                        <span class="lang-id">Suhu Rendah</span>
                                        <span class="lang-en">Low Temp</span>
                                    </div>
                                    <div class="text-lg font-black text-slate-800 dark:text-slate-200 mt-1" id="temp-min">--</div>
                                </div>
                                <div class="bg-white/40 dark:bg-slate-900/40 p-4 rounded-xl border border-white/50 dark:border-slate-800 text-center">
                                    <div class="text-[10px] font-bold uppercase tracking-wider text-slate-500">
                                        <span class="lang-id">Rata² Kelembaban</span>
                                        <span class="lang-en">Avg Humidity</span>
                                    </div>
                                    <div class="text-lg font-black text-slate-800 dark:text-slate-200 mt-1" id="humidity-avg">--</div>
                                </div>
                                <div class="bg-white/40 dark:bg-slate-900/40 p-4 rounded-xl border border-white/50 dark:border-slate-800 text-center">
                                    <div class="text-[10px] font-bold uppercase tracking-wider text-slate-500">
                                        <span class="lang-id">Status Uptime</span>
                                        <span class="lang-en">Est Uptime</span>
                                    </div>
                                    <div class="text-lg font-black text-slate-800 dark:text-slate-200 mt-1" id="system-uptime">--</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- History Log -->
                    <div class="lg:col-span-1 min-w-0 w-full">
                        <div class="glass-card p-4 sm:p-6 h-full flex flex-col w-full overflow-hidden">
                            <div class="flex items-center justify-between mb-6">
                                <h2 class="text-lg font-bold text-slate-800 dark:text-white">
                                    <span class="lang-id">Log Transmisi</span>
                                    <span class="lang-en">Transmission Log</span>
                                </h2>
                                <span class="text-xs bg-slate-200 dark:bg-slate-800 text-slate-600 dark:text-slate-400 px-2 py-1 rounded-md font-mono" id="history-count">0</span>
                            </div>
                            
                            <div class="flex-grow w-full overflow-x-auto overflow-y-auto pr-2 custom-scrollbar">
                                <table class="w-full text-left text-sm glass-table whitespace-nowrap">
                                    <thead class="text-xs uppercase tracking-wider text-slate-500 sticky top-0 backdrop-blur-md z-10">
                                        <tr>
                                            <th class="px-4 py-3 font-semibold rounded-tl-lg">Waktu</th>
                                            <th class="px-4 py-3 font-semibold text-right">Suhu</th>
                                            <th class="px-4 py-3 font-semibold text-right rounded-tr-lg">Hum</th>
                                        </tr>
                                    </thead>
                                    <tbody id="history-rows" class="text-slate-700 dark:text-slate-300 bg-white/20 dark:bg-slate-900/20">
                                        <tr>
                                            <td class="px-4 py-4 text-center text-slate-500 italic" colspan="3">Meninjau arsip data...</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="mt-4 text-[10px] text-slate-500 text-center uppercase tracking-widest border-t border-slate-200/50 dark:border-slate-800 pt-4">
                                <span class="lang-id">Interval Penyegaran Otomatis: 30 Menit</span>
                                <span class="lang-en">Auto-Refresh Interval: 30 Mins</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <!-- Chart.js includes -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const el = (id) => document.getElementById(id);
        const state = { latest: null, history: [], lastOkAt: null };

        let chartInstance = null;

        function formatTime(ts) {
            if (!ts) return '--:--';
            const d = new Date(ts);
            if (Number.isNaN(d.getTime())) return '--:--';
            return d.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
        }
        
        function formatFullTime(ts) {
            if (!ts) return '--';
            const d = new Date(ts);
            return d.toLocaleString([], { month: 'short', day: '2-digit', hour: '2-digit', minute: '2-digit' });
        }

        // --- TREND ANALYSIS (MATHEMATICAL) ---
        function calculateTrend(type, current, dataArray) {
            if(dataArray.length < 3) return { dir: 'stable', text: 'Stabil', icon: 'fa-minus' };
            
            // Mengambil 5 data terakhir untuk moving average pendek
            let recentData = dataArray.slice(-5);
            let sum = 0;
            recentData.forEach(r => sum += Number(r[type]));
            let avg = sum / recentData.length;
            
            let diff = current - avg;
            
            if (diff > 0.5) {
                return { dir: 'up', text: 'Naik', icon: 'fa-arrow-trend-up' };
            } else if (diff < -0.5) {
                return { dir: 'down', text: 'Turun', icon: 'fa-arrow-trend-down' };
            } else {
                return { dir: 'stable', text: 'Stabil', icon: 'fa-minus' };
            }
        }

        function updateTrendUI(elementId, trendData) {
            const badge = el(elementId);
            if(!badge) return;
            badge.className = `trend-badge trend-${trendData.dir}`;
            badge.innerHTML = `<i class="fas ${trendData.icon}"></i> ${trendData.text}`;
        }

        function getInsightText(type, val, trendData) {
            if (type === 'temp') {
                if (val > 30) return '<span class="text-red-500 font-medium">Suhu Panas: Sistem Awas Terpicu</span>';
                if (val < 15) return '<span class="text-blue-500 font-medium">Suhu Dingin Ekstrem: Optimal</span>';
                if (trendData.dir === 'up') return 'Indikasi pemanasan bertahap terpantau.';
                if (trendData.dir === 'down') return 'Pendinginan atmosfer sedang berlangsung.';
                return 'Kondisi iklim makro stabil dan ideal.';
            } else {
                if (val > 70) return 'Udara sangat lembab, potensi presipitasi tinggi.';
                if (val < 30) return 'Udara kering, kelembaban di bawah rata-rata.';
                return 'Kerapatan uap air dalam batas normal.';
            }
        }

        function computeHealth(secondsSinceUpdate) {
            // Heartbeat system: Sensor should send every few mins, but we accept 30m gracefully.
            if (secondsSinceUpdate <= 300) return { pct: 100, labelId: 'Koneksi Sempurna', level: 'ok' }; // 5 mins
            if (secondsSinceUpdate <= 1800) return { pct: 85, labelId: 'Sinkronisasi Jeda', level: 'ok' }; // 30 mins
            if (secondsSinceUpdate <= 3600) return { pct: 45, labelId: 'Transmisi Terhambat', level: 'warn' }; // 1 hr
            return { pct: 0, labelId: 'Sinyal Terputus', level: 'bad' };
        }

        function setDotStatus(dotEl, level) {
            dotEl.className = `status-dot ${level}`;
        }

        function renderLatest() {
            const latest = state.latest;
            const lastUpdatedEl = el('last-updated');
            const dot = el('dot-sensor');
            const statusText = el('sensor-status-text');

            if (!latest) {
                el('temperature-value').textContent = '--';
                el('humidity-value').textContent = '--';
                el('system-health').textContent = '--';
                el('system-text').textContent = 'Kehilangan kontak server.';
                setDotStatus(dot, 'bad');
                statusText.innerHTML = '<span class="lang-id">Kehilangan sinyal...</span><span class="lang-en">Signal lost...</span>';
                return;
            }

            const now = Date.now();
            const updatedAt = new Date(latest.timestamp).getTime();
            const seconds = Number.isNaN(updatedAt) ? 9999 : (now - updatedAt) / 1000;
            const health = computeHealth(seconds);

            let currentTemp = Number(latest.temperature);
            let currentHum = Number(latest.humidity);

            el('temperature-value').textContent = currentTemp.toFixed(1);
            el('humidity-value').textContent = currentHum.toFixed(0);
            el('system-health').textContent = String(health.pct);
            el('system-text').textContent = health.labelId;
            lastUpdatedEl.textContent = formatTime(latest.timestamp);

            setDotStatus(dot, health.level);
            
            // Relative time purely for guest UI
            let m = Math.floor(seconds / 60);
            let timeId, timeEn;
            if (m < 1) {
                timeId = 'Data Real-Time saat ini';
                timeEn = 'Current Real-Time Data';
            } else if (m < 60) {
                timeId = `Disinkronkan ${m} menit lalu`;
                timeEn = `Synced ${m} mins ago`;
            } else if (m < 1440) {
                let h = Math.floor(m / 60);
                timeId = `Disinkronkan ${h} jam lalu`;
                timeEn = `Synced ${h} hours ago`;
            } else {
                let d = Math.floor(m / 1440);
                timeId = `Disinkronkan ${d} hari lalu`;
                timeEn = `Synced ${d} days ago`;
            }
            statusText.innerHTML = `<span class="lang-id">${timeId}</span><span class="lang-en">${timeEn}</span>`;

            // Trend analysis
            let tempTrend = calculateTrend('temperature', currentTemp, state.history);
            let humTrend = calculateTrend('humidity', currentHum, state.history);
            
            updateTrendUI('temp-trend', tempTrend);
            updateTrendUI('hum-trend', humTrend);
            
            el('temp-insight').innerHTML = getInsightText('temp', currentTemp, tempTrend);
            el('hum-insight').innerHTML = getInsightText('hum', currentHum, humTrend);
        }

        function renderStats() {
            const data = state.history;
            if (!data.length) return;

            let tMax = -Infinity, tMin = Infinity, hSum = 0, hCount = 0;

            for (const row of data) {
                const t = Number(row.temperature);
                const h = Number(row.humidity);
                if (!Number.isNaN(t)) {
                    tMax = Math.max(tMax, t);
                    tMin = Math.min(tMin, t);
                }
                if (!Number.isNaN(h)) {
                    hSum += h;
                    hCount += 1;
                }
            }

            el('temp-max').textContent = Number.isFinite(tMax) ? `${tMax.toFixed(1)}°C` : '--';
            el('temp-min').textContent = Number.isFinite(tMin) ? `${tMin.toFixed(1)}°C` : '--';
            el('humidity-avg').textContent = hCount ? `${(hSum / hCount).toFixed(1)}%` : '--';
            el('system-uptime').textContent = `${Math.min((data.length / 50) * 100, 100).toFixed(0)}%`;
        }

        function renderHistoryTable() {
            const tbody = el('history-rows');
            const rows = state.history.slice(-20).reverse(); // show last 20 for log
            el('history-count').innerHTML = `<span class="lang-id">${state.history.length} data</span><span class="lang-en">${state.history.length} rec</span>`;

            if (!rows.length) {
                tbody.innerHTML = `<tr><td class="px-4 py-4 text-center text-slate-500 italic" colspan="3">Tidak ada data transmisi.</td></tr>`;
                return;
            }

            tbody.innerHTML = rows.map((r) => {
                const t = Number(r.temperature);
                const h = Number(r.humidity);
                return `
                    <tr class="transition-colors">
                        <td class="px-4 py-3 font-mono text-[11px] whitespace-nowrap opacity-70">${formatFullTime(r.timestamp)}</td>
                        <td class="px-4 py-3 font-bold tabular-nums text-right text-red-500/80 dark:text-red-400/80">${Number.isNaN(t) ? '--' : t.toFixed(1)}°C</td>
                        <td class="px-4 py-3 font-bold tabular-nums text-right text-cyan-600/80 dark:text-cyan-400/80">${Number.isNaN(h) ? '--' : h.toFixed(0)}%</td>
                    </tr>
                `;
            }).join('');
        }

        function drawChart() {
            const ctx = document.getElementById('historyChart').getContext('2d');
            const data = state.history.slice(-30); // 30 points

            const labels = data.map(d => formatTime(d.timestamp));
            const temps = data.map(d => Number(d.temperature));
            const hums = data.map(d => Number(d.humidity));

            const isDark = document.documentElement.classList.contains('theme-dark');
            const gridColor = isDark ? 'rgba(255, 255, 255, 0.05)' : 'rgba(0, 0, 0, 0.05)';
            const textColor = isDark ? '#94a3b8' : '#64748b';

            if (chartInstance) {
                chartInstance.destroy();
            }

            // Using Chart.js for beautiful smooth curves
            chartInstance = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [
                        {
                            label: 'Temperatur (°C)',
                            data: temps,
                            borderColor: '#ef4444',
                            backgroundColor: 'rgba(239, 68, 68, 0.1)',
                            borderWidth: 3,
                            tension: 0.4, // Smooth mathematical curve
                            fill: true,
                            pointRadius: 0,
                            pointHitRadius: 10,
                            yAxisID: 'y'
                        },
                        {
                            label: 'Kelembaban (%)',
                            data: hums,
                            borderColor: '#06b6d4',
                            backgroundColor: 'rgba(6, 182, 212, 0.1)',
                            borderWidth: 3,
                            tension: 0.4,
                            fill: true,
                            pointRadius: 0,
                            pointHitRadius: 10,
                            yAxisID: 'y1'
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    interaction: {
                        mode: 'index',
                        intersect: false,
                    },
                    plugins: {
                        legend: { display: false }, // Custom legend used in HTML
                        tooltip: {
                            backgroundColor: isDark ? 'rgba(15, 23, 42, 0.9)' : 'rgba(255, 255, 255, 0.9)',
                            titleColor: isDark ? '#fff' : '#000',
                            bodyColor: isDark ? '#cbd5e1' : '#475569',
                            borderColor: isDark ? 'rgba(255,255,255,0.1)' : 'rgba(0,0,0,0.1)',
                            borderWidth: 1,
                            padding: 12,
                            boxPadding: 4,
                            usePointStyle: true
                        }
                    },
                    scales: {
                        x: {
                            grid: { display: false },
                            ticks: { color: textColor, maxTicksLimit: 6 }
                        },
                        y: {
                            type: 'linear',
                            display: true,
                            position: 'left',
                            grid: { color: gridColor },
                            ticks: { color: textColor }
                        },
                        y1: {
                            type: 'linear',
                            display: true,
                            position: 'right',
                            grid: { drawOnChartArea: false },
                            ticks: { color: textColor }
                        }
                    }
                }
            });
        }

        async function fetchLatest() {
            const res = await fetch('/api/sensor/latest', { headers: { 'Accept': 'application/json' }});
            const json = await res.json();
            if (!res.ok || json.status !== 'success') return null;
            return json.data ?? null;
        }

        async function fetchHistory() {
            const res = await fetch('/api/sensor/history?limit=100', { headers: { 'Accept': 'application/json' }});
            const json = await res.json();
            if (!res.ok || json.status !== 'success') return [];
            return Array.isArray(json.data) ? json.data : [];
        }

        async function refreshAll() {
            const btn = el('btn-refresh');
            if(btn) btn.classList.add('animate-spin');
            
            try {
                const [latest, history] = await Promise.all([fetchLatest(), fetchHistory()]);
                state.latest = latest;
                state.history = history;
                state.lastOkAt = Date.now();

                renderLatest();
                renderStats();
                renderHistoryTable();
                drawChart();
            } catch (e) {
                console.error("API Error: ", e);
            } finally {
                if(btn) setTimeout(() => btn.classList.remove('animate-spin'), 500);
            }
        }

        el('btn-refresh')?.addEventListener('click', () => refreshAll());
        refreshAll();
        // Polling still standard but math allows us to evaluate "trend" over intervals
        setInterval(refreshAll, 60000); // 1 minute polling to feel "live", though sensor can be any interval

        // Re-draw chart on theme toggle so ticks/grids match the active theme dynamically
        const observer = new MutationObserver((mutations) => {
            mutations.forEach((mutation) => {
                if (mutation.attributeName === 'class') {
                    if (state.history.length > 0) drawChart();
                }
            });
        });
        observer.observe(document.documentElement, { attributes: true });
    </script>
</x-public-layout>
