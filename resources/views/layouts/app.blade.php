<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sasarengan</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <style>
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;

        }

        .form-group {
            margin: 20px 250px; // for left and right margin
            margin: 250px 0; // form top and bottom margin

        }

    </style>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="icon" href="https://i.pinimg.com/originals/93/7c/ae/937cae3efeb1484526a5bb6d4d8bdb3a.jpg"
        type="image/x-icon">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    Sasarengan
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>

                    <!-- Center Side Of Navbar -->
                    <ul class="navbar-nav ml-auto mx-auto text-center">
                        <li class="nav-item active">
                            <a class="nav-link text-dark font-weight-bold" href={{ route('home') }}>HOME</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link text-dark font-weight-bold" href={{ route('product') }}>PRODUCT</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link text-dark font-weight-bold" href={{ route('trytowrite') }}>TRY TO WRITE</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link text-dark font-weight-bold" href={{ route('about') }}>ABOUT</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link text-dark font-weight-bold" href={{ route('terms') }}>TERMS</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link text-dark font-weight-bold" href={{ route('history') }}>HISTORY</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
