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
                    {{ ('Le seuil minimal par groupe sanguin') }}
                <i class="icofont icofont-blood-drop f-30 text-white"></i>
          </h3>
        </div>
    </div>
</div>
<div class="col-sm-12">
    <div class="card user-card">
        <div class="card-block">
            <div class="top-cap-text">
                <div class="table-responsive">
        <table class="table table-striped table-bordered nowrap" id="">
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
</div> <hr>
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
                            <span class="input-group-addon"><i class="icofont icofont-blood-drop"></i></span>
                            <input title="Groupe sanguin" type="text" name="groupe_sanguin" id="groupe_sanguin" readonly="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group form-primary">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icofont icofont"></i></span>
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


<script>


$(document).ready(function () {

$('#table').DataTable({

language: {

    url: "{{ asset('bower_components/data-table/French.json') }}"

}

});

});

</script>

@endsection