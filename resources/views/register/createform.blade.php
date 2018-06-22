@extends('layout')
 
@section('content')
 
    <h2>Inscription</h2>
    <form method="POST" action="/register">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Nom :</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
 
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
 
        <div class="form-group">
            <label for="password">Mot de Passe :</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirmation du Mot de Passe :</label>
            <input type="password" class="form-control" id="password_confirmation"
                   name="password_confirmation">
        </div>
 
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Validé</button>
        </div>
        @include('partials.formerrors')
    </form>
 
@endsection