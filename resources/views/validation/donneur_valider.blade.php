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
            <h3 style="text-align: center;">Liste des prélèvements validés</h3>
        </div>
        <div class="card-block">
            <div class="btn-group btn-group-sm" style="float: none; ">
                @can('don_accepte')
                    <a href="#" class="btn btn-success btn-outline-success" style="float: none;margin: 5px;">
                        <span class="icofont icofont-check-circled"></span> {{ ('Dons Acceptés') }}
                    </a>
                @endcan
                @can('don_rejete')
                    <a href="#" class="btn btn-warning btn-outline-warning" style="float: none;margin: 5px;">
                        <span class="icofont icofont-warning-alt"></span> {{ ('Dons Rejetés') }}
                    </a>
                @endcan
            </div>
            <div  class="dt-responsive table-responsive">
                <table id="simpletable" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th>Numéro du donneur</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Numéro de don</th>
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
                            </tr>
                            {{-- @endif --}}
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    <!-- Extra Large table end -->
@endsection
