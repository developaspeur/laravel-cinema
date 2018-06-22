<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Films;
use Illuminate\Support\Facades\DB;

class FilmController extends Controller
{
  public function index(){

      return view('createFilm', ['title'=>'film']);
  }

  public function create(Request $request)
  {
    $titre = $request['titre'];
    $comment = $request['comment'];
    $picture = $request['picture'];
    $genre = $request['genre'];
    $duree = $request['duree'];
    $data = array('titre'=>$titre, 'comment'=>$comment, 'picture'=>$picture, 'genre'=>$genre, 'duree'=>$duree);
    DB::table('films')->insert($data);
    
    return view('Home', ['title'=>'home']);
  }
}
