<x-public-layout>
    <x-slot:title>404 - Halaman Tidak Ditemukan</x-slot:title>

    <x-slot:styles>
        <style>
            .error-container {
                min-height: calc(100vh - 80px); /* Adjust based on navbar height */
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 2rem;
                text-align: center;
                position: relative;
                overflow: hidden;
                background: linear-gradient(to bottom, var(--av-surface-2) 0%, var(--av-bg) 100%);
            }

            .error-container::before {
                content: '';
                position: absolute;
                inset: 0;
                background: radial-gradient(circle at center, color-mix(in srgb, var(--av-primary) 10%, transparent) 0%, transparent 60%);
                pointer-events: none;
            }

            .error-code {
                font-size: 8rem;
                font-weight: 900;
                line-height: 1;
                background: linear-gradient(135deg, var(--av-primary) 0%, #38bdf8 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                margin-bottom: 1rem;
                text-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                animation: float-404 6s ease-in-out infinite;
                position: relative;
            }

            @media (min-width: 768px) {
                .error-code {
                    font-size: 14rem;
                }
            }

            @keyframes float-404 {
                0%, 100% { transform: translateY(0); }
                50% { transform: translateY(-20px); }
            }

            .error-title {
                font-size: 2rem;
                font-weight: 700;
                color: var(--av-text);
                margin-bottom: 1rem;
            }

            @media (min-width: 768px) {
                .error-title {
                    font-size: 2.5rem;
                }
            }

            .error-desc {
                font-size: 1.125rem;
                color: var(--av-muted);
                max-width: 32rem;
                margin: 0 auto 2.5rem;
                line-height: 1.7;
            }

            .error-icon {
                font-size: 4rem;
                color: var(--av-primary);
                margin-bottom: 1rem;
                opacity: 0.8;
                animation: spin-slow 15s linear infinite;
            }

            @keyframes spin-slow {
                100% { transform: rotate(360deg); }
            }

            .home-btn {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                gap: 0.75rem;
                padding: 1rem 2.5rem;
                background: var(--av-primary);
                color: white;
                border-radius: 9999px;
                font-weight: 600;
                font-size: 1.125rem;
                text-decoration: none;
                transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), background 0.3s, box-shadow 0.3s;
                box-shadow: 0 4px 14px 0 color-mix(in srgb, var(--av-primary) 40%, transparent);
            }

            .home-btn:hover {
                transform: translateY(-3px) scale(1.02);
                background: var(--av-primary-2);
                box-shadow: 0 8px 25px 0 color-mix(in srgb, var(--av-primary) 50%, transparent);
            }

            /* Snowflakes that fall in the background */
            .err-snowflake {
                position: absolute;
                top: -30px;
                color: color-mix(in srgb, var(--av-text) 20%, transparent);
                animation: fall linear forwards;
                pointer-events: none;
                z-index: 1;
            }
            
            @keyframes fall {
                to {
                    transform: translateY(120vh) rotate(360deg);
                }
            }

            .content-wrapper {
                position: relative;
                z-index: 10;
                background: color-mix(in srgb, var(--av-surface) 60%, transparent);
                backdrop-filter: blur(16px);
                -webkit-backdrop-filter: blur(16px);
                border: 1px solid color-mix(in srgb, var(--av-border) 80%, transparent);
                border-radius: 2rem;
                padding: 4rem 2rem;
                box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1);
                max-width: 800px;
                width: 100%;
                margin: 0 auto;
            }
        </style>
    </x-slot:styles>

    <div class="error-container" id="errorContainer">
        <div class="content-wrapper">
            <div class="error-icon">
                <i class="fas fa-snowflake"></i>
            </div>
            
            <div class="error-code">404</div>
            
            <h2 class="error-title">
                <span class="lang-id">Tersesat di Badai Salju?</span>
                <span class="lang-en">Lost in the Blizzard?</span>
            </h2>
            
            <p class="error-desc">
                <span class="lang-id">Halaman atau satwa yang Anda cari tampaknya telah tertimbun tebalnya salju dan tidak ditemukan di dalam koordinat ekosistem Arktik kami.</span>
                <span class="lang-en">The page or animal you are looking for seems to have been buried by thick snow and cannot be found within our Arctic ecosystem coordinates.</span>
            </p>
            
            <a href="{{ route('welcome') }}" class="home-btn">
                <i class="fas fa-campground"></i>
                <span style="display: inline-block;">
                    <span class="lang-id">Kembali ke Basecamp</span>
                    <span class="lang-en">Return to Basecamp</span>
                </span>
            </a>
        </div>
    </div>

    <!-- Script to generate random falling snowflakes exclusively in 404 block -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.getElementById('errorContainer');
            if (!container) return;
            
            const snowflakeCount = window.innerWidth > 768 ? 40 : 20;
            
            for (let i = 0; i < snowflakeCount; i++) {
                createSnowflake(container);
            }
            
            // Periodically add more to keep the blizzard going
            setInterval(() => {
                if (document.hidden) return; // Don't animate when tab is hidden
                createSnowflake(container);
            }, 1000);
            
            function createSnowflake(parent) {
                const sf = document.createElement('i');
                const types = ['fa-snowflake', 'fa-asterisk', 'fa-circle'];
                
                sf.className = 'fas ' + types[Math.floor(Math.random() * types.length)] + ' err-snowflake';
                sf.style.left = Math.random() * 100 + '%';
                
                // Randomize sizes and speeds
                const duration = Math.random() * 8 + 5; 
                sf.style.animationDuration = duration + 's';
                
                // Random delay so they don't all fall together initially
                sf.style.animationDelay = (Math.random() * 5) + 's';
                
                // Opacity based on Z-depth illusion
                const depth = Math.random();
                sf.style.opacity = Math.max(0.1, depth * 0.4);
                sf.style.fontSize = (depth * 20 + 8) + 'px';
                
                // Light blur for distant flakes
                if (depth < 0.3) {
                    sf.style.filter = 'blur(1px)';
                }
                
                parent.appendChild(sf);
                
                // Clean up DOM after animation completes
                setTimeout(() => {
                    if (sf.parentNode) sf.parentNode.removeChild(sf);
                }, (duration + 5) * 1000);
            }
        });
    </script>
</x-public-layout>
