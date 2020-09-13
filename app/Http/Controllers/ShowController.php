<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    function indexfun (){
    	$fruitherbs= Category::orderBy('name','ASC')->get();
    	$fruits = Product::where('category_id',1)->orderBy('name','ASC')->get();
        $herbs = Product::where('category_id',2)->orderBy('name','ASC')->get();
        return view('fontend.index',compact('fruits','fruitherbs','herbs'));
    }
    function loginfun (){
        return view('fontend.login');
    }
    function registerfun (){
        return view('fontend.register');
    }
}
