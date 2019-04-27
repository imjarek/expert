
@extends('layouts.expert')

@section('title', 'Курсы подготовки фитнес-тренеров')

@section('sidebar')
@parent

{{--<p>This is appended to the master sidebar.</p>--}}
@endsection

@section('content')


    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark fitness one">
        <div class="col-md-8 px-0">
            <div class="main-banner-title">
                <h2 class="display-4 font-italic">Центр дополнительного образования "ЭКСПЕРТ" предлагает Вам стать дипломированным фитнес-тренером</h2>
                <p class="lead my-3">Мы проводим образовательные курсы по подготовке фитнес-инструкторов с выдачей лицензированных Сертификатов, Свидетельств о дополнительном образовании, а также Удостоверений о повышении квалификации.</p>
                <p class="lead mb-0"><a href="#about" class="text-white font-weight-bold">Узнать больше...</a></p>
            </div>
        </div>
    </div>

    @include('pages.courses')

    @include('pages.enroll')
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

            @include('pages.teachers')

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
            <div class="p-3 mb-3 bg-light rounded">
                <h4 class="font-italic">Лицензии</h4>
                <p class="mb-0">Мы ведем свою деятельность на основе Лицензии Министерства образования, науки и молодёжной политики Краснодарского края № 08972 от 29 марта 2019 г.
                </p>
                <p class="lead mb-0"><a href="/pages/licences" class="text-info font-weight-bold">Посмотреть...</a></p>
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
                    <li><a href="http://vk.com/club181150794"><img class="social-icon" src="/images/vk.png"></a></li>
                    {{--<li><a href="https://facebook.com">Facebook</a></li>--}}
                </ol>
            </div>
        </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

@endsection

