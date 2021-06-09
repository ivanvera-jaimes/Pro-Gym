<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BodyGym</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand mb-0 h1" href="http://localhost/pro-gym/public/">
                    <img src="{{asset('Source/favicon.ico')}}" alt="" width="30" height="24"
                        class="d-inline-block align-text-top">
                    BodyGym
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('personas.create')}}">Inscripciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('personas.index')}}">Nuestros miembros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('planes.index')}}">Nuestros planes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('QuienesSomos')}}">Quienes somos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-12">
                    <h1 class="text-center">
                    <kbd>BodyGym</kbd>
                    </h1>
                </div>
            </div>
        </div>
        <br>
        @yield('Content')
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>