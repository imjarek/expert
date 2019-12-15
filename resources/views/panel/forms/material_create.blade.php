
@extends('layouts.panel')
@section('title', 'Новый материал')

@section('content')

    <div class="panel-body">
    @include('common.errors')

        <form action="/panel/material" method="POST" enctype="multipart/form-data" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Название</label>
                <input type="input" class="form-control" name="title" id="title" placeholder="Название" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <input type="input" class="form-control" name = "description" id="" placeholder="Описание" value="{{ old('description') }}">
            </div>
            <div class="form-group">
                <label for="type">Тип</label>
                <select name="type_id" id="type_id">
                    <option value="0">--- Выберите тип материала ---</option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="link">Ссылка</label>
                <input type="input" class="form-control" name = "link" id="link" placeholder="Ссылка" value="{{ old('link') }}">
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label" for="is_active">Активен</label>
                <input type="checkbox" class="form-check-input form-control-lg"
                       name="is_active" id="is_active" value="1">
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Добавить материал
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection