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
                <h3 style="text-align: center;">Donneur N°{{ $donneur->num_donneur }}</h5>
            </div>
             <div class="card-block">
                <div class="row">
                    <div class="col-lg-12 col-xl-6">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <tbody>
                                    <tr>
                                        <th scope="row">Nom</th>
                                        <td>{{ $donneur->nom }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Date de naissance</th>
                                        <td>{{ $donneur->date_naiss }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nationalite</th>
                                        <td>{{ $donneur->nationalite }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Téléphone</th>
                                        <td>{{ $donneur->telephone }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Email</th>
                                        <td>{{ $donneur->email }}</td>
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
                                        <td>{{ $donneur->profession }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Prénom </th>
                                        <td>{{ $donneur->prenom }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Lieu de naissance</th>
                                        <td>{{ $donneur->lieu_naiss }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Sexe</th>
                                        <td>{{ $donneur->sexe }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('dossierM.dossiermedical')}}" class="btn btn-xs pull-right btn-inverse"><i class="icofont icofont-arrow-left"></i>Retour</a>
            </div>
        </div>
    </div>
        </div>
    </div>
</div>

<div class="col-sm-12">
    <div class="page-body">
        <div class="card">
            <div class="card-header">
                <h4 style="text-align: center;">Dossier médical du donneur</h5>
            </div>
            <div class="card-block">
                <div class="dt-responsive table-responsive">
                        <table id="table" class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th>N° de don</th>
                                    <th>Date dossier</th>
                                    <th>Poid</th>
                                    <th>Temperature</th>
                                    <th>Tension arterielle</th>
                                    <th>Approbation</th>
                                    <th>Observation d'approbation</th>
                                    <th>Date heure de prelevement</th>
                                    <th>Quantité prelevée</th>
                                    <th>Type de prelevement</th>
                                    <th>Type de poche</th>
                                    <th>Observation du prelevement</th>
                                    <th>Validation</th>
                                    <th>Observation du validation</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dossiers as $dossier)
                                <tr>
                                    <td class="tabledit-view-mode">
                                            {{ $dossier->num_don }}
                                    </td>
                                    <td class="tabledit-view-mode">
                                            {{ $dossier->date_dossier_medical }}
                                    </td>
                                    <td class="tabledit-view-mode">
                                            {{ $dossier->poid }}
                                    </td>
                                    <td class="tabledit-view-mode">
                                            {{ $dossier->temperature }}
                                    </td>
                                    <td class="tabledit-view-mode">
                                            {{ $dossier->tension_arterielle }}
                                    </td>
                                    @if($dossier->approbation == '1')
                                    <td class="tabledit-view-mode">{{$dossier->approbation = 'Apte'}} </td>
                                    @elseif($dossier->approbation == '0')
                                    <td class="tabledit-view-mode">{{$dossier->approbation = 'Inapte'}} </td>
                                    @endif
                                    <td class="tabledit-view-mode">
                                            {{ $dossier->observation_approbation }}
                                    </td>
                                    <td class="tabledit-view-mode">
                                            {{ $dossier->date_heure_prelevement }}
                                    </td>
                                    <td class="tabledit-view-mode">
                                            {{ $dossier->quantite_prelevee }}
                                    </td>
                                    <td class="tabledit-view-mode">
                                            {{ $dossier->type_prelevement }}
                                    </td>
                                    <td class="tabledit-view-mode">
                                            {{ $dossier->type_poche }}
                                    </td>
                                    <td class="tabledit-view-mode">
                                            {{ $dossier->observation_prelevement }}
                                    </td>
                                    @if($dossier->rejet == '1')
                                    <td class="tabledit-view-mode">{{$dossier->rejet = 'Accepter'}} </td>
                                    @elseif($dossier->rejet == '0')
                                    <td class="tabledit-view-mode">{{$dossier->rejet = 'Refuser'}} </td>
                                    @endif
                                    <td class="tabledit-view-mode">
                                            {{ $dossier->motif_rejet }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Extra Large table end -->
@endsection

@section('js')

<script>


$(document).ready(function () {

$('#table').DataTable({

language: {

    url: "{{ asset('bower_components/data-table/French.json') }}"

}

});

});

</script>

@endsection
