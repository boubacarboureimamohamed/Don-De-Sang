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
            {{ ('Liste des prélèvements validés') }}
        <i class="icofont icofont-blood-drop f-30 text-white"></i>
    </h1>
<div class="page-body">
    <div class="card">
        <div class="card-block">
            <div class="btn-group btn-group-sm" style="float: none; ">
                @can('don_accepte')
                    <a href="{{ route('validation.donaccepter') }}" class="btn btn-success btn-outline-success" style="float: none;margin: 5px;">
                        <span class="icofont icofont-check-circled"></span> {{ ('Dons Acceptés') }}
                    </a>
                @endcan
                @can('don_rejete')
                    <a href="{{ route('validation.donrejete') }}" class="btn btn-warning btn-outline-warning" style="float: none;margin: 5px;">
                        <span class="icofont icofont-warning-alt"></span> {{ ('Dons Rejetés') }}
                    </a>
                @endcan
            </div>
            <div  class="dt-responsive table-responsive">
                <table id="table" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th>Numéro du donneur</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Numéro de don</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($validations as $validation)
                           {{--  @if($validation->quantite_prelevee != null) --}}

                            <tr>
                                <td>{{ $validation->donneur->num_donneur }}</td>
                                <td>{{ $validation->donneur->nom }}</td>
                                <td>{{ $validation->donneur->prenom }}</td>
                                <td>{{ $validation->num_don }}</td>
                            </tr>
                            {{-- @endif --}}
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