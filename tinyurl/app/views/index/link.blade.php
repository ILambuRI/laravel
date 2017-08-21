@extends('layout')

@section('title')
    Short Link
@stop

@section('head')
   You short Link:
@stop

@section('content')
    <p> <a href="{{$link}}">{{$link}}</a></p>
@stop