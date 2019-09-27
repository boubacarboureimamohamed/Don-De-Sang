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
    @php
         $color = 'pink';
    @endphp
   <div class="card bg-c-{{$color}}"">
        <div class="card-header">
          <h3 class="text-center text-white">
                <i class="icofont icofont-blood-drop f-30 text-white"></i>
                    {{ ('Banque de sang') }}
                <i class="icofont icofont-blood-drop f-30 text-white"></i>
          </h3>
        </div>
    </div>
</div>
<div class="col-sm-12">
<div class="page-body">

    <!-- Extra Large table start -->
    <div class="card">
        <div class="card-header">
            <h4 class="text-center">{{ ('La quantité en stock par groupe sanguin ') }}</h4>
        </div>
        <div class="page-body">
            <div class="row">
                @php
                $color = '';
                @endphp
                @foreach($stocks as $stock)
                    @switch ($stock->groupe_sanguin)
                        @case('A+')
                            @php
                            $color = 'pink';
                            @endphp

                            @break;
                        @case('B+')
                            @php
                            $color = 'blue';
                            @endphp
                            @break;
                        @case('AB+')
                            @php
                            $color = 'green';
                            @endphp
                            @break;
                        @case('O+')
                            @php
                            $color = 'yellow';
                            @endphp
                            @break;
                        @case('A-')
                            @php
                            $color = 'pink';
                            @endphp
                            @break;
                        @case('B-')
                            @php
                            $color = 'blue';
                            @endphp
                            @break;
                        @case('AB-')
                            @php
                            $color = 'green';
                            @endphp
                            @break;
                        @case('O-')
                            @php
                            $color = 'yellow';
                            @endphp
                            @break;
                    @endswitch
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h4 class="text-c-{{ $color }} f-w-600">{{ $stock->groupe_sanguin }}</h4>
                                        </div>
                                        <div class="col-4 text-right">
                                            <i class="icofont icofont-blood-drop f-30 text-c-{{$color}}"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-c-{{$color}}">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-white m-b-0">{{ $stock->simple}} : {{ $stock->simple_qte }}</p>
                                            <p class="text-white m-b-0">{{ $stock->double}} : {{ $stock->double_qte }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
    <!-- Extra Large table end -->
@endsection
