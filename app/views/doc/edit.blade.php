@extends('main')
@section('header')
    <div class="title">
        <h1><a href="">Edit Content</a></h1>
    </div>
@stop
@section('content')
    <form action="updateForm" method="post">
        <label for="">Title:</label>
        <input type="text" name="title" value="{{ $doc ? $doc->title : null }}" >
        <label for="">Content:</label>
        <input type="text" name="content" value="{{ $doc ? $doc->content : null }}">
        <!-- <textarea name="content" id="" cols="30" rows="10">
            {{ $doc ? $doc->content : null }}
        </textarea> -->
        <button type="submit">Submit</button>
    </form>
@stop