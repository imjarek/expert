
@extends('layouts.expert')

@section('title', 'Курсы подготовки фитнес-тренеров')

@section('sidebar')
    @parent

@endsection

@section('content')
<section class="course page">
        <div class="container">
                <h3>Ваша заявка отправлена и ждет обработки</h3>
                <p>В ближайшее время мы свяжемся с Вами!
                </p>
                <h4>
                Ваши данные:
                </h4>
                <strong>Телефон:</strong> {{ $data['phone'] }}<br>
                <strong>Имя: </strong> {{ $data['name'] }}<br>
                <br>
                <h4>
                    С уважением, команда ЦДО "Эксперт"!
                </h4>
                <p>Не хотите ждать звонка? Позвоните нам сами! Телефон: {{ env('PHONE_TO') }}</p>
        </div>
<section>
@endsection