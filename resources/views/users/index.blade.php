@extends('layouts.adminty')

@section('css')


@endsection

@section('content')
<div class="col-sm-12">
    @php
         $color = 'pink';
    @endphp
    <h1 class="text-center text-white bg-c-{{$color}}">
        <i class="icofont icofont-blood-drop f-30 text-white"></i>
            {{ ('Liste des utilisateurs') }}
        <i class="icofont icofont-blood-drop f-30 text-white"></i>
    </h1>
</div>
<div class="col-sm-12">
<div class="card">
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
    @can('editer_user')
<td>
    <a href="{{ route('users.edit', $user) }}" class="btn btn-primary btn-outline-primary" style="float: none;margin: 5px;">
        <span class="icofont icofont-ui-edit"></span>
    </a>
</td>
    @endcan
    @can('supprimer_user')
<td>
    <form method="POST" action="{{ route('users.destroy', $user) }}" id="form{{ $user->id }}">

        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        <button type="button" onclick="confirmation('#form{{ $user->id }}')" class="btn btn-danger btn-outline-danger" style="float: none;margin: 5px;">
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
