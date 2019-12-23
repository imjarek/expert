@extends('layouts.panel')
@section('title', 'Редактирование пользователя')

<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
<script defer src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>

@section('content')

    <div class="panel-body">
        @include('common.errors')

        <form action="/panel/user/{{ $user->id }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="first_name">Имя</label>
                <input type="input" class="form-control" name="first_name" id="first_name" placeholder="Имя" value="{{ old('title') ?? $user->first_name }}">
            </div>
            <div class="form-group">
                <label for="Отчество">Отчество</label>
                <input type="input" class="form-control" name = "second_name" id="second_name" placeholder="Отчество" value="{{ old('second_name') ?? $user->second_name }}">
            </div>
            <div class="form-group">
                <label for="last_name">Фамилия</label>
                <input type="input" class="form-control" name = "last_name" id="last_name" placeholder="Фамилия" value="{{ old('last_name') ?? $user->last_name }}">
            </div>
            <div class="form-group">
                <label for="type">Роль</label>
                <select name="role_id" id="role_id">
                    @if(isset($courses))
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="input" class="form-control" name = "email" id="email" placeholder="E-mail" value="{{ old('email') ?? $user->email }}">
            </div>
            <div class="form-group">
                <label for="phone">Телефон</label>
                <input type="input" class="form-control" name="phone" id="phone" placeholder="Телефон" value="{{ old('phone') ?? $user->phone }}">
            </div>

            <div class="form-group">
                <label for="type">Курсы доступные пользователю</label>
                <select class="js-select-courses-multiple" multiple name="course_id[]" id="course_id" multiple="multiple">
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}" {{ $course->available ? 'selected' : '' }}>{{ $course->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="email">Пароль (только если нужно поменять текущий пароль)</label>
                <input type="input" class="form-control" name = "password" id="password" placeholder="Пароль" value="{{ old('password') }}">
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label" for="is_active">Включен</label>
                <input type="checkbox" class="form-check-input form-control-lg"
                       name="is_active" id="is_active" value="1" {{ $user->is_active == 1 ? 'checked' : '' }}
                >
            </div>
            @method('PUT')
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-save"></i>Обновить пользователя
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection