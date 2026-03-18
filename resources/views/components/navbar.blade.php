<style>
    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        margin-left: auto;
        margin-right: auto;
        width: 100%;
        max-width: 100%;
        border-radius: 0;
        z-index: 50;
        background: color-mix(in srgb, var(--av-bg) 82%, transparent);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid transparent;
        border-bottom-color: var(--av-border);
        transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1), 
                    background-color 0.3s ease,
                    top 0.4s cubic-bezier(0.4, 0, 0.2, 1),
                    width 0.4s cubic-bezier(0.4, 0, 0.2, 1),
                    max-width 0.4s cubic-bezier(0.4, 0, 0.2, 1),
                    border-radius 0.4s cubic-bezier(0.4, 0, 0.2, 1),
                    box-shadow 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        transform: translateY(0);
    }

    .navbar.navbar-pill {
        top: 1.5rem;
        width: 90%;
        max-width: 1000px;
        border-radius: 9999px;
        border-color: var(--av-border);
        background: color-mix(in srgb, var(--av-surface) 85%, transparent);
        box-shadow: 0 10px 40px -10px rgba(0, 0, 0, 0.25);
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
        color: var(--av-primary-2);
        cursor: pointer;
        transition: opacity 0.3s;
        text-decoration: none;
        flex-shrink: 0;
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
        background: linear-gradient(135deg, var(--av-primary) 0%, var(--av-primary-2) 100%);
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

    @media (min-width: 768px) and (max-width: 1024px) {
        .navbar-menu {
            gap: 1rem;
            font-size: 0.95rem;
        }
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
        color: var(--av-text);
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
        background: var(--av-surface);
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
        color: var(--av-text);
        text-decoration: none;
        font-weight: 600;
        transition: color 0.2s, background 0.2s;
        border-radius: 0.5rem;
        padding-left: 0.5rem;
        padding-right: 0.5rem;
    }

    .sidebar a:hover {
        color: var(--av-primary);
        background: color-mix(in srgb, var(--av-primary) 12%, transparent);
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
        color: var(--av-text);
        font-weight: 500;
        transition: color 0.3s;
    }

    .navbar-menu a:hover {
        color: var(--av-primary);
    }

    .navbar-auth {
        display: none;
        align-items: center;
        gap: 1rem;
    }

    .btn-dashboard {
        padding: 0.5rem 1rem;
        background: var(--av-primary);
        color: white;
        border-radius: 0.375rem;
        text-decoration: none;
        font-weight: 500;
        transition: background 0.3s;
    }

    .btn-dashboard:hover {
        background: var(--av-primary-2);
    }

    .theme-toggle {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        height: 2.5rem;
        padding: 0 0.85rem;
        border-radius: 0.75rem;
        border: 1px solid var(--av-border);
        background: rgba(0, 0, 0, 0.04);
        color: var(--av-text);
        cursor: pointer;
        transition: transform 0.15s ease, background 0.2s ease;
        font-weight: 600;
        white-space: nowrap;
        flex-shrink: 0; /* Anti menumpuk/squish */
    }

    .theme-toggle:hover {
        background: color-mix(in srgb, var(--av-primary) 10%, rgba(0, 0, 0, 0.03));
    }

    .theme-toggle:active {
        transform: scale(0.98);
    }

    .chevron-icon {
        transition: transform 0.3s ease;
    }

    .theme-dropdown-container.open .chevron-icon {
        transform: rotate(180deg);
    }

    .theme-dropdown-container {
        position: relative;
        display: inline-block;
        flex-shrink: 0;
    }

    .theme-dropdown-menu {
        position: absolute;
        top: calc(100% + 0.5rem);
        right: 0;
        background: var(--av-surface);
        border: 1px solid var(--av-border);
        border-radius: 0.75rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        padding: 0.5rem;
        display: none;
        flex-direction: column;
        gap: 0.25rem;
        min-width: 140px;
        z-index: 100;
    }

    .theme-dropdown-menu.show {
        display: flex;
        animation: fadeInDown 0.2s ease-out forwards;
    }

    .theme-option {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        width: 100%;
        padding: 0.5rem 0.75rem;
        border: none;
        background: transparent;
        color: var(--av-text);
        text-align: left;
        border-radius: 0.5rem;
        cursor: pointer;
        font-size: 0.9rem;
        transition: background 0.2s, color 0.2s;
    }

    .theme-option:hover {
        background: color-mix(in srgb, var(--av-primary) 10%, transparent);
        color: var(--av-primary);
    }

    .theme-option.active {
        color: var(--av-primary);
        background: color-mix(in srgb, var(--av-primary) 15%, transparent);
        font-weight: 600;
    }

    .theme-dropdown-overlay {
        position: fixed;
        inset: 0;
        z-index: 40;
        display: none;
    }

    .theme-dropdown-overlay.show {
        display: block;
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

    @media (max-width: 1024px) {
        .control-text { display: none !important; }
        .chevron-icon { display: none !important; }
        
        .theme-toggle {
            padding: 0;
            width: 2.25rem;
            height: 2.25rem;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
        }

        .navbar-brand span {
            display: none;
        }

        /* Search Modal Adjustments */
        .search-modal {
            padding: 1rem;
            padding-top: 5vh;
        }

        .search-header {
            padding: 1rem;
        }

        .search-header input {
            font-size: 1.1rem;
        }

        .search-header input::placeholder {
            font-size: 0.9rem;
        }

        .search-item {
            padding: 0.75rem 1rem;
            gap: 0.75rem;
        }

        .search-item-icon {
            width: 2rem;
            height: 2rem;
            font-size: 1rem;
        }

        .search-footer {
            display: none; /* Hide kbd shortcut hints on mobile */
        }
    }
    /* Global Search Modal Styles */
    .search-modal {
        position: fixed;
        inset: 0;
        z-index: 1000;
        background: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        display: none;
        align-items: flex-start;
        justify-content: center;
        padding-top: 10vh;
        opacity: 0;
        transition: opacity 0.25s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .search-modal.show {
        display: flex;
        opacity: 1;
    }

    .search-container {
        width: 100%;
        max-width: 600px;
        background: var(--av-surface);
        border: 1px solid color-mix(in srgb, var(--av-border) 80%, transparent);
        border-radius: 1.25rem;
        box-shadow: 0 40px 60px -15px rgba(0, 0, 0, 0.3);
        overflow: hidden;
        transform: scale(0.95);
        opacity: 0;
        transition: transform 0.2s cubic-bezier(0.34, 1.56, 0.64, 1), opacity 0.2s;
    }

    .search-modal.show .search-container {
        transform: scale(1);
        opacity: 1;
    }

    .search-header {
        display: flex;
        align-items: center;
        padding: 1.25rem 1.5rem;
        border-bottom: 1px solid color-mix(in srgb, var(--av-border) 60%, transparent);
    }

    .search-header .search-icon {
        color: var(--av-primary);
        font-size: 1.5rem;
        margin-right: 1.25rem;
        opacity: 0.8;
    }

    .search-header input {
        flex: 1;
        min-width: 0; /* Allow input to shrink below placeholder width */
        background: transparent;
        border: none !important;
        outline: none !important;
        box-shadow: none !important; /* Remove Tailwind forms focus ring */
        font-size: 1.25rem;
        color: var(--av-text);
        font-weight: 500;
        margin-right: 1rem;
    }

    .search-header input::placeholder {
        color: color-mix(in srgb, var(--av-muted) 80%, transparent);
        font-size: 1rem;
    }

    .search-close {
        flex-shrink: 0; /* Prevent the close button from disappearing */
        background: color-mix(in srgb, var(--av-surface-2) 60%, transparent);
        border: none;
        color: var(--av-text);
        width: 2.25rem;
        height: 2.25rem;
        border-radius: 0.5rem;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background 0.2s, color 0.2s;
        opacity: 0.7;
    }

    .search-close:hover {
        background: color-mix(in srgb, var(--av-border) 50%, transparent);
        opacity: 1;
    }

    .search-results {
        max-height: 400px;
        overflow-y: auto;
        padding: 0.75rem;
    }

    .search-results::-webkit-scrollbar {
        width: 8px;
    }
    .search-results::-webkit-scrollbar-track {
        background: transparent;
    }
    .search-results::-webkit-scrollbar-thumb {
        background: color-mix(in srgb, var(--av-border) 80%, transparent);
        border-radius: 4px;
    }

    .search-item {
        display: flex;
        align-items: center;
        padding: 1rem 1.25rem;
        border-radius: 0.75rem;
        cursor: pointer;
        text-decoration: none;
        color: var(--av-text);
        gap: 1.25rem;
        transition: background-color 0.2s ease, transform 0.2s ease;
        border: 1px solid transparent;
    }

    .search-item:hover, .search-item.active {
        background: color-mix(in srgb, var(--av-primary) 8%, transparent);
        border-color: color-mix(in srgb, var(--av-primary) 20%, transparent);
        transform: translateX(4px);
    }

    .search-item-icon {
        width: 2.75rem;
        height: 2.75rem;
        border-radius: 0.6rem;
        background: color-mix(in srgb, var(--av-primary) 12%, transparent);
        color: var(--av-primary);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.25rem;
        flex-shrink: 0;
        box-shadow: 0 4px 10px color-mix(in srgb, var(--av-primary) 10%, transparent);
    }

    .search-item-content {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .search-item-title {
        font-weight: 600;
        font-size: 1.05rem;
        margin-bottom: 0.2rem;
    }

    .search-item-desc {
        font-size: 0.85rem;
        color: var(--av-muted);
        line-height: 1.4;
    }

    .search-footer {
        padding: 0.85rem 1.5rem;
        background: color-mix(in srgb, var(--av-surface-2) 40%, transparent);
        border-top: 1px solid color-mix(in srgb, var(--av-border) 60%, transparent);
        display: flex;
        justify-content: flex-end;
        align-items: center;
        gap: 1.5rem;
    }

    .search-kbd-group {
        display: flex;
        align-items: center;
        gap: 0.4rem;
        color: var(--av-muted);
        font-size: 0.75rem;
    }

    .search-kbd-group kbd {
        background: color-mix(in srgb, var(--av-surface) 90%, #fff);
        padding: 0.2rem 0.45rem;
        border-radius: 0.3rem;
        font-family: monospace;
        font-size: 0.75rem;
        border: 1px solid var(--av-border);
        box-shadow: 0 1px 2px rgba(0,0,0,0.05);
        color: var(--av-text);
        font-weight: bold;
    }
</style>

<!-- Global Command Palette Search Modal -->
<div id="searchModal" class="search-modal" onclick="closeSearchModalOnOutside(event)">
    <div class="search-container" id="searchContainer">
        <div class="search-header">
            <i class="fas fa-search search-icon"></i>
            <input type="text" id="searchInput" placeholder="Search across Arctic Vision... (Press '/')" autocomplete="off">
            <button class="search-close" onclick="closeSearchModal()"><i class="fas fa-times"></i></button>
        </div>
        <div class="search-results" id="searchResults">
            <!-- Results injected via JS -->
        </div>
        <div class="search-footer">
            <div class="search-kbd-group">
                <kbd>&uarr;</kbd> <kbd>&darr;</kbd> 
                <span class="lang-id">navigasi</span><span class="lang-en">navigate</span>
            </div>
            <div class="search-kbd-group">
                <kbd>&crarr;</kbd> 
                <span class="lang-id">pilih</span><span class="lang-en">select</span>
            </div>
            <div class="search-kbd-group">
                <kbd>Esc</kbd> 
                <span class="lang-id">tutup</span><span class="lang-en">close</span>
            </div>
        </div>
    </div>
</div>

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

        <div class="navbar-menu">
            <a href="{{ route('welcome') }}">
                <span class="lang-id">Beranda</span>
                <span class="lang-en">Home</span>
            </a>
            <a href="{{ route('monitoring') }}">Monitoring</a>
            <a href="#encyclopedia">
                <span class="lang-id">Ensiklopedia</span>
                <span class="lang-en">Encyclopedia</span>
            </a>
            <a href="{{ route('about') }}">
                <span class="lang-id">Tentang</span>
                <span class="lang-en">About</span>
            </a>
        </div>

        <div style="display: flex; align-items: center; gap: 0.5rem;">
            <!-- Controls that are ALWAYS visible, even on mobile -->
            <button type="button" class="theme-toggle" onclick="openSearchModal()" aria-label="Search" title="Search">
                <i class="fas fa-search"></i>
                <span class="control-text" style="font-size: 0.9rem; font-family: monospace; opacity: 0.7; margin-left: 0.15rem; font-weight: bold;">/</span>
            </button>
            
            <div class="theme-dropdown-container">
                <button type="button" class="theme-toggle" onclick="openLangDropdown()" aria-label="Translate">
                    <i class="fas fa-globe"></i>
                    <span class="control-text" style="font-size: 0.9rem; margin-left: 0.25rem;">
                        <span class="lang-id">ID</span>
                        <span class="lang-en">EN</span>
                    </span>
                    <i class="fas fa-chevron-down chevron-icon" style="font-size: 0.8rem; margin-left: 0.25rem; color: var(--av-muted);"></i>
                </button>
                <div id="langDropdown" class="theme-dropdown-menu">
                    <button class="theme-option lang-opt-id" onclick="setLangOption('id')">
                        <span style="width: 1.5rem; text-align: center; font-weight: bold; font-size: 0.8rem;">ID</span> Indonesia
                    </button>
                    <button class="theme-option lang-opt-en" onclick="setLangOption('en')">
                        <span style="width: 1.5rem; text-align: center; font-weight: bold; font-size: 0.8rem;">EN</span> English
                    </button>
                </div>
            </div>

            <div class="theme-dropdown-container">
                <button type="button" class="theme-toggle" onclick="openThemeDropdown()" aria-label="Pilih tema">
                    <i id="themeIcon" class="fas fa-desktop"></i>
                    <span id="themeText" class="control-text" style="font-size: 0.9rem; margin-left: 0.25rem;">System</span>
                    <i class="fas fa-chevron-down chevron-icon" style="font-size: 0.8rem; margin-left: 0.25rem; color: var(--av-muted);"></i>
                </button>
                <div id="themeDropdown" class="theme-dropdown-menu">
                    <button class="theme-option" onclick="setThemeOption('light')">
                        <i class="fas fa-sun" style="width: 1.25rem; text-align: center;"></i> Light
                    </button>
                    <button class="theme-option" onclick="setThemeOption('dark')">
                        <i class="fas fa-moon" style="width: 1.25rem; text-align: center;"></i> Dark
                    </button>
                    <button class="theme-option" onclick="setThemeOption('system')">
                        <i class="fas fa-desktop" style="width: 1.25rem; text-align: center;"></i> System
                    </button>
                </div>
            </div>

            <!-- Mobile hamburger -->
            <button class="navbar-hamburger" aria-label="Buka menu" onclick="openMobileNav()" style="margin-left: 0.5rem;">
                <i class="fas fa-bars"></i>
            </button>

            @auth
                <div class="navbar-auth">
                    <span style="color: var(--av-text); margin-left: 0.5rem; font-weight: 500;">{{ Auth::user()->name }}</span>
                    <a href="{{ url('/dashboard') }}" class="btn-dashboard">Dashboard</a>
                </div>
            @endauth
        </div>
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
            <div style="font-weight: bold; color: var(--av-primary-2);">Arctic Vision</div>
            <div class="lang-id" style="font-size: 0.875rem; color: var(--av-muted);">Menu Navigasi</div>
            <div class="lang-en" style="font-size: 0.875rem; color: var(--av-muted);">Navigation Menu</div>
            
        </div>
        <a href="{{ route('welcome') }}" onclick="closeMobileNav(event)">
            <i class="fas fa-home"></i>
            <span class="lang-id">Beranda</span>
            <span class="lang-en">Home</span>
        </a>
        <a href="{{ route('monitoring') }}" onclick="closeMobileNav(event)">
            <i class="fas fa-chart-line"></i>
            <span>Monitoring</span>
        </a>
        <a href="#encyclopedia" onclick="closeMobileNav(event)">
            <i class="fas fa-book"></i>
            <span class="lang-id">Ensiklopedia</span>
            <span class="lang-en">Encyclopedia</span>
        </a>
        <a href="{{ route('about') }}" onclick="closeMobileNav(event)">
            <i class="fas fa-info-circle"></i>
            <span class="lang-id">Tentang</span>
            <span class="lang-en">About</span>
        </a>

        @auth
            <div class="sidebar-divider"></div>
            <div style="padding: 0.75rem 0; color: var(--av-text); font-weight: 600;">
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

<div id="themeOverlay" class="theme-dropdown-overlay" onclick="closeAllDropdowns()"></div>

<script>
    function applyThemeUI() {
        const saved = localStorage.getItem('theme') || 'system';
        const isDark = document.documentElement.classList.contains('theme-dark');
        
        let iconClass = 'fas fa-desktop';
        let text = 'System';
        
        if (saved === 'dark') {
            iconClass = 'fas fa-moon';
            text = 'Dark';
        } else if (saved === 'light') {
            iconClass = 'fas fa-sun';
            text = 'Light';
        }

        const icon = document.getElementById('themeIcon');
        const label = document.getElementById('themeText');
        if (icon) icon.className = iconClass;
        if (label) label.textContent = text;

        const iconM = document.getElementById('themeIconMobile');
        const labelM = document.getElementById('themeTextMobile');
        if (iconM) iconM.className = iconClass;
        if (labelM) labelM.textContent = text;

        document.querySelectorAll('.theme-option').forEach(btn => {
            btn.classList.remove('active');
            const btnText = btn.innerText.trim().toLowerCase();
            if (btnText === saved) {
                btn.classList.add('active');
            }
        });
    }

    function setThemeOption(themeMode) {
        if (themeMode === 'system') {
            localStorage.removeItem('theme');
            const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
            document.documentElement.classList.toggle('theme-dark', prefersDark);
        } else {
            localStorage.setItem('theme', themeMode);
            document.documentElement.classList.toggle('theme-dark', themeMode === 'dark');
        }
        applyThemeUI();
        closeAllDropdowns();
    }

    function openThemeDropdown() {
        const menu = document.getElementById('themeDropdown');
        const container = menu.closest('.theme-dropdown-container');
        const isShowing = menu.classList.contains('show');
        
        closeAllDropdowns();
        
        if (!isShowing) {
            menu.classList.add('show');
            if (container) container.classList.add('open');
            const overlay = document.getElementById('themeOverlay');
            if (overlay) overlay.classList.add('show');
        }
    }

    function setLangOption(lang) {
        localStorage.setItem('lang', lang);
        document.documentElement.lang = lang;
        applyLangUI();
        closeAllDropdowns();
    }

    function applyLangUI() {
        const saved = localStorage.getItem('lang') || 'id';
        document.documentElement.lang = saved;
        
        document.querySelectorAll('.lang-opt-id, .lang-opt-en').forEach(btn => btn.classList.remove('active'));
        document.querySelectorAll('.lang-opt-' + saved).forEach(btn => btn.classList.add('active'));
    }

    function openLangDropdown() {
        const menu = document.getElementById('langDropdown');
        const container = menu.closest('.theme-dropdown-container');
        const isShowing = menu.classList.contains('show');
        
        closeAllDropdowns();
        
        if (!isShowing) {
            menu.classList.add('show');
            if (container) container.classList.add('open');
            const overlay = document.getElementById('themeOverlay');
            if (overlay) overlay.classList.add('show');
        }
    }

    function closeAllDropdowns() {
        document.getElementById('themeDropdown')?.classList.remove('show');
        document.getElementById('langDropdown')?.classList.remove('show');
        document.querySelectorAll('.theme-dropdown-container').forEach(c => c.classList.remove('open'));
        document.getElementById('themeOverlay')?.classList.remove('show');
    }

    // Global Command Palette Search Logic
    const searchDataList = [
        {
            title: { id: "Beranda - Purwarupa Ekosistem", en: "Home - Ecosystem Prototype" },
            desc: { id: "Halaman utama beranda visualisasi dan konsep dasar Arctic Vision", en: "Main landing page concept and visualization of Arctic Vision" },
            url: "{{ route('welcome') }}",
            icon: "fas fa-home"
        },
        {
            title: { id: "Monitoring - Data Sensor Realtime", en: "Monitoring - Realtime Sensor Data" },
            desc: { id: "Pantau suhu dan kelembaban langsung dari perangkat mikrokontroler IoT", en: "Monitor live temperature and humidity data from the IoT microcontroller" },
            url: "{{ route('monitoring') }}",
            icon: "fas fa-chart-line"
        },
        {
            title: { id: "Ensiklopedia - Fauna Arktik", en: "Encyclopedia - Arctic Fauna" },
            desc: { id: "Informasi detail, adaptasi lingkungan, dan catatan hewan kutub", en: "Detailed information, environmental adaptation, and records of polar animals" },
            url: "#encyclopedia",
            icon: "fas fa-book"
        },
        {
            title: { id: "Tentang Kami (Profil)", en: "About Us (Profile)" },
            desc: { id: "Misi, visi, edukasi lingkungan dan konsep maket miniatur kami", en: "Our environmental mission, vision, and miniature diorama education concept" },
            url: "{{ route('about') }}",
            icon: "fas fa-info-circle"
        },
        {
            title: { id: "Kebijakan Privasi", en: "Privacy Policy" },
            desc: { id: "Aturan pengumpulan data dan keamanan informasi", en: "Data collection rules and information security" },
            url: "{{ route('privacy-policy') }}",
            icon: "fas fa-shield-alt"
        },
        {
            title: { id: "Syarat & Ketentuan", en: "Terms of Service" },
            desc: { id: "Kesepakatan interaksi dan penggunaan layanan Arctic Vision", en: "Interaction agreement and usage of Arctic Vision services" },
            url: "{{ route('terms-of-service') }}",
            icon: "fas fa-file-contract"
        }
    ];

    let searchSelectedIndex = 0;
    let currentSearchResults = [...searchDataList];

    function openSearchModal() {
        const modal = document.getElementById('searchModal');
        const input = document.getElementById('searchInput');
        modal.style.display = 'flex';
        // Force reflow
        void modal.offsetWidth;
        modal.classList.add('show');
        input.value = '';
        document.body.style.overflow = 'hidden'; // Prevent background scroll
        setTimeout(() => input.focus(), 100);
        renderSearchResults();
    }

    function closeSearchModal() {
        const modal = document.getElementById('searchModal');
        modal.classList.remove('show');
        setTimeout(() => {
            modal.style.display = 'none';
        }, 300);
        document.body.style.overflow = '';
    }

    function closeSearchModalOnOutside(e) {
        if (e.target === document.getElementById('searchModal')) {
            closeSearchModal();
        }
    }

    function renderSearchResults() {
        const container = document.getElementById('searchResults');
        const currentLang = localStorage.getItem('lang') || 'id';
        container.innerHTML = '';

        if (currentSearchResults.length === 0) {
            container.innerHTML = `
                <div style="padding: 2rem; text-align: center; color: var(--av-muted);">
                    <i class="fas fa-search" style="font-size: 2rem; margin-bottom: 1rem; opacity: 0.5;"></i>
                    <p>${currentLang === 'id' ? 'Tidak ada hasil ditemukan.' : 'No results found.'}</p>
                </div>
            `;
            return;
        }

        currentSearchResults.forEach((item, index) => {
            const el = document.createElement('a');
            el.href = item.url;
            el.className = 'search-item' + (index === searchSelectedIndex ? ' active' : '');
            
            // Add native hover switching without stealing focus
            el.addEventListener('mouseenter', () => {
                document.querySelectorAll('.search-item').forEach(i => i.classList.remove('active'));
                el.classList.add('active');
                searchSelectedIndex = index;
            });

            el.innerHTML = `
                <div class="search-item-icon"><i class="${item.icon}"></i></div>
                <div class="search-item-content">
                    <div class="search-item-title">${item.title[currentLang]}</div>
                    <div class="search-item-desc">${item.desc[currentLang]}</div>
                </div>
                <div style="color: var(--av-muted);"><i class="fas fa-chevron-right" style="font-size: 0.8rem; opacity: 0.5;"></i></div>
            `;
            container.appendChild(el);
        });
    }

    document.getElementById('searchInput')?.addEventListener('input', (e) => {
        const query = e.target.value.toLowerCase();
        const currentLang = localStorage.getItem('lang') || 'id';
        
        if (!query.trim()) {
            currentSearchResults = [...searchDataList];
        } else {
            currentSearchResults = searchDataList.filter(item => {
                const searchStr = item.title[currentLang].toLowerCase() + " " + item.desc[currentLang].toLowerCase();
                return searchStr.includes(query);
            });
        }
        
        searchSelectedIndex = 0;
        renderSearchResults();
    });

    // Global Keydown Listeners for UI
    window.addEventListener('keydown', (e) => {
        const searchModal = document.getElementById('searchModal');
        const isOpen = searchModal && searchModal.classList.contains('show');

        // Shortcut to open search (/) or (Ctrl/Cmd + K)
        if ((e.key === '/' || (e.key === 'k' && (e.ctrlKey || e.metaKey))) && document.activeElement.tagName !== 'INPUT' && document.activeElement.tagName !== 'TEXTAREA') {
            e.preventDefault(); // Prevent typing '/' in other fields or native browser search
            if (!isOpen) openSearchModal();
        }

        if (!isOpen) return;

        // Navigation inside modal
        if (e.key === 'Escape') {
            closeSearchModal();
        } else if (e.key === 'ArrowDown') {
            e.preventDefault();
            searchSelectedIndex = (searchSelectedIndex + 1) % currentSearchResults.length;
            renderSearchResults();
            scrollToActiveItem();
        } else if (e.key === 'ArrowUp') {
            e.preventDefault();
            searchSelectedIndex = (searchSelectedIndex - 1 + currentSearchResults.length) % currentSearchResults.length;
            renderSearchResults();
            scrollToActiveItem();
        } else if (e.key === 'Enter' && currentSearchResults.length > 0) {
            e.preventDefault();
            window.location.href = currentSearchResults[searchSelectedIndex].url;
        }
    });

    function scrollToActiveItem() {
        const items = document.querySelectorAll('.search-item');
        if (items[searchSelectedIndex]) {
            items[searchSelectedIndex].scrollIntoView({ block: 'nearest', behavior: 'smooth' });
        }
    }

    // Smart Sticky Navbar Logic
    let sbLastScroll = window.scrollY || document.documentElement.scrollTop;
    const siteNav = document.querySelector('.navbar');
    const isWelcomePage = {{ request()->routeIs('welcome') ? 'true' : 'false' }};

    if (isWelcomePage && sbLastScroll < 20) {
        siteNav.classList.add('navbar-pill');
    }

    window.addEventListener('scroll', () => {
        const currentScroll = window.scrollY || document.documentElement.scrollTop;
        
        if (isWelcomePage) {
            if (currentScroll < 20) {
                siteNav.classList.add('navbar-pill');
            } else {
                siteNav.classList.remove('navbar-pill');
            }
        }

        if (currentScroll > 80) { // Slight threshold before hiding
            if (currentScroll > sbLastScroll) {
                // Scrolling down - hide if we've passed the top area completely
                if (currentScroll > 150) {
                    siteNav.style.transform = 'translateY(-100%)';
                    closeAllDropdowns(); // Clean up dropdowns while scrolling away
                }
            } else {
                // Scrolling up - show
                siteNav.style.transform = 'translateY(0)';
            }
        } else {
            // At top - always show
            siteNav.style.transform = 'translateY(0)';
        }
        sbLastScroll = currentScroll;
    }, { passive: true });

    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
        if (!localStorage.getItem('theme')) {
            document.documentElement.classList.toggle('theme-dark', e.matches);
        }
    });

    function openMobileNav() {
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
        
        // Only remove hidden scroll if modal search isn't open
        if (!document.getElementById('searchModal')?.classList.contains('show')) {
            document.body.style.overflow = '';
        }
    }

    window.onclick = function(event) {
        const modal = document.getElementById('logoModal');
        if (event.target == modal) {
            modal.classList.remove('show');
        }
    }

    applyThemeUI();
    applyLangUI();
</script>
