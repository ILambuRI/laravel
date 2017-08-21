@extends('layout')

@section('title')
    Short Link
@stop

@section('button')
@stop

@section('head')
    @foreach ($errors->all() as $message)
        <div class="column is-4 is-offset-4">
            <div class="notification is-info">
                {{$message}}
            </div>
        </div>
    @endforeach
@stop

@section('content')
<div class="columns">
    <div class="column is-4 is-offset-4">
        <form method='POST' action="{{URL::to('auth/registration')}}">
            <div class="field">
                <label class="label">Name:</label>
                <div class="control has-icons-left">
                    <input class="input is-success" type="text" name="name" placeholder="Enter your name"
                        @if (isset($name))
                            value="{{$name}}"
                        @endif
                    >
                    <span class="icon is-small is-left">
                    <i class="fa fa-user"></i>
                    </span>
                </div>
            </div>
            <div class="field">
                <label class="label">Email:</label>
                <div class="control has-icons-left">
                    <input class="input is-success" type="email" name="email" placeholder="Enter your email"
                        @if (isset($email))
                            value="{{$email}}"
                        @endif
                    >
                    <span class="icon is-small is-left">
                    <i class="fa fa-envelope"></i>
                    </span>
                </div>
            </div>
            <div class="field">
                <label class="label">Password:</label>
                <div class="control has-icons-left">
                    <p class="control has-icons-left">
                        <input class="input" type="password" placeholder="Your password" name="password">
                        <span class="icon is-small is-left">
                            <i class="fa fa-lock"></i>
                        </span>
                    </p>
                </div>
            </div>
            <div class="field">
                <label class="label">Confirm:</label>
                <div class="control has-icons-left">
                    <p class="control has-icons-left">
                        <input class="input" type="password" placeholder="Your password confirm" name="confirm">
                        <span class="icon is-small is-left">
                            <i class="fa fa-check"></i>
                        </span>
                    </p>
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <button class="button is-primary" type="submit">Register me</button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop