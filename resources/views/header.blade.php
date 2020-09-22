<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>UNI Maribor Grand Prix Engineering</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    {{--<!-- Material Design Bootstrap -->--}}
    <link href="{{ asset('css/mdb.css') }}" rel="stylesheet">
    {{--<!-- Your custom styles (optional) -->--}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style type="text/css">
        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #a20000 !important;
            }
        }

    </style>
</head>

<body>
<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
            <img height="40px" src="images/GPE_logo.png">
{{--            <strong>UNI Maribor GPE</strong>--}}
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Left -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Domov
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route("ekipa")}}">O ekipi</a>
                </li>
                <div class="dropdown">
                    <button class="dropbtn">Dirkalniki</button>
                    <div class="dropdown-content">
                        @foreach ($formulas as $formula)
                            <a class="nav-link" href="#">{{$formula->official_name}} </a>
                        @endforeach
                    </div>
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="https://mdbootstrap.com/education/bootstrap/" target="_blank">Novice</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://mdbootstrap.com/education/bootstrap/" target="_blank">Za sponzorje</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://mdbootstrap.com/education/bootstrap/" target="_blank">Kontakt</a>
                </li>
            </ul>

            <!-- Right -->
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a href="https://www.facebook.com/mdbootstrap" class="nav-link" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://twitter.com/MDBootstrap" class="nav-link" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                {{--                <li class="nav-item">--}}
                {{--                    <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="nav-link border border-light rounded"--}}
                {{--                       target="_blank">--}}
                {{--                        <i class="fab fa-github mr-2"></i>MDB GitHub--}}
                {{--                    </a>--}}
                {{--                </li>--}}
            </ul>

        </div>

    </div>
</nav>
<!-- Navbar -->
