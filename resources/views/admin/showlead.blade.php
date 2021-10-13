@extends('layouts.main')
@section('content')

    <tbody>
            <div class="row align-items-md-stretch">
                <div style="background-color: #52cffb" class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
                    <div class="lh-1">
                        <div style="display: flex">
                            <div>
                                <a href="{{ route('admin.leads') }}">
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

                <div class="my-3 p-3 bg-body rounded shadow-sm">
                    <h6 class="border-bottom pb-2 mb-0">Détails</h6>
                    <div class="list-group list-group-checkable"><br>
                        <label class="list-group-item py-3" for="listGroupCheckableRadios2">
                            <h2 class="d-block text-gray-dark">{{$lead->client}}</h2><br>
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
    </tbody>

@endsection
