
<!-- sidebar -->
<div class="d-flex" style="height: 100vh;">
    <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 20%; background-color: #4e73df">
        <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <small class="fs-4" style="color: #ffffff">Menu</small>
        </a>

        <ul class="nav nav-pills flex-column mb-auto">
            <hr style="color: #ffffff">

            <li class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse-a" aria-expanded="false">
                <a class="nav-link link-dark" href="{{ route('admin.dashboard') }}" style="color: #ffffff">
                    <div>
                        <div style="float: left; display: flex; margin-right: 10px; margin-top: 4px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                        </div>
                        <div style="display: flex;"> <p> Tableau de bord </p> </div>
                    </div>
                </a>
            </li>

            <li class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse-a" aria-expanded="false">
                <a class="nav-link link-dark" href="{{route('admin.profile')}}" style="color: #ffffff">
                    <div>
                        <div style="float: left; display: flex; margin-right: 10px; margin-top: 4px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            </svg>
                        </div>

                        <div style="display: flex;"> <p> Profile </p></div>

                    </div>
                </a>
            </li>


            <li class="mb-1">
                <div class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#clients" aria-expanded="false">
                    <a class="nav-link link-dark" style="color: #ffffff">
                        <div style="float: left; display: flex; margin-right: 10px; margin-top: 4px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                            </svg>
                        </div>
                        <div style="display:flex;">
                            <p> Clients </p>
                            <svg xmlns="http://www.w3.org/2000/svg" style="float: right; margin-left: 53px;margin-top: 5px" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </div>
                    </a>
                </div>

                <div class="collapse" id="clients" style="margin-left: 50px">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="link-dark rounded" style="color: #ffffff">Liste des clients</a></li>
                        <li><a href="#" class="link-dark rounded" style="color: #ffffff">Ajouter un client</a></li>
                    </ul>
                </div>
                <hr style="color: #ffffff">
            </li>


            <li class="mb-1">
                <div class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#users" aria-expanded="false">
                    <a class="nav-link link-dark" style="color: #ffffff">
                        <div style="float: left; display: flex; margin-right: 10px; margin-top: 4px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                                <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                                <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
                                <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                        </div>
                        <div style="display:flex;">
                            <p> Utilisateurs </p>
                            <svg xmlns="http://www.w3.org/2000/svg" style="float: right; margin-left: 53px;margin-top: 5px" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </div>
                    </a>
                </div>

                <div class="collapse" id="users" style="margin-left: 50px">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="{{ route('admin.users') }}" class="link-dark rounded" style="color: #ffffff">Tous les utilisateurs</a></li>
                        <li><a href="{{ route('admin.adduser')}}" class="link-dark rounded" style="color: #ffffff">Ajouter un utilisateur</a></li>
                    </ul>
                </div>
                <hr style="color: #ffffff">
            </li>


            <li class="mb-1">
                <div class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                    <a class="nav-link link-dark" style="color: #ffffff">
                        <div style="float: left; display: flex; margin-right: 10px; margin-top: 4px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-task" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z"/>
                                <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z"/>
                                <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z"/>
                            </svg>
                        </div>
                        <div style="display:flex;">
                            <p> Leads </p>
                            <svg xmlns="http://www.w3.org/2000/svg" style="float: right; margin-left: 53px;margin-top: 5px" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </div>
                    </a>
                </div>

                <div class="collapse" id="dashboard-collapse" style="margin-left: 50px">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="{{ route('admin.leads') }}" class="link-dark rounded" style="color: #ffffff">Tous les leads</a></li>
                        <li><a href="{{ route('admin.addlead')}}" class="link-dark rounded" style="color: #ffffff">Ajouter un lead</a></li>
                        <li><a href="#" class="link-dark rounded" style="color: #ffffff">Leads Gagné</a></li>
                        <li><a href="#" class="link-dark rounded" style="color: #ffffff">Leads Perdu</a></li>
                    </ul>
                </div>
                <hr style="color: #ffffff">
            </li>


            <li class="mb-1">
                <div class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#params" aria-expanded="false">
                    <a class="nav-link link-dark" style="color: #ffffff">
                        <div style="float: left; display: flex; margin-right: 10px; margin-top: 4px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                            </svg>
                        </div>

                        <div style="display:flex;">
                            <p> Parametrès </p>
                            <svg xmlns="http://www.w3.org/2000/svg" style="float: right; margin-left: 53px;margin-top: 5px" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </div>
                    </a>
                </div>

                <div class="collapse" id="params" style="margin-left: 50px">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <div type="button" class="btn btn-secondary btn-sm" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                    <small style="color: #ffffff">{{ __('Déconnexion') }}</small>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
                <hr style="color: #ffffff">
            </li>
        </ul>
    </div>
    <!-- end sidebar -->

    <div class="col-md-6" style="width: 80%;background-color: #F8F9FC;">
        <div class="" style="background-color: #ffffff">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom" style="width: 98%">
                <div class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="30" viewBox="0 0 16 16" >
                        <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm12 2H5a1 1 0 0 0-1 1v7h7a1 1 0 0 0 1-1V4z"/>
                    </svg> | EpicCRM
                </div>


                <div class="col-md-2 text-end">
                    <div class="nav-scroller bg-body shadow-sm">
                        <div class="dropdown" >
                            <a href="#" style="margin-right: 10px" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" fill="currentColor"
                                     class="bi bi-circle-square" viewBox="0 0 16 16">
                                    <path d="M0 6a6 6 0 1 1 12 0A6 6 0 0 1 0 6z" style="color: aquamarine"/>
                                    <path d="M12.93 5h1.57a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-9a.5.5 0 0
                                        1-.5-.5v-1.57a6.953 6.953 0 0 1-1-.22v1.79A1.5 1.5 0 0 0 5.5 16h9a1.5
                                        1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 4h-1.79c.097.324.17.658.22 1z" style="color: #ffffff"/>
                                </svg>
                                @if (auth()->check() && auth()->user()->id)
                                    <h6 style="margin: 13px"> {{auth()->user()->firstname}}</h6>
                                @else
                                @endif
                            </a>
                            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                                <a class="dropdown-item" href="{{route('admin.profile')}}"> Profaefile </a>
                                <hr>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        @if(auth()->check() && auth()->user()->id)
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button type="button" class="btn btn-dark btn-sm"
                                                        :href="route('logout')"
                                                        onclick="event.preventDefault(); this.closest('form').submit();"> <small style="color: #ffffff">{{ __('Déconnexion') }}</small> </button>
                                            </form>
                                        @else
                                        @endif
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </header>
        </div>
