@extends('layouts.adminty')
@section('content')

<div class="col-sm-12">
        <form id="main" method="post" action="{{ route('rdvs.store')}}" novalidate="">
                            {{ csrf_field() }}

           <div class="auth-box card">
          <div class="card-block">
          <div class="row m-b-30">
                     <div class="col-md-12">
                          <h3 class="text-center txt-primary">{{ ('Ajout d\'une Planification de Rendez Vous') }}</h3>
                     </div>
          </div>
           <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-calendar"></i></span>
                                <input type="datetime-local" class="form-control" name="date_heure"  placeholder="Date et Heure">
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                    <select name="typerdv_id" id="typerdv_id" class="form-control">
                                            @foreach($typerdvs as $typerdv)
                                                <option value="{{ $typerdv->id }}">{{ $typerdv->type_rdv }}</option>
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
                                <select class="form-control select2" name="libelle">
                                            @foreach($organisations as $organisation)
                                                <option value="{{ $organisation->libelle }}">{{ $organisation->libelle }}</option>
                                            @endforeach
                                </select>
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                                <input type="text" class="form-control" id="lieu" name="lieu" placeholder="Lieu de Rendez Vous">
                            </div>
                         </div>
                     </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-email"></i></span>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icofont icofont-phone"></i></span>
                                    <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Telephone">
                            </div>
                         </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                         <div class="form-group form-primary">
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                                    <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse">
                            </div>
                         </div>
                     </div>
                </div>
 
                <div class="text-center">
                    <button type="submit"  class="btn btn-success alert-success-msg m-b-10">Enregistrer</button>

                    <a href="{{  route('rdvs.index')}}" id="edit-cancel" class="btn btn-default waves-effect">Annuler</a>
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
</script>
@endsection


