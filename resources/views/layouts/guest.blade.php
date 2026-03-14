<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Arctic Vision' }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        .footer {
            background: linear-gradient(135deg, #111827 0%, #1e293b 100%);
            color: white;
            padding: 3rem 1.5rem 1rem;
            margin-top: auto;
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
            color: #f3f4f6;
        }

        .footer-brand p {
            color: #d1d5db;
            line-height: 1.6;
        }

        .footer-links h4 {
            font-size: 1.125rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #f3f4f6;
        }

        .footer-links ul {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 0.5rem;
        }

        .footer-links a {
            color: #d1d5db;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: #2563eb;
        }

        .footer-social h4 {
            font-size: 1.125rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #f3f4f6;
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
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            text-decoration: none;
            transition: background 0.3s, transform 0.3s;
        }

        .social-icons a:hover {
            background: #2563eb;
            transform: translateY(-2px);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 1rem;
            text-align: center;
        }

        .footer-bottom p {
            color: #9ca3af;
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
                        <li><a href="#Beranda">Beranda</a></li>
                        <li><a href="#monitoring">Monitoring</a></li>
                        <li><a href="#encyclopedia">Encyclopedia</a></li>
                        <li><a href="#about">About</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Kontak</h4>
                    <ul>
                        <li><a href="mailto:info@arcticvision.com">Email</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="footer-social">
                    <h4>Ikuti Kami</h4>
                    <div class="social-icons">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 Arctic Vision. Semua hak dilindungi.</p>
            </div>
        </div>
    </footer>
</body>

</html>
