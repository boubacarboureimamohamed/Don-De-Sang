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
        <div class="card">
            <div class="card-header">
                <h5>Demande N°{{ $demande->id }}</h5>
            </div>
            <div class="card-block">
                <div class="row">
                    <div class="col-lg-12 col-xl-12">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <tbody>
                                    <tr>
                                        <th scope="row">Date demande</th>
                                        <td>{{ $demande->date }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Benéficiaire </th>
                                        <td>{{ $demande->beneficiaire->libelle }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Adresse benéficiaire</th>
                                        <td>{{ $demande->beneficiaire->adresse }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Téléphone benéficiaire</th>
                                        <td>{{ $demande->beneficiaire->telephone }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Email benéficiaire</th>
                                        <td>{{ $demande->beneficiaire->email }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="table-responsive">
                                 <table class="table m-0">
                                    <tbody>
                                        <tr>
                                            <div class="text-center">
                                                <th scope="row">Les lignes de demande</th>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-outline-info" data-toggle="modal" data-target="#Modal" id="open">Ajouter</button>
                                                </td>
                                            </div>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table id="demo-foo-filtering" class="table table-striped">
                                <thead>
                                    <tr class="border-bottom-danger">
                                        <th>Groupe sanguin</th>
                                        <th>Quantitée demandé</th>
                                        <th>Modifier</th>
                                        <th>supprimer</th>
                                        <th>Livrée</th>
                                    </tr>
                                </thead>
                                <tbody id="bodyLignes">
                                    @foreach ($lignes->ligne_demandes as $ligne)
                                    <tr class="border-bottom-primary">
                                        <td>{{ $ligne->groupement->groupe_sanguin }}</td>
                                        <td>{{ $ligne->quantite_demandee }}</td>
                                        <td>
                                            <a href="#"
                                                id="ligne{{ $ligne->id }}" data-toggle="modal" data-target="#ModifierModal"
                                                data-route="{{ route('demande.ligneupdate', $ligne->id) }}"
                                                data-group_sanguin="{{ $ligne->groupement_id}}"
                                                data-quantite="{{ $ligne->quantite_demandee }}"
                                                onclick="update('#ligne{{ $ligne->id }}')"
                                             class="btn btn-warning btn-outline-warning"><i class="icofont icofont-ui-edit"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <form method="POST" action="{{ route('ligne.lignedestroy', $ligne) }}" onsubmit="return confirm('Êtes-vous sûr de supprimer cet enregistrement ?');">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger btn-outline-danger waves-effect waves-light">
                                                    <span class="icofont icofont-ui-delete"></span>
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            <a href="#"
                                            id="l{{ $ligne->id }}" data-toggle="modal" data-target="#LivreerModal"
                                            data-route="{{ route('demande.livraison', $ligne->id) }}"
                                            data-group_sanguinL="{{ $ligne->groupement_id}}"
                                            data-quantiteL="{{ $ligne->quantite_demandee }}"
                                            onclick="updateL('#l{{ $ligne->id }}')"
                                            class="btn btn-warning btn-outline-warning"><i class="icofont icofont-ui-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                             </table>
                             <a href="{{ route('demande.index')}}" class="btn btn-xs pull-right btn-inverse"><i class="icofont icofont-arrow-left"></i>Retour</a>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<form method="post" action="" id="form">
    <input type="hidden" value="{{ $demande->id }}" name="demande_id" id="demande_id">
    @csrf
    <!-- Modal -->
    <div class="modal" tabindex="-1" role="dialog" id="Modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="alert alert-danger" style="display:none"></div>
                <div class="modal-header">
                    <h5 class="modal-title">Ajout d'un ligne</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group form-primary">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icofont icofont-blood-drop"></i></span>
                            <select title="Groupe Sanguin" name="groupement_id" id="groupement_id" class="form-control">
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
                            <span class="input-group-addon"><i class="icofont icofont-phone"></i></span>
                            <input title="Quantité demandée" type="text" name="quantite_demandee" id="quantite_demandee" class="form-control">
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

<form action="" id="form1" method="POST">
    @csrf
    @method('put')
    <div class="modal fade" id="ModifierModal" tabindex="-1" role="dialog" aria-labelledby="ModifierModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModifierModalLabel">Modifier la ligne</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group form-primary">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icofont icofont-blood-drop"></i></span>
                            <select title="Groupe Sanguin" name="groupement_id" id="groupement_idUpdate" class="form-control">
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
                            <span class="input-group-addon"><i class="icofont icofont-phone"></i></span>
                            <input title="Quantité demandée" type="text" name="quantite_demandee" id="quantite_demandeeUpdate" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">Modifier</button>
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
                <div class="modal-header">
                    <h5 class="modal-title" id="LivreerModalLabel">Livrée la ligne</h5>
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
                                    <span class="input-group-addon"><i class="icofont icofont-phone"></i></span>
                                    <input title="Quantité demandée" type="text" name="quantite_demandee" id="quantite_demandeeLivree" readonly="" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group form-primary">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont-phone"></i></span>
                                    <input title="Quantité livrée" type="text" name="quantite_livree" id="livreeLivreer" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group form-primary">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont-phone"></i></span>
                                    <input title="Date de livraison" type="date" name="date" id="date_livraisonLivreer" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
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

    function update(ligneId) {
            $('#quantite_demandeeUpdate').val($(ligneId).attr('data-quantite'))
            $('#groupement_idUpdate').val($(ligneId).attr('data-group_sanguin'))
            $('#form1').attr('action', $(ligneId).attr('data-route'))
    }
    function updateL(ligneLId) {
            $('#quantite_demandeeLivree').val($(ligneLId).attr('data-quantiteL'))
            $('#groupement_idLivree').val($(ligneLId).attr('data-group_sanguinL'))
            $('#form2').attr('action', $(ligneLId).attr('data-route'))
    }
    jQuery(document).ready(function(){
        jQuery('#ajaxSubmit').click(function(e){
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                }
            });
            jQuery.ajax({
                url: "{{ url('/demande/lignestore') }}",
                method: 'post',
                data: {
                    groupement_id: jQuery('#groupement_id').val(),
                    quantite_demandee: jQuery('#quantite_demandee').val(),
                    demande_id: jQuery('#demande_id').val()
                },
                success: function(result){
                   /*  if(result.errors)
                    {
                        jQuery('.alert-danger').html('');
                        jQuery.each(result.errors, function(key, value){
s
                            jQuery('.alert-danger').show();

                            jQuery('.alert-danger').append('<li>'+value+'</li>');
                        });
                    }
                    else
                    {
                    jQuery('.alert-danger').hide();
                        $('#open').hide();
                        $('#Modal').modal('hide');
                    } */

                    $('#bodyLignes').append(`<tr class='border-bottom-primary'>
                                        <td>${result.ligne.groupement.groupe_sanguin}</td>
                                        <td>${result.ligne.quantite_demandee}</td>
                                        <td>
                                            <a href='#' data-toggle='modal' data-target='#myModal' class='btn btn-warning btn-outline-warning'><i class='icofont icofont-ui-edit'></i></a>
                                            <a href='#' class='btn btn-danger btn-outline-danger'><i class='icofont icofont-ui-delete'></i></a>
                                        </td>
                                    </tr>`)
                        Query('.alert-danger').hide();
                        $('#open').hide();
                        $('#Modal').modal('hide');
                }});
        });
    });
</script>
@endsection
