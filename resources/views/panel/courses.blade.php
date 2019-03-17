

@extends('layouts.panel')

@section('title', 'Курсы')

@section('sidebar')
    @parent

    {{--<p>This is appended to the master sidebar.</p>--}}
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <button class="btn btn-default">
                <i class="fa fa-edit"></i> <a href="/panel/courses/create">Добавить курс</a>
            </button>
        </div>
    </div>
    @foreach($courses as $course)

        <div class="col-md-10">

            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"><a href="/panel/courses/{{ $course->id }}">{{ $course->title }}</a></h6>
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
                    <h6 class="font-weight-bold">{{ $course->announcement }} </h6>
                    <hr>
                    {{ Str::limit($course->description, 200, '...') }}
                </div>
            </div>
        </div>

    @endforeach

@endsection

