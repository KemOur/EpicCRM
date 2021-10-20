@extends('layouts.main')
@section('content')

    <!-- sidebar -->
    <div class="d-flex" style="height: 100vh; ">
        <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 16%; background-color: #4e73df">

            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                <span class="fs-4" style="color: #ffffff; font-family: 'Nunito', sans-serif">EpicCRM</span>
            </a>
            <hr>

            <ul class="nav nav-pills flex-column mb-auto">
                <div>
                    <li>
                        <a href="{{ route('admin.dashboard') }}" class="nav-link link-dark">
                            <h6 style="color: #ffffff">Tableau de bord</h6>
                        </a>
                    </li>
                </div>


                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                        <a href="#" class="nav-link link-dark" style="color: #ffffff">
                            Utilisateurs
                            <svg xmlns="http://www.w3.org/2000/svg" style="float: right; margin-left: 5px;margin-top: 10px" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </a>
                    </button>

                    <div class="collapse" id="dashboard-collapse" style="margin-left: 30px">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="{{ route('admin.users') }}" class="link-dark rounded">Tout les utilisateurs</a></li>
                            <li><a href="#" class="link-dark rounded">Administrateurs</a></li>
                            <li><a href="#" class="link-dark rounded">Commerciaux</a></li>
                        </ul>
                    </div>
                </li>


                <li class="mb-1">
                    <button class="btn btn-toggle">
                        <a class="nav-link link-dark" style="color: #ffffff" href="#">
                            Leads
                            <svg xmlns="http://www.w3.org/2000/svg" style="float: right; margin-left: 5px;margin-top: 10px" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </a>
                    </button>

                    <div class="" id="" style="margin-left: 30px">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href=" {{ route('admin.leads') }}"  class="link-dark rounded">Tous les leads</a></li>
                            <li><a href="#" class="link-dark rounded">Entrant</a></li>
                            <li><a href="#" class="link-dark rounded">Devis envoyé</a></li>
                            <li><a href="#" class="link-dark rounded">Gagné</a></li>
                            <li><a href="#" class="link-dark rounded">Perdu</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <hr>

            <div class="dropdown">
                <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    @if (auth()->check() && auth()->user()->id)
                        <h5> {{auth()->user()->firstname}}</h5>
                    @else
                    @endif
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                    <li><a class="dropdown-item" href="#">

                            @if(auth()->check() && auth()->user()->id)
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button style="color:#1a202c;margin-left: 10px" :href="route('logout')"
                                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                        {{ __('Déconnexion') }}
                                    </button>
                                </form>
                            @else
                            @endif
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end sidebar -->



        <div class="col-md-6" style="width: 84%">
                <div class="nav-scroller bg-body shadow-sm">
                    <nav class="container nav nav-underline" aria-label="Secondary navigation">
                        <a class="nav-link active" href="{{ route('commercial.dashboard') }}">Commercial-dashboard</a>
                        <a class="nav-link active" href="{{ route('admin.leads') }}">Leads</a>
                        <a class="nav-link active" href="{{ route('admin.users') }}">Utilisateurs</a>
                    </nav>
                </div>
            @if(session('success'))
                <ul>
                    <li style="background-color: mediumseagreen; color: white; text-align: center"><small>{{ session('success') }}</small></li>
                </ul>
            @endif

            <br>
            <div class="">
                <div class=" shadow-sm">
                    <small class="" style="margin-left: 10px">Détails</small>
                    <div class="list-group list-group-checkable"><br>
                        <label class="list-group-item py-3" for="listGroupCheckableRadios2">
                            <h1 class="d-block text-gray-dark">{{$lead->client}}</h1><br>
                            <small>date :{{$lead->date}}</small>

                            <div>Téléphone :{{ $lead->phone }}</div>

                            <div>Email :{{ $lead->email }}</div>
                            <br>
                            <div>Entreprise :{{ $lead->company }} </div>

                            <div>Montant :{{ $lead->coast }} </div>

                            <div>Provenance :{{ $lead->origin }} </div>

                            <div>Status :{{ $lead->state }} </div>
                            <br>
                            <p>Description :{{ $lead->description }} </p>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        </div>
@endsection
