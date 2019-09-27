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
@php
         $color = 'pink';
    @endphp
    <h1 class="text-center text-white bg-c-{{$color}}">
        <i class="icofont icofont-blood-drop f-30 text-white"></i>
            {{ ('Liste des donneurs') }}
        <i class="icofont icofont-blood-drop f-30 text-white"></i>
    </h1>
    <div class="page-body">
    <div class="card">
        <div class="card-block">
            <div  class="dt-responsive table-responsive">
                <table id="table" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th>Numéro du donneur</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($donneurs as $donneur)
                            <tr>
                                <td>{{ $donneur->num_donneur }}</td>
                                <td>{{ $donneur->nom }}</td>
                                <td>{{ $donneur->prenom }}</td>
                                <td>
                                    <a href="{{ route('dossierM.show_dossiermedical', $donneur->id) }}" class="btn btn-info btn-outline-info" style="float: none;margin: 5px;">
                                    <span class="icofont icofont-eye-alt"></span></a>
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