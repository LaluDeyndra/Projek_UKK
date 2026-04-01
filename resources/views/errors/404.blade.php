<x-public-layout>
    <x-slot:title>404 - Arctic Vision</x-slot:title>

    <div class="min-h-screen pt-28 pb-12 relative flex items-center justify-center overflow-hidden" style="background: var(--av-surface-2);">
        
        <!-- Animated Background Blobs -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
            <div class="absolute top-[15%] left-[15%] w-[40%] h-[40%] rounded-full opacity-20 blur-[100px] animate-pulse" style="background: var(--av-primary); animation-duration: 8s;"></div>
            <div class="absolute bottom-[10%] right-[15%] w-[40%] h-[40%] rounded-full opacity-20 blur-[100px] animate-pulse" style="background: var(--av-primary-2); animation-duration: 12s;"></div>
        </div>

        <!-- Huge Watermark 404 -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[15rem] md:text-[25rem] lg:text-[35rem] font-black pointer-events-none select-none z-0 tracking-tighter" style="color: color-mix(in srgb, var(--av-text) 3%, transparent); filter: blur(2px);">
            404
        </div>

        <!-- Main Content Glass Card -->
        <div class="relative z-10 w-full max-w-2xl mx-auto px-4 sm:px-6">
            <div class="p-8 md:p-12 rounded-[2.5rem] text-center transition-all duration-500 hover:shadow-2xl" 
                 style="background: color-mix(in srgb, var(--av-surface) 60%, transparent); backdrop-filter: blur(24px); -webkit-backdrop-filter: blur(24px); border: 1px solid color-mix(in srgb, var(--av-border) 60%, transparent); box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1);">
                
                <!-- Animated Icon / Radar -->
                <div class="relative inline-flex items-center justify-center w-24 h-24 mb-6">
                    <!-- Ping Animation Background -->
                    <div class="absolute inset-0 rounded-full animate-ping opacity-20" style="background: var(--av-primary); animation-duration: 2s;"></div>
                    
                    <!-- Spinning Dashed Border -->
                    <div class="absolute inset-[-12px] rounded-full border-2 border-dashed animate-[spin_8s_linear_infinite]" style="border-color: var(--av-primary); opacity: 0.4;"></div>
                    
                    <!-- Center Solid Icon Background -->
                    <div class="relative flex items-center justify-center w-full h-full rounded-full shadow-[0_0_30px_rgba(37,99,235,0.3)]" style="background: linear-gradient(135deg, var(--av-primary), var(--av-primary-2));">
                        <i class="fas fa-satellite-dish text-4xl text-white"></i>
                    </div>
                </div>

                <!-- Error Title & Gradient Text -->
                <h1 class="text-4xl sm:text-5xl font-extrabold mb-3 tracking-tight" style="color: var(--av-text);">
                    <span class="bg-clip-text text-transparent" style="background-image: linear-gradient(135deg, var(--av-primary), #818cf8);">Error 404</span>
                </h1>
                
                <h2 class="text-2xl sm:text-3xl font-bold mb-4" style="color: var(--av-text);">
                    <span class="lang-id">Sinyal Hilang di Badai Salju</span>
                    <span class="lang-en">Signal Lost in the Blizzard</span>
                </h2>
                
                <!-- Separator Line -->
                <div class="w-16 h-1 mx-auto rounded-full mb-6" style="background: color-mix(in srgb, var(--av-primary) 50%, transparent);"></div>
                
                <p class="text-lg md:text-xl mb-10 opacity-70 max-w-md mx-auto leading-relaxed" style="color: var(--av-text);">
                    <span class="lang-id">Halaman atau koordinat sensor yang Anda cari tidak dapat dilacak. Kemungkinan besar telah tertimbun oleh tebalnya salju Arktik.</span>
                    <span class="lang-en">The page or sensor coordinates you are looking for cannot be tracked. Most likely buried by the thick Arctic snow.</span>
                </p>
                
                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <button onclick="window.history.back()" class="w-full sm:w-auto px-8 py-3.5 rounded-2xl font-semibold transition-all duration-300 hover:-translate-y-1 hover:shadow-lg flex items-center justify-center gap-2 group" style="background: var(--av-surface-2); border: 1px solid var(--av-border); color: var(--av-text);">
                        <i class="fas fa-arrow-left text-sm transition-transform group-hover:-translate-x-1 opacity-70"></i>
                        <span class="lang-id">Kembali</span>
                        <span class="lang-en">Go Back</span>
                    </button>
                    
                    <a href="{{ route('welcome') }}" class="w-full sm:w-auto px-8 py-3.5 rounded-2xl font-semibold transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_8px_25px_rgba(37,99,235,0.4)] flex items-center justify-center gap-2 text-white group" style="background: linear-gradient(135deg, var(--av-primary), var(--av-primary-2));">
                        <i class="fas fa-campground text-sm transition-transform group-hover:scale-110"></i>
                        <span class="lang-id">Ke Basecamp</span>
                        <span class="lang-en">To Basecamp</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Falling Snowflakes Container -->
        <div id="snow-container" class="absolute inset-0 pointer-events-none z-20 overflow-hidden"></div>
    </div>

    <!-- Script for Dynamic & Interactive Snowflakes -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.getElementById('snow-container');
            if (!container) return;
            
            // Limit particles based on device to prevent lag
            const isMobile = window.innerWidth < 768;
            const maxFlakes = isMobile ? 30 : 60;
            let currentFlakes = 0;

            function createParticle() {
                if (currentFlakes >= maxFlakes || document.hidden) return;
                
                const flake = document.createElement('div');
                const size = Math.random() * 6 + 3; // 3px to 9px
                const duration = Math.random() * 6 + 6; // 6s to 12s
                const startLeft = Math.random() * 105 - 2.5; // -2.5% to 102.5%
                const wind = (Math.random() - 0.5) * 40; // Horizontal sway
                const isSnowflakeIcon = Math.random() > 0.7; // 30% are actual SVG/icons, 70% are circles
                
                flake.className = 'absolute pointer-events-none flex items-center justify-center';
                flake.style.left = startLeft + '%';
                flake.style.top = '-20px';
                flake.style.transition = `top ${duration}s linear, left ${duration}s linear, transform ${duration}s linear, opacity ${duration}s ease-in-out`;
                flake.style.opacity = '0';
                
                if (isSnowflakeIcon) {
                    flake.innerHTML = '<i class="fas fa-snowflake"></i>';
                    flake.style.color = 'color-mix(in srgb, var(--av-text) ' + (Math.random() * 20 + 10) + '%, transparent)';
                    flake.style.fontSize = size * 1.5 + 'px';
                } else {
                    flake.style.width = size + 'px';
                    flake.style.height = size + 'px';
                    flake.style.borderRadius = '50%';
                    flake.style.background = 'color-mix(in srgb, var(--av-text) ' + (Math.random() * 30 + 10) + '%, transparent)';
                    if (size > 6) flake.style.filter = 'blur(1px)';
                }
                
                // Add to DOM
                container.appendChild(flake);
                currentFlakes++;
                
                // Trigger animation next frame
                requestAnimationFrame(() => {
                    const targetOpacity = Math.random() * 0.6 + 0.2;
                    flake.style.opacity = targetOpacity.toString();
                    flake.style.top = '110%'; // Always fall perfectly below the container
                    flake.style.left = `calc(${startLeft}% + ${wind}vw)`;
                    flake.style.transform = `rotate(${Math.random() * 720}deg)`;
                    
                    // Fade out near the end
                    setTimeout(() => {
                        if(flake) flake.style.opacity = '0';
                    }, (duration - 1) * 1000);
                });
                
                // Remove when done
                setTimeout(() => {
                    if (flake.parentNode) flake.parentNode.removeChild(flake);
                    currentFlakes--;
                }, duration * 1000);
            }

            // Initial burst of snow
            let burstCount = isMobile ? 15 : 30;
            for(let i=0; i<burstCount; i++) {
                setTimeout(createParticle, Math.random() * 3000);
            }

            // Continuous spawn
            setInterval(createParticle, 250);
        });
    </script>
</x-public-layout>
