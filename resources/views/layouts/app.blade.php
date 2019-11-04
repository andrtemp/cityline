<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">

    <title>@yield('page-name', 'City Line')</title>

    <!-- Fonts -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</head>
<body>
<div class="body__content">
    <header class="header">
        <div class="container headerWrap">
            <div class="logo"><img src="{{ asset('img/logo.png') }}" alt="logo"></div>
            <ul class="navWrap">
                <li class="nav"><a href="/">Про мене</a></li>
                <li class="nav"><a href="/services">Послуги</a></li>
                <li class="nav"><a href="/pricing">Ціни</a></li>
                <li class="nav"><a href="/contacts">Контакти</a></li>
                <li class="nav"><a href="/news">Новини</a></li>
            </ul>
        </div>
        <div class="menuBurger">
            <div class="burger-container">
                <div id="burger">
                    <div class="bar topBar"></div>
                    <div class="bar btmBar"></div>
                </div>
            </div>
            <ul class="menu">
                <li class="menu-item"><a href="/">Про мене</a></li>
                <li class="menu-item"><a href="/services">Послуги</a></li>
                <li class="menu-item"><a href="/pricing">Ціни</a></li>
                <li class="menu-item"><a href="/contacts">Контакти</a></li>
                <li class="menu-item"><a href="/news">Новини</a></li>
            </ul>
        </div>

    </header>

    <div class="page__content">
        <div class="main-content">
            @yield('content')
        </div>
    </div>

    <footer class="footer">
        © 2019 All Rights Reserved.
    </footer></div>
</body>
</html>
