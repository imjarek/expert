@extends('layouts.expert')

@section('title', $course->title)

@section('sidebar')
    @parent

    {{--<p>This is appended to the master sidebar.</p>--}}
@endsection

@section('content')
    <div class="row">
        <h3 class="d-inline-block mb-2 course-caption">{{ $course->type->title ?? 'Курс' }}</h3>
        <br>
        <h4 class="d-inline-block mb-2 text-primary">{{ $course->announcment ?? 'Фитнес' }}</h4>
        <div class="mb-1 text-muted">Продолжительность: {{ $course->duration }}</div>
        <p class="card-text mb-auto">{{ $course->description }}</p>
        @if (count($course->types) > 0)
            Включает в себя следующие материалы (модули):
            @foreach ($course->types as $type)
                <p><strong>{{ $type->title }}</strong></p>
            @endforeach

        @endif
    </div>
    <div class="row">
        @if ($course->picture)
        <img src="/storage/pics/{{ $course->picture }}" data-holder-rendered="true">
        @elseif ($course->preview)
        <img src="/storage/pics/{{ $course->preview }}" data-holder-rendered="true">
        @endif
    </div>
    <div class="row">
        <div class="float-right btn btn-sm {{ $course->inCart ? 'btn-success' : 'btn-info' }} to-shopping-cart-btn" data-id="{{ $course->id }}">{{ $course->inCart ? 'В корзине' : 'В корзину'}}</div>
    </div>
@endsection