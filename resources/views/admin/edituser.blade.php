@extends('layouts.main')
@section('content')
    <div style="background-color: #F3F4F6">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                @if (auth()->check() && auth()->user()->id)
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.users') }}">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                                </svg>
                            </div>
                        </a>
                        <div>
                            <h6> Modifier un utilisateur !</h6>
                        </div>
                    </div>
                @else
                @endif
            </div>
        </div>


        <div class="col-md-6 col-lg-6 item" style="margin-left: 25%;margin-right: 25%; background-color: #ffffff; border-radius: 15px;">
            <form method="POST" action="{{ route('admin.update', $user->id) }}" style="margin: 5%;">
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
                <x-label for@="password" :value="__('Mot passe')" />
                <x-input id="password" class="block mt-1 w-full"
                         type="password"
                         name="password"
                         required autocomplete="new-password" />
                @error('password')
                {{$message}}
                @enderror

                <div class="mt-4">
                    <x-label for="password_confirmation" :value="__('Confirmer mot passe')" />

                    <x-input id="password_confirmation" class="block mt-1 w-full"
                             type="password"
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
