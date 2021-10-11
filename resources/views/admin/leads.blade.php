@extends('layouts.main')
@section('content')

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            @if (auth()->check() && auth()->user()->id)
                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.dashboard') }}">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                            </svg>
                        </div>
                    </a>
                    <div>
                        @if (auth()->check() && auth()->user()->id)
                            <h6>Espace de travail {{auth()->user()->firstname}}</h6>
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
        @if(session('success'))
            <ul>
                <li style="background-color: mediumseagreen; color: white; text-align: center"><small>{{ session('success') }}</small></li>
            </ul>
        @endif


        <div class="row align-items-md-stretch">

            <div>
                <a href="{{ route('admin.adduser') }}">
                    <div>
                        <button style="float: right" type="button" class="btn btn-outline-info">Ajouter un lead</button>
                    </div>
                </a>
            </div>
            <br>
            <br>
            <hr>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Date</th>
                    <th scope="col">Clients</th>
                    <th scope="col">Entreprise</th>
                    <th scope="col">Montant</th>
                    <th scope="col">Provenance</th>
                    <th scope="col">Status</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Téléphone</th>
                    <th scope="col">Notes</th>
                </tr>
                </thead>

                        <tbody>
                        <tr>
                            <th scope="row">id</th>
                            <td><small>10/12/2021</small></td>
                            <td><small>Junioor</small></td>
                            <td><small>EpicEvents</small></td>
                            <td><small>2000€</small></td>
                            <td><small>laboratoire chinois</small></td>
                            <td><small>to do</small></td>
                            <td><small>junior@gmail.com</small></td>
                            <td><small>0102030404</small></td>

                            <td>
                                <a href="">
                                <svg style="color: skyblue" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-square" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                    <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
                                </svg>
                                </a>
                            </td>

                            <td>
                                <a href="">
                                    <svg style="color: #59B0E3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg>
                                </a>
                            </td>

                            <td>
                                <form action="" method="post">
                                    <button onclick="return confirm('Vous êtes sûr ?')" type="submit">
                                        <svg style="color: red" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                        </svg>
                                    </button>
                                </form>
                            </td>

                        </tr>
                    </tbody>
            </table>
        </div>
    </div>


@endsection
