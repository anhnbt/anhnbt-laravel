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
</head>
<body>
    <div class="wrapper">
        <header id="masthead" class="site-header">
            <nav>
                <div class="container">
                    <!-- Top Navigation Menu -->
                    <div class="navbar" id="myTopnav">
                        <a href="/">{{ config('app.name', 'AnhNBT') }}</a>
                        <a class="font-weight-bold" href="/ky-tu-dac-biet">Kí tự đặc biệt</a>
                        <a href="/tao-chu-dam-nghieng">Chữ in đậm</a>
                        <a href="/ten-game-hay">Tên game hay</a>
                        <a href="/ki-tu-dac-biet-chu-nho.html">Tạo chữ nhỏ</a>
                        <a href="javascript:void(0);" class="icon active" onclick="toggleNav();">
                            Menu
                        </a>
                    </div>
                </div><!-- /.container -->
            </nav>
        </header><!-- .site-header -->

        <main>
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
