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
                                        <th>Action <button type="button" class="btn btn-info btn-outline-info" data-toggle="modal" data-target="#Modal" id="open">Ajouter</button>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lignes->ligne_demandes as $ligne)
                                    <tr class="border-bottom-primary">
                                        <td>{{ $ligne->groupement->groupe_sanguin }}</td>
                                        <td>{{ $ligne->quantite_demandee }}</td>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-warning btn-outline-warning"><i class="icofont icofont-ui-edit"></i></a>
                                            <a href="#" class="btn btn-danger btn-outline-danger"><i class="icofont icofont-ui-delete"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                             </table>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Modifier ligne</h4>
                    </div>
                    <form action="{{ route('demande.update1', $demande) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                    <div class="modal-body">
                        <div class="box-body">
                                <tbody id="ligne">
                                        <tr>
                                            <td>
                                                <div class="col-sm-6">
                                                    <div class="form-group form-primary">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="icofont icofont-phone"></i></span>
                                                            <select name="groupement" id="groupement" class="form-control">
                                                                @foreach($groupements as $groupement)
                                                                    <option value="{{ $groupement->id }}" @if($groupement->id == $groupement->groupement) {{ 'selected' }} @endif>
                                                                        {{ $groupement->groupe_sanguin }}
                                                                     </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                            <div class="col-sm-4">
                                                <div class="form-group form-primary">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="icofont icofont-phone"></i></span>
                                                        <input type="text" name="quantite_demandee" id="quantite_demandee" class="form-control" value="{{ $ligne->quantite_demandee }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </tbody>
                                </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModal">Ajouter ligne</h4>
                        </div>
                        <form action="#" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="box-body">

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>










<form method="post" action="{{ route('demande.lignestorestore') }}" id="form">
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
                            <span class="input-group-addon"><i class="icofont icofont-phone"></i></span>
                            <select name="groupement" id="groupement" class="form-control">
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
                            <input type="text" name="quantite_demandee" id="quantite_demandee" class="form-control">
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
@endsection

@section('js')
        <script>
        jQuery(document).ready(function(){
            jQuery('#ajaxSubmit').click(function(e){
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('input[name="_token"]').val()
                    }
                });
                jQuery.ajax({
                    url: "{{ url('/demande/lignestorestore') }}",
                    method: 'post',
                    data: {
                        groupement: jQuery('#groupement').val(),
                        quantite_demandee: jQuery('#quantite_demandee').val(),
                    },
                    success: function(result){
                        if(result.errors)
                        {
                            jQuery('.alert-danger').html('');
                            jQuery.each(result.errors, function(key, value){

                                jQuery('.alert-danger').show();

                                jQuery('.alert-danger').append('<li>'+value+'</li>');
                            });
                        }
                        else
                        {
                      jQuery('.alert-danger').hide();
                            $('#open').hide();
                            $('#Modal').modal('hide');
                        }
                    }});
            });
        });
    </script>
@endsection
