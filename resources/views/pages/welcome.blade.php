@extends('layouts.main')
@section('content')
    @extends("layouts.navigation")

    <div class="bg-black py-5" style="background-color: #F8F9FA">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <div class="my-5 text-center text-xl-start">
                            <h1 class="display-5 fw-bolder text-black mb-2">Le crm que vos commerciaux vont aimer remplir !</h1>
                            <p class="lead fw-normal text-black-50 mb-4">
                                Pensé pour aider les équipes commerciales à suivre leurs prospects et conclure leurs ventes sans perdre de temps en saisies inutiles.
                            </p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                <a class="btn btn-outline-info btn-lg px-4" href="#!">Démarrer votre test gratuitement</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                        <img src="{{asset('./imgs/dashboard.png')}}" alt="image logo" class="image_logo" style="width: 500px; height: 280px">
                    </div>
                </div>
            </div>
        </div>

            <main class="container">
                    <h4 style="text-align: center; margin: 35px; font-family: Roboto;">
                        La plateforme CRM simple à utiliser
                    </h4>

                <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3 text-white bg-info border-info">
                                <h4 class="my-0 fw-normal">Débutant</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">10€<small class="text-muted fw-light">/mois</small></h1>
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
                            <div class="card-header py-3 text-white bg-info border-info">
                                <h4 class="my-0 fw-normal ">Pro</h4>
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
                            <div class="card-header py-3 text-white bg-info border-info">
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
                        <h5 style="text-align: center;">
                            Les fonctionnalités dont vos commerciaux ont réellement besoin !
                        </h5>
                    </div><br>

                    <section class="pt-4">
                        <div class="px-lg-5">
                            <!-- Page Features-->
                            <div class="row gx-lg-5">
                                <div class="col-lg-6 col-xxl-4 mb-5">
                                    <div class="card border-0 h-100" style="background-color: #F8F9FA">
                                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                                                <i class="bi bi-collection"></i>
                                            </div>
                                            <h2 class="fs-4 fw-bold">Rappels d'activités</h2>
                                            <small class="mb-0">
                                                Le lorem ipsum est, en imprimerie, une suite de mots sans signification.
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xxl-4 mb-5">
                                    <div class="card border-0 h-100" style="background-color: #F8F9FA">
                                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-cloud-download"></i></div>
                                            <h2 class="fs-4 fw-bold">Gestion des leads</h2>
                                            <small class="mb-0">
                                                Le lorem ipsum est, en imprimerie, une suite de mots sans signification.
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xxl-4 mb-5">
                                    <div class="card border-0 h-100" style="background-color: #F8F9FA">
                                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-card-heading"></i></div>
                                            <h2 class="fs-4 fw-bold">Rapports statistiques</h2>
                                            <small class="mb-0">
                                                Le lorem ipsum est, en imprimerie, une suite de mots sans signification.
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xxl-4 mb-5">
                                    <div class="card border-0 h-100" style="background-color: #F8F9FA">
                                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-bootstrap"></i></div>
                                            <h2 class="fs-4 fw-bold">Notifications par email</h2>
                                            <small class="mb-0">
                                                Le lorem ipsum est, en imprimerie, une suite de mots sans signification.
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xxl-4 mb-5">
                                    <div class="card border-0 h-100" style="background-color: #F8F9FA">
                                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-code"></i></div>
                                            <h2 class="fs-4 fw-bold">Suivi de l’activité</h2>
                                            <small class="mb-0">
                                                Le lorem ipsum est, en imprimerie, une suite de mots sans signification.
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xxl-4 mb-5">
                                    <div class="card border-0 h-100" style="background-color: #F8F9FA">
                                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-patch-check"></i></div>
                                            <h2 class="fs-4 fw-bold">Trello</h2>
                                            <small class="mb-0">
                                                Le lorem ipsum est, en imprimerie, une suite de mots sans signification.
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
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
<br>
<br>
    @include('partials.footer')
@endsection
