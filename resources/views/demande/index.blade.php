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
            {{ ('Liste des demandes') }}
        <i class="icofont icofont-blood-drop f-30 text-white"></i>
    </h1>
<div class="page-body">
    <!-- Extra Large table start -->
    <div class="card">
        <div class="card-block">
            <div class="table-responsive">
                <div class="btn-group btn-group-sm" style="float: none; ">
                    @can('ajouter_demande')
                        <a href="{{ route('demande.create')}}" class="btn btn-success btn-outline-success" style="float: none;margin: 5px;">
                            <span class="icofont icofont-plus"></span> {{ (' Nouveau') }}
                        </a>
                    @endcan
                </div>
                <table id="table" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th>Date demande</th>
                            <th>Benéficiaire</th>
                            <th>Adresse benéficiaire</th>
                                @can('consulter_demande')
                            <th>Detail</th>
                                @endcan
                                @can('editer_demande')
                            <th>Modifier</th>
                                @endcan
                                @can('supprimer_demande')
                            <th>supprimer</th>
                                @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($demandes as $demande)
                        <tr>
                            <td>{{ $demande->date }}</td>
                            <td>{{ $demande->beneficiaire->libelle }}</td>
                            <td>{{ $demande->beneficiaire->adresse }}</td>
                                @can('consulter_demande')
                            <td>
                                <a href="{{ route('demande.show', $demande) }}" class="btn btn-primary btn-outline-primary">
                                    <i class="icofont icofont-eye-alt icofont-lg"></i>
                                </a>
                            </td>
                                @endcan
                                @can('editer_demande')
                            <td>
                                <a href="{{ route('demande.edit', $demande) }}" class="btn btn-warning btn-outline-warning">
                                    <i class="icofont icofont-ui-edit"></i>
                                </a>
                            </td>
                                @endcan
                                @can('supprimer_demande')
                            <td>
                                <form method="POST" action="{{ route('demande.demandedestroy', $demande) }}" id="">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="button" onclick="confirmation()" class="btn btn-danger btn-outline-danger waves-effect waves-light">
                                        <span class="icofont icofont-ui-delete"></span>
                                    </button>
                                </form>
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

function confirmation(target)
        {
            swal({
                title: "Êtes-vous sûr ???",
                text: "Une fois supprimé, vous ne pourrez plus récupérer cet enregistrement! ",
                type: "warning",
                showCancelButton: true,
                confirmButtonText:'Oui',
                cancelButtonText:'Non'

            }).then(function() {
                $(target).submit();
            });
        }

</script>

@endsection
