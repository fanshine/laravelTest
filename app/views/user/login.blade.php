@extends('main')
@section('header')
    <div class="title">
        <h1><a href="/login">Login</a></h1>
    </div>
@stop
@section('content')
    <form action="/login" method="post">
        <label>Username:</label><input type="text" name="email" />
        <label>Password:</label><input type="password" name="password" />
        <input type="submit" value="登录" />
    </form>
@stop
