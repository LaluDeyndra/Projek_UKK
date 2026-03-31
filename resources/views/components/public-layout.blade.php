<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Arctic Vision' }}</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon_io/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon_io/site.webmanifest') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        (function() {
            try {
                const savedTheme = localStorage.getItem('theme');
                const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
                let theme = 'light';
                if (savedTheme === 'dark') theme = 'dark';
                else if (savedTheme === 'light') theme = 'light';
                else theme = prefersDark ? 'dark' : 'light'; // handles 'system' or null
                document.documentElement.classList.toggle('theme-dark', theme === 'dark');

                const savedLang = localStorage.getItem('lang') || 'id';
                document.documentElement.lang = savedLang;
            } catch (e) {}
        })();
    </script>

    <style>
        html[lang="id"] .lang-en {
            display: none !important;
        }

        html[lang="en"] .lang-id {
            display: none !important;
        }

        :root {
            --av-bg: #ffffff;
            --av-surface: #ffffff;
            --av-surface-2: #f8fafc;
            --av-text: #0f172a;
            --av-muted: #64748b;
            --av-border: #e2e8f0;
            --av-primary: #2563eb;
            --av-primary-2: #1e3a8a;
        }

        .theme-dark {
            --av-bg: #0b1220;
            --av-surface: #0f172a;
            --av-surface-2: #0b1220;
            --av-text: #e5e7eb;
            --av-muted: #94a3b8;
            --av-border: rgba(255, 255, 255, 0.10);
            --av-primary: #60a5fa;
            --av-primary-2: #93c5fd;
        }

        html,
        body {
            background: var(--av-bg);
            color: var(--av-text);
        }

        /* Tailwind utility overrides for theme-dark (keep site consistent) */
        .theme-dark .text-slate-900 { color: var(--av-text) !important; }
        .theme-dark .text-slate-700 { color: color-mix(in srgb, var(--av-text) 92%, var(--av-muted)) !important; }
        .theme-dark .text-slate-600 { color: var(--av-muted) !important; }
        .theme-dark .text-slate-500 { color: var(--av-muted) !important; }
        .theme-dark .text-slate-400 { color: var(--av-muted) !important; }

        .theme-dark .bg-white { background-color: var(--av-surface) !important; }
        .theme-dark .bg-slate-50 { background-color: var(--av-surface-2) !important; }

        .theme-dark .border-slate-200 { border-color: var(--av-border) !important; }

        /* Common gray utilities used by static pages */
        .theme-dark .text-gray-900 { color: var(--av-text) !important; }
        .theme-dark .text-gray-700 { color: color-mix(in srgb, var(--av-text) 88%, var(--av-muted)) !important; }
        .theme-dark .text-gray-600 { color: var(--av-muted) !important; }
        .theme-dark .text-gray-500 { color: var(--av-muted) !important; }
        .theme-dark .bg-gray-50 { background-color: var(--av-surface-2) !important; }

        /* Prose (typography) in dark mode */
        .theme-dark .prose { color: var(--av-text) !important; }
        .theme-dark .prose :where(p, li) { color: var(--av-muted) !important; }
        .theme-dark .prose :where(h1, h2, h3, h4) { color: var(--av-text) !important; }
        .theme-dark .prose :where(strong) { color: var(--av-text) !important; }
        .theme-dark .prose :where(a) { color: var(--av-primary-2) !important; }

        /* Preloader */
        #preloader {
            position: fixed;
            inset: 0;
            background: var(--av-bg);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            transition: opacity 0.6s cubic-bezier(0.16, 1, 0.3, 1), visibility 0.6s cubic-bezier(0.16, 1, 0.3, 1);
            gap: 2rem;
        }

        #preloader.hidden {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        .preloader-glass {
            position: relative;
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: linear-gradient(135deg, color-mix(in srgb, var(--av-primary) 15%, transparent), color-mix(in srgb, var(--av-primary-2) 5%, transparent));
            box-shadow: 0 8px 32px 0 color-mix(in srgb, var(--av-primary) 15%, transparent);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border: 1px solid color-mix(in srgb, var(--av-text) 10%, transparent);
            animation: floatGlass 3s ease-in-out infinite;
        }

        .preloader-glass::before {
            content: '';
            position: absolute;
            inset: -12px;
            border-radius: 50%;
            border: 2px solid transparent;
            border-top-color: var(--av-primary);
            border-bottom-color: var(--av-primary-2);
            animation: spinGleam 2s cubic-bezier(0.68, -0.55, 0.265, 1.55) infinite;
        }

        .preloader-glass::after {
            content: '';
            position: absolute;
            inset: -4px;
            border-radius: 50%;
            border: 1px solid transparent;
            border-left-color: var(--av-primary);
            border-right-color: var(--av-primary-2);
            animation: spinGleamReverse 3s linear infinite;
            opacity: 0.6;
        }

        .preloader-icon {
            font-size: 2.2rem;
            color: var(--av-primary);
            animation: pulseGlow 2s ease-in-out infinite;
            filter: drop-shadow(0 0 12px color-mix(in srgb, var(--av-primary) 60%, transparent));
        }

        .preloader-text {
            font-size: 0.85rem;
            font-weight: 700;
            color: var(--av-primary);
            letter-spacing: 0.35em;
            text-transform: uppercase;
            animation: pulseText 2s ease-in-out infinite;
            margin-right: -0.35em; /* To offset the last letter spacing */
        }

        @keyframes floatGlass {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-12px); }
            100% { transform: translateY(0px); }
        }

        @keyframes spinGleam {
            0% { transform: rotate(0deg); border-width: 2px; }
            50% { transform: rotate(180deg); border-width: 3px; border-top-color: var(--av-primary-2); border-bottom-color: var(--av-primary); }
            100% { transform: rotate(360deg); border-width: 2px; }
        }

        @keyframes spinGleamReverse {
            0% { transform: rotate(360deg); }
            100% { transform: rotate(0deg); }
        }

        @keyframes pulseGlow {
            0%, 100% { opacity: 0.85; transform: scale(0.95); }
            50% { opacity: 1; transform: scale(1.05); }
        }

        @keyframes pulseText {
            0%, 100% { opacity: 0.5; }
            50% { opacity: 1; filter: drop-shadow(0 0 8px color-mix(in srgb, var(--av-primary) 50%, transparent)); }
        }

        .footer {
            background: var(--av-surface);
            color: var(--av-text);
            padding: 3rem 1.5rem 1rem;
            margin-top: auto;
            border-top: 1px solid var(--av-border);
        }

        .footer-container {
            max-width: 1280px;
            margin: 0 auto;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-brand {
            text-align: center;
        }

        .footer-brand .navbar-icon {
            background: linear-gradient(135deg, #2563eb 0%, #1e3a8a 100%);
            margin: 0 auto 1rem;
        }

        .footer-brand h3 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: var(--av-text);
        }

        .footer-brand p {
            color: var(--av-muted);
            line-height: 1.6;
        }

        .footer-links h4 {
            font-size: 1.125rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--av-text);
        }

        .footer-links ul {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 0.5rem;
        }

        .footer-links a {
            color: var(--av-muted);
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: var(--av-primary);
        }

        .footer-social h4 {
            font-size: 1.125rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--av-text);
        }

        .social-icons {
            display: flex;
            gap: 1rem;
        }

        .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 2.5rem;
            height: 2.5rem;
            background: rgba(0, 0, 0, 0.06);
            border-radius: 50%;
            color: var(--av-text);
            text-decoration: none;
            transition: background 0.3s, transform 0.3s;
        }

        .social-icons a:hover {
            background: var(--av-primary);
            transform: translateY(-2px);
            color: #ffffff;
        }

        .footer-bottom {
            border-top: 1px solid var(--av-border);
            padding-top: 1rem;
            text-align: center;
        }

        .footer-bottom p {
            color: var(--av-muted);
            font-size: 0.875rem;
        }

        @media (max-width: 768px) {
            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .social-icons {
                justify-content: center;
            }
        }
    </style>

    {{ $styles ?? '' }}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div id="preloader">
        <div class="preloader-glass">
            <div class="preloader-icon">
                <i class="fas fa-snowflake"></i>
            </div>
        </div>
        <div class="preloader-text">Arctic Vision</div>
    </div>

    @include('components.navbar')

    <main>
        {{ $slot }}
    </main>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-content">
                <div class="footer-brand">
                    <div class="navbar-icon" style="margin: 0 auto 0.5rem;">
                        <i class="fas fa-snowflake"></i>
                    </div>
                    <h3>Arctic Vision</h3>
                    <p>
                        <span class="lang-id">Membangun masa depan untuk ekosistem Arktik melalui pemantauan cerdas dan konservasi berkelanjutan.</span>
                        <span class="lang-en">Building the future for Arctic ecosystems through intelligent monitoring and sustainable conservation.</span>
                    </p>
                </div>
                <div class="footer-links">
                    <h4>
                        <span class="lang-id">Navigasi</span>
                        <span class="lang-en">Navigation</span>
                    </h4>
                    <ul>
                        <li><a href="{{ route('welcome') }}">
                            <span class="lang-id">Beranda</span>
                            <span class="lang-en">Home</span>
                        </a></li>
                        <li><a href="{{ route('monitoring') }}">Monitoring</a></li>
                        <li><a href="#encyclopedia">
                            <span class="lang-id">Ensiklopedia</span>
                            <span class="lang-en">Encyclopedia</span>
                        </a></li>
                        <li><a href="{{ route('about') }}">
                            <span class="lang-id">Tentang</span>
                            <span class="lang-en">About</span>
                        </a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>
                        <span class="lang-id">Kontak</span>
                        <span class="lang-en">Contact</span>
                    </h4>
                    <ul>
                        <li><a href="mailto:laludeyndrafavian@gmail.com">laludeyndrafavian@gmail.com</a></li>
                        <li><a href="{{ route('privacy-policy') }}">
                            <span class="lang-id">Kebijakan Privasi</span>
                            <span class="lang-en">Privacy Policy</span>
                        </a></li>
                        <li><a href="{{ route('terms-of-service') }}">
                            <span class="lang-id">Syarat & Ketentuan</span>
                            <span class="lang-en">Terms of Service</span>
                        </a></li>
                    </ul>
                </div>
                <div class="footer-social">
                    <h4>
                        <span class="lang-id">Ikuti Kami</span>
                        <span class="lang-en">Follow Us</span>
                    </h4>
                    <div class="social-icons">
                        <a href="https://github.com/LaluDeyndra/Projek_UKK" target="_blank" aria-label="Github"><i
                                class="fab fa-github"></i></a>
                        <a target="_blank" href="https://www.instagram.com/arcticvision_xiisija2?igsh=dmp1MWIwN2JkeHVq"
                            aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>
                    <span class="lang-id">&copy; 2026 Arctic Vision. Semua hak dilindungi.</span>
                    <span class="lang-en">&copy; 2026 Arctic Vision. All rights reserved.</span>
                </p>
            </div>
        </div>
    </footer>

    <script>
        window.addEventListener('load', function() {
            const preloader = document.getElementById('preloader');
            if (!preloader) return;

            preloader.classList.add('hidden');
            setTimeout(function() {
                preloader.remove();
            }, 500);
        });
    </script>
</body>

</html>
