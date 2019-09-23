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
            <h2 style="text-align: center;">Liste des dons acceptés</h2>
        </div>
        <div class="card-block">
            <div class="table-responsive">
                <table id="simpletable" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th>N° de donneur</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Numéro du don</th>
                            <th>Detail</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dons as $don)


                            <tr>
                                <td>{{ $don->donneur->num_donneur }}</td>
                                <td>{{ $don->donneur->nom }}</td>
                                <td>{{ $don->donneur->prenom }}</td>
                                <td>{{ $don->num_don }}</td>


                                <td>
                                    <a href="{{ route('validation.showdonaccepter', $don) }}" class="btn btn-sm btn-info"><i class="icofont icofont-eye-alt icofont-lg"></i></a>
                                </td>

                            </tr>

                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('validation.donneur_valider') }}" class="btn btn-xs pull-right btn-inverse"><i class="icofont icofont-arrow-left"></i>Retour</a>
            </div>
        </div>
    </div>
</div>
    <!-- Extra Large table end -->
@endsection
