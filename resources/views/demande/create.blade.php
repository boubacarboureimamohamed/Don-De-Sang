@extends('layouts.adminty')
@section('content')

<div class="col-sm-12">
        <form id="main" method="post" action="{{ route('demande.store')}}" novalidate="">
                            {{ csrf_field() }}
           <div class="auth-box card">
          <div class="card-block">
          <div class="row m-b-30">
                     <div class="col-md-12">
                          <h3 class="text-center txt-primary">{{ ('Demande des poches de sang') }}</h3>
                     </div>
          </div>
           <div class="row">
                <div class="col-sm-6">
                    <div class="form-group form-primary">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icofont icofont-calendar"></i></span>
                            <input type="date" title="Date de la demande" class="form-control" name="date" id="date" placeholder="Date et Heure">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-primary">
                        <div class="input-group">
                            <select class="form-control select2" name="libelle">
                                @foreach($beneficiaires as $beneficiaire)
                                    <option  title="Bénéficiaire" value="{{ $beneficiaire->libelle }}">{{ $beneficiaire->libelle }}</option>
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
                                <input type="text" title="Téléphone Bénéficiaire" class="form-control" id="telephone" name="telephone" placeholder="Telephone">
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-email"></i></span>
                                <input type="email" title="Email Bénéficiaire" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                        </div>
                     </div>
                </div>
                <div class="row">
                     <div class="col-sm-6">
                        <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                                <input type="text" title="Adresse Bénéficiaire" class="form-control" id="adresse" name="adresse" placeholder="Adresse">
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
                                <th>Group sanguin:</th>
                                <th>Quantité demandée:</th>
                                <th style="text-align: center"><a href="#" class="btn btn-success btn-outline-success" id="addLigne"><i class="icofont icofont-plus"></i></a></th>
                            </tr>
                        </thead>
                        <tbody id="ligne">
                            <tr>
                                <td>
                                    <div class="col-sm-8">
                                        <div class="form-group form-primary">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="icofont icofont-phone"></i></span>
                                                <select name="groupement[]" id="groupement[]" class="form-control">
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
                                <div class="col-sm-6">
                                    <div class="form-group form-primary">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icofont icofont-phone"></i></span>
                                            <input type="text" name="quantite_demandee[]" id="quantite_demandee[]" class="form-control" placeholder="Quantité demandée"value="{{ old('quantite_demandee') }}">
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
                    <button type="submit" class="btn btn-success m-b-0">Enregistrer</button>
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
            '<div class="col-sm-8">'+
                '<div class="form-group form-primary">'+
                    '<div class="input-group">'+
                        ' <span class="input-group-addon"><i class="icofont icofont-phone"></i></span>'+
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
            '<div class="col-sm-6">'+
                '<div class="form-group form-primary">'+
                    '<div class="input-group">'+
                        ' <span class="input-group-addon"><i class="icofont icofont-phone"></i></span>'+
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


