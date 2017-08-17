@extends('task1.layout')
@section('head')
    All Artists:
@stop

@section('content')
    <div class="columns is-multiline">
        @foreach ($all as $artist)
            <div class="column">
                <p>
                    <a class="link is-success" href="{{URL::to('artist/' . $artist['ArtistId'])}}">
                        <span class="tag is-primary is-medium is-rounded">{{$artist['Name']}}</span>  
                    </a>  
                </p>
            </div> 
        @endforeach
    </div>
@stop
            