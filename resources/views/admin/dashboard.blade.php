@extends('layouts.main')
@section('content')

<!-- sidebar -->
    <div class="d-flex" style="height: 100vh;">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 20%;">

            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                <span class="fs-4">EpicCRM</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">

                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link active" aria-current="page">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                        Tableau de bord
                    </a>
                </li>
                <br>

                <div>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            Utilisateurs
                            <svg xmlns="http://www.w3.org/2000/svg" style="float: right;margin-top: 10px" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </a>
                    </li>
                </div>

                <div class="" id="" style="margin-left: 30px">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="link-dark rounded">Tout les utilisateurs</a></li>
                        <li><a href="#" class="link-dark rounded">Administrateurs</a></li>
                        <li><a href="#" class="link-dark rounded">Commerciaux</a></li>
                    </ul>
                </div>


                <li class="">
                    <div>
                        <a class="nav-link link-dark" href="#">
                            Leads
                            <svg xmlns="http://www.w3.org/2000/svg" style="float: right; margin-left: 5px;margin-top: 10px" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </a>
                    </div>

                    <div class="" id="" style="margin-left: 30px">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-dark rounded">Tous les leads</a></li>
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



        <div class="col-md-6" style="width: 80%">
            <div>

                <div class="nav-scroller bg-body shadow-sm">
                    <nav class="container nav nav-underline" aria-label="Secondary navigation">
                        <a class="nav-link active" href="{{ route('commercial.dashboard') }}">Commercial-dashboard</a>
                        <a class="nav-link active" href="{{ route('admin.leads') }}">Leads</a>
                        <a class="nav-link active" href="{{ route('admin.users') }}">Utilisateurs</a>
                    </nav>
                </div>
            </div>

            <div class="d-flex">
                <div class=" p-5 text-white bg-dark">
                    <p>Administration des leads</p>
                    <p>
                        Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée                </p>
                    <a href="{{ route('admin.leads') }}">
                        <button class="btn btn-outline-light" type="button">Leads</button>
                    </a>
                </div>

                <div class=" p-5 text-white" style="background-color: #a0aec0">
                    <p>Administration des utilisateurs</p>
                    <p>
                        Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée                </p>
                    <a href="{{ route('admin.users') }}">
                        <button class="btn btn-outline-light" type="button">Utilisateurs</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
