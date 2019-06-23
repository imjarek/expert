<!DOCTYPE html>
<!-- saved from url=(0048)https://getbootstrap.com/docs/4.0/examples/blog/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.jpeg">

    <title>Центр дополнительного образования "Эксперт" - @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>

<div class="container" id="top">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <img src="/images/logo.png">
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="/about">ЦДО "Эксперт"</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="text-muted" href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
                </a>
                <a class="btn btn-lg btn-outline-secondary" href="/main/#enroll">Записаться на курс</a>
            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a class="p-2 text-muted" href="/main#about">О нас</a>
            <a class="p-2 text-muted" href="/main#courses">Курсы</a>
            <a class="p-2 text-muted" href="/pages/schedule">Расписание</a>
            <a class="p-2 text-muted" href="/main#teachers">Преподаватели</a>
            <a class="p-2 text-muted" href="/pages/licences">Лицензия</a>
            <a class="p-2 text-muted" href="/pages/contacts">Контакты</a>
        </nav>
    </div>

</div>


<main role="main" class="container">

    @include('common.errors')
    @component('common.alert')
    @yield('content')

</main><!-- /.container -->


<footer class="blog-footer">
    <p>ЦДО "Эксперт" (с) 2019<p>
        <a href="#top">Наверх</a>
    </p>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/holder.min.js"></script>
<script src="/js/main.js"></script>
<script>
  Holder.addTheme('thumb', {
    bg: '#55595c',
    fg: '#eceeef',
    text: 'Thumbnail'
  });
</script>


<svg xmlns="http://www.w3.org/2000/svg" width="200" height="250" viewBox="0 0 200 250" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="13" style="font-weight:bold;font-size:13pt;font-family:Arial, Helvetica, Open Sans, sans-serif">Thumbnail</text></svg></body></html>