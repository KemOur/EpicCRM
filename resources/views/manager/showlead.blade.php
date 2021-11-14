@extends('layouts.main')
@section('content')
    @include('layouts.sidebar')

        @if(session('success'))
                <ul>
                    <li style="background-color: mediumseagreen; color: white; text-align: center"><small>{{ session('success') }}</small></li>
                </ul>
            @endif

            <br>
            <div class="" style="width: 75%;margin-left: 140px;">
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
