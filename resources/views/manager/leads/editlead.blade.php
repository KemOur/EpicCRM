@extends('layouts.main')
@section('content')
    @include('layouts.sidebar')

        <div class="col-md-6 col-lg-6 item" style="margin-left: 25%;margin-right: 25%; background-color: #ffffff; border-radius: 15px;">
            <form method="POST" action="{{ route('admin.update', $lead->id) }}" style="margin: 5%;">
                @csrf
                @method('put')

                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="{{$lead->date}}" min="2021-02-21">
                @error('date')
                {{$message}}
                @enderror

                <div class="d-flex">
                    <x-label for="client" :value="__('Client')" />
                    <x-input id="client" class="block mt-1 w-full" type="text" name="client" value="{{$lead->client}}" required autofocus/>
                    @error('client')
                    {{$message}}
                    @enderror

                    <x-label for="company" :value="__('Entreprise')" />
                    <x-input id="company" class="block mt-1 w-full" type="text" name="company" value="{{$lead->company}}" required autofocus/>
                    @error('company')
                    {{$message}}
                    @enderror
                </div>

                <x-label for="montant" :value="__('Montant')" />
                <div class="input-group mb-3">
                    <span class="input-group-text">€</span>
                    <input id="coast" name="coast" type="number" class="form-control" value="{{$lead->coast}}" aria-label="Amount (to the nearest euro)">
                    <span class="input-group-text">.00</span>
                </div>
                @error('coast')
                {{$message}}
                @enderror

                <x-label for="origin" :value="__('Provenance')" />
                <x-input id="origin" class="block mt-1 w-full" type="text" name="origin" value="{{$lead->origin}}" required autofocus/>
                @error('origin')
                {{$message}}
                @enderror

                <x-label for="state" :value="__('Status')" />
                <select class="form-select" aria-label="Default select example" value="{{$lead->state}}" id="state" name="state" required autofocus>
                    <option value="À faire">À faire</option>
                    <option value="Fait">Fait</option>
                    <option value="À appeler">À appeler</option>
                    <option value="Perdu">Perdu</option>
                </select>
                @error('state')
                {{$message}}
                @enderror

                <div class="d-flex" style="margin-top: 5px">
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{$lead->email}}" required />
                @error('email')
                {{$message}}
                @enderror

                <label for="phone" class="form-label">Téléphone</label>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" placeholder="xx-xx-xx-xx-xx" id="phone" value="{{$lead->phone}}" name="phone" aria-label="phone" aria-describedby="basic-addon1" style="margin-left: 5px">
                </div>
                @error('phone')
                {{$message}}
                @enderror
                </div>

                <label for="description">Description</label>
                <div class="form-floating">
                    <input name="description"
                     class="form-control"
                     placeholder="Écrivez un commentaire ci-dessus"
                     id="description"
                     value="{{$lead->description }}"
                     style="height: 100px">
                </div>
                @error('description')
                {{$message}}
                @enderror
                <br>
                <x-button class="ml-4">
                    {{ __('Modifier') }}
                </x-button>
                <br>
                <br>
            </form>
        </div>
        <br>
    </div>
    </div>
@endsection
