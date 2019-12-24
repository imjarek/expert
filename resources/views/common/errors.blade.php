@if (count($errors) > 0)
    <section class="course page">
        <div class="container">
            <div class="alert alert-danger">
                <strong>Ой! Ошибка!</strong>
                <br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li><h3>{{ $error }}</h3></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endif