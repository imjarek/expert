@extends('layouts.classroom')

@section('title', 'Ваш класс - список курсов')

@section('sidebar')
    @parent

    {{--<p>This is appended to the master sidebar.</p>--}}
@endsection

@section('content')
<section class="jumbotron text-center" style="height: 15%">
    <div class="container">
        <h1 class="jumbotron-heading">Ваши курсы</h1>
        <p class="lead text-muted">Выберите текущий курс</p>
        <p>
            <a href="#" class="btn btn-primary my-2">Продолжить последний</a>
            <a href="#" class="btn btn-secondary my-2">Начать сначала</a>
        </p>
    </div>
</section>

<div class="album py-5 bg-light">
    <div class="container">
        @if ($courses->count())
            <div class="row">
            @foreach ($courses as $course)
                <div class="col-lg-4">
                    <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                    <h2>{{ $course->title }}</h2>
                    <p>{{ $course->description }}</p>
                    <p><a class="btn btn-secondary" href="#" role="button">Начать</a></p>
                </div>
            @endforeach
        </div><!-- /.row -->

        @else
            <p>У Вас нет оплаченных курсов</p>
        @endif
    </div>
</div>


@endsection