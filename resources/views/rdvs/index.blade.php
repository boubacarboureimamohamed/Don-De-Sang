@extends('layouts.adminty')
@section('css')
<!-- Data Table Css -->
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">

@endsection
@section('content')

        <div class="col-sm-12">
            <!-- Zero config.table start -->
            <div class="card">
            <div class="card-header">
                <h2 style="text-align: center;">Liste des Planifications</h2>
            </div>
            <div class="card-block">
                <div class="btn-group btn-group-sm" style="float: none;">
                    @can('planifier_collecte')
                        <a href="{{ route('rdvs.create')}}" class="btn btn-success btn-outline-success" style="float: none; margin: 5px;">
                            <span class="icofont icofont-plus"></span>{{ ('Nouveau') }}
                        </a>
                    @endcan
                </div>
            <div class="data_table_main table-responsive dt-responsive">
               <table id="table" class="table table-striped table-bordered nowrap">
                    <thead>
                    <tr>
                        <th>Date et Heure</th>
                        <th>Lieu</th>
                        <th>Type de RDV</th>
                        <th>Organisation</th>
                        <th>Adresse</th>
                        <th>Telephone</th>
                        <th>Email</th>
                        <th>modifier</th>
                        <th>supprimer</th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach($rdvs as $rdv)
                    <tr>
                        <td>{{ $rdv->date_heure }}</td>
                        <td>{{ $rdv->lieu }}</td>
                        <td>{{ $rdv->typerdv->type_rdv }}</td>
                        <td>{{ $rdv->organisation->libelle }}</td>
                        <td>{{ $rdv->organisation->adresse }}</td>
                        <td>{{ $rdv->organisation->telephone }}</td>
                        <td>{{ $rdv->organisation->email }}</td>
                        <th>
                            @can('editer_prelevement')
                                <a href="{{ route('rdvs.edit', $rdv) }}">
                                    <button class="btn btn-warning btn-outline-warining"><span class="icofont icofont-ui-edit"></span></button>
                                </a>
                            @endcan
                        </th>

                        <th>
                            @can('supprimer_planification')
                                <form action="{{ route('rdvs.destroy', $rdv) }}" method="post" onsubmit=" return confirm('voulez vous supprimer cet enregistrement?');">
                                {{ csrf_field()}}
                                {{ method_field('Delete') }}

                                <button  class="btn btn-danger btn-outline-danger"><span class="icofont icofont-ui-delete"></span></button>
                                </form>
                            @endcan
                        </th>
                            </tr>
                            @endforeach
                </tbody>

                </table>
                                </div>
                            </div>
                        </div>
                        <!-- Default ordering table end -->






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