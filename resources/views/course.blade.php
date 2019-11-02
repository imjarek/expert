
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
                    <li class="breadcrumb__item active">Стретчинг</li>
              	</ul>
            </div>
            <h1 class="h2 head">
				Стретчинг
			</h1>
			<div class="course__wrapper">
				<div class="row">
					<div class="col-8">
						<div class="course__img">
							<img src="/img/course.jpg" class="img-responsive" alt="">
						</div>
						<div class="course__content text-content">
							<h2><b>Стретчинг</b></h2>
							<p><b>16 академических часов 2 дня</b></p>
							<p>
								<b>Фитнес-эксперт: <span style="color:#7d88e4">Филимонова Оксана</span></b>
							</p>
							<br>
							<h3>
								<b>План обучения по разделам</b>
							</h3>
							<ol>
								<li>Общее понятие о гибкости, средства и методы развития.</li>
								<li>Методы определения эластичности мышц, подвижности суставов и позвоночника.</li>
								<li>Функциональная анатомия в стретчинге.</li>
								<li>Динамический стретчинг.</li>
								<li>Статический стретчинг.</li>
								<li>Методика проведения занятий.</li>
							</ol>
							<h3>
								<b>Для кого подходит?</b>
							</h3>
							<p>
								для тех, кто хочет обучиться с нуля<br>	
								для тех, кто занимается сам и хочет освоить новую профессию<br> 
								для действующих фитнес-инструкторов, которые хотят повысить свою квалификацию
							</p>
							<h3>
								<b>Что вы получите?</b>
							</h3>
							<p>
								подробное учебно-методическое пособие<br> 
								готовые комплексы упражнений, а также музыку для проведения занятий
							</p>
							<h3>
								<b>Выдаваемый документ:</b>
							</h3>
							<p>
								Сертификат
							</p>
						</div>
					</div>
					<div class="col-4">

						<div class="widget">

							<div class="widget__item">
								<h2 class="h2 widget__title">
									Стоимость обучения
								</h2>
								<div class="widget__price">
									4 900 ₽
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