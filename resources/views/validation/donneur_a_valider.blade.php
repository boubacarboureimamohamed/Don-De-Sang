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
            <h5>Liste des Prélèvement</h5>
        </div>
        <div class="card-block">
            <div class="table-responsive">
                <table class="table table-xl">
                    <thead>
                        <tr>
                            <th>N° de donneur</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Numéro de don</th>
                            <th>Véridique final </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($validations as $validation)
                           {{--  @if($validation->quantite_prelevee != null) --}}

                            <tr>
                                <td>{{ $validation->donneur->num_donneur }}</td>
                                <td>{{ $validation->donneur->nom }}</td>
                                <td>{{ $validation->donneur->prenom }}</td>
                                <td>{{ $validation->num_don }}</td>
                                <td>
                                    <a href="{{ route('validation.validation', $validation)}}" class="btn btn-sm btn-warning"><i class="icofont icofont-ui-edit icofont-lg"></i></i></a>
                                </td>
                            </tr>
                            {{-- @endif --}}
                        @endforeach
                    </tbody>
                    <a href="{{ route('dossierM.index')}}" class="btn btn-xs pull-right btn-success"><i class="icofont icofont-arrow-left"></i></a>
                </table>
            </div>
        </div>
    </div>
</div>
    <!-- Extra Large table end -->
@endsection
