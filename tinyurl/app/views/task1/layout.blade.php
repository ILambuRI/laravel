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
        <nav class="level">
            <p class="level-item has-text-centered">
                <img src="{{asset('images/Geeksforless_logo.png')}}" alt="" style="height: 50px;">
            </p>
            <p class="level-item has-text-centered">
                <a class="link is-info" href='{{URL::to('/')}}'>Home</a>
            </p>
            <p class="level-item has-text-centered">
                <a class="link is-info" href='{{URL::to('articles')}}'>Articles</a>
            </p>
            <p class="level-item has-text-centered">
                <a class="link is-info" href='{{URL::to('artists')}}'>Artists</a>
            </p>
            <p class="level-item has-text-centered">
                 <a class="link is-info" href='{{URL::to('about')}}'>About</a>
            </p>
            <p class="level-item has-text-centered">
                <a class="link is-info" href='{{URL::to('contact')}}'>Contact</a>
            </p>
        </nav>

        <div class="container">
            <div class="column"></div>
            <div class="columns has-text-centered">
                <div class="column">
                    <p class="title is-3 is-spaced">
                        @section('head')
                            Welcome!
                        @show
                    </p>
                </div>
            </div>
            <div class="column"></div>
        </div>

        <div class="container">
            <div class='content has-text-centered'>
                @section('content')
                    <h1 class="title">
                        Hello World
                    </h1>
                    <p class="subtitle">
                        My first website with <strong>Laravel</strong>!
                    </p>
                @show
            </div>
        </div>

        <div class="column"></div>
        <div class="column"></div>
        <footer class="footer">
            <div class="container">
                <div class="content has-text-centered">
                <p>
                    <strong>task2 by user10 on Laravel 4.2+</strong>
                </p>
                <p>
                    <a class="icon" href="https://github.com/ILambuRI/laravel/tree/master/task2">
                    <i class="fa fa-github"></i>
                    </a>
                </p>
                </div>
            </div>
        </footer>
    </body>
</html>
