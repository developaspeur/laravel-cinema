@extends('layout')
@section('content')
<div class="blur"></div>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img class="d-block w-100" src="{{URL::asset('img/img2.jpg')}}" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
            <div class="text"><h2>Titre 1</h2></div>
            <p>Procahine séance à 14h30</p>
        </div>
    </div>
    @for ($i = 3; $i <= 4; $i++)
    <div class="carousel-item">
      <img class="d-block w-100" src="{{URL::asset('img/img'.$i.'.jpg')}}" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
          <h2>Titre {{$i}}</h2>
          <p>Prochaine séance à 16h30</p>
      </div>
    </div>
    @endfor
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@endsection