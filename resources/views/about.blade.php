@extends('layouts.main')
@section('content')
    <div class="container">
        <header>
            @extends("layouts.navigation")
        </header>
        <main>
            <h2 style="text-align: center; margin: 30px; font-family: Roboto;">
                Un tarif qui s'adapte
            </h2>

            <h4 style="text-align: center; margin: 10px; font-family: Roboto;">
                Boostez vos ventes quelle que soit la taille de vos équipes.
            </h4>

            <p style="text-align: center; margin: 25px; font-family: Roboto;">
                Toutes les éditions de EpicCRM sont conformes au RGPD.
            </p>

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

            <br>
            <br>
            <h2 style="text-align: center; font-family: Roboto;"> Accompagnement Premium en ligne </h2>
            <h3 style="text-align: center; font-family: Roboto;"> À partir de 900€ </h3>
            <div class="centerBtn" style="display: flex; justify-content: center; align-items: center;">
                <button type="button" class="w-47 btn btn-lg btn-outline-info" style="text-align: center; margin: 20px;">Test gratuit</button>
            </div>

            <p style="text-align: center;">
                Cette offre est divisée en 4 étapes : Analyse, Formation, Livrables et Suivi Client. Ces différentes étapes nous permettront de vous fournir un accompagnement au démarrage personnalisé afin que vous et votre équipe soyez totalement prêts à utiliser noCRM. Nous nous assurerons également que votre compte est bien configuré afin que chaque nouvel utilisateur s'approprie facilement noCRM et atteigne encore plus rapidement ses objectifs commerciaux.
            </p>
            <br>

            <div class="row text-center" style="margin: 20px;">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">1</h4>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title pricing-card-title">Analyse</h3>
                            <p>
                                Analyse des problématiques rencontrées et personnalisation du compte en fonction des besoins de votre entreprise.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">2</h4>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title pricing-card-title">Formation</h3>
                            <p>
                                Formation des Administrateurs à l'usage de noCRM et à la gestion du compte : équipes, reporting, personnalisation.
                            <hr>
                            Formation Utilisateurs pour une prise en main efficace de noCRM, basée sur votre processus de vente - de la qualification de contacts à la gestion d’opportunités qualifiées et au closing.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">3</h4>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title pricing-card-title">Livrables</h3>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li style="position: center"> Création d’opportunités</li>
                                <li style="position: center"> Amélioration et suivie de la performance</li>
                                <li style="position: center"> Rappels d’activités</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">4</h4>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title pricing-card-title">Suivre</h3>
                            <p>
                                Enregistrements édités des formations, pour que vous puissiez les partager avec votre équipe.
                            <hr>
                            Document d’onboarding adapté à vos besoins.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection
