
@extends('layouts.panel')
@section('title', 'Новый пользователь')

@section('content')

    <div class="panel-body">
    @include('common.errors')

        <form action="/panel/user" method="POST" enctype="multipart/form-data" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Имя</label>
                <input type="input" class="form-control" name="first_name" id="first_name" placeholder="Имя" value="{{ old('first_name') }}">
            </div>
            <div class="form-group">
                <label for="Отчество">Отчество</label>
                <input type="input" class="form-control" name = "second_name" id="second_name" placeholder="Отчество" value="{{ old('second_name') }}">
            </div>
            <div class="form-group">
                <label for="last_name">Фамилия</label>
                <input type="input" class="form-control" name = "last_name" id="last_name" placeholder="Фамилия" value="{{ old('last_name') }}">
            </div>
            <div class="form-group">
                <label for="type">Роль</label>
                <select name="role_id" id="role_id">
                    <option value="0">--- Выберите роль пользователя ---</option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="input" class="form-control" name = "email" id="email" placeholder="E-mail" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label for="email">Телефон</label>
                <input type="input" class="form-control" name = "phone" id="phone" placeholder="E-mail" value="{{ old('phone') }}">
            </div>
            <div class="form-group">
                <label for="email">Пароль</label>
                <input type="input" class="form-control" name = "password" id="password" placeholder="Пароль" value="{{ old('password') }}">
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label" for="is_active">Включен</label>
                <input type="checkbox" class="form-check-input form-control-lg"
                       name="is_active" id="is_active" value="1">
            </div>
            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Добавить пользователя
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection