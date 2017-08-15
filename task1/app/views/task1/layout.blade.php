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
                <a class="link is-info" href='/task1/public/home'>Home</a>
            </p>
            <p class="level-item has-text-centered">
                <a class="link is-info" href='/task1/public/articles'>Articles</a>
            </p>
            <p class="level-item has-text-centered">
                <img src="{{asset('images/Geeksforless_logo.png')}}" alt="" style="height: 30px;">
            </p>
            <p class="level-item has-text-centered">
                 <a class="link is-info" href='/task1/public/about'>About</a>
            </p>
            <p class="level-item has-text-centered">
                <a class="link is-info" href='/task1/public/contact'>Contact</a>
            </p>
        </nav>

        <div class="container">
            <div class='head has-text-centered'>
                @section('head')
                    <h1>Welcome!</h1>
                @show
            </div>
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
    </body>
</html>