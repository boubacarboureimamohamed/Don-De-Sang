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
                @can('ajouter_donneur')
                    <a href="{{ route('donneurs.add') }}" class="btn btn-success btn-outline-success"  style="float: none;margin: 5px;">
                    <span class="icofont icofont-plus"></span> {{ (' Nouveau') }}
                    </a>
                @endcan
                <div class="dt-responsive table-responsive">
                    <table id="simpletable" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>Numéro</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Adresse</th>
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
                                        {{ $donneur->adresse }}
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
                                    @can('supprimer_donneur') 
                                <td>
                                    <form method="POST" action="{{ route('donneurs.destroy', $donneur) }}" id="form{{ $donneur->id }}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="button" onclick="confirmation('#form{{ $donneur->id }}')" class="btn btn-danger btn-outline-danger waves-effect waves-light">
                                            <span class="icofont icofont-ui-delete"></span>
                                        </button>
                                    </form>
                                </td>
                                    @endcan
                                    @can('examiner_donneur')
                                <td>
                                    @if($donneursapreleves->contains($donneur))
                                        <a href="{{ route('dossierM.examiner', $donneur) }}" class="btn btn-primary btn-outline-primary waves-effect waves-light">
                                            <span class="icofont icofont-stethoscope-alt"></span>
                                        </a>
                                    @endif
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
@endsection

@section('js')
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
