@extends('layouts.adminty')

@section('css')


@endsection

@section('content')

<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h3 style="text-align: center;">Liste des donneurs examinés</h3>
</div>
<div class="card-block">
<div class="btn-group btn-group-sm">
    <a href="" class="btn btn-success btn-outline-success"  style="float: none;margin: 5px;">
       <span class="icofont icofont-plus"></span> {{ (' Nouveau') }}
    </a>
</div>
<div class="dt-responsive table-responsive">
<table id="simpletable" class="table table-striped table-bordered nowrap">
<thead>
<tr>
<th>Numéo du donneur</th>
<th>Nom </th>
<th>Prenom</th>
<th>Modifier</th>
<th>Supprimer</th>
</tr>
</thead>
<tbody>
@foreach ($donneursexaminers as $donneursexaminer)
    <tr>
<td>{{ $donneursexaminer->numdonneur }}</span></td>
<td>{{ $donneursexaminer->nom }}</span></td>
<td>{{ $donneursexaminer->prenom }}</span></td>

    {{-- <form method="POST" action="{{ route('users.destroy', $user) }}" onsubmit="return confirm('Êtes-vous sûr de supprimer cet enregistrement ?');">

        {{ csrf_field() }}
        {{ method_field('DELETE') }}

    <button type="submit" class="btn btn-danger btn-outline-danger" style="float: none;margin: 5px;">
    <span class="icofont icofont-ui-delete"></span></button>
    </form> --}}
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
