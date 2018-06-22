<?php
namespace App\Http\Controllers;

use App\Http\Models\Movie;

class HomeController extends Controller{

    public function index(){
        $Movie = new Movie();
        $Movie->setTitle('toto');
        $Movie->setImage('toto/tutu.jpg');
        $Movie->setDescription('description trop super cooOOOoooOOool');
        $Movie->setCategory('Enfants');
        $Movie->setDuration('6 jours');
        $Movie->save();

        return view('home', ['title'=>'Home']);
    }

}