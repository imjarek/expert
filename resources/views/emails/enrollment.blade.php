
<p>
    Получена заявка на курс с сайта
</p>

<h5>
    Данные клиента:
</h5>
<p>
<strong>Телефон:</strong> {{ $data['phone'] }}<br>
<strong>Имя: </strong> {{ $data['name'] }}<br>
</p>
<br>
<a href="{{ env('APP_URL') . '/panel/user/' . $data['user_id'] }}"><strong>Перейти к профилю</strong></a><br>
<br>
<p>
    Автоматическое письмо с сайта {{ env('APP_URL') }}
</p>