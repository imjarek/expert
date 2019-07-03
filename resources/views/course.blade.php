@extends('layouts.expert')

@section('title', $course->title)

@section('sidebar')
    @parent

    {{--<p>This is appended to the master sidebar.</p>--}}
@endsection

@section('content')

    <h3 class="d-inline-block mb-2 course-caption">{{ $course->type->title ?? 'Курс' }}</h3>
    <br>
    <h4 class="d-inline-block mb-2 text-primary">{{ $course->announcment ?? 'Фитнес' }}</h4>
    <div class="mb-1 text-muted">Продолжительность: {{ $course->duration }}</div>
    <p class="card-text mb-auto">{{ $course->description }}</p>
    @if (count($course->types) > 0)
        Доступен в следующих видах:
        @foreach ($course->types as $type)
            <p><strong>{{ $type->title }}</strong></p>
        @endforeach

    @endif
    @if ($course->picture)
    <img src="/storage/pics/{{ $course->picture }}" data-holder-rendered="true">
    @elseif ($course->preview)
    <img src="/storage/pics/{{ $course->preview }}" data-holder-rendered="true">
    @endif
@endsection