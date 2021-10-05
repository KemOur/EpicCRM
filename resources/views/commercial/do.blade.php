@extends('layouts.main')
@section('content')
    <div class="container">
        <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Espace de travail') }}
                </h2>
            </x-slot>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            @if (auth()->check() && auth()->user()->id)
                                <div class="d-flex justify-content-between">
                                    <a href="{{ route('commercial.dashboard') }}">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                                            </svg>
                                        </div>
                                    </a>
                                    <div>
                                        @if (auth()->check() && auth()->user()->id)
                                            <h5>Espace de travail {{auth()->user()->firstname}}</h5>
                                        @else
                                        @endif
                                    </div>
                                </div>
                            @else
                            @endif
                        </div>
                    </div>

                    <main class="container">
                        <div class="row mb-3">
                            <div class="col-md-12 themed-grid-col">
                                <div class="my-3 p-3 bg-body rounded shadow-sm">
                                    <h6 class="border-bottom pb-2 mb-0">
                                        Gagné
                                        <hr class="bg-success">
                                        <br>
                                        <br>
                                        <div class="d-flex justify-content-between">
                                            <small>20 opportunités</small>
                                            <div>
                                                <a href="#"><small>Estimation maximale :</small></a>
                                                <a href="#"><small>5.000€</small></a>
                                            </div>
                                        </div>
                                    </h6>

                                    <div class="d-flex text-muted pt-3">
                                        <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"> <rect width="100%" height="100%" fill="#3D8854"></rect></svg>
                                        <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                            <div class="d-flex justify-content-between">
                                                <strong class="text-gray-dark">Junior PECPEC</strong>
                                                <div style="width: 130px">
                                                    <select class="form-select form-select-sm" aria-label="Default select example">
                                                        <option selected>Sélectionner</option>
                                                        <option value="1">Gagné</option>
                                                        <option value="2">À rappeler</option>
                                                        <option value="3">Perdu</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <span class="d-block">juniorpecpec@gmail.com</span>
                                            <span class="d-block">0102030405</span>
                                        </div>
                                    </div>
                                    <div class="d-flex text-muted pt-3">
                                        <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"> <rect width="100%" height="100%" fill="#3D8854"></rect></svg>
                                        <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                            <div class="d-flex justify-content-between">
                                                <strong class="text-gray-dark">Junior PECPEC</strong>
                                                <div style="width: 130px">
                                                    <select class="form-select form-select-sm" aria-label="Default select example">
                                                        <option selected>Sélectionner</option>
                                                        <option value="1">Gagné</option>
                                                        <option value="2">À rappeler</option>
                                                        <option value="3">Perdu</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <span class="d-block">juniorpecpec@gmail.com</span>
                                            <span class="d-block">0102030405</span>
                                        </div>
                                    </div>
                                    <div class="d-flex text-muted pt-3">
                                        <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"> <rect width="100%" height="100%" fill="#3D8854"></rect></svg>
                                        <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                            <div class="d-flex justify-content-between">
                                                <strong class="text-gray-dark">Junior PECPEC</strong>
                                                <div style="width: 130px">
                                                    <select class="form-select form-select-sm" aria-label="Default select example">
                                                        <option selected>Sélectionner</option>
                                                        <option value="1">Gagné</option>
                                                        <option value="2">À rappeler</option>
                                                        <option value="3">Perdu</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <span class="d-block">juniorpecpec@gmail.com</span>
                                            <span class="d-block">0102030405</span>
                                        </div>
                                    </div>
                                    <div class="d-flex text-muted pt-3">
                                        <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"> <rect width="100%" height="100%" fill="#3D8854"></rect></svg>
                                        <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                            <div class="d-flex justify-content-between">
                                                <strong class="text-gray-dark">Junior PECPEC</strong>
                                                <div style="width: 130px">
                                                    <select class="form-select form-select-sm" aria-label="Default select example">
                                                        <option selected>Sélectionner</option>
                                                        <option value="1">Gagné</option>
                                                        <option value="2">À rappeler</option>
                                                        <option value="3">Perdu</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <span class="d-block">juniorpecpec@gmail.com</span>
                                            <span class="d-block">0102030405</span>
                                        </div>
                                    </div>
                                    <div class="d-flex text-muted pt-3">
                                        <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"> <rect width="100%" height="100%" fill="#3D8854"></rect></svg>
                                        <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                            <div class="d-flex justify-content-between">
                                                <strong class="text-gray-dark">Junior PECPEC</strong>
                                                <div style="width: 130px">
                                                    <select class="form-select form-select-sm" aria-label="Default select example">
                                                        <option selected>Sélectionner</option>
                                                        <option value="1">Gagné</option>
                                                        <option value="2">À rappeler</option>
                                                        <option value="3">Perdu</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <span class="d-block">juniorpecpec@gmail.com</span>
                                            <span class="d-block">0102030405</span>
                                        </div>
                                    </div>
                                    <div class="d-flex text-muted pt-3">
                                        <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"> <rect width="100%" height="100%" fill="#3D8854"></rect></svg>
                                        <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                            <div class="d-flex justify-content-between">
                                                <strong class="text-gray-dark">Junior PECPEC</strong>
                                                <div style="width: 130px">
                                                    <select class="form-select form-select-sm" aria-label="Default select example">
                                                        <option selected>Sélectionner</option>
                                                        <option value="1">Gagné</option>
                                                        <option value="2">À rappeler</option>
                                                        <option value="3">Perdu</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <span class="d-block">juniorpecpec@gmail.com</span>
                                            <span class="d-block">0102030405</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </x-app-layout>

@endsection
