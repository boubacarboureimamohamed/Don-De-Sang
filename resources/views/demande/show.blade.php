@extends('layouts.adminty')
@section('css')

@endsection

@section('content')
<div class="col-sm-12">
    <div class="page-body">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">{{ ('Détail sur la demande') }}</h3>
            </div>
            <div class="card-block">
            <div class="view-info">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="general-info">
                            <div class="row">
                                <div class="col-lg-12 col-xl-6">
                                    <div class="table-responsive">
                                        <table class="table m-0">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Numéro </th>
                                                    <td>{{ $demande->id }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Benéficiaire</th>
                                                    <td>{{ $demande->beneficiaire->libelle }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Téléphone benéficiaire</th>
                                                    <td>{{ $demande->beneficiaire->telephone }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                         <h5 class="text-center txt-primary">{{ ('Les lignes de demande') }}</h5></th>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- end of table col-lg-6 -->
                                <div class="col-lg-12 col-xl-6">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Date demande</th>
                                                    <td>{{ $demande->date }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Adresse benéficiaire</th>
                                                    <td>{{ $demande->beneficiaire->adresse }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Email benéficiaire</th>
                                                    <td>{{ $demande->beneficiaire->email }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"> </th>
                                                    <td>
                                                        @can('ajouter_ligne_demande')
                                                          <button type="button" class="btn btn-success btn-outline-success" data-toggle="modal" data-target="#Modal" id="open">Ajouter</button>
                                                        @endcan
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- end of table col-lg-6 -->
                            </div>
                            <!-- end of row -->
                        </div>
                        <!-- end of general info -->
                    </div>
                    <!-- end of col-lg-12 -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of view-info -->
        <div class="dt-responsive table-responsive">
            <table id="example-2" class="table table-striped table-bordered nowrap">
                <thead>
                    <tr>
                        <th>Groupe sanguin</th>
                        <th>Type Poche</th>
                        <th>Quantitée demandé</th>
                        <th>Quantitée livrée</th>
                        <th>Date de livraison</th>
                            @can('supprimer_ligne_demande')
                        <th>supprimer</th>
                            @endcan
                            @can('livrer_ligne_demande')
                        <th>Livrer</th>
                            @endcan
                    </tr>
                </thead>
                <tbody id="bodyLignes">
                    @foreach ($lignes as $ligne)
                    <tr>
                        <td>{{ $ligne->groupement->groupe_sanguin }}</td>
                        <td>{{ $ligne->type_poche }}</td>
                        <td>{{ $ligne->quantite_demandee }}</td>
                        <td>{{ $ligne->livraison ? $ligne->livraison->quantite_livree : '' }}</td>
                        <td>{{ $ligne->livraison ? $ligne->livraison->date : ''}}</td>
                            @can('supprimer_ligne_demande')
                        <td>
                            <form method="POST" action="{{ route('ligne.lignedestroy', $ligne) }}" id="form{{ $ligne->id }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="button" onclick="confirmation('#form{{ $ligne->id }}')" class="btn btn-danger btn-outline-danger waves-effect waves-light">
                                    <span class="icofont icofont-ui-delete"></span>
                                </button>
                            </form>
                        </td>
                            @endcan
                            @can('livrer_ligne_demande')
                        <td>
                         @if($lignenonlivree->contains($ligne))
                            <a href="#"
                            id="l{{ $ligne->id }}" data-toggle="modal" data-target="#LivreerModal"
                            data-route="{{ route('demande.livraison', $ligne->id) }}"
                            data-group_sanguinL="{{ $ligne->groupement_id}}"
                            data-type_pocheL="{{ $ligne->type_poche}}"
                            data-quantiteL="{{ $ligne->quantite_demandee }}"
                            onclick="updateL('#l{{ $ligne->id }}')"
                            class="btn btn-success btn-outline-success"><i class="icofont icofont-truck-loaded"></i>
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
        <a href="{{ route('demande.index')}}" class="btn btn-xs pull-right btn-inverse"><i class="icofont icofont-arrow-left"></i>Retour</a>
        </div>
    </div>
</div>

<form method="post" action="{{ route('ligne.lignestore') }}" id="form">
    <input type="hidden" value="{{ $demande->id }}" name="demande_id" id="demande_id">
    <input type="hidden" value="{{ $demande->date }}" name="datedemande">
    @csrf
    <!-- Modal -->
    <div class="modal" tabindex="-1" role="dialog" id="Modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="alert alert-danger" style="display:none"></div>
                <div class="modal-header">
                    <h5 class="modal-title">Ajout d'une ligne de demande</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    
                </div>
                <div class="modal-body">
                    <div class="form-group form-primary">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icofont icofont-blood-drop"></i></span>
                            <select title="Groupe Sanguin" title="selectionner le groupe sanguin" data-toggle="tooltip" name="groupement_id" id="groupement_id" class="form-control">
                                @foreach($groupements as $groupement)
                                    <option value="{{ $groupement->id }}">
                                        {{ $groupement->groupe_sanguin }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-primary">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icofont icofont"></i></span>
                            <select title="selectionner le type de poche" data-toggle="tooltip" name="type_poche" id="type_poche" class="form-control">
                                <option value="Double">Double</option>
                                <option value="Simple">Simple</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-primary">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icofont icofont-test-tube-alt"></i></span>
                            <input title="Quantité demandée" title="Entrez la quantité demandée" data-toggle="tooltip" type="text" name="quantite_demandee" id="quantite_demandee" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                    <button  class="btn btn-primary" id="ajaxSubmit">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form action="" id="form2" method="POST">
    @csrf
    <div class="modal fade" id="LivreerModal" tabindex="-1" role="dialog" aria-labelledby="LivreerModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header text-center">
            <h5 class="modal-title" id="LivreerModalLabel">Livrer une ligne de demande</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group form-primary">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icofont icofont-blood-drop"></i></span>
                            <select title="Groupe Sanguin" name="groupement_id" id="groupement_idLivree" readonly="" class="form-control">
                                @foreach($groupements as $groupement)
                                    <option value="{{ $groupement->id }}">
                                        {{ $groupement->groupe_sanguin }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-primary">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icofont icofont"></i></span>
                            <select title="Type de poche" name="type_poche" id="type_pocheLivree" readonly="" class="form-control">
                                <option value="Double">Double</option>
                                <option value="Simple">Simple</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group form-primary">
                        <div class="input-group">
                            <span class="input-group-addon"></span>
                            <input title="Quantité demandée" type="text" name="quantite_demandee" id="quantite_demandeeLivree" readonly="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-primary">
                        <div class="input-group">
                            <span class="input-group-addon"></span>
                            <input title="Quantité livrée" type="text" name="quantite_livree" id="livreeLivreer" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                        <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-calendar"></i></span>
                                <input title="Date de livraison" type="date" name="date" id="date_livraisonLivreer" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
             </div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary">Livreer</button>
            </div>
        </div>
    </div>
    </div>
</form>
@endsection

@section('js')

    <script>
        function updateL(ligneLId) {
                $('#quantite_demandeeLivree').val($(ligneLId).attr('data-quantiteL'))
                $('#groupement_idLivree').val($(ligneLId).attr('data-group_sanguinL'))
                $('#type_pocheLivree').val($(ligneLId).attr('data-type_pocheL'))
                $('#form2').attr('action', $(ligneLId).attr('data-route'))
        }
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
