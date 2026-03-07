<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Arctic Vision - Membangun Masa Depan Ekosistem Arktik</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />
    <style>
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
            padding: 1rem 2rem;
            border-radius: 0.5rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
            cursor: pointer;
            border: none;
            display: inline-block;
        }

        .btn-dark {
            background: #111827;
            color: white;
        }

        .btn-dark:hover {
            background: #1f2937;
        }

        .btn-primary {
            background: #3b82f6;
            color: white;
        }

        .btn-primary:hover {
            background: #2563eb;
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

        .footer {
            background: #111827;
            color: white;
            text-align: center;
            padding: 2rem 1.5rem;
        }
    </style>
</head>

<body>
    <!-- Navbar Component -->
    @include('components.navbar')

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Arctic Vision</h1>
            <p>Membangun masa depan untuk ekosistem Arktik melalui pemantauan cerdas dan konservasi berkelanjutan</p>
            <div class="hero-buttons">
                <a href="#monitoring" class="btn btn-dark">Pantau Suhu Realtime</a>
                <a href="#encyclopedia" class="btn btn-primary">Pelajari Hewan</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
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

    <!-- Encyclopedia Section -->
    <section id="encyclopedia" class="section section-white">
        <div class="section-container">
            <h2>Encyclopedia - Penghuni Arktik</h2>
            <p style="text-align: center; color: #4b5563; max-width: 32rem; margin: 0 auto;">
                Jelajahi dunia fauna Arktik dan pelajari bagaimana mereka beradaptasi dengan lingkungan yang ekstrem.
            </p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2026 Arctic Vision. Semua hak dilindungi.</p>
    </footer>
</body>
