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
                                    Catégories
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
        <div class="card-body">
            <div class="d-flex flex-row justify-content-between align-items-center mb-5">
                <h5 class="">Catégories</h5>
                <div>
                    <a href="{{ route('categories.create')}}" class="btn btn-success">Nouveau
                    </a>
                </div>
            </div>
            <table class="mb-0 table table-striped">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $categorie)
                    <tr>
                        <td>{{$categorie->nom}}</td>
                        <td>
                            <div class="d-flex flex-row align-items-center">
                                <a href="{{ route('categories.edit', ['category'=>$categorie->id ]) }}" class="mb-2 mr-2 btn btn-info">Modifier
                                </a>
                                <button class="mb-2 mr-2 btn btn-danger">Supprimer
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
