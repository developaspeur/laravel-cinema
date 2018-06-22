<?php
namespace App\Http\Controllers;

class PricesController extends Controller{

    public function index(){

        return view('prices', ['title'=>'Prices']);
    }

}