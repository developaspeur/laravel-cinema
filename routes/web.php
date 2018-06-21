<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Accueil
Route::get('/', function () {
    return view('home');
});

// A propos
Route::get('/about', function () {
    return view('about');
});

// Liste des films
Route::get('/movies', function () {
    return view('movies');
});

// Description d'un film
Route::get('/movies/{id}', function ($id) {
    return view('movie');
});

// Tarifs du cinéma
Route::get('/prices', function () {
    return view('prices');
});
