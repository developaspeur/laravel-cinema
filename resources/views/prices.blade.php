@extends('layout')
@section('content')
<div class="row prices">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Normal</h5>
                <h2 class="card-text">9,80€</h2>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Étudiants</h5>
                <h2 class="card-text">6,70€</h2>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Moins de 18 ans</h5>
                <h2 class="card-text">6,20€</h2>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Moins de 14 ans</h5>
                <h2 class="card-text">4,90€</h2>
            </div>
        </div>
    </div>
</div>
@endsection