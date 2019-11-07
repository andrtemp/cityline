<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Админ панель</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</head>
<body>
<header class="header-custom">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="btn btn-default mr-3" href="{{ route('admin-news') }}">Новости</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary mr-3" href="{{ route('admin-news-form') }}">
                        Создать новость
                    </a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-primary" type="submit">
                            Выйти
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="admin__body">
    @yield('content')
</div>
</body>
</html>
