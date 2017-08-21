<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            @section('title')
                Home
            @show
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.1/css/bulma.min.css">
    </head>
    <body>
    <nav class="navbar">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{URL::to('/')}}">
                <img src="{{asset('images/Geeksforless_logo.png')}}" alt="TinyURL" style="max-height: 3rem;">
            </a>
        </div>
        <div class="navbar-start">
            <div class="navbar-item">
            </div>
            <div class="navbar-item">
            </div>
            <div class="navbar-item">
                <strong>
                    <p class="is-size-4 has-text-danger">
                        TinyURL
                    </p>
                </strong>
            </div>
        </div>
        
        @section('button')
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="field is-grouped">
                    <p class="control is-size-4 has-text-success">
                        @if (Auth::check())
                            {{Auth::user()->name}}
                        @endif
                    </p>
                    <p class="control">
                        <a class="button is-info" href="{{URL::to('auth/logout')}}">
                            <span class="icon">
                                <i class="fa fa-sign-out"></i>
                            </span>
                            <span>
                                Logout me
                            </span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        @show
    </nav>

        <div class="container">
            <div class="column"></div>
            <div class="columns has-text-centered">
                <div class="column">
                    <p class="title is-3 is-spaced">
                        @section('head')
                        @show
                    </p>
                </div>
            </div>
            <div class="column"></div>
        </div>

        <div class="container">
            <div class='content has-text-centered'>
                @section('content')
                @show
            </div>
        </div>

        <div class="column"></div>
        <div class="column"></div>
        <footer class="footer">
            <div class="container">
                <div class="content has-text-centered">
                <p>
                    <strong>task3 by user10 on Laravel 4.2+</strong>
                </p>
                <p>
                    <a class="icon" href="https://github.com/ILambuRI/laravel/tree/master/tinyurl">
                    <i class="fa fa-github"></i>
                    </a>
                </p>
                </div>
            </div>
        </footer>
    </body>
</html>
