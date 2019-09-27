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
            <h2 style="text-align: center;">Liste des donneurs inaptes</h2>
        </div>
        <div class="card-block">
        <div class="dt-responsive table-responsive">
            <table id="table" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th>N° de donneur</th>
                            <th>Nom</th>
                            <th>Prénom</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($donneur_inaptes as $donneur_inapte)
                            @if($donneur_inapte->approbation == '0')
                            <tr>
                                <td>{{ $donneur_inapte->donneur->num_donneur }}</td>
                                <td>{{ $donneur_inapte->donneur->nom }}</td>
                                <td>{{ $donneur_inapte->donneur->prenom }}</td>

                            </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
           </div>
        </div>
        <a href="{{ route('dossierM.donneursexaminer') }}" class="btn btn-xs pull-right btn-inverse">
            <i class="icofont icofont-arrow-left"></i>Retour
        </a>
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