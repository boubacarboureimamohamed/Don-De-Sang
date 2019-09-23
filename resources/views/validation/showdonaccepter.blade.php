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
                <h3 class="text-center txt-primary">{{ ('Détail sur le don accepé') }}</h3>
            </div>
            <div class="card-block">
                <div class="row">
                    <div class="col-lg-12 col-xl-6">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <tbody>
                                    <tr>
                                        <th scope="row">Numéro</th>
                                        <td>{{ $don->donneur->num_donneur }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nom</th>
                                        <td>{{ $don->donneur->nom }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">prenom</th>
                                        <td>{{ $don->donneur->prenom }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Numéro du Dossier</th>
                                        <td>{{ $don->id }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">poid</th>
                                        <td>{{ $don->poid }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">temperature</th>
                                        <td>{{ $don->temperature }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">tension artérielle</th>
                                        <td>{{ $don->tension_arterielle }}</td>
                                    </tr>
                                    <tr>
                                            <th scope="row">observation du prelevement </th>
                                            <td>{{ $don->observation_prelevement }}</td>
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
                                        <th scope="row">Date du dossier</th>
                                        <td>{{ $don->date_dossier_medical }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Approbation </th>
                                        <td>{{ $don->approbation }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">numéro du don</th>
                                        <td>{{ $don->num_don }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">quantité prélevée</th>
                                        <td>{{ $don->quantite_prelevee }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">date et heure du prelevement</th>
                                        <td>{{ $don->date_heure_prelevement }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">type de prelevement</th>
                                        <td>{{ $don->type_prelevement }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <tbody>

                                        <tr>
                                            <th scope="row">poche de poche</th>
                                            <td>{{ $don->type_poche }}</td>
                                        </tr>



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
