@extends('layouts.main')
@section('content')
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            @if (auth()->check() && auth()->user()->id)
                <div class="d-flex justify-content-between">
                    <a href="{{ route('commercial.dashboard') }}">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                            </svg>
                        </div>
                    </a>
                    <div>
                        @if(auth()->check() && auth()->user()->id)
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button :href="route('logout')"
                                        onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                    {{ __('Se déconnecter') }}
                                </button>
                            </form>
                        @else
                        @endif
                    </div>
                </div>
            @else
            @endif
        </div>
    </div>


    <div>
        <div class="nav-scroller bg-body shadow-sm">
            <nav class="nav nav-underline" aria-label="Secondary navigation">
                <a class="nav-link active" href="{{ route('admin.dashboard') }}">Dashboard</a>
                <a class="nav-link" href="#">Leads</a>
                <a class="nav-link active" href="{{ route('admin.users') }}">Utilisateurs</a>
            </nav>
        </div>
        <br>

        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="h-100 p-5 text-white bg-dark rounded-3">
                    <p>Administration des leads</p>
                    <p>
                        Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée                </p>
                    <button class="btn btn-outline-light" type="button">Leads</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <p>Administration des utilisateurs</p>
                    <p>
                        Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée                </p>

                    <a href="{{ route('admin.users') }}">
                        <div>
                            <button class="btn btn-outline-secondary" type="button">Utilisateurs</button>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


@endsection
