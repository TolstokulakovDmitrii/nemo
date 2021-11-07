<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="title icon" type="image/png" href="images/title-img.png"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!--    fontawesome-->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>

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
{{--    <form class ="form-inline ml-3">--}}
{{--        <div class ="input-group">--}}
{{--            <input type="text" class ="form-control" placeholder="search">--}}
{{--            <div class = "input-group-append">--}}
{{--                <button type="button" class="btn"><i class="fas fa-search"></i></button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </form>--}}
    </div>
</nav>
<!--Form section start-->
<!--Nav bar end-->
<!----------Header section end---------->
<!--Content section start-->


<!--Skills section start-->
<section class="breadcrumb text-white bg-secondary">
    <h3>Skills page</h3>
</section>
<section class="bg-light p-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col text-center mb-3">
                <h1 class="text-warning display-2">Development inviroment</h1>
                <p class="lead text-secondary"> | HTML5 | CSS3 |  Bootstrap4 | Laravel8 | <hr></p>

            </div>
        </div>
        <!--End title-->
        <div class="row text-center">
            <div class="col-lg-4 col-sm-10 mx-auto mb-5">
                <i class="fas fa-desktop fa-6x text-warning"></i>
                <h1 class="text-secondary">Inviroment</h1>
                <p class="text-muted my-41">Mac OS, MAMP</p>
            </div>
            <div class="col-lg-4 col-sm-10 mx-auto mb-5">
                <i class="fab fa-html5 fa-6x text-warning"></i>
                <h1 class="text-secondary">Frontend</h1>
                <p class="text-muted my-4"1>Bootstrap4, HTML5, CSS3</p>
            </div>
            <div class="col-lg-4 col-sm-10 mx-auto mb-5">
                <i class="fab fa-php fa-6x text-warning"></i>
                <h1 class="text-secondary">Backend</h1>
                <p class="text-muted my-4">Laravel8, PHP</p>
            </div>
        </div>
    </div>
</section>
<!--Skills section end-->


<!--Progress section start-->
<section class="p-5">
    <div class="container-fluid">

    </div><div class="row">
        <div class="col text-center mb-3">
            <h1 class="text-warning display-2">Progress section</h1>
            <div class="row justify-content-center">
                <div class="col-lg-6 text-secondary">
                    <h2>HTML5</h2>
                    <div class="progress bg-secondary mb-3">
                        <div class = "progress-bar bg-success" style="width:90%">
                            90%
                        </div>
                    </div>

                    <h2>CSS3</h2>
                    <div class="progress bg-secondary mb-3">
                        <div class = "progress-bar bg-warning" style="width:60%">
                            60%
                        </div>
                    </div>

                    <h2>PHP</h2>
                    <div class="progress bg-secondary mb-3">
                        <div class = "progress-bar bg-danger" style="width:30%">
                            30%
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Progress section end-->


<!--Skills section end-->

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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
