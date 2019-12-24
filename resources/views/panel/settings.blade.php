
@extends('layouts.panel')

@section('title', 'Материалы')

@section('sidebar')
    @parent

    {{--<p>This is appended to the master sidebar.</p>--}}
@endsection

@section('content')
    <a href="#" id="settings-field'" data-type="text" data-pk="1" data-url="/post" data-title="Enter username">Тест
<table class="table">
    <thead>
    <tr>
        <th scope="col">Системное имя</th>
        <th scope="col">Отображаемое имя</th>
        <th scope="col">Значение</th>
    </tr>
    </thead>
    <tbody>
    @foreach($settings as $setting)
    <tr>
        <td>{{ $setting->system_name }}</td>
        <td>{{ $setting->name }}</td>
        <td><a href="#" id="settings-field'" data-type="text" data-pk="1" data-url="/post" data-title="Enter username">{{ $setting->value }}</a></td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection