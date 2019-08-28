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
            <h2 style="text-align: center;">Liste des donneurs aptes au don</h2>
        </div>
        <div class="card-block">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="example-2">
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
                                    <a href="{{ route('prelevement.prelever', $dossier)}}" class="btn btn-sm btn-primary"><i class="icofont icofont-icu icofont-lg"></i></a>
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
