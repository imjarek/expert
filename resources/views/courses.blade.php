<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')


    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>Courses:</p>
    @if (count($courses) > 0)
        @foreach($courses as $cours)
            <div>$course->name</div>
        @endforeach
    @endif
    @parent
@endsection