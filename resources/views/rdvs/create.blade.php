@extends('layouts.adminty')
@section('content')

<div class="col-sm-12">
    <div class="card-block">
        <form id="main" method="post" action="{{ route('rdvs.store')}}" novalidate="">
                            {{ csrf_field() }}  
                            <h1 style="text-align: center;">Ajout d'une Planification de Rendez Vous</h1><br>
            <div class="row">
                <div class="col-lg-6">
                        <table class="table">
                            <tbody>
                                  <tr>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icofont icofont-calendar"></i></span>
                                            <input type="datetime-local" class="form-control" name="date_heure" id="date_heure" placeholder="Date et Heure">
                                        </div>
                                    </td>
                                 </tr>
                                  <tr>
                                    <td>
                                       <div class="input-group">
                                        <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                                        <input type="text" class="form-control" id="lieu" name="lieu" placeholder="Lieu de Rendez Vous">
                                       </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       <div class="input-group">
                                        <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                        <select name="typerdv_id" id="typerdv_id" class="form-control">
                                            @foreach($typerdvs as $typerdv)
                                                <option value="{{ $typerdv->id }}">{{ $typerdv->type_rdv }}</option>
                                            @endforeach  
                                        </select>
                                      </div>
                                    </td>
                                </tr>
                                <tr>
                                  <td>
                                    <select class="form-control select2" name="libelle">
                                            @foreach($organisations as $organisation)                                        
                                                <option value="{{ $organisation->libelle }}">{{ $organisation->libelle }}</option>
                                            @endforeach 
                                    </select>
                                  </td>
                               </tr>
                         </tbody>
                   </table>
                </div>
                <!-- end of table col-lg-6 -->
                <div class="col-lg-6">
                   <table class="table">
                        <tbody>
                             <tr>
                               <td>
                                  <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                                    <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse">
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="icofont icofont-phone"></i></span>
                                        <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Telephone">
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                  <td>
                                      <div class="input-group">
                                            <span class="input-group-addon"><i class="icofont icofont-email"></i></span>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                      </div>
                                  </td>
                               </tr>                                           
                            </tbody>
                    </table>
                        </div>                              
                </div>
                            <br><br><br>                       
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary m-b-0">Enregistrer</button>

                                <a href="{{  route('rdvs.index')}}" id="edit-cancel" class="btn btn-default waves-effect">Annuler</a>                                   
                            </div>
                            </div>
                      
                    </div>
                  
             </div>
        </form>
    </div>
</div>


@endsection

@section('js')
<script>

$(".select2").select2({

    tags: true

});
</script>
@endsection


