@extends('layout')

@section('title')
    Creat Link
@stop

@section('head')
    @if ($errors->first('url'))
        <div class="column is-4 is-offset-4">
            <div class="notification is-info">
                {{$errors->first('url')}}
            </div>
        </div>
    @endif
@stop

@section('content')
    <div class="columns">
        <div class="column is-4 is-offset-4">
            <form method='POST' action="{{URL::to('make-url')}}">
                <div class="field">
                    <label class="label">URL:</label>
                    <div class="control has-icons-left">
                        <input class="input is-success" type="text" name="url" placeholder="Enter your URL">
                        <span class="icon is-small is-left">
                        <i class="fa fa-link"></i>
                        </span>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <button class="button is-primary" type="submit">Make it!</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
