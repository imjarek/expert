@extends('layouts.panel')

@section('title', 'Курсы')

@section('sidebar')
    @parent

    {{--<p>This is appended to the master sidebar.</p>--}}
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <button class="btn btn-default">
                <i class="fa fa-edit"></i> <a href="/panel/content/create">Добавить контент</a>
            </button>
        </div>
    </div>
    <div class="row">
        <ul>
        @foreach($blocks as $block)
            <li>{{ $block->title }} [{{ $block->sys_name }}]
            @if($block->contents->count() > 0)
                <ul>@foreach($block->contents as $content)
                        <li><a href="/panel/content/{{ $content->id }}/edit">{{ $content->title }}</a>
                        <p>{{ Str::limit($content->content, 256) }}</p>
                    @endforeach
                    </li>
                </ul>
                @endif
            </li>
        @endforeach
        </ul>
    </div>
@endsection