
@extends('layouts.expert')

@section('title', 'Корзина')

@section('sidebar')
    @parent

    {{--<p>This is appended to the master sidebar.</p>--}}
@endsection

@section('content')

@if ($items->count() > 0)
    @foreach($items as $item)
    <div>
        {{ $item->title }}
    </div>
    @endforeach
    <div class="btn btn-lg btn-warning" id="make-order-btn">Оформить</div>
    @else
    <h3>Здесь пока ничего нет( Выберите курс и добавьте в корзину</h3>
@endif

@endsection