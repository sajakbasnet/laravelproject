<?php

namespace App\Http\Controllers;

use App\Cars;

class Carshow extends Controller
{
    //

    public function index(Cars $cars){
    $cars= Cars::all();
    return view('inde' ,compact('cars'));
}



}
