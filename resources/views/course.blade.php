
@extends('layouts.expert', ['isMain' => true])

@section('title', 'Курсы подготовки фитнес-тренеров')

@section('sidebar')
	@parent

	{{--<p>This is appended to the master sidebar.</p>--}}
@endsection

@section('content')

	<section class="course page">
		<div class="container">
			<div class="breadcrumb">
                <ul class="breadcrumb__wrapper">
                    <li class="breadcrumb__item"><a href="/">Главная</a></li>
					<li class="breadcrumb__item"><a href="/main/#programs">Курсы</a></li>
					<li class="breadcrumb__item active">Курс</li>
              	</ul>
            </div>
            <h1 class="h2 head">
				{{ $course->title }}
			</h1>
			<div class="course__wrapper">
				<div class="row">
					<div class="col-8">
{{--						<div class="course__img">--}}
{{--							<img src="/img/course.jpg" class="img-responsive" alt="">--}}
{{--						</div>--}}
						<div class="course__content text-content">
							<p><b>{{ $course->duration }}</b></p>
							@if ($course->expert)
							<p>
								<b>Фитнес-эксперт: <span style="color:#7d88e4">{{ $course->expert }}</span></b>
							</p>
							@endif

							{!! $course->description  !!}
						</div>
					</div>
					<div class="col-4">

						<div class="widget">

							<div class="widget__item">
								<h2 class="h2 widget__title">
									Стоимость обучения
								</h2>
								<div class="widget__price">
									{{ $course->price }} ₽
								</div>
								<a href="#call-popup" class="widget__btn btn popup">
									Записаться
								</a>
							</div>

							<div class="widget__item">
								<h2 class="h2 widget__title">
									Ближайшая дата проведения
								</h2>
								<div class="widget__price">
									2020 г.
								</div>
							</div>

						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
@endsection