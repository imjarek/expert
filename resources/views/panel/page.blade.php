

@extends('layouts.panel')

@section('title', 'Страница - ' . $page)

@section('content')

    <div class="container">

        {{ $content }}
    </div>
@endsection
