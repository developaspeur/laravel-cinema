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
Route::get('/movies/{id}', 'MoviesController@show');

// Tarifs du cinéma
Route::get('/prices', 'PricesController@index');
