@extends('task1.layout')

@section('title')
    Contact us
@stop

@section('head')
    Fill the form please:
@stop

@section('content')
    @if ($error)
        <div class="column is-4 is-offset-4">
            <div class="notification is-info">
                Fill out all the fields of this form !
            </div>
        </div>
    @endif
    <div class="columns">
        <div class="column is-4 is-offset-4">
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
        </div>
    </div>
@stop