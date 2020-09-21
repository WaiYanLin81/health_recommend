<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Post;
use App\Category;
use App\Disease;

class ShowController extends Controller
{
    public function __construct()

    {
        // $this->middleware('role:Admin')->only('productdetailfun','diseasedetailfun');
        // $this->middleware('role:Customer')->only('productdetailfun','diseasedetailfun');
         $this->middleware('auth')->only('productdetailfun','diseasedetailfun');
    }

    function indexfun (){
    	$fruits = Product::where('category_id',1)->orderBy('id','ASC')->get();
        $herbs  = Product::where('category_id',2)->orderBy('id','ASC')->get();
    	$products = Product::latest()->paginate(3);
    	$latests = Product::latest()->paginate(12);
        $posts = Post::latest()->paginate(3);
        $categories = Category::all();
        return view('index',compact('fruits','products','posts','categories','herbs','latests'));
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

    // public function diseasedetailfun($id){
    //     $disease = Disease::find($id);
    //     return view('disease.diseasedetailpage',compact('disease'));
    // }

    public function blogfun()
    {
        $latests =Post::latest()->paginate(6);
        $posts = Post::paginate(4);
        return view('blog',compact('posts','latests'));
    }

    public function blogdetailfun($id)
    {      
         $latest= Post::latest()->paginate(6);
         $blogs = Post::find($id);
         $blog  = Post::inRandomOrder()->take(3)->get();
        return view('blogdetail',compact('blogs','blog','latest'));
    }

    public function fruitsfun($id)
    {
        $category = Category::find($id);
        $product = Product::all();
        return view('fruits',compact('category','product'));
    }

    // star disease

    public function diseasefun(Request $request)

    {    
        $search = $request->search;
        if($request->search)
        {
            $diseases = Disease::where('name','LIKE','%'.$search.'%')->get();
        }else{

        $diseases = Disease::orderBy('name','ASC')->get(); 
        } 
        return view('disease.disease',compact('diseases'));
    }


     public function diseasedetailfun($id)
    {
        $products = Product::all();
        $diseases = Disease::find($id);
        return view('disease.diseasedetail',compact('diseases','products'));
    }
    // end disease


    public function productsearchpage(Request $request)
    {
        $search = $request->search;
        if($request->search){
            $products = Product::where('name','like','%'.$search.'%')->orderBy('name','ASC')->get();
             return view('searchproductbyname',compact('products'));
        }else{

             // return view ('searchproductbyname')->withMessage('No Details found. Try to search again !');
             return view ('searchproductbyname')->withErrors(['no_post_result' => 'There is no result 😔']);
        }

       
    }

    Public function contactfun()
    {
        return view('contact');
    }


}
