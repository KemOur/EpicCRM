@extends('layouts.main')
@section('content')
    @include('layouts.sidebar')

    <div class="col-md-6 col-lg-6 item" style="margin-left: 25%;margin-right: 25%; background-color: #ffffff; border-radius: 15px;"><br>
        <form method="POST" action="{{route('manager.commercials.addcommercial.store')}}" style="margin: 5%;">
            @csrf

            <x-label for="name" :value="__('NOM')" />
            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus/>
            @error('name')
            {{$message}}
            @enderror
            <x-label for="lastname" :value="__('Prénom')" />
            <x-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus/>
            @error('lastname')
            {{$message}}
            @enderror
            <x-label for="email" :value="__('Email')" />
            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
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
                <label for="is_admin"><input type="checkbox" name="is_admin" id="is_admin" {{ $userlist ?  "": "checked"}}> Administrateur</label>
            @endif
            <x-button class="ml-4">
                {{ __('Créer un compte') }}
            </x-button>
            <br>
            <br>
        </form>
    </div>
    <br>
    </div>

@endsection
