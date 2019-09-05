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
                <h5> Dossier medical N°{{ $donneursexaminer->id }} </h5>
            </div>
            <div class="card-block">
                <div class="row">
                    <div class="col-lg-12 col-xl-12">
                    <table class="table m-0">
                <tbody>
                   
                    <tr>
                        <th scope="row">Numéro de don</th>
                        <td>{{ $donneursexaminer->num_don }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Poid</th>
                        <td>{{ $donneursexaminer->poid }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Température </th>
                        <td>{{ $donneursexaminer->temperature }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Tension artérielle</th>
                        <td>{{ $donneursexaminer->tension_arterielle }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Quantité à prélevée</th>
                        <td>{{ $donneursexaminer->quantite_a_prelevee }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Approbation</th>
                            @if($donneursexaminer->approbation == 1)
                        <td>{{ $donneursexaminer->approbation = 'Apte' }}</td>
                            @elseif($donneursexaminer->approbation == 0)
                         <td>{{ $donneursexaminer->approbation = 'Inapte' }}</td>
                            @endif
                    </tr>
                    <tr>)
                        <th scope="row">Observation approbation</th>
                        <td>{{ $donneursexaminer->observation_approbation }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Date de creation du dossier</th>
                        <td>{{ $donneursexaminer->date_dossier_medical }}</td>
                    </tr>
                </tbody>
            </table>
                        </div>
                    </div>
                   
                   
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Extra Large table end -->
@endsection

