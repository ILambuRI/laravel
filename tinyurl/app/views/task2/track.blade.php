@extends('task1.layout')
@section('head')
    {{$track['Name']}}:
@stop

@section('content')
    @if ($track['Composer'])
        <p class="is-size-4 has-text-info">Composer(s): {{$track['Composer']}}</p>
    @endif
    <p class="is-size-4 has-text-info">Album: {{$album_name}}</p>
    <p class="is-size-4 has-text-info">Genre: {{$genre}}</p>
    <p class="is-size-4 has-text-info">Type: {{$type}}</p>
    <p class="is-size-4 has-text-info">Duration: {{mb_substr((($track['Milliseconds']/1000)/60), 0, 3)}} minutes</p>
    <p class="is-size-4 has-text-info">Size: {{mb_substr((($track['Bytes']/1000)/1000), 0, 3)}} Mb</p>
    <p class="is-size-4 has-text-info">Price: {{$track['UnitPrice']}}$</p>
@stop