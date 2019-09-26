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
            <h2 style="text-align: center;">Liste des donneurs aptes</h2>
        </div>
        <div class="card-block">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="table">
                    <thead>
                        <tr>
                            <th>N° de donneur</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Detail</th>
                            <th>Modifier</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($donneurs as $donneur)
                            @php
                            $approbation = $donneur->dossierMedicals->last()->approbation ?? 0 ;
                            @endphp
                            @if($donneur->dossierMedicals->count() > 0 && $approbation ==1)

                            <tr>
                                <td>{{ $donneur->num_donneur }}</td>
                                <td>{{ $donneur->nom }}</td>
                                <td>{{ $donneur->prenom }}</td>
                                <td>
                                    <a href="{{ route('dossierM.show_apte', $donneur) }}" class="btn btn-sm btn-info"><i class="icofont icofont-eye-alt icofont-lg"></i></a>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary"><i class="icofont icofont-ui-edit icofont-lg"></i></i></a>
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('dossierM.index')}}" class="btn btn-xs pull-right btn-inverse"><i class="icofont icofont-arrow-left"></i>Retour</a>
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