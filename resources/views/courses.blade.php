
<!-- Programs -->
<section class="programs" id="programs">
    <h2 class="h2 title text-center wow slideInUp">
        Образовательные программы
    </h2>
    <div class="programs__tab text-center">
        <a href="#" class="programs__btn active" data-tab="0">
            Очное обучение
        </a>
        <a href="#" class="programs__btn" data-tab="1">
            Дистанционное обучение
        </a>
    </div>

    <div class="container programs__wrapper active" data-content="0">
        <div class="row">
            @foreach($courses as $course)

                <!-- program item -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="/courses/{{ $course->id }}" class="programs__item" style="background-image: url(storage/pics/{{ $course->preview }}); background-size:contain; background-repeat: no-repeat">
                            <div class="programs__top">
                                <div class="programs__price">
                                    {{ $course->price }} руб
                                </div>
                                <div class="programs__date">
                                    {{ $course->schedule ?? $defaults['schedule'] }}
                                </div>
                            </div>
                            <div class="programs__description text-center">
                                <div class="programs__name">
                                    @if ($course->expert)
                                        <span>
                                            Эксперт
                                        </span>
                                    @endif
                                    <p>
                                        {{ $course->expert }}
                                    </p>
                                </div>

                                <h3 class="programs__type">
                                    {{ $course->title }}
                                </h3>
                            </div>
                        </a>
                    </div>
                    <!-- end program item -->

            @endforeach
        </div>
    </div>
</section>
<!-- End Programs -->

<!-- Psychology -->
<section class="psychology" id="psychology">
    <div class="container">
        <div class="psychology__wrapper">
            <h2 class="psychology__head">
                психология
            </h2>
            <table>

                <!-- Psychology item -->
                <tr class="psychology__item wow slideInUp">
                    <td class="psychology__title">
                        <a href="/courses/100">
                            <p class="psychology__type">
                                Семинар – тренинг
                            </p>
                            Методы сказкотерапии в диагностике,	консультировании и психотерапии
                        </a>
                    </td>
                    <td class="psychology__time">
                        <span>32 академических часа, 4 дня</span>
                        Эксперт: Хорошун Марина
                    </td>
                    <td class="psychology__price">
                        6 500 руб
                    </td>
                    <td class="psychology__link">
                        <a href="/courses/100"></a>
                    </td>
                </tr>
                <!-- End Psychology item -->

                <!-- Psychology item -->
                <tr class="psychology__item wow slideInUp">
                    <td class="psychology__title">
                        <a href="/courses/100">
                            <p class="psychology__type">
                                Семинар – тренинг
                            </p>
                            Основы куклотерапии
                        </a>
                    </td>
                    <td class="psychology__time">
                        <span>16 академических часов, 2 дня</span>
                        Эксперт: Хорошун Марина
                    </td>
                    <td class="psychology__price">
                        4 000 руб
                    </td>
                    <td class="psychology__link">
                        <a href="/courses/100"></a>
                    </td>
                </tr>
                <!-- End Psychology item -->

                <!-- Psychology item -->
                <tr class="psychology__item wow slideInUp">
                    <td class="psychology__title">
                        <a href="/courses/100">
                            <p class="psychology__type">
                                Семинар – тренинг
                            </p>
                            Практика работы с предстрессовыми и стрессовыми состояниями
                        </a>
                    </td>
                    <td class="psychology__time">
                        <span>16 академических часов, 2 дня</span>
                        Эксперт: Хорошун Марина
                    </td>
                    <td class="psychology__price">
                        4 000 руб
                    </td>
                    <td class="psychology__link">
                        <a href="/courses/100"></a>
                    </td>
                </tr>
                <!-- End Psychology item -->

                <!-- Psychology item -->
                <tr class="psychology__item wow slideInUp">

                </tr>
                <!-- End Psychology item -->
            </table>
        </div>
    </div>
</section>
<!-- End Psychology -->

