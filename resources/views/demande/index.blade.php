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
        <div class="card-block">
            <div class="table-responsive">
                <div class="card-header">
                    <h2 style="text-align: center;">Liste des demandes</h2>
                </div>
                <div class="btn-group btn-group-sm" style="float: none; ">
                    <a href="{{ route('demande.create')}}" class="btn btn-success btn-outline-success" style="float: none;margin: 5px;">
                        <span class="icofont icofont-plus"></span> {{ (' Nouveau') }}
                    </a>
                </div>
                <table id="simpletable" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th>Date demande</th>
                            <th>Benéficiaire</th>
                            <th>Adresse benéficiaire</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($demandes as $demande)
                        <tr>
                            <td>{{ $demande->date }}</td>
                            <td>{{ $demande->beneficiaire->libelle }}</td>
                            <td>{{ $demande->beneficiaire->adresse }}</td>
                            <td>
                                <a href="{{ route('demande.show', $demande) }}" class="btn btn-primary btn-outline-primary"><i class="icofont icofont-eye-alt icofont-lg"></i></a>
                                <a href="{{ route('demande.edit', $demande) }}" class="btn btn-warning btn-outline-warning"><i class="icofont icofont-ui-edit"></i></a>
                                <a href="#" class="btn btn-danger btn-outline-danger"><i class="icofont icofont-ui-delete"></i></a>
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
