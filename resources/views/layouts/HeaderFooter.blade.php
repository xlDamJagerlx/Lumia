<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Lumia') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/scriptensamblajepc.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stylesheader.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm fixed-top row" style="background: #dbdbdb; ">
            <div class="container col col-12">
                <div class="row">
                    <div class="navegador-img col col-4">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ asset('img/Lumia-logo.png') }}" class="logo" width="50%">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse col col-8" id="navbarSupportedContent">
                    <form class="formulario-busqueda navegadpr-buscador">
                            <div class="input-group">
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search" id="buscador">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="submit" id="botonbusqueda">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->

                            @guest
                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><button type="button" class="btn btn-secondary"><i class="bi bi-person"></i></button></a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}"><button type="button" class="btn btn-secondary"><i class="bi bi-person-plus"></i></button></a>
                            </li>
                            @endif

                            @else

                            <li class="nav-item dropdown">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <button type="button" class="btn btn-secondary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16">
                                            <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z" />
                                            <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z" />
                                        </svg>
                                    </button>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><button type="button" class="btn btn-secondary"><i class="bi bi-cart2"></i></button></a>
                            </li>
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <button type="button" class="btn btn-secondary">{{ Auth::user()->name }}</button>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
            <nav class="navegador3 text-center col col-12">
                <ul>
                    <li><a href="{{ url('/') }}">Inicio</a></li>
                    <li><a href="#">Multimedia</a></li>
                    <li><a href="#">Catálogo</a></li>
                </ul>
            </nav>


        </nav>


        <main class="py-4" style="margin-top: 8rem;">
            @yield('content')
        </main>
    </div>
</body>
<div class="container-footer" style="clear: left;">
        <footer class="page-footer font-small indigo text-white" style="background: rgb(97, 97, 97);">
            <div class="container">
                <div class="row text-center d-flex justify-content-center pt-5 mb-3">
                    <div class="col-md-2 mb-3">
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="bi bi-facebook"></i></a>
                    </div>
                    <div class="col-md-2 mb-3">
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="bi bi-twitter"></i></a>
                    </div>
                    <div class="col-md-2 mb-3">
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="bi bi-google"></i></a>
                    </div>
                    <div class="col-md-2 mb-3">
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="bi bi-instagram"></i></a>
                    </div>
                    <div class="col-md-2 mb-3">
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <hr class="rgba-white-light" style="margin: 0 15%;">


                <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">
                    <div class="col-md-8 col-12 mt-5">
                        <h5 class="font-weight-bold text-uppercase ">Sobre nosotros</h5>
                        <p style="line-height: 1.7rem">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Perferendis dolorem officia voluptatibus saepe modi. Explicabo est beatae
                            necessitatibus
                            autem dignissimos aut excepturi dolor? Assumenda ratione et consequatur vero
                            explicabo
                            molestiae.</p>
                    </div>

                </div>


                <div class="row d-flex justify-content-center">
                    <div class="col-md-5 col-12">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Correo electrónico" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-dark" type="button">Subcríbete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2021 Copyright:
                <a class="text-white" href="#">Lumia</a>
            </div>
        </footer>

    </div>
    <!-- Footer -->
</html>