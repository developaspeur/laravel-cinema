<?php
namespace App\Http\Controllers;

class MoviesController extends Controller{

    public function index(){

        return view('movies', ['title'=>'Movies list']);
    }

    public function show(){

        return view('movie', ['title'=>'Any movie']);
    }

}