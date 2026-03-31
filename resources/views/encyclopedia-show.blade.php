<x-public-layout>
    <!-- Immersive Hero Section -->
    <div class="animal-hero">
        <div class="animal-hero-bg" style="background-image: url('{{ asset($animal['image']) }}');"></div>
        <div class="animal-hero-overlay"></div>

        <div class="animal-hero-content">
            <a href="{{ route('encyclopedia') }}" class="back-btn">
                <i class="fas fa-arrow-left"></i>
                <span class="lang-id">Kembali ke Ensiklopedia</span>
                <span class="lang-en">Back to Encyclopedia</span>
            </a>

            <div class="mt-auto">
                <div class="animal-hero-badge">{{ $animal['badge'] }}</div>
                <h1 class="animal-hero-title">
                    <span class="lang-id">{{ $animal['name_id'] }}</span>
                    <span class="lang-en">{{ $animal['name_en'] }}</span>
                </h1>
                <p class="animal-hero-desc">
                    <span class="lang-id">{{ $animal['short_id'] }}</span>
                    <span class="lang-en">{{ $animal['short_en'] }}</span>
                </p>
            </div>
        </div>
    </div>

    <!-- Details Section -->
    <div class="animal-details-wrapper">
        <div class="animal-details-grid">

            <!-- Habitat Card -->
            <div class="detail-card">
                <div class="detail-icon" style="background: rgba(14, 165, 233, 0.1); color: #0ea5e9;">
                    <i class="fas fa-globe-americas"></i>
                </div>
                <h3 class="detail-title">
                    <span class="lang-id">Habitat & Distribusi</span>
                    <span class="lang-en">Habitat & Distribution</span>
                </h3>
                <p class="detail-text">
                    <span class="lang-id">{{ $animal['habitat_id'] }}</span>
                    <span class="lang-en">{{ $animal['habitat_en'] }}</span>
                </p>
            </div>

            <!-- Diet Card -->
            <div class="detail-card">
                <div class="detail-icon" style="background: rgba(239, 68, 68, 0.1); color: #ef4444;">
                    <i class="fas fa-bone"></i>
                </div>
                <h3 class="detail-title">
                    <span class="lang-id">Makanan Utama</span>
                    <span class="lang-en">Primary Diet</span>
                </h3>
                <p class="detail-text">
                    <span class="lang-id">{{ $animal['diet_id'] }}</span>
                    <span class="lang-en">{{ $animal['diet_en'] }}</span>
                </p>
            </div>

            <!-- Fun Fact Card -->
            <div class="detail-card fact-card">
                <div class="detail-icon" style="background: rgba(245, 158, 11, 0.1); color: #f59e0b;">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3 class="detail-title">
                    <span class="lang-id">Fakta Ekstrem Arktik</span>
                    <span class="lang-en">Extreme Arctic Fact</span>
                </h3>
                <p class="detail-text">
                    <span class="lang-id">{{ $animal['fact_id'] }}</span>
                    <span class="lang-en">{{ $animal['fact_en'] }}</span>
                </p>
            </div>

        </div>

        <div class="source-credit">
            <i class="fas fa-shield-check mr-2"></i>
            <span class="lang-id">Data Diverifikasi oleh: <strong>{{ $animal['source'] }}</strong></span>
            <span class="lang-en">Data Verified by: <strong>{{ $animal['source'] }}</strong></span>
        </div>
    </div>

    <style>
        /* Hero Section */
        .animal-hero {
            position: relative;
            height: 75vh;
            min-height: 500px;
            width: 100%;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        @media (max-width: 640px) {
            .animal-hero {
                min-height: 400px;
            }
        }

        .animal-hero-bg {
            position: absolute;
            inset: 0;
            background-size: cover;
            background-position: center 30%;
            z-index: 1;
            /* Optional subtle zoom animation */
            animation: slowZoom 20s infinite alternate linear;
        }

        @keyframes slowZoom {
            0% {
                transform: scale(1);
            }

            100% {
                transform: scale(1.1);
            }
        }

        .animal-hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0.1) 40%, var(--av-bg) 100%);
            z-index: 2;
        }

        .animal-hero-content {
            position: relative;
            z-index: 3;
            max-width: 1280px;
            width: 100%;
            margin: 0 auto;
            /* Added padding-top to prevent overlapping with fixed navbar */
            padding: 6rem 1.25rem 4rem 1.25rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        @media (min-width: 640px) {
            .animal-hero-content {
                padding: 8rem 2rem 6rem 2rem;
            }
        }

        .back-btn {
            align-self: flex-start;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
            border-radius: 2rem;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            margin-top: 0;
            margin-bottom: 2rem;
            font-size: 0.95rem;
        }

        @media (min-width: 640px) {
            .back-btn {
                margin-top: 0;
                margin-bottom: 3rem;
                padding: 0.85rem 1.75rem;
                gap: 0.75rem;
                font-size: 1rem;
            }
        }

        .back-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateX(-5px);
        }

        .mt-auto {
            margin-top: auto;
        }

        .animal-hero-badge {
            display: inline-block;
            background: var(--av-primary);
            color: white;
            padding: 0.35rem 1rem;
            border-radius: 2rem;
            font-family: monospace;
            font-size: 0.85rem;
            font-weight: 700;
            letter-spacing: 0.05em;
            margin-bottom: 1rem;
            box-shadow: 0 4px 15px rgba(14, 165, 233, 0.4);
        }

        @media (min-width: 640px) {
            .animal-hero-badge {
                padding: 0.4rem 1.25rem;
                font-size: 1rem;
                margin-bottom: 1.5rem;
            }
        }

        .animal-hero-title {
            font-size: 2rem;
            font-weight: 900;
            color: white;
            line-height: 1.2;
            margin-bottom: 1rem;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
            letter-spacing: -0.02em;
        }

        @media (min-width: 640px) {
            .animal-hero-title {
                font-size: 3rem;
                margin-bottom: 1.5rem;
            }
        }

        @media (min-width: 1024px) {
            .animal-hero-title {
                font-size: 4.5rem;
            }
        }

        .animal-hero-desc {
            font-size: 0.95rem;
            color: rgba(255, 255, 255, 0.9);
            max-width: 800px;
            line-height: 1.5;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }

        @media (min-width: 640px) {
            .animal-hero-desc {
                font-size: 1.25rem;
                line-height: 1.6;
            }
        }

        /* Details Section */
        .animal-details-wrapper {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 1.25rem 3rem 1.25rem;
            position: relative;
            z-index: 10;
            transform: translateY(-1.5rem);
            margin-bottom: -1.5rem;
        }

        @media (min-width: 640px) {
            .animal-details-wrapper {
                padding: 0 2rem 6rem 2rem;
                transform: translateY(-3rem);
                margin-bottom: -3rem;
            }
        }

        .animal-details-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        @media (min-width: 640px) {
            .animal-details-grid {
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
                gap: 2rem;
            }
        }

        @media (min-width: 1024px) {
            .animal-details-grid {
                grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
                gap: 2rem;
            }
        }

        .detail-card {
            background: var(--av-surface);
            border: 1px solid var(--av-border);
            border-radius: 1.5rem;
            padding: 1.5rem;
            box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, border-color 0.3s ease;
        }

        @media (min-width: 640px) {
            .detail-card {
                padding: 2.5rem;
            }
        }

        .detail-card:hover {
            transform: translateY(-5px);
            border-color: color-mix(in srgb, var(--av-primary) 30%, var(--av-border));
        }

        .fact-card {
            background: linear-gradient(135deg, var(--av-surface) 0%, color-mix(in srgb, var(--av-primary) 5%, var(--av-surface)) 100%);
            border-color: color-mix(in srgb, var(--av-primary) 20%, transparent);
        }

        .detail-icon {
            width: 2.75rem;
            height: 2.75rem;
            border-radius: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            margin-bottom: 1rem;
        }

        @media (min-width: 640px) {
            .detail-icon {
                width: 3.5rem;
                height: 3.5rem;
                font-size: 1.5rem;
                margin-bottom: 1.5rem;
            }
        }

        .detail-title {
            font-size: 1.15rem;
            font-weight: 800;
            color: var(--av-text);
            margin-bottom: 0.75rem;
        }

        @media (min-width: 640px) {
            .detail-title {
                font-size: 1.35rem;
                margin-bottom: 1rem;
            }
        }

        .detail-text {
            color: var(--av-muted);
            line-height: 1.6;
            font-size: 0.95rem;
        }

        @media (min-width: 640px) {
            .detail-text {
                font-size: 1.05rem;
                line-height: 1.7;
            }
        }

        .source-credit {
            margin-top: 2.5rem;
            text-align: center;
            padding: 1.25rem;
            background: var(--av-surface-2);
            border-radius: 1rem;
            color: var(--av-muted);
            font-size: 0.85rem;
            border: 1px dashed var(--av-border);
        }

        @media (min-width: 640px) {
            .source-credit {
                margin-top: 4rem;
                padding: 1.5rem;
                font-size: 0.95rem;
            }
        }
    </style>
</x-public-layout>
