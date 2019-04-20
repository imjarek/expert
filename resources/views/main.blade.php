<!DOCTYPE html>
<!-- saved from url=(0048)https://getbootstrap.com/docs/4.0/examples/blog/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.jpeg">

    <title>Центр дополнительного образования "Эксперт" - Курсы подготовки фитнес-тренеров</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/css" rel="stylesheet">
    <link href="./css/app.css" rel="stylesheet">
</head>

<body>

<div class="container" id="top">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <img src="images/logo.png">
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="/about">ЦДО "Эксперт"</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="text-muted" href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
                </a>
                <a class="btn btn-lg btn-outline-secondary" href="#enroll">Записаться на курс</a>
            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a class="p-2 text-muted" href="#about">О нас</a>
            <a class="p-2 text-muted" href="#courses">Курсы</a>
            <a class="p-2 text-muted" href="#schedule">Расписание</a>
            <a class="p-2 text-muted" href="#teachers">Преподаватели</a>
            <a class="p-2 text-muted" href="#licences">Лицензии</a>
            <a class="p-2 text-muted" href="#contacts">Контакты</a>
        </nav>
    </div>

    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark fitness">
        <div class="col-md-8 px-0">
            <div class="main-banner-title">
                <h2 class="display-4 font-italic">Центр дополнительного образования "ЭКСПЕРТ" предлагает Вам стать дипломированным фитнес-тренером</h2>
                <p class="lead my-3">Мы проводим образовательные курсы по подготовке фитнес-инструкторов с выдачей лицензированных Сертификатов, Свидетельств о дополнительном образовании, а также Удостоверений о повышении квалификации.</p>
                <p class="lead mb-0"><a href="#about" class="text-white font-weight-bold">Узнать больше...</a></p>
            </div>
        </div>
    </div>
    <a id="courses"></a>
    <div class="row mb-2">
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-400">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">Курс</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="/courses/child-fitness">Детский фитнес</a>
                    </h3>
                    <h4 class="mb-0">
                        дети 3-6 лет
                    </h4>
                    <div class="mb-1 text-muted">24 часа</div>
                    <p class="card-text mb-auto">Структура курса:
                        1 день.
                        1. Анатомо-физиологические особенности детей 3-6 лет.
                        2. Особенности развития физических качеств детей 3-6 лет.
                        3. Структура и содержание занятий по детском фитнесу.
                    </p>
                    <a href="/courses/child-fitness">Узнать больше</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="" alt="" style="width: 200px; height: 250px;" src="/images/child.jpg" data-holder-rendered="true">
            </div>
        </div>
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-400">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success">Курс</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="/courses/aero-step">Базовая аэробика / степ</a>
                    </h3>
                    <h4 class="mb-0">
                        (начальный уровень)
                    </h4>
                    <div class="mb-1 text-muted">4 дня 24 академических часа</div>
                    <p class="card-text mb-auto">
                        1 день
                        1. История создания и развития базовой и степ-аэробики.
                        2.
                        3. Музыкальное сопровождение в аэробике.
                        4. Основные шаги базовой аэробики.
                        2 день
                        1. Основные шаги степ-аэробики.
                    </p>
                    <a href="/courses/aero-step"></a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="" alt="" src="images/step-aero.jpg" data-holder-rendered="true" style="width: 200px; height: 250px;">
            </div>
        </div>
    </div>
</div>

<main role="main" class="container" id="enroll">
        <div class="enroll-form">
            <h2>Записаться на курс!</h2>
            <form class="form" method="post" action="/enroll">
                <div class="form-group">
                    <div class="row" >
                        <div class="col-md-3">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Укажите электронную почту">
                        </div>
                        <div class="col-md-3">
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Введите Ваше имя">
                        </div>
                        <div class="col-md-3">
                            <select class="form-control">
                                <option>Детский фитнес (дети 3-6 лет)</option>
                                <option>Детский фитнес (дети 7-10 лет)</option>
                                <option>Фитнес в перинатальном периоде</option>
                                <option>Фитнес-йога</option>
                                <option>Базовая аэробика / степ" (начальный уровень)</option>
                                <option>Силовой / функциональный тренинг</option>
                                <option>Стретчинг</option>
                                <option>Диагностика физического состояния в фитнесе</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary">Записаться!</button>
                        </div>
                     </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row" id="about">
        <div class="col-md-8 blog-main">
            <h3 class="pb-3 mb-4 font-italic border-bottom">
                Почему Вам стоит записаться на наши курсы?
            </h3>

            <div class="blog-post">
                <h3>Преимущества обучения в "Центре дополнительного образования "ЭКСПЕРТ"</h3>
                <ul>
                    <li>Обучение проводят фитнес-эксперты, имеющие опыт работы и преподавания в сфере фитнеса более 15 лет
                    </li>
                    <li>Образовательные курсы лицензированы Министерством образования, науки и молодежной политики Краснодарского края</li>
                    <li>По окончании всем участникам выдается <em><a>СЕРТИФИКАТ</a></em> о прохождении семинара</li>
                    <li>Успешно сдавшим экзамен выдается СВИДЕТЕЛЬСТВО О ДОПОЛНИТЕЛЬНОМ ОБРАЗОВАНИИ (при обучении по курсам объемом 24 часа и более)
                    <li>Если Вы по каким-либо причинам не сдаете экзамен, все пересдачи бесплатны</li>
                    <li>Имеющим среднее специальное или высшее физкультурное образование есть возможность получить <em><a>УДОСТОВЕРЕНИЕ</a></em> о повышении квалификации</li>
                    <li>Cеминары проводятся преимущественно в выходные 	дни, Вам не придется отпрашиваться с работы или отменять занятия</li>
                    <li>Образовательные курсы длительностью более двух дней	разбиваются на две-три части, для того,	чтобы Вы успели подробно изучить теоретический материал, попробовать проводить комплексы упражнений, сформулировать возникшие вопросы и задать их на второй части курса</li>
                    <li>Вы получаете все необходимые методические материалы, а также музыку для проведения занятий</li>
                    <li>В случае если Вы опытный фитнес-тренер, но не имеете документа об образовании, Вы можете пройти обучение ЭКСТЕРНОМ и сдав экзамен получить <a><em>СВИДЕТЕЛЬСТВО О ДОПОЛНИТЕЛЬНОМ ОБРАЗОВАНИИ</em></a></li>
                </ul>
            </div><!-- /.blog-post -->

            <div class="blog-post" id="teachers">
                <h2 class="blog-post-title">Наши преподаватели</h2>

                <h3><strong>Филимонова Оксана Сергеевна</strong></h3>
                <p>
                Директор центра, кандидат педагогических наук, 	доцент по специальности <em><strong>"Теория и 	методика физического воспитания, 	спортивной тренировки, оздоровительной 	и адаптивной физической культуры"</strong></em>

                    <ul>
                        <li>Автор 52 научных работ, из них 10 учебно-методических 	пособий и 2 монографии.</li>
                        <li>Опыт преподавания в Кубанском государственном 	университете физической культуры, 	спорта и туризма 14 лет, в том числе 5 	лет в должности доцента.</li>
                        <li>Опыт работы в сфере фитнеса 17 лет, в том числе в должности зам. директора фитнес-клуба "Fit Line" - 10 лет.</li>
                        <li>Преподавание курсов по подготовке инструкторов по фитнесу с 2010 г.</li>
                        <li>Автор 	курсов по подготовке инструкторов по фитнесу "Детский фитнес", "Фитнес в перинатальном периоде", "Фитнес-йога", "Стретчинг", "Диагностика физического состояния в фитнесе".</li>
                    </ul>
                </p>
                <h3><strong>Хорошун Марина Эдуардовна
                    </strong></h3>
                <h3><strong>Ерастова Галина</strong></h3>
            </div>

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
            <div class="p-3 mb-3 bg-light rounded">
                <h4 class="font-italic">Лицензии</h4>
                <p class="mb-0">Мы ведем свою деятельность на основе Лицензии Министерства образования, науки и молодёжной политики Краснодарского края № 08972 от 29 марта 2019 г.
                </p>
                <p class="lead mb-0"><a href="#licenses" class="text-info font-weight-bold">Посмотреть...</a></p>
            </div>

            <div class="p-3" id="schedule">
                <h4 class="font-italic">Расписание курсов</h4>
                <ol class="list-unstyled mb-0">
                    <li><a href="/schedule">Май-июль 2019 г.</a></li>
                    <li><a>Август-сентябрь 2019 г.</a></li>
                    <li><a>Октябрь-ноябрь 2019 г.</a></li>
                </ol>
            </div>

            <div class="p-3">
                <h4 class="font-italic">Мы в соц. сетях</h4>
                <ol class="list-unstyled">
                    <li><a href="https://vk.com">Vk.com</a></li>
                    <li><a href="https://facebook.com">Facebook</a></li>
                </ol>
            </div>
        </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</main><!-- /.container -->

<footer class="blog-footer">
    <p>ЦДО "Эксперт" (с) 2019<p>
        <a href="#top">Наверх</a>
    </p>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="./js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="./js/popper.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/holder.min.js"></script>
<script>
  Holder.addTheme('thumb', {
    bg: '#55595c',
    fg: '#eceeef',
    text: 'Thumbnail'
  });
</script>


<svg xmlns="http://www.w3.org/2000/svg" width="200" height="250" viewBox="0 0 200 250" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="13" style="font-weight:bold;font-size:13pt;font-family:Arial, Helvetica, Open Sans, sans-serif">Thumbnail</text></svg></body></html>