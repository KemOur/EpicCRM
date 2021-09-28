@extends('layouts.main')
@section('content')
    <div class="container">
        <header>
            @extends("layouts.navigation")
        </header>
        <main><br><br>
            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h3> Qu'est-ce que le CRM ? </h3>
                    <p>
                        Le CRM ou gestion de la relation client (Customer Relationship Management) est une stratégie de gestion des relations et interactions
                        d'une entreprise avec ses clients ou clients potentiels. Un système CRM aide les entreprises à interagir en permanence avec les clients,
                        à rationaliser leurs processus et à améliorer leur rentabilité.
                    </p>
                </div>
                <hr>

                <div class="container-fluid py-5">
                    <h3> Le CRM englobe généralement trois notions : </h3>
                    <p>
                        Le CRM en tant que technologie : produit technologique, souvent basé sur le cloud, que les équipes utilisent pour enregistrer,
                        suivre et analyser les interactions entre l'entreprise et les utilisateurs. Il est également appelé système ou solution CRM.
                        Le CRM en tant que stratégie : philosophie d'entreprise sur la façon dont devraient être gérées les relations avec les clients et les clients potentiels
                        Le CRM en tant que processus : système adopté par une entreprise pour développer et gérer ces relations.
                    </p>
                </div>
            </div>
        </main>
    </div>

@endsection
