@extends('layouts.main')
@section('content')
    <div class="container">
        <header>
            @extends("layouts.navigation")
        </header>
        <main>
                <h2 style="text-align: center; margin-top: 30px; font-family: Roboto;">
                    Un tarif qui s'adapte
                </h2>

                <h5 style="text-align: center; margin-top: 10px; font-family: Roboto;">
                    Boostez vos ventes quelle que soit la taille de vos équipes.
                </h5>

                <p style="text-align: center; margin-top: 5px; font-family: Roboto;">
                    Toutes les éditions de EpicCRM sont conformes au RGPD. <small>Paiement mensuel sans engagement</small>
                </p><br>

            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3 text-white bg-info border-info">
                            <h4 class="my-0 fw-normal">Débutant</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">8€<small class="text-muted fw-light">/mois</small></h1>
                            <p>
                                Abandonnez votre tableur et commencez à gérer vos leads plus efficacement.
                            </p>

                            <button type="button" class="w-100 btn btn-lg btn-outline-info">Test gratuit</button>
                            <hr>
                            <small><strong>Création rapide d’opportunités :</strong></small>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Intégration au formulaire</li>
                                <li class="list-group-item">Import de fichier Excel & CSV</li>
                            </ul>
                            <small><strong>Améliorer la performance des ventes :</strong></small>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Prioritisation des leads</li>
                                <li class="list-group-item">Classification par catégories</li>
                                <li class="list-group-item">Import de fichiers de prospection</li>
                            </ul>
                            <small><strong>Support client et formation :</strong></small>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Support par email et téléphone - Réponse dans les 24h (email)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3 text-white bg-info border-info">
                            <h4 class="my-0 fw-normal">Pro</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">20€<small class="text-muted fw-light">/mois</small></h1>
                            <p>
                                Rendez votre processus commercial plus efficace de la prospection au closing.
                            </p>
                            <button type="button" class="w-100 btn btn-lg btn-info" style="color: #ffffff">Test gratuit</button>
                            <hr>
                            <small><strong>Création rapide d’opportunités :</strong></small>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Intégration au formulaire</li>
                                <li class="list-group-item">Import de fichier Excel & CSV</li>
                            </ul>
                            <small><strong>Suivi de l’activité commerciale :</strong></small>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Paramétrage des activités commerciales (rdv, appel, email, ...)</li>
                                <li class="list-group-item">Rapports des actions commerciales</li>
                            </ul>
                            <small><strong>Gestion de processus après-vente :</strong></small>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Création de listes de tâches</li>
                                <li class="list-group-item">Rappels automatique des tâches</li>
                                <li class="list-group-item">Assignation des tâches après-vente</li>
                            </ul>
                            <small><strong>Support client et formation :</strong></small>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Support par email et téléphone - Réponse en moins de 2 heures (heures de bureau).</li>
                            </ul>
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
                            <p>
                                Boostez votre stratégie commerciale, organisez votre équipe et augmentez vos revenus.
                            </p>
                            <button type="button" class="w-100 btn btn-lg btn-info" style="color: #ffffff">Test gratuit</button>
                            <hr>
                            <small><strong>Suivi de l’activité commerciale :</strong></small>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Paramétrage des activités commerciales (rdv, appel, email, ...)</li>
                                <li class="list-group-item">Rapports des actions commerciales</li>
                            </ul>
                            <small><strong>Gestion de processus après-vente :</strong></small>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Création de listes de tâches</li>
                                <li class="list-group-item">Rappels automatique des tâches</li>
                                <li class="list-group-item">Assignation des tâches après-vente</li>
                            </ul>
                            <small><strong>Gestion des équipes :</strong></small>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Création et gestion des équipes</li>
                                <li class="list-group-item">Suivi des objectifs des commerciaux</li>
                                <li class="list-group-item">Assignation des prospects</li>
                            </ul>
                            <small><strong>Support client et formation :</strong></small>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Support par email et téléphone - Réponse en moins de 2 heures (heures de bureau).</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="bg-light p-5 rounded mt-3">
                <h2>Accompagnement Premium en ligne à partir de 900€ </h2>
                <p class="lead">Cette offre est divisée en 4 étapes : Analyse, Formation, Livrables et Suivi Client.</p>
                <a class="w-30 btn btn-lg btn-outline-info" href="/docs/5.1/components/navbar/" role="button">Contactez-nous »</a>
            </div>
            <br>
            <p style="text-align: center;">
                Cette offre est divisée en 4 étapes : Analyse, Formation, Livrables et Suivi Client. Ces différentes étapes nous permettront de vous fournir un accompagnement au démarrage personnalisé afin que vous et votre équipe soyez totalement prêts à utiliser EpicCRM.
                <hr>Nous nous assurerons également que votre compte est bien configuré afin que chaque nouvel utilisateur s'approprie facilement noCRM et atteigne encore plus rapidement ses objectifs commerciaux.
            </p>
            <br>
            <br>
            <div class="row text-center">
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

                <div>
                    <br>
                    <br>
                    <div class="bg-light p-5 rounded mt-3">
                        <h6>Formation des Administrateurs à l'usage de noCRM et à la gestion du compte : équipes, reporting, personnalisation. </h6>
                        <a class="w-30 btn btn-lg btn-outline-info" href="/docs/5.1/components/navbar/" role="button">Démarrer votre test gratuit »</a>
                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection
