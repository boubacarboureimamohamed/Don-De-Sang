@extends('layouts.adminty')

@section('css')

@endsection

@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h2 style="text-align: center;">Liste des donneurs</h2>
            </div>
            <div class="card-block">
                <div class="btn-group btn-group-sm" style="float: none; ">
                    @can('ajouter_donneur')
                        <a href="{{ route('donneurs.add')}}" class="btn btn-success btn-outline-success"  style="float: none;margin: 5px;">
                            <span class="icofont icofont-plus"></span> {{ (' Nouveau') }}
                        </a>
                    @endcan

                    @can('donneur_apte')
                        <a href="{{ route('prelevement.donneur_apte_a_prelevee')}}" class="btn btn-success btn-outline-success" style="float: none;margin: 5px;">
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
                    <table id="simpletable" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>Numéro</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Type de donneur</th>
                                <th class="tabledit-toolbar-column">Detail</th>
                                <th class="tabledit-toolbar-column">Modifier</th>
                                <th class="tabledit-toolbar-column">Supprimer</th>
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
                                <td>
                                    @can('consulter_donneur')
                                        <a href="{{ route('donneurs.show', $donneur) }}" class="btn btn-info btn-outline-info waves-effect waves-light">
                                        <span class="icofont icofont-eye-alt"></span>
                                        </a>
                                    @endcan
                                </td>
                                <td>
                                    @can('editer_donneur')
                                        <a href="{{ route('donneurs.edit', $donneur) }}" class="btn btn-warning btn-outline-warning waves-effect waves-light">
                                            <span class="icofont icofont-ui-edit"></span>
                                        </a>
                                    @endcan
                                </td>
                                <td>
                                    @can('supprimer_donneur')
                                        <form method="POST" action="{{ route('donneurs.destroy', $donneur) }}" onsubmit="return confirm('Êtes-vous sûr de supprimer cet enregistrement ?');">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger btn-outline-danger waves-effect waves-light">
                                                <span class="icofont icofont-ui-delete"></span>
                                            </button>
                                        </form>
                                    @endcan
                                </td>
                                <td>
                                    @can('examiner_donneur')
                                        <a href="{{ route('dossierM.examiner', $donneur) }}" class="btn btn-primary btn-outline-primary waves-effect waves-light">
                                            <span class="icofont icofont-stethoscope-alt"></span>
                                        </a>
                                    @endcan
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
