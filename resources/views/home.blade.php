@extends('layouts/app')

@section('titre') {{ __('Across the Galaxy') }} - Across the Galaxy @endsection


@section('content')

<div class="container">
    <div class="carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{url('/images/x-wing.jpg')}}" alt="Image" />
                    <div class="carousel-content d-none d-md-block">
                        <h1>Combattez pour la Nouvelle République !</h1>
                        <p>Et protéger les mondes libérés du joug de l'Empire</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{url('/images/carousel-2.jpg')}}" alt="Second slide">
                    <div class="carousel-content d-none d-md-block">
                        <h1>Rejoignez le Nouvel Ordre Jedi !</h1>
                        <p>Devenez le nouveau champion de la Force</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{url('/images/carousel-3.jpg')}}" alt="Third slide">
                    <div class="carousel-content d-none d-md-block">
                        <h1>Faites face au Grand Amiral Trawn !</h1>
                        <p>Prenez part au combat qui scellera le sort de la Galaxie</p>
                    </div>
                </div>
            </div>
        </div>
        <section class="navigation">
            <div class="row">
                <div class="col mr-5">
                    <a href="#"><button class="navigation__button">Subscribe and join the game !</button></a>
                </div>
                <div class="col ml-5">
                    <a href="#"><button class="navigation__button ml-5">Connect and return to the galaxy !</button></a>
                </div>
            </div>
        </section>



        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card bg-dark">
                        <div class="card-body">
                            <h5 class="card-title text-center">Nouvelles du Jeu</h5>
                            <div class="dropdown-divider"></div>
                            <p class="card-text"><i>Titre de la Nouvelle</i></p>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo
                                facere dolor distinctio voluptates magni suscipit laudantium doloremque excepturi, unde
                                minima tenetur, porro deleniti eum fugiat, exercitationem obcaecati aut illum commodi.
                            </p>
                            <div class="time d-flex">
                                <p class="mr-5">19/04/19</p>
                            <div class="learnmore ml-5"><a href="#">Learn More</a></div></div>
                            <div class="dropdown-divider"></div>
                            <div class="seeemore text-center"><a href="#" class="seemore">Voir plus</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card bg-dark">
                        <div class="card-body">
                            <h5 class="card-title text-center">Nouvelles de la Galaxie</h5>
                            <div class="dropdown-divider"></div>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <div class="dropdown-divider"></div>
                            <div class="text-center"><a href="#" class="seemore">Voir plus</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card bg-dark">
                        <div class="card-body">
                            <h5 class="card-title text-center">Missions</h5>
                            <div class="dropdown-divider"></div>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <div class="dropdown-divider"></div>
                            <div class="text-center"><a href="#" class="seemore">Voir toutes les missions</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="game-info bg-dark">
            <div class="row mt-3 ml-3">
                <div class="col">
                    <h2 class="game-info__title">About</h2>
                    <p class="game-info__paragraph mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                        ut diam felis. Aliquam erat volutpat. Maecenas non malesuada sapien. In ornare elementum erat, a
                        tempor nisl varius nec...
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <hr class="game-info__separation">
                <div class="col">
                    <h2 class="game-info__title">The Game</h2>
                    <ul class="game-info__ul mt-2">
                        <li><a href="#">- What is this game ?</a></li>
                        <li><a href="#">- How to play ?</a></li>
                        <li><a href="#">- Read the rules ?</a></li>
                        <li><a href="#">- What is this game ?</a></li>
                        <li><a href="#">- Register and create your character</a></li>
                        <li><a href="#">- Connection to the game</a></li>
                    </ul>
                </div>
                <hr class="game-info__separation">
                <div class="col">
                    <span class="game-info__title"></span>
                    <br>
                    <ul class="game-info__ul mt-2">
                        <li><a href="#">- Need help ? Read the FAQ</a></li>
                        <li><a href="#">- Legal Mentions</a></li>
                        <li><a href="#">- Conditions of use</a></li>
                        <li><a href="#">- The association</a></li>
                        <li><a href="#">- Who are we ?</a></li>
                        <li><a href="#">- Contact us</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
