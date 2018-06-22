<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{URL::asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    
    </head>
    <body>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link {{Request::path() === '/' ? 'active' : ''}}" href="/">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::path() === 'movies' ? 'active' : ''}}" href="/movies">Films à l'affiche</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::path() === 'prices' ? 'active' : ''}}" href="/prices">Tarifs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::path() === 'about' ? 'active' : ''}}" href="/about">Informations pratiques</a>
            </li>
            @if(auth()->check())
            <li class="nav-item">
                <a class="nav-link {{Request::path() === 'register' ? 'active' : ''}}" href=#>Bonjour {{ auth()->user()->name }} </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::path() === 'logout' ? 'active' : ''}}" href=/logout>Déconnexion </a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link {{Request::path() === 'register' ? 'active' : ''}}" href="/register">Inscription </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::path() === 'login' ? 'active' : ''}}" href="/login">Connexion </a>
            </li>
            @endif
        </ul>
        
        <div class="container ">
            @yield('content')
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>
</html>
