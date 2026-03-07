<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 50;
        background: rgba(255, 255, 255, 0.85);
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

    @media (min-width: 768px) {
        .navbar-menu {
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
        display: flex;
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
        <div class="navbar-menu">
            <a href="#monitoring">Monitoring</a>
            <a href="#encyclopedia">Encyclopedia</a>
            <a href="#webcams">Live Cams</a>
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

<script>
    function openLogoModal() {
        document.getElementById('logoModal').classList.add('show');
    }

    function closeLogoModal() {
        document.getElementById('logoModal').classList.remove('show');
    }

    // Close modal when clicking outside of it
    window.onclick = function(event) {
        const modal = document.getElementById('logoModal');
        if (event.target == modal) {
            modal.classList.remove('show');
        }
    }
</script>
