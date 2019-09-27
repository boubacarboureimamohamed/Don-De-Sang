@extends('layouts.adminty')
@section('content')

<div class="col-sm-12">
@php
         $color = 'pink';
    @endphp
    <h1 class="text-center text-white bg-c-{{$color}}">
        <i class="icofont icofont-blood-drop f-30 text-white"></i>
            {{ ('Liste des planifications fixes') }}
        <i class="icofont icofont-blood-drop f-30 text-white"></i>
    </h1>
            <div class="card">
            <div class="card-block">
                <div class="btn-group btn-group-sm" style="float: none;">
                    @can('planifier_collecte')
                        <a href="{{ route('rdvs.create')}}" class="btn btn-success btn-outline-success" style="float: none; margin: 5px;">
                            <span class="icofont icofont-plus"></span>{{ ('Nouveau') }}
                        </a>
                    @endcan
                </div> 
                <div class="dt-responsive table-responsive">
                <table id="table" class="table table-striped table-bordered nowrap">
                    <thead>
                    <tr>
                        <th>Date et Heure</th>
                        <th>Lieu</th>
                        <th>Organisation</th>
                        <th>modifier</th>
                        <th>supprimer</th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach($rdvsfixes as $rdvsfixe)
                        @if($rdvsfixe->typerdv->type_rdv == 'Fixe')

                    <tr>
                        <td>{{ $rdvsfixe->date_heure }}</td>
                        <td>{{ $rdvsfixe->lieu }}</td>
                        <td>{{ $rdvsfixe->organisation->libelle }}</td>
                            @can('editer_planification')
                        <td>
                            <a href="{{ route('rdvs.edit', $rdvsfixe) }}">
                                <button class="btn btn-warning btn-outline-warning"><span class="icofont icofont-ui-edit"></span></button>
                            </a>
                        </td>
                            @endcan
                            @can('supprimer_planification')
                        <td>
                            <form action="{{ route('rdvs.destroy', $rdvsfixe) }}" method="post" id="form{{ $rdvsfixe->id }}">
                            {{ csrf_field()}}
                            {{ method_field('Delete') }}
                            <button type="button" onclick="confirmation('#form{{ $rdvsfixe->id }}')" class="btn btn-danger btn-outline-danger"><span class="icofont icofont-ui-delete"></span></button>
                            </form>
                        </td>
                            @endcan
                            </tr>
                            @endif
                            @endforeach
                </tbody>

                </table>
                                </div>
                            </div>
                        </div>
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

<script>

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

