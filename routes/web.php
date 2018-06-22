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
Route::get('/', 'HomeController@index');

// A propos
Route::get('/about', 'AboutController@index');

// Liste des films
Route::get('/movies', 'MoviesController@index');

// Description d'un film
<<<<<<< HEAD
Route::get('/movies/{id}', 'MoviesController@show');

// Tarifs du cinéma
Route::get('/prices', 'PricesController@index');
=======
Route::get('/movies/{id}', function ($id) {
    return view('movie');
});

// Tarifs du cinéma
Route::get('/prices', function () {
    return view('prices');
});

// Register
Route::get('/register', 'RegisterController@createForm');
Route::post('/register', 'RegisterController@store');

// Login
Route::get('/login', 'SessionController@createSession');
Route::post('/login', 'SessionController@store');
Route::get('/logout', 'SessionController@destroy');
>>>>>>> 5ab486ff4bade92464afc7844956221fd1dd268b
