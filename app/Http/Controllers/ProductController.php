<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('backend.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {   
        $categories = Category::all();
        return view('backend.products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // Validation
        $request->validate([
            
            "name" => 'required',
            
            "photo" => 'required',

            "benefit" => 'required',
            
            "category" => 'required'
         ]);
           $imageName = time().'.'.$request->photo->extension();

        $request->photo->move(public_path('backend/productsimages'),$imageName);

        $path = 'backend/productsimages/'.$imageName;


        $product = new Product;
        $product->name = $request->name;
        $product->photo = $path;
        $product->category_id = $request->category;
        $product->benefit =$request->benefit;

        $product->save();

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {   
        $categories = Category::all();
        return view('backend.products.edit',compact('categories','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
         $request->validate([
            
            "name" => 'required',
            
            "photo" => 'sometimes',

            "oldphoto" => 'required',

            "benefit" => 'required',
            
            "category" => 'required'
         ]);

          if($request->hasFile('photo')){

                $imageName = time().'.'.$request->photo->extension();

                $request->photo->move(public_path('backend/productsimages'),$imageName);

                $path = 'backend/productsimages/'.$imageName;


          }else{

            $path=$request->oldphoto;

          }

        $product->name = $request->name;
        $product->photo = $path;
        $product->category_id = $request->category;
        $product->benefit =$request->benefit;

        $product->save();

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
