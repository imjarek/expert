
@extends('layouts.panel')
@section('title', 'Новый курс')

@section('content')

    <div class="panel-body">
    @include('common.errors')

        <form action="/panel/courses" method="POST" class="form-horizontal">
        {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Название курса</label>
                <input type="input" class="form-control" name="title" id="title" placeholder="Заголовок">
            </div>
            <div class="form-group">
                <label for="announcement">Анонс</label>
                <input type="input" class="form-control" name="announcement" id="announcement" placeholder="Анонс">
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <input type="textarea" id="text-editor" class="form-control" name="description" id="description" placeholder="Описание">
            </div>
            <div class="form-group">
                <label for="type">Тип</label>
                <select name="type_id" id="type_id">
                    <option value="">--Выберите тип--</option>
                    @foreach ($courses_types as $type)
                    <option value="{{ $type->id }}">{{ $type->title }}</option>
                    @endforeach
                </select>
            </div>
            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-info">
                        <i class="fa fa-plus"></i> Добавить курс
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection