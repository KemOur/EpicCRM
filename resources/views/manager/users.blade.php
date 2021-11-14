@extends('layouts.main')
@section('content')
    @include('layouts.sidebar')

            <div>
                @if(session('success'))
                    <ul>
                        <li style="background-color: mediumseagreen; color: white; text-align: center"><small>{{ session('success') }}</small></li>
                    </ul>
                @endif

                <div style="background-color: #ffffff;margin: 10px" class="">
                <br>
                <div style="margin: 10px">
                    <div  style="margin: 10px" class="row align-items-md-stretch">
                        <div>
                            <a href="{{ route('admin.adduser') }}">
                                <div>
                                    <button style="float: right; margin-right: 10px" type="button" class="btn btn-primary btn-sm">Ajouter un utilisateur</button>
                                </div>
                            </a>
                        </div>
                        <br>
                        <br>
                        <hr>

                        <table id="id_user" class="display table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Nom</th>
                                <th scope="col">Prénom</th>
                                <th scope="col">Email</th>
                                <th scope="col">administrateur ?</th>
                                <th scope="col">Modifier</th>
                                <th scope="col">Supprimer</th>
                            </tr>
                            </thead>

                            @if($userlist->isNotEmpty())
                                @foreach ($userlist as $user)
                                    <tbody>
                                    <tr>
                                        <td>{{ $user->firstname }}</td>
                                        <td>{{ $user->lastname }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <div class="form-check">
                                                @if (auth()->user()->is_admin)
                                                    <label for="is_admin"><input type="checkbox" name="is_admin" id="is_admin" {{ $user->is_admin ? " checked" : ""}}></label>
                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.edit.user', $user->id )}}">
                                                <svg style="color: #59B0E3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                </svg>
                                            </a>
                                        </td>

                                        <td>
                                            <form action="{{route('admin.destroy.user', $user->id)}}" method="post">
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
                                    </tbody>
                                @endforeach

                            @else
                                <p>Il y pas d'utlisateurs dans la base de doné</p>
                            @endif
                        </table>

                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
