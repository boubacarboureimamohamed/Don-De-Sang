@extends('layouts.adminty')

@section('css')

@endsection

@section('content')

<div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h2 style="text-align: center;">Génération du code à barre</h2>
            </div>
            <div class="card-block">
                <h5 style="text-align: center;">
                <?php
                    echo '<img src="data:image/png;base64,' . DNS1D::getBarcodePNG("", "C93") . '" alt="barcode"   />';
                ?>
                    <p>201909181</p>
                </h5>
            </div>
        </div>
    </div>

@endsection

@section('js')

@endsection
