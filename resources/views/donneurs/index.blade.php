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
                <div class="dt-responsive table-responsive">
                    <table id="simpletable" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>Numéro</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Type de donneur</th>
                                    @can('consulter_donneur')
                                <th>Detail</th>
                                    @endcan
                                    @can('editer_donneur')
                                <th>Modifier</th>
                                    @endcan
                                    @can('supprimer_donneur')
                                <th>Supprimer</th>
                                    @endcan
                                    @can('examiner_donneur')
                                <th>Examiner</th>
                                    @endcan
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
                                    @can('consulter_donneur')
                                <td>
                                    <a href="{{ route('donneurs.show', $donneur) }}" class="btn btn-info btn-outline-info waves-effect waves-light">
                                    <span class="icofont icofont-eye-alt"></span>
                                    </a>
                                </td>
                                    @endcan
                                    @can('editer_donneur')
                                <td>
                                    <a href="{{ route('donneurs.edit', $donneur) }}" class="btn btn-warning btn-outline-warning waves-effect waves-light">
                                        <span class="icofont icofont-ui-edit"></span>
                                    </a>
                                </td>
                                    @endcan
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
                                        @if($donneursapreleves->contains($donneur))
                                            <a href="{{ route('dossierM.examiner', $donneur) }}" class="btn btn-primary btn-outline-primary waves-effect waves-light">
                                                <span class="icofont icofont-stethoscope-alt"></span>
                                            </a>
                                        @endif
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
