@extends('main')
@section('header')
    <div class="title">
        <h1><a href="">Content</a></h1>
    </div>
    @parent
@stop
@section('header')
test
@stop
@section('content')
    <div class="article">
        @foreach($docs as $doc)
            <li class="fl mr10">{{ isset($doc) ? $doc->content : 'No Content' }}<span>
                @{{ $doc->content }}</span></li>
        @endforeach
        ttt
    </div>
@stop