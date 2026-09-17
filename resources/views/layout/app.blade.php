<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'mini-web')</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <nav class="navbar" aria-label="Navigasi utama">
        <div class="navbar-content">
            <a href="{{ route('index') }}" class="navbar-link" @if(request()->routeIs('index')) aria-current="page" @endif>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="m3 10 9-7 9 7M5 9v12h14V9M9 21v-8h6v8" />
                </svg>
                Home
            </a>
            <a href="{{ route('news') }}" class="navbar-link" @if(request()->routeIs('news')) aria-current="page" @endif>News</a>
        </div>
    </nav>

    <header class="h-section">
        <div class="h-content">
            <div>
                <div class="container-info">
                    <span class="menu-submenu">Menu / Submenu</span>
                </div>
                <h1 class="main-title">@yield('heading', 'SEJARAH DESA MELUNG')</h1>
                <p class="sub-title">Website Resmi Desa Melung</p>
                @if(request()->routeIs('index'))
                    <div class="back">
                        <a href="{{ route('news') }}">Lihat Berita Lain</a>
                    </div>
                @endif
            </div>
        </div>
    </header>

    <main class="main-section">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="footer-content">

            <h3>Desa Melung</h3>
            <p>Website Resmi Desa Melung, Kabupaten Banyumas.</p>
            <div class="footer-line"></div>
            <small>© 2026 Pemerintah Desa Melung. Hak Cipta Dilindungi.</small>
        </div>
    </footer>
</body>
</html>
