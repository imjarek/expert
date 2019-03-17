course_edit.blade.
@extends('layouts.panel')
@section('title', 'Редактирование курса')
@section('content')

    <div class="panel-body">
        @include('common.errors')

        <form action="/panel/courses/{{ $course->id }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Название курса</label>
                <input type="input" class="form-control" name="title" id="title" placeholder="Заголовок" value="{{ old('title') ?? $course->title }}">
            </div>
            <div class="form-group">
                <label for="announcement">Анонс</label>
                <input type="input" class="form-control" name = "announcement" id="announcement" placeholder="Описание" value="{{ old('announcement') ?? $course->announcement }}">
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <input type="input" class="form-control" name = "description" id="description" placeholder="Описание" value="{{ old('description') ?? $course->description }}">
            </div>
            <div class="form-group">
                <label for="type">Тип</label>
                <select name="type_id" id="type_id">
                    <option value="">--Выберите тип--</option>
                    @foreach ($courses_types as $type)
                        <option value="{{ $type->id }}" {{ $type->id == $course->type_id ? 'selected' : '' }}>{{ $type->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tags">Тэги</label>
                <input type="input" class="form-control" name="tags" id="tags" placeholder="Тэги" value="{{ old('tags') }}">
            </div>
            <div class="form-group">
                <label for="price">Цена</label>
                <input type="input" class="form-control" name="price" id="price" placeholder="Цена" value="{{ old('price') }}">
            </div>

            @method('PUT')
            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-save"></i> Сохранить курс
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection