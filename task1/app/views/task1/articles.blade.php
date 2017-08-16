@extends('task1.layout')

@section('title')
    Articles
@stop

@section('head')
    All Articles:
@stop

@section('content')
<div class="columns">
@foreach ($articles as $num)
<div class="column">
    <p>
        <a class="link is-success" href="{{URL::to('article/'.$num)}}">
            <span class="tag is-primary is-medium is-rounded">Article {{$num}}</span>
        </a>
    </p>
</div>
@endforeach
</div>
@stop
