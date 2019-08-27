@extends('layouts.adminty')

@section('css')

    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
@endsection

@section('content')

<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h2 style="text-align: center;">Liste des utilisateurs</h2>
</div>
<div class="card-block">
<div class="btn-group btn-group-sm" style="float: none; ">
    <a href="{{ route('users.create') }}" class="btn btn-success"  style="float: none;margin: 5px;">
       <span class="icofont icofont-plus"></span> {{ (' Nouveau') }}
    </a>
</div>
<div class="data_table_main table-responsive dt-responsive">
<table id="simpletable" class="table  table-striped table-bordered nowrap">
<thead>
<tr>
<th>Nom et Prénom</th>
<th>Email </th>
<th>Rôle</th>
<th class="tabledit-toolbar-column">Modifier</th>
<th class="tabledit-toolbar-column">Supprimer</th>
</tr>
</thead>
<tbody>
@foreach ($users as $user)
    <tr>
<td class="tabledit-view-mode"><span class="tabledit-span" style="">{{ $user->name }}</span></td>
<td class="tabledit-view-mode"><span class="tabledit-span" style="">{{ $user->email }}</span></td>
<th scope="row">
@foreach ($user->roles as $role)

<span class="tabledit-span" style="">
{{ $role->name }}<br>
</span>

@endforeach
</th>
<td style="white-space: nowrap; width: 1%;">
<div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
    <div class="btn-group btn-group-sm" style="float: none;">
    <a href="{{ route('users.edit', $user) }}" class="btn btn-sm btn-primary waves-effect waves-light" style="float: none;margin: 5px;">
    <span class="icofont icofont-ui-edit"></span></a>
    </div>
</div>
</td>
<td style="white-space: nowrap; width: 1%;">
<div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
    <div class="btn-group btn-group-sm" style="float: none;">
    <form method="POST" action="{{ route('users.destroy', $user) }}" onsubmit="return confirm('Êtes-vous sûr de supprimer cet enregistrement ?');">

        {{ csrf_field() }}
        {{ method_field('DELETE') }}

    <button type="submit" class="btn btn-danger waves-effect" data-type="danger" data-from="top" data-align="right" data-animation-in="animated bounceIn" data-animation-out="animated bounceOut">
    <span class="icofont icofont-ui-delete"></span></button>
    </form>
    </div>
</div>
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
    <!-- data-table js -->
    <script type="text/javascript" src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
@endsection
