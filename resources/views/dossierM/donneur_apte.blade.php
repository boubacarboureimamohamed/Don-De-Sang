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
            <h5>Liste des Donneurs apte</h5>
        </div>
        <div class="card-block">
            <div class="table-responsive">
                <table class="table table-xl">
                    <thead>
                        <tr>
                            <th>N° de donneur</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Modifier</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($donneur_aptes as $donneur_apte)
                            @if($donneur_apte->approbation == '1')
                            <tr>
                                <td>{{ $donneur_apte->donneur->num_donneur }}</td>
                                <td>{{ $donneur_apte->donneur->nom }}</td>
                                <td>{{ $donneur_apte->donneur->prenom }}</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-warning"><i class="icofont icofont-ui-edit icofont-lg"></i></i></a>
                                </td>
                                <td>
                                    <a href="{{ route('dossierM.show_apte', $donneur_apte) }}" class="btn btn-sm btn-info"><i class="icofont icofont-eye-alt icofont-lg"></i></a>
                                </td>
                            </tr>
                            @endif
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