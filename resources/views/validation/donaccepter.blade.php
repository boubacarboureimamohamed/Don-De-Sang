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
            {{ ('Liste des dons acceptés') }}
        <i class="icofont icofont-blood-drop f-30 text-white"></i>
    </h1>
<div class="page-body">
    <div class="card">
        <div class="card-block">
            <div class="table-responsive">
                <table id="table" class="table table-striped table-bordered nowrap">
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
            </div>
        </div>
        <a href="{{ route('validation.donneur_valider') }}" class="btn btn-xs pull-right btn-inverse"><i class="icofont icofont-arrow-left"></i>Retour</a>
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