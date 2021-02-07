<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
</head>
<body>
    <div class="wrapper">
        <header id="masthead" class="site-header">
            <div class="container">
                <a href="/" aria-label="AnhNBT Logo"><img src="{{ asset('images/logo-anhnbt.png') }}" alt="AnhNBT logo" width="120" height="26"></a>
                
                <nav class="main-nav" aria-label="Main menu">
                    <ul class="main-menu" id="main-menu-toggle">
                        <li><a href="javascript:void(0)" class="main-menu-toggle" onclick="toggleNav();" aria-haspopup="true" aria-label="Show Menu">☰</a></li>
                        <li><a class="font-weight-bold" href="/vi-vn/ki-tu-dac-biet.html">Kí tự đặc biệt</a></li>
                        <li><a href="/vi-vn/chu-in-dam.html">Chữ in đậm</a></li>
                        <li><a href="/vi-vn/ten-game-hay.html">Tên game hay</a></li>
                        <li><a href="/vi-vn/chu-nho.html">Tạo chữ nhỏ</a></li>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropbtn">Tạo chữ nhỏ ▼</a>
                            <div class="dropdown-content">
                                <a href="#">Link 1</a>
                                <a href="#">Link 2</a>
                                <a href="#">Link 2</a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div><!-- /.container -->
        </header><!-- .site-header -->

        <main>
            @yield('content')
        </main>
        <footer class="site-footer bg-light p-1">
            <div class="container">
                <p>© Copyright 2021 by <a href="https://anhnbt.com/">AnhNBT</a> v1.5.2</p>
                <nav id="secondarynav" aria-label="Secondary menu">
                    <a href="/vi-vn/lien-he.html" rel="nofollow">Liên hệ</a> · 
                    <a href="/vi-vn/gioi-thieu.html" rel="nofollow">Giới thiệu</a> · 
                    <a href="/vi-vn/dieu-khoan-su-dung.html" rel="nofollow">Điều khoản sử dụng</a> · 
                    <a href="/vi-vn/chinh-sach-bao-mat.html" rel="nofollow">Chính sách bảo mật</a>
                </nav>
            </div>
        </footer>
    </div>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
