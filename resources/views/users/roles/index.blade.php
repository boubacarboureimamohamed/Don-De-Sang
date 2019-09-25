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
     @can('creer_role')
        <a href="{{ route('roles.create') }}" class="btn btn-success btn-outline-success"  style="float: none;margin: 5px;">
        <span class="icofont icofont-plus"></span> {{ (' Nouveau') }}
        </a>
     @endcan
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
<button class="btn btn-primary btn-round btn-mini">{{ $permission->name }}</button><br>
@endforeach
</td>
    @can('editer_role')
<td>
    <a href="{{ route('roles.edit', $role) }}" class="btn btn-primary btn-outline-primary" style="float: none;margin: 5px;">
        <span class="icofont icofont-ui-edit"></span>
    </a>
</td>
    @endcan
    @can('supprimer_role')
<td>
    <form method="POST" action="{{ route('roles.destroy', $role) }}" id="form{{ $role->id }}">

        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        <button type="button" onclick="confirmation('#form{{ $role->id }}')" class="btn btn-danger btn-outline-danger" style="float: none;margin: 5px;">
            <span class="icofont icofont-ui-delete"></span>
        </button>
    </form>
</td>
    @endcan
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
    <script>

     function confirmation(target)
        {
            swal({
                title: "Êtes-vous sûr ???",
                text: "Une fois supprimé, vous ne pourrez plus récupérer cet enregistrement! ",
                type: "warning",
                showCancelButton: true,
                confirmButtonText:'Oui',
                cancelButtonText:'Non'

            }).then(function() {
                $(target).submit();
            });
        }

    </script>
@endsection
