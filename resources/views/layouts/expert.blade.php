<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <!-- <base href="/"> -->

    <title>Эксперт</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Template Basic Images Start -->
    <meta property="og:image" content="path/to/image.jpg">
    <link rel="icon" href="/img/favicon/favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon-180x180.png">
    <!-- Template Basic Images End -->

    <!-- Custom Browsers Color Start -->
    <meta name="theme-color" content="#000">
    <!-- Custom Browsers Color End -->


    <link rel="stylesheet" href="/libs/slick/slick.css">
    <link rel="stylesheet" href="/libs/animate/animate.min.css">
    <link rel="stylesheet" href="/libs/popup/magnific-popup.css">

    <link rel="stylesheet" href="/css/main.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,600i,700&display=swap&subset=cyrillic" rel="stylesheet">
    <script type="text/javascript">
        function load()
        {
            window.location.hash="reviews";
        }
    </script>
</head>

<body>
<!-- Header -->
<header class="header" id="header">
    <div class="header__wrapper">

        <a href="/main" class="logo">
            <img src="/img/logo.png" class="img-responsive" alt="#">
            <div class="logo__text">
                <h2>ЭКСПЕРТ</h2>
                <span>Центр дополнительного образования</span>
            </div>
        </a>

        <div class="mob-burger" id="mob-burger">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <nav class="header__menu" id="header-menu-js">
            <ul class="menu">
                <li class="menu__item">
                    <a href="/">
                        Главная
                    </a>
                </li>
                <li class="menu__item scroll-link">
                    <a href="/#programs">
                        Курсы
                    </a>
                </li>
                <li class="menu__item">
                    <a href="/pages/diplom">
                        Диплом
                    </a>
                </li>
                <li class="menu__item">
                    <a href="/pages/license">
                        Лицензия
                    </a>
                </li>
                <li class="menu__item scroll-link">
                    <a href="/#reviews">
                        Отзывы
                    </a>
                </li>
                <li class="menu__item">
                    <a href="/pages/news">
                        Новости
                    </a>
                </li>
                <li class="menu__item">
                    <a href="/pages/contact">
                        Контакты
                    </a>
                </li>
            </ul>

            <div class="menu__btn">
                <a href="#login-popup" class="btn__signUp popup">
                    Вход
                </a>
            </div>
        </nav>

        <div class="header__btn">
            <a href="#login-popup" class="btn__signUp popup">
                Вход
            </a>
        </div>

    </div>
</header>
<div class="mob-menu__bg"></div>
<!-- End Header -->

<!-- Main -->

<!-- End Main -->

@include('common.errors')
@component('common.alert')
@yield('content')

<footer class="footer" id="footer">
    <div class="footer__wrapper">
        <div class="row">
            <div class="col-12 col-md-5 col-xl-3">
                <a href="/" class="logo">
                    <div class="logo__img">
                        <img src="/img/logo.png" class="img-responsive" alt="#">
                    </div>
                    <div class="logo__text">
                        <h2>ЭКСПЕРТ</h2>
                        <span>Центр дополнительного образования</span>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 d-none d-xl-block">
                <nav>
                    <ul class="footer-menu">
                        <li class="footer-menu__item">
                            <a href="/">
                                Главная
                            </a>
                        </li>
                        <li class="footer-menu__item">
                            <a href="/pages/license">
                                Лицензия
                            </a>
                        </li>
                        <li class="footer-menu__item">
                            <a href="/pages/news">
                                Новости
                            </a>
                        </li>
                        <li class="footer-menu__item scroll-link">
                            <a href="/#programs">
                                Курсы
                            </a>
                        </li>
                        <li class="footer-menu__item scroll-link">
                            <a href="/#reviews">
                                Отзывы
                            </a>
                        </li>
                        <li class="footer-menu__item">
                            <a href="/pages/diplom">
                                Диплом
                            </a>
                        </li>
                        <li class="footer-menu__item">
                            <a href="/pages/contact">
                                Контакты
                            </a>
                        </li>
                    </ul>
                </nav>
                <a href="pages/license" class="footer__license">
                    Лицензия номер 08972 от 29.03.2019
                </a>
            </div>
            <div class="col-12 col-md-7 col-xl-5 ">
                <div class="footer__numbers">
                    <a href="tel:+7(929)8358777">
                        +7 (929) 83 58 777
                    </a>
                    <a href="tel:+7(961)5858995">
                        +7 (961) 58 58 995
                    </a>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                    <div class="footer__soc">
                        <a href="#" class="footer__soc_vk">
                        </a>
                        <a href="#" class="footer__soc_ins">
                        </a>
                    </div>
                    <a href="#call-popup" class="footer__btn btn popup">
                        Записаться
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Popup -->
<div class="popup-modal mfp-hide form-popup" tabindex="-1" id="login-popup">
    <div class="close close-popup"></div>
    <div class="wrapper">
        <form class="form-signin" method="POST" action="/panel/login">
            @csrf
            <h2 class="form-signin-heading text-center">
                Вход в личный кабинет
            </h2>
            <div class="form-control">
                <input type="text" name="email" placeholder="Логин" required=""/>
            </div>
            <div class="form-control">
                <input type="password" class="" name="password" placeholder="Пароль" required=""/>
            </div>
            <button class="btn" type="submit">Войти</button>
        </form>
    </div>
</div>

<div class="popup-modal mfp-hide form-popup" tabindex="-1" id="call-popup">
    <div class="close close-popup"></div>
        <form class="form-signin" action="/enroll" method="post">
            @csrf
        <h2 class="form-signin-heading text-center">
            Запись на курс
        </h2>
        <div class="form-control">
            <input type="text" name="name" placeholder="Алина" required=""/>
        </div>
        <div class="form-control">
            <input type="phone" class="" name="phone" placeholder="79009000090" required=""/>
{{--            <div class="g-recaptcha" data-sitekey="6LcQuMkUAAAAAGFCreb-TAQeED6p6_XeVOUqtiIZ"></div>--}}
        </div>
        <button class="btn" type="submit">Записаться!</button>
    </form>
</div>

<script src="/js/scripts.min.js"></script>
<script src="/libs/slick/slick.min.js"></script>
<script src="/libs/wow/wow.min.js"></script>
<script src="/libs/popup/jquery.magnific-popup.min.js"></script>

<script src="/js/common.js"></script>
{{--<script src="https://www.google.com/recaptcha/api.js" async defer></script>--}}
</body>
</html>

