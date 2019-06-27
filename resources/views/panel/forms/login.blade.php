<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">


            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-2">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                                <div class="text-center">
                                    <h1>Вход</h1>
                                </div>
                                {{ Form::open(array('url' => 'panel/login', 'method'=>'post', 'class' => 'user')) }}
                                <ul>
                                @if ($errors->count() > 0)
                                    @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                    @endif
                                </ul>
                                <p>
                                    {{ Form::label('email', 'E-mail') }}
                                    {{ Form::text('email', Input::old('email'), array('placeholder' => 'me@mail.ru')) }}
                                </p>

                                <p>
                                    {{ Form::label('password', 'Пароль') }}
                                    {{ Form::password('password') }}
                                </p>

                                <p>{{ Form::submit('Войти') }}</p>
                                {{ Form::close() }}
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="/panel/forgot">Забыли пароль?</a>
                                </div>
                        </div>
                    </div>
                </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="/admin/vendor/jquery/jquery.min.js"></script>
<script src="/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/admin/js/sb-admin-2.min.js"></script>

</body>

</html>
<body>
