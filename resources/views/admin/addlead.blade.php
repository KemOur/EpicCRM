@extends('layouts.main')
@section('content')

@include('layouts.sidebar')

            <div class="col-md-6 col-lg-6 item" style="margin-left: 25%;margin-right: 25%; background-color: #ffffff; border-radius: 15px;">
            <form method="POST" action="{{route('admin.store')}}" style="margin: 5%;" enctype="multipart/form-data">
                @csrf

                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ old('date')}}" min="2021-02-21">
                @error('date')
                {{$message}}
                @enderror

                <div class="d-flex">
                    <x-input id="client" class="block mt-1 w-full" placeholder="Client" type="text" name="client" :value="old('client')" required autofocus/>
                    @error('client')
                    {{$message}}
                    @enderror

                    <x-input id="company" class="block mt-1 w-full" placeholder="Entreprise" type="text" name="company" :value="old('company')" required autofocus style="margin-left: 5px"/>
                    @error('company')
                    {{$message}}
                    @enderror
                </div>


                <x-label for="montant" :value="__('Montant')" />
                <div class="input-group mb-3">
                    <span class="input-group-text">€</span>
                    <input id="coast" name="coast" type="number" class="form-control" aria-label="Amount (to the nearest euro)">
                    <span class="input-group-text">.00</span>
                </div>
                @error('coast')
                {{$message}}
                @enderror

                <x-label for="origin" :value="__('Provenance')" />
                <x-input id="origin" class="block mt-1 w-full" type="text" name="origin" :value="old('origin')" required autofocus/>
                @error('origin')
                {{$message}}
                @enderror

                <x-label for="state" :value="__('Status')" />
                <select class="form-select" aria-label="Default select example"  id="state" name="state" required autofocus>
                    <option value="À faire">À faire</option>
                    <option value="Fait">Fait</option>
                    <option value="À appeler">À appeler</option>
                    <option value="Perdu">Perdu</option>
                </select>
                @error('state')
                {{$message}}
                @enderror

                <div class="d-flex" style="margin-top: 5px">
                    <x-input id="email" placeholder="Email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                    @error('email')
                    {{$message}}
                    @enderror

                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="Téléphone" id="phone" name="phone" aria-label="phone" aria-describedby="basic-addon1" style="margin-left: 5px">
                    </div>
                    @error('phone')
                    {{$message}}
                    @enderror
                </div>

                <label for="description">Description</label>
                <div class="form-floating">
                    <textarea name="description" class="form-control" placeholder="Écrivez un commentaire ci-dessus" id="description" :value="old('description')" style="height: 100px"></textarea>
                </div>
                @error('description')
                {{$message}}
                @enderror

                <br>
                <x-button class="ml-4">
                    {{ __('Créer un lead') }}
                </x-button>
                <br><br>
            </form>
        </div>
        <br>
    </div>
    </div>

@endsection
