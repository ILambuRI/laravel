@extends('task1.layout')

@section('title')
    Contact us
@stop

@section('head')
    <h1>Fill the form please:</h1>
@stop

@section('content')
    @if ($error)
        <div class="notification is-info">
            Fill out all the fields of this form !
        </div>
    @endif
    <form method='POST'>
        <div class="field">
        <label class="label">Name:</label>
        <div class="control has-icons-left has-icons-right">
            <input class="input is-success" type="text" placeholder="Enter your name here ..." name='name'>
            <span class="icon is-small is-left">
            <i class="fa fa-user"></i>
            </span>
        </div>
        </div>

        <div class="field">
        <label class="label">Message:</label>
        <div class="control">
            <textarea class="textarea" placeholder="Enter your message here ..." name='msg'>
            </textarea>
        </div>
        </div>

        <div class="field">
        <div class="control">
            <button class="button is-primary">Submit</button>
        </div>
        </div>
    </form>
@stop