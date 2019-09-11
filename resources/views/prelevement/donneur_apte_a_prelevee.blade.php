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
    <!-- Extra Large table start -->
    <div class="card">
        <div class="card-header">
            <h3 style="text-align: center;">Liste des donneurs aptes au don</h3>
        </div>
        <div class="card-block">
            <div class="dt-responsive table-responsive">
            <table id="simpletable" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th>N° de donneur</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Prélever</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dossiers as $dossier)
                            @if($dossier->approbation == 1)
                            <tr>
                                <td>{{ $dossier->donneur->num_donneur }}</td>
                                <td>{{ $dossier->donneur->nom }}</td>
                                <td>{{ $dossier->donneur->prenom }}</td>
                                <td>
                                    @can('prelever_donneur')
                                        <a href="{{ route('prelevement.prelever', $dossier)}}" class="btn btn-primary btn-outline-primary">
                                            <i class="icofont icofont-icu icofont-lg"></i>
                                        </a>
                                    @endcan
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    <!-- Extra Large table end -->
</div>
@endsection
