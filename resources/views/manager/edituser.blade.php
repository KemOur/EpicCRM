@extends('layouts.main')
@section('content')
    @include('layouts.sidebar')

            <br>
            <div class="col-md-6 col-lg-6 item" style="margin-left: 25%;margin-right: 25%; background-color: #ffffff; border-radius: 15px;"><br>
                <form method="POST" action="{{ route('admin.update.user', $user->id) }}" style="margin: 5%;">
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
                <x-label for="password" :value="__('Mot passe')" />
                <x-input id="password" class="block mt-1 w-full"
                         type="password"
                         name="password"
                         value="{{$user->password}}"
                         required autocomplete="new-password" />
                @error('password')
                {{$message}}
                @enderror

                <div class="mt-4">
                    <x-label for="password_confirmation" :value="__('Confirmer mot passe')" />
                    <x-input id="password_confirmation" class="block mt-1 w-full"
                             type="password"
                             value="{{$user->password}}"
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
