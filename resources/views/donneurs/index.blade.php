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
        <div class="card">
            <div class="card-header">
                <h2 style="text-align: center;">Liste des donneurs</h2>
            </div>
            <div class="card-block">
                <div class="btn-group btn-group-sm" style="float: none; ">
                    <a href="{{ route('donneurs.add')}}" class="btn btn-success btn-outline-success"  style="float: none;margin: 5px;">
                        <span class="icofont icofont-plus"></span> {{ (' Nouveau') }}
                    </a>
                    <a href="{{ route('prelevement.donneur_apte_a_prelevee')}}" class="btn btn-success btn-outline-success" style="float: none;margin: 5px;">
                        <span class="icofont icofont-check-circled"></span> {{ (' Donneurs Aptes') }}
                    </a>
                    <a href="{{ route('dossierM.donneur_inapte')}}" class="btn btn-warning btn-outline-warning" style="float: none;margin: 5px;">
                        <span class="icofont icofont-warning-alt"></span> {{ (' Donneurs Inaptes') }}
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="example-2">
                        <thead>
                            <tr>
                                <th>Numéro</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Type de donneur</th>
                                <th class="tabledit-toolbar-column">Modifier</th>
                                <th class="tabledit-toolbar-column">Supprimer</th>
                                <th class="tabledit-toolbar-column">Detail</th>
                                <th class="tabledit-toolbar-column">Examiner</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($donneurs as $donneur)
                            <tr>
                                <td class="tabledit-view-mode">
                                    <span class="tabledit-span" style="">
                                        {{ $donneur->num_donneur }}
                                    </span>
                                </td>
                                <td class="tabledit-view-mode">
                                    <span class="tabledit-span" style="">
                                        {{ $donneur->nom }}
                                    </span>
                                </td>
                                <td class="tabledit-view-mode">
                                    <span class="tabledit-span" style="">
                                        {{ $donneur->prenom }}
                                    </span>
                                </td>
                                <td class="tabledit-view-mode">
                                    <span class="tabledit-span" style="">
                                        {{ $donneur->typedonneur->type_donneur }}
                                    </span>
                                </td>
                                <td style="white-space: nowrap; width: 1%;">
                                    <div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                        <div class="btn-group btn-group-sm" style="float: none;">
                                            <a href="{{ route('donneurs.edit', $donneur) }}" class="btn btn-warning btn-outline-warning waves-effect waves-light">
                                                <span class="icofont icofont-ui-edit"></span>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td style="white-space: nowrap; width: 1%;">
                                    <div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                        <div class="btn-group btn-group-sm" style="float: none;">
                                            <form method="POST" action="{{ route('donneurs.destroy', $donneur) }}" onsubmit="return confirm('Êtes-vous sûr de supprimer cet enregistrement ?');">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger btn-outline-danger waves-effect waves-light">
                                                    <span class="icofont icofont-ui-delete"></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                                <td style="white-space: nowrap; width: 1%;">
                                    <div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                        <div class="btn-group btn-group-sm" style="float: none;">
                                            <a href="{{ route('donneurs.show', $donneur) }}" class="btn btn-info btn-outline-info waves-effect waves-light">
                                                <span class="icofont icofont-eye-alt"></span>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td style="white-space: nowrap; width: 1%;">
                                    <div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                        <div class="btn-group btn-group-sm" style="float: none;">
                                        <a href="{{ route('dossierM.examiner', $donneur) }}" class="btn btn-sm btn-outline-primary waves-effect waves-light">
                                                <span class="icofont icofont-stethoscope-alt icofont-lg"></span>
                                            </a>
                                        </div>
                                    </div>
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
