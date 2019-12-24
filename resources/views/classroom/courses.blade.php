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
        <p class="lead text-muted">Скачайте или просмотрите курс</p>
    </div>
</section>

<div class="album py-5 bg-light">
    <div class="container">
        @if ($courses->count())
            @foreach ($courses as $course)
                <div class="row">
                    <div class="col-lg-12">

                        <div style="max-width:20%; float: right";>
                            <img src="/storage/pics/{{ $course->preview }}" style="width: 100%; height: 100%; object-fit: contain;">
                        </div>
                        <h2>{{ $course->title }}</h2>
                        <p><button class="btn btn-info" href="#" role="button" onclick="toggleCut('#course-descr-{{ $course->id }}')">Описание</button></p>
                        <p><a class="btn btn-secondary" href="/class_room/course/{{ $course->id }}" role="button">Перейти</a></p>
                        <div id="course-descr-{{ $course->id }}" class="ellipsis">{!! $course->description !!}</div>
                    </div>
                </div><!-- /.row -->
                <hr/>
            @endforeach
        @else
            <p>У Вас нет оплаченных курсов</p>
        @endif
    </div>
</div>

@endsection
