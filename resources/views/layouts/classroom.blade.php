
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <title>@yield('title')</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/classroom/classroom.css" rel="stylesheet">
    <script src="/js/classroom.js"></script>
    <link href="/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
</head>

<body>

<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">{{ $user->fullname }}</h4>
                    <p class="text-muted">Вы находитесь в Вашем личном учебном классе. Здесь располагаются Ваши учебные материалы</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Есть вопросы? Свяжитесь с нами</h4>
                    <ul class="list-unstyled">
                        <p class="text-white">Телефон: {{ env("PHONE_TO") }}</p>
                        <li><a href="/pages/contact" class="text-white">Контакты</a></li>
                        <li><a href="/panel/logout" class="text-white">Выйти</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <i class="fa fa-gear"></i>
                <strong>Учебный класс</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>

<main role="main">

    @include('common.errors')
    @component('common.alert')
    @yield('content')

</main>

<footer class="text-muted">
    <div class="container">
        <p class="float-right">
            <a href="#">Наверх</a>
        </p>
        <p>Все материалы защищены авторским правом <a href="/main">Эксперт </a> &copy; @php echo date("Y"); @endphp</p>
    </div>
</footer>

<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/holder.min.js"></script>
<script src="/js/main.js"></script>
</body>
</html>
