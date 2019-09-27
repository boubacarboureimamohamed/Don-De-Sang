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
            {{ ('Liste des donneurs prélevés') }}
        <i class="icofont icofont-blood-drop f-30 text-white"></i>
    </h1>
<div class="page-body">
    <div class="card">
        <div class="card-block">
            <div class="dt-responsive table-responsive">
            <table id="table" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th>N° de donneur</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                                @can('consulter_prelevement')
                            <th>Detail</th>
                                @endcan
                                @can('editer_prelevement')
                            <th>Modifier</th>
                                @endcan
                                @can('valider_prelevement')
                            <th>Valider</th>
                                @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($prelevements as $prelevement)
                            <tr>
                                <td>{{ $prelevement->donneur->num_donneur }}</td>
                                <td>{{ $prelevement->donneur->nom }}</td>
                                <td>{{ $prelevement->donneur->prenom }}</td>
                                    @can('consulter_prelevement')
                                <td>
                                    <a href="{{ route('prelevement.show_prelevement', $prelevement) }}" class="btn btn-info btn-outline-info">
                                        <i class="icofont icofont-eye-alt icofont-lg"></i>
                                    </a>
                                </td>
                                    @endcan
                                    @can('editer_prelevement')
                                <td>
                                    <a href="{{ route('prelevement.edit', $prelevement) }}" class="btn btn-warning btn-outline-warning">
                                         <i class="icofont icofont-ui-edit icofont-lg"></i></i>
                                    </a>
                                </td>
                                    @endcan
                                    @can('valider_prelevement')
                                <td>
                                    <a href="{{ route('validation.validation', $prelevement)}}" class="btn btn-primary btn-outline-primary">
                                        <i class="icofont icofont-verification-checked icofont-touch icofont-lg"></i>
                                    </a>
                                </td>
                                    @endcan
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