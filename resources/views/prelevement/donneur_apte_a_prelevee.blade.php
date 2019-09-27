@extends('layouts.adminty')
@section('css')

@endsection

@section('content')

<div class="col-sm-12">
@php
         $color = 'pink';
    @endphp
    <h1 class="text-center text-white bg-c-{{$color}}">
        <i class="icofont icofont-blood-drop f-30 text-white"></i>
            {{ ('Liste des donneurs apte au don') }}
        <i class="icofont icofont-blood-drop f-30 text-white"></i>
    </h1>
    <div class="card">
        <div class="card-block">
            <div class="dt-responsive table-responsive">
            <table id="table" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th>N° de donneur</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                                @can('prelever_donneur')
                            <th>Prélever</th>
                                @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dossiers as $dossier)
                            @if($dossier->approbation == 1)
                            <tr>
                                <td>{{ $dossier->donneur->num_donneur }}</td>
                                <td>{{ $dossier->donneur->nom }}</td>
                                <td>{{ $dossier->donneur->prenom }}</td>
                                    @can('prelever_donneur')
                                <td>
                                    <a href="{{ route('prelevement.prelever', $dossier)}}" class="btn btn-primary btn-outline-primary">
                                        <i class="icofont icofont-icu icofont-lg"></i>
                                    </a>
                                </td>
                                    @endcan
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