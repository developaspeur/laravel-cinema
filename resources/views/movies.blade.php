@extends('layout')
@section('content')
<div class="movies">
     @for ($i = 2; $i <= 4; $i++)
    <a href="/movies/{{$i}}">
        <div class="card">
            <img class="card-img-top" src="{{URL::asset('img/img'.$i.'.jpg')}}" alt="Card image cap">
            <div class="centered">
                <button type="button" class="btn btn-outline-light see-detail">
                    Voir les séances
                </button>
            </div>
            <div class="card-body">
                <h5 class="card-title">
                    Titre {{$i}}
                </h5>
                <div class="info">
                    <span>Genre</span> - 
                    <span>2h20</span>
                </div>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </a>
    @endfor
</div>
@endsection
