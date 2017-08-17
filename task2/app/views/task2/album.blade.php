@extends('task1.layout')
@section('head')
   All tracks of the album of the artist(s) {{$all[0]['Composer']}}:
@stop

@section('content')
   <div class="columns is-multiline">
        <?php $i=1; ?>
        @foreach ($all as $track)
            <div class="column">
                <p>
                    <a class="link is-success" href="{{URL::to('track/' . $track['TrackId'])}}">
                        <span class="tag is-primary is-medium is-rounded">{{$i . '. ' . $track['Name']}}</span>  
                    </a>  
                </p>
            </div>
        <?php $i++; ?>
        @endforeach
    </div>
@stop