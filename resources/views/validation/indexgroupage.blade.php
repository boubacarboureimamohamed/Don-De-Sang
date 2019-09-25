@extends('layouts.adminty')
@section('content')

<div class="col-sm-12">


            <div class="card user-card">
                <div class="card-header">
                <div class="col-md-12">
                          <h3 class="text-center txt-primary">{{ ('Groupe sanguin avec leurs seuil minimal') }}</h3>
                     </div>
                    
                </div>
                <div class="card-block">
                    <div class="top-cap-text">
                        <div class="table-responsive">
                <table  class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th scope="row">Groupe Sanguin</th>
                            <th scope="row">Seuil</th>
                            <th scope="row">Modifier</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($groupes as $groupe)
                            <tr>
                                <td>{{ $groupe->groupe_sanguin }}</td>                
                                <td>{{ $groupe->seuil }}</td>
                                 <td>
                                    <a href="#"  
                                    data-toggle="modal" data-target="#Modal" class="btn btn-primary btn-outline-primary" style="float: none;margin: 5px;"
                                    id="l{{ $groupe->id }}" data-toggle="modal" data-target="#Modal"
                                    data-route="{{ route('validation.updateseuil', $groupe) }}"
                                    data-group_sanguin="{{ $groupe->groupe_sanguin}}"
                                    data-seuil="{{ $groupe->seuil }}"
                                    onclick="update('#l{{ $groupe->id }}')"
                                    class="btn btn-warning btn-outline-warning">
                                    <span class="icofont icofont-ui-edit"></span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                        </div>
                    </div>
            
            </div>
        


</div>
<form method="post" action="{{ route('validation.updateseuil', $groupe) }}" id="form">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
    <!-- Modal -->
    <div class="modal" tabindex="-1" role="dialog" id="Modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="alert alert-danger" style="display:none"></div>
                <div class="modal-header">
                    <h5 class="modal-title">Modification du seuil d'un goupe saguin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group form-primary">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icofont icofont-"></i></span>
                            <input title="Groupe sanguin" type="text" name="groupe_sanguin" id="groupe_sanguin" readonly="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group form-primary">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icofont icofont-phone"></i></span>
                            <input title="modifier le seuil du groupe sanguin" type="text" name="seuil" id="seuil" class="form-control">
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

<script>

function update(goupeid) {
            $('#groupe_sanguin').val($(goupeid).attr('data-group_sanguin'))
            $('#seuil').val($(goupeid).attr('data-seuil'))
            $('#form').attr('action', $(goupeid).attr('data-route'))
    }
</script>

@endsection