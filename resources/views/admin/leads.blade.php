@extends('layouts.main')
@section('content')
    @include('layouts.sidebar')
            <div style="background-color: #ffffff;margin: 10px;">
                <div class="" style="margin: 10px">
                <div class="row align-items-md-stretch">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin-top: 10px">
                        <div class="">
                            <a href="{{ route('admin.addlead') }}"> <button type="button" class="btn btn-primary btn-sm float-left">+ Ajouter un lead</button></a>
                        </div>

                        <div>
                            <form method="POST"
                                  enctype="multipart/form-data"
                                  action="{{route('admin.import')}}">
                                @csrf
                                <div class="d-flex form-group">
                                    <input class="form-control form-control-sm" name="import_file" id="formFileSm" type="file">
                                    <button type="submit" name="button" class="btn btn-secondary btn-sm" style="margin-left: 10px">Importer</button>
                                </div>
                            </form>
                        </div>

                        <div class="">
                            <a type="button" class="btn btn-info btn-sm" style="color: #ffffff; display: flex" href="{{route ('admin.exportIntoExcel')}}">Exporter</a>
                        </div>

                    </div> <br> <br>
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
                        @if(auth()->check() && auth()->user()->is_admin)
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
                                            <svg style="color: skyblue"  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
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
                            <div class="alert alert-info" role="alert">
                                <small>Vous n'avez aucun lead de disponible</small>
                            </div>
                        @endif
                        </tbody>
                    </table>
                    </div> <br> <br>
                </div>
            </div>
        </div>
    </div>
@endsection
