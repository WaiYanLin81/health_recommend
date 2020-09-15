<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Post;

class ShowController extends Controller
{
    function indexfun (){
    	$fruits = Product::where('category_id',1)->orderBy('id','ASC')->get();
    	$products = Product::latest()->paginate(3);
    	$latests = Product::latest()->paginate(3);
        return view('index',compact('fruits','products','latests'));
    }
    function loginfun (){
        return view('login');
    }
    function registerfun (){
        return view('register');
    }

    public function detailfun($id){
    	$product = Product::find($id);
    	return view('productdetail',compact('product'));
    }

    public function blogfun()
    {
        $post = Post::all();
        return view('blog',compact('post'));
    }

    public function blogdetailfun()
    {
        return view('blogdetail');
    }
}
