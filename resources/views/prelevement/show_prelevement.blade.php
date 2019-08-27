@extends('layouts.adminty')
@section('css')

  <!-- jpro forms css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('js\j-pro\css\demo.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js\j-pro\css\font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js\j-pro\css\j-pro-modern.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js\advance-elements\css\bootstrap-datetimepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components\bootstrap-daterangepicker\css\daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components\datedropper\css\datedropper.min.css') }}">

@endsection
@section('content')
<div class="col-sm-12">
<div class="page-body">

    <!-- Extra Large table start -->
    <div class="card">
        <div class="card-header">
            <h5>Donneur N²{{ $prelevement->donneur->num_donneur }}</h5>
        </div>
        <div class="card-block">
            <div class="table-responsive">
                <table class="table table-xl">
                    <thead>
                        <tr>
                            <th>N° de donneur</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Type de Prélèvement</th>
                            <th>Type de poche</th>
                            <th>Quantité prélèvée</th>
                            <th>Date de Prélèvement</th>
                            <th>Observation Prélèvement</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>{{ $prelevement->donneur->num_donneur }}</td>
                                <td>{{ $prelevement->donneur->nom }}</td>
                                <td>{{ $prelevement->donneur->prenom }}</td>
                                <td>{{ $prelevement->type_prelevement }}</td>
                                <td>{{ $prelevement->type_poche }}</td>
                                <td>{{ $prelevement->quantite_prelevee }}</td>
                                <td>{{ $prelevement->date_heure_prelevement }}</td>
                                <td>{{ $prelevement->observation_prelevement }}</td>
                            </tr>
                    </tbody>
                    <a href="{{ route('prelevement.donneur_prelevee')}}" class="btn btn-xs pull-right btn-success"><i class="icofont icofont-arrow-left"></i></a>
                </table>
            </div>
        </div>
    </div>
</div>
    <!-- Extra Large table end -->
@endsection
