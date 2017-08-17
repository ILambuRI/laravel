@extends('task1.layout')
@section('head')
@if (count($all))
    View all artist's albums with ID {{$all[0]['ArtistId']}}:
@else
    The artist does not have any albums!
@endif

@stop

@section('content')
   <div class="columns is-multiline">
        <?php $i=1; ?>
        @foreach ($all as $album)
            <div class="column">
                <p>
                    <a class="link is-success" href="{{URL::to('album/' . $album['AlbumId'])}}">
                        <span class="tag is-primary is-medium is-rounded">{{$i . '. ' . $album['Title']}}</span>  
                    </a>  
                </p>
            </div>
           <?php $i++; ?>
        @endforeach
    </div>
@stop
            