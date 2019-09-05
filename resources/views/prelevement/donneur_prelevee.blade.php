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
            <h2 style="text-align: center;">Liste des Prélèvements </h2>
        </div>
        <div class="card-block">
            <div class="dt-responsive table-responsive">
            <table id="simpletable" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th>N° de donneur</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Detail</th>
                            <th>Modifier</th>
                            <th>Analyser</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($prelevements as $prelevement)
                            <tr>
                                <td>{{ $prelevement->donneur->num_donneur }}</td>
                                <td>{{ $prelevement->donneur->nom }}</td>
                                <td>{{ $prelevement->donneur->prenom }}</td>
                                <td>
                                    <a href="{{ route('prelevement.show_prelevement', $prelevement) }}" class="btn btn-info btn-outline-info"><i class="icofont icofont-eye-alt icofont-lg"></i></a>
                                </td>
                                <td>
                                    <a href="{{ route('prelevement.edit', $prelevement) }}" class="btn btn-warning btn-outline-warning"><i class="icofont icofont-ui-edit icofont-lg"></i></i></a>
                                </td>
                                <td>
                                    <a href="" class="btn btn-primary btn-outline-primary"><i class="icofont icofont- icofont-lg"></i></a>
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