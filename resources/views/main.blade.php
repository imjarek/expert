
@extends('layouts.expert', ['isMain' => true])

@section('title', 'Курсы подготовки фитнес-тренеров')
@section('description', $settings['description'])
@section('keywords', $settings['keywords'])
@section('sidebar')
@parent

{{--<p>This is appended to the master sidebar.</p>--}}
@endsection

@section('content')

    <!-- Main -->
    <section id="main">
        <div class="full-slider" id="full-slider">

            <!-- slider item -->
            <div class="full-slider__item">
                <div style="background-image: url(img/main-slider.jpg);" class="slider-bg">
                    <div class="full-slider__container">
                        <h2 class="full-slider__title">
                            Станьте<br>дипломированным<br>Фитнес-тренером
                        </h2>
                        <a href="/pages/license" class="full-slider__sub-title">
                            Лицензия на Дополнительное<br>профессиональное образование<br>
                            № 08972 от 29.03.2019
                        </a>
                        <a href="#call-popup" class="btn full-slider__btn popup">
                            Записаться
                        </a>
                    </div>
                </div>
            </div>
            <!-- end slider item -->

            <!-- slider item -->
            <div class="full-slider__item">
                <div style="background-image: url(img/main-slider2.jpg);" class="slider-bg">
                    <div class="full-slider__container">
                        <h2 class="full-slider__title">
                            Станьте<br>дипломированным<br>Фитнес-тренером
                        </h2>
                        <a href="license.html" class="full-slider__sub-title">
                            Лицензия на Дополнительное<br>профессиональное образование<br>
                            № 08972 от 29.03.2019
                        </a>
                        <a href="#call-popup" class="btn full-slider__btn popup">
                            Записаться
                        </a>
                    </div>
                </div>
            </div>
            <!-- end slider item -->


            <!-- slider item -->
            <div class="full-slider__item">
                <div style="background-image: url(img/main-slider3.jpg);" class="slider-bg">
                    <div class="full-slider__container">
                        <h2 class="full-slider__title">
                            Станьте<br>дипломированным<br>Фитнес-тренером
                        </h2>
                        <a href="license.html" class="full-slider__sub-title">
                            Лицензия на Дополнительное<br>профессиональное образование<br>
                            № 08972 от 29.03.2019
                        </a>
                        <a href="#call-popup" class="btn full-slider__btn popup">
                            Записаться
                        </a>
                    </div>
                </div>
            </div>
            <!-- end slider item -->
        </div>
    </section>
    <!-- End Main -->



@include("courses", ['courses' => $courses])

    <!-- Contact -->
    <section class="contact" id="contact">
        <div class="contact__wrapper">
            <div class="contact__form">
                <h2 class="title wow slideInUp">
                    Запишитесь на курс
                </h2>
                <form action="#" method="post">
                    <div class="formItem">
                        <input name="name" type="text" placeholder="Имя">
                        <input name="phone" type="text" placeholder="Телефон">
                    </div>
                    <div class="formSelect">
                        <select name="select-curses">
                            <option value="">Выберите курс</option>
                            <option>Курс 1</option>
                            <option>Курс 2</option>
                            <option>Курс 3</option>
                        </select>
                    </div>
                    <button type="submit" class="formBtn btn">
                        Записаться
                    </button>
                </form>
            </div>
        </div>
    </section>
    <!-- End Contact -->

    <!-- Advantages -->
    <section class="advantages" id="advantages">
        <div class="advantages__container">
            <h2 class="title wow slideInUp">
                Почему вам стоит записаться?
            </h2>
            <div class="row advantages__wrapper">
                <div class="col-12 col-lg-6 col-xl-4 advantages__item wow fadeInUp" data-wow-delay="0.3s">
                    <div class="advantages__number">
                        01
                    </div>
                    <div class="advantages__description">
                        <div class="advantages__title">
                            Лицензия на деятельность
                        </div>
                        <div class="advantages__text">
                            Образовательные курсы лицензированы
                            Министерством образования, науки и молодежной политики Краснодарского края
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-4 advantages__item wow fadeInUp" data-wow-delay="0.6s">
                    <div class="advantages__number">
                        02
                    </div>
                    <div class="advantages__description">
                        <div class="advantages__title">
                            Выдача дипломов и сертификатов
                        </div>
                        <div class="advantages__text">
                            При прохождении курсов выдаются Дипломы, Сертификты, Свидетельства о  дополнительном образовании и Удостоверения о повышении квалификации
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-4 advantages__item wow fadeInUp" data-wow-delay="0.9s">
                    <div class="advantages__number">
                        03
                    </div>
                    <div class="advantages__description">
                        <div class="advantages__title">
                            Возможность дистанционного обучения
                        </div>
                        <div class="advantages__text">
                            Для удобства наших студентов мы окрыли направления курсов с возможностью дистанционного обучения
                        </div>
                    </div>
                </div>
                <div class="d-none d-xl-block col-12 col-lg-6 col-xl-4 advantages__item wow fadeInUp" data-wow-delay="0.3s"></div>
                <div class="col-12 col-lg-6 col-xl-4 advantages__item wow fadeInUp" data-wow-delay="0.6s">
                    <div class="advantages__number">
                        04
                    </div>
                    <div class="advantages__description">
                        <div class="advantages__title">
                            Опыт работы наших экспертов
                        </div>
                        <div class="advantages__text">
                            Обучение проводят фитнес-эксперты, имеющие опыт работы и преподавания в сфере фитнеса более 15 лет
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-4 advantages__item wow fadeInUp" data-wow-delay="0.9s">
                    <div class="advantages__number">
                        05
                    </div>
                    <div class="advantages__description">
                        <div class="advantages__title">
                            Возможность пройти обучение экстерном
                        </div>
                        <div class="advantages__text">
                            В случае если Вы опытный фитнес-тренер, но не имеете документа об образовании, Вы можете пройти обучение ЭКСТЕРНОМ
                        </div>
                    </div>
                </div>
                <div class="d-none d-xl-block col-12 col-lg-6 col-xl-4 advantages__item wow fadeInUp" data-wow-delay="0.3s"></div>
                <div class="col-12 col-lg-6 col-xl-4 advantages__item wow fadeInUp" data-wow-delay="0.6s">
                    <div class="advantages__number">
                        06
                    </div>
                    <div class="advantages__description">
                        <div class="advantages__title">
                            Широкий выбор работы
                        </div>
                        <div class="advantages__text">
                            После прохождения курсов вы получаете возможность работы в любом фитнес-клубе и в государственных учреждениях
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Advantages -->

    <!-- Certificate -->
    <section class="certificate" id="certificate">
        <div class="certificate__container">
            <h2 class="title wow slideInUp">
                Что вы получите?
            </h2>
        </div>
        <div class="certificate__wrapper">
            <div class="certificate__container">
                <div class="row align-items-center">
                    <div class="certificate__block col-12 col-xl-7 order-1 order-xl-0">
                        <div class="certificate__item active" data-cer="0">
                            <div class="certificate__title">
                                Диплом
                            </div>
                            <div class="certificate__text">
                                о профессиональной переподготовке - официальный, лицензированный документ о дополнительном профессиональном образовании в Российской Федерации, дающий право на профессиональную деятельность в сфере фитнеса и физической культуры
                            </div>
                        </div>
                        <div class="certificate__item" data-cer="1">
                            <div class="certificate__title">
                                Свидетельство
                            </div>
                            <div class="certificate__text">
                                о дополнительном образовании выдается при успешной сдаче зачета на курсах длительностью 24 академических часа и более
                            </div>
                        </div>
                        <div class="certificate__item" data-cer="2">
                            <div class="certificate__title">
                                Сертификат
                            </div>
                            <div class="certificate__text">
                                При краткосрочном обучении всем участникам выдается Сертификат
                            </div>
                        </div>
                        <div class="certificate__item" data-cer="3">
                            <div class="certificate__title">
                                Удостоверение
                            </div>
                            <div class="certificate__text">
                                о профессиональной переподготовке - официальный, лицензированный документ о дополнительном профессиональном образовании в Российской Федерации, дающий право на профессиональную деятельность в сфере фитнеса и физической культуры
                            </div>
                        </div>
                    </div>
                    <div class="certificate__img col-12 col-xl-5 order-0 order-xl-1">
                        <a href="/img/diplomas/diplom.jpg" data-image="0" class="active popup-img animated fadeInRight">
                            <img id="myImg" src="/img/diplomas/diplom.jpg" class="img-responsive"  alt="#">
                        </a>
                        <a href="/img/diplomas/svidet.jpg" data-image="1" class="popup-img animated fadeInRight">
                            <img id="myImg" src="/img/diplomas/svidet.jpg" class="img-responsive"  alt="#">
                        </a>
                        <a href="/img/diplomas/cert.jpg" data-image="2" class="popup-img animated fadeInRight">
                            <img id="myImg" src="/img/diplomas/cert.jpg" class="img-responsive"  alt="#">
                        </a>
                        <a href="/img/diplomas/udost.jpg" data-image="3" class="popup-img animated fadeInRight">
                            <img id="myImg" src="/img/diplomas/udost.jpg" class="img-responsive"  alt="#">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Certificate -->

    @include("pages/training")
    @include("pages/reviews")

    @include("pages/questions")


@endsection

