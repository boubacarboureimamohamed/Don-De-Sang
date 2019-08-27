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
                <h5>Donneur N²{{ $a->num_donneur }}</h5>
            </div>
            <div class="card-block">
                <div class="row">
                    <div class="col-lg-12 col-xl-12">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <tbody>
                                    <tr>
                                        <th scope="row">Nom</th>
                                        <td>{{ $a->nom }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Prénom </th>
                                        <td>{{ $a->prenom }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Sexe</th>
                                        <td>{{ $a->sexe }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Type de donneur</th>
                                        <td>{{ $a->typedonneur->type_donneur }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-12">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Les dossier medical du donneur</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @foreach ($aptes as $apte)
                    <div class="col-lg-12 col-xl-3">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <tbody>
                                    <tr>
                                        <th scope="row">N du dossier medical</th>
                                        <td>{{ $apte->id }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-3">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <tbody>
                                    <tr>
                                        <th scope="row">Date dossier</th>
                                        <td>{{ $apte->date_dossier_medical }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-3">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <tbody>
                                    <tr>
                                        <th scope="row">Approbation</th>
                                        @if($apte->approbation == '1')
                                            <td>{{$apte->approbation = 'Apte'}} </td>
                                        @elseif($apte->approbation == '0')
                                            <td>{{$apte->approbation = 'Inapte'}} </td>
                                        @endif
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-3">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <tbody>
                                    <tr>
                                        <th scope="row">Detail</th>
                                        <td><a href="#" class="btn btn-sm btn-info"><i class="icofont icofont-eye-alt icofont-lg"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @endforeach 
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Extra Large table end -->
@endsection



{{-- <div class="col-lg-12 col-xl-3">
        <div class="table-responsive">
            <table class="table m-0">
                <tbody>
                    <tr>
                        <th scope="row">N du dossier medical</th>
                        <td>{{ $apte->id }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Numéro de don</th>
                        <td>{{ $apte->num_don }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Poid</th>
                        <td>{{ $apte->poid }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Température </th>
                        <td>{{ $apte->temperature }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Tension artérielle</th>
                        <td>{{ $apte->tension_arterielle }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Quantité à prélevée</th>
                        <td>{{ $apte->quantite_a_prelevee }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> --}}
