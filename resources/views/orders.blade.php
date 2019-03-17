<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Заказы')

@section('sidebar')
@endsection

@section('content')
    <p>Заказы:</p>
    @if (count($orders) > 0)
        @foreach($orders as $orders)
            <div>$order->id</div>
        @endforeach
    @endif
    @parent
@endsection