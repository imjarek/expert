

@extends('layouts.panel')

@section('title', 'Страницы сайта')
@section('content')

    <div class="container">

        @foreach ($pages as $page)

        @if ($loop->index % 2 == 0)
        <div class="row">
        @endif
            <div class="col-sm page-card">
                <h1>
                    <a href="{{ $page['edit_link'] }}"><i class="fas fa-fw fa-file" ></i>{{ $page['filename'] }}</a>
                    <a href="{{ $page['page_link'] }}" target="_blank"><i class="fas fa-fw fa-eye"></i></a>
               </h1>

            </div>
            @if ($loop->index % 2 > 0)
        </div>
            @endif
        @endforeach
    </div>
@endsection
