
@extends('layouts.panel')
@section('title', empty($page) ? 'Новая страница' : 'Редактирование страницы')

@section('content')

    <div class="panel-body">
        @include('common.errors')

        <form action="/panel/pages/{{ $page ?? '' }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="content"></label>
                <input type="textarea" id="text-editor" class="form-control" name="content" id="content" placeholder="Контент" value="{{ $content }}">
            </div>
            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-save"></i> {{ empty($page) ? 'Создать' : 'Сохранить' }}
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection