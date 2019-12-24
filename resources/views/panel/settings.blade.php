
@extends('layouts.panel')

@section('title', 'Материалы')

@section('sidebar')
    @parent

    {{--<p>This is appended to the master sidebar.</p>--}}
@endsection

@section('content')
<table class="table">
    <thead>
    <tr>
        <th scope="col">Системное имя</th>
        <th scope="col">Отображаемое имя</th>
        <th scope="col">Значение</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($settings as $setting)
    <tr>
        <td>{{ $setting->system_name }}</td>
        <td>{{ $setting->name }}</td>
        <td><textarea name="{{ $setting->system_name }}">{{ $setting->value }}</textarea></td>
        <td><a class="btn btn-outline-primary save-setting-btn">Сохранить</a></td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection