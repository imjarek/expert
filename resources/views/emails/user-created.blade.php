Добрый день, {{ $user->name }}!

<p>Вы успешно зарегистрировались на сайте <a href="{{ env('APP_URL') }}">Фитнес-Эксперт</a></p>

<p>Ваш пароль: {{ $user->temp_pass }}</p>

<p>По Всем интересующим вопросами звоните и пишите нам!</p>

<p> {{ env('SMS_TO') }}</p>
<p> {{ env('MAIL_FROM') }}</p>


<a href="{{ env('APP_URL') }}">Фитнес-Эксперт</a>
