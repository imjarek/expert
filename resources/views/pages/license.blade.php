@extends('layouts.expert')

@section('title', 'Курсы подготовки фитнес-тренеров')

@section('sidebar')
	@parent

	{{--<p>This is appended to the master sidebar.</p>--}}
@endsection

@section('content')
	
	<section class="license page">
		<div class="container">
			<div class="breadcrumb">
                <ul class="breadcrumb__wrapper">
                    <li class="breadcrumb__item"><a href="/">Главная</a></li>
                    <li class="breadcrumb__item active">Лицензия</li>
              	</ul>
            </div>
            <h1 class="h2 head">
				Лицензия
			</h1>
			<div class="license__wrapper">
				<div class="row">
					<div class="col-12 col-md-6 col-lg-4">
						<a href="/img/license.jpg" class="license__item popup-img">
                           <img src="/img/license.jpg" class="img-responsive" alt="">
						</a>
					</div>
					<div class="col-12 col-md-6 col-lg-4">
						<a href="/img/certificate.jpg" class="license__item popup-img">
                           <img src="/img/certificate.jpg" class="img-responsive" alt="">
						</a>
					</div>
					<div class="col-12 col-md-6 col-lg-4">
						<a href="/img/license.jpg" class="license__item popup-img">
                           <img src="/img/license.jpg" class="img-responsive" alt="">
						</a>
					</div>
					<div class="col-12 col-md-6 col-lg-4">
						<a href="/img/certificate.jpg" class="license__item popup-img">
                           <img src="/img/certificate.jpg" class="img-responsive" alt="">
						</a>
					</div>

					<div class="col-12 col-md-6 col-lg-8">
						<div class="license__documents">
							<h3>
								Учредительные документы
							</h3>
							<ul>
								<li>
									<a href="#">
										ИНН
									</a>
								</li>
								<li>
									<a href="#">
										Выписка из ЕГРЮЛ
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection
