@extends('hello.layout')
@section('content')
<p>This is my content</p>
@stop

@section('head')
@parent
<p>New head</p>
@stop



<ul>
@foreach($list as $num)
<li><p>{{{ $num }}}</p></li>
@endforeach
</ul>

@if($ival > 10)
<p>Ival > 10 </p>
@else
<p> Ival is less then 10 </p>
@endif

@include('hello.sub')
