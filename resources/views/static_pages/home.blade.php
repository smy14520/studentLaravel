@extends('layouts.default')
@section("title")
    {{$title}}
@endsection

@section('content')
    <div class="jumbotron">
        <h1>Laravel-Create</h1>
        <p class="lead"></p>
        <p>一切从这里开始</p>
        <p><a class="btn btn-success btn-lg" href="{{route('signup')}}">现在注册</a></p>
    </div>
@endsection