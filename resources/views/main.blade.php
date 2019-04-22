
@extends('layouts.expert')

@section('title', 'Курсы подготовки фитнес-тренеров')

@section('sidebar')
@parent

{{--<p>This is appended to the master sidebar.</p>--}}
@endsection

@section('content')


    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark fitness">
        <div class="col-md-8 px-0">
            <div class="main-banner-title">
                <h2 class="display-4 font-italic">Центр дополнительного образования "ЭКСПЕРТ" предлагает Вам стать дипломированным фитнес-тренером</h2>
                <p class="lead my-3">Мы проводим образовательные курсы по подготовке фитнес-инструкторов с выдачей лицензированных Сертификатов, Свидетельств о дополнительном образовании, а также Удостоверений о повышении квалификации.</p>
                <p class="lead mb-0"><a href="#about" class="text-white font-weight-bold">Узнать больше...</a></p>
            </div>
        </div>
    </div>

    <div class="row mb-2" id="courses">
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-400">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">Курс</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="/pages/child-fitness">Детский фитнес</a>
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
                    <a href="/pages/child-fitness">Узнать больше</a>
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
                <img class="card-img-right flex-auto d-none d-md-block" data-src="" alt="" src="/images/step-aero.jpg" data-holder-rendered="true" style="width: 200px; height: 250px;">
            </div>
        </div>
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-400">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success">Курс</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="pages/fitness-testing">Фитнес-тестирование</a>
                    </h3>
                    <h4 class="mb-0">
                        (продвинутый уровень)
                    </h4>
                    <div class="mb-1 text-muted">1 день 8 часов</div>
                    <p class="card-text mb-auto">
                        Это курс расчитан как на начинающих так и продвинутых фитнес-тренеров, а также всем, кто занимается фитнесом или спортом и хочет научиться
                        оценивать свое состояние и познакомиться с техниками контроля изменений в своем организме

                    </p>
                    <a href="pages/fitness-testing">Подробнее</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="" alt="" src="/images/fitness-testing.png" data-holder-rendered="true" style="width: 200px; height: 250px;">
            </div>
        </div>
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-400">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success">Семинар-тренинг</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="/pages/perinatal">Фитнес в перинатальном периоде</a>
                    </h3>
                    <h4 class="mb-0">
                        (базовый уровень)
                    </h4>
                    <div class="mb-1 text-muted">4 дня</div>
                    <p class="card-text mb-auto">
                        Этот семинар-тренинг специально разработан для женщин планирующих оставаться в отличной форме во время будущей беременности, а так же для действующих инструкторов
                        по фитнесу и хочет изучить новое направление в фитнесе
                    </p>
                    <a href="/pages/perinatal"></a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="" alt="" src="/images/perinatal.png" data-holder-rendered="true" style="width: 200px; height: 250px;">
            </div>
        </div>
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-400">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success">Семинар-тренинг</strong>
                    <h3 class="mb-0">
                        <a class="text-dark">Теория и практика ведения тренинга. Освоение
                            основных инструментов тренера</a>
                    </h3>
                    <h4 class="mb-0">
                        (продвинутый уровень)
                    </h4>
                    <div class="mb-1 text-muted">16 академических часов 2 дня</div>
                    <p class="card-text mb-auto">
                        Программа предназначена для психологов, практикующих тренеров,
                        студентов старших курсов профильных факультетов. Могут участвовать все,
                        кому тренинг личностного роста интересен с профессиональной точки
                        зрения, кто хотел бы освоить групповую форму психологической работы,
                        развить и усовершенствовать свои практические навыки.
                    </p>
                    <a href="/pages/perinatal"></a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="" alt="" src="/images/trainers.jpg" data-holder-rendered="true" style="width: 200px; height: 250px;">
            </div>
        </div>
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-400">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success">Семинар-тренинг</strong>
                    <h3 class="mb-0">
                        <a class="text-dark">Практика работы с предстрессовыми и
                            стрессовыми состояниями</a>
                    </h3>
                    <h4 class="mb-0">
                        (базовый уровень)
                    </h4>
                    <div class="mb-1 text-muted">2 дня</div>
                    <p class="card-text mb-auto">
                        Семинар – тренинг адресован широкому кругу практических психологов,
                        психологам-консультантам, ведущим групп личностного роста, спортивным
                        психологам, фитнес-тренерам, студентам старших курсов профильных
                        факультетов, а так же всем заинтересованным в долговременном сохранении
                        работоспособности, восстановлении и дальнейшем развитии природных
                        возможностей человека.
                    </p>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="" alt="" src="/images/sport-girl.jpg" data-holder-rendered="true" style="width: 200px; height: 250px;">
            </div>
        </div>
    </div>

    <div class="enroll-form" id="enroll">
        <h2>Записаться на курс!</h2>
        <form class="form" method="post" action="/enroll">
            @csrf
            <div class="form-group">
                <div class="row" >
                    <div class="col-md-3">
                        <input type="phone" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ваш телефон">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Ваше имя">
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" name="course">
                            <option selected>--- Выберите курс ---</option>
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
                    <img class="teacher-pic" src="images/filimonova.jpg" style="float: left">
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
                <p>
                    <img class="teacher-pic" src="images/horoshun.jpg" style="float:left">
                    Ппсихолог-практик, магистр по
                    направлению подготовки «Психолого-педагогическое образование».
                    Педагогический стаж работы 16 лет (преподаватель кафедры
                    психологии) в ФГБОУ ВО Кубанский государственный университет
                    физической культуры, спорта и туризма, г. Краснодар. Психологический
                    стаж работы – 22 года.</p>
                <p>
                    Удостоверения и сертификаты по следующим направлениям:</p>
                <p>
                    «Методологии тренинговых занятий», «Основы психологического
                    консультирования: теория и практика», «Методика и практика
                    профконсультирования», «Введение в психодраму», «Введение в
                    футуропрактику», «Формы, методы и содержание работы психолога-
                    профконсультанта», «Теория и практика Сказкотерапии», «Краткосрочное
                    психологическое консультирование (консультирование, ориентированное на
                    решение)».
                </p>
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

@endsection

