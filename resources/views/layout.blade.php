<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style media="screen">
            .active{
                color: green;
            }
        </style>

    </head>
    <body>
        <header>
            <?php
                function activeMenu($url){
                    return request()->is($url) ? 'active' : '';
                }
            ?>
            <nav>
                <div class="logo">
                    <img src="" alt="UrbanLabs">
                </div>
                <div class="links">
                    <a class="{{ activeMenu('/') }}" href="{{route('home')}}">Home</a>
                    <!-- <a class="{{ activeMenu('services') }}" href="">Our Services</a> -->
                    <!-- <a class="{{ activeMenu('about') }}" href="">About Us</a> -->
                    <a class="{{ activeMenu('index') }}" href="{{route('messages.index')}}">Contact Us</a>
                    @if(auth()->guest())
                        <a href="{{ route('login')}}">Login</a>
                    @elseif(auth()->check())
                        <a href="/logout">Logout</a>
                    @endif
                </div>
          </nav>
        </header>
        @yield('content')
        <footer>aqui el footer</footer>
    </body>
</html>
