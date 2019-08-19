@extends('layouts.adminty')
@section('css')

  <!-- jpro forms css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('js\j-pro\css\demo.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js\j-pro\css\font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js\j-pro\css\j-pro-modern.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js\advance-elements\css\bootstrap-datetimepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components\bootstrap-daterangepicker\css\daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components\datedropper\css\datedropper.min.css') }}">

@endsection
@section('content')
<div class="col-sm-12">
<div class="page-body">

    <!-- Extra Large table start -->
    <div class="card">
        <div class="card-header">
            <h5>Liste des Donneurs</h5>
        </div>
        <div class="card-block">
            <div class="table-responsive">
                <table class="table table-xl">
                    <thead>
                        <tr>
                            <th>N° de donneur</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Télephone</th>
                            <th>Adresse</th>
                            <th>Type de donneur</th>
                            <th>Organisation</th>
                            <th>Modifier</th>
                            <th>Suprimer</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($donneurs as $donneur)
                        <tr>
                            <td>{{ $donneur->num_donneur }}</td>
                            <td>{{ $donneur->nom }}</td>
                            <td>{{ $donneur->prenom }}</td>
                            <td>{{ $donneur->telephone }}</td>
                            <td>{{ $donneur->adresse }}</td>
                            <td>{{ $donneur->typedonneur->type_donneur }}</td>
                            <td>{{ $donneur->organisation ? $donneur->organisation->libelle : '' }} </td>
                            <td>
                                <a href="{{ route('donneurs.edit', $donneur) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit fa-lg fa-spin" style="color: #20c997;"></i></a>
                            </td>
                            <td>
                                <form method="POST"
                                      action="{{ route('donneurs.destroy', $donneur) }}"
                                      onsubmit="return confirm('Etes vous sûr de supprimer?');">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash fa-spin"></i></button>
                                </form>
                            </td>
                            <td>
                                <a href="{{ route('donneurs.show', $donneur) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit fa-lg fa-spin" style="color: #20c997;"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <a href="{{ route('donneurs.add')}}" class="btn btn-xs pull-right btn-success"><i class="fa fa-plus"></i></a>
                </table>
            </div>
        </div>
    </div>
</div>
    <!-- Extra Large table end -->
@endsection
