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
<div class="dt-responsive table-responsive">
<table id="simpletable" class="table table-striped table-bordered nowrap">
<thead>
<tr>
<th>Numéo du donneur</th>
<th>Nom </th>
<th>Prenom</th>
<th>Modifier</th>
<th>Détail</th>
</tr>
</thead>
<tbody>
@foreach ($donneursexaminers as $donneursexaminer)
    <tr>
<td>{{ $donneursexaminer->num_donneur }}</span></td>
<td>{{ $donneursexaminer->nom }}</span></td>
<td>{{ $donneursexaminer->prenom }}</span></td>
<td>
    <a href="" class="btn btn-primary btn-outline-primary" style="float: none;margin: 5px;">
    <span class="icofont icofont-ui-edit"></span></a>
</td>
<td>
    <a href="" class="btn btn-info btn-outline-info" style="float: none;margin: 5px;">
    <span class="icofont icofont-eye-alt"></span></a>
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
