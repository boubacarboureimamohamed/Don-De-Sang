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
        <div class="card">
            <div class="card-header">
                <h3 class="text-center txt-primary">{{ ('Détail sur le donneur') }}</h3>
            </div>
            <div class="card-block">
                <div class="row">
                    <div class="col-lg-12 col-xl-6">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <tbody>
                                    <tr>
                                        <th scope="row">Numéro</th>
                                        <td>{{ $as->num_donneur }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nom</th>
                                        <td>{{ $as->nom }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Date de naissance</th>
                                        <td>{{ $as->date_naiss }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nationalite</th>
                                        <td>{{ $as->nationalite }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Téléphone</th>
                                        <td>{{ $as->telephone }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Type de donneur</th>
                                        <td>{{ $as->typedonneur->type_donneur }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="row">Profession</th>
                                        <td>{{ $as->profession }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Prénom </th>
                                        <td>{{ $as->prenom }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Lieu de naissance</th>
                                        <td>{{ $as->lieu_naiss }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Sexe</th>
                                        <td>{{ $as->sexe }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Email</th>
                                        <td>{{ $as->email }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Organisation</th>
                                        <td>{{ $ls->organisation ? $ls->organisation->libelle : '' }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <tbody>
                                        @foreach ($as->situationmats as $a)
                                        <tr>
                                            <th scope="row">Date</th>
                                            <td>{{ $a->pivot->date }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Situation matrimoniale </th>
                                            <td>{{ $a->situation_matrimoniale }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Situation marié </th>
                                            <td>{{ $a->situationmariee }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                                   <a href="{{ route('donneurs.index')}}" class="btn btn-xs pull-right btn-inverse"><i class="icofont icofont-arrow-left"></i>Retour</a>

            </div>
        </div>
    </div>
    <!-- Extra Large table end -->
@endsection
