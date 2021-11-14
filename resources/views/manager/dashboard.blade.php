@extends('layouts.main')
@section('content')

    @include('layouts.sidebar')
    <div class="container row" style="width: 100%;margin-left: 5%;margin-top: 5%;">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">LEADS</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">40</div>
                        </div>
                        <a type="button" href="{{route('manager.leads')}}" style="margin-block: 0;background-color: dodgerblue;
                                   color: #ffffff">Liste des leads</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Gagné</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">215</div>
                        </div>
                        <a type="button" style="margin-block: 0;background-color: green;color: #ffffff">Liste des leads</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">À rappeler
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50</div>
                                </div>
                                <a type="button" style="margin-block: 0;background-color: #FBD146;color: #ffffff">Liste des leads</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Perdu</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <a type="button" style="margin-block: 0;background-color: #E56874;color: #ffffff">Liste des leads</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="d-flex">
            <div class=" p-5 text-white bg-dark">
                <p>GÉRER LEADS</p>
                <p>
                    Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée
                </p>
                <a href="{{ route('manager.leads') }}">
                    <button type="button" class="btn btn-secondary">Liste des leads</button>
                </a>
            </div>

            <div class=" p-5 text-white" style="background-color: #a0aec0; margin-left: 10px">
                <p>GÉRER COMMERCIAUX</p>
                <p>
                    Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée
                </p>
                <a href="{{ route('manager.users') }}">
                    <button type="button" class="btn btn-dark">Liste des commerciaux</button>
                </a>
            </div>
        </div>
    </div>
    </div>
    </div>

@endsection
