@extends('layout')
@section('content')
    {{ HTML::style('assets/css/global.css'); }}
    {{ HTML::script('assets/js/vendor/jquery/jquery-1.8.0.min.js'); }}
    {{ HTML::script('assets/js/table.js'); }}
    <ul class="w userNames">

    @foreach($users as $user)
        <li class="fl mr10">{{ $user->username }}</li>
    @endforeach
    </ul>
    <div class="testJs"></div>
@stop