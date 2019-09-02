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
<div class="card">
<div class="card-header">
<h3 style="text-align: center;">Liste des donneurs</h3>
</div>
<div class="card-block">
<div class="btn-group btn-group-sm" style="float: none; ">
    <a href="{{ route('donneurs.add')}}" class="btn btn-success btn-outline-success"  style="float: none;margin: 5px;">
       <span class="icofont icofont-plus"></span> {{ (' Nouveau') }}
    </a>
</div>
<div class="dt-responsive table-responsive">
<table id="simpletable" class="table table-striped table-bordered nowrap">
<thead>
<tr>
<th>Numéro</th>
<th>Nom</th>
<th>Prénom</th>
<th>Type de donneur</th>
<th class="tabledit-toolbar-column">Detail</th>
<th class="tabledit-toolbar-column">Modifier</th>
<th class="tabledit-toolbar-column">Supprimer</th>
</tr>
</thead>
<tbody>
@foreach($donneurs as $donneur)
    <tr>
<td><span class="tabledit-span" style="">{{ $donneur->num_donneur }}</span></td>
<td><span class="tabledit-span" style="">{{ $donneur->nom }}</span></td>
<td><span class="tabledit-span" style="">{{ $donneur->prenom }}</span></td>
<td><span class="tabledit-span" style="">{{ $donneur->typedonneur->type_donneur }}</span></td>
<td>
    <a href="{{ route('donneurs.show', $donneur) }}" class="btn btn-info btn-outline-info" style="float: none;margin: 5px;">
    <span class="icofont icofont-eye-alt"></span></a>
</td>
<td>
    <a href="{{ route('donneurs.edit', $donneur) }}" class="btn btn-primary btn-outline-primary" style="float: none;margin: 5px;">
    <span class="icofont icofont-ui-edit"></span></a>
</td>
<td>
    <form method="POST" action="{{ route('donneurs.destroy', $donneur) }}" onsubmit="return confirm('Êtes-vous sûr de supprimer cet enregistrement ?');">

        {{ csrf_field() }}
        {{ method_field('DELETE') }}

    <button type="submit" class="btn btn-danger btn-outline-danger" style="float: none;margin: 5px;">
    <span class="icofont icofont-ui-delete"></span></button>
    </form>
</td>
</tr>
@endforeach

</tbody>
</table>
</div>
</div>
</div>

</div>

@endsection
