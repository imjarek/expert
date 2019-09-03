<p>Добрый день, {{ $user->name }}!</p>

<p>Вы успешно создали заявку на сайте "Фитнес-эксперт".</p>

<p>
    Номер Вашего заказа: {{ $order->id }}
</p>
<p>
    Создан: {{ $order->created_at }}
</p>
<p>После оплаты заявки Вам станет доступен учебный класс со всеми материалами, содержащимися в курсе.</p>

<p>В ближайшее время с Вами свяжется менеджер, для обсуждения деталей Вашего заказа</p>

<p>По Всем интересующим вопросами звоните и пишите нам!</p>

<p> {{ env('SMS_TO') }}</p>
<p> {{ env('MAIL_FROM') }}</p>


<a href="{{ env('APP_URL') }}">Фитнес-Эксперт</a>
