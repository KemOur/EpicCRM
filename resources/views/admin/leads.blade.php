@extends('layouts.main')
@section('content')
    <div style="background-color: #52cffb" class="text-white bg-purple rounded shadow-sm">
        <div class="p-6 bg- border-b border-gray-200">
            <div style="display: flex">
                <div>
                    <a href="{{ route('admin.dashboard') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="26" fill="currentColor" style="color: #ffffff" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                        </svg>
                    </a>
                </div>
                <div>
                    <p>revenir</p>
                </div>
            </div>
        </div>
    </div>
        <div class="nav-scroller bg-body shadow-sm">
            <nav class="container nav nav-underline" aria-label="Secondary navigation">
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

    <div class="container">
        <div class="row align-items-md-stretch">
            <div style="">
                <div style="float: left">
                    <a href="{{ route('admin.addlead') }}">
                        <div>
                            <button class="btn btn-primary" type="button">Ajouter un lead</button>
                        </div>
                    </a>
                </div>
            </div>

            <br>
            <br>
            <hr>

            <table id="id_lead" class="display table table-striped">
                <thead>
                <tr>
                    <th scope="col"><small>Clients</small></th>
                    <th scope="col"><small>Entreprise</small></th>
                    <th scope="col"><small>Montant</small></th>
                    <th scope="col"><small>Provenance</small></th>
                    <th scope="col"><small>Status</small></th>
                    <th scope="col"><small>Mail</small></th>
                    <th scope="col"><small>Téléphone</small></th>
                    <th scope="col"><small>Détail</small></th>
                    <th scope="col"><small>Modifier</small></th>
                    <th scope="col"><small>Supprimer</small></th>
                </tr>
                </thead>

                        <tbody>
                        @if($leads->isNotEmpty())
                            @foreach($leads as $lead)
                        <tr>
                            <td><small>{{ $lead->client }}</small></td>
                            <td><small>{{ $lead->company }}</small></td>
                            <td><small>{{ $lead->coast }}€</small></td>
                            <td><small>{{ $lead->origin }}</small></td>
                            <td><small>{{ $lead->state }}</small></td>
                            <td><small>{{ $lead->email }}</small></td>
                            <td><small>{{ $lead->phone }}</small></td>

                            <td>
                                <a href="{{route('admin.show', $lead->id )}}">
                                    <svg style="color: skyblue" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-square" viewBox="0 0 16 16">
                                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                        <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
                                    </svg>
                                </a>
                            </td>

                            <td>
                                <a href="{{route('admin.edit', $lead->id )}}">
                                    <svg style="color: #59B0E3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg>
                                </a>
                            </td>

                            <td>
                                <form action="{{route('admin.destroy', $lead->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button onclick="return confirm('Vous êtes sûr ?')" type="submit">
                                        <svg style="color: red" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @else
                            <li>There is no leads in database</li>
                        @endif
                    </tbody>
            </table>
        </div>
    </div>
@endsection
