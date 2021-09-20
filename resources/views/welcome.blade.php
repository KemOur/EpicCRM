@extends('layouts.main')
@section('content')
    <div class="container py-10">
        <header>
            @extends("layouts.navigation")
        </header>
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-10 p-lg-10 mx-auto my-10">
                <h1 class="display-4 fw-normal">
                    La plateforme CRM simple à configurer
                    et à utiliser
                </h1>
                <p class="lead fw-normal">
                    Gardez le contrôle sur tout depuis un seul endroit avec EpicCRM.fr
                    Découvrez EpiCrm le logiciel qui bonifie votre processus de prospection commerciale. Pensé pour aider les équipes commerciales à suivre leurs prospects et conclure leurs ventes sans perdre de temps en saisies inutiles.
                </p>
                <a href="#">
                    <button type="button" class="w-30 btn btn-lg btn-outline-dark">Commencer</button>
                </a>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>

        <div class="container">
        <main>
            <div class="">
                <h3 class="" style="text-align: center; margin: 50px">
                    La plateforme CRM simple à utiliser
                </h3>
            </div>

            <div class="row row-cols-12 row-cols-md-12 mb-12 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                            <img class="fit-picture"
                                 src="#"
                                 alt="Image probleme des crm's">
                        <div class="card-body">
                            <h2 class="card-title pricing-card-title">
                                Le problème des CRMs
                            </h2>
                            <p>
                                Les CRMs se concentrent sur l'organisation de la donnée, mais vendre ce n'est pas trier. Vendre est un processus qui démarre avec un prospect et doit finir avec un client.
                                Chaque prospect devrait toujours avoir une prochaine action de planifiée pour l'amener à la dernière étape du processus commercial :
                                Conclure la vente !
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                            <img class="fit-picture"
                                 src="#"
                                 alt="Image probleme des crm's">
                        <div class="card-body">
                            <h2 class="card-title pricing-card-title">
                                Le problème des CRMs
                            </h2>
                            <p>
                                noCRM.io est une solution de suivi des opportunités commerciale basée sur les prochaines actions (relance email, appel, visite ...). Son but est d'aider vos équipes commerciales à se concentrer sur leur objectif principal, convertir les prospects en clients.
                                Créez facilement des opportunités depuis de multiples sources comme LinkedIn ou des cartes de visite. Diminuez le temps passé sur des formulaires et commencez à travaillez vos prospects tout de suite !
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                            <img class="fit-picture"
                                 src="#"
                                 alt="Image probleme des crm's">
                        <div class="card-body">
                            <h2 class="card-title pricing-card-title">
                                Le problème des CRMs
                            </h2>
                            <p>
                                noCRM.io est l'outil idéal pour les TPE/PME qui cherchent un outil simple et efficace pour organiser leur prospection commerciale. Grâce à ses différentes éditions il convient au 1er commercial comme à des équipes de vente de 100 personnes.
                                noCRM.io est un logiciel en SaaS, il ne nécessite ni installation ni maintenance. Votre compte est accessible en ligne, à n'importe quel moment, où que vous soyez.
                            </p>
                        </div>
                    </div>
                </div>
            </div>



            <div class="container px-4 py-5" id="icon-grid">
                    <hr>
                    <div>
                        <p style="text-align: center">
                            Les fonctionnalités dont vos commerciaux ont réellement besoin !
                        </p>
                    </div>

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
                    <div class="col d-flex align-items-start">
                        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#bootstrap"></use></svg>
                        <div>
                            <h6 class="fw-bold mb-0">
                                Création rapide d'opportunités
                            </h6>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#cpu-fill"></use></svg>
                        <div>
                            <h6 class="fw-bold mb-0">
                                Séparation des prospects froids et des leads chauds
                            </h6>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#calendar3"></use></svg>
                        <div>
                            <h6 class="fw-bold mb-0">
                                Toujours une prochaine action sur chaque lead
                            </h6>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#home"></use></svg>
                        <div>
                            <h6 class="fw-bold mb-0">
                                Représentation visuelle du pipeline commercial
                            </h6>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#speedometer2"></use></svg>
                        <div>
                            <h6 class="fw-bold mb-0">
                                Des scripts d'appels pour bien qualifier les prospects
                            </h6>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#toggles2"></use></svg>
                        <div>
                            <h6 class="fw-bold mb-0">
                                Historique des échanges avec les prospects
                            </h6>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#geo-fill"></use></svg>
                        <div>
                            <h6 class="fw-bold mb-0">
                                Une équipe commerciale qui collabore mieux
                            </h6>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#tools"></use></svg>
                        <div>
                            <h6 class="fw-bold mb-0">
                                Pilotage des performances avec des rapports clés
                            </h6>
                        </div>
                    </div>
                </div>
            </div>


            <hr>
            <div>
                <p style="text-align: center; margin: 50px">
                    Les fonctionnalités dont vos commerciaux ont réellement besoin !
                </p>
            </div>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Free</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">8€<small class="text-muted fw-light">/mois</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li style="position: center"> Création d’opportunités</li>
                                <li style="position: center"> Amélioration et suivie de la performance</li>
                                <li style="position: center"> Rappels d’activités</li>
                            </ul>

                            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Test gratuit</button>
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
                                <li>20 users included</li>
                                <li>10 GB of storage</li>
                                <li>Priority email support</li>
                                <li>Help center access</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-primary">Test gratuit</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm border-primary">
                        <div class="card-header py-3 text-white bg-primary border-primary">
                            <h4 class="my-0 fw-normal">Enterprise</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">30€<small class="text-muted fw-light">/mois</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>30 users included</li>
                                <li>15 GB of storage</li>
                                <li>Phone and email support</li>
                                <li>Help center access</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-primary">Test gratuit</button>
                        </div>
                    </div>
                </div>
            </div>

        </main>
        </div>

@endsection
