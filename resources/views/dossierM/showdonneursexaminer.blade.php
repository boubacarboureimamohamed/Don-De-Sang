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
                <h3 class="text-center txt-primary">{{ ('Détail sur la consultation du donneur') }}</h3>
            </div>
            <div class="card-block">
            <div class="view-info">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="general-info">
                            <div class="row">
                                <div class="col-lg-12 col-xl-6">
                                    <div class="table-responsive">
                                        <table class="table m-0">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Numéro </th>
                                                    <td>{{ $donneursexaminer->donneur->num_donneur }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Nom</th>
                                                    <td>{{ $donneursexaminer->donneur->nom }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Température</th>
                                                    <td>{{ $donneursexaminer->temperature }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Poids</th>
                                                    <td>{{ $donneursexaminer->poid }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Approbation</th>
                                                        @if($donneursexaminer->approbation == 1)
                                                    <td>{{ $donneursexaminer->approbation = 'Apte' }}</td>
                                                        @elseif($donneursexaminer->approbation == 0)
                                                    <td>{{ $donneursexaminer->approbation = 'Inapte' }}</td>
                                                        @endif
                                                </tr>
                                                <tr>
                                                    <th scope="row">Date de consultation</th>
                                                    <td>{{ $donneursexaminer->date_dossier_medical }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- end of table col-lg-6 -->
                                <div class="col-lg-12 col-xl-6">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Numéro de don</th>
                                                    <td>{{ $donneursexaminer->num_don }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Prénom</th>
                                                    <td>{{ $donneursexaminer->donneur->prenom }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Tension artérielle</th>
                                                    <td>{{ $donneursexaminer->tension_arterielle }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Type de poche</th>
                                                    <td>{{ $donneursexaminer->type_poche }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Observation approbation</th>
                                                    <td>{{ $donneursexaminer->observation_approbation }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>
                                                        
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- end of table col-lg-6 -->
                            </div>
                            <!-- end of row -->
                        </div>
                        <!-- end of general info -->
                    </div>
                    <!-- end of col-lg-12 -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of view-info -->
            </div>
            <a href="{{ route('dossierM.donneursexaminer')}}" class="btn btn-xs pull-right btn-inverse"><i class="icofont icofont-arrow-left"></i>Retour</a>
            </div>
        </div>
    </div>
</div>
    <!-- Extra Large table end -->
@endsection

