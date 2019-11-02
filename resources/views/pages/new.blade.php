
@extends('layouts.expert')

@section('title', 'Курсы подготовки фитнес-тренеров')

@section('sidebar')
	@parent

	{{--<p>This is appended to the master sidebar.</p>--}}
@endsection

@section('content')
	<section class="singl-news page">
		<div class="container">
			<div class="breadcrumb">
                <ul class="breadcrumb__wrapper">
                    <li class="breadcrumb__item"><a href="/">Главная</a></li>
                    <li class="breadcrumb__item"><a href="news.html">Новости</a></li>
                    <li class="breadcrumb__item active">Функиональный тренинг в сентябре </li>
              	</ul>
            </div>
			<div class="singl-news__img">
				<img src="img/single-news.jpg" alt="" class="img-responsive">
			</div>
			<div class="singl-news__wrapper">
				<h1 class="singl-news__title title">
					Функиональный тренинг в сентябре 
				</h1>
				<div class="singl-news__content text-content">
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
		</div>
	</section>

	@endsection