<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    </head>
    <body class="antialiased">

    <!--Start Login section-->
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <!--End Login section-->

    <!--Nav bar start-->
    <nav class="navbar navbar-expand-md navbar-light bg-dark">
        <a href="#" class="navbar-brand"><i class="fas fa-laptop text-white fa-2x"></i></a>
        <button type="button" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav"><span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse justify-content-between" id="nav">
            <ul class ="navbar-nav">
                <li class="nav-item"><a class= "nav-link text-light text-uppercase font-weight-bold px-3" href="{{ '/'}}">Home</a></li>
                <li class="nav-item"><a class= "nav-link text-light text-uppercase font-weight-bold px-3" href="{{ 'skills'}}">Skills</a></li>
                <li class="nav-item dropdown" data-toggle="dropdown"><a class="nav-link text-light text-uppercase font-weight-bold px-3 dropdown-toggle" href="#">Projects</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Project 1</a>
                        <a class="dropdown-item" href="#">Project 2</a>
                        <a class="dropdown-item" href="#">Project 3</a>
                        <a class="dropdown-item" href="#">Project 4</a>
                    </div>
                </li>
                <li class="nav-item"><a class= "nav-link text-light text-uppercase font-weight-bold px-3" href="#">About me</a></li>
                <li class="nav-item"><a class= "nav-link text-light text-uppercase font-weight-bold px-3" href="#">Contact</a></li>
            </ul>

        </div>
        <!--Form section start-->
{{--        <form class ="form-inline ml-3">--}}
{{--            <div class ="input-group">--}}
{{--                <input type="text" class ="form-control" placeholder="search">--}}
{{--                <div class = "input-group-append">--}}
{{--                    <button type="button" class="btn"><i class="fas fa-search"></i></button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </form>--}}
    </nav>
        <!--Form section start-->
        <!--Nav bar end-->
        <!----------Header section end---------->
        <!--Content section start-->
        <!--Banner section start-->
    <section class="breadcrumb text-white bg-secondary">
            <h3>Home page</h3>
    </section>
        <section >
            <div class = "container-fluid">
                <div class="row bg-white justify-content-center align-items-center" style ="height: 100vh">
                    <div class="col-s m-10 text-center">
                        <h1 class="display-2 text-capitalize"><span class="text-warning font-weight-bold">Bootstrap 4 / Laravel 8</span><span class="text-info font-italic"> Portfolio</span></h1>
                        <h2>初めまして<span class="text-primary">トルストクラコフ　ドミトリー</span>と申します。こちらがBootstrapポートフォリオです</h2>
                        <a href="#" class="btn btn-danger btn-lg ">ようこそ</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Banner section end-->
    <!--Footer section start-->
    <footer class="bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col text-center">

                    <h1 class="text-white font-weight-light  p-3">Bootstrap Project by<br> Tolstokulakov Dmitrii®</h1>
                    <div class="py-2">
                        <a href="#"><i class="fab fa-facebook fa-3x text-primary mx-3"></i></a>
                        <a href="#"><i class="fab fa-github fa-3x"></i></a>
                    </div>
                    <h3 class="text-light font-weight-light font-italic mb-3">最後までご覧いただき、ありがとうごあいました。</h3>

                </div>

            </div>
        </div>
    </footer>
    <!--Footer section start-->
                </div>
            </div>
        </div>
    </body>
</html>
