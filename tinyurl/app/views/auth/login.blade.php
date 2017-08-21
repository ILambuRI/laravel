@extends('layout')

@section('title')
    Log in
@stop

@section('button')
    <div class="navbar-end">
        <div class="navbar-item">
            <div class="field is-grouped">
                <p class="control">
                    <a class="button is-primary" href="{{URL::to('auth/registration')}}">
                        <span class="icon">
                            <i class="fa fa-address-card"></i>
                        </span>
                        <span>
                            Register me
                        </span>
                    </a>
                </p>
            </div>
        </div>
    </div>
@stop

@section('head')
    @if (isset($info))
        <div class="column is-4 is-offset-4">
            <div class="notification is-info">
                {{$info}}
            </div>
        </div>
    @endif
    @foreach ($errors->all('<p>:message</p>') as $message)
        <div class="column is-4 is-offset-4">
            <div class="notification is-danger">
                 {{$message}}
            </div>
        </div>
    @endforeach
@stop

@section('content')
    <div class="columns">
        <div class="column is-4 is-offset-4">
            <form method='POST' action="{{URL::to('auth/login')}}">
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
                    <div class="control">
                        <button class="button is-primary" type="submit">Log in</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
