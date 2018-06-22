@extends('layout')
@section('content')

<div class="span3">
    <h2>Ajouter un Film</h2>
    <form action='/createFilm' method="post">
      {{ csrf_field() }}
        <div class="form-group">
            <label>Titre</label>
            <input type="text" name="titre" class="span3">
        </div>
        <div class="form-group">
            <label>Commentaire</label>
            <input type="text" name="comment" class="span3">
        </div>
        <div class="form-group">
            <label>Jaquette</label>
            <input type="file" name="picture" class="span3">
        </div>
        <div class="form-group">
            <label>Genre</label>
            <input type="text" name="genre" class="span3">
        </div>
        <div class="form-group">
            <label>Durée</label>
            <input type="timestamp" name="duree" class="span3">
        </div>
        <div class="form-group">
            <input type="submit" value="Valider" class="btn btn-primary pull-right">
            <div class="clearfix"></div>
        </div>
    </form>
</div>


@endsection
