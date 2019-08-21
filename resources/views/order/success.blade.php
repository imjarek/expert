@extends('layouts.expert')

@section('title', 'Заказ принят')

@section('sidebar')
    @parent

    {{--<p>This is appended to the master sidebar.</p>--}}
@endsection

@section('content')
    <div class="container">
        @if (empty($order))
            Заказ не существует
        @else
            <h3 class="d-inline-block mb-2 course-caption">Вы успешно подали заявку</h3>
            <br>
            <h4 class="d-inline-block mb-2 text-primary">Ваша заявка включает:</h4>

            @foreach ($order->courses as $course)

                <h4>{{ $loop->index + 1 }} - {{ $course->title }}</h4>
                <p>{{ $course->level }}</p>
                <p>{{ $course->description }}</p>
                @if (count($course->types) > 0)
                    Включает в себя следующие материалы (модули):
                    @foreach ($course->types as $type)
                        <p><strong>{{ $type->title }}</strong></p>
                    @endforeach

                @endif
            @endforeach
        @endif
    </div>
@endsection