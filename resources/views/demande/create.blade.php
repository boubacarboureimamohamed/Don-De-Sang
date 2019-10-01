@extends('layouts.adminty')
@section('content')

<div class="col-sm-12">
    @php
         $color = 'pink';
    @endphp
   <div class="card bg-c-{{$color}}">
        <div class="card-header">
          <h3 class="text-center text-white">
                <i class="icofont icofont-blood-drop f-30 text-white"></i>
                    {{ ('Ajout d\'une demande de sang') }}
                <i class="icofont icofont-blood-drop f-30 text-white"></i>
          </h3>
        </div>
    </div>
</div>
<div class="col-sm-12">
        <form id="main" method="post" action="{{ route('demande.store')}}" novalidate="">
                            {{ csrf_field() }}
           <div class="auth-box card">
          <div class="card-block">
           <div class="row">
                <div class="col-sm-6">
                    <div class="form-group form-primary">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icofont icofont-calendar"></i></span>
                            <input type="date" data-toggle="tooltip" title="Entrez la date de la demande" class="form-control" name="date" id="date" placeholder="Date et Heure">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-primary">
                        <div class="input-group">
                            <select class="form-control select2" name="libelle">
                                @foreach($beneficiaires as $beneficiaire)
                                    <option  title="Selectionner le bénéficiaire" data-toggle="tooltip" value="{{ $beneficiaire->libelle }}">{{ $beneficiaire->libelle }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-phone"></i></span>
                                <input type="text" title="Entrer le numéro de téléphone du bénéficiaire" data-toggle="tooltip" class="form-control phone" data-mask="9999-99-99-99-99" id="telephone" name="telephone" placeholder="Telephone">
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-email"></i></span>
                                <input type="email" title="Entrer l email du bénéficiaire" data-toggle="tooltip" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                        </div>
                     </div>
                </div>
                <div class="row">
                     <div class="col-sm-6">
                        <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                                <input type="text" title="Entrer l'adresse du bénéficiaire" data-toggle="tooltip" class="form-control" id="adresse" name="adresse" placeholder="Adresse">
                            </div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                                <h4 class="text-center">{{ ('Les lignes de demande') }}</h4></th>
                         </div>
                     </div>
                </div>
                <table id="example-2" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>Group sanguin</th>
                                <th>Type de poche</th>
                                <th>Quantité demandée</th>
                                <th style="text-align: center"><a href="#" class="btn btn-success btn-outline-success" id="addLigne"><i class="icofont icofont-plus"></i></a></th>
                            </tr>
                        </thead>
                        <tbody id="ligne">
                            <tr>
                                <td>
                                    <div class="col-sm-10">
                                        <div class="form-group form-primary">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="icofont icofont-blood-drop"></i></span>
                                                <select name="groupement[]" title="sélectionner le groupe sanguin" data-toggle="tooltip" id="groupement[]" class="form-control">
                                                    @foreach($groupements as $groupement)
                                                        <option value="{{ $groupement->id }}">
                                                            {{ $groupement->groupe_sanguin }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                <div class="col-sm-10">
                                    <div class="form-group form-primary">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                            <select name="type_poche[]" title="sélectionner le type de poche de sang" data-toggle="tooltip" id="type_poche[]" class="form-control">
                                                <option value="Double">Double</option>
                                                <option value="Simple">Simple</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                </td>
                                <td>
                                <div class="col-sm-8">
                                    <div class="form-group form-primary">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icofont icofont-test-tube-alt"></i></span>
                                            <input type="text" name="quantite_demandee[]" title="Entrer la quantité demandée" data-toggle="tooltip" id="quantite_demandee[]" class="form-control" placeholder="Quantité demandée"value="{{ old('quantite_demandee') }}">
                                        </div>
                                    </div>
                                </div>
                                </td>
                                <td style="text-align: center"><a href="#" class="btn btn-danger btn-outline-danger remove"><i class="icofont icofont-minus"></i></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                <div class="text-center">
                    <a href="{{  route('demande.index')}}" id="edit-cancel" class="btn btn-default waves-effect">Annuler</a>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div><hr>
                  <div class="row">
                      <div class="col-md-11">
                        <p class="text-inverse text-left m-b-0">Don Du Sang</p>
                        <p class="text-inverse text-left">Blood Donation</a></p>
                      </div>
                      <div class="col-md-1">
                         <img src="{{ asset('images/DDS/logo-blue.png') }}" alt="small-logo.png">
                      </div>
             </div>
           </div>
         </div>
      </div>
    </div>
</form>
</div>


@endsection

@section('js')
<script>

$(".select2").select2({

    tags: true

});
$('#addLigne').on('click', function (f) {
  f.preventDefault()
    addLigne();
});
function addLigne() {
    var tr = '<tr>'+
        '<td>'+
            '<div class="col-sm-10">'+
                '<div class="form-group form-primary">'+
                    '<div class="input-group">'+
                        ' <span class="input-group-addon"><i class="icofont icofont-blood-drop"></i></span>'+
                        '<select name="groupement[]" id="groupement[]" class="form-control">'+
                            '@foreach($groupements as $groupement)'+
                                '<option value="{{ $groupement->id }}">'+
                                '   {{ $groupement->groupe_sanguin }}'+
                                '</option>'+
                            '@endforeach'+
                        '</select>'+
                    '</div>'+
                '</div>'+
            '</div>'+
        '</td>'+
        '<td>' +
            '<div class="col-sm-10">'+
                '<div class="form-group form-primary">'+
                    '<div class="input-group">'+
                        '<span class="input-group-addon"><i class="icofont icofont"></i></span>'+
                        '<select name="type_poche[]" id="type_poche[]" class="form-control">'+
                            '<option value="Double">Double</option>'+
                            '<option value="Simple">Simple</option>'+
                        ' </select>'+
                    '</div>' +
                '</div>' +
            '</div>' +
        '</td>' +
        '<td>' +
            '<div class="col-sm-8">'+
                '<div class="form-group form-primary">'+
                    '<div class="input-group">'+
                        ' <span class="input-group-addon"><i class="icofont icofont-test-tube-alt"></i></span>'+
                        '<input type="text" name="quantite_demandee[]" id="quantite_demandee" class="form-control" placeholder="Quantité demandée"value="{{ old('quantite_demandee') }}">'+
                    '</div>' +
                '</div>' +
            '</div>' +
        '</td>' +
        '<td style="text-align: center"><a href="#" class="btn btn-danger btn-outline-danger remove"><i class="icofont icofont-minus"></i></a></td>'+
        '</tr>';
    $('#ligne').append(tr);
};
$('#ligne').on('click', '.remove', function () {
    $(this).parent().parent().remove();
})
</script>
@endsection


