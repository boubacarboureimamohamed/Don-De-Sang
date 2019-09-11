@extends('layouts.adminty')

@section('css')


@endsection

@section('content')

<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h3 style="text-align: center;">Liste des utilisateurs</h3>
</div>
<div class="card-block">
<div class="btn-group btn-group-sm">
     @can('creer_user')
        <a href="{{ route('users.create') }}" class="btn btn-success btn-outline-success"  style="float: none;margin: 5px;">
            <span class="icofont icofont-plus"></span> {{ (' Nouveau') }}
        </a>
    @endcan
</div>
<div class="dt-responsive table-responsive">
<table id="simpletable" class="table table-striped table-bordered nowrap">
<thead>
<tr>
<th>Nom et Prénom</th>
<th>Email </th>
<th>Rôle</th>
<th>Modifier</th>
<th>Supprimer</th>
</tr>
</thead>
<tbody>
@foreach ($users as $user)
    <tr>
<td>{{ $user->name }}</span></td>
<td>{{ $user->email }}</span></td>
<td>
@foreach ($user->roles as $role)

<span class="tabledit-span" style="">
{{ $role->name }}<br>
</span>

@endforeach
</td>
<td>

    @can('editer_user')
        <a href="{{ route('users.edit', $user) }}" class="btn btn-primary btn-outline-primary" style="float: none;margin: 5px;">
            <span class="icofont icofont-ui-edit"></span>
        </a>
    @endcan

</td>
<td>

    @can('supprimer_user')
        <form method="POST" action="{{ route('users.destroy', $user) }}" onsubmit="return confirm('Êtes-vous sûr de supprimer cet enregistrement ?');">

            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button type="submit" class="btn btn-danger btn-outline-danger" style="float: none;margin: 5px;">
                <span class="icofont icofont-ui-delete"></span>
            </button>
        </form>
    @endcan

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

@endsection
