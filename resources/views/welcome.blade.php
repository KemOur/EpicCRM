@extends('layouts.main')
@section('content')
    <div class="container">
        <header>
            @extends("layouts.navigation")
        </header>
            <main>
                <div class="">
                    <h5 style="text-align: center; margin: 35px; font-size: 2.5rem; font-family: Roboto;">
                        La plateforme CRM simple à utiliser
                    </h5>
                </div>

                <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal">Débutant</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">8€<small class="text-muted fw-light">/mois</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li style="position: center"> Création d’opportunités</li>
                                    <li style="position: center"> Amélioration et suivie de la performance</li>
                                    <li style="position: center"> Rappels d’activités</li>
                                </ul>
                                <button type="button" class="w-100 btn btn-lg btn-outline-info">Test gratuit</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal">Pro</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">20€<small class="text-muted fw-light">/mois</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li style="position: center"> Création d’opportunités</li>
                                    <li style="position: center"> Amélioration et suivie de la performance</li>
                                    <li style="position: center"> Rappels d’activités</li>
                                </ul>
                                <button type="button" class="w-100 btn btn-lg btn-info" style="color: #ffffff">Test gratuit</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm border-info">
                            <div class="card-header py-3 text-white bg-info border-primary">
                                <h4 class="my-0 fw-normal">Enterprise</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">30€<small class="text-muted fw-light">/mois</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li style="position: center"> Création d’opportunités</li>
                                    <li style="position: center"> Amélioration et suivie de la performance</li>
                                    <li style="position: center"> Rappels d’activités</li>
                                </ul>
                                <button type="button" class="w-100 btn btn-lg btn-info" style="color: #ffffff">Test gratuit</button>
                            </div>
                        </div>
                    </div>
                </div>


                <hr>
                <div class="container px-4 py-5" id="icon-grid">
                    <div>
                        <h5 style="text-align: center; font-size: 1.5rem;">
                            Les fonctionnalités dont vos commerciaux ont réellement besoin !
                        </h5>
                    </div><br><br>


                    <!-- oroor -->
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-100 border-info">
                                <div class="card-body">
                                    <h5 class="card-title">Rappels d'activités</h5>
                                </div>
                            </div>
                        </div>     <div class="col">
                            <div class="card h-100 border-info">
                                <div class="card-body">
                                    <h5 class="card-title">Gestion des leads</h5>
                                </div>
                            </div>
                        </div>     <div class="col">
                            <div class="card h-100 border-info">
                                <div class="card-body">
                                    <h5 class="card-title">Rapports statistiques</h5>
                                </div>
                            </div>
                        </div>     <div class="col">
                            <div class="card h-100 border-info">
                                <div class="card-body">
                                    <h5 class="card-title">Notifications par email</h5>
                                </div>
                            </div>
                        </div>     <div class="col">
                            <div class="card h-100 border-info">
                                <div class="card-body">
                                    <h5 class="card-title">Suivi de l’activité</h5>
                                </div>
                            </div>
                        </div>     <div class="col">
                            <div class="card h-100 border-info">
                                <div class="card-body">
                                    <h5 class="card-title">Trello</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table text-center">
                        <thead>
                        <tr>
                            <th style="width: 34%;"></th>
                            <th style="width: 22%;">Débutant</th>
                            <th style="width: 22%;">Professionnel</th>
                            <th style="width: 22%;">Enterprise</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row" class="text-start">Rappels d'activités</th>
                            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">Gestion des leads</th>
                            <td></td>
                            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <th scope="row" class="text-start">Rapports statistiques</th>
                            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">Notifications par email</th>
                            <td></td>
                            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">Support client</th>
                            <td></td>
                            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">Trello</th>
                            <td></td>
                            <td></td>
                            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>

@endsection
