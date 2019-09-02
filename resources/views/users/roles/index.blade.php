@extends('layouts.adminty')

@section('css')
    <!-- animation nifty modal window effects css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/component.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/sweetalert/css/sweetalert.min.css') }}">
@endsection

@section('content')

<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h3 style="text-align: center;">Liste des rôles</h3>
</div>
<div class="card-block">
<div class="btn-group btn-group-sm" style="float: none; ">
    <a href="{{ route('roles.create') }}" class="btn btn-success btn-outline-success"  style="float: none;margin: 5px;">
       <span class="icofont icofont-plus"></span> {{ (' Nouveau') }}
    </a>
</div>
<div class="dt-responsive table-responsive">
<table id="simpletable" class="table table-striped table-bordered nowrap">
<thead>
<tr>
<th>Rôles</th>
<th>Permissions </th>
<th>Modifier</th>
<th>Supprimer</th>
</tr>
</thead>
<tbody>
@foreach ($roles as $role)
    <tr>
<td>{{ $role->name }}</span></td>
<td>
@foreach ($role->permissions as $permission)
<button class="btn btn-primary btn-round">{{ $permission->name }}</button>
@endforeach
</td>
<td>
    <a href="{{ route('roles.edit', $role) }}" class="btn btn-primary btn-outline-primary" style="float: none;margin: 5px;">
    <span class="icofont icofont-ui-edit"></span></a>
</td>
<td>
    <form method="POST" action="{{ route('roles.destroy', $role) }}" onsubmit="return confirm('Êtes-vous sûr de supprimer cet enregistrement ?');">

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

@section('js')
    <!-- Editable-table js -->
    <script type="text/javascript" src="{{ asset('js/edit-table/jquery.tabledit.js') }}"></script>
    <script type="text/javascript" src="{{ asset('jsedit-table/editable.js') }}"></script>
    <!-- sweet alert js -->
    <script type="text/javascript" src="{{ asset('bower_components/sweetalert/js/sweetalert.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/modal.js') }}"></script>
    <!-- sweet alert modal.js intialize js -->
    <!-- modalEffects js nifty modal window effects -->
    <script type="text/javascript" src="{{ asset('js/modalEffects.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/classie.js') }}"></script>
@endsection
