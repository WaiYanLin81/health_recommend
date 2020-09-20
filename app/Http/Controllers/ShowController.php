<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Post;
use App\Category;
use App\Disease;

class ShowController extends Controller
{
    function indexfun (){
    	$fruits = Product::where('category_id',1)->orderBy('id','ASC')->get();
        $herbs  = Product::where('category_id',2)->orderBy('id','ASC')->get();
    	$products = Product::latest()->paginate(3);
    	$latests = Product::latest()->paginate(3);
        $posts = Post::latest()->paginate(3);
        $categories = Category::all();
        return view('index',compact('fruits','products','latests','posts','categories','herbs'));
    }

    function loginfun ()
    {
        return view('login');
    }

    function registerfun ()
    {
        return view('register');
    }

    public function productdetailfun($id)
    {
        $product = Product::find($id);
    	return view('productdetail',compact('product'));
    }

    public function diseasedetailfun($id){
        $disease = Disease::find($id);
        return view('disease.diseasedetailpage',compact('disease'));
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

    public function fruitsfun($id)
    {
        $category = Category::find($id);
        $product = Product::all();
        return view('fruits',compact('category','product'));
    }

    public function diseasefun(Request $request)

    {    
        $search = $request->search;
        if($request->search)
        {
            $disease = Disease::where('name','LIKE','%'.$search.'%')->get();
        }else{

        $disease = Disease::all(); 
        } 
        return view('disease.disease',compact('disease'));
    }


    public function productsearchpage(Request $request)
    {
        $search = $request->search;
        if($request->search){
            $products = Product::where('name','like','%'.$search.'%')->where('category_id',1)->orderBy('name','ASC')->get();
             return view('searchproductbyname',compact('products'));
        }else{

             return view ('searchproductbyname')->withMessage('No Details found. Try to search again !');
        }

       
    }
}
