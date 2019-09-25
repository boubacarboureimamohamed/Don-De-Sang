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
                <h3 class="text-center txt-primary">{{ ('Détail sur le donneur') }}</h3>
            </div>
            <div class="card-block">
                <div class="row">
                    <div class="col-lg-12 col-xl-6">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <tbody>
                                    <tr>
                                        <th scope="row">Numéro</th>
                                        <td>{{ $as->num_donneur }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nom</th>
                                        <td>{{ $as->nom }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Date de naissance</th>
                                        <td>{{ $as->date_naiss }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nationalite</th>
                                        <td>{{ $as->nationalite }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Téléphone</th>
                                        <td>{{ $as->telephone }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="row">Profession</th>
                                        <td>{{ $as->profession }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Prénom </th>
                                        <td>{{ $as->prenom }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Lieu de naissance</th>
                                        <td>{{ $as->lieu_naiss }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Sexe</th>
                                        <td>{{ $as->sexe }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Email</th>
                                        <td>{{ $as->email }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Organisation</th>
                                        <td>{{ $ls->organisation ? $ls->organisation->libelle : '' }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('donneurs.index')}}" class="btn btn-xs pull-right btn-inverse"><i class="icofont icofont-arrow-left"></i>Retour</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="page-body">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-success btn-outline-success" data-toggle="modal" data-target="#Modal" id="open">Ajouter une situation</button>
                </div>
                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <table class="table table-striped table-bordered nowrap">
                            <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Situation matrimoniale</th>
                                        <th>Situation marié</th>
                                        <th>Modifier</th>
                                    </tr>
                            </thead>
                            <tbody>
                                @foreach ($as->situationmats as $a)
                                <tr>
                                    <td>{{ $a->pivot->date }}</td>
                                    <td>{{ $a->situation_matrimoniale }}</td>
                                    @if(isset($a->situationmariee))
                                        @if($a->situationmariee == '1')
                                        <td class="tabledit-view-mode">{{$a->situationmariee = 'Polygame'}} </td>
                                        @elseif($a->situationmariee == '0')
                                        <td class="tabledit-view-mode">{{$a->situationmariee = 'Monogame'}} </td>
                                        @endif
                                    @else
                                    <td class="tabledit-view-mode">{{ $a->situationmariee = ''}}  </td> 
                                    @endif
                                    <td>
                                        <a href="{{ route('donneurs.updatesituation', $a) }}"
                                            id="l{{ $a->id }}" data-toggle="modal" data-target="#ModifierSModal"
                                            data-route="{{ route('donneurs.updatesituation', $a->id) }}"
                                            data-situation_matrimoniale="{{ $a->situation_matrimoniale}}"
                                            data-situationmariee="{{ $a->situationmariee}}"
                                            onclick="updateL('#l{{ $a->id }}')"
                                            class="btn btn-warning btn-outline-warning waves-effect waves-light">
                                            <span class="icofont icofont-ui-edit"></span>
                                        </a>
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
    <div class="col-sm-6">
            <div class="page-body">
                <div class="card">
                    <div class="card-header">
                        <button type="button" class="btn btn-success btn-outline-success" data-toggle="modal" data-target="#ModalT" id="open">Ajouter un type</button>
                    </div>
                    <div class="card-block">
                        <div class="dt-responsive table-responsive">
                            <table class="table table-striped table-bordered nowrap">
                                <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Type de donneur</th>
                                            <th>Organisation</th>
                                            <th>Modifier</th>
                                        </tr>
                                </thead>
                                <tbody>
                                    @foreach ($as->typedonneurs as $a)
                                    <tr>
                                        <td>{{ $a->pivot->date }}</td>
                                        <td>{{ $a->type_donneur }}</td>
                                    @endforeach
                                    @foreach ($as->organisations as $a)
                                        <td>{{ $a->libelle }}</td>
                                    @endforeach
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
    <form method="post" action="{{ route('donneurs.storesituation')}}" id="form">
            <input type="hidden" value="{{ $as->id }}" name="donneur" id="donneur">
            @csrf
            <!-- Modal -->
        <div class="modal" tabindex="-1" role="dialog" id="Modal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="alert alert-danger" style="display:none"></div>
                        <div class="modal-header">
                            <h5 class="modal-title">Ajout d'une situation</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group form-primary">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                    <select name="situation_matrimoniale" title="Selectionner la situation matrimonial du donneur" onChange="mafonction1(this.selectedIndex);" data-toggle="tooltip" id="situation_matrimoniale" class="form-control">
                                        <option value="Célibataire">Célibataire</option>
                                        <option value="Veuf(ve)">Veuf(ve)</option>
                                        <option value="Divorcé(e)">Divorcé(e)</option>
                                        <option value="Marié(e)">Marié(e)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group form-primary">
                                <div class="form-radio" style="display: none;" id="divS">
                                    <div class="input-group">
                                        <div class="radio radiofill radio-inline">
                                            <label>
                                                <input type="radio" id="situationmariee" name="situationmariee" value="0"><i class="helper"></i> Monogame
                                            </label>
                                        </div>
                                        <div class="radio radiofill radio-inline">
                                            <label>
                                                <input type="radio" id="situationmariee" name="situationmariee" value="1"><i class="helper"></i> Polygame
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                            <button  class="btn btn-primary" id="ajaxSubmit">Ajouter</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    <!-- Extra Large table end -->
    <form method="post" action="{{ route('donneurs.storetypedonneur')}}" id="form">
            <input type="hidden" value="{{ $as->id }}" name="donneur" id="donneur">
            @csrf
            <!-- Modal -->
        <div class="modal" tabindex="-1" role="dialog" id="ModalT">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="alert alert-danger" style="display:none"></div>
                        <div class="modal-header">
                            <h5 class="modal-title">Ajout d'un type</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group form-primary">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                    <select name="typedonneur_id" title="Selectionner le type de donneur" size="1" onChange="mafonction(this.selectedIndex);" data-toggle="tooltip" id="typedonneur_id"  class="form-control">
                                        @foreach($ts as $t)
                                            <option value="{{ $t->id }}"> {{ $t->type_donneur }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6" style="display:none;" id="divorg">
                                <div class="form-group form-primary">
                                   <div class="input-group">
                                       <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                       <select name="organisation_id" title="Entrer l'organisation du donneur" data-toggle="tooltip"  id="organisation_id" class="form-control">
                                           @foreach($os as $o)
                                           <option selected="selected"></option>
                                           <option value="{{ $o->id }}"> {{ $o->libelle }} </option>
                                           @endforeach
                                       </select>
                                   </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                            <button  class="btn btn-primary" id="ajaxSubmit">Ajouter</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
<form method="post" id="form2">
    <input type="hidden" value="{{ $as->id }}" name="donneur" id="donneur">
    @csrf
    <!-- Modal -->
<div class="modal" tabindex="-1" role="dialog" id="ModifierSModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="alert alert-danger" style="display:none"></div>
                <div class="modal-header">
                    <h5 class="modal-title">Modifier la situation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group form-primary">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icofont icofont"></i></span>
                            <select name="situation_matrimoniale" title="Selectionner la situation matrimonial du donneur" onChange="mafonction1(this.selectedIndex);" data-toggle="tooltip" id="situation_matrimonialeM" class="form-control">
                                <option value="Célibataire">Célibataire</option>
                                <option value="Veuf(ve)">Veuf(ve)</option>
                                <option value="Divorcé(e)">Divorcé(e)</option>
                                <option value="Marié(e)">Marié(e)</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-primary">
                        <div class="form-radio" style="display: none;" id="divS">
                            <div class="input-group">
                                <div class="radio radiofill radio-inline">
                                    <label>
                                        <input type="radio" id="situationmarieeM" name="situationmariee" value="0"><i class="helper"></i> Monogame
                                    </label>
                                </div>
                                <div class="radio radiofill radio-inline">
                                    <label>
                                        <input type="radio" id="situationmarieeM" name="situationmariee" value="1"><i class="helper"></i> Polygame
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                    <button  class="btn btn-primary" id="ajaxSubmit">Modifier</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
@section('js')
<script type="text/javascript">
	function mafonction1(i) {
		var divS = document.getElementById('divS');
		switch(i) {
            case 3 : divS.style.display = ''; break;
			default: divS.style.display = 'none'; break;
		}
	}
</script>
 <script type="text/javascript">
	function mafonction(i) {
		var divorg = document.getElementById('divorg');
		switch(i) {
			case 2 : divorg.style.display = ''; break;
			default: divorg.style.display = 'none'; break;
		}
	}
</script>
<script>
    function updateL(ligneLId) {
            $('#situation_matrimonialeM').val($(ligneLId).attr('data-situation_matrimoniale'))
            $('#situationmarieeM').val($(ligneLId).attr('data-situationmariee'))
            $('#form2').attr('action', $(ligneLId).attr('data-route'))
    }
</script>
@endsection
