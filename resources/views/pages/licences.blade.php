@extends('layouts.expert')

@section('title', 'Курсы подготовки фитнес-тренеров')

@section('sidebar')
    @parent

    {{--<p>This is appended to the master sidebar.</p>--}}
@endsection

@section('content')

<div class="row" id="licenses">
    <div class="col-md-6">
        <img id="myImg" src="/images/licences/lic1.jpg" alt="Лицензия" style="width:100%;max-width:300px">

    </div>
    <div class="col-md-6">
        <img id="myImg" src="/images/licences/lic2.jpg" alt="Лицензия" style="width:100%;max-width:300px">

    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <img id="myImg" src="/images/licences/lic3.jpg" alt="Лицензия" style="width:100%;max-width:300px">

    </div>
    <div class="col-md-6">
        <img id="myImg" src="/images/licences/lic4.jpg" alt="Лицензия" style="width:100%;max-width:300px">

    </div>
</div>
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="lic_modal">
    <div id="caption"></div>
</div>
    @endsection