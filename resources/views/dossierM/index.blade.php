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
            <h5>Liste des Donneurs</h5>
        </div>
        <div class="card-block">
            <div class="table-responsive">
                <table class="table table-xl">
                    <thead>
                        <tr>
                            <th>N° de donneur</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Télephone</th>
                            <th>Adresse</th>
                            <th>Type de donneur</th>
                            <th>Organisation</th>
                            <th>Examiner</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($donneurs as $donneur)
                        <tr>
                            <td>{{ $donneur->num_donneur }}</td>
                            <td>{{ $donneur->nom }}</td>
                            <td>{{ $donneur->prenom }}</td>
                            <td>{{ $donneur->telephone }}</td>
                            <td>{{ $donneur->adresse }}</td>
                            <td>{{ $donneur->typedonneur->type_donneur }}</td>
                            <td>{{ $donneur->organisation ? $donneur->organisation->libelle : '' }} </td>
                            <td>
                                <a href="{{ route('dossierM.examiner', $donneur) }}" class="btn btn-sm btn-primary"><i class="icofont icofont-stethoscope-alt icofont-lg"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    <!-- Extra Large table end -->
@endsection
