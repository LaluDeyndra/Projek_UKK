<x-guest-layout>
    <x-slot:title>Monitoring - Arctic Vision</x-slot:title>

    <x-slot:styles>
        <style>
            .av-status-dot {
                width: 10px;
                height: 10px;
                border-radius: 9999px;
                box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.0);
            }

            .av-status-dot--ok {
                background: #22c55e;
                animation: avPulseGreen 1.8s ease-in-out infinite;
            }

            .av-status-dot--warn {
                background: #f59e0b;
                animation: avPulseAmber 2.2s ease-in-out infinite;
            }

            .av-status-dot--bad {
                background: #ef4444;
                animation: avPulseRed 2.0s ease-in-out infinite;
            }

            @keyframes avPulseGreen {
                0% {
                    box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.35);
                }

                70% {
                    box-shadow: 0 0 0 10px rgba(34, 197, 94, 0);
                }

                100% {
                    box-shadow: 0 0 0 0 rgba(34, 197, 94, 0);
                }
            }

            @keyframes avPulseAmber {
                0% {
                    box-shadow: 0 0 0 0 rgba(245, 158, 11, 0.30);
                }

                70% {
                    box-shadow: 0 0 0 10px rgba(245, 158, 11, 0);
                }

                100% {
                    box-shadow: 0 0 0 0 rgba(245, 158, 11, 0);
                }
            }

            @keyframes avPulseRed {
                0% {
                    box-shadow: 0 0 0 0 rgba(239, 68, 68, 0.30);
                }

                70% {
                    box-shadow: 0 0 0 10px rgba(239, 68, 68, 0);
                }

                100% {
                    box-shadow: 0 0 0 0 rgba(239, 68, 68, 0);
                }
            }

            canvas.av-chart {
                width: 100%;
                height: 280px;
                display: block;
            }

            .av-card {
                background: var(--av-surface);
                border: 1px solid var(--av-border);
                border-radius: 1.25rem;
            }

            .av-muted {
                color: var(--av-muted);
            }
        </style>
    </x-slot:styles>

    <div class="min-h-[calc(100vh-200px)]" style="background: var(--av-surface-2);">
        <!-- Hero -->
        <section class="pt-24">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="relative overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-md">
                    <div class="relative p-8 sm:p-10">
                        <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
                            <div class="max-w-2xl">
                                <div
                                    class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-slate-50 px-3 py-1 text-xs text-slate-700">
                                    <i class="fa-solid fa-snowflake text-blue-600"></i>
                                    Monitoring Realtime • Arctic Vision
                                </div>
                                <h1 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 sm:text-4xl">
                                    Pantau suhu & kelembaban secara realtime
                                </h1>
                                <p class="mt-3 text-sm leading-relaxed text-slate-600 sm:text-base">
                                    Angka dan grafik akan langsung terisi otomatis tanpa perlu reload.
                                </p>
                            </div>

                            <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
                                <div class="rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3">
                                    <div class="text-xs text-slate-600">Terakhir update</div>
                                    <div class="mt-1 text-sm font-semibold text-slate-900" id="last-updated">--</div>
                                </div>
                                <button id="btn-refresh"
                                    class="inline-flex items-center justify-center gap-2 rounded-2xl bg-blue-600 px-4 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-500 active:scale-[0.99]">
                                    <i class="fa-solid fa-rotate"></i>
                                    Refresh
                                </button>
                            </div>
                        </div>

                        <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                            <!-- Temperature card -->
                            <div class="av-card p-6 transition hover:shadow-md">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <div class="text-xs font-semibold uppercase tracking-wider text-slate-500">Suhu
                                            Udara</div>
                                        <div class="mt-2 flex items-end gap-2">
                                            <div class="text-4xl font-semibold text-slate-900 tabular-nums"
                                                id="temperature-value">--</div>
                                            <div class="pb-1 text-sm text-slate-600">°C</div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-600 text-white shadow-sm">
                                        <i class="fa-solid fa-temperature-three-quarters"></i>
                                    </div>
                                </div>
                                <div class="mt-4 flex items-center gap-2 text-sm text-slate-600">
                                    <span id="dot-sensor" class="av-status-dot av-status-dot--warn"></span>
                                    <span id="sensor-status-text">Menunggu data…</span>
                                </div>
                            </div>

                            <!-- Humidity card -->
                            <div class="av-card p-6 transition hover:shadow-md">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <div class="text-xs font-semibold uppercase tracking-wider text-slate-500">
                                            Kelembaban</div>
                                        <div class="mt-2 flex items-end gap-2">
                                            <div class="text-4xl font-semibold text-slate-900 tabular-nums"
                                                id="humidity-value">--</div>
                                            <div class="pb-1 text-sm text-slate-600">%</div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex h-12 w-12 items-center justify-center rounded-2xl bg-cyan-600 text-white shadow-sm">
                                        <i class="fa-solid fa-droplet"></i>
                                    </div>
                                </div>
                                <div class="mt-4 text-sm text-slate-600" id="humidity-hint">Tip: ideal indoor 40–60%
                                    (sekadar referensi).</div>
                            </div>

                            <!-- System card -->
                            <div class="av-card p-6 transition hover:shadow-md">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <div class="text-xs font-semibold uppercase tracking-wider text-slate-500">
                                            Koneksi Perangkat</div>
                                        <div class="mt-2 flex items-end gap-2">
                                            <div class="text-4xl font-semibold text-slate-900 tabular-nums"
                                                id="system-health">--</div>
                                            <div class="pb-1 text-sm text-slate-600">%</div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex h-12 w-12 items-center justify-center rounded-2xl bg-rose-600 text-white shadow-sm">
                                        <i class="fa-solid fa-heart-pulse"></i>
                                    </div>
                                </div>
                                <div class="mt-4 flex items-center justify-between text-sm text-slate-600">
                                    <span>Status</span>
                                    <span class="font-semibold text-slate-900" id="system-text">--</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Content -->
        <section class="py-10">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid gap-6 lg:grid-cols-3">
                    <!-- Chart -->
                    <div class="lg:col-span-2">
                        <div class="av-card p-6">
                            <div class="flex flex-col gap-2 sm:flex-row sm:items-end sm:justify-between">
                                <div>
                                    <div class="text-sm font-semibold text-slate-900">Grafik 24 data terakhir</div>
                                    <div class="text-xs text-slate-500">Garis biru: suhu • garis cyan: kelembaban</div>
                                </div>
                            </div>
                            <div class="mt-4 rounded-2xl border border-slate-200 bg-slate-50 p-3">
                                <canvas id="historyChart" class="av-chart"></canvas>
                            </div>
                            <div class="mt-4 grid gap-3 sm:grid-cols-4">
                                <div class="rounded-2xl border border-slate-200 bg-white p-4">
                                    <div class="text-xs text-slate-500">Suhu max</div>
                                    <div class="mt-1 text-lg font-semibold text-slate-900 tabular-nums" id="temp-max">
                                        --</div>
                                </div>
                                <div class="rounded-2xl border border-slate-200 bg-white p-4">
                                    <div class="text-xs text-slate-500">Suhu min</div>
                                    <div class="mt-1 text-lg font-semibold text-slate-900 tabular-nums" id="temp-min">
                                        --</div>
                                </div>
                                <div class="rounded-2xl border border-slate-200 bg-white p-4">
                                    <div class="text-xs text-slate-500">Avg humidity</div>
                                    <div class="mt-1 text-lg font-semibold text-slate-900 tabular-nums"
                                        id="humidity-avg">--</div>
                                </div>
                                <div class="rounded-2xl border border-slate-200 bg-white p-4">
                                    <div class="text-xs text-slate-500">Uptime (perkiraan)</div>
                                    <div class="mt-1 text-lg font-semibold text-slate-900 tabular-nums"
                                        id="system-uptime">--</div>
                                </div>
                            </div>

                            <div class="mt-4 hidden rounded-2xl border border-amber-300 bg-amber-50 px-4 py-3 text-sm text-amber-900"
                                id="banner-empty">
                                Belum ada data history. Nyalakan alat, lalu tunggu beberapa kali pengiriman data.
                            </div>
                            <div class="mt-4 hidden rounded-2xl border border-rose-300 bg-rose-50 px-4 py-3 text-sm text-rose-900"
                                id="banner-error">
                                Gagal mengambil data dari API. Pastikan server Laravel nyala dan URL sesuai.
                            </div>
                        </div>
                    </div>

                    <!-- Table -->
                    <div class="lg:col-span-1">
                        <div class="av-card p-6">
                            <div class="flex items-center justify-between">
                                <div class="text-sm font-semibold text-slate-900">History terbaru</div>
                                <div class="text-xs text-slate-500" id="history-count">0 data</div>
                            </div>
                            <div class="mt-4 overflow-hidden rounded-2xl border border-slate-200">
                                <table class="w-full text-left text-sm">
                                    <thead class="bg-slate-50 text-xs uppercase tracking-wider text-slate-600">
                                        <tr>
                                            <th class="px-4 py-3">Waktu</th>
                                            <th class="px-4 py-3">Suhu</th>
                                            <th class="px-4 py-3">Hum</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-slate-200 bg-white" id="history-rows">
                                        <tr>
                                            <td class="px-4 py-3 text-slate-500" colspan="3">Menunggu data…</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="mt-4 text-xs text-slate-500">
                                Catatan: tampilan ini akan makin terisi setelah perangkat mulai kirim data berkala.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        const el = (id) => document.getElementById(id);

        const state = {
            latest: null,
            history: [],
            lastOkAt: null,
        };

        function clamp(n, min, max) {
            return Math.min(max, Math.max(min, n));
        }

        function formatTime(ts) {
            if (!ts) return '--';
            const d = new Date(ts);
            if (Number.isNaN(d.getTime())) return '--';
            return d.toLocaleString(undefined, {
                year: 'numeric',
                month: 'short',
                day: '2-digit',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
            });
        }

        function setDotStatus(dotEl, level) {
            dotEl.classList.remove('av-status-dot--ok', 'av-status-dot--warn', 'av-status-dot--bad');
            if (level === 'ok') dotEl.classList.add('av-status-dot--ok');
            else if (level === 'bad') dotEl.classList.add('av-status-dot--bad');
            else dotEl.classList.add('av-status-dot--warn');
        }

        function computeHealth(secondsSinceUpdate) {
            if (secondsSinceUpdate <= 15) return {
                pct: 100,
                label: 'Baik',
                level: 'ok'
            };
            if (secondsSinceUpdate <= 60) return {
                pct: 75,
                label: 'Stabil',
                level: 'ok'
            };
            if (secondsSinceUpdate <= 180) return {
                pct: 45,
                label: 'Terlambat',
                level: 'warn'
            };
            return {
                pct: 10,
                label: 'Offline',
                level: 'bad'
            };
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
                el('system-text').textContent = '--';
                lastUpdatedEl.textContent = '--';
                setDotStatus(dot, 'warn');
                statusText.textContent = 'Menunggu data…';
                return;
            }

            const now = Date.now();
            const updatedAt = new Date(latest.timestamp).getTime();
            const seconds = Number.isNaN(updatedAt) ? 9999 : (now - updatedAt) / 1000;
            const health = computeHealth(seconds);

            el('temperature-value').textContent = Number(latest.temperature).toFixed(1);
            el('humidity-value').textContent = Number(latest.humidity).toFixed(0);
            el('system-health').textContent = String(health.pct);
            el('system-text').textContent = health.label;
            lastUpdatedEl.textContent = formatTime(latest.timestamp);

            setDotStatus(dot, health.level);
            statusText.textContent = seconds <= 60 ? 'Online • realtime' : `Update terakhir ${Math.round(seconds)}s lalu`;
        }

        function renderStats() {
            const data = state.history;
            if (!data.length) {
                el('temp-max').textContent = '--';
                el('temp-min').textContent = '--';
                el('humidity-avg').textContent = '--';
                el('system-uptime').textContent = '--';
                return;
            }

            let tMax = -Infinity;
            let tMin = Infinity;
            let hSum = 0;
            let hCount = 0;

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
            el('system-uptime').textContent = `${clamp((data.length / 100) * 100, 0, 100).toFixed(0)}%`;
        }

        function renderHistoryTable() {
            const tbody = el('history-rows');
            const rows = state.history.slice(-10).reverse();
            el('history-count').textContent = `${state.history.length} data`;

            if (!rows.length) {
                tbody.innerHTML = `
                    <tr>
                        <td class="px-4 py-3 text-slate-500" colspan="3">Belum ada data.</td>
                    </tr>
                `;
                return;
            }

            tbody.innerHTML = rows.map((r) => {
                const t = Number(r.temperature);
                const h = Number(r.humidity);
                return `
                    <tr class="text-slate-900">
                        <td class="px-4 py-3 text-slate-500">${formatTime(r.timestamp)}</td>
                        <td class="px-4 py-3 font-semibold tabular-nums">${Number.isNaN(t) ? '--' : t.toFixed(1)}°C</td>
                        <td class="px-4 py-3 font-semibold tabular-nums">${Number.isNaN(h) ? '--' : h.toFixed(0)}%</td>
                    </tr>
                `;
            }).join('');
        }

        function drawChart() {
            const canvas = el('historyChart');
            if (!canvas) return;
            const ctx = canvas.getContext('2d');
            if (!ctx) return;

            const parent = canvas.parentElement;
            const w = parent ? parent.clientWidth : 800;
            const h = 280;
            canvas.width = Math.max(320, w);
            canvas.height = h;

            const data = state.history.slice(-24);
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            const isDark = document.documentElement.classList.contains('theme-dark');

            // Background grid
            ctx.globalAlpha = 1;
            ctx.fillStyle = isDark ? 'rgba(2, 6, 23, 0.35)' : 'rgba(248, 250, 252, 1)';
            ctx.fillRect(0, 0, canvas.width, canvas.height);

            ctx.strokeStyle = isDark ? 'rgba(255,255,255,0.06)' : 'rgba(15, 23, 42, 0.08)';
            ctx.lineWidth = 1;
            for (let i = 1; i <= 4; i++) {
                const y = (canvas.height / 5) * i;
                ctx.beginPath();
                ctx.moveTo(0, y);
                ctx.lineTo(canvas.width, y);
                ctx.stroke();
            }

            if (!data.length) return;

            const temps = data.map(d => Number(d.temperature)).filter(n => !Number.isNaN(n));
            const hums = data.map(d => Number(d.humidity)).filter(n => !Number.isNaN(n));
            const tMin = temps.length ? Math.min(...temps) : 0;
            const tMax = temps.length ? Math.max(...temps) : 1;
            const hMin = hums.length ? Math.min(...hums) : 0;
            const hMax = hums.length ? Math.max(...hums) : 1;

            const pad = 18;
            const xFor = (i) => pad + (i * (canvas.width - pad * 2)) / Math.max(1, data.length - 1);
            const yFor = (val, min, max) => {
                const denom = (max - min) || 1;
                const t = (val - min) / denom;
                return (canvas.height - pad) - t * (canvas.height - pad * 2);
            };

            // Temp line
            ctx.lineWidth = 2.5;
            ctx.strokeStyle = '#60a5fa'; // blue-400
            ctx.beginPath();
            data.forEach((d, i) => {
                const v = Number(d.temperature);
                if (Number.isNaN(v)) return;
                const x = xFor(i);
                const y = yFor(v, tMin, tMax);
                if (i === 0) ctx.moveTo(x, y);
                else ctx.lineTo(x, y);
            });
            ctx.stroke();

            // Humidity line
            ctx.lineWidth = 2.5;
            ctx.strokeStyle = '#22d3ee'; // cyan-400
            ctx.beginPath();
            data.forEach((d, i) => {
                const v = Number(d.humidity);
                if (Number.isNaN(v)) return;
                const x = xFor(i);
                const y = yFor(v, hMin, hMax);
                if (i === 0) ctx.moveTo(x, y);
                else ctx.lineTo(x, y);
            });
            ctx.stroke();
        }

        async function safeJson(res) {
            const text = await res.text();
            try {
                return JSON.parse(text);
            } catch {
                return {
                    status: 'error',
                    message: 'Invalid JSON response',
                    raw: text
                };
            }
        }

        async function fetchLatest() {
            const res = await fetch('/api/sensor/latest', {
                headers: {
                    'Accept': 'application/json'
                }
            });
            const json = await safeJson(res);
            if (!res.ok || json.status !== 'success') return null;
            return json.data ?? null;
        }

        async function fetchHistory() {
            const res = await fetch('/api/sensor/history?limit=100', {
                headers: {
                    'Accept': 'application/json'
                }
            });
            const json = await safeJson(res);
            if (!res.ok || json.status !== 'success') return [];
            return Array.isArray(json.data) ? json.data : [];
        }

        function setErrorBanner(show) {
            el('banner-error').classList.toggle('hidden', !show);
        }

        function setEmptyBanner(show) {
            el('banner-empty').classList.toggle('hidden', !show);
        }

        async function refreshAll() {
            try {
                setErrorBanner(false);
                const [latest, history] = await Promise.all([fetchLatest(), fetchHistory()]);
                state.latest = latest;
                state.history = history;
                state.lastOkAt = Date.now();

                setEmptyBanner(!history.length);
                renderLatest();
                renderStats();
                renderHistoryTable();
                drawChart();
            } catch (e) {
                console.error(e);
                setErrorBanner(true);
                renderLatest();
            }
        }

        const btn = el('btn-refresh');
        btn?.addEventListener('click', () => refreshAll());
        window.addEventListener('resize', () => drawChart());

        refreshAll();
        setInterval(refreshAll, 5000);
    </script>
</x-guest-layout>
