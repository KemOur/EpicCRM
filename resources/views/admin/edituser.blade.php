@extends('layouts.main')
@section('content')
    <!-- sidebar -->
    <div class="d-flex" style="height: 100vh;">
        <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 16%; background-color: #4e73df">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                <span class="fs-4" style="color: #ffffff">EpicCRM</span>
            </a>
            <hr style="color: #ffffff">
            <ul class="nav nav-pills flex-column mb-auto">
                <div>
                    <li>
                        <a href="{{ route('admin.dashboard') }}" class="nav-link link-dark">
                            <h6 style="color: #ffffff">Tableau de bord</h6>
                        </a>
                    </li>
                </div>
                <hr style="color: #ffffff">


                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                        <a href="#" class="nav-link link-dark" style="color: #ffffff">
                            <div>
                                <div style="float: left; display: flex; margin-right: 10px; margin-top: 4px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                                        <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                                        <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
                                        <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                                    </svg>
                                </div>

                                <div style="display: flex;">
                                    <p>
                                        Utilisateurs
                                    </p>
                                    <svg xmlns="http://www.w3.org/2000/svg" style="float: right; margin-left: 14px;margin-top: 5px" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </button>

                    <div class="collapse" id="dashboard-collapse" style="margin-left: 50px">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="{{ route('admin.users') }}" class="link-dark rounded" style="color: #ffffff">Tout les utilisateurs</a></li>
                            <li><a href="#" class="link-dark rounded" style="color: #ffffff">Administrateurs</a></li>
                            <li><a href="#" class="link-dark rounded" style="color: #ffffff">Commerciaux</a></li>
                        </ul>
                    </div>
                </li>
                <hr style="color: #ffffff">




                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                        <a class="nav-link link-dark" href="#" style="color: #ffffff">
                            <div style="float: left; display: flex; margin-right: 10px; margin-top: 4px">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-task" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z"/>
                                    <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z"/>
                                    <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z"/>
                                </svg>
                            </div>
                            <div style="display:flex;">
                                <p>
                                    Leads
                                </p>
                                <svg xmlns="http://www.w3.org/2000/svg" style="float: right; margin-left: 53px;margin-top: 5px" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </div>
                        </a>
                    </button>

                    <div class="collapse" id="dashboard-collapse" style="margin-left: 50px">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="{{ route('admin.leads') }}" class="link-dark rounded" style="color: #ffffff">Tous les leads</a></li>
                            <li><a href="#" class="link-dark rounded" style="color: #ffffff">Entrant</a></li>
                            <li><a href="#" class="link-dark rounded" style="color: #ffffff">Devis envoyé</a></li>
                            <li><a href="#" class="link-dark rounded" style="color: #ffffff">Gagné</a></li>
                            <li><a href="#" class="link-dark rounded" style="color: #ffffff">Perdu</a></li>
                        </ul>
                    </div>
                    <hr style="color: #ffffff">
                </li>
            </ul>
            <hr>

            <div class="dropdown">
                <a href="#" style="margin-right: 30px" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-square" viewBox="0 0 16 16">
                        <path d="M0 6a6 6 0 1 1 12 0A6 6 0 0 1 0 6z" style="color: aquamarine"/>
                        <path d="M12.93 5h1.57a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-9a.5.5 0 0
                         1-.5-.5v-1.57a6.953 6.953 0 0 1-1-.22v1.79A1.5 1.5 0 0 0 5.5 16h9a1.5
                         1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 4h-1.79c.097.324.17.658.22 1z" style="color: #ffffff"/>
                    </svg>
                    @if (auth()->check() && auth()->user()->id)
                        <h5 style="color: #ffffff"> {{auth()->user()->firstname}}</h5>
                    @else
                    @endif
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                    <li><a class="dropdown-item" href="#"> Profile </a> </li>
                    <hr>
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



        <div class="col-md-6" style="width: 84%;background-color: #F8F9FC;">
            <div>

                <div class="nav-scroller bg-body shadow-sm">
                    <nav class="container nav nav-underline" aria-label="Secondary navigation">
                        <a class="nav-link active" href="{{ route('admin.dashboard') }}">Dashboard</a>
                        <a class="nav-link active" href="{{ route('admin.leads') }}">Leads</a>
                        <a class="nav-link active" href="{{ route('admin.users') }}">Utilisateurs</a>
                    </nav>
                </div>
            </div>


            <br>
            <div class="col-md-6 col-lg-6 item" style="margin-left: 25%;margin-right: 25%; background-color: #ffffff; border-radius: 15px;"><br>
                <form method="POST" action="{{ route('admin.update.user', $user->id) }}" style="margin: 5%;">
                @csrf
                @method('put')

                <x-label for="firstname" :value="__('NOM')" />
                <x-input id="firstname" class="block mt-1 w-full" type="text" name="firstname"
                         value="{{$user->firstname}}" required autofocus/>
                @error('firstname')
                {{$message}}
                @enderror
                <x-label for="lastname" :value="__('Prénom')" />
                <x-input id="lastname" class="block mt-1 w-full" type="text" name="lastname"
                         value="{{$user->lastname}}" required autofocus/>
                @error('lastname')
                {{$message}}
                @enderror
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                         value="{{$user->email}}" required />
                @error('email')
                {{$message}}
                @enderror
                <x-label for="password" :value="__('Mot passe')" />
                <x-input id="password" class="block mt-1 w-full"
                         type="password"
                         name="password"
                         value="{{$user->password}}"
                         required autocomplete="new-password" />
                @error('password')
                {{$message}}
                @enderror

                <div class="mt-4">
                    <x-label for="password_confirmation" :value="__('Confirmer mot passe')" />
                    <x-input id="password_confirmation" class="block mt-1 w-full"
                             type="password"
                             value="{{$user->password}}"
                             name="password_confirmation" required />
                </div>
                <br>
                <br>
                @if (auth()->user()->is_admin)
                    <label for="is_admin"><input type="checkbox" name="is_admin" id="is_admin" {{ $user->is_admin ? " checked" : ""}}> Administrateur</label>
                @endif
                <x-button class="ml-4">
                    {{ __('Modifier') }}
                </x-button>
                <br>
                <br>
            </form>
        </div>
        <br>
    </div>

@endsection
