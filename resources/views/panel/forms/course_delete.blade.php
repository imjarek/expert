
@extends('layouts.panel')
@section('title', 'Новый курс')

@section('content')

    <div class="panel-body">
    @include('common.errors')

        <form action="/panel/courses/{{ $course->id }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
            @method('delete')
            <div>Вы собираетесь удалить курс</div>
            <div>{{ $course->title }}</div>
            <div>{{ $course->description }}</div>
            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-danger">
                        <i class="fa fa-delete"></i> Удалить курс
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection