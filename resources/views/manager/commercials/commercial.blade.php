@extends('layouts.main')
@section('content')
    @include('layouts.sidebar')
    <div>
        @if(session('success'))
            <ul>
                <li style="background-color: mediumseagreen; color: white; text-align: center"><small>{{ session('success') }}</small></li>
            </ul>
        @endif

        <br>
        <div class="" style="width: 75%;margin-left: 140px;">
            <div class=" shadow-sm">
                <small class="" style="margin-left: 10px">Détails
                    <a href="{{route('admin.edit.user', $user->id )}}" style="margin-left: 20px" type="button" class="btn btn-primary btn-sm">Modifier</a>
                </small>
                <div class="list-group list-group-checkable"><br>
                    <label class="list-group-item py-3" for="listGroupCheckableRadios2">
                        Prénom :<h4>{{$user->lastname}}</h4>
                        Nom :<h4>{{$user->firstname}}</h4>
                        Adresse email :<h4>{{ $user->email }}</h4>
                    </label>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
