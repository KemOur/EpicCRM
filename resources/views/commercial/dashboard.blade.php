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
                        <h5>Espace de travail {{auth()->user()->name}}</h5>
                    @else
                    @endif
                </div>
            </div>

            <main class="container">
                <div class="row mb-3">
                    <div class="col-md-3 themed-grid-col">
                        <div class="my-3 p-3 bg-body rounded shadow-sm">
                            <h6 class="border-bottom pb-2 mb-0">
                                À faire
                                <hr class="bg-info">
                                <br>
                                <br>
                                <div class="d-flex justify-content-between">
                                    <small>20 opportunités</small>
                                    <a href="#">5.000€</a>
                                </div>
                            </h6>
                            <div class="d-flex text-muted pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#00000"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em"></text></svg>

                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Prosps 1</strong>
                                        <a href="#">action</a>
                                    </div>
                                    <span class="d-block">formation 1</span>
                                </div>
                            </div>

                            <div class="d-flex text-muted pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Prosps 2</strong>
                                        <a href="#">action</a>
                                    </div>
                                    <span class="d-block">formation 2</span>
                                </div>
                            </div>

                            <div class="d-flex text-muted pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Prosps 3</strong>
                                        <a href="#">action</a>
                                    </div>
                                    <span class="d-block">formation 3</span>
                                </div>
                            </div>

                            <div class="d-flex text-muted pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Prosps 2</strong>
                                        <a href="#">action</a>
                                    </div>
                                    <span class="d-block">formation 2</span>
                                </div>
                            </div>

                            <div class="d-flex text-muted pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Prosps 3</strong>
                                        <a href="#">action</a>
                                    </div>
                                    <span class="d-block">formation 3</span>
                                </div>
                            </div>

                            <div class="d-flex text-muted pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Prosps 2</strong>
                                        <a href="#">action</a>
                                    </div>
                                    <span class="d-block">formation 2</span>
                                </div>
                            </div>

                            <div class="d-flex text-muted pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Prosps 3</strong>
                                        <a href="#">action</a>
                                    </div>
                                    <span class="d-block">formation 3</span>
                                </div>
                            </div>

                            <small class="d-block text-end mt-3">
                                <a href="#">Liste des Prospects</a>
                            </small>
                        </div>
                    </div>

                    <div class="col-md-3 themed-grid-col">
                        <div class="my-3 p-3 bg-body rounded shadow-sm">
                            <h6 class="border-bottom pb-2 mb-0">
                                Gagné
                                <hr class="bg-success">
                                <br>
                                <br>
                                <div class="d-flex justify-content-between">
                                    <small>15 opportunités</small>
                                    <a href="#">5.000€</a>
                                </div>
                            </h6>
                            <div class="d-flex text-muted pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Prosps 1</strong>
                                        <a href="#">action</a>
                                    </div>
                                    <span class="d-block">formation 1</span>
                                </div>
                            </div>
                            <div class="d-flex text-muted pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Prosps 2</strong>
                                        <a href="#">action</a>
                                    </div>
                                    <span class="d-block">formation 2</span>
                                </div>
                            </div>
                            <div class="d-flex text-muted pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Prosps 3</strong>
                                        <a href="#">action</a>
                                    </div>
                                    <span class="d-block">formation 3</span>
                                </div>
                            </div>
                            <small class="d-block text-end mt-3">
                                <a href="#">Liste des Prospects</a>
                            </small>
                        </div>
                    </div>

                    <div class="col-md-3 themed-grid-col">
                        <div class="my-3 p-3 bg-body rounded shadow-sm">
                            <h6 class="border-bottom pb-2 mb-0">
                                À rappeler
                                <hr class="bg-warning">
                                <br>
                                <br>
                                <div class="d-flex justify-content-between">
                                    <small>10 opportunités</small>
                                    <a href="#">5.000€</a>
                                </div>
                            </h6>
                            <div class="d-flex text-muted pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Prosps 1</strong>
                                        <a href="#">action</a>
                                    </div>
                                    <span class="d-block">formation 1</span>
                                </div>
                            </div>
                            <div class="d-flex text-muted pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Prosps 2</strong>
                                        <a href="#">action</a>
                                    </div>
                                    <span class="d-block">formation 2</span>
                                </div>
                            </div>
                            <div class="d-flex text-muted pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Prosps 3</strong>
                                        <a href="#">action</a>
                                    </div>
                                    <span class="d-block">formation 3</span>
                                </div>
                            </div>
                            <small class="d-block text-end mt-3">
                                <a href="#">Liste des Prospects</a>
                            </small>
                        </div>
                    </div>

                    <div class="col-md-3 themed-grid-col">
                        <div class="my-3 p-3 bg-body rounded shadow-sm">
                            <h6 class="border-bottom pb-2 mb-0">
                                Perdu
                                <hr class="bg-danger">
                                <br>
                                <br>
                                <div class="d-flex justify-content-between">
                                    <small>5 opportunités</small>
                                    <a href="#">5.000€</a>
                                </div>
                            </h6>
                            <div class="d-flex text-muted pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Prosps 1</strong>
                                        <a href="#">action</a>
                                    </div>
                                    <span class="d-block">formation 1</span>
                                </div>
                            </div>
                            <div class="d-flex text-muted pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Prosps 2</strong>
                                        <a href="#">action</a>
                                    </div>
                                    <span class="d-block">formation 2</span>
                                </div>
                            </div>
                            <div class="d-flex text-muted pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Prosps 3</strong>
                                        <a href="#">action</a>
                                    </div>
                                    <span class="d-block">formation 3</span>
                                </div>
                            </div>
                            <small class="d-block text-end mt-3">
                                <a href="#">Liste des Prospects</a>
                            </small>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</x-app-layout>

@endsection
