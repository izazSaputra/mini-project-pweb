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
    <header class="h-section">
        <div class="h-content">
            <div>
                <div class="container-info">
                    <span class="menu-submenu">Menu / Submenu</span>
                </div>
                <h1 class="main-title">SEJARAH DESA MELUNG</h1>
                <p class="sub-title">Website Resmi Desa Melung</p>
                <div class="back">
                    <a href="article.html">Lihat Berita Lain</a>
                </div>
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