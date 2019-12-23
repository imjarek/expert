@extends('layouts.panel')
@section('title', 'Редактирование пользователя')
@section('content')

<link href="/admin/css/jquery.filer.css" type="text/css" rel="stylesheet" />
<link href="/admin/css/themes/jquery.filer-dragdropbox-theme.css" type="text/css" rel="stylesheet" />
<script defer src="/admin/js/jquery.filer.min.js"></script>

    <div class="panel-body">
        @include('common.errors')

        <form action="/panel/material/{{ $material->id }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Название</label>
                <input type="input" class="form-control" name="title" id="title" placeholder="Название" value="{{ $material->title ?? old('title') }}">
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <input type="input" class="form-control" name = "description" id="" placeholder="Описание" value="{{ $material->description ?? old('description') }}">
            </div>
            <div class="form-group">
                <label for="type">Тип</label>
                <select name="type_id" id="type_id">
                    <option value="0">--- Выберите тип материала ---</option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}" {{ $type->id == $material->type_id ? 'selected' : '' }}>{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="link">Ссылка</label>
                <input type="input" class="form-control" name = "link" id="link" placeholder="Ссылка" value="{{ $material->link ?? old('link') }}">
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label" for="is_active">Активен</label>
                <input type="checkbox" class="form-check-input form-control-lg"
                       name="is_active" id="is_active" value="1" {{ $material->is_active ? 'checked' : '' }}>
            </div>
            @method('PUT')
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Обновить материал
                    </button>
                </div>
            </div>
            <input type="hidden" name="material_id" value="{{ $material->id }}">
        </form>
        <hr/>
        Прикрепить файл
        <div class="form-group">
            <form method="post" enctype="multipart/form-data">
                <input type="file" name="files[]" id="js-course-materials-filer" multiple="multiple">
            </form>
        </div>
    </div>

@endsection