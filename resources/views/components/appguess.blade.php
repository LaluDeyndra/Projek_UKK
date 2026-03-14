<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Arctic Vision' }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    {{ $styles ?? '' }}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('components.navbar')

    <main>
        {{ $slot }}
    </main>

    <footer class="footer" style="background: #111827; color: white; text-align: center; padding: 2rem 1.5rem;">
        <p>&copy; 2026 Arctic Vision. Semua hak dilindungi.</p>
    </footer>
</body>

</html>
