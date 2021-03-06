

@extends('layouts.panel')

@section('title', 'Курсы')

@section('sidebar')
    @parent

    {{--<p>This is appended to the master sidebar.</p>--}}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="col-sm-offset-3 col-sm-6">
                <button class="btn btn-default">
                    <i class="fa fa-edit"></i> <a href="/panel/courses/{{ $course->id }}/edit">Редактировать</a>
                </button>
            </div>
        </div>
    </div>

    <div class="col-md-10">

        <!-- Dropdown Card Example -->
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">{{ $course->title }}</h6>
                <div>{{ empty($course->is_active) ?'[Выключено]' : '[Включено]'}}</div>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Действия:</div>
                        <a class="dropdown-item" href="/panel/courses/{{ $course->id }}/edit">Редактировать</a>
                        <a class="dropdown-item" href="#">Удалить</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Отключить</a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="row">
                    <div class="mb-8">
                        <h6 class="font-weight-bold">{{ $course->announcement }} </h6>
                        <hr>
                        <div>{!! $course->description !!}</div>
                        <div>Продолжительность: {{ $course->duration }}</div>
                        <div>Расписание: {{ $course->schedule }}</div>
                        <div>Эксперт: {{ $course->expert }}</div>
                        <hr>
                        <div>Тип контента: {{ $course->type->title }}</div>
                        @if ($course->materials->count() > 0)
                            <div>
                            @foreach($course->materials as $material)
                                <a href="/panel/material/{{ $material->id }}">{{ $material->title }}</a><br>
                            @endforeach
                             </div>
                        @else
                            <p><strong>Материалы недоступны</strong></p>
                        @endif
                        <div>Тэги: {{ $course->tags ?? 'Не указаны'}}</div>
                        <div>Цена: {{ $course->price }}</div>
                    </div>
                    <div class="course-card-preview">
                        @if (!empty($course->preview))
                            <img class="img-thumbnail" src="{{ env('APP_URL') }}/storage/pics/{{ $course->preview }}">
                        @endif
                    </div>

                </div>
             </div>
        </div>
    </div>

@endsection

