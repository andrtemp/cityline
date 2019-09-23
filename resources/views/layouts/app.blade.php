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
    <header class="header-custom">
        <div class="container">
            <div class="navbar">
                <div class="col-md-4">
                    <a href="/">
                        <img class="navbar-brand brand-logo" src="{{ asset('img/logo.png') }}" alt="Логотип">
                    </a>
                </div>
                <div class="col-md-8 pull-right">
                    <div class="row">
                        <form class="form-inline">
                            @csrf
                            <label>
                                <span class="m-2">Логин</span>
                                <input class="form-control" type="text" placeholder="Логин"/>
                            </label>
                            <label>
                                <span class="m-2">Пароль</span>
                                <input class="form-control" type="password" placeholder="Пароль"/>
                            </label>
                            <button class="btn ml-3 btn-danger" type="submit">
                                Войти
                            </button>
                        </form>
                    </div>
                    <nav class="navbar">
                        <ul class="nav navigation-menu">
                            <li class="nav-item">
                                <a href="{{ route('about') }}">О нас</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('services') }}">Услуги</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('sales') }}">Акции</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('news') }}">Новости</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('pricing') }}">Цены</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('contacts') }}">Контакты</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="page__content">
        @yield('start-full-screen')
        <div class="main-content">
            @yield('content')
        </div>
        @yield('end-full-screen')
    </div>

    <footer class="page-footer footer-custom">
        <div class="container">
            <div class="footer__row">
                <div class="section__phones">
                    <p><i class="fa fa-phone-square footer__icon mr-3"></i>099-734-999-1</p>
                    <p><i class="fa fa-phone-square footer__icon mr-3"></i>071-304-74-74</p>
                </div>
                <div class="section__addresses">
                    <p><i class="fa fa-envelope footer__icon mr-3"></i>mail@mail.ua</p>
                    <p><i class="fa fa-map-marker footer__icon mr-3"></i>Париж, Елисейчкие поля, 1</p>
                </div>
                <div class="section__icons">
                    <div>
                        <a class="footer__icon" href="http://instagram.com" target="_blank">
                            <i class="fa fa-instagram">
                            </i>
                        </a>
                        <a class="footer__icon" href="http://facebook.com" target="_blank">
                            <i class="fa fa-facebook">
                            </i>
                        </a>
                        <a class="footer__icon" href="http://vk.com" target="_blank">
                            <i class="fa fa-vk">
                            </i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright -->
        <p class="footer-copyright text-center">&copy; {{ date('Y') }}</p>
        <!-- Copyright -->
    </footer>
</div>
</body>
</html>
