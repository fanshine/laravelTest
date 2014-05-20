@extends('layout')
@section('content')
    {{ HTML::style('../assets/css/global.css') }}
    <ul class="w">

        <li class="fl mr10">{{  $user->username }}</li>

    </ul>
@stop