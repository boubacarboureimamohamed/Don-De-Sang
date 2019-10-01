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
            {{ ('Liste des donneurs examinés') }}
        <i class="icofont icofont-blood-drop f-30 text-white"></i>
    </h1>
        <div class="card">
            <div class="card-block">
                <div class="btn-group btn-group-sm" style="float: none; ">
                    @can('ajouter_donneur')
                        <a href="{{ route('donneurs.add')}}" class="btn btn-success btn-outline-success"  style="float: none;margin: 5px;">
                            <span class="icofont icofont-plus"></span> {{ (' Nouveau') }}
                        </a>
                    @endcan

                    @can('donneur_apte')
                        <a href="{{ route('dossierM.donneur_apte')}}" class="btn btn-success btn-outline-success" style="float: none;margin: 5px;">
                            <span class="icofont icofont-check-circled"></span> {{ (' Donneurs Aptes') }}
                        </a>
                    @endcan

                    @can('donneur_inapte')
                        <a href="{{ route('dossierM.donneur_inapte')}}" class="btn btn-warning btn-outline-warning" style="float: none;margin: 5px;">
                            <span class="icofont icofont-warning-alt"></span> {{ (' Donneurs Inaptes') }}
                        </a>
                    @endcan
                </div>
            <div class="dt-responsive table-responsive">
            <table id="table" class="table table-striped table-bordered nowrap">
            <thead>
            <tr>
            <th>Numéo du donneur</th>
            <th>Nom </th>
            <th>Prenom</th>
            <th>Détail</th>
            <th>Modifier</th>
            <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($donneursexaminers as $donneursexaminer)
                <tr>
            <td>{{ $donneursexaminer->donneur->num_donneur }}</td>
            <td>{{ $donneursexaminer->donneur->nom }}</td>
            <td>{{ $donneursexaminer->donneur->prenom }}</td>
            <td>
                <a href="{{ route('dossierM.showdonneursexaminer', $donneursexaminer)}}" class="btn btn-info btn-outline-info" style="float: none;margin: 5px;">
                <span class="icofont icofont-eye-alt"></span></a>
            </td>
            <td>
                <a href="{{ route('dossierM.editdonneursexaminer', $donneursexaminer)}}" class="btn btn-warning btn-outline-warning" style="float: none;margin: 5px;">
                <span class="icofont icofont-ui-edit"></span></a>
            </td>
            <td>
                 <form method="POST" action="{{ route('dossierM.destroydonneurexaminer', $donneursexaminer) }}" id="form{{ $donneursexaminer->donneur->id }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="button" onclick="confirmation('#form{{ $donneursexaminer->donneur->id }}')" class="btn btn-danger btn-outline-danger waves-effect waves-light">
                        <span class="icofont icofont-ui-delete"></span>
                    </button>
                </form>
            </td>
            </tr>
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