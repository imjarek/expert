@if ($message)
    <section class="course page">
        <div class="container">
            <div class="alert alert-success">
                <strong>Сообщение</strong><br>
                {{ $message }}
            </div>
        </div>
    </section>
@endif