@extends('layouts.main')
@section('content')
    <div class="container">
        <header>
            @extends("layouts.navigation")
        </header>
        <div class="container">
            <main>
                    <p style="text-align: center; margin-top: 45px; font-size: 1.5rem; font-family: Roboto;">
                        Des fonctionnalités adaptées à vos besoins commerciaux.
                    </p>
                <br>
                <br>
                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="my-4 h4">Rappels d'activités</h2>
                        <p class="lead">
                            Vous aurez un rappel d'activités chaque jour un mis à jour sera mis à votre disposition afin que vous puissiez suivre
                            l'évolution de vos activités et jamais vous reprendre, vous pourrez donc prendre les étapes importantes pour que vous avanciez
                            sur l'activité marquée sur la zone rappelle
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img src="{{asset('./imgs/Rapport-stats.png')}}" alt="image logo" class="image_logo" style="width: 500px; height: 280px">
                    </div>
                </div>
                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="my-4 h4">Gestion des leads</h2>
                        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img src="{{asset('./imgs/gestion-leads.png')}}" alt="image logo" class="image_logo" style="width: 500px; height: 280px">
                    </div>
                </div>
                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="my-4 h4">Rapports statistiques</h2>
                        <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
                    </div>
                    <div class="col-md-5">
                        <img src="{{asset('./imgs/1A.png')}}" alt="image logo" class="image_logo" style="width: 500px; height: 280px">
                    </div>
                </div>

                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="my-4 h4">Notifications par email</h2>
                        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img src="{{asset('./imgs/2A.png')}}" alt="image logo" class="image_logo" style="width: 500px; height: 280px">
                    </div>
                </div>

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="my-4 h4">Support client</h2>
                        <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
                    </div>
                    <div class="col-md-5">
                        <img src="{{asset('./imgs/Support-client.png')}}" alt="image logo" class="image_logo" style="width: 500px; height: 280px">
                    </div>
                </div>


                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="my-4 h4">Trello</h2>
                        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img src="{{asset('./imgs/trello.png')}}" alt="image logo" class="image_logo" style="width: 500px; height: 280px">
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
