@extends('layouts.adminty')

@section('css')

@endsection

@section('content')

<div class="col-sm-12"> 
    @php
         $color = 'pink';
    @endphp
   <div class="card bg-c-{{$color}}">
        <div class="card-header">
          <h3 class="text-center text-white">
                <i class="icofont icofont-blood-drop f-30 text-white"></i>
                    {{ ('Envoie d\'une notification d\'alerte') }}
                <i class="icofont icofont-blood-drop f-30 text-white"></i>
          </h3>
        </div>
    </div>
</div>

<div class="col-sm-12"> 
   <div class="card">
    <form action="{{ route('seuilsms.store') }}" method="post">
        {{ csrf_field() }}
        <div class="card-block">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                             <h4 class="text-center">Ecrivez votre message</h4>
                        </div>
                        <div class="card-block">
                            <div class="form-group form-primary">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icofont icofont-envelope"></i></span>
                                    <textarea name="message" title="Le message à envoyer" data-toggle="tooltip" id="" value="{{ old('message') }}" cols="60" title="entrez le message a envoyer" rows="11" placeholder="Ecrivez le message" ></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                             <h4 class="text-center">Sélectionner les groupages</h4>
                        </div>
                        <div class="card-block">
                            <div class="form-group form-primary">
                                <select id='custom-headers' title="Sélectionner le ou les groupes sanguin" data-toggle="tooltip" class="searchable" name="groupe[]" multiple='multiple'>

                                    @foreach ($groupes as $groupe)
                                    <option value='{{ $groupe->id }}'>{{ $groupe->groupe_sanguin }}</option>
                                    @endforeach
                                                    
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="Submit" class="btn btn-primary">Envoyer le message</button>
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
    </form> 
    </div>
</div>

@endsection

@section('js')
   

@endsection


