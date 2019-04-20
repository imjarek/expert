
@extends('layouts.expert')

@section('title', 'Курсы подготовки фитнес-тренеров')

@section('sidebar')
    @parent

@endsection

@section('content')

        <h4>Ваша заявка отправлена и ждет обработки
        В ближайшее время мы свяжемся с Вами!
        </h4>
        <h5>
        Ваши данные:
        </h5>
        <strong>Телефон:</strong> {{ $data['phone'] }}<br>
        <strong>Имя: </strong> {{ $data['name'] }}<br>
        <strong>Выбранный курс:</strong> {{ $data['course'] }}<br>
        <br>
        <p>
            С уважением, команда ЦДО "Эксперт"
        </p>
@endsection