@extends('layouts.main')
@section('content')
    <div style="background-color: #F3F4F6">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                @if (auth()->check() && auth()->user()->id)
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.leads') }}">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                                </svg>
                            </div>
                        </a>
                        <div>
                            <h6>Ajouter un nouvel lead !</h6>
                        </div>
                    </div>
                @else
                @endif
            </div>
        </div>


        <div class="col-md-6 col-lg-6 item" style="margin-left: 25%;margin-right: 25%; background-color: #ffffff; border-radius: 15px;">
            <form method="POST" action="{{route('admin.store')}}" style="margin: 5%;">
                @csrf

                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ old('date')}}" min="2021-02-21">

                <x-label for="clientname" :value="__('Client')" />
                <x-input id="clientname" class="block mt-1 w-full" type="text" name="clientname" :value="old('clientname')" required autofocus/>
                @error('clientname')
                {{$message}}
                @enderror

                <x-label for="company" :value="__('Enterprise')" />
                <x-input id="company" class="block mt-1 w-full" type="text" name="company" :value="old('company')" required autofocus/>
                @error('company')
                {{$message}}
                @enderror

                <label for="date" class="form-label">Montant</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">€</span>
                    <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">.00</span>
                </div>

                <x-label for="origin" :value="__('Provenance')" />
                <x-input id="origin" class="block mt-1 w-full" type="text" name="origin" :value="old('origin')" required autofocus/>
                @error('origin')
                {{$message}}
                @enderror

                <x-label for="state" :value="__('Status')" />
                <x-input id="state" class="block mt-1 w-full" type="text" name="state" :value="old('state')" required autofocus/>
                @error('origin')
                {{$message}}
                @enderror

                <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                @error('email')
                {{$message}}
                @enderror

                <label for="phone" class="form-label">Téléphone</label>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" placeholder="" aria-label="phone" aria-describedby="basic-addon1">
                </div>

                <br>
                <x-button class="ml-4">
                    {{ __('Créer un lead') }}
                </x-button>
                <br><br>
            </form>
        </div>
        <br>
    </div>

@endsection
