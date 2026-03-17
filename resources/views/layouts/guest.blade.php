<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Arctic Vision' }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        (function() {
            try {
                const saved = localStorage.getItem('theme');
                const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
                const theme = saved ? saved : (prefersDark ? 'dark' : 'light');
                document.documentElement.classList.toggle('theme-dark', theme === 'dark');
            } catch (e) {}
        })();
    </script>

    <style>
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
            transition: opacity 0.35s ease, visibility 0.35s ease;
            gap: 1.5rem;
        }

        #preloader.hidden {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        .preloader-spinner {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100px;
            height: 100px;
            position: relative;
        }

        .preloader-spinner::before {
            content: '';
            position: absolute;
            width: 70px;
            height: 70px;
            border: 3px solid #e0e7ff;
            border-top: 3px solid #2563eb;
            border-right: 3px solid #1e3a8a;
            border-radius: 50%;
            animation: spinRing 2.5s cubic-bezier(0.68, -0.55, 0.265, 1.55) infinite;
        }

        .preloader-spinner::after {
            content: '';
            position: absolute;
            width: 45px;
            height: 45px;
            border: 2px solid transparent;
            border-top: 2px solid #2563eb;
            border-radius: 50%;
            animation: spinRingReverse 1.8s ease-in-out infinite;
        }



        .preloader-text {
            font-size: 0.95rem;
            font-weight: 500;
            color: #64748b;
            letter-spacing: 0.1em;
        }

        .preloader-text::after {
            content: '';
            animation: dotPulse 1.5s steps(4, end) infinite;
        }

        @keyframes spinRing {
            0% {
                transform: rotate(0deg) scale(1);
            }

            50% {
                transform: rotate(180deg) scale(1.05);
            }

            100% {
                transform: rotate(360deg) scale(1);
            }
        }

        @keyframes spinRingReverse {
            0% {
                transform: rotate(360deg);
                opacity: 1;
            }

            100% {
                transform: rotate(0deg);
                opacity: 0.5;
            }
        }


        @keyframes dotPulse {

            0%,
            20% {
                content: '';
            }

            40% {
                content: '.';
            }

            60% {
                content: '..';
            }

            80%,
            100% {
                content: '...';
            }
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
        <div class="preloader-spinner"></div>
        <div class="preloader-text">Loading</div>
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
                    <p>Membangun masa depan untuk ekosistem Arktik melalui pemantauan cerdas dan konservasi
                        berkelanjutan.</p>
                </div>
                <div class="footer-links">
                    <h4>Navigasi</h4>
                    <ul>
                        <li><a href="{{ route('welcome') }}">Beranda</a></li>
                        <li><a href="#monitoring">Monitoring</a></li>
                        <li><a href="#encyclopedia">Encyclopedia</a></li>
                        <li><a href="#about">About</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Kontak</h4>
                    <ul>
                        <li><a href="mailto:laludeyndrafavian@gmail.com">laludeyndrafavian@gmail.com</a></li>
                        <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                        <li><a href="{{ route('terms-of-service') }}">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="footer-social">
                    <h4>Ikuti Kami</h4>
                    <div class="social-icons">
                        <a href="https://github.com/LaluDeyndra/Projek_UKK" target="_blank" aria-label="Github"><i
                                class="fab fa-github"></i></a>
                        <a target="_blank" href="https://www.instagram.com/arcticvision_xiisija2?igsh=dmp1MWIwN2JkeHVq"
                            aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 Arctic Vision. Semua hak dilindungi.</p>
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
