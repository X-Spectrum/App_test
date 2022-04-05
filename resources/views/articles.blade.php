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
                        <span class="d-inline-block">Liste des articles</span>
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
                                    <a>Dashboards</a>
                                </li>
                                <li class="active breadcrumb-item" aria-current="page">
                                    Articles
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

@endsection