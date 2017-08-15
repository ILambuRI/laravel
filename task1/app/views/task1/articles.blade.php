@extends('task1.layout')

@section('title')
    Articles
@stop

@section('head')
    <h1>All Articles:</h1>
@stop

@section('content')
@foreach ($articles as $num)
    <p>
        <a class="link is-success" href='/task1/public/article/{{$num}}'>Article {{$num}}</a>
    </p>
@endforeach
@stop