<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <title>@yield('page-name', '')</title>

    <!-- Fonts -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-57NMV3R');</script>
    <!-- End Google Tag Manager -->
    <script src="//code.jivosite.com/widget.js" data-jv-id="y9wX3PlXDE" async></script>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-57NMV3R"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager -->
<div class="body__content">
    <header class="header">
        <div class="container headerWrap">
            <div class="logo"><a href="/"><img src="{{ asset('img/logo.png') }}" alt="logo"></a></div>
            <ul class="navWrap">
                <li class="nav"><a href="/">{{ __('layout.about') }}</a></li>
                <li class="nav"><a href="/services">{{ __('layout.services') }}</a></li>
                <li class="nav"><a href="/pricing">{{ __('layout.pricing') }}</a></li>
                <li class="nav"><a href="/contacts">{{ __('layout.contacts') }}</a></li>
                <li class="nav"><a href="/news">{{ __('layout.news') }}</a></li>
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
                <li class="menu-item"><a href="/">{{ __('layout.about') }}</a></li>
                <li class="menu-item"><a href="/services">{{ __('layout.services') }}</a></li>
                <li class="menu-item"><a href="/pricing">{{ __('layout.pricing') }}</a></li>
                <li class="menu-item"><a href="/contacts">{{ __('layout.contacts') }}</a></li>
                <li class="menu-item"><a href="/news">{{ __('layout.news') }}</a></li>
            </ul>
        </div>

    </header>

    <div class="main-content container">
        @yield('content')
    </div>

    <footer class="footer">
        © 2019 All Rights Reserved.
    </footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
</body>
</html>
