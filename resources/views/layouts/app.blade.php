<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('titre')</title>

  
    <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
    <!--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">-->
        <link href="https://fonts.googleapis.com/css?family=Expletus+Sans:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">


    <link href="{{asset(mix('css/app.css'))}}" rel="stylesheet" type="text/css">


</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bleu">
            <div class="container">              
                    
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <i class="fab fa-jedi-order fa-5x text-white"id="logo-nav" height="30" class="mr-3" alt="atg logo"></i>
                   
                </a><h1>Across the galaxy</h1>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}" title="{{ __('Menu de navigation') }}">
                        <div class="bars" id="bars">
                            <div class="bars__line bars--first"></div>
                            <div class="bars__line bars--snd"></div>
                            <div class="bars__line bars--last"></div>
                        </div>
                    </button>
                <div class="collapse navbar-collapse  justify-content-between row" id="#navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('news') }}">News</a>
                        </li>
                        <li class="nav-item right-menu">
                            <button class="nav-link menu-button" href="{{ route('ressources') }}">Ressources</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Le Jeu</a>
                                <a class="dropdown-item" href="#">Règles</a>
                                <a class="dropdown-item" href="#">Pouvoir et compétences</a>
                                <a class="dropdown-item" href="#">Carte Galactique</a>
                                <a class="dropdown-item" href="#">Encyclopédie</a>
                            </div>
                        </li>
                        <li class="nav-item right-menu">
                            <button class="nav-link menu-button" href="{{ route('characters') }}">Characters</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Jedi</a>
                                <a class="dropdown-item" href="#">New Republic</a>
                                <a class="dropdown-item" href="#">Fringe</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Log in | Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="main">
    
    @yield('content')
   </div>
     <footer class="bg-dark">
       <div class="container">
            <div class="row footer-cont">
                <div class="col-md-12 footer__info">
                    <h3 class="footer-title text-white"><strong>{{ __('2020 URL.COM v1.0 WILL') }}</strong></h3>
                    <p  class="footer-txt"><strong>ACCROSS THE GALAXY</strong> {{ __(' est une marque déposée appartenant à l’association') }} <strong>NAME</strong></p>
                </div>
            </div> 
       </div>
    </footer>
    <script src="{{ asset(mix('js/app.js')) }}"></script>
</body>
</html>
