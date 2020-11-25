<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <title>{{ config('app.name', 'Lavender') }}</title> -->
    <title>Лаванда</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <!-- <link href="../../public/css/app.css" rel="stylesheet"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Главная</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Вход</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Регистрация</a>
            @endif
            @endauth
        </div>
        @endif
    </div>





    <h1 class="site-heading text-center text-primary d-none d-lg-block">
        <span class="site-heading-lower">Лаванда в Запорожье</span>
    </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
        <div class="container">
            <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Лаванда в Запорожье</a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="index.html">Главная
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="about.html">О нас</a>
                    </li>
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="products.html">Правила</a>
                    </li>
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-expanded" href="store.html">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="page-section">
        <div class="container">
            <div class="card mb-3" style="border: 2px solid #7e179a">
                <div class="row no-gutters bg-primary">
                    <div class="col-md-5 img-center p-5">
                        <img src="/images/purple-flower.jpg" class="card-img round" alt="foto of lavender">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Аренда лавандового поля</h5>
                            <p class="mb-3"> В 2020 году открывается аренда лавандового поля для фотосеcсий.</p>
                            <p>Попасть на цветущее лавандовое поле можно
                                только по предварительному бронированию. </p>
                            <p> Бронирование открывается за 2-3 недели до начала цветения лаванлды. </p>
                            <p> Стоимость аренды поля - 500 грн/час. </p>
                            <p> Режим роботи поля: з 5.00 до 21.00. </p>
                            <p> Бронирование только онлайн после 100% предоплаты. </p>
                            <p> Перед бронированием просим ознакомиться с правилами аренды поля! </p>
                            <div class="intro-button mx-auto">
                                <a class="btn btn-secondary text-white btn-signup" href="#">Записаться</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col mx-auto">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="border: 2px solid #7e179a">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/images/carousel/carousel-1.jpg" class="d-block w-100" alt="foto1">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/carousel/carousel-2.jpg" class="d-block w-100" alt="foto2">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/carousel/carousel-3.jpg" class="d-block w-100" alt="foto3">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/carousel/carousel-4.jpg" class="d-block w-100" alt="foto4">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/carousel/carousel-5.jpg" class="d-block w-100" alt="foto5">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/carousel/carousel-6.jpg" class="d-block w-100" alt="foto6">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/carousel/carousel-7.jpg" class="d-block w-100" alt="foto7">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/carousel/carousel-8.jpg" class="d-block w-100" alt="foto8">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/carousel/carousel-9.jpg" class="d-block w-100" alt="foto9">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/carousel/carousel-10.jpg" class="d-block w-100" alt="fot10">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/carousel/carousel-11.jpg" class="d-block w-100" alt="foto11">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/carousel/carousel-12.jpg" class="d-block w-100" alt="foto12">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/carousel/carousel-13.jpg" class="d-block w-100" alt="foto13">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer text-faded text-center py-5">
        <div class="container">
            <p class="m-0 small">Copyright &copy; B&amp;G 2020</p>
        </div>
    </footer>
</body>

</html>