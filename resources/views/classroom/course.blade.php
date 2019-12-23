@extends('layouts.classroom')

@section('title', 'Ваш класс')

@section('sidebar')
    @parent

    {{--<p>This is appended to the master sidebar.</p>--}}
@endsection

@section('content')
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">{{ $course->title }}</h1>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

                    @if ($course->materials->count() > 0)
                        <div class="row">
                        @foreach ($course->materials as $material)

                        <div class="col-md-6">
                            <h3>{{ $material->title }}</h3>
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="{{ $material->preview }}" alt="">
                                <div class="card-body">
                                    <p class="card-text">{{ $material->description }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        @if ($material->link)
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Смотреть</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Скачать</button>
                                        @endif
                                        </div>
                                        <small class="text-muted">{{ $material->duration }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        </div>

            @else
                <p>Ошибка. Материалы курса не доступны</p>
            @endif
        </div>
    </div>

@endsection