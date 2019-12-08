@extends('layouts.panel')
@section('title', 'Редактирование курса')
@section('content')

    <div class="panel-body">
        @include('common.errors')

        <form action="/panel/courses/{{ $course->id }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
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
                <input type="textarea" id="text-editor" class="form-control" name = "description" id="description" placeholder="Описание" value="{{ old('description') ?? $course->description }}">
            </div>
            <div class="form-group">
                <label for="type">Тип контента</label>
                <select name="type_id" id="type_id">
                    <option value="">--Выберите опции --</option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}" {{ $course->type->id == $type->id ? 'selected' : '' }}>{{ $type->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="options">Опции</label>
                <select name="type_ids[]" id="options" multiple>
                    <option value="">--Выберите опции --</option>"
                    @if (isset($options))
                        @foreach ($options as $option)
                            <option value="{{ $option->id }}" {{ $option->selected ? 'selected' : '' }}>{{ $option->title }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="form-group">
                <label for="preview">Превью</label>
                <input type="file" accept="image/*" class="form-control" name="preview" id="preview" placeholder="Превью" value="{{ old('preview') ?? $course->preview }}">
                <p>Текущая: {{ $course->preview }}</p>
            </div>
            <div class="form-group">
                <label for="picture">Картинка</label>
                <input type="file" class="form-control" name="picture" id="picture" placeholder="Картинка">
                <p>Текущая: {{ $course->picture }}</p>
            </div>
            <div class="form-group">
                <label for="level">Уровень</label>
                <input type="input" class="form-control" name="level" id="level" placeholder="" value="{{ old('level') ?? $course->level }}">
            </div>
            <div class="form-group">
                <label for="duration">Продолжительность</label>
                <input type="input" class="form-control" name="duration" id="duration" placeholder="" value="{{ old('duration') ?? $course->duration }}">
            </div>
            <div class="form-group">
                <label for="schedule">Расписание</label>
                <input type="input" class="form-control" name="schedule" id="schedule" placeholder="" value="{{ old('schedule') ?? $course->schedule }}">
            </div>
            <div class="form-group">
                <label for="expert">Эксперт</label>
                <input type="input" class="form-control" name="expert" id="expert" placeholder="" value="{{ old('expert') ?? $course->expert }}">
            </div>
            <div class="form-group">
                <label for="tags">Тэги</label>
                <input type="input" class="form-control" name="tags" id="tags" placeholder="Тэги" value="{{ old('tags') ?? $course->tags }}">
            </div>
            <div class="form-group">
                <label for="price">Цена</label>
                <input type="input" class="form-control" name="price" id="price" value="{{ old('price') ?? $course->price}}">
            </div>
            <div class="form-group">
                <label for="duration">Порядок</label>
                <input type="input" class="form-control" name="order" id="order" placeholder="1" value="{{ old('order') ?? $course->order }}">
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label" for="is_active">Включен</label>
                <input type="checkbox" class="form-check-input form-control-lg"
                       name="is_active" id="is_active" value="1" {{ $course->is_active ? 'checked' : '' }}
                >
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