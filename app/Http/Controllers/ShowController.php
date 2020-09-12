<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    function indexfun (){
        return view('index');
    }
    function loginfun (){
        return view('login');
    }
    function registerfun (){
        return view('register');
    }
}
