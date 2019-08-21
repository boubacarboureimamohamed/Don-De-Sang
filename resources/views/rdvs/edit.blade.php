@extends('layouts.adminty')
@section('content')

<div class="col-sm-12">

   <div class="card-block">
        <form id="main" method="post" action="{{ route('rdvs.update', $rdv) }}" novalidate="">
                {{ csrf_field() }}
                {{ method_field('PUT') }}   
                            <h2 style="text-align: center;">Modification d'une Planification de Rendez Vous</h2><br>
            <div class="row">
                <div class="col-lg-6">                   
                    <table class="table">
                        <tbody>
                            <tr>
                              <td>
                                  <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont-calendar"></i></span>
                                    <input type="text" class="form-control" name="date_heure" id="date_heure" value="{{ $rdv->date_heure }}">
                                  </div>
                               </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                                        <input type="text" class="form-control" id="lieu" name="lieu" value="{{ $rdv->lieu }}">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="icofont icofont"></i></span>
                                       <select id="typerdv_id" name="typerdv_id" class="form-control">
                                            @foreach( $typerdvs as $typerdv )
                                                <option value="{{ $typerdv->id }}" @if($typerdv->id == $rdv->typerdv_id) {{ 'selected' }} @endif>{{ $typerdv->type_rdv }}                                                </option>
                                            @endforeach
                                       </select>   
                                    </div>
                              </td>
                            </tr>
                            <tr>
                                <td>
                                     <select class="form-control select2" name="libelle">
                                        @foreach($organisations as $organisation)
                                            <option value="{{ $organisation->libelle }}" @if($organisation->id == $rdv->organisation_id) {{ 'selected' }} @endif>{{ $organisation->libelle }}</option>
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
                                    <input type="text" class="form-control" id="adresse" name="adresse" value="{{ $rdv->organisation->adresse }}">
                                   </div>
                                </td>
                              </tr>
                               <tr>
                                  <td>
                                      <div class="input-group">
                                        <span class="input-group-addon"><i class="icofont icofont-phone"></i></span>
                                        <input type="text" class="form-control" id="telephone" name="telephone" value="{{ $rdv->organisation->telephone}}">
                                     </div>
                                  </td>
                               </tr>
                               <tr>
                                  <td>
                                       <div class="input-group">
                                         <span class="input-group-addon"><i class="icofont icofont-email"></i></span>
                                         <input type="email" class="form-control" id="email" name="email" value="{{ $rdv->organisation->email}}">
                                       </div>
                                  </td>
                               </tr>                                          
                        </tbody>
                    </table>
                                
                     
<br><br><br><br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary m-b-0">Modifier</button>
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


