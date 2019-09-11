@extends('layouts.adminty')

@section('css')

@endsection

@section('content')
<div class="col-sm-12">
    <div class="page-body">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center txt-primary">{{ ('Détail sur le prélèvement du donneur') }}</h3>
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
                                                    <td>{{ $prelevement->donneur->num_donneur }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Nom</th>
                                                    <td>{{ $prelevement->donneur->nom }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Type de poche</th>
                                                    <td>{{ $prelevement->type_poche }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Type de Prélèvement</th>
                                                    <td>{{ $prelevement->date_heure_prelevement }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Date du Prélèvement</th>
                                                    <td>{{ $prelevement->date_heure_prelevement }}</td>
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
                                                    <td>{{ $prelevement->num_don }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Prénom</th>
                                                    <td>{{ $prelevement->donneur->prenom }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Quantité prélèvée</th>
                                                    <td>{{ $prelevement->quantite_prelevee }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Observation Prélèvement</th>
                                                    <td>{{ $prelevement->observation_prelevement }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td>
                                                        <a href="{{ route('prelevement.donneur_prelevee')}}" class="btn btn-xs pull-right btn-inverse"><i class="icofont icofont-arrow-left"></i>Retour</a>
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
            </div>
        </div>
    </div>
</div>
    <!-- Extra Large table end -->
@endsection

@section('js')

@endsection
