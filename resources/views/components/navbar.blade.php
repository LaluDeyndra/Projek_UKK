<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 50;
        background: rgba(255, 255, 255, 0.75);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .navbar-container {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0.5rem 1.5rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .navbar-brand {
        display: flex;
        align-items: center;
        gap: 1rem;
        font-size: 1.25rem;
        font-weight: bold;
        color: #1e3a8a;
        cursor: pointer;
        transition: opacity 0.3s;
        text-decoration: none;
    }

    .navbar-brand:hover {
        opacity: 0.8;
    }

    .navbar-icon {
        font-size: 1.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 2rem;
        height: 2rem;
        background: linear-gradient(135deg, #2563eb 0%, #1e3a8a 100%);
        border-radius: 0.5rem;
        color: white;
    }

    .navbar-brand img {
        height: 3rem;
        width: auto;
    }

    .navbar-menu {
        display: none;
        align-items: center;
        gap: 2rem;
    }

    .navbar-hamburger {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 2.5rem;
        height: 2.5rem;
        border: none;
        border-radius: 0.5rem;
        background: rgba(0, 0, 0, 0.06);
        color: #1f2937;
        cursor: pointer;
        transition: background 0.2s;
    }

    .navbar-hamburger:hover {
        background: rgba(0, 0, 0, 0.1);
    }

    .sidebar-overlay {
        display: none;
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.55);
        z-index: 60;
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .sidebar-overlay.show {
        display: block;
        opacity: 1;
    }

    .sidebar {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 280px;
        max-width: 90%;
        background: white;
        padding: 2rem 1.5rem;
        box-shadow: 8px 0 24px rgba(0, 0, 0, 0.2);
        transform: translateX(-100%);
        transition: transform 0.5s ease;
        overflow-y: auto;
    }

    .sidebar.show {
        transform: translateX(0);
    }

    .sidebar-close {
        position: absolute;
        top: 1rem;
        right: 1rem;
        background: none;
        border: none;
        font-size: 1.75rem;
        cursor: pointer;
        color: #6b7280;
    }

    .sidebar-close:hover {
        color: #1f2937;
    }

    .sidebar a {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.75rem 0;
        color: #374151;
        text-decoration: none;
        font-weight: 600;
        transition: color 0.2s, background 0.2s;
        border-radius: 0.5rem;
        padding-left: 0.5rem;
        padding-right: 0.5rem;
    }

    .sidebar a:hover {
        color: #2563eb;
        background: rgba(37, 99, 235, 0.1);
    }

    .sidebar a i {
        font-size: 1.25rem;
        width: 1.5rem;
        text-align: center;
    }

    .sidebar-divider {
        height: 1px;
        background: #e5e7eb;
        margin: 1.25rem 0;
    }

    @media (min-width: 768px) {
        .navbar-menu {
            display: flex;
        }

        .navbar-hamburger {
            display: none;
        }

        .navbar-auth {
            display: flex;
        }
    }

    .navbar-menu a {
        text-decoration: none;
        color: #374151;
        font-weight: 500;
        transition: color 0.3s;
    }

    .navbar-menu a:hover {
        color: #2563eb;
    }

    .navbar-auth {
        display: none;
        align-items: center;
        gap: 1rem;
    }

    .btn-dashboard {
        padding: 0.5rem 1rem;
        background: #2563eb;
        color: white;
        border-radius: 0.375rem;
        text-decoration: none;
        font-weight: 500;
        transition: background 0.3s;
    }

    .btn-dashboard:hover {
        background: #1d4ed8;
    }

    /* Modal Styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .modal.show {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .modal-content {
        background-color: white;
        padding: 2rem;
        border-radius: 0.75rem;
        max-width: 600px;
        width: 90%;
        text-align: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        animation: slideUp 0.3s ease-out;
    }

    @keyframes slideUp {
        from {
            transform: translateY(50px);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .modal-logo {
        width: 200px;
        height: auto;
        margin: 1.5rem auto;
    }

    .modal-title {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 1rem;
        color: #1e3a8a;
    }

    .modal-buttons {
        display: flex;
        gap: 1rem;
        justify-content: center;
        margin-top: 2rem;
        flex-wrap: wrap;
    }

    .modal-btn {
        padding: 0.75rem 1.5rem;
        border: none;
        border-radius: 0.375rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
        text-decoration: none;
        display: inline-block;
    }

    .modal-btn-primary {
        background: #2563eb;
        color: white;
    }

    .modal-btn-primary:hover {
        background: #1d4ed8;
    }

    .modal-btn-secondary {
        background: #e5e7eb;
        color: #1f2937;
    }

    .modal-btn-secondary:hover {
        background: #d1d5db;
    }

    .close-btn {
        position: absolute;
        top: 2rem;
        right: 2rem;
        background: none;
        border: none;
        font-size: 2rem;
        cursor: pointer;
        color: #6b7280;
        transition: color 0.3s;
    }

    .close-btn:hover {
        color: #1f2937;
    }
</style>

<!-- Logo Modal -->
<div id="logoModal" class="modal">
    <div class="modal-content" style="position: relative;">
        <button class="close-btn" onclick="closeLogoModal()">&times;</button>
        <div class="modal-title">Arctic Vision</div>
        <img src="{{ asset('img/logo_arvi-removebg-preview.png') }}" alt="Arctic Vision Logo" class="modal-logo">
        <p style="color: #4b5563; margin-bottom: 1.5rem;">Membangun masa depan untuk ekosistem Arktik</p>
        <div class="modal-buttons">
            <a href="/" class="modal-btn modal-btn-primary">Kembali ke Utama</a>
            <button onclick="closeLogoModal()" class="modal-btn modal-btn-secondary">Tutup</button>
        </div>
    </div>
</div>

<nav class="navbar">
    <div class="navbar-container">
        <div class="navbar-brand" onclick="openLogoModal()">
            <div class="navbar-icon">
                <i class="fas fa-snowflake"></i>
            </div>
            <span>Arctic Vision</span>
        </div>

        <!-- Mobile hamburger -->
        <button class="navbar-hamburger" aria-label="Buka menu" onclick="openMobileNav()">
            <i class="fas fa-bars"></i>
        </button>

        <div class="navbar-menu">
            <a href="#Beranda">Beranda</a>
            <a href="#monitoring">Monitoring</a>
            <a href="#encyclopedia">Encyclopedia</a>
            <a href="#about">About</a>
        </div>

        @auth
            <div class="navbar-auth">
                <span style="color: #374151;">{{ Auth::user()->name }}</span>
                <a href="{{ url('/dashboard') }}" class="btn-dashboard">Dashboard</a>
            </div>
        @endauth
    </div>
</nav>

<!-- Mobile sidebar navigation -->
<div id="mobileNav" class="sidebar-overlay" onclick="closeMobileNav(event)">
    <div class="sidebar" role="menu" aria-label="Menu navigasi">
        <button class="sidebar-close" aria-label="Tutup menu" onclick="closeMobileNav(event)">&times;</button>
        <div style="text-align: center; margin-bottom: 1.5rem; padding-top: 1rem;">
            <div class="navbar-icon" style="margin: 0 auto 0.5rem;">
                <i class="fas fa-snowflake"></i>
            </div>
            <div style="font-weight: bold; color: #1e3a8a;">Arctic Vision</div>
            <div style="font-size: 0.875rem; color: #6b7280;">Menu Navigasi</div>
        </div>
        <a href="#Beranda" onclick="closeMobileNav(event)">
            <i class="fas fa-home"></i>
            <span>Beranda</span>
        </a>
        <a href="#monitoring" onclick="closeMobileNav(event)">
            <i class="fas fa-chart-line"></i>
            <span>Monitoring</span>
        </a>
        <a href="#encyclopedia" onclick="closeMobileNav(event)">
            <i class="fas fa-book"></i>
            <span>Encyclopedia</span>
        </a>
        <a href="#about" onclick="closeMobileNav(event)">
            <i class="fas fa-info-circle"></i>
            <span>About</span>
        </a>

        @auth
            <div class="sidebar-divider"></div>
            <div style="padding: 0.75rem 0; color: #374151; font-weight: 600;">
                <i class="fas fa-user" style="margin-right: 0.5rem;"></i>
                {{ Auth::user()->name }}
            </div>
            <a href="{{ url('/dashboard') }}" class="btn-dashboard"
                style="display: inline-block; width: 100%; text-align: center; margin-top: 0.5rem;"
                onclick="closeMobileNav(event)">
                <i class="fas fa-tachometer-alt" style="margin-right: 0.5rem;"></i>
                Dashboard
            </a>
        @endauth
    </div>
</div>

<script>
    function openMobileNav() {
        console.log('Opening mobile nav');
        const overlay = document.getElementById('mobileNav');
        const sidebar = overlay.querySelector('.sidebar');
        overlay.style.display = 'block';
        setTimeout(() => {
            overlay.classList.add('show');
            sidebar.classList.add('show');
        }, 10);
        document.body.style.overflow = 'hidden';
    }

    function closeMobileNav(event) {
        console.log('Closing mobile nav');
        const overlay = document.getElementById('mobileNav');
        const sidebar = overlay.querySelector('.sidebar');

        // If click occurs inside sidebar, ignore (except close button / links have their own handlers)
        if (event && sidebar.contains(event.target) && !event.target.classList.contains('sidebar-close') && event.target
            .tagName !== 'A') {
            return;
        }

        overlay.classList.remove('show');
        sidebar.classList.remove('show');
        setTimeout(() => {
            overlay.style.display = 'none';
        }, 500);
        document.body.style.overflow = '';
    }

    window.onclick = function(event) {
        const modal = document.getElementById('logoModal');
        if (event.target == modal) {
            modal.classList.remove('show');
        }
    }
</script>
