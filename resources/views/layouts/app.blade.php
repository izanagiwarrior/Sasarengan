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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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

    <script>
        function starTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById("clock").innerHTML = h + ":" + m + ":" + s;
            var t = setTimeout(starTime, 500);
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + 1
            }; // add zero in front of numbers <10
            return i;
        }

    </script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bg.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="icon" href="https://storeximi.online/wp-content/uploads/2020/12/Logo-1.png" type="image/x-icon">

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="icon" href="images/LOGO.png"
    type="image/x-icon">
</head>

<body onload="starTime()">
    <div class="main">
        <div class="box">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </div>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-transparent shadow-sm">
                <div class="container">
                    <a class="navbar-brand text-white" href="{{ route('home') }}">
                        Sasarengan
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                        </ul>

                        <!-- Center Side Of Navbar -->
                        <ul class="navbar-nav ml-auto mx-auto text-center">
                            <li class="nav-item active">
                                <a class="nav-link text-white" href={{ route('home') }}>HOME</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link text-white" href={{ route('trytowrite') }}>TRY TO
                                    WRITE</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link text-white" href={{ route('about') }}>ABOUT</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link text-white" href={{ route('terms') }}>TERMS</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link text-white" href={{ route('history') }}>FEEDBACK</a>
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
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
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
    </div>
    <script src="https://unpkg.com/pdfobject@2.2.4/pdfobject.min.js"></script>
    <script>
        var clickHandler = function(e) {

            e.preventDefault();

            var pdfURL = this.getAttribute("href");

            var options = {
                pdfOpenParams: {
                    navpanes: 0,
                    toolbar: 0,
                    statusbar: 0,
                    view: "FitV"
                }
            };

            var myPDF = PDFObject.embed(pdfURL, "#pdf", options);

            var el = document.querySelector("#results");
            el.setAttribute("class", (myPDF) ? "success" : "fail");
            el.innerHTML = (myPDF) ? "PDFObject successfully embedded '" + pdfURL + "'!" :
                "Uh-oh, the embed didn't work.";

        };

        var a = document.querySelectorAll(".embed-link");

        for (var i = 0; i < a.length; i++) {
            a[i].addEventListener("click", clickHandler);
        }

    </script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
</body>

</html>
