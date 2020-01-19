@extends('layouts.expert')

@section('title', $block->title)

@section('content')

<section class="news page">
    <div class="container">
        <div class="breadcrumb">
            <ul class="breadcrumb__wrapper">
                <li class="breadcrumb__item"><a href="/">Главная</a></li>
                <li class="breadcrumb__item active">{{ $block->title }}</li>
            </ul>
        </div>
        <h1 class="h2 head">
            {{ $block->title }}
        </h1>
        @include('content.content_' . $block->sys_name)
    </div>
</section>
@endsection