@extends('layout')
@section('header')
    <!--- Header -->
    <div class="app-page-title app-page-title-simple">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div>
                    <div class="page-title-head center-elem">
                        <span class="d-inline-block pr-2">
                            <i class="lnr-apartment opacity-6"></i>
                        </span>
                        <span class="d-inline-block">Liste des catégories</span>
                    </div>
                    <div class="page-title-subheading opacity-10">
                        <nav class="" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a>
                                        <i aria-hidden="true" class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ url('/') }}">Dashboards</a>
                                </li>
                                <li class="active breadcrumb-item" aria-current="page">
                                    <a href="{{ route('categories.index') }}">Catégories</a>
                                </li>
                                <li class="active breadcrumb-item" aria-current="page">
                                    {{Route::is('categories.create') ? 'Create' : 'Edit'}}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block pr-3">
                    <select id="custom-inp-top" type="select" class="custom-select">
                        <option>Select period...</option>
                        <option>Last Week</option>
                        <option>Last Month</option>
                        <option>Last Year</option>
                    </select>
                </div>
                <button type="button" data-toggle="tooltip" data-placement="left" class="btn btn-dark"
                    title="Show a Toastr Notification!">
                    <i class="fa fa-battery-three-quarters"></i>
                </button>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">{{ Route::is('categories.create') ? 'Entrez le nom de la nouvelle catégorie' : 'Modifier la categorie' }} </h5>
            <form class="" method="POST" action="{{ Route::is('categories.create') ? route('categories.store') : route('categories.update', ['category' => $categorie->id]) }}">
                @csrf
                @if (Route::is('categories.edit'))
                    @method('PUT')
                @endif
                <div class="position-relative form-group">
                    <label for="nom" class="">Nom</label>
                    @if (Route::is('categories.edit'))
                        <input name="name" id="nom" placeholder="Nom catégorie" type="name" class="form-control" value="{{$categorie->nom}}">
                    @else
                        <input name="name" id="nom" placeholder="Nom catégorie" type="name" class="form-control">
                    @endif
                </div>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('categories.index') }}" class="mb-2 mr-2 btn btn-danger">Annuler</a>
                    <button type="submit" class="mb-2 btn btn-info">{{Route::is('categories.create') ? "Créer" : "Modifier"}}</button>
                </div>
            </form>
        </div>
    </div>
@endsection
