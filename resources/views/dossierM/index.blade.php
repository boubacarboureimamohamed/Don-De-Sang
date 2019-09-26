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
                    <h2 style="text-align: center;">Liste des donneurs</h2>
                </div>
                <div class="btn-group btn-group-sm" style="float: none; ">
                    <a href="{{ route('dossierM.donneur_apte')}}" class="btn btn-success btn-outline-success" style="float: none;margin: 5px;">
                        <span class="icofont icofont-check-circled"></span> {{ (' Donneurs Aptes') }}
                    </a>
                    <a href="{{ route('dossierM.donneur_inapte')}}" class="btn btn-warning btn-outline-warning" style="float: none;margin: 5px;">
                        <span class="icofont icofont-warning-alt"></span> {{ (' Donneurs Inaptes') }}
                    </a>
                </div>
                <table class="table table-striped table-bordered" id="table">
                    <thead>
                        <tr>
                            <th>N° de donneur</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Télephone</th>
                            <th>Adresse</th>
                            <th>Type de donneur</th>
                            <th>Organisation</th>
                            <th>Examiner</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($donneurs as $donneur)
                        <tr>
                            <td>{{ $donneur->num_donneur }}</td>
                            <td>{{ $donneur->nom }}</td>
                            <td>{{ $donneur->prenom }}</td>
                            <td>{{ $donneur->telephone }}</td>
                            <td>{{ $donneur->adresse }}</td>
                            <td>{{ $donneur->typedonneur->type_donneur }}</td>
                            <td>{{ $donneur->organisation ? $donneur->organisation->libelle : '' }} </td>
                            <td>
                                <a href="{{ route('dossierM.examiner', $donneur) }}" class="btn btn-sm btn-primary"><i class="icofont icofont-stethoscope-alt icofont-lg"></i></a>
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

@section('js')

<script>


$(document).ready(function () {

$('#table').DataTable({

language: {

    url: "{{ asset('bower_components/data-table/French.json') }}"

}

});

});

</script>

@endsection
