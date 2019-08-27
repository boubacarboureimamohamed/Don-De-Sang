@extends('layouts.adminty')
@section('content')

<div class="col-sm-12">
            <!-- Zero config.table start -->
            <div class="card">
            <div class="card-header">
                <h2 style="text-align: center;">Liste des Planifications Mobile</h2>
            </div>
            <div class="card-block">
                <div class="btn-group btn-group-sm" style="float: none;">
                    <a href="{{ route('rdvs.create')}}" class="btn btn-success" style="float: none; margin: 5px;">
                    <span class="icofont icofont-plus"></span>{{ ('Nouveau') }}</a>
                </div>
            <div class="data_table_main table-responsive dt-responsive">
               <table id="simpletable" class="table table-striped table-bordered nowrap">
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
                        @foreach($rdvsmobiles as $rdvsmobile)
                        @if($rdvsmobile->typerdv->type_rdv == 'Mobile')
                        
                    <tr>
                        <td>{{ $rdvsmobile->date_heure }}</td>
                        <td>{{ $rdvsmobile->lieu }}</td>
                        <td>{{ $rdvsmobile->organisation->libelle }}</td>                       
                        <th>
                        <a href="{{ route('rdvs.edit', $rdvsmobile) }}"><button class="btn btn-success"><span class="icofont icofont-ui-edit"></span></button></a>
                        </th>

                        <th>
                            <form action="{{ route('rdvs.destroy', $rdvsmobile) }}" method="post" onsubmit=" return confirm('voulez vous supprimer cet enregistrement?');">
                            {{ csrf_field()}}
                            {{ method_field('Delete') }}

                            <button  class="btn btn-danger"><span class="icofont icofont-ui-delete"></span></button>
                            </form>
                        </th>
                            </tr>
                            @endif
                            @endforeach
                </tbody>

                </table>
                                </div>
                            </div>
                        </div>
                        <!-- Default ordering table end -->






 </div>


@endsection