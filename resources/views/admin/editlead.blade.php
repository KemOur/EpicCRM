@extends('layouts.main')
@section('content')
    <div style="background-color: #F3F4F6">
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


        <div class="col-md-6 col-lg-6 item" style="margin-left: 25%;margin-right: 25%; background-color: #ffffff; border-radius: 15px;">
            <form method="POST" action="{{ route('admin.update', $lead->id) }}" style="margin: 5%;">
                @csrf
                @method('put')

                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="{{$lead->date}}" min="2021-02-21">
                @error('date')
                {{$message}}
                @enderror

                <x-label for="client" :value="__('Client')" />
                <x-input id="client" class="block mt-1 w-full" type="text" name="client" value="{{$lead->client}}" required autofocus/>
                @error('client')
                {{$message}}
                @enderror

                <x-label for="company" :value="__('Enterprise')" />
                <x-input id="company" class="block mt-1 w-full" type="text" name="company" value="{{$lead->company}}" required autofocus/>
                @error('company')
                {{$message}}
                @enderror

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

                <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{$lead->email}}" required />
                @error('email')
                {{$message}}
                @enderror

                <label for="phone" class="form-label">Téléphone</label>
                <div class="input-group mb-3">
                    <input type="number"
                           class="form-control"
                           placeholder=""
                           id="phone"
                           value="{{$lead->phone}}"
                           name="phone"
                           aria-label="phone"
                           aria-describedby="basic-addon1">
                </div>
                @error('phone')
                {{$message}}
                @enderror

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
