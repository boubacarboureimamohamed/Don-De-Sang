@extends('layouts.adminty')

@section('css')


@endsection

@section('content')

<div class="col-sm-12">
        <div class="card">
            <div class="card-header">
            <h3 style="text-align: center;">Liste des donneurs examinés</h3>
            </div>
            <div class="card-block">
            <div class="dt-responsive table-responsive">
            <table id="tab" class="table table-striped table-bordered nowrap">
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
            <td>{{ $donneursexaminer->donneur->num_donneur }}</span></td>
            <td>{{ $donneursexaminer->donneur->nom }}</span></td>
            <td>{{ $donneursexaminer->donneur->prenom }}</span></td>
            <td>
                <a href="{{ route('dossierM.showdonneursexaminer', $donneursexaminer)}}" class="btn btn-info btn-outline-info" style="float: none;margin: 5px;">
                <span class="icofont icofont-eye-alt"></span></a>
            </td>
            <td>
                <a href="{{ route('dossierM.editdonneursexaminer', $donneursexaminer)}}" class="btn btn-warning btn-outline-warning" style="float: none;margin: 5px;">
                <span class="icofont icofont-ui-edit"></span></a>
            </td>
            <td>
                <a href="" class="btn btn-danger btn-outline-danger" style="float: none;margin: 5px;">
                <span class="icofont icofont-ui-delete"></span></a>
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

$('#tab').DataTable({

    language: {

        url: "{{ asset('bower_components/data-table/French.json') }}"

    }

});

})

</script>

@endsection
