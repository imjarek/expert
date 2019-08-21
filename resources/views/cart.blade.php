
@extends('layouts.expert')

@section('title', 'Корзина')

@section('sidebar')
    @parent

    {{--<p>This is appended to the master sidebar.</p>--}}
@endsection

@section('content')
@if ($items->count() > 0)
    <div class="shopping-cart">
        <h4>Отложенные курсы</h4>
        <table  class="table">
            <th></th>
            <th></th>
            <th>Курс</th>
            <th>Уровень</th>
            <th>Продолжительность</th>
            <th>Цена</th>
        @foreach($items as $item)
        <tr>
            <td>
                <input type="checkbox" data-id="{{ $item->id }}" checked="checked">
            </td>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->level }}</td>
            <td>{{ $item->duration }}</td>
            <td>{{ $item->price ?? 'Звоните' }}</td>
        </tr>
        @endforeach
        </table>
        <form id="make-order-form">
            <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Ваш E-mail</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ваша почта" value="{{ $email ?? 'Ваша почта' }}">
                <small id="emailHelp" class="form-text text-muted">Мы гарантируем использование почты только для уведомлений о Вашем заказе</small>
                <label for="phone">Номер телефона</label>
                <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Телефон" value="{{ $phone ?? 'Ваш номер телефона' }}">
                <small id="phone" class="form-text text-muted">Для связи с Вами</small>
                <label for="name">Как Вас зовут?</label>
                <input type="text" name="first_name" class="form-control" id="name" placeholder="Ваше имя" value="{{ $username ?? 'Ваша почта' }}">
            </div>
        <div class="btn btn-lg btn-warning" id="make-order-btn">Оформить</div>

    </div>
    @else
    <h4>Здесь пока ничего нет( Выберите курс и добавьте в корзину</h4>
@endif
@endsection