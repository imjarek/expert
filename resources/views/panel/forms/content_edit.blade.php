
@extends('layouts.panel')
@section('title', empty($content) ? 'Новвый контент' : 'Редактирование контента')

@section('content')

    <div class="panel-body">
        @include('common.errors')

        <form action="@php if(empty($content)) echo '/panel/content'; else echo '/panel/content/'. $content->id; @endphp" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Заголовок</label>
                <input type="text" name="title" id="title" value="{{ $content->title ?? '' }}">
            </div>
            <div class="form-group">
                <label for="content">Содержание</label>
                <textarea class="form-control" name="page-content" id="page-content" placeholder="Контент" rows="30" cols="80">
                    {{ $content->content ?? '' }}
                </textarea>
                <script>
                    CKEDITOR.replace( 'page-content', {
                        height: 400
                    }).catch( error => {
                        console.log( error );
                    } );

                </script>
            </div>
                <div class="form-group">
                    <label for="sys_name">Системное имя (отображается в ссылке)</label>
                    <input type="text" name="sys_name" value="{{ $content->sys_name ?? '' }}">
                </div>
            <div class="form-group">
                <label for="block">Раздел</label>
                <select name="block_id" id="block_id">
                    <option>--- Выберите раздел ---</option>
                    @foreach ($blocks as $block)
                        <option value="{{ $block->id }}" {{ isset($content) && ($block->id == $content->block_id) ? 'selected' : '' }}>{{ $block->title }}</option>
                    @endforeach
                </select>
            </div>
            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-info">
                        <i class="fa fa-save"></i> {{ empty($content) ? 'Создать' : 'Сохранить' }}
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection

<script src="/ckeditor/ckeditor.js"></script>

